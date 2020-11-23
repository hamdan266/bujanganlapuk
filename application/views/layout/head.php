<?php
// loading konfigurasi website
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- icon diambil dari konfigurasi website -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/' . $site->icon) ?>" />
    <!-- SEO GOOGLE -->
    <meta name="keywords" content="<?php echo $site->keywords ?>">
    <meta name="deskripsi" content="<?php echo $title ?>,<?php echo $site->deskripsi ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatee/css/main.css">
    <!--===============================================================================================-->

    <style type="text/css" media="screen">
        ul.pagination {
            padding: 0 10px;
            background-color: red;
            border-radius: 10px;
            text-align: center !important;
        }

        .pagination a,
        .pagination b {
            padding: 10px 20px;
            text-decoration: none;
            float: left;
        }

        .pagination a {
            background-color: red;
            color: white;
        }

        .pagination b {
            background-color: black;
            color: white;
        }

        .pagination a:hover {
            background-color: black;
        }
    </style>

</head>

<body class="animsition">