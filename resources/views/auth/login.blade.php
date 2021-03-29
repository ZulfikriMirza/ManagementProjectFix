<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Arsitek - Login / Register</title>
</head>


<body>
  @if (session('status'))
  <div class="mb-4s font-medium text-sm text-green-600">
    {{ session('status') }}
  </div>
  @endif
  <div class="login-home">
    <a href="{{ route('home') }}">Home</a>
  </div>
  <div class="cont">
    <div class="validation">
    <x-jet-validation-errors/>
    </div>
    <div class="form sign-in">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Log In </h2>

        <label>
          <span>Email Address</span>
          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </label>

        <label>
          <span>Password</span>
          <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </label>

        <div style="text-align: left;">
          <label for="remember_me" class="flex items-left">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span style="text-transform: capitalize;font-weight: 600; color: #0c0101;">Remember Me</span>
          </label>
        </div>

        <x-jet-button class="submit">
          {{ __('Log in') }}
        </x-jet-button>
        @if (Route::has('password.request'))
        <p class="forgot-pass"><a class="forgot-pass" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a></p>
        @endif

        <!-- <div class="social-media">
          <ul>
            <li><img src="../foto/facebook.png"></li>
            <li><img src="../foto/twitter.png"></li>
            <li><img src="../foto/linkedin.png"></li>
            <li><img src="../foto/instagram.png"></li>
          </ul>
        </div> -->
    </div>
    </form>

    <!--#################################################-->


    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Register and discover our works and creations!</p>
        </div>
        <a href="{{ route('register') }}" style="text-decoration: none; color: white;">
        <div class="img-btn">
          <span class="m-up"> Register</span>
        </div>
        </a>
      </div>

      <!--####################################################-->
</body>

</html>