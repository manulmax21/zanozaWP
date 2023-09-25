<?php
    get_header();
?>
<?php
    /* Template Name: index */
?>
<!--END Header-->
<!--Intro-->
<div class="main__bac">
<div class="intro">
        <input checked type="radio" name="respond" id="desktop">
            <article id="slider">
                    <input checked type="radio" name="slider" id="switch1">
                    <input type="radio" name="slider" id="switch2">
                    <input type="radio" name="slider" id="switch3">
                    <input type="radio" name="slider" id="switch4">
                    <input type="radio" name="slider" id="switch5">
                <div id="slides">
                    <div id="overflow">
                        <div class="image">

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
                    'post_type'   => 'index',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post);
                        ?>
<article><img src="<?php echo get_the_post_thumbnail_url(); ?>"></article>

       <?php
                }
                wp_reset_postdata(); // сброс
            ?>

<!--                        <article><img src="image/carusel/1.jpg"></article>-->
<!--
                      <article><img src="image/carusel/1.jpg"></article>
                      <article><img src="image/carusel/1.jpg"></article>
                      <article><img src="image/carusel/1.jpg"></article>
                      <article><img src="image/carusel/1.jpg"></article>
-->

                        </div>
                    </div>
                </div>
                <div id="controls">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                </div>
                <div id="active">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                </div>
            </article>
    </div>
    </div>
<!--End Intro-->
<!--

<script src="assets/scripts/scripts.js"></script>
-->
<?php
    get_footer();
?>
