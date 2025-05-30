<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

$kayttajatunnus = $_POST['tunnus'] ?? '';
$salasana = $_POST['salasana'] ?? '';

// Kuvitellaan, että käyttäjätunnus on admin ja salasana 1234
if ($kayttajatunnus === 'admin' && $salasana === '1234') {
    $_SESSION['kirjautunut'] = true;
    $_SESSION['kayttaja'] = 'admin';
    header("Location: index.php");
    exit;
} else {
    echo "Väärä tunnus tai salasana.";
}
?>
</body>
</html>