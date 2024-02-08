<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?>

    <main>
        <div id="liste-oeuvres">
    <?php
    
    // Inclure le fichier contenant les informations des œuvres
    include('oeuvres.php');
   
    // Affichage des informations
    foreach ($oeuvres as $oeuvre) 
    { 
    ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                    <img src="<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['title'] ; ?>">
                    <h2><?php echo $oeuvre['title']; ?></h1>
                    <p class="description"><?php echo $oeuvre['author']; ?></p> 
                    </a>
            </article>  
            <?php } ?>       
        </div>
    </main> 
   <?php include('pied_de_page.php'); ?>
</body>
</html>

