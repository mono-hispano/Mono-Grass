    <!-- footer grass -->
    <div id="footer_grass">
        &nbsp;
    </div>

    <!-- footer -->
    <div id="footer">
        <div class="container_12">
            <div class="links grid_9">
                <?php
                wp_nav_menu('menu=footer');
                ?>
            </div>
            
            <?php if (function_exists('wppo_get_all_available_langs') && function_exists('wppo_get_lang')) {
                
                $list_of_languages = wppo_get_all_available_langs();
                if (count($list_of_languages) > 1) {
                                
                ?>
                <div class="language grid_3">
                    <div>
                        <strong><?php _e( 'This website is available in many languages', 'grass' ); ?></strong>
                        <a href="<?php echo home_url('/languages/');?>" data-uri="<?php echo home_url('/');?>?select-language&amp;url=<?php echo $_SERVER['REQUEST_URI'];?>">
                            <span class="switch"><?php _e( 'Switch Language', 'grass' ); ?></span>
                            <span class="loading"><?php _e( 'Loading...', 'grass' ); ?></span>
                        </a>
                    </div>
                </div>
                <?php
                }
            }
            ?>
            
            <!-- footnotes -->
            <div id="footnotes" class="grid_9">
                <?php _e( 'Copyright', 'grass' ); ?> © 2005‒<?php echo date('Y');?> <strong class="gnome_logo"><?php _e( 'Mono Hispano', 'grass' ); ?></strong><br />
                <small>
                    <?php _e( 'Eres libre de modificar y mezclar', 'grass' ); ?>: <a href="http://opensource.org/licenses/MIT">MIT X11</a>.
                    <?php _e( 'Optimizado para estándares', 'grass' ); ?>.
                    <?php _e( 'Alojado por', 'grass' ); ?> <a href="http://www.aquihaydominios.com">Aquí hay Dominios</a>.
                    <?php _e( 'Desarrollado por', 'grass' ); ?> <a href="http://www.wordpress.org">WordPress</a>.
                </small>
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    
    <?php if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
    <!-- Piwik --> 
    <script type="text/javascript"> 
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://webstats.gnome.org/" : "http://webstats.gnome.org/");
    document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
    </script><script type="text/javascript"> 
    try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
    } catch( err ) {}
    </script><noscript><p><img src="http://webstats.gnome.org/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript> 
    <!-- End Piwik Tag --> 
    <?php } ?>
    
    
    <?php
    wp_footer();
    ?>   
