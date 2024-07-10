<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function enviarCorreo()
{
    $data = [
        'mensaje' => 'Este es un correo de prueba enviado desde Laravel 2.',
    ];

    Mail::send('correo.ejemplo', $data, function ($message) {
        $message->to('guillermojr2512@gmail.com')
                ->subject('Asunto del Correo');
    });

    return 'Correo enviado correctamente.';
}
}
