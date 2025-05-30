<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Pulla ja kakku kahvila</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="tyyli.css" type="text/css">
    <style>
    </style>
</head>
<body>
    <footer>
        Ma – Pe: 8-17 |  Lauantai: 8-16  |  Sunnuntai: suljettu 
    </footer>
    <header>
        <?php
        session_start();
        if (!isset($_SESSION['kirjautunut']) || $_SESSION['kirjautunut'] !== true) {
        echo '<span class="kirjaudusisa"><a href="login.html">Kirjaudu sisään</a></span>';
        } else {
        echo '<span class="kirjaudusisa"><a href="logout.php">Kirjaudu ulos</a></span>';
        }
        ?>
        <nav class=links>
        <h1>Kahvila</h1>
        <p><a href="#kahvit">Kahvit</a> | <a href="#donitsit">Donitsit</a>| <a href="#pullat">Pullat</a></p>
        </nav>
        <nav class="navbar">
            <a class="active" href="index.php">Etusivu</a>
            <a href="ruokalista.php">Ruokalista</a>
            <a href="yhteystiedot.php">Yhteystiedot</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Tervetuloa!</h2>
            <div class="section-content">
                <p>Tervetuloa viihtyisään kahvilaamme! Tarjoamme herkullisia kahveja, tuoreita leivoksia
                 ja perinteisiä pullia. Meillä voit nauttia rauhallisesta hetkestä hyvän juoman ja leivonnaisen äärellä.</p>
            </div>
            
        </section>
        <section id="leivokset">
    <h2>Leivoksemme</h2>
    <div class="section-content">
        <p>Tarjoamme päivittäin vaihtuvan valikoiman tuoreita leivoksia: suklaakakkua, juustokakkua, sitruunapiirasta
             ja paljon muuta. Kaikki valmistettu rakkaudella omassa keittiössämme!</p>
    </div>
</section>

        <section id="kahvit">
            <h2>Kahvit</h2>
            <div class="section-content">
                <p>Valikoimassamme on vastajauhettuja kahveja, kuten espresso, cappuccino, latte ja
                 suodatinkahvi. Käytämme vain laadukkaita kahvipapuja, jotka takaavat täyteläisen maun.</p>
                 <img src="kahvikuppi.png" alt="Herkullisia leivoksia" class="section-image">
            </div>
            
        </section>

        <section id="donitsit">
        <h2>Donitsit</h2>
        <div class="section-content">
        <p>Meidän donitsimme ovat pehmeitä, juuri sopivan makeita ja aina tuoreita.
             Valikoimassa on klassisia sokeri- ja kinuskidonitseja, suklaakuorrutettuja
              herkkuja sekä värikkäitä kausimakuja. Tule maistamaan päivän erikoisuus!</p>
              <img src="donitsi.png" alt="Tuoreita donitseja" class="section-image">
        </div>
        </section>


        <section id="pullat">
            <h2>Pullat</h2>
            <div class="section-content">
                <p>Perinteiset suomalaiset pullamme – kanelipullat, voisilmäpullat ja korvapuustit
                 – vievät kielen mennessään. Tule maistamaan lämmin pulla kupin kahvin kera!</p>
                 <img src="pulla.png" alt="Herkullisia leivoksia" class="section-image">
            </div>
            
        </section>
    </main>
</body>
</html>