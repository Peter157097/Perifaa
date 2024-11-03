<form action="/atualizar-senha" method="POST">
    @csrf
    <div>
        <label for="novaSenha">Nova Senha</label>
        <input type="password" name="novaSenha" id="novaSenha" required>
    </div>

    <div>
        <label for="novaSenha_confirmation">Confirme a Nova Senha</label>
        <input type="password" name="novaSenha_confirmation" id="novaSenha_confirmation" required>
    </div>

    <button type="submit">Atualizar Senha</button>
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

