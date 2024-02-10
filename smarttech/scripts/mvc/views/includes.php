<?php

//Début du code corrigé par chatgpt
function include_header(){
    ?>
    <header>
        <h1>Page de connexion</h1>
    </header>
    <?php
}


function include_footer() {
    ?>
    <footer>
        Copyright!©️TAI <a href="mailto:">Contact</a>
    </footer>
    <?php
}
 function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>