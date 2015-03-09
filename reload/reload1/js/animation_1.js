window.addEventListener('load',eventinf);
function eventinf(){
    for (var i=0 ; i<200 ; i++){
        eventder();
        eventizq();
    }
}
function eventizq(){
    $('.cuadro11').transition({
        left:'13.9%',
        top:'37.9%',
        rotateY: '+=360deg',
        backgroundColor:'#9EC7EC',
        width:'17.7%',
        height:'18.7%',
        zIndex: '1000'
    }).transition({
        left:'2.8%',
        top:'20%',
        rotateY: '+=360deg',
        backgroundColor:'#3754A1',
        width:'19.6%',
        height:'25.7%',
        zIndex: '999'
    }).transition({
        left:'15.9%',
        top:'8.9%',
        rotateY: '+=360deg',
        backgroundColor:'#83C0EA',
        width:'17.7%',
        height:'18.7%',
        zIndex: '998'
    }).transition({
        left:'29%',
        top:'0%',
        rotateY: '+=360deg',
        backgroundColor:'#D8EEFC',
        width:'13%',
        height:'16.7%',
        zIndex: '997'
    }).transition({
        left: '40%',
        opacity: '.0'
    }).transition({
        opacity: '1',
        left:'25%',
        top:'50%',
        backgroundColor:'#C1E5F8',
        width:'13.5%',
        height:'17.6%',
        zIndex: '1001'
    },0);
}
function eventder(){
    $('.cuadro22').transition({
        left:'62.9%',
        top:'37.9%',
        rotateY: '+=360deg',
        backgroundColor:'#9EC7EC',
        width:'17.7%',
        height:'18.7%',
        zIndex: '1000'
    }).transition({
        left:'71.9%',
        top:'20%',
        rotateY: '+=360deg',
        backgroundColor:'#3754A1',
        width:'19.6%',
        height:'25.7%',
        zIndex: '999'
    }).transition({
        left:'60.9%',
        top:'8.9%',
        rotateY: '+=360deg',
        backgroundColor:'#83C0EA',
        width:'17.7%',
        height:'18.7%',
        zIndex: '998'
    }).transition({
        left:'52.7%',
        top:'0%',
        rotateY: '+=360deg',
        backgroundColor:'#D8EEFC',
        width:'13%',
        height:'16.7%',
        zIndex: '997'
    }).transition({
        left: '40%',
        opacity: '.0'
    }).transition({
        opacity: '1',
        left:'56%',
        top:'50%',
        backgroundColor:'#C1E5F8',
        width:'13.5%',
        height:'17.6%',
        zIndex: '1001'
    },0);
}
