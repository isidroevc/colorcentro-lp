<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     /**
     * Función que permite validar ciertos campos y sus reglas.
     * Devuelve el arreglo de errores cuando lo encuentra.
     *
     * @param Array $values
     * @param Array $rules
     * @return Array.
     */
    public function validate(Array $values, Array $rules) {
        $errors = [];
        $validacion = Validator::make($values, $rules);
        if ($validacion->fails()) {
            foreach ($validacion->errors()->all() as $error) {
                $errors[] = $error;
            }
        }
        return $errors;
    }

    /**
     * Función de error general.
     *
     * @param String $error
     * @param Number $status
     * @return Response
     */
    public function error(Array $errors, $status) {
        return array(
            "success" => false,
            'status' => $status,
            "data" => null,
            "errors" => $errors
        );
    }

    /**
     * Función de exito general.
     *
     * @param String $error
     * @return Response
     */

    public function success($data) {
        $resource = null;
        if(is_object($data) && isset($data->resource)) {
            $resource = $data->resource;
        } else if(is_array($data) && isset($data['resource'])){
            $resource = $data['resource'];
        }
        return [
            'success' => true,
            'data' => $data,
            'status' => 200,
            'meta' => $resource
        ];
    }
}
