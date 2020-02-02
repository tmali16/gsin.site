<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Grace News
 */
?>
<div class="div">
    <?php 
        if ( ! dynamic_sidebar( 'sidebar_lang' ) ) : 
            dynamic_sidebar( 'sidebar_lang' );
        endif; // end sidebar widget area 
    ?> 
</div>

<div id="sidebar"> 

        <?php 
            if ( ! dynamic_sidebar( 'sidebar_persona' ) ) : 
                dynamic_sidebar( 'sidebar_persona' );
            endif; // end sidebar widget area 
        ?> 

        <?php 
            if ( ! dynamic_sidebar( 'sidebar-1' ) ) : 
                dynamic_sidebar( 'sidebar-1' );
            endif; // end sidebar widget area 
        ?>     
</div><!--sidebar -->
