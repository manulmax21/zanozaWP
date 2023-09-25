<?php
    get_header();
?>

    <div class="ser_item_1">
<div class="container">
    <div class="serviceitem_item">
        <?php
                if(isset($_POST["ser_name"]) && isset($_POST["price"]) && isset($_POST["foto"])){
                    $ser_name = $_POST["ser_name"];
                    $price = $_POST["price"];
                    $foto = $_POST["foto"];
                ?>


<div class="inner_ser_item">
            <div class="item__photo__ser__item">
               <div id="fon">
<!--               <p onclick="exitZoom()" id="Xzoom">X</p>-->
<!--               onclick="zoom()"-->
                <img id="mainphoto" class="item__photo__ser__item__img" src="<?php
                    echo $foto;?>" alt="">
                    <div class="card__tovar">
                        <div class="inner">
                            <img onclick="chngeItem('image/marcetItem/1.jpg')" src="image/marcetItem/1.jpg" alt="" class="item">
                            <img onclick="chngeItem('image/marcetItem/2.jpg')" src="image/marcetItem/2.jpg" alt="" class="item">
                            <img onclick="chngeItem('image/marcetItem/1.jpg')" src="image/marcetItem/1.jpg" alt="" class="item">

                        </div>
                    </div>
            </div>
                <h1 class="price"><?php
echo $price;?></h1>
                <a href="contacts"><button class="btn btn--grayW">купить</button></a>
            </div>
            <div class="item__text">
                <div class="name"><?php
echo $ser_name;?></div>
                <div class="title">>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. .</div>
            </div>
        </div>

<?php
                }?>

    </div>
</div>
</div>
<script src="scripts/addServiceItem.js"></script>
</body>
</html>
