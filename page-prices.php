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
  	<article class="prices col-sm-8">  	
  		<div class="prices__wrapper">
  			<h1 class="prices__header">
				<span>Цены</span>  			
				<a href="region-chop.PDF" class="download">Скачать каталог</a></h1>
  			<div class="prices__container">
<!--
  				<div class="prices__calculator">
						<input id="x" placeholder="x">+
						<input id="y" placeholder="y">+
						<input id="z" placeholder="z">=
						<button id="calc">Расчитать</button>
						<span id="res"></span>
					</div>
-->
					<!--<div class="table-responsive">
						<table class="prices__table table">
							<thead>
								<tr>
									<th rowspan="2">№ п/п</th>
									<th rowspan="2">Наименование услуги</th>
									<th rowspan="2">Ед. изм.</th>
									<th colspan="2">Цена, руб.</th>
								</tr>
								<tr>
									<th>до 12 ч</th>
									<th>до 24 ч</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Охрана зданий на этапе стройки</td>
									<td>чел/ч</td>
									<td>215</td>
									<td>160</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Охрана складских помещений</td>
									<td>чел/ч</td>
									<td>215</td>
									<td>160</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Охрана стоянок</td>
									<td>чел/ч</td>
									<td>215</td>
									<td>160</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Охрана жилых помещений</td>
									<td>чел/ч</td>
									<td>215</td>
									<td>160</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Охрана магазинов розничной торговли</td>
									<td>чел/ч</td>
									<td>215</td>
									<td>160</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Охрана офисных помещений</td>
									<td>чел/ч</td>
									<td>225</td>
									<td>180</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Охрана площадей торговых центров и бизнес центров (класс В, С)</td>
									<td>чел/ч</td>
									<td>225</td>
									<td>180</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Охрана помещений общественного питания</td>
									<td>чел/ч</td>
									<td>225</td>
									<td>180</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Охрана гостиничных помещений (до 3 звезд)</td>
									<td>чел/ч</td>
									<td>225</td>
									<td>180</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Охрана ювелирных магазинов</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Охрана элитных магазинов розничной торговли</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Охрана банковских помещений</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Охрана элитных помещений общественного питания</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Охрана площадей торговых центров и бизнес центров (класс А)</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Охрана гостиничных помещений (до 3 звезд)</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>220</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Охрана массовых мероприятий до 50 человек на постоянной основе</td>
									<td>чел/ч</td>
									<td>250</td>
									<td>280</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Охрана массовых мероприятий более 50 человек на постоянной основе</td>
									<td>чел/ч</td>
									<td>280</td>
									<td>310</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Охрана массовых мероприятий до 50 человек на разовой основе</td>
									<td>чел/ч</td>
									<td>280</td>
									<td>310</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Охрана массовых мероприятий более 50 человек на разовой основе</td>
									<td>чел/ч</td>
									<td>310</td>
									<td>340</td>
								</tr>
							</tbody>
						</table>
					</div>-->
					<p>Гибкость финансово–экономической политики нашей организации способствует достижению формата партнёрства, максимально выгодного для обеих сторон. Стоимость одного часа охраны при полном соответствии требуемой схеме расстановки рассчитывается индивидуально с каждым заказчиком.</p>
  			</div>
  		</div>
  	</article>	
  </main>
<?php get_footer(); ?> 