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
							<a href="http://regionchop.ru/documents">Цены</a>
							<p>Ценовая политика нашей организации. Работаем на взаимовыгодных условиях.</p>
  					</div>
  				</div>
  			</div>
  		</section>
  	</aside>
  	<article class="licenses col-sm-8">  	
  		<div class="licenses__wrapper">
  			<h1 class="licenses__header"><span>Лицензии</span></h1>
  			<div class="licenses__container">
					<div class="licenses__item col-md-6">
						<a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/licenses/1-high.jpg" data-lightbox="image-1" data-title="Лицензия">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/licenses/1-low.jpg" alt="">
            </a>
					</div>
          <div class="licenses__item col-md-6">
						<a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/licenses/2-high.jpg" data-lightbox="image-1" data-title="Приложение к лицензии">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/licenses/2-low.jpg" alt="">
            </a>
					</div>									
  		</div>
  	</article>	
  </main>
  <?php get_footer(); ?> 