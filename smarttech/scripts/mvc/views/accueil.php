<!DOCTYPE html>
<!--A retravailler-->

<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil SmartTech</title>
</head>
<body>
    <h1>Page d'accueil</h1>
    <?php include_header(); ?>
    
   <?php 
    $message_accueil = "Rien";
    //--Bienvenue $user--//
    echo $message_accueil;

  
  if (is_array($liste)  && !empty($liste)) {
        echo "<ul>";
        foreach ($liste as $produit) {
            print_r($produit);
            echo "<li>" . $produit['id']. "</li>";
        }
        echo "</ul>";   
    } 
    else {
            echo "Aucun produit en stock"; // In case $liste is empty or not an array
        }
    ?>
    
    <!--Choix production ou conformité-->
    <?php  
    
    
    ?> 

</body>
<footer><?php include_footer(); ?></footer>
</html>