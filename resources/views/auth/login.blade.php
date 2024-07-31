<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Griya Khitan Zaza</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('griyakhitan/images/g.png') }}">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="{{ asset('griyakhitan/css/style.css') }}" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(360deg, rgb(167, 233, 175) 0%, rgb(117, 183, 158) 45%, rgb(106, 140, 175) 100%);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #ffffff;
            /* Warna biru cerah */
            color: #fff;
            padding: 20px;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
            position: relative;
            /* Menambahkan posisi relatif */
        }

        .form-image {
            position: absolute;
            /* Menentukan posisi absolut */
            top: -140px;
            /* Menyesuaikan jarak dari bagian atas */
            left: 50%;
            /* Posisi horizontal menjadi di tengah */
            transform: translateX(-50%);
            /* Menggeser gambar ke kiri sejauh setengah lebar */
            width: 120px;
            /* Lebar gambar */
            height: 120px;
            /* Tinggi gambar */
            border-radius: 50%;
            /* Mengubah gambar menjadi lingkaran */
            overflow: hidden;
            /* Menghilangkan bagian gambar yang melewati batas lingkaran */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Memberi bayangan pada gambar */
        }

        .form-image img {
            width: 100%;
            /* Mengatur ukuran gambar agar sesuai dengan kotak */
            height: auto;
            /* Mengatur ukuran gambar agar sesuai dengan kotak */
            object-fit: cover;
            /* Memastikan gambar terisi penuh tanpa merubah aspek rasio */
        }

        .form-control-user {
            border-radius: 1rem;
        }

        .btn-user {
            border-radius: 1rem;
        }

        .input-group-text {
            background-color: #e9ecef;
            border: none;
            border-radius: 1rem 0 0 1rem;
        }

        .input-group .form-control {
            border-radius: 0 1rem 1rem 0;
        }
    </style>
</head>

<body>

    <div class="login-form">
        <div class="form-image">
            <img src="{{ asset('griyakhitan/images/gkzz.png') }}">
        </div>
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
        </div>
        @include('component.message')
        <form class="user" action="/" method="post">
            @csrf
            <div class="form-group mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="email" name="email" value="{{ Session::get('email') }}"
                        class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Masukkan Email...">
                </div>
            </div>
            <div class="form-group mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Masukkan Kata Sandi...">
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-success btn-user btn-block">
                Masuk
            </button>
            <hr>
        </form>


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
