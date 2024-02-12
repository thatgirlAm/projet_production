<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/example.css">
        <title>Connexion SmartTech</title>
    </head>
    <body>
        
        <?php include_header(); ?>
        <h1>Page de connexion</h1>

        <?php 
            if (isset($something_to_say)) {
                include_error_message($something_to_say);
            }
        ?>

        <form method="post" action="loginController.php">
            <fieldset>
                <legend>Se connecter</legend>
                <input type="text" placeholder="Addresse Mail" id="addresse_mail" name="addresse_mail">
                <input type="password" placeholder='Mot de Passe' id='mdp' name="mdp">
                <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php include_footer(); ?>

    </body>
</html>