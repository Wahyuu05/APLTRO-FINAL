<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>intro</title>

    <!-- Favicons -->
    <link href="home/assets/img/introo.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 rounded-xl">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-8" style="background-color: #D9D9D9;">
                        <div class="card-body">
                            <div class="brand-wrapper">
                            </div>

                            <h3>Selamat Datang</h3>
                            <h3><b>Sistem Inventory TRO</b></h3>

                            <form method="POST" action="{{ route('login') }}" style="margin-top: 80px; border-radius: 20px;">
                                @csrf
                                <p class="login-card-description">Masuk ke akun anda</p>
                                <br></br>
                                <div class="form-group">
                                    <p>Username</p>
                                    <input type="text" name="username" id="username" class="form-control" style="border-radius: 10px;" placeholder="masukan username" autofocus required>
                                </div>

                                <div class="form-group mb-4">
                                    <p>Password</p>
                                    <input type="password" name="password" id="password" class="form-control" style="border-radius: 10px;" placeholder="masukan password" autofocus required>
                                </div>

                                <div class="col-md-3">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-block login-btn" style="background-color: #394360; color: #fff; border-radius: 20px;">Masuk</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>