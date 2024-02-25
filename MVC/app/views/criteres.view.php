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
    
    <fieldset class="fieldset_general"><legend>Formulaire Opérations :</legend>
    <div id="operationForm" class="formulaire">
    <form method="post" action="compteRendu">
    <fieldset>
    
    <!-- Choix Opérateur à partir de la BD -->
    <label for="labelOperateur">Opérateur : </label>
    <select name="operateur" id="operateur">
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
         
                <button type="submit" class="bouton_normal">Valider</button>
        </form>
    </fieldset>
</div>
<!--*****************************Javascript********************-->
<script>
        //----Fonction pour cacher le formulaire----//
        function toggleForm() {
        var form = document.getElementById('operationForm');
        form.classList.toggle('hidden');
    }
    //----Ajout d'eventListener pour les clicks----//
    document.getElementById('buttonForm').addEventListener('click', toggleForm); 
 
    </script>

    <?php include_footer();?>
</body>
</html>