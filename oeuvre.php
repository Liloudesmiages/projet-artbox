<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?>

    <main>
        <?php
        // Inclure le fichier contenant les informations des œuvres
        include('oeuvres.php');

        // Récupérer l'identifiant d'œuvre depuis l'URL
$oeuvreId = $_GET['id'];

// Rechercher l'œuvre correspondante dans le tableau
foreach ($oeuvres as $oeuvre) 

// Afficher son contenu ou pas
foreach ($oeuvres as $oeuvre) {
    if ($oeuvreId == $oeuvre['id']) {
        echo "<article id=\"detail-oeuvre\">";
        echo "<div id=\"img-oeuvre\">";
        echo "<img src='" . $oeuvre['img'] . "' alt='" . $oeuvre['title'] . "'>";
        echo "</div>";
        echo "<div id=\"contenu-oeuvre\">";
        echo "<h1>" . $oeuvre['title'] . "</h1>";
        echo "<p class=\"description\">" . $oeuvre['author'] . "</p>";
        echo "<p class=\"description-complete\">" . $oeuvre['text'] . "</p>";
        echo "</div>";
        echo "</article>";
    }
}
?>
</main>
    <?php include('pied_de_page.php'); ?>
</body>
</html>

