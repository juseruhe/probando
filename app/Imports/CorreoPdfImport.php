<?php

namespace App\Imports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Mail\PdfMail;
use Illuminate\Support\Facades\Mail;



class CorreoPdfImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
{

  return  Mail::to($row[0])->send(new PdfMail($row[0]));


       
    }
}
