<?php

//--Header--//
function include_header(){
    ?>
    <header>
        <img src="projet_production\smarttech\images\logo.jpeg" alt="logo">
    </header>
    <?php
}

//--Menu de navigation--//

function include_menu(){
    ?>
    <div class="menu" id="menu">
    <a href="#" class="boutonAccueil">Accueil</a>
    <div class="dropdown">
        <button class="boutonDropdown">Production</button>
        <div class="dropdown-content">
            <a href="productionController.php?item=tablettes">Tablettes</a>
            <a href="productionController.php?item=telephones">Téléphones</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="boutonDropdown">Conformité</button>
        <div class="dropdown-content">
            <a href="conformiteController.php?item=tablettes">Tablettes</a>
            <a href="conformiteController.php?item=telephones">Téléphones</a>
        </div>
    </div>
</div>
    <?php
}

//--Footer--//
function include_footer() {
    ?>
    <footer>
        Copyrights!<br>©️TAI <a href="mailto:">Contact</a>
    </footer>
    <?php
}

//--Message d'erreur--//
 function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>