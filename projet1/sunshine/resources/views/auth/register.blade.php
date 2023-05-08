<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="login-body">
        <form action="{{ route('register.perform') }}" method="POST" class="login">
            <h1 class="login_title">Sign<span class="sun">up</span></h1>
            {!! csrf_field() !!}
            <div class="login_item">
                <label for="login-user" class="login_label">
                    Userame
                </label>
                <input id="login-user" type="text" name="username" value="{{ old('username') }}" required="required"
                    autofocus class="login_input">
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="login_item">
                <label for="login-user" class="login_label">
                    Email
                </label>
                <input id="login-user" type="text" name="email" value="{{ old('email') }}" required="required"
                    autofocus class="login_input">
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
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
                <button class="login_btn">Register</button>
            </div>
            <div class="login_number">
                <p class="login_number-title">to connect?</p>
                <a href="{{ url('./login') }}" class="login_number-link">Login now</a>
            </div>
        </form>
    </div>
</body>

</html>
