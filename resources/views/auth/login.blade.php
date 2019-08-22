<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Quan Ly</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
<!--   <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
    <style>
        html,body{
            font-family: Tohoma, Geneva, sans-serif;
            color: #fff;
            background: url(./img/photo2.png);
            background-size: cover;
            text-align: center;
        }
        .login-box{
            background: rgba(44,62,80,0.7);
            padding: 25px;
            width: 400px;
            margin: auto;
            margin-top: 50px;
            height: 450px;
            margin-left: 400px;
        }

        .btn-primary {
            border: none;
            width: 90px;
            background: #D0D28E;
            color: #000;
            font-size: 16px;
            line-height: 25px;
            padding: 10px 0;
            border-radius: 15px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: black;
        }

        input[type="email"]{
            width: 310px;
            text-align: center;
            background: #D0D28E;
            border: none;
            border-bottom: 1px solid #fff;
            font-family: 'Play' sans-serif;
            font-size: 16px;
            font-weight: 200px;
            padding: 10px 0;
            transition: border 0.5s;
            outline: none;
            color: black;
        }
        input[type="password"]{
            width: 310px;
            text-align: center;
            background: #D0D28E;
            border: none;
            border-bottom: 1px solid #fff;
            font-family: 'Play' sans-serif;
            font-size: 16px;
            font-weight: 200px;
            padding: 10px 0;
            transition: border 0.5s;
            outline: none;
            color: black;
        }
        h3{
            font-family: Tohoma;
            color: yellow;
        }
        a{
            color: yellow;
            text-decoration: blink;
        }
        a:hover{
            color: tomato;
        }

        ::placeholder{
            color: aliceblue;
            opacity: 0.8;
        }

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Indie+Flower"
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <h3 href="#"><b>SURVEY</b></h3>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{route('login')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? ' has-error ': ''}} has-feedback">
                <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error ': ''}} has-feedback">
                <input id="password" value="{{ old('password') }}" type="password" name="password" class="form-control" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-10">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="{{ old('remember') ? 'checked' : '' }}"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="{{route('password.request')}}">I forgot my password</a><br>
        <a href="{{route('register')}}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>

</html>