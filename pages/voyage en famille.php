<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                 margin:0px;
             }
            header{
    background-image:url(../images/fam.jpg);
    width:100%;
    background-size:cover;
    position:relative;
   margin-top:-20px;
    height:500px;
}
.logo{
   width:5%;
   height:39px;
   background-color:lightsalmon;
   font-family:math;
   font-size:15px;
   float:left;
}
.logo:first-letter{
    font-size:20px;
    font-family:cursive;
}
nav ul{
 list-style: none;
}
nav ul li{
    display:inline-block;
    padding:15px;

}
nav ul li a{
    text-decoration:none;
    color:white;
    font-size:18px;
    font-family:math;
}
nav ul li a:hover{
    border-bottom:1px solid white;
}
.search input[type=text]{
        width:300px;
        height:25px;
        border-radius:25px;
        border: none;
    }
         
.search{
        float:right;
        margin:7px;
}
         
.search button{
        background-color: transparent;
        color:gray;
        float: right;
        padding: 5px 10px;
        margin-right: 16px;
        font-size: 12px;
        border: none;
        cursor: pointer;
}
    .sous {
                display:none;
                
                background-color:transparent;
                position:absolute;
                width:100%;
                z-index:1000;
            }
            nav > ul li:hover .sous{
                display:block;
            }
            .sous li{
                float:left;
                width:100%;
                text-align:left;
            }
            .Sur > a::after{
                
                content:"▼";
                font-size:12px;
                
            }
            .sous a{
                padding:10px;
                border-bottom:none;
            }
            .sous a:hover{
                border-bottom:none;
                
            }
        </style>
    </head>
    <body>
        <header>
           <nav>
              <ul>
                  <li class="logo"><a href="../public_html/Accueil.php">D.C.D Home</a>   
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
                  <a href="../pages/Créercompte.php"><li style="float:right;"><i class="fa-solid fa-circle-user" style="top:0px;"></i></li></a>
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
        
         
    
         <p style="text-align:center; font-size: 17px;">Parce que chaque famille est unique, nos voyages ont été imaginés pour répondre à toutes les envies
          Randonner au grand air, découvrir le monde, vivre de multiples aventures ou pédaler en toute liberté, petits et grands y trouveront leur compte !
         A travers les valeurs qui nous animent, nous nous engageons à vous offrir la meilleure expérience de voyage possible : des moments forts à partager en famille, des itinéraires qui respectent le rythme de vos enfants, des vacances résolument actives et des découvertes qui ont du sens, le tout en assurant votre sécurité et votre tranquillité d’esprit.</p>
    
         
         <fieldset>
                <legend style="text-align:center; color:darkred; font-size: 40px;">DESCRIPTION</legend>
                
<fieldset style=" text-align: center; margin-right: 50px;float: left; width: 40%;">
    <h1>Nos voyages famille en groupe</h1>
         <p style="text-align: center; font-size: 18px;">*Des groupes de 5 à 15 personnes constitués de familles.</p>
         <p style="text-align: center; font-size: 18px;">* Des itinéraires et activités adaptés aux enfants et aux adultes.
         <p style="text-align: center; font-size: 18px;">* Une équipe à votre service : chauffeurs, cuisiniers…</p>
         <p style="text-align: center; font-size: 18px;">* Le transport des bagages assuré pour profiter de vos activités.</p>
         <p style="text-align: center; font-size: 18px;">* Votre sécurité est notre priorité. </p>
</fieldset> 
         
         
         <fieldset> 
             <h1>Nos voyages famille en individuel</h1>
             <p style="text-align: center; font-size: 18px;">*Des voyages famille avec accompagnateur</p>
             <p style="text-align: center; font-size: 18px;">*Des dates de départ à votre convenance.</p>
         <p style="text-align: center; font-size: 18px;">*Une logistique entièrement assurée par Terres d’Aventure.</p>
         <p style="text-align: center; font-size: 18px;">* Un large choix d’hébergements.</p>
         <p style="text-align: center; font-size: 18px;">* Des programmes flexibles selon vos envies. </p>
         </fieldset> 
             
             </fieldset>
    </body>
</html>
