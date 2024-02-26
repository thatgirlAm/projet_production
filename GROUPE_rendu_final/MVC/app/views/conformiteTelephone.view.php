<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <title>Conformite Telephone</title>
</head>
<body>
    <h1>Service conformité Téléphone</h1>
    <?php include_header();?>
    <?php include_menu();?>
    <button action="critere" class="buttonFormulaire" ><a href="critere" id="boutonControle">Réaliser un nouveau contrôle</a></button>
    <fieldset class="parent">
    <h3>Liste d'attente contrôle : </h3>
    <?php 
        echo "<div class='listeTelephonesConformite'><ul>";
        foreach ($data as $key){
            echo 
            "<li><fieldset class ='enfantTelephone'>
                <div class='compartimentTelephone'>
                    <div><img src='https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/images/imageTelephone.jpg' alt='image téléphone' id='imageTelephone'></div>
                    <div><p><strong>".ucfirst($key['type'])."<br><br>Id : ".$key['id']." </strong><br><br>Date de planification conformite : <strong>".$key['date']."</strong></p></div>
                </div>
            </fielset></li>";
        }
        echo "</ul></div>" ; 
    ?></fieldset>
    <?php include_footer();?>
</body>

</html>