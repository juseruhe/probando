<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(){

        return view('tabla.index');
    }

    public function datatable(){
        return view('tabla.datatable');
    }
 
}
