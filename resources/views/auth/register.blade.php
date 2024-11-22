@extends('layouts.base')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    .login-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .materialContainer {
        width: 360px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px 20px;
        text-align: center;
    }

    .logo-container img {
        max-width: 140px;
        margin: 0 auto 20px;
    }

    .login-title h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #ff6f00;
    }

    .input {
        margin-bottom: 20px;
        text-align: left;
    }

    .input label {
        display: block;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
    }

    .input input {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
        transition: all 0.3s ease-in-out;
    }

    .input input:focus {
        border-color: #ff6f00;
        box-shadow: 0 0 3px rgba(255, 111, 0, 0.5);
    }

    .text-danger {
        font-size: 12px;
        color: red;
        margin-top: 5px;
    }

    .button.login button {
        width: 100%;
        background-color: #ff6f00;
        color: #fff;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .button.login button:hover {
        background-color: #e65c00;
    }

    a.theme-color {
        color: #ff6f00;
        text-decoration: none;
    }

    a.theme-color:hover {
        text-decoration: underline;
    }
</style>

<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <!-- Logo -->
        <div class="logo-container">
            <img src="{{asset('assets/images/Frame 106.png')}}" alt="TravelFun Logo">
        </div>
        
        <div class="login-title">
            <h2>Register</h2>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="button login">
                <button type="submit">Sign Up</button>
            </div>
        </form>

        <p><a href="{{ route('login') }}" class="theme-color">Already have an account?</a></p>
    </div>
</div>
<!-- Sign Up Section End -->
@endsection