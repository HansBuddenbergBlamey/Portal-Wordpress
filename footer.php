<div class="footer">
    
    <div class="wrap_1280">
        
        <?php
        
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_widget')):

            endif; 
        ?>

    <div class="clearfix"></div>

    <div class="copyright">

        <p>&copy; Copyright <?php echo date("Y"); ?> | <?php bloginfo('name'); ?>. Todos los derechos reservados. | <a href="http://www.wpdevsolutions.com/post-sitemap.xml">Mapa del Sitio</a> | <a href="/privacy-policy">Política de Privacidad</a> |<a href="http://wambition.com/">Wordpress Diseño &amp; Desarrollo </a> por Hans-Dieter Buddenberg Blamey </p>

    </div>

    <div class="clearfix"></div>

    </div>
    
    </div>

    <script type="text/javascript">
        
    jQuery(window).load(function() {
        
        var $container = jQuery('#ms-container');
        
            $container.imagesLoaded(function() {
                
                $container.masonry({
                    
                    columnWidth: '.ms-item',
                    
                    itemSelector: '.ms-item'
                    
                });
                
            });
            
    });
      
    </script>

<?php wp_footer(); ?>
    
</body>

</html>