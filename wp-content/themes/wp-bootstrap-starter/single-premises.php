<?php
/**
 * Template Name: Помещение подробно
 */

get_header();
?>
   
<div class="page-detail-header"  >
    <?php 
    the_title( '<h1>', '</h1>' );
    ?>   
    <br><br>           
</div>

<section id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
        <div class="row">
            <div class="col-md-8">
			<img src="<?php the_field( 'image' ); ?> ">
            </div>
            <div class="col-md-4">
                <div>
                    <b>Area:</b>
                    <span><?php the_field( 'area' ); ?> </span>
                </div>
                <div>
                    <b>Rooms count:</b>
                    <span><?php the_field( 'rooms_count' ); ?> </span>
                </div>
                <div>
                    <b>Balcony:</b>
                    <span><?php the_field( 'balcony' ); ?> </span>
                </div>
                <div>
                    <b>Bathroom:</b>
                    <span><?php the_field( 'bathroom' ); ?> </span>
                </div>
            </div>
        </div>
        </div><!-- #main -->
    </section><!-- #primary -->
<?php
get_footer();
