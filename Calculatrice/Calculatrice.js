function taperNumero(num){
	document.form.afficheur.value=document.form.afficheur.value+num;
}

function egaleA(){
	var saisie = document.form.afficheur.value
	if(saisie){
		document.form.afficheur.value=eval(saisie);
	}
}

function effacerEcran(){
	document.form.afficheur.value="";
}

function effacerDernierElement(){
	var saisie = document.form.afficheur.value;
	document.form.afficheur.value = saisie.substring(0,saisie.length-1);
}