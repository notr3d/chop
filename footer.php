<footer class="page-footer">
  	<div class="page-footer__wrapper container">
  		<div class="page-footer__left col-sm-6 container">
  			<ul class="page-footer__nav col-sm-6">
  				<li><a href="http://regionchop.ru/">О компании</a></li>
  				<li><a href="http://regionchop.ru/licenses">Лицензии</a></li>
  				<li><a href="http://regionchop.ru/services">Услуги</a></li>
  				<li><a href="http://regionchop.ru/customers">Заказчики</a></li>
  			</ul>
  			<ul class="page-footer__nav col-sm-6">
  				<li><a href="http://regionchop.ru/services">Услуги</a></li>
  				<li><a href="http://regionchop.ru/customers">Заказчики</a></li>
  				<li><a href="http://regionchop.ru/contacts">Контакты</a></li>
  			</ul> 
  			<div class="callback col-xs-12">
  				<div class="callback__open">Узнать стоимость охраны объекта</div>
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
  
  <?php wp_footer(); ?>
  
</body>
</html>