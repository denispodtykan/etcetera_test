<?php
/**
 * Template part for displaying premises
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<a class=" col-sm-6 col-md-6 col-lg-4 item-card" href="<?php the_permalink(); ?>">
	<div class="card mb-4 box-shadow item-card__content">
		<img class="card-img-top" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text">
				<b>Area:</b> <?php the_field( 'area' ); ?>
				<br>
                <b>Rooms count:</b> <?php the_field( 'rooms_count' ); ?>
                <br>
                <b>Bathroom:</b> <?php the_field( 'bathroom' ); ?>
                <br>
                <b>Balcony:</b> <?php the_field( 'balcony' ); ?>
			</p>
		</div>
	</div>
</a>


