 <?php
     session_start();
     
     ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Destination-Camping-Déserts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Créercompte.css"/>
        <meta name="description" content="page d'inscription/de connexion"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
     </head>
    <body>
        <article>
            <p><a href="../public_html/Accueil.php">D.C.D Agency</a></p>
        </article>
        <center>
        <h1 style="margin-top:170px; color:white; font-size:50px; font-family:monospace;">Se connecter</h1>
        <section class="Boite">
            <form action="Connecter.php" method="POST">
            <label><i class="fa-solid fa-user"></i>:</label><input type="text" required="required" placeholder='Prenom' name='prenom'/><br /><br />
            <label><i class="fa-regular fa-envelope"></i>:</label><input type="email" required="required" placeholder='Exemple@gmail.com' name='email'/><br />
            <label><i class="fa-solid fa-key"></i>:</label><input type="password" required="required"  name='mot'/><br />
            <center>
                <a href="../pages/Connecter.php"><input type="submit" value="Se connecter" onclick="seconnecter();" style="width:100px; background-color:transparent; padding-top:5px"/></a><br>
                <br>
                <a href="../pages/compte.php"><input type="button" value="Créer un compte" style="width:200px; background-color:transparent; padding-top:5px;"></a></center>
          </form>
        </section></center>
    
    </body>
    <?php 
    $connexion = new PDO("mysql:host=localhost;dbname=dcd_agency", "root","");
    if(!empty($_POST["email"]) && !empty ($_POST["email"])&& !empty($_POST["prenom"]))
    {
    $_SESSION["prenom"]=$_POST["prenom"];
    $email = $_POST["email"];
    $mot_passe = $_POST["mot"];
    $req = $connexion->prepare('SELECT MOT_DE_PASSE, EMAIL, PRENOM from utilisateurs where EMAIL =:email ');
    $req ->bindValue('email', $email);
    $req ->execute();
    $res = $req -> fetch(PDO::FETCH_ASSOC);
    if($res)
    {
        $mot_passe_hash = $res['MOT_DE_PASSE'];
        $prenom = $res['PRENOM'];
        $_SESSION['$prenom'];
        
        if(password_verify($mot_passe, $mot_passe_hash))
        {
          header('location:http://localhost/PPE/pages/Connecter.php');
          
          
        }
        else{
            echo"connexion échouée !";
        }
        
    }
    else{
           echo "connexion échouée "; 
        } 
    
    }
    
    
    
    ?>
</html>
