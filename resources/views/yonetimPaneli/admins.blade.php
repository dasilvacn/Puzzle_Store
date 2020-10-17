@extends('layouts.admin-master')
@section('content')
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="adminPanel/adminTable/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/css/util.css">
    <link rel="stylesheet" type="text/css" href="adminPanel/adminTable/css/main.css">

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <div>
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column2">Yönetici Adı</th>
                            <th class="column3">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td class="btn4">
                                    <a href="/sil/{{$user->id}}" style="color:white">SİL</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--===============================================================================================-->
    <script src="adminPanel/adminTable/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminPanel/adminTable/vendor/bootstrap/js/popper.js"></script>
    <script src="adminPanel/adminTable/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminPanel/adminTable/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminPanel/adminTable/js/main.js"></script>

@endsection
