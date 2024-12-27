<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Link to CSS -->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="wrapper">
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <h2>Login</h2>
      <div class="input-field">
        <input id="email" type="email" name="email" required autofocus autocomplete="username" />
        <label for="email">Enter your email</label>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <div class="input-field">
        <input id="password" type="password" name="password" required autocomplete="current-password" />
        <label for="password">Enter your password</label>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <div class="forget">
        <label>
          <input id="remember_me" type="checkbox" name="remember" />
          <span>Remember me</span>
        </label>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">Forgot password?</a>
        @endif
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
