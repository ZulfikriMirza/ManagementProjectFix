<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/resetreset.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Reset Password</title>
</head>


<div class="login-home">
    <a href="{{ route('home') }}">Home</a>
  </div>
  
<div class="cont">


        
    <div class="cont2">
    
    <h2>Reset Password</h2>
<x-guest-layout>
    

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password Baru') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password Baru') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            
                <x-jet-button class="submit">
                    
                    {{ __('Submit Reset Password') }}
                    
                </x-jet-button>
                <div class="link">
            <p>Belum Punya Akun? <a href="{{ route('login') }}">Register Sekarang!</a></p>
            </div>
            
        </form>
    </div>
</x-guest-layout>
</div>