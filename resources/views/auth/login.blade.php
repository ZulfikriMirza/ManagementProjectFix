<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Arsitek - Login</title>
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
          <p>Register and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just Log In. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>



      <!--####################################################-->
      <div class="form sign-up">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h2>Sign Up</h2>
          <label>
            <span>Name</span>
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          </label>

          <label>
            <span>Email</span>
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
          </label>

          <label>
            <span>Password</span>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          </label>

          <label>
            <span>Confirm Password</span>
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          </label>

          <!--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif-->

          <x-jet-button class="submit">
            {{ __('Register') }}
          </x-jet-button>
        </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>