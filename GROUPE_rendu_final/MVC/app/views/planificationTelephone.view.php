<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planification Telephone</title>
    <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

</head>
<body>
    <?php include_header()?>
    <?php include_menu()?>
    <fieldset class="parent">
    <fieldset>

<br><br><p class='acces'>Modification réservée aux Managers</p>

</fieldset>
    <h3>Liste d'attente contrôle : </h3>
    <?php 
        echo "<div class='listeTelephonesConformite'><ul>";
        
foreach ($data as $key) {
    echo "<li><fieldset class='enfantTelephone'>
              <div class='compartimentTelephone'>
                  <div><img src='https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/images/imageTelephone.jpg' alt='image téléphone' id='imageTelephone'></div>
                  <div>
                      <p><strong>" . ucfirst($key['type']) . "<br><br>Id : " . $key['id'] . "<br><br>Date présumée du contrôle : " . $key['date'] . "</strong><br><br></p>
                      <button onclick='openModal()' class='buttonFormulaire' id='ButtondatePicker'>Planifier ou modifier date</button>
                  </div>
              </div>
          </fieldset></li>";
}
echo "</ul></div>";
?></fieldset></fieldset></fieldset>
<form action="" method="post">
<div id="dateControle" class="controle">
<h2>Définir une date de contrôle</h2>
<input type="date" id="datepicker">
<br><br>
<button onclick="submitDate()">Submit</button></form>
</div>
<script>
// Javascript
?>
<script>
function openModal(id) {
    document.getElementById('dateControle_' + id).style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeModal(id) {
    document.getElementById('dateControle_' + id).style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function submitDate() {
    var selectedDate = document.getElementById('datepicker').value;
    var id = document.getElementById('selectedId').value;
    alert("Date du contrôle " + selectedDate + " pour l'ID " + id);
    closeModal(id);
}
</script>
</body>
</html>