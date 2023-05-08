<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="login-body">
        <form action="{{ route('login.perform') }}" method="POST" class="login">
            <h1 class="login_title">Lo<span class="sun">gin</span></h1>
            {!! csrf_field() !!}
            <div class="login_item">
                <label for="login-user" class="login_label">
                    Username or Email
                </label>
                <input id="login-user" type="text" name="username" value="{{ old('username') }}" required="required"
                    autofocus class="login_input">
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="login_item">
                <label for="login-password" class="login_label">
                    Password
                </label>
                <input id="login-password" type="password" name="password" value="{{ old('password') }}"
                    required="required" class="login_input">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <a href="#" class="login_link">Forgot Password?</a>
            <div class="login_btn-body">
                <button class="login_btn">Login</button>
            </div>
            <div class="login_social">
                <p class="login_social-title">
                    <span class="login_social-title-item"></span>
                    <span class="login_social-title-text">Or login with</span>
                    <span class="login_social-title-item"></span>
                </p>
                <div class="login_social-links">
                    <a href="#" class="login_social-link">
                        <img src="./img/logo-google.png" alt="" class="login_social-img">
                    </a>
                    <a href="#" class="login_social-link">
                        <img src="./img/Facebook_f_logo.webp" alt="" class="login_social-img">
                    </a>
                    <a href="#" class="login_social-link">
                        <img src="./img/Logo_Twitter.png" alt="" class="login_social-img">
                    </a>
                </div>
            </div>
            <div class="login_number">
                <p class="login_number-title">Don't have an Account?</p>
                <a href="{{ url('./register') }}" class="login_number-link">Register now</a>
            </div>
        </form>
    </div>
</body>

</html>
