<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Aplikasi Pusat Relawan</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="<?= base_url('assets/front/'); ?>img/favicon.png" rel="icon">
        <link href="<?= base_url('assets/front/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/venobox/venobox.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/'); ?>css/style2.css" rel="stylesheet">

        <!-- Leafletjs -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
            integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
            crossorigin="" />
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>
        <style>
        #mapid {
            height: 580px;
        }

        #pemetaan_lokasi {
            height: 500px;
        }

        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }

        .gambar {
            margin-bottom: 250px;
        }

        .logo-forum {
            margin: 50px 10px 100px 100px;
        }
        </style>

        <!-- =======================================================
  * Template Name: Multi - v2.2.1
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * Lic
ense: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>