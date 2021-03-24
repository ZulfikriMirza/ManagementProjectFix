
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/forgot.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Forget Password</title>
</head>
    
<div class="login-home">
    <a href="{{ route('home') }}">Home</a>
  </div>
<div class="cont">


        
    <div class="cont2">
    <div class="kunci">
        <img src="foto/kunci.png">
    </div>
    
        <h2>Forgot Password</h2>

        <x-guest-layout>
        <div class="isi">
            {{ __('Melalui alamat email anda, kami dapat mengirimkan link untuk me-reset password anda.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="btn">
                <x-jet-button class="submit">
                    {{ __('Kirimkan Ke Alamat E-mail') }}
                </x-jet-button>
            </div>
            <div class="link">
            <p>Kembali Ke Laman <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>    
  
</x-guest-layout>  
</div>
