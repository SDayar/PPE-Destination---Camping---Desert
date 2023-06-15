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
    background-image:url(../images/lib.jpg);
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
                  <li class="logo"><a href="Accueil.php">D.C.D Home</a>   
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
         
         
   
         <p style="text-align:center; font-size: 17px;">Nos voyages « liberté » s’adressent à des individuels (couple, famille, amis, collègues..) qui souhaitent privatiser leur votre voyage rien que pour eux et ainsi voyager en toute autonomie.vous pouvez aménager la catégorie d’hébergement, disposer de variantes de randonnées et d’activités selon vos envies sur place, ajouter quelques options proposées </p>
        
         
         <fieldset>
             <legend style="text-align:center; color:darkred; font-size: 40px;">DESCRIPTION</legend>
             
             <p style="text-align: center; font-size: 20px;"> Nos voyages « liberté » s’adressent à des individuels (couple, famille, amis, collègues..) qui souhaitent privatiser leur votre voyage rien que pour eux et ainsi voyager en toute autonomie.</p>   
             <p style="text-align: center; font-size: 20px;">un voyage en toute sécurité avec un numéro d’astreinte 7j/7 24h/24 Nos randonnées en liberté sont conçues pour vous permettre de voyager à votre rythme, en toute autonomie, sans vous préoccuper de l’organisation logistique. Il s’agit d’une offre sans guide, destinée aux voyageurs individuels</p>
         </fieldset> 
    </body>
</html>
