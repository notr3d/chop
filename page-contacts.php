<?php get_header(); ?>  
  <main class="page-main container">
  	<aside class="page-aside col-sm-4">
  		<section class="popular hidden-xs">
  			<div class="popular__wrapper">
  				<h2 class="popular__header">Самое популярное</h2>
  				<div class="popular__container">
  					<div class="popular__item row">
							<a href="http://regionchop.ru/licenses">Лицензии</a>
							<p>Перечень лицензий, имеющихся у ЧОО «Тулрегионохрана».</p>
  					</div>
  					<div class="popular__item row">
							<a href="http://regionchop.ru/customers">Отзывы</a>
							<p>Наш профессионализм лучше всего подтверждает перечень наших заказчиков, доверяющих нам решение серьёзных охранных задач.</p>
  					</div>
  					<div class="popular__item row">
							<a href="http://regionchop.ru/prices">Цены</a>
							<p>Ценовая политика нашей организации. Работаем на взаимовыгодных условиях.</p>
  					</div>
  				</div>
  			</div>
  		</section>
  	</aside>
  	<article class="contacts col-sm-8">
  		<div class="contacts__wrapper">
  			<h1 class="contacts__header"><span>Контакты</span></h1>  			
  			<div class="contacts__container">
  			  <address class="contacts__address">
				<strong>ЧОО "ТулаРегионОхрана"</strong><br>
				<strong>Адрес:</strong> 300004, Россия, г.Тула, шоссе Веневское, д.4, корп.5, офис №109<br>
				<strong>Телефон:</strong> 8 (487) 252-44-51<br>
				<strong>E-mail:</strong> <a href="mailto:info@regionchop.ru">info@regionchop.ru</a>
			  </address>						
  			  <div id="map" class="map"></div>  				
  				<?php echo do_shortcode( '[contact-form-7 id="108" title="Форма"]' ); ?>
  			</div>
  		</div>
  	</article>	
  </main>
<?php get_footer(); ?> 