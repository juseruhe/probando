<?php

namespace App\Imports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;

class UsuarioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usuario([
            'rol' => $row[0],
            'nombre' => $row[1],
            'correo' => $row[2],
            'tipo_documento' => $row[3],
            'numero_documento' => $row[4],
            'ocupacion' => $row[5],
            'estado' => $row[6],
        ]);
    }
}
