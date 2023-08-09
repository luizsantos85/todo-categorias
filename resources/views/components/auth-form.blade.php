@csrf
@if (!isset($login) || !$login)
    <label for="name">Nome</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
@endif

<label for="email">E-mail</label>
<input type="email" id="email" name="email" value="{{ old('email') }}" required>

<label for="password">Senha</label>
<input type="password" id="password" name="password" required>

@if (!isset($login) || !$login)
    <label for="password_confirmation">Confirmar Senha</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
@endif

<input type="submit" value="{{isset($btnText) ? $btnText : ''}}">