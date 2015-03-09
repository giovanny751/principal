$(document).ready(function(){
    setTimeout(function(){},750);
    setTimeout(function(){
        $('.cuadro2').animate({
            top: '100%', //original 50% diferencia 50%
            left: '101%' //original 56% diferencia 45%
        });
        $('.cuadro9').animate({
            top: '-50%', //original 0% diferencia -50%
            left: '-16%' //original 29% diferencia -45%;
        });
    },0);
    setTimeout(function(){
        $('.cuadro7').animate({
            top: '-17.9%', //original 8.9% diferencia -25%
            left: '-44.6%' //original 15.9% diferencia -60.5%;
        });
        $('.cuadro4').animate({
            top: '62.9%', //original 37.9% diferencia 25%
            left: '123.4%' //original 62.9% diferencia 60.5%
        });       
    },100);
    setTimeout(function(){
        $('.cuadro5').animate({
            top: '20%', //original 20% diferencia 0%
            left: '-72.8%' //original 3.8% diferencia -75%;
        });
        $('.cuadro6').animate({
            top: '20%', //original 20% diferencia 0%
            left: '146.9%' //original 71.9% diferencia 75%
        });    
    },200);
    setTimeout(function(){
        $('.cuadro3').animate({
            top: '62.9%', //original 37.9% diferencia 25%
            left: '-46.6%' //original 13.9% diferencia -60.5%;
        }); 
        $('.cuadro8').animate({
            top: '-17.9%', //original 8.9% diferencia -25%
            left: '121.4%' //original 60.9% diferencia 60.5%
        });       
    },300);
    setTimeout(function(){
        $('.cuadro1').animate({
            top: '100%', //original 50% diferencia 50%;
            left: '-20%' //original 25% diferencia -45%;
        });
        $('.cuadro10').animate({
            top: '-50%', //original 0% diferencia -50%
            left: '93.2%' //original 52.7% diferencia 45%
        });
    },400);
});