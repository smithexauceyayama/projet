function conversion_euro_francs(){
    var Euro = prompt("Entrer la valeur en Euro:");
    var francs= 6.55957;
    var conversion = Euro * francs;
    alert(Euro + "Euro" + "est " + parseFloat(conversion) + "\n" + " en Francs");
}

function nb_aleatoire(min,max) {
    var nb = min + (max-min-1)*Math.random();
    return Math.floor(nb);
}
function oui_ou_non(){
    do{
        var choix = prompt("Vous le vous continuer??? oui ou non");
    if (choix =='oui')
        return true;
    else if (choix =='non')
        return false;
    }while(choix != 'oui' || 'non');
}

var ran = nb_aleatoire(1,100); 
do {
    var nb_joueur = prompt("Entrer un nombre entre 1 et 100:");
    if(nb_joueur > ran){
        alert("Votre nombre est supérieur au nombre mystere");
        var rec = oui_ou_non();
        if (rec == false)
            break;
    }
    else if(nb_joueur < ran){
        alert("Votre nombre est inférieur au nombre mystere");
        var rec = oui_ou_non();
            if (rec == false)
                break;
    }
    else if(nb_joueur == 0)
        alert("Attention !!! Veuillez saisir un nombre")
    else if(ran == nb_joueur) {
        alert("felicitation vous avez devinez le nombre !!!"+''+ran);
        break
    }
}while(nb_joueur != ran);


