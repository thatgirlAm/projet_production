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
    <?php include 'header.php'; ?>
    
    <!-- ... your existing PHP code ... -->

    <!--Choix production ou conformité-->
    <div>
        <h2>Choisissez une catégorie:</h2>
        <!-- Buttons to choose Production or Conformité -->
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
                        <a href="?categorie=production&type=telephone" class="button">Téléphone</a>
                        <a href="?categorie=production&type=tablette" class="button">Tablette</a>
                      </div>';
            } elseif ($categorie == 'conformite') {
                // Show Conformité options
                echo '<div>
                        <h3>Conformité:</h3>
                        <a href="?categorie=conformite&type=telephone" class="button">Téléphone</a>
                        <a href="?categorie=conformite&type=tablette" class="button">Tablette</a>
                      </div>';
            }
        }
    ?> 

</body>
<footer><?php include 'footer.php'; ?></footer>
</html>
