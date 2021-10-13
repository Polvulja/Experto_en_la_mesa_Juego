
function boton_show(){	
	let botton=document.getElementById('boton_registrarse');
	if (document.getElementById('resp1').selected ==true&&document.getElementById('resp4').selected ==true&&document.getElementById('resp9').selected ==true&&document.getElementById('resp14').selected ==true&&document.getElementById('resp18').selected ==true&&document.getElementById('resp21').selected ==true&&document.getElementById('resp24').selected ==true&&document.getElementById('resp30').selected ==true)
	botton.style.display="inline-block";
	else botton.style.display="none";
	if(document.getElementById('nada1').selected==true&&document.getElementById('nada2').selected==true&&document.getElementById('nada3').selected==true&&document.getElementById('nada4').selected==true&&document.getElementById('nada5').selected==true&&document.getElementById('nada6').selected==true&&document.getElementById('nada7').selected==true&&document.getElementById('nada8').selected==true)
	botton.style.display="none";

}