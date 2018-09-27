<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
class CorreoController extends Controller
{
    //

    public function enviarCorreo(Request $request) {
        $reglas = [
            'nombre' => 'required|max:35',
            'email' => 'required|max:35',
            'compania' => 'required|max:75',
            'mensaje' => 'required|max:1024'
        ];



        $carga = $request->all();
        $errores = $this->validate($carga, $reglas);

        if(count($errores) > 0) {
            return $this->error($errores, 403);
        }
        $carga['fecha'] = Carbon::now('America/Mexico_City')->format('d/m/Y');
        $errores = Mail::send('emails.correo', ['carga' => $carga], function ($m){
            $m->from('noreply@colorcentro.com.mx', 'Colorcentro');

            $m->to(['isidroevc@gmail.com', 'colorcentro@colorcentro.com.mx'], 'Isidro')->subject('Nuevo mensaje desde landing page!');
        });
        if(!is_null($errores)) {
            return $this->error($errores, 500);
        } else {
            return $this->success('Correcto, enviado');
        }
    }
}
