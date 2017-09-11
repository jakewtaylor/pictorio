<h2>Login</h2>
<form action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username" id="username" placeholder="Username" required value="{{ old('username') ?? '' }}">
    <input type="password" name="password" id="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>

<div class="line">
    <p>or</p>
</div>

<h2>Sign Up</h2>
<form action="{{ route('register') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') ?? '' }}">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
    <input type="submit" value="Sign Up">
</form>
