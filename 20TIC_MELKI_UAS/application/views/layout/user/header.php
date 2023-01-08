<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url('assets_admin/') ?>assets/images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>assets/vendors/simple-datatables/style.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url('assets_admin/') ?>index.html"><img style="width:200px; height: 100px;" src="<?= base_url('assets_admin/') ?>assets/images/logo/mylogo.png" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="<?= base_url('assets_admin/') ?>#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="sidebar-item  ">
                        <a href="<?= base_url('auth/logout') ?>" class='sidebar-link'>
                            <img width="30" src="<?= base_url('assets_admin/') ?>assets/images/icon/logout.png" alt="Logo" srcset="">
                            <span>Logout</span>
                        </a>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>