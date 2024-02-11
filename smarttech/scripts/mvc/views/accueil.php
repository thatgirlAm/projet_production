<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/styles.css">
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
        <button onclick="menuTelephone()" class = "dropbtn">Production</button>
        <div id="myDropdownbtn"class="dropdown-content">
            <a href="">Téléphones</a>
            <a href="">Tablettes</a>

        </div>
    </div>
    <script>
     function menuTelephone(){
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