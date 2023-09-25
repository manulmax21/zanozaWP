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

                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'service_mainmenu',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                        ?>
<form action="../servicecat" method="POST">
                       <button type="submit" class="item_ser">

                       <input class="input_ser" type="number" name="id"
                       value="<?php echo get_post_meta(get_the_ID(), "ser_id", true)?>" />

                    <div class="item__video_ser">

                       <img name="send" src="<?php echo get_the_post_thumbnail_url(); ?>" >


                    </div>
                    <div class="item__text_ser">
                        <?php echo get_post_meta(get_the_ID(), "ser__name", true)?>
                    </div>
                    <div class="item__name_ser">
                        <?php echo get_post_meta(get_the_ID(), "ser_title", true)?>
                    </div>
                </button>
</form>
       <?php
                }
                wp_reset_postdata();
            ?>
<!-------------------------------------------------------------->

            </div>
        </div>
    </div>

</div>



</div>


<?php
    get_footer();
?>
