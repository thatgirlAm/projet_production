<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planification Tablette</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">

</head>
<body>
<?php include_header()?>

<h1>Planification des contrôles Tablette</h1>
<?php include_menu()?>

<fieldset>
<fieldset>

    <br><br><p class='acces'>Modification réservée aux Managers</p>

</fieldset>


<!-- Affichage de la liste d'attente -->
<fieldset class="parent"> 
 <h3>Liste d'attente planification tablette : </h3>
    <?php 
    //----Nous laissons ces class là pour que le css soit facilité----//
        echo "<div class='listeTablettesConformite'><ul>";
        
        foreach ($data as $key){
            echo 
            "<li><fieldset class ='enfantTablette'>
                <div class='compartimentTablette'>
                    <div><img src='https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/images/imageTablette1.jpg' alt='image tablette' id='imageTablette'></div>
                    <div><p><strong>".ucfirst($key['type'])."<br><br>Id : ".$key['id']."<br>Date présumée du contrôle : ".$key['date']."</strong><br><br></strong></p></div>
                    <div><button onclick='openModal()' class='buttonFormulaire'>Planifier ou modifier date</button></div></div>
            </fielset></li>";
        }
        echo "</ul></div>" ; 
    ?></fieldset></fieldset></fieldset>
    <form action="" method="post">
    <div id="dateControle" class="controle">
    <h2>Définir une date de contrôle</h2>
    <input type="date" id="datepicker">
    <br><br>
    <button onclick="submitDate()">Submit</button></form>
    </div>
<script>
/***************Javascript********************/
function checkUserId() {
  var Id = <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>;
  return Id === 2;
}
function openModal() {
    if (checkUserId()) {
  document.getElementById('dateControle').style.display = 'block';
  document.getElementById('overlay').style.display = 'block';
    }}

function closeModal() {
  document.getElementById('dateControle').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
}

function submitDate() {
  var selectedDate = document.getElementById('datepicker').value;
  alert("Date du contrôle " + selectedDate);
  closeModal(); 
}

;
</script>
</body>
</html>