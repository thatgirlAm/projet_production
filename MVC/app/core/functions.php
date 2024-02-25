<?php
function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
    }

//-----Fonction pour empêcher de rentrer dans des loops où l'utilisateur peut run des scripts Js----//
function esc($str){
    return htmlspecialchars($str);
}


//--Header--//
function include_header(){
    ?>
    <div class="header">
            <img src="assets/images/logo.png" class="logo" alt="logo">
            
                <?php if(isset($_SESSION['addresse_mail'])){
                if(isset($_SESSION['nom'])){
                    $message =  $_SESSION['nom'];
                    $id = $_SESSION['id'];
                    $service = $_SESSION['service'];
                }}
                else{
                    $message = 'Operateur X';
                }
                if(isset($_SESSION['service'])==2){
                    $service = 'Manager';
                }
                else{
                    $service = 'Opérateur';
                }
                ?><div class="userInfos">
                <?php echo "<div class = messageUser>"."<div>".$message."</div><div> Id Employe : ".$id."</div><div> Fonction : ".$service."</div></div>";?>
            </div>
            
            <div class="userInfos">
                <div class="deconnexion1">
                <form method="post" action="login">
                    
                        <div class="deconnexion2"><a href="login">
                            <img src="iconedeconnexion.jpg" alt=""></div>
                            <div class="deconnexion2"><p>Se déconnecter</p></a></div>
                    </div></div>
            </form>
        </div>

    <?php
}

//--Message personnalisé--//

function include_message_accueil(){
    if(isset($_SESSION['addresse_mail'])){
    
        if(isset($_SESSION['nom'])){
            $message_accueil = 'Bienvenue ' . $_SESSION['nom'];
        }}
        else{
            $message_accueil = 'Bienvenue';
        }
    
    echo $message_accueil;
    
}



function redirect($path)
{
    header("Location: " .ROOT.$path);
	die;
}


//--Menu de navigation pages --//
function include_menu(){
    ?>
    
    <div class="menu" id="menu">
    <div class="dropdown">
    <button class="boutonDropdown" action=""><a href="home">Accueil</a></button>
    </div>
       <div class='dropdown'>
            <button class='boutonDropdown' action=''>Service Planification</button>
             <div class='dropdown-content'>
                 <a href='planificationTablette'>Tablettes</a>
                 <a href='planificationTelephone'>Téléphones</a>
        </div></div>
    <div class="dropdown">
        <button class="boutonDropdown" action="">Service Conformité</button>
        <div class="dropdown-content">
            <a href="conformiteTablette">Tablettes</a>
            <a href="conformiteTelephone">Téléphones</a>
        </div>
    </div>
</div>
    <?php
}
//--Message aux employés--//

function include_messageEmployes(){
    ?>
    <h1>Journal des Employés SmartTech</h1>
    <fieldset>
        <h3>Journal des Employés SmartTech - Focus sur Production & Conformité</h3>
        <p class="date">Édition Spéciale du 13 Février 2024</p>
        <p>Chers membres des équipes de Production et de Conformité,</p>
        <p>Ce mois-ci, nous voulons mettre en lumière les efforts concertés et les succès de nos équipes de Production et de Conformité. Votre travail acharné et votre dévouement assurent que chaque produit SmartTech non seulement répond aux attentes de nos clients en termes de qualité et d'innovation, mais respecte également toutes les normes réglementaires et les exigences de conformité.</p>
        
        <h2>Calendrier des Initiatives Clés - Février 2024</h2>
        
        <h3>Semaine 1 : 3 - 9 Février</h3>
        <ul>
            <li><strong>Production</strong> : 5 Février - Optimisation de la ligne de production pour augmenter l'efficacité de l'assemblage du SmartX5.</li>
            <li><strong>Conformité</strong> : 7 Février - Révision des dernières directives réglementaires internationales pour l'intégration dans les phases de conception et de production.</li>
        </ul>
        
        <h3>Semaine 2 : 10 - 16 Février</h3>
        <ul>
            <li><strong>Production</strong> : 12 Février - Formation sur les nouvelles technologies d'impression 3D pour composants de tablettes SmartTab.</li>
            <li><strong>Conformité</strong> : 14 Février - Audit interne pour évaluer l'adhésion aux normes de sécurité des produits en cours de développement.</li>
        </ul>
        
        <h3>Semaine 3 : 17 - 23 Février</h3>
        <ul>
            <li><strong>Production</strong> : 19 Février - Début des essais de production en petit lot pour la prochaine génération de tablettes SmartTab.</li>
            <li><strong>Conformité</strong> : 21 Février - Atelier sur les meilleures pratiques en matière de conformité environnementale et de durabilité des produits.</li>
        </ul>
        
        <h3>Semaine 4 : 24 - 29 Février</h3>
        <ul>
            <li><strong>Production</strong> : 26 Février - Révision et ajustement des processus de production en réponse aux premiers retours clients sur le SmartX5.</li>
            <li><strong>Conformité</strong> : 28 Février - Finalisation des rapports de conformité pour la nouvelle mise à jour du système d'exploitation des tablettes et téléphones.</li>
        </ul>
        
        <p>Votre engagement envers l'excellence et la qualité est ce qui distingue SmartTech dans un marché compétitif. Nous sommes fiers de votre travail et nous nous réjouissons de voir l'impact positif de ces initiatives sur l'expérience client globale.</p>
        <p>Merci pour votre engagement continu et votre passion pour l'excellence.</p>
        <p>Cordialement,</p>
        <p>L'équipe de rédaction du Journal des Employés SmartTech</p>
        <p>AI generated (we didn't have as much inspo)</p>
    </div>
</body>
</html>
    </fieldset>
    <?php
}

//--Footer--//
function include_footer() {
    ?>
    <footer>
        <p><strong>Projet ESTIA 2025</strong> <br><strong>Copyrights :</strong> Vu que cette entreprise n'existe pas, nous ne vous interdissons pas de tout copier, allez bisous ! </p>©️TAI <a href="mailto:smarttech@tech.fr">Nous écrire</a>
    </footer>
    <?php
}

//--Message d'erreur--//
 function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>