<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/Logo.png" type="image/x-icon">
    <title>My Shop</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/7860568151.js" crossorigin="anonymous"></script>

    <!-- form validate -->
    <link rel="stylesheet" href="https://ltp.crfnetwork.com/form-validate/css/style.css">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
    

    <?php
    // require functions.php file
    require('func/functions.php');
    ?>
    <style>
        @keyframes colorChange {
            0% { color: #ff0055; font-weight: bold; } 
            25% { color: #ff80ed; font-weight:none;} 
            50% { color: #c4cdff; font-weight: bold;} 
            75% { color: #a9c1f1; font-weight: none;} 
            100% { color: #e41e3f; font-weight: bold;}
        }
        #Title
        {
            margin-top: -8px;
            margin-bottom: -8px;
            font-family: 'Verdana';
            animation: colorChange 4s infinite;
            transition: color 0.3s ease; 

        }
        .CartBtn {
            text-align: center;
            margin: auto;
            padding-top: 10px;
            padding-bottom: -10px;
            width: 140px;
            height: 40px;
            border-radius: 12px;
            border: none;
            background-color: #93aafa;/*rgb(153, 255, 0)*/
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition-duration: .5s;
            overflow: hidden;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.103);
            position: relative;
        }
        
        .IconContainer {
            position: absolute;
            left: -50px;
            width: 30px;
            height: 30px;
            background-color: transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            z-index: 2;
            transition-duration: .5s;
        }
        
        .icon {
            border-radius: 1px;
        }
        
        .text {
            height: 100%;
            width: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(17, 17, 17);
            z-index: 1;
            transition-duration: .5s;
            font-size: 1.04em;
            font-weight: 600;
        }
        
        .CartBtn:hover .IconContainer {
            transform: translateX(58px);
            border-radius: 40px;
            transition-duration: .5s;
        }
        
        .CartBtn:hover .text {
            transform: translate(10px,0px);
            transition-duration: .5s;
        }
        
        .CartBtn:active {
            transform: scale(0.95);
            transition-duration: .5s;
        }
                
        
    </style>

</head>

<body>
    <span id="top"></span>
    <a class="scroll-up" style="margin-bottom:-50px;background-color:#257ca3;" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- start #header -->
    <header id="header">
        <div class="topnav d-flex justify-content-end px-4 py-1" style="background-color: white">
            <div class="font-size-14  ">
                <a href="./login.php" class="px-3 border-start text-dark">
                
                    <?php 
                    if ($_SESSION['logged'] == true) 
                    {
                        echo $acc->getAccount($_COOKIE['user_id'])['username']; 
                    ?>
                        <img src="assets/avatar/<?php echo $acc->getAccount($_COOKIE['user_id'], 'user')['avatar'] ?>" alt="avatar" class="rounded-circle" style="width: 18px;height: 18px;" />
                    <?php 
                    } 
                    else 
                    {
                        echo "Login";
                    } 
                    ?>
                </a>
                
                <?php 
                    if ($_SESSION['logged'] == false) 
                    {
                    ?>
                    <a href="./register.php" class="px-3 border-start text-dark">Register</a>
                    <?php
                    }
                    ?>
                <?php
                if ($_SESSION['logged'] == true) 
                {
                    if($_COOKIE["user_privilege"] == 1)
                    {   ?>
                
                        <a href="./register.php" class="px-3 border-start text-dark">Ajouter un compte</a>
                        <a href="./account.php" class="px-3 border-start text-dark">Comptes</a>
                        <a href="./manage.php" class="px-3 border-start text-dark">Gérer le site Web</a>
                        <?php
                    }
                }
                ?>                      
                    
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg px-3 navbar-dark color-second-bg">
            <img src="./assets/myLogo.png" class="logo">
            <a class="navbar-brand" href="./index.php"><p id="Title">My Shop</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#top-sale">Top sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#special-price">Meilleure vente</a>
                    </li>
                    <!---<li class="nav-item">
                        <a class="nav-link" href="./index.php#new-phone">nouveaux ordinateurs</a>
                    </li>--->
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cart.php">Panier</a>
                    </li>
                </ul>
                <form action="#" class="font-size-12">
                    <a href="./cart.php" class="d-flex align-items-center rounded-pill bg-primary">
                        <span class="font-size-14 px-2 py-2 text-white">
                            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                        </span>
                        <div class="px-3 py-2 font-size-14 rounded-pill text-black bg-white">
                            <?php echo count($cart->getCart($_COOKIE['user_id'] ?? 0)); ?>
                        </div>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation -->

    </header>
    <!-- !start #header -->

    <!-- start #main-site -->
    <main id="main-site">
