<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <title>Conformite Tablette</title>
</head>
<body>
    
    <?php include_header();?> 
    <br><h1>Service conformité Tablette</h1><br>
    <br><?php include_menu();?>
    
       
    
        <button action="critere" class="buttonFormulaire" ><a href="critere" id="boutonControle">Réaliser un nouveau contrôle</a></button>

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