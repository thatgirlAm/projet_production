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
    <?php include_message_accueil()?>
    <?php include_messageEmployes()?>


<form method="post" action="loginController.php">
                    <button type="submit">Se déconnecter</button>
</form>
</body>
<footer><?php include_footer(); ?></footer>
</html>
