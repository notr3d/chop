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
							<a href="http://regionchop.ru/reviews">Отзывы</a>
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
  	<article class="reviews col-sm-8">  	
  		<div class="reviews__wrapper">
  			<h1 class="reviews__header"><span>Отзывы</span></h1>
  			<div class="reviews__container">
  		    <div class="reviews__item col-sm-4">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/1.jpg" data-lightbox="image-1" data-title="ООО «МЕТАЛЛИКА»">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/1.jpg" alt="">
            </a>
            <span>ООО «МЕТАЛЛИКА»</span>
  		    </div>
  		    <div class="reviews__item col-sm-4">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/2.jpg" data-lightbox="image-2" data-title="ЗАО «БиГ»">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/2.jpg" alt="">
            </a>
            <span>ЗАО «БиГ»</span>
  		    </div>
  		    <div class="reviews__item col-sm-4">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/3.jpg" data-lightbox="image-3" data-title="ООО «ЛиК»">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/3.jpg" alt="">
            </a>
            <span>ООО «ЛиК»</span>
  		    </div>
  		    <div class="reviews__item col-sm-4">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/4.jpg" data-lightbox="image-4" data-title="ООО «Подолье»">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/4.jpg" alt="">
            </a>
            <span>ООО «Подолье»</span>
  		    </div>
  		    <div class="reviews__item col-sm-4">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/5.jpg" data-lightbox="image-5" data-title="ООО «СКИФ»">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reviews/5.jpg" alt="">
            </a>
            <span>ООО «СКИФ»</span>
  		    </div>
  		    
  			</div>
  		</div>
  	</article>	
  </main>
<?php get_footer(); ?> 