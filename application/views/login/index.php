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


        .fondo{ 
            background: url('<?php echo base_url('img/y.png') ?>');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 90%; 
            bottom: 0; 
            /*opacity: 0.8;*/
            /*               position: fixed; */
        }
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

<div class="container">
    <div class="row" style="width: 100%; height: 80px;position: fixed">
        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2">
            <center><img  class="rotarY" src="<?php echo base_url('img/nigsoftlogo.png') ?>" style="width: 30%;height: 50%;z-index: 1"  /></center>
            <center id="empresa">WWW.NYGSOFT.COM</center>
        </div>
        <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
            <div class="row principal">
                <div class="menu col-md-3 col-xs-3 col-sm-3 col-lg-3" style="z-index: 1;cursor: pointer;">
                    <a href="#dos">CONOSCANOS</a>
                </div>
                <div class="menu col-md-3 col-xs-3 col-sm-3 col-lg-3" style="z-index: 1;cursor: pointer;">
                    <a href="#tres">PROYECTOS</a>
                </div>
                <div class="menu col-md-3 col-xs-3 col-sm-3 col-lg-3" style="z-index: 1;cursor: pointer;">
                    <a href="#cuatro">CONTÁCTANOS</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-5"></div>
    </div>
</div>
<div class="row" id="cero" style="width: 100%;height: 700px;background-color: #ABE9F5;"> 
    <div id="agrandado" style="width: 16%;background-color: red;position: relative;left: 43%;top: 30%">
        <img  style="width: 100%;" src="<?php echo base_url('img/nigsoftlogo.png') ?>"  />
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
<script>
    $(".preload, .load").hide();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
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