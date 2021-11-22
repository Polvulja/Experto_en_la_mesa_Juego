function Subir_libro(){
    document.getElementById('subir_foto').style.display = "inline-block";
    document.getElementById('pp2').style.display = "inline-block";
    document.getElementById('label1').style.display = "inline-block";
    document.getElementById('label2').style.display = "inline-block";
    document.getElementById('label3').style.display = "inline-block";
    document.getElementById('label4').style.display = "inline-block";

    document.getElementById('boton_terminar').style.display = "none";
    document.getElementById('pp').style.display = "none";
    document.getElementById('pep1').style.display = "none";
    document.getElementById('pep2').style.display = "none";
    document.getElementById('pep3').style.display = "none";
    document.getElementById('pep4').style.display = "none";
  }
  function Subir_Foto(){
    document.getElementById('subir_foto').style.display = "inline-block";
    document.getElementById('pp').style.display = "inline-block";
    document.getElementById('label1').style.display = "inline-block";
    document.getElementById('label2').style.display = "inline-block";
    document.getElementById('label3').style.display = "inline-block";
    document.getElementById('label4').style.display = "inline-block";

    document.getElementById('boton_terminar').style.display = "none";
    document.getElementById('pp2').style.display = "none";
    document.getElementById('pep1').style.display = "none";
    document.getElementById('pep2').style.display = "none";
    document.getElementById('pep3').style.display = "none";
    document.getElementById('pep4').style.display = "none";
  }
  function mostrar(){
    document.getElementById('label1').style.display = "none";
    document.getElementById('label2').style.display = "none";
    document.getElementById('label3').style.display = "none";
    document.getElementById('label4').style.display = "none";

    document.getElementById('pep1').style.display = "inline-block";
    document.getElementById('pep2').style.display = "inline-block";
    document.getElementById('pep3').style.display = "inline-block";
    document.getElementById('pep4').style.display = "inline-block";
    
    
    document.getElementById('pp2').style.display = "none";
    document.getElementById('pp').style.display = "none";
    document.getElementById('subir_foto').style.display = "none";


    document.getElementById('boton_terminar').style.display = "inline-block";
}