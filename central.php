<?php
if(isset($_GET["case"])){
	$case = $_GET["case"];
}else{
	$case = "visiteur";
}
switch ($case) {
    case "visiteur":
        echo 	"<div id='centralvisiteur'> L'histoire de votre famille s'est perdue dans le temps... <br/>
				A quoi ressemblait-elle il y a 100 ans ? Quels obstacles a-t-elle dû surmonter ?<br/>
				Votre petit-fils ne saura jamais que votre grand-père était un formidable boxeur. <br/>
				<?php echo $titre ; ?> vous donne la possibilité de changer cela pour toujours. <br/>
				Remplissez votre arbre généalogique puis partagez le dans votre famille pour que chacun remplisse des notes sur eux ou d'autres membres de la famille. <br/>
				Vous faites partie d'une chaîne incroyablement longue de personnes qui ont vécu et survécu à d'innombrables évènements. Toute cette histoire ne doit plus se perdre. C'est bien trop dommage, il faut que cela change. <br/> </div>";
        break;
    case "ajouter_personne":
        echo "
        	<div id='central_ajouter_personne'>ajouter une personne </div>";
        break;
    default:
        echo 	"<div id='centralvisiteur'> L'histoire de votre famille s'est perdue dans le temps... <br/>
				A quoi ressemblait-elle il y a 100 ans ? Quels obstacles a-t-elle dû surmonter ?<br/>
				Votre petit-fils ne saura jamais que votre grand-père était un formidable boxeur. <br/>
				<?php echo $titre ; ?> vous donne la possibilité de changer cela pour toujours. <br/>
				Remplissez votre arbre généalogique puis partagez le dans votre famille pour que chacun remplisse des notes sur eux ou d'autres membres de la famille. <br/>
				Vous faites partie d'une chaîne incroyablement longue de personnes qui ont vécu et survécu à d'innombrables évènements. Toute cette histoire ne doit plus se perdre. C'est bien trop dommage, il faut que cela change. <br/> </div>";
        break;
}



?>