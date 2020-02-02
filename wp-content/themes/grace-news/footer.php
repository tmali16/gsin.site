<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Grace News
 */
 
?>

<div class="footer-wrapper"> 
        <div class="footer-copyright"> 
            <div class="container">
                <div class="aboutus">
                    <div style="text-align:left">
                        <h4 style="color: #fff;"> Контакты: </h4>
                        <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 15px; color: #1e7749;"></i> <span style="color: #0088ff;"> г. Бишкек ул. Ибраимова 106</span><br>
                        <i class="fa fa-phone" aria-hidden="true" style="margin-right: 15px; color: #1e7749;"></i>
                        <span style="color: #0088ff;">Телефон доверия:  +(996) 312 43-11-77
                        <p style="margin-left: 30px; margin-bottom: 0px;">Дежурная часть: +(996)312 123456</p>
                        </span>
                        <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 15px; color: #1e7749;"></i><span style="color: #0088ff;">Электронный адрес: gsinkg@yandex.com</span><br>
                    </div>
                </div>
                <div class="powerby">
                  <?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
                </div>	
                
                <div class="clear"></div>
             </div><!--end .container-->             
        </div><!--end .footer-copyright-->  
    <div class="design-by">
        <div class="container">
        &copy; Дизайн и разработка:
            
            <a href="/">
            ГОСУДАРСТВЕННАЯ СЛУЖБА ИСПОЛНЕНИЯ НАКАЗАНИЙ ПРИ ПРАВИТЕЛЬСТВЕ КЫРГЫЗСКОЙ РЕСПУБЛИКИ
            </a>
        </div>
    </div>                    
     </div><!--end #footer-wrapper-->
</div><!--#end site_layout-->

<?php wp_footer(); ?>
</body>
</html>