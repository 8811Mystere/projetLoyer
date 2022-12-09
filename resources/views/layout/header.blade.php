<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title',  Config('app.name') )</title>
    <!-- c'est le nom title que nous allons chaque fois appeler dans les autres pages puis 
    definir le vrai titre de la page -->
    <!-- NB: comme la commende env() nous l'avons mis dans la commande
    yiel, il ne faut pas ajouter les acolades sinon il va régenerer l'erreur  -->
</head>
<body>
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('Accueil')}}">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Nos Produits</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Modalités</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reserver
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Maison</a></li>
                        <li><a class="dropdown-item" href="#">Terrain</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Tout</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('BD')}}" tabindex="-1" aria-disabled="true">Base de données</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
                </div>
            </div>
        </nav>

        <!-- carousel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/maison.jpg')}}" class="d-block w-100" alt="Mainson 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/maison2.jpg')}}" class="d-block w-100" alt="Mainson 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/maison3.jpg')}}" class="d-block w-100" alt="Mainson 3">
                </div>
            </div>
        </div>
        <div>
            <h1>GESTION DES LOYERS</h1>
        </div>
    </header>