<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
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

        $errores = Mail::send('emails.mensaje-lp', ['carga' => $carga], function ($m){
            $m->from('noreply@colorcentro.com.mx', 'Colorcentro');

            $m->to('isidroevc@gmail.com', 'Isidro')->subject('Nuevo mensaje desde landing page!');
        });

        if(count($errores ) > 0) {
            return $this->error($errores, 500);
        } else {
            return $this->success('Correcto, enviado');
        }
    }
}
