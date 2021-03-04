<?php
/**
 * Template Name: Здание подробно
 * Template Post Type: bulding
 */

get_header();
?>
    
    
<div class="page-detail-header"  >
    <?php 
    $post_id = get_the_ID();
    the_title( '<h1>', '</h1>' );

    $cur_terms = get_the_terms( $post_id, 'districts' );
    if( is_array( $cur_terms ) ){
        foreach( $cur_terms as $cur_term ){
            echo '<span>'. $cur_term->name .'</span>';
        }
    }
    ?>   
    <br><br>           
</div>

<section id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
        <div class="row">
            <div class="col-md-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-image-tab" data-toggle="tab" href="#nav-image" role="tab" aria-controls="nav-map" aria-selected="true">Image</a>
                        <a class="nav-item nav-link" id="nav-map-tab" data-toggle="tab" href="#nav-map" role="tab" aria-controls="nav-map" aria-selected="false">Map</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab">
                        <img src="<?php the_field( 'bulding_image' ); ?> ">
                    </div>
                    <div class="tab-pane fade" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab">
                        <?php
                            $coordinate_house = get_field('coordinate_house', get_the_ID());
                            echo '<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=' . $coordinate_house['latitude'] . ','. $coordinate_house['longitude'] .'&amp;key=AIzaSyB4N4akwfSWVySYEaelFjJvqK62RKKXrsw"></iframe>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="margin-top:42px">
                    <div>
                        <b>Floors:</b>
                        <span><?php the_field( 'floors' ); ?> </span>
                    </div>
                    <div>
                        <b>Building type:</b>
                        <span><?php the_field( 'bulding_type' ); ?> </span>
                    </div>
                    <div>
                        <b>Environmental friendliness:</b>
                        <span><?php the_field( 'environmental_friendliness' ); ?> </span>
                    </div>
                </div>

            </div>
        </div>
        <br>

        <h2>Premises</h2>
        <?php get_template_part( 'real-estate-template-parts/content', 'premises-list', get_the_ID()); ?>
    </div><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
