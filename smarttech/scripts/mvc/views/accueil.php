<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil SmartTech</title>
</head>
<body>
    <h1>Page d'accueil SmartTech</h1>
    <?php include_header(); ?>
    

   <?php 
    //--Bienvenue $user--//
    echo $message_accueil;?>
  

    <!--Choix production ou conformité
        Boutons : choix production téléphone / production tablettes
                  conformité téléphone / conformité tablettes -->
 <div>
        <h2>Choisissez une catégorie:</h2>
        <a href="?categorie=production" class="button">Production</a>
        <a href="?categorie=conformite" class="button">Conformité</a>
    </div>
    <?php  
        if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
            if ($categorie == 'production') {
                // Show Production options
                echo '<div>
                        <h3>Production:</h3>
                        <a href="" class="button">Téléphone</a>
                        <a href="" class="button">Tablette</a>
                      </div>';
            } elseif ($categorie == 'conformite') {
                // Show Conformité options
                echo '<div>
                        <h3>Conformité:</h3>
                        <a href="" class="button">Téléphone</a>
                        <a href="" class="button">Tablette</a>
                      </div>';
            }
        }
    ?> 

<form method="post" action="loginController.php">
                    <button type="submit">Se déconnecter</button>

</body>
<footer><?php include_footer(); ?></footer>
</html>
