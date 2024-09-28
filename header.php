<?php
//Apontando para a pasta raíz / Separando por subpastas e p todas conhecerem a raíz
define('ROOT_DIR', 'http://localhost/Projeto%20Hotel/hotel11');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Hotel</title>
    <link rel="stylesheet" href="<?= ROOT_DIR ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= ROOT_DIR ?>/images/logo2.png" type="image/x-icon">
</head>

<body class="index-backgound">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    <header>
        <div class="gray-margin">
            <div class="d-flex align-items-center justify-content-center">
                <a href="#">
                    <img class="margin-medias" src="<?= ROOT_DIR ?>/images/facebook48.png" alt="Facebook">
                </a>
                <a href="#">
                    <img class="margin-medias" src="<?= ROOT_DIR ?>/images/instagram48.png" alt="Instagram">
                </a>
                <a href="#">
                    <img class="margin-medias" src="<?= ROOT_DIR ?>/images/twitter48.png" alt="Twitter">
                </a>
                <a href="#">
                    <img class="margin-medias" src="<?= ROOT_DIR ?>/images/youtube48.png" alt="YouTube">
                </a>
                <a href="<?= ROOT_DIR ?>#">
                    <button class="btn btn-yellow">RESERVAS</button>
                </a>
            </div>
        </div>
        <div class="gray-div">
            <nav class="navbar navbar-expand-lg bg-body-tertiary padding-nav">
                <div class="container-fluid gray-div">
                    <div class="margin-logo1">
                        <a class="navbar-brand" href="<?= ROOT_DIR ?>/index.php">
                            <img src="<?= ROOT_DIR ?>/images/logo1.png" alt="HotelGolden" width="130" height="80">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav nav-row">
                            <li class="nav-item nav-option">
                                <a class="nav-link nav-text" href="#">HOME</a>
                            </li>
                            <li class="nav-item nav-option">
                                <a class="nav-link nav-text" href="#">O HOTEL</a>
                            </li>
                            <li class="nav-item nav-option">
                                <a class="nav-link nav-text" href="#">PROMOÇÕES</a>
                            </li>
                            <li class="nav-item nav-option">
                                <a class="nav-link nav-text" href="#">LOCALIZAÇÃO</a>
                            </li>
                            <li class="nav-item nav-option">
                                <a class="nav-link nav-text" href="#">CONTATO</a>
                            </li>
                            <li class="nav-item nav-option">
                                <div class="my-account">
                                    <a class="nav-link nav-text my-account-link"
                                        href="<?= ROOT_DIR ?>/login/myaccount.php">
                                        <img class="my-account-icon" src="<?= ROOT_DIR ?>/images/user64.png" alt="User"
                                            width=20 height=20>
                                        MINHA CONTA
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>