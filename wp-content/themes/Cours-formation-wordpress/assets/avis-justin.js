
jQuery(document).ready(function($) {

document.getElementById("avis-client").addEventListener("submit", function(event) {
  event.preventDefault();
  var metier = $('#metier option:selected').attr('id');
  var note = $('#note option:selected').attr('id');
  var nombre_avis = $('#nombre_avis option:selected').attr('id');
  note = parseFloat(note);
  nombre_avis = parseInt(nombre_avis);
  var noteMin = 4;
  var mois;
  switch (metier) {
  case "constructeur":
    mois = 0.6;
    break;
  case "promoteur":
    mois = 1.9;
    break;
  case "agent_immobilier":
    mois = 0.8;
    break;
  case "courtier":
    mois = 0.7;
    break;
  case "Immo_luxe":
    console.log("Vous êtes spécialisé dans l'immobilier de luxe.");
    break;
  default:
    console.log("Métier non reconnu.");
    break;
  }
  console.log(mois);
  var resultat =0;
  var avis_supp = 1;
  while (note >= noteMin) {
        note=4.5;
        var denominateur =nombre_avis+avis_supp;
        var note_g = (note*nombre_avis)+(avis_supp * 1);
        note = note_g/denominateur;
        avis_supp++;
        
  }
  console.log(avis_supp);
  console.log(mois);
  
  resultat = Math.ceil(avis_supp/mois);
  $("#resultat").empty();
  $("#resultat").append("<p id='result'>Ma note passerait en dessous de " + noteMin + " après <span class='mois-avis'>" + resultat+ " mois d'avis garantis exclusivement négatifs </span>(Note de 1)</p>");

});

});
