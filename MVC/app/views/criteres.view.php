<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="assets/css/style.css" rel="stylesheet">
    <title>Nouvelle Opération</title>
</head>
<body>
    <?php include_header();
    echo  '<h1>Opération de conformité</h1>';?>
    <fieldset><legend>Formulaire Opérations :</legend>
    <fieldset>
    
    <!-- Choix Opérateur à partir de la BD -->
    <label for="labelOperateur">Opérateur : </label>
    <select name="cars" id="cars">
        <?php 
        if (is_array($listeOperateurs) && !empty($listeOperateurs)) {
            foreach ($listeOperateurs as $operateur) {
                echo "<option value='" . htmlspecialchars($operateur['nom']) . "'>" . htmlspecialchars($operateur['nom']) . "</option>";
            }
        } else {
            echo "<option value=''>Aucun opérateur disponible</option>";
        }
        ?>
    </select>
</fieldset>
            <br><legend>Critères : </legend>
        <?php if (is_array($liste) && !empty($liste)){
            echo "<ul class='listeCriteres'>";
                foreach ($liste as $key) {
                    echo '<br><br><input type="checkbox" id="control2" name="control2" unchecked>'; "<li>".print_r($key['enonce'])."</li>";
                }
            echo "</ul>";
        }
        else{
            echo "aucun critère";
        }
        ?>
    </fieldset>
    <?php include_footer();?>
</body>
</html>