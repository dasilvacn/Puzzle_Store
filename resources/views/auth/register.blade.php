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
            <div class="card-header">{{ __('Register') }}</div>
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-10">
                                <div class="input-group">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-offset-5">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-10">
                                        <div class="input-group">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-16">
                                        <div class="input-group">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-offset-5">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="p-t-5">
                                                <button class="btn btn-primary" type="submit">{{ __('Register') }}</button>
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
