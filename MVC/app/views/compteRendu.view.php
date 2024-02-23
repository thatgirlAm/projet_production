<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="assets/css/style.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <h1>Compte rendu</h1>
    <?php include_menu();?>
    <fieldset>
        <?php 
        echo "<p>Commentaire de l'opérateur : <br><br>".$data['commentaireOperateur']."</p>";
        //Rajouter la date 
        //Rajouter le manager
        //Rajouter le id produit et le type
        echo "<br><p> Liste des critères non validés : </p>";
        echo "<ul>";
            if (is_array($infos['critereUnchecked']) && !empty($infos['critereUnchecked'])){
                echo "<ul class='listeCriteres'>";
                    foreach ($infos['critereUnchecked'] as $key) {
                        echo "<br>";
                        echo  "<li>".$key."</li>";
                }}
            echo "</ul>";?>
    </fieldset>
</body>
</html>

