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
    
    <a href=""></a>
   <?php 
    //--Bienvenue $user--//
    echo $message_accueil;?>
  

    <!--Choix production ou conformité
        Boutons : choix production téléphone / production tablettes
                  conformité téléphone / conformité tablettes -->

    <?php  


    ?> 

 <form method="post" action="loginController.php">
                <fieldset>
                    <legend>Se déconnecter</legend>
                    <button type="submit">Se déconnecter</button>
                </fieldset>
            </form>
<!--<a href="loginController.php">Log out</a>-->

</body>
<footer><?php include_footer(); ?></footer>
</html>