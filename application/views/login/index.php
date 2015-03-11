<style>

    @media screen and (max-width: 480px){

        body{

            background: url('<?php echo base_url('img/nigsoftlogo.png') ?>');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 90%; 
            bottom: 0;  
        }
        div img.load{
            position: absolute;
            left: 50%;
            top: 42%;
            margin-left: -64px;
            margin-top: -64px;
            z-index: 15000;
        }
    }
    @media screen and (min-width: 481px) and (max-width: 767px){
        body{
            background-image: url('<?php echo base_url('img/nygsoft.png') ?>'); 
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 90%; 
            bottom: 0; 
        }
        div img.load{
            position: absolute;
            left: 47%;
            top: 42%;
            margin-left: -64px;
            margin-top: -64px;
            z-index: 15000;
        }
    }
    @media screen and (min-width: 768px) {


        /*        .fondo{ 
                    background: url('<?php echo base_url('img/y.png') ?>');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%; 
                    top: 0%; 
                    left: 0%; 
                    width: 100%; 
                    height: 90%; 
                    bottom: 0; 
                    opacity: 0.8;
                                   position: fixed; 
                }*/
        div img.load{
            position: absolute;
            left: 40%;
            top: 42%;
            margin-left: -64px;
            margin-top: -64px;
            z-index: 15000;
        }
    }
    div.preload{
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: white;
        opacity: 0.8;
        z-index: 10000;
    }

    .rotarY{
        transform:rotateY(0deg);
        transition-duration: 2s;
        -webkit-transform:rotateY(0deg);
        -webkit-transition-duration: 2s;
    }
    .rotarY:hover{
        transform:rotateY(180deg);
        transition-duration: 2s;
        -webkit-transform:rotateY(180deg);
        -webkit-transition-duration: 2s;
    }
    @font-face {
        font-family: "Mystery Quest";
        src: url("<?php echo base_url('fonts/SPACE_AGE.TTF') ?>");
    }
    .menu,#empresa{
        font-family: Mystery Quest
    }
    .menu{
        padding-top: 3%;
    }

</style>

<div class="row" id="cero" style="width: 100%;height: 650px;background-color: red;"> 
    <!--<div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 43%;top: 30%">-->
    <div class="fondo">
        <!--<div class="cuadro11"></div>
        <div class="cuadro22"></div>-->
        <div class="cuadro1"></div>
        <div class="cuadro1opa"></div>
        <div class="cuadro2"></div>
        <div class="cuadro2opa"></div>
        <div class="cuadro3"></div>
        <div class="cuadro3opa"></div>
        <div class="cuadro4"></div>
        <div class="cuadro4opa"></div>
        <div class="cuadro5"></div>
        <div class="cuadro5opa"></div>
        <div class="cuadro6"></div>    
        <div class="cuadro6opa"></div>    
        <div class="cuadro7"></div>    
        <div class="cuadro7opa"></div>    
        <div class="cuadro8"></div>    
        <div class="cuadro8opa"></div>    
        <div class="cuadro9"></div>    
        <div class="cuadro9opa"></div>    
        <div class="cuadro10"></div>    
        <div class="cuadro10opa"></div>    
        <div>
            <img src="<?php echo base_url('img/cubo.png') ?>" alt="Y"  class="cubo">
        </div>
        <div>
            <img src="<?php echo base_url('img/soft.png') ?>" alt="soft"  class="soft">
        </div> 
        <div>
            <img src="<?php echo base_url('img/n.png') ?>" alt="N"  class="N">
            <img src="<?php echo base_url('img/g.png') ?>" alt="G"  class="G">
        </div>
        <input type='hidden' id='repetir'>
        <!--</div>-->
    </div>
</div>
<div id="uno" class="row" style="width: 100%;height: 500px;background-color: #FABAB3;">
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 67%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
    </div>
</div>
<div id="dos" class="row" style="width: 100%;height: 500px;background-color: #FAB3E8;">
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 43%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
    </div>
</div>
<div id="tres" class="row" style="width: 100%;height: 500px;background-color: #E7F8E0;">
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 14%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
    </div>
</div>
<div id="cuatro" class="row" style="width: 100%;height: 500px;background-color: #DBD9D9;">
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 43%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
    </div>
</div>
<div id="cinco" class="row" style="width: 100%;height: 500px;background-color: #FFD5EC;">
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 67%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
    </div>
</div>
<script src="<?php echo base_url('js/animation.js') ?>"></script>
<input type="hidden" id="pausa" value="0">
<script>
    $(".preload, .load").hide();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 286 && $('#pausa').val() == 0) {

            $('#pausa').val('1');
            $(".fondo").animate({
                width: "toggle",
                height: "toggle"
            }, {
                duration: 2000,
                specialEasing: {
                    width: "linear",
                    height: "easeOutBounce"
                },
                complete: function() {
//                $( this ).after( "<div>Animation complete.</div>" );
                }
            });
        }
        if (scroll <= 285 && $('#pausa').val() == 1) {

            $('#pausa').val('0')
//            $('.fondo').animate({height: '3%',width: '3%'}, "slow");

            $(".fondo").animate({
                width: ["toggle", "swing"],
                height: ["toggle", "swing"],
                duration: 2000,
                opacity: "toggle"
            },{
                duration: 2000,
                specialEasing: {
                    width: "linear",
                    height: "easeOutBounce"
                },
                complete: function() {
//                $( this ).after( "<div>Animation complete.</div>" );
                }
            });


        }
//        if(scroll <= 341){
//            $('.fondo').animate({height: '25%',width: '25%'}, "slow");
////            $('.fondo').css('width','25%')
////            $('.fondo').css('height','25%')
//            
//        }

        if (scroll >= 342 && scroll <= 645) {
            $('#uno').css('background-color', 'black');
        }
        if (scroll >= 760 && scroll <= 1140) {

//            $('#agrandado').animate({height: '300px', opacity: '0.4'}, "slow");
//            $('#agrandado').animate({width: '300px', opacity: '0.8'}, "slow");
//            $('#agrandado').animate({height: '100px', opacity: '0.4'}, "slow");
//            $('#agrandado').animate({width: '100px', opacity: '0.8'}, "slow");


            $('#dos').css('background-color', 'blue');
        }
        if (scroll >= 1254 && scroll <= 1634) {
            $('#tres').css('background-color', 'red');
        }
        if (scroll >= 1786 && scroll <= 2128) {
            $('#cuatro').css('background-color', 'yellow');
        }
        if (scroll >= 2292) {
            $('#cinco').css('background-color', 'black');
        }



        console.log(scroll);
    });

</script>    