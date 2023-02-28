<?php 

require 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col min-vh-100 py-3">
            <!-- toggler -->
            <button class="btn btn-outline-primary float" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                <i class="bi bi-list fs-3 my-float" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
            </button>
            <div class="container">
                <div class="container">
                    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                        <button type="button" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" class="btn d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <span class="fs-4">LOGO</span>
                        </button>
                        <ul class="nav nav-pills d-none d-sm-block d-sm-none d-md-block">
                            <li class="nav-item"><button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" class="nav-link active" aria-current="page">Menu</button></li>
                        </ul>
                    </header>
                </div>
                <!-- Isi content pada main menggunakan AJAX Jquery -->
                <main id="main"></main>
            </div>
        </div>
    </div>
</div>

<?php 

require 'footer.php';
?>
