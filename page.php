<?php
    get_header();
?>
<main id="main" class="main main-page" role="main">
    <?php 
        if ( function_exists( 'have_rows' ) && have_rows('content_builder') ):
            while( have_rows('content_builder') ): the_row();
            
                get_template_part( 'template-parts/flexible-content/layouts/'. get_row_layout() );

            endwhile;
        else:
            while ( have_posts() ) :
                the_post();
                echo '<div class="band">
                        <div class="band--wrapper">
                            <article class="page-content flex column row--tablet">
                                <div class="page-content--content">';
                                    get_template_part('template-parts/featured-image');
                                    get_template_part('template-parts/page-content');
                                    get_template_part( 'template-parts/sidebar-widgets' );
                            echo '</div>
                            </article>
                        </div>
                    </div>';
            endwhile;
        endif;
	?>
</main>
<?php get_footer();