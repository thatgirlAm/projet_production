<?php

//Début du code corrigé par chatgpt
function include_header(){
    ?>
    <header>
        <img src="projet_production\smarttech\images\logo.jpeg" alt="logo">
    </header>
    <?php
}


function include_footer() {
    ?>
    <footer>
        Copyrights!<br>©️TAI <a href="mailto:">Contact</a>
    </footer>
    <?php
}
 function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>