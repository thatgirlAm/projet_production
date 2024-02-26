<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <title>Document</title>
</head>
<body>
    <?php include_header();?>
    <?php include_menu();?>
    <h2 class="titre2">Compte rendu</h2>
    <form method="POST" action="validationConformite">
    <fieldset>
        <?php 
        echo "<p>Commentaire de l'opérateur : <br><br><p id='commentaireOperateur'>.".$data['commentaireOperateur']."</p></p>";
        echo "<div class='listeCriteresCompteRendu'>";
        echo "<br><p> Liste des critères non validés : </p>";
        echo "<ul>";
            if (is_array($infos['critereUnchecked']) && !empty($infos['critereUnchecked'])){
                echo "<ul class='listeCriteresUnchecked'>";
                    foreach ($infos['critereUnchecked'] as $key) {
                        echo "<br>";
                        echo  "<li>".$key."</li>";
                }}
            echo "</ul>";

        echo "<br><fieldset class='listeCriteresValides'><p> Liste des critères validés : </p>";
        echo "<ul>";
            if (is_array($infos['critereChecked']) && !empty($infos['critereChecked'])){
                echo "<ul class='listeCriteresChecked'>";
                    foreach ($infos['critereChecked'] as $key) {
                        echo "<br>";
                        echo  "<li>".$key."</li>";
                }}
            echo "</ul></fieldset>";
            echo "</div>";?>
            <button type="submit" class="buttonFormulaire">Valider l'opération</button>
    </fieldset>
</form>

<script>


</script>
</body>


</html>

