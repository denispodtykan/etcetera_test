<?php
/**
 * Template part for displaying building
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<a class=" col-sm-6 col-md-6 col-lg-4 item-card" href="<?php the_permalink(); ?>">
	<div class="card mb-4 box-shadow item-card__content">
		<img class="card-img-top" src="<?php the_field('bulding_image'); ?>" alt="<?php the_title(); ?>">
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text">
				<b>Floors:</b> <?php the_field( 'floors' ); ?>
				<br>
				<b>Bulding type:</b> <?php the_field( 'bulding_type' ); ?>
				<br>
				<b>Environmental friendliness:</b> <?php the_field( 'environmental_friendliness' ); ?>
			</p>
		</div>
	</div>
</a>


