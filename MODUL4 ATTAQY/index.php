<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:./login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-light p-1 fw-bolder">
        <div class="container-fluid">
            <a class="navbar-brand" href="login.php">ERD Travel</a> 
            <div class="align-self-end">
                <div class="navbar-nav">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#6495ED" 
                                        class="bi bi-cart3" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                    Akbar
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item text-center" href="#">Booking</a></li>
                                    <li><a class="dropdown-item text-center" href="profil.php">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-center" href="./keluar.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <diV class="container-sm">
        <div class="container-fluid bg-light pt-5 pb-5 mt-5 rounded-3">
            <h1 class="display-2 fw-bolder text-center">EAD Travel</h1>
        </div>
        <div class="card-group container-fluid mt-1">
            <div class="card">
                <img src="gambar/rajaampat.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Raja Ampat, Papua</h5>
                    <p class="card-text">Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung Pulau Papua. 
                        Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat
                    </p>
                </div>
                <div class="card-footer text-center d-grid gap-2">
                    <button class="btn btn-primary" type="button">Pesan Tiket</button>
                </div>
            </div>
            <div class="card">
                <img src="gambar/bromo.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Gunung Bromo, Malang</h5>
                    <p class="card-text">Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, 
                        yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang
                    </p>
                </div>
                <div class="card-footer text-center d-grid gap-2">
                    <button class="btn btn-primary" type="button">Pesan Tiket</button>
                </div>
            </div>
            <div class="card">
                <img src="gambar/tanahlot.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tanah Lot, Bali</h5>
                    <p class="card-text">Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. 
                        Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. 
                        Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan
                    </p>
                </div>
                <div class="card-footer text-center d-grid gap-2">
                    <button class="btn btn-primary" type="button">Pesan Tiket</button>
                </div>
            </div>
        </div>
    </diV>


    <footer class="footer mt-5 py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">©2021 Copyright <a class="text-secondary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">attaqy_1202194314</a></span>
        </div>
    </footer>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create by</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>Nama : Muhammad Hafidz Attaqy</ul>
                    <ul>NIM : 1202194314</ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>