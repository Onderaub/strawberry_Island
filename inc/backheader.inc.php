<?php     require_once '../config/function.php';
require_once '../inc/backheader.inc.php';?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Star'admin</title>


    <!-- Custom fonts for this template-->
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/lux/bootstrap.min.css" integrity="sha512-+TCHrZDlJaieLxYGAxpR5QgMae/jFXNkrc6sxxYsIVuo/28nknKtf9Qv+J2PqqPXj0vtZo9AKW/SMWXe8i/o6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  text-white sidebar sidebar-dark accordion" id="accordionSidebar" style="
    background-color: #000000;"
    >

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=  BASE_PATH.'/'; ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Star'Admin </sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            gestion
        </div>
        

        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/media_type.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion Médias type</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/typeChoice.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion Médias</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/page.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion page</span>
            </a>
        </li>


        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/content.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion Content</span>
            </a>
        </li>


        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/comment.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion Comment</span>
            </a>
        </li>


        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= BASE_PATH.'back/eventback.php';?>" >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion Event</span>
            </a>
        </li>


        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed"   href=""   >

                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion evènements</span>
            </a>
        </li>


        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href=""  >
                <i class="fas fa-fw fa-wrench"></i>
                <span>Gestion newsletter</span>
            </a>
        </li>


        <hr class="sidebar-divider">



     


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="
    background-color: #000000;"
            >

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link " href="<?=  BASE_PATH; ?>" role="button">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Voir le site</span>
                            <img class="img-profile rounded-circle"
                                 src="">
                        </a>

                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <div class="container col-3 ">

                <div class="alert  text-center">

                </div>


            </div>

                <!-- Page Heading -->









