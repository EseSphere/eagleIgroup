<?php
session_start();
require_once 'db_connect.php';
if (empty($_SESSION['usr_specialId'])) {
    header("Location: ./");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eagle I Group | Security & Cleaner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Eagle I Security, Eagle I Cleaner, security services, cleaning services, CCTV installation, 
    residential security, commercial cleaning, surveillance, janitorial, home security, office cleaning, professional cleaners">
    <meta name="description" content="Eagle I Security and Eagle I Cleaner provide top-tier security and professional cleaning services. 
    Your trusted partner in safety and cleanliness for homes and businesses.">
    <meta name="author" content="Eagle I Group">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0B3D91">
    <link rel="icon" type="image/avif" href="../img/favicon.avif">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon.avif">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.avif">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon.avif">
    <link rel="manifest" href="../site.webmanifest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.eagleigroup.com/">
    <meta property="og:title" content="Eagle I Security & Eagle I Cleaner">
    <meta property="og:description" content="Top-tier security and cleaning services for homes and businesses.">
    <meta property="og:image" content="./img/favicon.avif">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.eagleigroup.com/">
    <meta name="twitter:title" content="Eagle I Security & Eagle I Cleaner">
    <meta name="twitter:description" content="Top-tier security and cleaning services for homes and businesses.">
    <meta name="twitter:image" content="../img/favicon.avif">
    <link href="../assets/css/bootstrap-min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $("#popupnav").hide();
            $("#display-popup").click(function() {
                $("#popupnav").slideToggle();
            });
        });
    </script>
</head>
<style type="text/css">
    html,
    body {
        color: #000;
    }
</style>

<body>
    <div style="margin-top: 20px;" class="container">
        <div class="full-body-wrapper">
            <h5 style="color: #000;">
                <span id="greeting">Hello </span> <?php print "" . $_SESSION['usr_username'] . "" ?>
                <a href="./logout" type="button" class="btn btn-sm btn-danger" style="float: right;">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </h5>
            <hr style="border: 1px solid rgba(41, 128, 185,1.0);">
            <div class="row">
                <div class="col-lg-2">
                    <a href="../" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-home"></i> Home</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="./dashboard" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-star"></i> Dashboard</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="./blog" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-id-card"></i> Blog</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="./quote" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-book"></i> Quote</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="./contact" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-envelope"></i> Contact</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="./security-applications" id="link-decor-black">
                        <div id="shadow-effect" class="card text-black mb-3">
                            <div class="card-header"><i class="fas fa-list"></i> Applications</div>
                        </div>
                    </a>
                </div>
            </div>