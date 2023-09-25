<?php
    get_header();
?>
<?php
    /* Template Name: contacts */
?>
<!--Contacts-->
<div class="contacts">
<div class="contacts__vid">
<div class="item__photo">
        <img src="image/contacts/1.png" alt="">
    </div>

    <div class="cont__vid__content">
          <div class="inner">
          <div class="innercont__vid__content">
           <div class="block">
               <div class="vl"></div>
               <div class="vl1"></div>
               <div class="vl2"></div>
           </div>
            <div class="text">
               <div class="suptitle">Контакты</div>
                <div class="subtitle">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. .</div>
            </div>
              </div>
            </div>
        </div>

    </div>





<!--
    <div class="con__icon__vid">
    <div class="container">
        <div class="con__inner__inner">
            <div class="ln"><div class="item" title="перейти на инстаграм"><img src="image/contacts/inst__icon2.png" alt=""></div></div>
            <div class="ln"><div class="item" title="перейти на инстаграм"><img src="image/contacts/inst__icon2.png" alt=""></div></div>
            <div class="ln"><div class="item" title="перейти на инстаграм"><img src="image/contacts/inst__icon2.png" alt=""></div></div>
            <div class="ln"><div class="item" title="перейти на инстаграм"><img src="image/contacts/inst__icon2.png" alt=""></div></div>
            <div class="ln"><div class="item" title="позвонить"><img src="image/contacts/phone-icon.png" alt=""></div></div>
        </div>
    </div>
    </div>
-->
   <div class="container">


      <div id="con__subtitle" class="con__subtitle">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. .Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. .</div>

       <div class="con__icon">
            <div class="wrapper_con__icon">
                <div class="items_con__icon">
                    <div class="items__container_con__icon">
                        <div class="items__body_con__icon">
 <?php
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'contacts__item',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                        ?>
            <div class="item__con__icon" title="позвонить нам">
               <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
               <div class="text"><?php echo get_post_meta(get_the_ID(), "name__contacts", true)?></div>
               <div class="subtitle"><?php echo get_post_meta(get_the_ID(), "number__cont", true)?></div>
           </div>

       <?php
                }
                wp_reset_postdata(); // сброс
            ?>

           <div class="item__con__icon" title="позвонить нам">
               <img src="image/contacts/phone-iconW.png" alt="">
               <div class="text">Наш номер:</div>
               <div class="subtitle">8 777 772 27 22</div>
           </div>
           <div class="item__con__icon" title="позвонить нам">
               <img src="image/contacts/phone-iconW.png" alt="">
               <div class="text">Наш номер:</div>
               <div class="subtitle">8 777 772 27 22</div>
           </div>
           <div class="item__con__icon" title="позвонить нам">
               <img src="image/contacts/phone-iconW.png" alt="">
               <div class="text">Наш номер:</div>
               <div class="subtitle">8 777 772 27 22</div>
           </div>


       </div>
   </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<!--    END Contacts-->

<!--Footer-->
<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__block">
                <h4 class="footer__title">Location</h4>
                <address class="footer__address">
                    <div>Place</div>
<div>Stavropol, CA 00000</div>
                </address>
            </div>

             <div class="footer__block">
                <h4 class="footer__title">Найти нас</h4>
                <div class="social social--footer">

                        <div class="social__icon">
                            <a class="social__item" href="https://www.instagram.com/artwork_photo26/" target="_blank">
                  <i class="fab fa-instagram"></i>
                          </a>
                        </div>

                </div>
            </div>

            <div class="footer__block">
                <h4 class="footer__title">Компания ArtWork</h4>
                <address class="footer__address">
                    <div>Cras justo odio, dapibus ac facilisis in, egestas eget</div>
<div> quam. Donec ullamcorper nulla non metus auctor fringilla.</div>
                </address>
            </div>


        </div>
    </div>
    <div class="footer__copyroght">
        <div class="copyroght__text">
            Copyright © 2022 logo. All Rights Reserved
Made with Y <span>logo</span>
        </div>
    </div>
</footer>
    </body>
</html>
