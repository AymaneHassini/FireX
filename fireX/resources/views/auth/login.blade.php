<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page | FireX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/yzk.jpg') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom App CSS -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/assets/js/head.js') }}"></script>

    <style>
        .btn-primary {
            background-color: #D50000;
            border-color: #D50000;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            background-color: #B40000;
            border-color: #B40000;
        }
        .form-check-input:checked {
            background-color: #D50000;
            border-color: #D50000;
        }
        .authentication-bg {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card bg-pattern">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="/" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('backend/assets/images/yzk-logo.jpg') }}" alt="Logo" height="50">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <br>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Enter your password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input id="checkbox-signin" type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit">Log In</button>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt">
        &copy; <script>document.write(new Date().getFullYear());</script> FireX - <a href="#" class="text-white-50">Agile Software Engineering and DevOps</a>
    </footer>

    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

</body>
</html>
