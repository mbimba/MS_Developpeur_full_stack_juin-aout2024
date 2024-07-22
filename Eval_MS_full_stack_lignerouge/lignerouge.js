/*          ****************** Mes boutons carousel précédent et suivant sur la page catégorie et tous les plats  *************************   */
function precedent()
{
document.getElementById("carouselcatprec").click();
}

function suivant()
{
document.getElementById("carouselcatsuiv").click();
}


/*          ****************** ICI    JAVASCRIPT DE LA PAGE CONTACT            *************************   */

function envoicontact() {
 // test lenom ()
 var nom = document.getElementById("lenom").value;
  var codenom = /.*[a-zA-ZàâäèéêëìîïòôöùûüçÀÂÄÈÉÊËÌÎÏÒÔÖÙÛÜÇ\s].*/;                      //  \S dans le regex permet d'autoriser de l'espace.   
  resultatnom = codenom.test(nom);
  if (resultatnom == false) {
    alert("Veuillez compléter le nom");
    codenom.lastIndex;
  }


//test leprenom ()

var prenom = document.getElementById("leprenom").value;
  var codeprenom = /.*[a-zA-ZàâäèéêëìîïòôöùûüçÀÂÄÈÉÊËÌÎÏÒÔÖÙÛÜÇ\s].*/;
  resultatprenom = codeprenom.test(prenom);
  if (resultatprenom == false) {
    alert("Veuillez remplir la case Prénom");
  
  }

//test email ()

var mail = document.getElementById("email").value;
filtremail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
resultatmail = filtremail.test(mail);
if (resultatmail == false) {
  alert("Saisissez une adresse mail avec un @");

}

//test tel ()
var phone = document.getElementById("tel").value;
var codetel= /^0[1-9]([-. ]?[0-9]{2}){4}$/;
resultatphone= codetel.test(phone);
if(resultatphone == false) {
    alert("Veuillez saisir un numéro de téléphone");
     // return false;
}

//test votredemande()
var demande = document.getElementById("votredemande").value;
var codedemande = /^.*[ 0-9A-ZàâäèéêëìîïòôöùûüçÀÂÄÈÉÊËÌÎÏÒÔÖÙÛÜÇ\s].*/+$;             // J'ai utilisé un regex alphanumérique qui accepte chiffre et lettre. 
if(resultatdemande == false){
    alert("N'oubliez pas de saisir la demande.");
    return false;
}                                               // Le test ne fonctionne que si je mets le return false du test tel en commentaire.

}       // Fin function envoicontact(). 



//------------------------------------- ICI    JAVASCRIPT DE LA PAGE COMMANDE----------------------------------------------

function envoicommande() {
  //test nometprenom ()
  var nomprenom = document.getElementById("nometprenom").value;
  var codenomprenom =/.*[a-zA-ZàâäèéêëìîïòôöùûüçÀÂÄÈÉÊËÌÎÏÒÔÖÙÛÜÇ\s].*/;                      //  \S dans le regex permet d'autoriser de l'espace.   
  resultatnomprenom = codenomprenom.test(nomprenom);
  if (resultatnomprenom == false) {
    alert("Veuillez remplir votre nom et prénom");
  
  }

  //test votreemail ()

var mail = document.getElementById("votreemail").value;
filtremail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
resultatmail = filtremail.test(mail);
if (resultatmail == false) {
  alert("Saisissez une adresse mail avec un @");

}

//test phone ()
var tel = document.getElementById("phone").value;
var codetel= /^0[1-9]([-. ]?[0-9]{2}){4}$/;
resultattel= codetel.test(tel);
if(resultattel == false) {
    alert("Veuillez saisir un numéro de téléphone");
      //return false;
}


//test votreadresse ()
var adresse = document.getElementById("votreadresse").value;
var codeadresse = /^.*[ 0-9A-ZàâäèéêëìîïòôöùûüçÀÂÄÈÉÊËÌÎÏÒÔÖÙÛÜÇ\s].*/+$;             // J'ai utilisé un regex alphanumérique qui accepte chiffre et lettre 
resultatadresse= codeadresse.test(adresse);
if(resultatadresse == false){
    alert("N'oubliez pas de saisir une adresse de livraison.");
    return false;
}                                                 //Le test ne fonctionne que si je mets le return false du test phone en commentaire.



}  // Fin function envoicommande().







/*   -------------    */


/*   -------------    */