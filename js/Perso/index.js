$(function(){
	//$( "#titre" ).fadeTo(1000,0).fadeTo(1000,1);
	var myRunner = window.setInterval(
		function(){
			$( "#titre" ).fadeTo(1000,0).fadeTo(1000,1);
		},
		2500); //3 secondes);
	//window.clearInterval(myRunner); Pour l'arrêter
});
//Bouton 1
$(function(){
	$( "#bouton_menu_1" ).hover(
	    function() {
	    	setTimeout(function(){
			    $( "#plus1" ).attr('src','images/plus_bleu.png');
	         	$( "#individu_menu" ).attr('src','images/individu_bleu.png');
			}, 100);
	        
	    }, function() {
	    	setTimeout(function(){
		    	$( "#plus1" ).attr('src','images/plus.png');
	    		$( "#individu_menu" ).attr('src','images/individu.png');
			}, 100);
	    }
 	);
});
//Bouton 2
$(function(){
	$( "#bouton_menu_2" ).hover(
	    function() {
	    setTimeout(function(){
			$( "#plus2" ).attr('src','images/plus_bleu.png');
	        $( "#lien_menu" ).attr('src','images/lien_bleu.png');
		}, 100);
	    }, function() {
	    	setTimeout(function(){
			    $( "#plus2" ).attr('src','images/plus.png');
	    		$( "#lien_menu" ).attr('src','images/lien.png');
			}, 100);
	    }
 	);
});
//Bouton 3
$(function(){
	$( "#bouton_menu_3" ).hover(
	    function() {
	    setTimeout(function(){
	        $( "#moins" ).attr('src','images/moins_bleu.png');
		}, 100);

	    }, function() {
	    setTimeout(function(){
	        $( "#moins" ).attr('src','images/moins.png');
		}, 100);
	    }
 	);
});

//Ce que je garde de mon ancien site pour rappel
$(function(){
	$( "#btAmour" ).hover(
	    function() {
	        document.getElementById('btAmour').style.color = "white";
	        $(".img1").attr('src','images/coeurbleu.jpg');
	    }, function() {
	        document.getElementById('btAmour').style.color = "#0066CC";
	        $(".img1").attr('src','');
	    }
 	);
});
$(function(){
	$( ".col-md-10" ).hover(
	    function() {
	        $( ".serie-img" ).css('background-color', 'white');
	        $( ".serie-img" ).css('color', '#0066CC');
	    }, function() {
	    }
 	);
});

// Fin de ce qui ne sert pas.

function changeBackground(color) {
   document.body.style.background = color;
}
$(function(){
	$('#titre').click(function(){
		document.location.href="index.php"; 
	});
});
$( function() {
	$( "#accordion" ).accordion({
	  collapsible: true
	});
} );
