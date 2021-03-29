<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Arsitek - Login / Register</title>
</head>

<body>
  <div class="login-home">
    <a href="{{ route('home') }}">Home</a>
  </div>  
  <div class="cont">
  <div class="validation">
    <x-jet-validation-errors/>
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


          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
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
            @endif
            
          <x-jet-button class="submit">
            {{ __('Register') }}
          </x-jet-button>
        </form>
    </div>
    <!--#################################################-->
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>One of us?</h2>
          <p>If you already has an account, just Log In.</p>
        </div>
        <a href="{{ route('login') }}" style="text-decoration: none; color: white;">
        <div class="img-btn">
          <span class="m-up">Login</span>
        </div>
        </a>
        </div>
      </div>  

    </div>
  </div>

</body>

</html>