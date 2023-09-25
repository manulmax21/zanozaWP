
//Service item
//document.querySelector(".image img").src
function chngeItem(img){

//    const allLinks = document.querySelectorAll('.slide-img a');
//    allLinks.forEach(el=>el.addEventListener('click',function(e){
//    e.preventDefault();
//        console.log(el.querySelector('img').getAttribute('src'));
//        var img = el.querySelector('img').getAttribute('src');
//    });

    document.querySelector(".item__photo__ser__item__img").src = img;
}

function zoom(){
    var photo = document.getElementById("mainphoto");
    var exit = document.getElementById("Xzoom");
    var fon = document.getElementById("fon");

//    fon.style.backgroundColor = "rgb(0,0,0,.8)";
//    fon.style.zIndex = "4";
//    fon.style.position = "absolute";
//    fon.style.width = "100%";
//    fon.style.height = "100%";

    exit.style.display = "block"
    exit.style.zIndex = "5"
    exit.style.textAlign = "end"
    photo.style.width = "1200px"
    photo.style.position = "absolute"
    photo.style.zIndex = "5"
}
function exitZoom(){
    var photo = document.getElementById("mainphoto");
    var exit = document.getElementById("Xzoom");
    exit.style.display = "none"
    photo.style.position = "relative"
    photo.style.width = "700px";
}




