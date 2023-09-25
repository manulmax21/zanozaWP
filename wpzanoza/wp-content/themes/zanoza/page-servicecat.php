<?php
    get_header();
?>
<div class="service">


<!--card video-->
<div class="wrapper_ser">
    <div class="items_ser">
        <div class="items__container_ser">
            <div class="items__body_ser">

<!-------------------------------------------------------------->

<?php
                if(isset($_POST["id"])){
                    $id = $_POST["id"];
                switch($id){
                    case 1:
                        $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'service_catalogmenu',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                        ?>
<form action="itemservice" method="POST">
                       <button type="submit" class="item_ser">
                    <div class="item__video_ser">

                       <img src="<?php echo get_the_post_thumbnail_url(); ?>" >


                    </div>
                    <div class="item__text_ser">
                        <?php echo get_post_meta(get_the_ID(), "name__catalog", true)?>
                    </div>
                    <div class="item__name_ser">
                        <?php echo get_post_meta(get_the_ID(), "price__catalog", true)?>
                    </div>
</button>
                    <input class="input_ser" type="text" name="ser_name"
                       value="<?php echo get_post_meta(get_the_ID(), "name__catalog", true)?>" />
                    <input class="input_ser" type="text" name="price"
                       value="<?php echo get_post_meta(get_the_ID(), "price__catalog", true)?>" />
                    <input class="input_ser" type="text" name="foto"
                       value="<?php echo get_the_post_thumbnail_url();?>" />

</form>
       <?php
                }
                wp_reset_postdata();
                        break;


                        case 2:
                        $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'service_catalowood',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                        ?>
<form action="itemservice" method="POST">
                       <button type="submit" class="item_ser">
                    <div class="item__video_ser">

                       <img src="<?php echo get_the_post_thumbnail_url(); ?>" >


                    </div>
                    <div class="item__text_ser">
                        <?php echo get_post_meta(get_the_ID(), "name__catalog", true)?>
                    </div>
                    <div class="item__name_ser">
                        <?php echo get_post_meta(get_the_ID(), "price__catalog", true)?>
                    </div>
</button>
                    <input class="input_ser" type="text" name="ser_name"
                       value="<?php echo get_post_meta(get_the_ID(), "name__catalog", true)?>" />
                    <input class="input_ser" type="text" name="price"
                       value="<?php echo get_post_meta(get_the_ID(), "price__catalog", true)?>" />
                    <input class="input_ser" type="text" name="foto"
                       value="<?php echo get_the_post_thumbnail_url();?>" />

</form>
       <?php
                }
                wp_reset_postdata();
                        break;

                }}
                ?>

<!------------------------------------------------------------------------->
            </div>
        </div>
    </div>

</div>



</div>


<?php
    get_footer();
?>
