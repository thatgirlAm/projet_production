<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Accueil SmartTech</title>
</head>

<body>
    
   
    <?php include_header(); ?>  
    <h1>Page d'accueil SmartTech</h1>
    <?php include_menu();?>
    <?php include_messageEmployes();?>


<form method="post" action="logout">
                    <button type="submit" class="bouton_normal">Se déconnecter</button>
</form>
</body>
<footer><?php include_footer(); ?></footer>
</html>
