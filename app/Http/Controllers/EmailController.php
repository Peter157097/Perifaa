<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Mail\CodigoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function mostrarFormularioAtualizarSenha()
{
    return view('atualizar_senha');
}
    public function mostrarFormulario()
    {
        return view('codigo_form');
    }
    public function enviarCodigo(Request $request)
{
    // Validação do campo de email
    $request->validate([
        'email' => 'required|email',
    ]);

    // Verifique se o email existe em qualquer uma das tabelas
    $usuario = DB::table('tbCliente')->where('emailCliente', $request->email)->first()
              ?? DB::table('tbVendedor')->where('emailVendedor', $request->email)->first()
              ?? DB::table('tbAdministrador')->where('emailAdministrador', $request->email)->first();

    // Se o email não existir em nenhuma tabela, retorne um erro
    if (!$usuario) {
        Log::info('Email não encontrado para envio de código', ['email' => $request->email]);
        return redirect()->back()->withErrors(['email' => 'E-mail não cadastrado']);
    }

    // Salva o e-mail na sessão
    session(['email' => $request->email]);

    // Gera um código aleatório de 4 dígitos
    $codigo = rand(1000, 9999);

    // Salva o código na sessão para verificação posterior
    session(['codigo_verificacao' => $codigo]);

    // Envia o email com o código
    $detalhes = ['codigo' => $codigo];
    Mail::to($request->email)->send(new CodigoEmail($detalhes));

    return redirect()->route('verificar.codigo.form')->with('sucesso', 'Código de verificação enviado para ' . $request->email);
}

    public function mostrarVerificacao()
    {
        return view('verificar_codigo');
    }

    public function verificarCodigo(Request $request)
    {
        // Valida o campo do código
        $request->validate([
            'codigo' => 'required|numeric|digits:4',
        ]);
    
        // Verifica se o código inserido é igual ao da sessão
        if ($request->codigo == session('codigo_verificacao')) {
            // Limpa o código da sessão
            session()->forget('codigo_verificacao');
    
            // Redireciona para a view de atualização de senha
            return redirect()->route('atualizar.senha.form')->with('sucesso', 'Código verificado com sucesso! Por favor, insira sua nova senha.');
        }
    
        // Caso o código esteja incorreto, retorna com erro
        return back()->withErrors(['codigo' => 'Código incorreto. Tente novamente.']);
    }
    public function atualizarSenha(Request $request)
{
    // Validação do campo de senha
    $request->validate([
        'novaSenha' => 'required|min:4|confirmed',
    ], [
        'novaSenha.confirmed' => 'As senhas informadas não coincidem. Por favor, tente novamente.',
    ]);

    // Obtém o usuário pelo email, já que você tem certeza de que ele existe
    $usuario = DB::table('tbCliente')->where('emailCliente', session('email'))->first()
              ?? DB::table('tbVendedor')->where('emailVendedor', session('email'))->first()
              ?? DB::table('tbAdministrador')->where('emailAdministrador', session('email'))->first();

    // Atualiza a nova senha
    $novaSenhaHash = Hash::make($request->novaSenha);

    if (isset($usuario->idCliente)) {
        DB::table('tbCliente')->where('idCliente', $usuario->idCliente)->update(['senhaCliente' => $novaSenhaHash]);
    } elseif (isset($usuario->idVendedor)) {
        DB::table('tbVendedor')->where('idVendedor', $usuario->idVendedor)->update(['senhaVendedor' => $novaSenhaHash]);
    } elseif (isset($usuario->idAdministrador)) {
        DB::table('tbAdministrador')->where('idAdministrador', $usuario->idAdministrador)->update(['senhaAdministrador' => $novaSenhaHash]);
    }

    // Redireciona para a página de login com mensagem de sucesso
    return redirect('/',)->with('success', 'Senha alterada com sucesso! Você pode fazer login agora.');
}
}
