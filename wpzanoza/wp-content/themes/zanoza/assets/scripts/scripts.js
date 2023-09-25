
    var sw1 = document.getElementById("switch1");
    var sw2 = document.getElementById("switch2");
    var sw3 = document.getElementById("switch3");
    var sw4 = document.getElementById("switch4");
    var sw5 = document.getElementById("switch5");

    var swarr = [sw1, sw2, sw3, sw4, sw5];
var j = 0;

for(let i = 25000; i < 1000000000; i+=25000){

    setInterval(function(){
        sw1.checked = true;
    },i - 20000);

    setInterval(function(){
        sw2.checked = true;
    },i - 15000);

    setInterval(function(){
        sw3.checked = true;
    },i - 10000);

    setInterval(function(){
        sw4.checked = true;
    },i - 5000);

    setInterval(function(){
        sw5.checked = true;
    }, i);
//    setInterval(function(){
//        j=+6000 ;
//    }, 6000+j, i);
     //j=+5000 ;
}







