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

        <?php 
            if (isset($something_to_say)) {
                include_error_message($something_to_say);
            }
        ?>

        <form method="post" action="loginController.php">
            <fieldset>
                <legend>Se connecter</legend>
                <input type="text" placeholder="Addresse Mail" id="login" name="login">
                <input type="password" placeholder='Mot de Passe' id='pwd' name="pwd">
                <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php include_footer(); ?>

    </body>
</html>