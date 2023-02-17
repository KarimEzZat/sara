<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('templates/backend/sb-admin-2/img/favicon.ico') }}">

    <title>Sara | Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('templates/backend/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
          type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('templates/backend/sb-admin-2/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-red">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                @if(session()->has('error'))
                                    <div
                                        class="alert alert-danger text-danger alert alert-info alert-dismissible fade show"
                                        role="alert">
                                        <ul class="m-0">
                                            <li>{{ session('error') }}</li>
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Please Login</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login.post') }}">
                                    <div class="form-group">
                                        <input type="email"
                                               class="form-control @error('email') is-invalid @enderror form-control-user"
                                               id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                               placeholder="Email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                               class="form-control @error('password') is-invalid @enderror form-control-user"
                                               id="exampleInputPassword" name="password" placeholder="Password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    @csrf
                                    <button type="submit" class="btn bg-gradient-red btn-user btn-block text-white">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('templates/backend/sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('templates/backend/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('templates/backend/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('templates/backend/sb-admin-2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
