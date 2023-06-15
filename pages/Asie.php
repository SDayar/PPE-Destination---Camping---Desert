<!DOCTYPE html>
<html>
    <head>
        <title>Destination-Camping-Déserts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../s.css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <style>
        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
  float: left;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}}
  section{
      width:100%;
  }
  section{
      width:100%;
      
  }
  section ul{
      list-style:none;
  }
  section ul li{
      display:inline-block;
      padding:20px;
      border:1px solid black;
      border-radius:5px;
  }
  section ul li a{
      text-decoration:none;
      color:black;
  }
input[type=submit]{
    margin-left:10px;
    border:1px solid black;
    padding:10px;
    background-color:transparent;
    border-radius:5px;
  }
  input[type=submit] a {
      text-decoration:none;
      color:black;
      font-family:math;
  }
  header{
    background-image:url(../images/Asie.jpg);
    width:100%;
    background-size:cover;
    position:relative;
    top:0px;
    height:550px;
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
    <center><section>
            <ul>
                <li><a href="destination.php">Afrique</a></li> 
                <li><a href="../pages/Amérique.php">Amérique</a></li>
                <li><a href="../pages/Asie.php">Asie</a></li>
                <li><a href="../pages/Océanie.php">Océanie</a></li>
              </ul>
        </section></center>
       <fieldset>
        <label for="i_nom"> Destination :</label>
        <select name="lst_type client" id="lst_typeclient"> 
            <option value="1">Chine</option> 
            <option value="2">Inde</option> 
            <option value="3">Jordanie</option>  
        </select> 
        
        <label for="i_nom">Durée:</label>
        <select name="lst_type client" id="lst_typeclient"> 
            <option value="1">1 semaine</option> 
            <option value="2">2 semaines</option> 
            <option value="3">1 mois</option> 
            <option value="99">Long séjour</option> 
        </select> 
        
        <label for="i_nom">Budget :</label>
        <select name="lst_type client" id="lst_typeclient"> 
            <option value="1">De 750 à 1250€</option> 
            <option value="2">De 1250 à 2000€</option> 
            <option value="3">De 2000 à 3000€</option> 
            <option value="4">Plus de 3000€</option>   
        </select> 
        </fieldset>
        
        <fieldset> 
          <img src="../images/chine.jpg" style="width:600px;height:350px;float:left; ">
          <h2>Chine</h2>
          <h2 style="color:darkblue;">Le désert de tianmo</h2>
       
          <p>Découvrez le magnifique désert de Tianmo, une combianaison de paysage, de montagne, à résevoir, et dunes qui présente un rafraichissement robuste de la vie et de la ville de pékin</p>
          <p style="text-align:end;font-size:20px;">A partir de 980€</p>
          <div class="visible-mobile">
					Note des clients: <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                          <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                                    
                                </div>
          <a href="Reservation.php"><input type="submit" value="Réserver" style="float:right;"></a>
        </fieldset>
        
    
        <fieldset>
            <img src="../images/B.jpg" style="width:600px;height:350px;float:left; ">
            <h2>Inde</h2> 
            <h2 style="color:darkblue;">le Désert du Thar</h2>
          
          <p>Accompagnés de votre équipe chamelière, vous en parcourez les formidables reliefs et le désert du Thar à rajasthani. Des montagnes septentrionales, une plaine indo-gangétique qui se trouvent au nord-est du pays, figurant parmi les randonnées de notre voyage</p>
           <p style="text-align:end;font-size:20px;">A partir de 1090€</p> 
           <div class="visible-mobile">
					Note des clients: <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                          <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                </div>
           <a href="Reservation.php"><input type="submit" value="Réserver" style="float:right;"></a>
        </fieldset>
        
    
        <fieldset>
            <img src="../images/jordanie.jpg" style="width:600px;height:350px;float:left; ">
             <h2>Jordanie</h2>
             <h2 style="color:darkblue;">Merveilles de Jordanie du nord au sud</h2>
            
            <p>Ce voyage de 11 jours en hôtel confort et campement aménagé, vous entraine à la découverte des nombreux trésors de Jordanie. Des châteaux du désert aux vestiges de Jerash, de la cité nabatéenne de Petra au ciel étoilé du wadi rum, laissez vous emporter par la magie de cet incroyable pays d'Orient.</p>
            <p style="text-align:end;font-size:20px;">A partir de 2645€</p>
            <div class="visible-mobile">
					Note des clients: <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                          <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
				                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                                    <svg width="30" height="20" viewBox="0 0 13.112 13.245"><defs><style>.a{fill:#eabf09;}</style></defs><path class="a" d="M295.622,424l4.094,2.467-1.083-4.653,3.612-3.13-4.763-.411-1.859-4.388-1.859,4.388-4.763.411,3.612,3.13-1.083,4.653Zm0,0" transform="translate(-289 -412.5)"/></svg>
                                </div>
            <a href="Reservation.php"> <input type="submit" value="Réserver" style="float:right;"></a>
            
        </fieldset> 
        
       
    </body>
</html>

