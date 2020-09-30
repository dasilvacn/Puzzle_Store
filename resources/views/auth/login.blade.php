@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href={{asset("registerTemplate/vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("registerTemplate/vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href={{asset("registerTemplate/vendor/select2/select2.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("registerTemplate/vendor/datepicker/daterangepicker.css")}} rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={{asset("registerTemplate/css/main.css")}} rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="col-10">
                                <div class="input-group">
                                    <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>
                                    <div class="col-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="col-10">
                                <div class="input-group">
                                    <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                    <div class="col-10">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="col-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <div class="col-20">
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-10">

                                    <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
                                    <div class="col-25">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-primary" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src={{asset("registerTemplate/vendor/jquery/jquery.min.js")}}></script>
    <!-- Vendor JS-->
    <script src={{asset("registerTemplate/vendor/select2/select2.min.js")}}></script>
    <script src={{asset("registerTemplate/vendor/datepicker/moment.min.js")}}></script>
    <script src={{asset("registerTemplate/vendor/datepicker/daterangepicker.js")}}></script>

    <!-- Main JS-->
    <script src={{asset("registerTemplate/js/global.js")}}></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
@endsection
