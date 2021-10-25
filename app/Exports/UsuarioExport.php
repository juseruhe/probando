<?php

namespace App\Exports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Contracts\View\View;

//class UsuarioExport implements FromCollection
/*{
    /**
    * @return \Illuminate\Support\Collection
    */


   /* public function collection()
    {
        return Usuario::all();
    }
}

*/


class UsuarioExport implements FromView{

       public function view(): View{

        return view('excel',[
            "usuarios" => Usuario::all()
        ]);

       }
    
}
