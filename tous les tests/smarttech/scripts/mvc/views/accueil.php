<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style_accueil.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Accueil SmartTech</title>
</head>

<body>
    
    <h1>Page d'accueil SmartTech</h1>
    <?php include_header(); ?> 
    <div class="message_accueil"><?php include_message_accueil()?></div>
    <?php include_menu();?>
   


<form method="post" action="loginController.php">
                    <button type="submit" class="bouton_normal">Se déconnecter</button>
</form>
</body>
<footer><?php include_footer(); ?></footer>
</html>
