<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-final2-1-122x86.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Register | Volunteers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <style type="text/css">
        .form-box{
            width: 400px;
            margin: 0 auto;
            margin-top: 10%;
        }

        textarea,input[type="text"],input[type="password"]{
            width: 100%;
        }

        input[type="text"]{
            margin-bottom: 10px;
        }

        .label-check{
            margin-left: 15px;
        }

        input[type="submit"],input[type="password"]{
            margin-bottom: 15px;
        }
    </style>

</head>
<body>

<div class="form-box">

    <form method="POST" action="{{ route('CustomRegister') }}">

        @csrf

        <h1 class="text-center">{{ __('Register') }}</h1>

        <div class="form-group">
            <label for="name"><h2>{{ __('Name') }}</h2></label><br>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="email"><h2>{{ __('Email') }}</h2></label><br>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password"><h2>{{ __('Password') }}</h2></label><br>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password-confirm"><h2>{{ __('Confirm Password') }}</h2></label><br>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required><br>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <input id="terms" type="checkbox" name="terms">
                <label for="terms">{{__('I read and Agree to the')}} <a href="{{url('/')}}/page/3">{{__('Terms of Usage')}}</a></label>
                @if ($errors->has('terms'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('terms') }}</strong>
                    </span>
                @endif
            </div>   
        </div>

        <input type="submit" name="submit" class="btn btn-primary btn-block">

        <div class="mb-5">You are yet a vonlunteer? <a href="/login">Login here</a></div>
    </form>
</div>

</body>
</html>