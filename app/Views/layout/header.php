<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>PMKM Prima Jabar :: <?= $title; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css');  ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/plugins/charts-c3/plugin.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/plugins/morrisjs/morris.min.css'); ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('styletambahan.css'); ?>">
</head>

<body class="theme-blush">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary diver">
        <a class="ml-4 mr-4" href="#"><img src="<?= base_url('logo.png'); ?>" style="height: 45px;width: auto" alt="Logo PMKM Prima Indonesia"></a>

        <!-- Collapse button -->
        <button class="navbar-toggler m-r-10" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/activity">Aktivitas & Agenda Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/statistic">Data Statistik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vision">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/community">Halaman Komunitas</a>
                </li>
            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0 mr-4">
                    <a href="/login" class="btn btn-warning">Login</a>
                </div>
            </form>
        </div>
    </nav>
    <!-- Page Loader -->