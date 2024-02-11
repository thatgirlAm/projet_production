<!DOCTYPE html>
<!--A retravailler-->

<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil SmartTech</title>
</head>
<body>
    <h1>Page d'accueil</h1>
    <?php include_header(); ?>
    
    <?php 
    //--Bienvenue $user--//
    echo $message_accueil;?>
    
     <!--Choix production ou conformité-->
   
    <?php  
    $model = new ListeProduits;
    $output.='<ul>'
    // la variable $model doit être remplacée par le model, à voir après
    foreach($model->getProduits() as Produit){
        $output .= '<li>'. $produit['id'].$produit['nom'].$produit['etat'].'</li>';
    }
    $output.='</ul>'
    return $output;
    ?>
  


</body>
<footer><?php include_footer(); ?></footer>
</html>