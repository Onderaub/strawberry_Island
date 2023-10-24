<!doctype html>
<html lang="fr">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starisland</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/lux/bootstrap.min.css" integrity="sha512-+TCHrZDlJaieLxYGAxpR5QgMae/jFXNkrc6sxxYsIVuo/28nknKtf9Qv+J2PqqPXj0vtZo9AKW/SMWXe8i/o6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css" />
  
    

</head>



    <header>

        <nav class="navbar navbar-expand navbar-dark bg-primary navimage text-center" height= "8">

            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASE_PATH.'home.php' ?>"><img class="logo" src="assets/images/logo.png" alt="Logo de Star'Island">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-vector">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"><img class="vector bd" src="assets/images/Vector.png" wight=10> </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_PATH .'security/login.php'; ?>">Connexion</a>
                                <a class="dropdown-item" href="<?= BASE_PATH .'security/register.php'; ?>">Inscription</a>
                                <a class="dropdown-item" href="<?= BASE_PATH .'event.php'; ?>">Events</a>
                                <a class="dropdown-item" href="">Carriere</a>
                            </div>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="<?= BASE_PATH .'/galerie.php'; ?>">Galerie</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="./vip.php">Devenir VIP</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="<?= BASE_PATH .'/serveur.php'; ?>">Serveur</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="<?= BASE_PATH .'/Staff.php'; ?>">Gouvernement</a>
                        </li>
                    </ul>
                    
                        <div class="d-flex flex-column align-items-center">
                            <a href="../event.php" class="btnTuto btn-success ms-3" width=16 height=16><img src="assets\images\Bouton_tuto.png"></a>
                            <a href="encyclopedie.fr" class="btnTuto btn-success ms-3" width=16 height=16><img src="assets\images\Bouton_avis.png"></a>
                        </div>
                

                </div>
            </div>
        </nav>

    </header>
    <main>