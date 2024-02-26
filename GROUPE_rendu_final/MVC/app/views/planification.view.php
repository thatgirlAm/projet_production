<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://devweb.estia.fr/tai/tai_crocodile/project/MVC/public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <title>Nouvelle Opération</title>
</head>
<body>
    <?php echo  "<h1>Planification du contrôle</h1>";
    include_header();
    include_menu();?>
    
    
    <fieldset class="fieldset_general"><legend>Formulaire de planification</legend>
    <div id="operationForm" class="formulaire">
    <form method="post" action="compteRendu">
    <fieldset>
    
    <label for="labelOperateur">Opérateur : </label>
    <label for="operateur"><?php echo $_SESSION['nom']." (id :<div id='id'>".$_SESSION['id']."</div>)";?></label>
    <br><br><label for="type">Type : </label>
        <input type="radio" id="telephone" name="produit" class="telephone"><label>Telephone</label>
        <input type="radio" id="tablette" name="produit" class="tablette"><label>Tablette</label>

        <!-- Choix du produit à partir de la BD -->
    <br><br><label for="labelIdProduit">Id Porduit : </label>
    <select name="idProduit" id="idProduit">
        <?php 
        if (is_array($listeProduitsTelephone) && !empty($listeProduitsTelephone)) {
            foreach ($listeProduitsTelephone as $produit) {
                echo "<option value='" . htmlspecialchars($produit['id']) . "'>" . htmlspecialchars($produit['id']) . "</option>";
            }
        } else {
            echo "<option value=''>Aucun produit à contrôler</option>";
        }

        ?>
    </select>
    <br><br><label for="labeldateOperation"></label>Date d'opération : <input type="date" name="date" id="date" required><br>
</fieldset>
            <br><legend>Critères : </legend>
        <?php if (is_array($liste) && !empty($liste)){
            echo "<ul class='listeCriteres'>";
                foreach ($liste as $key) {
                    echo "<div class='critere'>";
                    echo "<br>";
                    echo "<label class='switch'>";
                    echo "<input type='checkbox' name='criteres[" . $key['id'] . "]' value='" . $key['id'] . "' id='critere" . $key['id'] . "'>";
                    echo "<span class='slider round'></span>";
                    echo "</label>";
                    echo "<strong>Id critère :</strong> " . htmlspecialchars($key['id']) . "<br><strong>Critère :</strong> " . htmlspecialchars($key['0']);
                    echo "</div>";
                }
            echo "</ul>";
        }
        else{
            echo "aucun critère";
        }
        ?>
    <div class="commentaire" id="commentaire">
        <label for="commentaire">Ajouter un commentaire : </label>
        <input type="text" name ="commentaireOperateur" id="commentaireOperateur">
    </div>
         
                <button type="submit" class="buttonFormulaire">Valider</button>
        </form>
    </fieldset>
</div>
<!--*****************************Javascript********************-->
<script>
    var listeProduitsTelephone = <?php echo json_encode($listeProduitsTelephone); ?>;
var listeProduitsTablette = <?php echo json_encode($listeProduitsTablette); ?>;
    function updateProduitList() {
    var select = document.getElementById('idProduit');
    var telephone = document.getElementById('telephone').checked;
    var tablette = document.getElementById('tablette').checked;
    var listeProduits = telephone ? listeProduitsTelephone : listeProduitsTablette;

    select.innerHTML = '';

    listeProduits.forEach(function(produit) {
        var option = new Option(produit.id);
        select.appendChild(option);
    });
}

document.getElementById('telephone').addEventListener('change', updateProduitList);
document.getElementById('tablette').addEventListener('change', updateProduitList);

window.onload = function() {
    updateProduitList();
};
    </script>

    <?php include_footer();?>
</body>
</html>