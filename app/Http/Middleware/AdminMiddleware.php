<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifique se o usuário está autenticado e se ele é um administrador
        if ($request->user() && $request->user()->admin) {
            return $next($request);
        }

        // Se não for um administrador, redirecione para a página inicial ou retorne uma resposta adequada
        return redirect('/');
    }
}
