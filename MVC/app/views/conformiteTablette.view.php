<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Conformite Tablette</title>
</head>
<body>
    <h1>Service conformité Téléphone</h1>
    <?php include_header();?>
    <?php include_menu();?>
    <button action="critere" class="buttonFormulaire" >Réaliser un nouveau contrôle</button>
    <fieldset class="parent">
    <h3>Liste d'attente contrôle : </h3>
    <?php 
        echo "<div class='listeTablettesConformite'><ul>";
        foreach ($data as $key){
            echo 
            "<li><fieldset class ='enfantTablette'>
                <div class='compartimentTablette'>
                    <div><img src='assets/images/imageTablette1.jpg' alt='image tablette' id='imageTablette'></div>
                    <div><p><strong>".ucfirst($key['type'])."<br><br>Id : ".$key['id']." </strong><br><br>Date de planification conformite : <strong>".$key['date']."</strong></p></div>
                </div>
            </fielset></li>";
        }
        echo "</ul></div>" ; 
    ?></fieldset>
    <?php include_footer();?>
</body>

</html>