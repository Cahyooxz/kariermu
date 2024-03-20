<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row d-flex flex-wrap-reverse justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 d-flex flex-column justify-content-center align-items-center px-5">
                <div class="row d-flex justify-content-center">
                    <h4 class="fw-bold">Login</h4>
                    <p class="fw-medium text-secondary">Enter Your Account Detail</p>
                    <div class="d-flex flex-column gap-3 justify-content-start">
                        <div class="fom-control">
                            <input type="text" class="form-control" placeholder="Masukan NISN anda">
                        </div>
                        <div class="fom-control">
                            <input type="password" class="form-control" placeholder="Masukan Password Anda">
                        </div>
                        <a href="dashboard" type="submit" class="button text-decoration-none text-center rounded py-2" value="Login">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 d-flex flex-column justify-content-center align-items-center d-none d-sm-block">
                <img src="{{ asset('img/sma1.png') }}" alt="sma" style="z-index: 1" class="w-100">
            </div>
        </div>
    </div>
    </div>
    {{-- bootstrap js --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
