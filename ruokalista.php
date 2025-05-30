<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="tyyli.css" type="text/css">
    <style>
        
    </style>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['kirjautunut'])) {
        header("Location: login.html");
        exit();
    }
    ?>
    <footer>
        Ma – Pe: 8-17 |  Lauantai: 8-16  |  Sunnuntai: suljettu 
    </footer>
    <header>
        <?php
        if (!isset($_SESSION['kirjautunut']) || $_SESSION['kirjautunut'] !== true) {
        echo '<span class="kirjaudusisa"><a href="login.html">Kirjaudu sisään</a></span>';
        } else {
        echo '<span class="kirjaudusisa"><a href="logout.php">Kirjaudu ulos</a></span>';
        }
        ?>
        <nav class=links>
        <h1>Kahvila</h1>
        <p><a href="#kahvit">Kahvit</a> | <a href="#donitsit">Donitsit</a>| <a href="#pullat">Pullat</a>| <a href="#juomat">Juomat</a></p>
        </nav>
        <nav class="navbar">
            <a href="index.php">Etusivu</a>
            <a class="active" href="ruokalista.php">Ruokalista</a>
            <a href="yhteystiedot.php">Yhteystiedot</a>
        </nav>
    </header>
    <main>
        <section id="kahvit">
            <h2>Kahvit</h2>
            <div class="section-content">
                    <ul>
                        <li>Suodatinkahvi – 2,50 €</li>
                        <li>Cappuccino – 3,80 €</li>
                        <li>Latte – 4,20 €</li>
                    </ul>
            </div>
            
        </section>
        <section id="donitsit">
    <h2>Donitsit</h2>
    <div class="section-content">
            <ul>
                <li>Sokeridonitsi – 2,20 €</li>
                <li>Suklaadonitsi – 2,50 €</li>
                <li>Mansikkadonitsi – 2,50 €</li>
            </ul>
    </div>
</section>
<section id="pullat">
    <h2>Pullat</h2>
    <div class="section-content">
            <ul>
                <li>Korvapuusti – 2,80 €</li>
                <li>Voisilmäpulla – 2,60 €</li>
                <li>Kanelipulla – 2,90 €</li>
            </ul>
    </div>
</section>
<section id="juomat">
    <h2>Juomat</h2>
    <div class="section-content">
            <ul>
                <li>Appelsiinimehu (2 dl) – 2,00 €</li>
                <li>Kivennäisvesi – 2,20 €</li>
                <li>Kaakao kermavaahdolla – 3,00 €</li>
            </ul>
    </div>
</section>
</main>
</body>
</html>