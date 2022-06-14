@yield('header')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98b76129a9.js" crossorigin="anonymous"></script>
</head>
<div class="container">
    <div id="center" >
        <img id="HomeBanner" src="images/bij.jpg" alt="bij banner">
    </div>

    <header>
        <nav>
            <ul class="main_menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">Basiscursus</a></li>
                <li><a href="#">Voortgezet Imkeren</a></li>
                <li><a href="#">Informatie</a></li>
                <li><a href="#">Links</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="#">Berichten</a></li>
                <li><a href="/login"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

