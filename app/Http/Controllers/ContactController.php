<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function enviarContato(Request $request)
{
    $data = [
        'nome' => $request->input('nome'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'mensagem' => $request->input('message') // Renomeado para 'mensagem'
    ];

    Mail::send('emails.contato', $data, function($message) use ($data) {
        $message->to(env('MAIL_FROM_ADDRESS')) // Destinatário do .env
                ->subject('Nova mensagem de contato');
        $message->from($data['email'], $data['nome']);
    });

    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
}
}
