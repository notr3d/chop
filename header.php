<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" type="image/x-icon">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>	  
  
  <meta name="google-site-verification" content="tbbVNlMcbdWbGAsPEjphvUFbGslSQJ1PSIRd8RYUfUU" />
  <meta name="yandex-verification" content="fef53294090caae9" />
  <meta name='wmail-verification' content='2ea10c18c778323da24a6623cffb5ee5' />
  <?php wp_head(); ?>
</head>
<body>
  <header class="page-header">
  	<div class="page-header__wrapper container-fluid">
  		<section class="page-nav container">
				<nav class="navbar">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="page-logo navbar-brand" href="http://old.regionchop.ru"><span>Тулрегионохрана</span></a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="http://old.regionchop.ru" class="page-nav__link">О компании <span class="sr-only">(current)</span></a></li>
								<li><a href="http://old.regionchop.ru/services/" class="page-nav__link">Услуги</a></li>
								<li class="dropdown">
									<a href="#" class="page-nav__link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Документы <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="http://old.regionchop.ru/licenses" class="page-nav__link page-nav__link--small" class="page-nav__link">Лицензии</a></li>
										<li><a href="http://old.regionchop.ru/reviews" class="page-nav__link page-nav__link--small">Отзывы</a></li>
									</ul>
								</li>
								<li><a href="http://old.regionchop.ru/prices" class="page-nav__link">Цены</a></li>
								<li><a href="http://old.regionchop.ru/customers" class="page-nav__link">Заказчики</a></li>
								<li><a href="http://old.regionchop.ru/partners" class="page-nav__link">Партнеры</a></li>								
								<li><a href="http://old.regionchop.ru/contacts" class="page-nav__link">Контакты</a></li>
							</ul>
						</div>
					</div>
				</nav>        
			</section>
			<section class="features row hidden-xs">
				<div class="features__wrapper container">
					<a href="http://old.regionchop.ru/services#1" class="features__item" id="#link-1">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/1.png" alt="" width="80" height="80">
						<span>Охрана стационарных объектов</span>
					</a>
					<a href="http://old.regionchop.ru/services#2" class="features__item" id="#link-2">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/2.png" alt="" width="80" height="80">
						<span>Обеспечение порядка в местах проведения массовых мероприятий</span>
					</a>
<!--
					<a href="http://old.regionchop.ru/services#3" class="features__item" id="#link-3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/3.png" alt="" width="80" height="80">
					<span>Личная охрана</span>
					</a>
-->
<!--
					<a href="http://old.regionchop.ru/services#4" class="features__item" id="#link-4">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/4.png" alt="" width="80" height="80">
					<span>Пультовая охрана объектов</span>
					</a>
-->
					<a href="http://old.regionchop.ru/services#5" class="features__item" id="#link-5">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/5.png" alt="" width="80" height="80">
						<span>Технические системы безопасности</span>
					</a>
					<a href="http://old.regionchop.ru/services#6" class="features__item" id="#link-6">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/features/6.png" alt="" width="80" height="80">
						<span>Юридические услуги</span>
					</a>				
				</div>
			</section>
  		</div>
  </header>