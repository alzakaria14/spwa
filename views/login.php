<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Website -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Nama App</title>
    <!-- Jquery -->
    <script src="assets/vendor/jquery-3.6.3/jquery-3.6.3.min.js"></script>
    <!-- Bootsrap 5.3 CSS -->
    <link rel="stylesheet" href="assets/vendor/bootsrap-5.3/css/bootstrap.min.css">
    <!-- Sweet Alert JS -->
    <script src="assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.min.css">
    <script src="assets/vendor/select2/js/select2.min.js"></script>
    <!-- bootsrap icon -->
    <link rel="stylesheet" href="assets/icon/bootsrap-icon/bootstrap-icons.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="assets/vendor/datatable/css/jquery.dataTables.min.css">
    <script src="assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
    <!-- Lottie Player -->
    <script src="assets/vendor/lottie-player/lottie-player.js"></script>
    <!-- CSS Main Costom -->
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="text-center">
    <div id="loader"></div>
    <main id="main" class="form-signin w-100 m-auto">
        <form id="form-login">
            <img class="mb-4" src="assets/img/icon/logo.png" alt="" width="250" height="auto">
            <div class="form-floating" id="input-login">
                <input type="tel" class="form-control" name="whatsapp" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Whatsapp</label>
            </div>
            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" id="form-button" onclick="login()"><i class="bi bi-whatsapp"></i> Masuk</button>
            <hr>
            <div class="mb-3 g-3">
                <div>
                    <label for="">Belum punya akun?</label>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="button" onclick="daftar()">Daftar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
    <footer>
        <!-- Bootsrap JS -->
        <script src="assets/vendor/bootsrap-5.3/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/bootsrap-5.3/js/popper.min.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
    </footer>
</body>
<script>
    $(document).ready(function() {
        $(document).on("keypress", function(e) {
            if (e.which === 13) { // Check if the pressed key is ENTER
                login();
            }
        });
    });
</script>
