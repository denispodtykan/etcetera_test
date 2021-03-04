<?php
/**
 * Template Name: Все здания
 * 
 * <?php

 */

get_header();
?>
    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <h1>Buldings</h1>
			<?php get_template_part( 'real-estate-template-parts/content', 'buildings-list' ); ?>
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
