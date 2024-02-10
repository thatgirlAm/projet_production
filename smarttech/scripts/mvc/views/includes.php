<?php

//Début du code corrigé par chatgpt
function include_header(){
    echo "<h1>Bienvenue</h1>" . htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
}

//Fin de correction
function include_footer() {
    ?>
    <footer>
        Copyright!©️TAI <a href="mailto:">Contact</a>
    </footer>
    <?php
}
?>