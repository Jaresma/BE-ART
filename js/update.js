function d_logo(){
    var canvas1=document.getElementById('c_logo');
    var contexto=canvas1.getContext("2d");
    var img = new Image();
    img.onload=function(){
        contexto.drawImage(img,0,0,500,150);
    }
    img.src ='rsc/logo.png';

   
}