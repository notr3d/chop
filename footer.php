<footer class="page-footer">
  	<div class="page-footer__wrapper container">
  		<div class="page-footer__left col-sm-6 container">
  			<ul class="page-footer__nav col-sm-6">
  				<li><a href="http://regionchop.ru/">О компании</a></li>
  				<li><a href="http://regionchop.ru/licenses">Лицензии</a></li>
  				<li><a href="http://regionchop.ru/reviews">Отзывы</a></li>
  				<li><a href="http://regionchop.ru/customers">Заказчики</a></li>
  			</ul>
  			<ul class="page-footer__nav col-sm-6">
  				<li><a href="http://regionchop.ru/services">Услуги</a></li>
  				<li><a href="http://regionchop.ru/prices">Цены</a></li>
  				<li><a href="http://regionchop.ru/partners">Партнеры</a></li>
  				<li><a href="http://regionchop.ru/contacts">Контакты</a></li>
  			</ul> 
  			<div class="callback col-xs-12">
  				<?php if (!is_page($page = "Цены")): ?>
  					<div class="callback__open">Узнать стоимость охраны объекта</div>
  				<?php endif; ?>
  				<div class="callback__wrapper">
  					<div class="callback__body">
  						<div class="callback__close">×</div>
  						<h2 class="callback__title">Узнать стоимость</h2>
  						<p class="callback__subtitle">Заполните форму и мы с вами свяжемся</p>
  						<div class="callback__form">
  							<!--<input class="callback__input" type="text" placeholder="Ваше имя" required>
  							<input class="callback__input" type="tel" placeholder="Ваш телефон" required>
  							<input class="callback__input" type="email" placeholder="Ваш E-mail" required>
  							<textarea class="callback__input" rows="5" placeholder="Сообщение"></textarea>
  							<input class="callback__input callback__input--submit" type="submit" value="Отправить">-->
  							<?php echo do_shortcode( '[contact-form-7 title="callback"]' ); ?>
  						</div>
  					</div>
  				</div>
  			</div> 			
		</div>	
		<div class="page-footer__right col-sm-6 container"> 			
			<address>
				<p class="phone">8 (953) 953-81-27</p>
				<strong>Адрес:</strong> 300004, Россия,<br>
				г.Тула, шоссе Веневское,<br>
				д.4, корп.5, офис №109<br>
				<strong>E-mail:</strong> <a href="mailto:zarevo1111@yandex.ru">zarevo1111@yandex.ru</a>
				<p class="copy">© 2016 ЧОО "Тулрегионохрана"</p>
			</address>
			<!-- Yandex.Metrika informer -->
			<!--<a href="https://metrika.yandex.ru/stat/?id=39095985&amp;from=informer"
			target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/39095985/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
			style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="39095985" data-lang="ru" /></a>-->
			<!-- /Yandex.Metrika informer -->
		</div>		
  	</div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
		var myCenter=new google.maps.LatLng(54.219374, 37.652526);

    function initialize(){
        var mapProp = {
            center:myCenter,
            zoom:16,
					  scrollwheel:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("map"), mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'<?php echo esc_url( get_template_directory_uri() ); ?>/img/page-logo.png',
            size: new google.maps.Size(20, 32)
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
  
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter39095985 = new Ya.Metrika({
						id:39095985,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/39095985" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->	
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-82670039-1', 'auto');
		ga('send', 'pageview');
	</script>
	
  <?php wp_footer(); ?>  
</body>
</html>