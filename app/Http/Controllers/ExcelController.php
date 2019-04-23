<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Donante;
use App\Models\donativo;
use App\Models\Usuario;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function donanteExport()
    {

        Excel::create('Donantes', function ($excel) {

            $donantes = Donante::all();

            $excel->sheet('donantes_totales', function ($sheet) use ($donantes) {

                $sheet->fromModel($donantes);

            });

        })->export('xls');

    }
    public function donativosExport()
    {

        Excel::create('Donativos', function ($excel) {

            $donativo = Donativo::all();

            $excel->sheet('donativos_totales', function ($sheet) use ($donativo) {

                $sheet->fromModel($donativo);

            });

        })->export('xls');

    }
    public function usuariosExport()
    {
        Excel::create('usuarios', function ($excel) {

            $usuarios = Usuario::all();

            $excel->sheet('usuarios_totales', function ($sheet) use ($usuarios) {

                $sheet->fromModel($usuarios);

            });

        })->export('xls');
    }
}
