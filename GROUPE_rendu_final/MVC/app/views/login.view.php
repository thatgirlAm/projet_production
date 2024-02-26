<!DOCTYPE html>

<!--A faire : 
 - Mot de passe oublié 
 - logo
 - styles
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">
        <title>Connexion SmartTech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    </head>
    <body>
        
        <h1>Page de connexion</h1>

        <?php 
            if (isset($something_to_say)) {
                include_error_message($something_to_say);
            }
        ?>

        <form method="post" action="login">
            <fieldset class="fieldset2">
                <legend>Se connecter</legend>
                <div class="div1">
                <input type="text" placeholder="Addresse Mail" id="addresse_mail" name="addresse_mail">
                <input type="password" placeholder='Mot de Passe' id='mdp' name="mdp">
                <button type="submit">Submit</button>
           </div>
        
        <div class="identifiantsProf">
    <div>
        <br><br><br>
        Voici vos identifiants manager : 
        <br>Username : prof@manager.com
        <br>Password : estiamanager123
    </div>
<br>
    <div>
        <br><br><br>
        Voici vos identifiants opérateur : 
        <br>Username : prof@operateur.com
        <br>Password : estiaoperateur123
    </div>
</div> </fieldset>
</form>
        <?php include_footer(); ?>

    </body>
</html>