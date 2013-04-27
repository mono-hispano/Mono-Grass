<?php if(!isset($is_news_home) || $is_news_home == false) { ?>
<a class="action_button" href="<?php bloginfo('url'); ?>/news/" style="display: block; text-align: center; margin-bottom: 20px;"><?php _e('Read the archives...', 'grass'); ?></a>
<?php } ?>

<div class="subtle_box">
    <h4>Conecta con Mono Hispano<?/* php _e('Connect with GNOME', 'grass'); */?></h4>
    
    <div class="social_network_icons">
        <ul>
            <li>
                <a href="http://www.facebook.com/monohispano">
                    <img src="<?php bloginfo('template_url')?>/images/social_networks/facebook.png" alt=" " />
                    Facebook
                </a>
            </li>
	    <li>
                <a href="https://plus.google.com/communities/115869474118291444852">
                    <img src="<?php bloginfo('template_url')?>/images/social_networks/googleplus.png" alt=" " />
                    Google+
                </a>
            </li>
            <li>
                <a href="http://twitter.com/monohispano">
                    <img src="<?php bloginfo('template_url')?>/images/social_networks/twitter.png" alt=" " />
                    Twitter
                </a>
            </li>
            
        </ul>
    </div>
</div>
    
<div class="subtle_box">
    <h4>Planeta</h4>
    <p>Para ver las últimas novedades de los desarrolladores de Mono en español visite <a href="http://planeta.mono-hispano.org">Planeta Mono Hispano</a></p>
</div>
