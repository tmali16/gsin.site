<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Grace News
 */

get_header(); ?>

<div class="container">
     <div class="contentbx_grace_news">
        <section class="content_leftbx_grace_news <?php if( get_theme_mod( 'grace_news_hidesidebar_singlepost' ) ) { ?>fullwidth<?php } ?>">            
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>

                    <div class="clear"></div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>                  
         </section>       
        <?php if( get_theme_mod( 'grace_news_hidesidebar_singlepost' ) == '') { ?> 
          		<?php get_sidebar();?>
        	<?php } ?>  
        <div class="clear"></div>
    </div><!-- contentbx_grace_news -->
</div><!-- container -->	
<?php get_footer(); ?>