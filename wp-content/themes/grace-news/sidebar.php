<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Grace News
 */
?>
<?php 
    if ( ! dynamic_sidebar( 'sidebar_lang' ) ) : 
        dynamic_sidebar( 'sidebar_lang' );
    endif; // end sidebar widget area ?>
<div id="sidebar"> 
    	
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="categories" class="widget"> 
        <h3 class="widget-title"><?php esc_html_e( 'Category', 'grace-news' ); ?></h3>          
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>        
       
        <aside id="archives" class="widget"> 
        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'grace-news' ); ?></h3>          
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>        
         
         <aside id="meta" class="widget"> 
         <h3 class="widget-title"><?php esc_html_e( 'Meta', 'grace-news' ); ?></h3>          
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>	
</div><!-- sidebar -->