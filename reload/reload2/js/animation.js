$('.cuadro1,.cuadro2,.cuadro3,.cuadro4,.cuadro5,.cuadro6,.cuadro7,.cuadro8,.cuadro9,.cuadro10,.N,.G,.cubo,.soft').animate({opacity: '0'}, 0);

$('document').ready(function () {
    setTimeout(function () {
        $('.soft').animate({opacity: '1'}, 175)
    }, 0)
    setTimeout(function () {
        $('.soft').animate({opacity: '0.2'}, 175);
        $('.cubo').animate({opacity: '1'}, 175);
    }, 175)
    setTimeout(function () {
        $('.cubo').animate({opacity: '0.2'}, 175);
        $('.cuadro1').animate({opacity: '1'}, 175);
        $('.cuadro2').animate({opacity: '1'}, 175);
        $('.N,.G').animate({opacity: '1'}, 175);
    }, 350)
    setTimeout(function () {
        $('.cuadro1').animate({opacity: '0.2'}, 175);
        $('.cuadro2').animate({opacity: '0.2'}, 175);
        $('.cuadro3').animate({opacity: '1'}, 175);
        $('.cuadro4').animate({opacity: '1'}, 175);
    }, 525)
    setTimeout(function () {
        $('.cuadro3').animate({opacity: '0.2'}, 175);
        $('.cuadro4').animate({opacity: '0.2'}, 175);
        $('.cuadro5').animate({opacity: '1'}, 175);
        $('.cuadro6').animate({opacity: '1'}, 175);
    }, 700)
    setTimeout(function () {
        $('.cuadro5').animate({opacity: '0.2'}, 175);
        $('.cuadro6').animate({opacity: '0.2'}, 175);
        $('.cuadro7').animate({opacity: '1'}, 175);
        $('.cuadro8').animate({opacity: '1'}, 175);
    }, 875)
    setTimeout(function () {
        $('.cuadro7').animate({opacity: '0.2'}, 175);
        $('.cuadro8').animate({opacity: '0.2'}, 175);
        $('.cuadro9').animate({opacity: '1'}, 175);
        $('.cuadro10').animate({opacity: '1'}, 175);
    }, 1050)
    setTimeout(function(){
        $('#repetir').click();
    },1200)
    
});
var i=0;
$('#repetir').click(function(){
    setTimeout(function () {
        $('.cuadro9').animate({opacity: '0.2'}, 175);
        $('.cuadro10').animate({opacity: '0.2'}, 175);
        $('.soft').animate({opacity: '1'}, 175)
    }, 0)
    setTimeout(function () {
        $('.soft').animate({opacity: '0.2'}, 175);
        $('.cubo').animate({opacity: '1'}, 175);
    }, 175)
    setTimeout(function () {
        $('.cubo').animate({opacity: '0.2'}, 175);
        $('.cuadro1').animate({opacity: '1'}, 175);
        $('.cuadro2').animate({opacity: '1'}, 175);
        $('.N,.G').animate({opacity: '1'}, 175);
    }, 350)
    setTimeout(function () {
        $('.cuadro1').animate({opacity: '0.2'}, 175);
        $('.cuadro2').animate({opacity: '0.2'}, 175);
        $('.cuadro3').animate({opacity: '1'}, 175);
        $('.cuadro4').animate({opacity: '1'}, 175);
    }, 525)
    setTimeout(function () {
        $('.cuadro3').animate({opacity: '0.2'}, 175);
        $('.cuadro4').animate({opacity: '0.2'}, 175);
        $('.cuadro5').animate({opacity: '1'}, 175);
        $('.cuadro6').animate({opacity: '1'}, 175);
    }, 700)
    setTimeout(function () {
        $('.cuadro5').animate({opacity: '0.2'}, 175);
        $('.cuadro6').animate({opacity: '0.2'}, 175);
        $('.cuadro7').animate({opacity: '1'}, 175);
        $('.cuadro8').animate({opacity: '1'}, 175);
    }, 875)
    setTimeout(function () {
        $('.cuadro7').animate({opacity: '0.2'}, 175);
        $('.cuadro8').animate({opacity: '0.2'}, 175);
        $('.cuadro9').animate({opacity: '1'}, 175);
        $('.cuadro10').animate({opacity: '1'}, 175);
    }, 1050)
    setTimeout(function(){
        $('#repetir').click();
    },1200)
    i++;
//    if(i ==''){
//        $('#repetir').off();
//    }
});


function eventizq() {
    $('.cuadro11').transition({
        left: '13.9%',
        top: '37.9%',
        rotateY: '+=360deg',
        backgroundColor: '#9EC7EC',
        width: '17.7%',
        height: '18.7%',
        zIndex: '1000'
    })
}
