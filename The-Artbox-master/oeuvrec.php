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
{
    if ($oeuvre['id'] < count ($oeuvres)) 
{
    echo "<img src='" . $oeuvre['img'] . "' alt='" . $oeuvre['title'] . "'>";
    echo "<h1>" . $oeuvre['title'] . "</h1>";
    echo "<p>" . $oeuvre['author'] . "</p>";
    echo "<p>" . $oeuvre['text'] . "</p>";
} 
else {
    echo "L'oeuvre n'existe pas";
}
}
?>
    </main>
    <?php include('pied_de_page.php'); ?>
</body>
</html>

/* Autre possibilité pour afficher le contenu ?
{ 
if (array_key_exists($oeuvre['id']))
{
    echo "<img src='" . $oeuvre['img'] . "' alt='" . $oeuvre['title'] . "'>";
    echo "<h1>" . $oeuvre['title'] . "</h1>";
    echo "<p>" . $oeuvre['author'] . "</p>";
    echo "<p>" . $oeuvre['text'] . "</p>";
} 
else {
    echo "L'oeuvre n'existe pas";
}echo 'La clé "title" se trouve dans la recette !';
}
*/