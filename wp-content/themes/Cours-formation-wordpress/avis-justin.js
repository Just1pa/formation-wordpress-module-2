class AvisClient {
  constructor() {
    this.noteMin = 4;
  }

  calculateMois(metier) {
    let mois;
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
    return mois;
  }

  calculateResult(note, nombre_avis, mois) {
    let avis_supp = 1;
    while (note >= this.noteMin) {
      note = 4.5;
      let denominateur = nombre_avis + avis_supp;
      let note_g = note * nombre_avis + avis_supp * 1;
      note = note_g / denominateur;
      avis_supp++;
    }
    let resultat = Math.ceil(avis_supp / mois);
    return resultat;
  }

  displayResult(resultat) {
    $("#resultat").empty();
    $("#resultat").append(
      "<p id='result'>Ma note passerait en dessous de " +
        this.noteMin +
        " après <span class='mois-avis'>" +
        resultat +
        " mois d'avis garantis exclusivement négatifs </span>(Note de 1)</p>"
    );
  }
}

jQuery(document).ready(function($) {
  let avisClient = new AvisClient();

  $("#avis-client").on("submit", function(event) {
    event.preventDefault();
    let metier = $("#metier option:selected").attr("id");
    let note = parseFloat($("#note option:selected").attr("id"));
    let nombre_avis = parseInt($("#nombre_avis option:selected").attr("id"));
    let mois = avisClient.calculateMois(metier);
    let resultat = avisClient.calculateResult(note, nombre_avis, mois);
    avisClient.displayResult(resultat);
  });
});