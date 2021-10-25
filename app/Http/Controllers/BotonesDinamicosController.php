<?php

namespace App\Http\Controllers;

use App\Exports\UsuarioExport;
use App\Imports\CorreoPdfImport;
use Illuminate\Http\Request;

use App\Models\Usuario;

use Illuminate\Support\Facades\Mail;

use App\Mail\Mensaje;

use Dompdf\Adapter\PDFLib;

use Maatwebsite\Excel\Facades\Excel;

use App\Imports\UsuarioImport;
use App\Mail\PdfMail;
use PhpOffice\PhpWord\TemplateProcessor;


class BotonesDinamicosController extends Controller
{
    public function index(){

        return view('botones');
    }

   

    public function store(Request $request){

        Usuario::create($request->all());

        return redirect()->route('botones.index');
    }

   

    public function correo(Request $request){

        $message = $request->except('_token');

       Mail::to($request->para)->send(new Mensaje($message));

       return "Mensaje Enviado";
    }

    public function pdf(){

        $usuarios = Usuario::all();

        $pdf = \PDF::loadView('usuarios',compact('usuarios'));

        return $pdf->download('usuarios.pdf');
    }

    public function excel(){

        return Excel::download(new UsuarioExport,'Usuarios.xlsx');
    }


    public function importarExcel(Request $request){

        $archivo = $request->file("archivo");

        $archivo->store('laravel-excel','public');

        Excel::import(new UsuarioImport,$archivo);

   

       return redirect()->route('botones.index');

    }

    public function exportarWord(){

        $word = new TemplateProcessor('documento.docx');

        $word->setValue('Colombia','Colombia, oficialmente República de Colombia, es un país soberano
         situado en la región noroccidental de América del Sur, que se constituye en un estado unitario,
          social y democrático de derecho cuya forma de gobierno es presidencialista. Es una república
         organizada políticamente
         en 32 departamentos descentralizados y el Distrito Capital de Bogotá, 
         sede del Gobierno Nacional');

       $word->saveAs('archivo.docx');

       return response()->download('archivo.docx')->deleteFileAfterSend(true);


       

    }


    public function correoPdf(Request $request){

        $archivo = $request->file("archivo");


        Excel::import(new CorreoPdfImport,$archivo);


        return "Recibido";



    }


    
  
}
