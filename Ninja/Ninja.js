var restant = 3;
var echec = 0;
var finDuJeu = 0;
var play = document.getElementById("Play");

$(".cacher").click(function(){
	$(this).hide();
	restant--;
	$("#restant").text(restant);
	if(restant == finDuJeu){
		$("#message").attr("style","")
		$(".begin").attr("style","visibility: hidden")
	}
})

$(".white").click(function(){
	echec++;
	$("#echec").text(echec);
})

play.addEventListener("click",function(){
	restant = 3;
	echec = 0;
	finDuJeu = 0;
	$(".cacher").show();
	$(".begin").attr("style","");
	$("#message").attr("style","visibility: hidden");
	$("#restant").text(restant);
	$("#echec").text(echec);
})