/*Descrption: javascript pour écrire et lire un fichier js*/
document.getElementById("inscription").addEventListener("submit", function(e){
var erreur;
var name = document.getElementById("name");
var prenom = document.getElementById("prenom");
var pwd = document.getElementById("password");

if (name.value&&prenom.value&&pwd.value ){
    e.preventDefault();
     document.getElementById("message").style.display='block';
    }
    else{
       document.getElementById("message").style.display='none';  
    }
            
}); 
window.document.querySelector("#btn_envoyer").addEventListener("click", function(){ 
const nom = window.document.querySelector("#nom").value;
const prenom = window.document.querySelector("#prenom").value;;
const mail = window.document.querySelector("#mail").value;

 if(nom !== "" && prenom !== "" && mail !== "" )
    {
       
        document.querySelector("#fleche").style.display="block";
        document.querySelector("#envoie").innerHTML="Réservé !";
    }else{
         document.querySelector("#fleche").style.display="none";
         document.querySelector("#envoie").innerHTML="";
    }
    
  }, false);











