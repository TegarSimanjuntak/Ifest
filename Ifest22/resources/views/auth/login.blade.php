<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login {{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.css') }}">
</head>

<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0" style="background-color: #1c1c1c;">
        <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center">
            <div>
                <img src="{{ asset('img/logo/logopurple.png') }}" alt="" style="width: 60%; height:auto;">
            </div>
        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
                <h3 class="text-center">Hello!</h3>
                <h4 class="text-center">Sign into Your Account</h4>

                <form action="{{ route('login') }}" method="post" autocomplete="off">

                    @csrf

                    <div class="login-form">
                        <div class="form-group">
                            <label for="email" class="placeholder">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder">{{ __('Password') }}</label>
                            <!--<a href="{{ route('password.request') }}" class="link float-right">Lupa Password ?</a>-->
                            <div class="position-relative">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-action-d-flex mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label m-0" for="rememberme">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="form-group form-action-d-flex mb-3">
                            <button type="submit" class="btn col-md-5 float-right mt-3 mt-sm-0 fw-bold" style="background-color:white; border-color:black; color:black;">{{ __('Login') }}</button>
                            <button class="btn col-md-5 float-right mt-3 mt-sm-0 fw-bold" style="background-color:white; border-color:black; color:black;"><a href="{{route('register')}}" style="text-decoration:none; color:#1c1c1c;">Register</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>
</body>

</html>