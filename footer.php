<footer class="footer">
    <div class="footer__img-bg">
	    <?php echo kama_thumb_img('w=1920 &h=600', carbon_get_theme_option('crb_footer_photo')); ?>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="footer-contacts">
                <h2><?php echo carbon_get_theme_option('crb_contacts_title'.get_lang()); ?></h2>

				<?php
				$phone = carbon_get_theme_option('crb_phone');
				$phoneClear = clear_phone($phone);
				$mail = carbon_get_theme_option('crb_mail');
				$address = carbon_get_theme_option('crb_address' . get_lang());
				?>
                <ul class="footer-list address">
                    <li class="address__item"><i class="fas fa-phone"></i>
                        <a href="tel:<?php echo $phoneClear; ?>"><?php echo esc_html__( 'Phone', 'bs-prodinfo' ) ?>: <?php echo $phone; ?></a>
                    </li>
                    <li class="address__item"><i class="fas fa-envelope"></i><a href="mailto:<?php echo $mail; ?>">Email: <?php echo $mail; ?></a></li>
                    <li class="address__item"><i class="fas fa-map-marker-alt"></i><a href="#"><?php echo $address; ?></a></li>
                </ul>
            </div>
            <div class="footer-form">
                <?php if(get_lang() == '_ru'): ?>
					<?php echo do_shortcode('[contact-form-7 id="61" title="Форма rus"]'); ?>
                <?php elseif(get_lang() == '_ro'): ?>
	                <?php echo do_shortcode('[contact-form-7 id="108" title="Form rom"]'); ?>
                    <?php else: ?>
						<?php echo do_shortcode('[contact-form-7 id="107" title="Form en"]'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="map" id="js-map">
	            <?php if(get_lang() === '_ro'): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	            <?php elseif(get_lang() === '_ru'): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.2967.0/node_modules/wix-santa/static/external/googleMap.html?language=ru&amp;lat=47.04084899999999&amp;long=28.891227999999956&amp;address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&amp;addressInfo=Р. Молдова, мун. Кишинев, блв. Мирча чел Бэтрын 8/1&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
	            <?php else: ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<div class="footer-buttons">
    <a target="_blank" class="footer-buttons__phone" href="tel:<?php echo $phoneClear; ?>"><i class="fas fa-phone"></i></a>
    <a target="_blank" class="footer-buttons__facebook" href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><i class="fab fa-facebook-square"></i></a>
</div>
<a target="_blank" href="https://www.messenger.com/t/prodinfo.md" class="messenger">
    <img src="<?php echo get_template_directory_uri().'/site/assets/i/MESSENGER.png'; ?>" alt="">
</a>
<a href="#" id="js-up" class="up"><img src="<?php echo get_template_directory_uri().'/site/assets/i/svg/up-arrow.svg'; ?>" alt=""></a>
<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<?php wp_footer(); ?>
</body>
</html>


