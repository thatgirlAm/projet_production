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
    <div class="dropdown">
        <button onclick="menuProduction()" class = "dropbtn">Production</button>
        <div id="myDropdownbtn"class="dropdown-content">
            <a href="">Téléphones</a>
            <a href="">Tablettes</a>
        </div>
    </div>

    <div class="dropdown">
        <button onclick="menuConformite()" class = "dropbtn">Conformité</button>
        <div id="myDropdownbtn"class="dropdown-content">
            <a href="">Téléphones</a>
            <a href="">Tablettes</a>
        </div>
    </div>
    <script>
     function menuProduction(){
        var menuBox = document.getElementById('types').classList.toggle("show");
     }
     windows.onclick = function(event){
        if(!event.target.matches('.dropbtn')){
            var i;
            for (i=0; i< dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if(openDropdow.classList.remove('show')){
                    openDropdown.classList.remove('show');
                }
            }
        }
     }
     function menuConformite(){
        var menuBox = document.getElementById('types').classList.toggle("show");
     }
     windows.onclick = function(event){
        if(!event.target.matches('.dropbtn')){
            var i;
            for (i=0; i< dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if(openDropdow.classList.remove('show')){
                    openDropdown.classList.remove('show');
                }
            }
        }
     }
     </script>
</body>
<footer><?php include_footer(); ?></footer>
</html>