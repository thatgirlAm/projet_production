<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Accueil SmartTech</title>
</head>

<body>
    <h1>Page d'accueil SmartTech</h1>
    <?php include_header(); ?>
    
    <?php include_menu();?>
   <?php 
    //--Bienvenue $user--//
    echo $message_accueil;?>

    <?php  
        if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
            if ($categorie == 'production') {
                $show_production = ~$show_production;

            } elseif ($categorie == 'conformite') {
                $show_conformite = ~$show_conformite;

            }
        }
    ?> 

<form method="post" action="loginController.php">
                    <button type="submit">Se déconnecter</button>
</form>
</body>
<footer><?php include_footer(); ?></footer>
</html>
