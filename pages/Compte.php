<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Destination-Camping-Déserts : Créer un compte</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="page d'inscription"/>
        <link rel="stylesheet" href="../css/compte.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
    </head>
    <body style='z-index:-1;'>
       <article>
            <p><a href="../pages/Connecter.php">D.C.D Home</a></p>
        </article>
        <center>
            <form Id="inscription" action="connecter.php" method="POST">
        <section class="Boite">
            <section class='données'>
            <label><i class="fa-regular fa-user"></i>:</label><input type="text" Id="name" name ="nom" required="required" placeholder="Entrer votre nom" pattern="[A-Z]+"/><br>
            <label><i class="fa-regular fa-user"></i>:</label><input type="text" Id="prenom" name="prenom" required="required" placeholder="Entrer votre Prenom" /><br>
            <label><i class="fa-solid fa-phone"></i>:</label><input type="tel" name="tel"  placeholder='Numéro de téléphone'/><br>
            <label><i class="fa-regular fa-envelope"></i>:</label><input type="email" name="email" Id="mail" required="required" placeholder='nom@gmail.com'/><br>
            <label><i class="fa-solid fa-key"></i>:</label><input type="password" name="motdepasse" Id="password" required="required" min="6" max="10"/><br>
            <center>
               
                <input type="submit" value="Valider" Id="val" style="width:100px; background-color:transparent; padding-top:5px"/><br>
                <input type="reset" value="Supprimer" style="width:200px; background-color:transparent; padding-top:5px;"></center>
            </section>
                <form class="case">
                <h3 style="color:white;">Conditions d'inscription:</h3>
                <p style="color:white;">Selon les politiques d'utilisation, nou offrons une utilisation complète à vcceux qui s'inscrivent tant qu'ils nous donnent accès à leur données qui sont décrites plus en détails au niveau du footer de plateforme.omplète à vcceux qui s'inscrivent tant qu'ils nous donnent accès à leur données qui sont décrites plus en détails au niveau du footer de plateforme.omplète à vcceux qui s'inscrivent tant qu'ils nous donnent accès à leur données qui sont décrites plus en détails au niveau du footer de plateforme.omplète à vcceux qui s'inscrivent tant qu'ils nous donnent accès à leur données qui sont.</p>
                </form>
            
                    </section> 
         
        </center>
</form> 
            
            
           
    </body>
</html>
