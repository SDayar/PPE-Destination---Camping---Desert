/*Fonction pour la soumission du compte*/ 
mail=document.getElementById("case"); 
function seconnecter(){
    if(mail==""){
        document.getElementById("case").style.backgroundColor="red";
    }
    else{
        location.href="../public_html/Accueil.html"
    }
}

