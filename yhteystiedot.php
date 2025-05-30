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
        <p><a href="#otayhteytta">Ota Yhtettä</a> | <a href="#yhteystiedot">Yhteystiedot</a>| <a href="#aukioloajat">Aukioloajat</a></p>
        </nav>
        <nav class="navbar">
            <a href="index.php">Etusivu</a>
            <a href="ruokalista.php">Ruokalista</a>
            <a class="active" href="yhteystiedot.php">Yhteystiedot</a>
        </nav>
    </header>
    <?php
    $_SESSION['nimi'] = "Tomas Nevantie";
    $_SESSION['päivitä'] = 1;
    ?>
    <section id="yhteystiedot">
        <h2>Yhteystiedot</h2>
        <p>Osoite: Esimerkkikatu 1, 12345 Kaupunki</p>
        <p>Puhelin: 012-3456789</p>
        <p>Sähköposti: kahvila@gmail.com
    </section>
    <section id="aukioloajat">
        <h2>Aukioloajat</h2>
        <p>
            Ma–Pe: 8:00 – 17:00<br>
            Lauantai: 8:00 – 16:00<br>
            Sunnuntai: Suljettu
        </p>
    </section>
    <section id="otayhteytta">
    <h2>Ota yhteyttä</h2>
    <form action="tallenna.php" method="POST">
        <label for="nimi">Nimi:</label><br>
        <input type="text" id="nimi" name="nimi" placeholder="Nimi" required><br><br>
        <label for="email">Sähköposti:</label><br>
        <input type="email" id="email" name="email" placeholder="Sähköposti" required><br><br>
        <label for="message">Viesti:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" placeholder="Viesti" required></textarea><br><br>
        <button class="btn btn-border-reveal" type="submit">Lähetä</button>
    </form>
    </section>
</body>
</html>