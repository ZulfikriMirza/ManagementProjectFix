<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <title>Verify Your Email</title>
</head>

<body>
    <div class="verify-box">
        <div class="content">
            <!--<div class="verify-home">
                <a href="{{ route('home') }}" style="text-decoration: none; color: #0c0101;">Home</a>
            </div>-->
            <div class="mb-4 text-sm text-gray-600" style="margin: 10px;">
                <h1>Verify your email address</h1>
            </div>

            <div class="container" style="display: flex;justify-content: center;align-items: center;">
                <img src="{{ asset('foto/email.png') }}" style="height: 100px; width: 100px;margin: 20px;">
            </div>
            
            
            <div style="text-align: center; margin-left: 10%; margin-right: 10%; font-size: 15px;">
                <p>Hi {{ Auth::user()->name}}, to complete your registration, a verification link has been sent to your email address</p>
            </div>
            <div class="mt-4 flex items-center justify-between" style="margin-top: 20px;">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="verify-button">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="container" style="text-align: center; margin: 10px; font-style: italic; font-size: 12px; ">
                    <p style="margin-left: 10%; margin-right: 10%;">A new verification link has been sent to the email address you provided during registration.</p>
                </div>
            @endif

            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="verify-logout">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
        
</body>