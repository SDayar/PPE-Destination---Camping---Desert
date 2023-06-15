<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <link rel="stylesheet" href="../css/reservation.css"/>
        <title>résérvation</title>
        <meta charset="UTF-8">
        <meta name="cedric" content=" ">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
        
    </head>
    <body>
                  <header>
           <nav>
              <ul>
                  <li class="logo"><a href="../public_html/Accueil.php">D.C.D Home</a></li>   
                  <li><a href="../pages/destination.php">Destinations</a></li>
                 <li><a href="#" class="Sur">Types de voyages</a>
                  <ul class="sous">
                      <li><a href="../pages/Voyage en famille.php">Voyage en famille</a></li>
                      <li><a href="../pages/Voyage en groupe.php">Voyage en groupe</a></li>
                      <li><a href="../pages/Voyage en liberté.php">Voyage en liberté</a></li>
                  </ul>
              </li>
                  <li><a href="../pages/Reservation.php">Réservation</a></li>
                  <li><a href="../pages/Vols&Hôtels.php">Vols&Hôtels</a></li>
                  
                  <div class="search"> 
                  <form action="#">
                  <input type="text" placeholder="Rechercher" name="search">
                  <button>
                  <i class="fa-solid fa-magnifying-glass" style="font-size:18px;"></i>
                  </button>
                  </form>
                  </div>
               </ul>
           </nav>
              
          </header> 
        <section class="all">
        <form class="let" action ="Reservation.php" method ="POST">
            <h4>Reservez dès maintenant:</h4>
            <hr>
            <div class="namefield">
                <div>
                    
                    <label>NOM</label><input type="text" placeholder="Nom" required="required" name="nom" > 
                <div/>
                <div>
                    
                    <label>Prénom:</label><input type="text" placeholder="Prénom" required="required" name="prenom" />
                <div/>
                <div>
                    
                    <label>Téléphone:</label><input type="number" required="required" name="num_tel"/>
                <div/>
                <div>
                    <label>Date de naissance:</label>
                    <input type="date" placeholder="Date de naissance" required="required" name="date_naiss"> 
                <div/>
                <div><label>E-mail:</label>
            <input type="email" required="required" name="email"> <div/> 
                <div>
                    <label>Destination:</label>
                    <select name="pays">
                        <option> Maroc</option>
                        <option> Jordanie</option>
                        <option>Australie</option>
                        <option>Chine</option>
                        <option> Etats-Unis</option>
                        <option>Mauritanie</option>
                        <option>Chili</option>
                        <option>Egypte</option>
                        <option>Inde</option>
                        
                    </select>
                     <label>Type de voyage:</label>
                    <select name="type_voy">
                        <option>Voyage en famille</option>
                        <option> Voyage en groupe</option>
                        <option>Voyage en liberté</option>
                        <option>Autre</option>
                        
                        
                    </select>
                    
                <div/>
                <label>Date de départ:</label>
                    <input type="date" placeholder="Date de départ" name="date_depart"/> 
                <div/>
                <label>Date d'arrivée:</label>
                    <input type="date" placeholder="Date d'arrivée" name="date_arr" > 
                <div/>
                 <div>
                    <label>Nombre de passagers:</label>
                    <input type="number" required="required" name="nbrepassage"> 
                <div/>
                <div>
                    <label>Votre passeport:</label>
                    <input type="file" accept="pdf/*"/> 
                <div/>
          
           
            <input type="submit" value="Réserver" id='btn_envoyer'/>
            <center><p>Vous avez déja un compte?<a href="Créercompte.php">Se connecter<a/><p/></center>
                    <center>
                        <p>Contactez nous via:<br><i class="fa-solid fa-phone"> </i>:<a href="callto:+331798279"> 01 54898928</a> <br> <i class="fa-solid fa-envelope"></i> :<a href="mailto:sdayar318@gmail.com">dcdagency@outlook.com</a></p>
                        <p style='font-size:13px;'>@D.C.D Agency © 2023</p><br />
                        <article><div id="reponse"></div>
               <div id= "message" style='z-index:5; display:none; background-color:white;'><i class="fa-solid fa-check fa-bounce" style="color: #17ed07;"></i><br /></div>
                        </article>
                    </center>
            
                    </form>
        </section>
    </body>
   <!--Saifidine-->
    <?php
 setlocale(LC_TIME, "fr_FR");
date_default_timezone_set("Europe/Paris");
    if (!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["num_tel"])&&!empty($_POST["email"])&&$_POST["date_arr"]&&!empty($_POST["date_depart"])&&$_POST["nbrepassage"]&&$_POST["pays"]&&$_POST["type_voy"] )
    { 
    $connexion = new PDO('mysql:host=127.0.0.1;dbname=dcd_agency', 'root', '');
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["num_tel"];
    $email = $_POST["email"];
    $datearrivee = htmlspecialchars($_POST["date_arr"]);
    $datedepart = htmlspecialchars($_POST["date_depart"]);
    $nbrepassagers = htmlspecialchars($_POST["nbrepassage"]);
    $pays = htmlspecialchars($_POST["pays"]);
    $type_voy = htmlspecialchars($_POST["type_voy"]);
    $date_reser= date("d-m-Y H:i:s");
    echo $date_reser;
    $id_utilisateurs_req = "select ID_UTILISATEURS "
          . "from utilisateurs "
          . "where NUM_TEL =".$tel ;
    
    $ligne_idut = $connexion -> query($id_utilisateurs_req);
   
    while ( $reponse_idut = $ligne_idut->fetch()){
        //récupération de l'id_utilisateurs//
        $id_ut =$reponse_idut["ID_UTILISATEURS"];
         $id_dest_req = "select ID_DESTINATIONS "
          . "from destinations "
          . "where PAYS ='$pays'";
         $ligne_iddes = $connexion -> query($id_dest_req);
        while ($reponse_iddes = $ligne_iddes->fetch())
        {
            //récupération de l'id_destinations//
            $id_des =$reponse_iddes["ID_DESTINATIONS"];
          //insertion dans la table voyages//
        $insert_voy = "insert into voyages( ID_UTILISATEURS, ID_DESTINATIONS, DATE_DEPART, DATE_RETOUR ) "
        ." values ( '$id_ut','$id_des','$datedepart', '$datearrivee')";
        
        
     $connexion-> exec($insert_voy);
     $id_voyages_req = "select ID_VOYAGES"
             ." from voyages"
             ." where ID_UTILISATEURS=".$id_ut;
     $ligne_idvoy = $connexion -> query($id_voyages_req);
     while ( $reponse_idvoy = $ligne_idvoy->fetch())
     {
         //récupération de la valeur id_voyages"
         $id_voy = $reponse_idvoy["ID_VOYAGES"];
         //insertion dans la table réservations//
         $insert_reser = "insert into reservations( ID_VOYAGES, DATE_RESERVATION) "
        ." values ( '$id_voy', '$date_reser')";
         
      $connexion-> exec($insert_reser);   
     }
        }
     }
    }
    
    
    
    
    ?>
   <script href='../javascript/compte.js'></script>
</html>
