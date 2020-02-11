<?php get_header(); ?>
<?php $menu = get_menu_id('menu-1'); ?>
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2078869305475083');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=2078869305475083&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		<section id="catalog" class="download-block animatedParent">
			<div class="container-fluid"><img class="donwload-img" src="<?php echo get_theme_file_uri('/img/form2.png'); ?>" alt=""/>
				<div class="download-content-wrap">
					<div class="headers-div">
						<h2><?php pll_e('Скачайте каталог<br>косметической продукции'); ?></h2>
						<div class="subtitle">
							<p><?php pll_e('и получите видео-обучение в подарок'); ?></p>
						</div>
					</div>
					<div class="rectangle"></div>
					<div class="inputs-wrap clearfix">
						<div class="col-md-8 col-lg-8">
							<div class="download-newspapper"><img src="<?php echo get_theme_file_uri('/img/newspapper.png'); ?>" alt=""/></div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="form-wrap">
								<p><?php pll_e('Заполните поля:'); ?>
								<form class="download-form" id="download-form1">
									<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_theme_file_uri('/img/user.png'); ?>" alt=""/></span>
										<input name="donwName" placeholder="<?php pll_e('Введите Ваше имя')?>" required />
									</div>
									<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_theme_file_uri('/img/env.png'); ?>" alt=""/></span>
										<input type="email" name="donwEmail" placeholder="<?php pll_e('Введите email')?>" required/>
									</div>
									<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_theme_file_uri('/img/phone.png'); ?>" alt=""/></span>
										<input name="donwPhone" type="<?php if($lang=='en'){echo 'input';}else{echo 'tel';}?>" placeholder="<?php pll_e('Введите телефон')?>" required/>
									</div>
									<div class="input-wrap checkbox-wrap">
										<input type="checkbox" name="gift" id="gift1"/>
										<label class="custom-checkbox" for="gift1"><span class="input-icon"><img src="<?php echo get_theme_file_uri('/img/gift.png'); ?>" alt=""/></span></label>
										<p><?php pll_e('Получить видео-обучение'); ?></p>
									</div>
									<div class="input-wrap"><a href="<?php echo $menu[7]->url; ?>"><?php pll_e('Заполняя эту форму, Вы даете согласие на обработку персональных данных. Политика конфиденциальности') ?></a>
									</div>
									<div class="input-wrap submit-wrap">
										<button type="submit"><?php pll_e('Получить каталог'); ?></button>
										<?php wp_nonce_field('form_verify_action','verify_of_nonce_field'); ?>
										<input type="hidden" name="action" value="contactform">
										<p class="quote_time hidden"><?php pll_e('Подождите'); ?> ... <img src="/wp-content/uploads/img/sand-clock-white.svg" alt="sand clock"></p>
										<input type="hidden" name="position" value="Верхняя форма">
										<?php
										$geoLoc = getGeo();
										$city = $geoLoc['city']['name_ru'];
										$country = $geoLoc['country']['name_ru'];
										?>
										<input type="hidden" name="country" value="<?= $country ?>">
										<input type="hidden" name="city" value="<?= $city ?>">
										<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
										<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
										<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
										<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
										<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
										<input type="hidden" name="locale" value="<?= $lang ?>">
									</div>
								</form>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $first_args = array(
		'page_id' => $menu[0]->object_id,
	);
	$first = new WP_Query($first_args);
	if( $first->have_posts() ) : ?>
		<?php while( $first->have_posts() ) : $first->the_post(); ?>
			<section id="henna" class="eyebrows-block">
				<div class="container-fluid">
					<div class="headers-div">
						<h2><?php the_title(); ?></h2>
						<div class="subtitle">
							<?php the_content(); ?><img class="wave" src="<?php echo get_theme_file_uri('/img/wave.png'); ?>" alt="">
						</div>
					</div>
					<div class="eyebrows-box" data-appear-top-offset="-400" data-sequence="600"><img class="eyebrows-image" src="<?php echo get_theme_file_uri('/img/bank.png'); ?>" alt="">
						<div class="eyebrows-content-wrap clearfix">
							<div class="left-column column"><img class="col-bg" src="<?php echo get_theme_file_uri('/img/element.png'); ?>">
								<div class="lighting-romb"></div>
								<img class="curve-line" src="<?php echo get_theme_file_uri('/img/curve.png'); ?>" alt="">
								<div class="column-wrap">
									<img class="small-romb" src="<?php echo get_theme_file_uri('/img/romb.png'); ?>" alt="">
									<h3><?php pll_e('Упаковка'); ?></h3><img class="wave" src="<?php echo get_theme_file_uri('/img/wave.png'); ?>" alt="">
									<div class="content">
										<?php $types = get_field('types'); ?>
										<?php foreach ($types as $key => $value): ?>
											<?php $img = $value['img']['sizes']['medium']; ?>
											<figure>
												<p> <img src="<?php echo $img ?>" alt=""></p>
												<figcaption><?php echo $value['title']; ?></figcaption>
											</figure>
										<?php endforeach ?>
									</div>
								</div>
							</div>
							<div class="right-column column hover"><img class="col-bg" src="<?php echo get_theme_file_uri('/img/element.png'); ?>">
								<div class="lighting-romb"></div>
								<img class="curve-line" src="<?php echo get_theme_file_uri('/img/curve.png'); ?>" alt="">
								<div class="column-wrap">
									<img class="small-romb" src="<?php echo get_theme_file_uri('/img/romb.png'); ?>" alt="">
									<h3><?php pll_e('Цвета'); ?></h3><img class="wave" src="<?php echo get_theme_file_uri('/img/wave.png'); ?>" alt="">
									<div class="content">
										<figure>
											<p><span class="color color-black"></span></p>
											<figcaption>Black</figcaption>
										</figure>
										<figure>
											<p><span class="color color-dark-brown"></span></p>
											<figcaption>Dark Brown</figcaption>
										</figure>
										<figure>
											<p><span class="color color-brown"></span></p>
											<figcaption>Brown</figcaption>
										</figure>
										<figure>
											<p><span class="color color-grey"></span></p>
											<figcaption>Grey Brown</figcaption>
										</figure>
										<figure>
											<p><span class="color color-light-brown"></span></p>
											<figcaption>Light Brown</figcaption>
										</figure>
										<figure>
											<p><span class="color color-blond-brown"></span></p>
											<figcaption>Blond</figcaption>
										</figure>	                 
									</div>
								</div>
							</div>
						</div>
						<div class="bottom-column column"><img class="col-bg" src="<?php echo get_theme_file_uri('/img/element.png'); ?>">
							<div class="lighting-romb"></div>
							<div class="column-wrap">
								<img class="small-romb" src="<?php echo get_theme_file_uri('/img/romb.png'); ?>" alt="">
								<h3><?php pll_e('Развесовка'); ?></h3><img class="wave" src="<?php echo get_theme_file_uri('/img/wave.png'); ?>" alt="">
								<div class="content">
									<?php $w_types = get_field('weight_types'); ?>
									<?php foreach ($w_types as $key => $value): ?>
										<?php $img = $value['img']['sizes']['medium']; ?>
										<figure class="bank-figure<?php echo $key; ?>">
											<p><img src="<?php echo $img ?>" alt=""></p>
											<figcaption><?php echo $value['title']; ?></figcaption>
										</figure>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
					<div id="advantages" class="advantages-content-wrap clearfix animatedParent" data-appear-top-offset="-400" data-sequence="600">
						<?php $adv = get_field('adv'); ?>
						<?php foreach ($adv as $key => $value): ?>
							<?php $count = $key + 1; ?>
							<figure data-id="<?php echo $key; ?>"><img src="<?php echo get_theme_file_uri('/img/icon'. $count .'.png'); ?>" alt="">
								<figcaption>
									<div class="caption-wrap">
										<h4><?php echo $value['title']; ?></h4><img class="wave" src="<?php echo get_theme_file_uri('/img/small-wave.png'); ?>" alt="">
										<p><?php echo $value['desc']; ?></p>
									</div>
								</figcaption>
							</figure>
						<?php endforeach ?>	          
					</div>
				</div>
			</section>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>
	<?php $second_args = array(
		'page_id' => $menu[1]->object_id,
	);
	$second = new WP_Query($second_args);
	if( $second->have_posts() ) : ?>
		<?php while( $second->have_posts() ) : $second->the_post(); ?>
			<section id="certificate" class="reliable-block animatedParent" data-appear-top-offset="-400"><img class="reliable-bg" src="<?php echo get_template_directory_uri(); ?>/img/flowers.png" alt="">
				<div class="container-fluid">
					<div class="headers-div">
						<h2><?php the_title(); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/wave.png" alt="">
					</div>
					<div class="reliable-content-wrap clearfix">
						<?php $sert = get_field('sert'); ?>
						<?php foreach ($sert as $key => $value): ?>
							<?php $sert_img = $value['img']; ?>
							<div class="certificate">
								<figure><a href="<?php echo $sert_img['url']; ?>" data-lightbox="roadtrip"><img src="<?php echo $sert_img['sizes']['medium']; ?>" alt=""></a></figure>
								<figcaption><?php echo $value['title'] ?></figcaption>
							</div>
						<?php endforeach ?>
					</div>
					<div id="reliable" class="reliable-middle-content"><img src="<?php echo get_template_directory_uri(); ?>/img/text-bg.png" alt="">
						<div class="reliable-text-wrap"> 
							<p> <img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt=""></p><?php pll_e('Единственный<br>производитель со свидетельством<br>государственной<br>регистрации'); ?>
							<p><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt=""></p>
						</div>
					</div>
					<div class="reliable-bottom-content">
						<div class="reliable-bottom-item">
							<figure><img src="<?php echo get_template_directory_uri(); ?>/img/f1.png" alt="">
								<figcaption>
									<p><?php pll_e('Возможность возврата товара в течение <span>3 месяцев</span>'); ?></p>
								</figcaption>
							</figure>
							<figure><img src="<?php echo get_template_directory_uri(); ?>/img/f2.png" alt="">
								<figcaption>
									<p><?php pll_e('<span>98% клиентов</span> заказывают повторно'); ?></p>
								</figcaption>
							</figure>
							<figure><img src="<?php echo get_template_directory_uri(); ?>/img/f3.png" alt="">
								<figcaption>
									<p><?php pll_e('Хранится в <span>2 раза дольше</span>, благодаря алюминиевой упаковке'); ?></p>
								</figcaption>
							</figure>
							<figure><img src="<?php echo get_template_directory_uri(); ?>/img/f4.png" alt="">
								<figcaption>
									<p><span><?php pll_e('Успешно проходим проверку у вашего технолога'); ?></span></p>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>

	<div class="in-trend">
	<!-- 
		<img class="grad-bg" src="<?php echo get_template_directory_uri(); ?>/img/grad.png" alt="">
	-->
	<?php $third_args = array(
		'page_id' => $menu[2]->object_id,
	);
	$third = new WP_Query($third_args);
	if( $third->have_posts() ) : ?>
		<?php while( $third->have_posts() ) : $third->the_post(); ?>
			<section id="technolog" class="technolog">
				<img class="technolog-bg technolog-desktop" src="<?php echo get_template_directory_uri(); ?>/img/girl.png" alt="">
				<img class="technolog-bg technolog-mobile" src="<?php echo get_template_directory_uri(); ?>/img/form-flower.png" alt="">
				<div class="container-fluid">
					<div class="col-lg-6 col-md-6"></div>
					<div class="col-lg-8 col-md-8 col-sm-14">
						<div class="headers-div clearfix">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="technolog-content-wrap">
							<?php the_content(); ?>
						</div>
						<div class="technolog-info">
							<div class="technolog-name"><?php echo get_field('name'); ?></div>
							<div class="technolog-position"><?php echo get_field('position'); ?></div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>
	<section id="trend" class="trend">
		<div class="headers-div">
			<h2><?php pll_e('Мы в тренде!'); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
			<div class="subtitle">
				<p><?php pll_e('Компания "СС brow" ежемесячно выводит на рынок эксклюзивные товары'); ?></p>
			</div>
		</div>
		<div class="trend-content-wrap">
			<div class="trend-slider">
				<?php $trend_args = array(
					'post_type' => 'slug',
					'posts_per_page' => -1,
				);
				$trend_ids = array();
				$trend = new WP_Query($trend_args);
				if( $trend->have_posts() ) : ?>
					<?php while( $trend->have_posts() ) : $trend->the_post(); ?>
						<?php $trend_ids[] = get_the_id(); ?>
						<div class="trend-slide">
							<div class="trend-left"><img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'full'); ?>" alt=""></div>
							<div class="trend-right">
								<h3><?php the_title(); ?></h3>
								<hr>
								<?php the_content(); ?>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php var_dump($trend_ids); ?>
	</div>
</section>
</div>
<section id="download" class="download-block animatedParent">
	<div class="container-fluid"><img class="donwload-img" src="<?php echo get_template_directory_uri(); ?>/img/form2.png" alt=""/>
		<div class="download-content-wrap">
			<div class="headers-div">
				<h2><?php pll_e('Скачайте каталог<br>косметической продукции'); ?></h2>
				<div class="subtitle">
					<p><?php pll_e('и получите видео-обучение в подарок'); ?></p>
				</div>
			</div>
			<div class="rectangle"></div>
			<div class="inputs-wrap clearfix">
				<div class="col-md-8 col-lg-8">
					<div class="download-newspapper"><img src="<?php echo get_template_directory_uri(); ?>/img/newspapper.png" alt=""/></div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="form-wrap">
						<p><?php pll_e('Заполните поля:'); ?>
						<form class="download-form" id="download-form2">
							<div class="input-wrap field-wrap">
								<span class="input-icon">
									<img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt=""/>
								</span>
								<input name="donwName" placeholder="<?php pll_e('Введите Ваше имя'); ?>" required/>
							</div>
							<div class="input-wrap field-wrap">
								<span class="input-icon">
									<img src="<?php echo get_template_directory_uri(); ?>/img/env.png" alt=""/>
								</span>
								<input type="email" name="donwEmail" placeholder="<?php pll_e('Введите email'); ?>" required/>
							</div>
							<div class="input-wrap field-wrap">
								<span class="input-icon">
									<img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt=""/>
								</span>
								<input name="donwPhone" type="<?php if($lang=='en'){echo 'input';}else{echo 'tel';}?>" placeholder="<?php pll_e('Введите телефон'); ?>" required/>
							</div>
							<div class="input-wrap checkbox-wrap">
								<input type="checkbox" name="gift" id="gift2"/>
								<label class="custom-checkbox" for="gift2">
									<span class="input-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gift.png" alt=""/>
									</span>
								</label>
								<p><?php pll_e('Получить видео-обучение'); ?></p>
							</div>
							<div class="input-wrap">
								<a href="<?php echo $menu[7]->url; ?>">
									<?php pll_e('Заполняя эту форму, Вы даете согласие на обработку персональных данных. Политика конфиденциальности') ?>
								</a>
							</div>
							<div class="input-wrap submit-wrap">
								<button type="submit">
									<?php pll_e('Получить каталог'); ?>                      		
								</button>
								<?php wp_nonce_field('form_verify_action','verify_of_nonce_field'); ?>
								<input type="hidden" name="action" value="contactform">
								<p class="quote_time hidden">
									<?php pll_e('Подождите') ?> ... <img src="/wp-content/uploads/img/sand-clock-white.svg" alt="sand clock">
								</p>
								<input type="hidden" name="position" value="<?php pll_e('Центральная форма'); ?>">
								<input type="hidden" name="country" value="<?= $country ?>">
								<input type="hidden" name="city" value="<?= $city ?>">
								<input type="hidden" name="locale" value="<?= $lang ?>">
							</div>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>



<?php $clients_args = array(
	'page_id' => $menu[3]->object_id,
);
$clients = new WP_Query($clients_args);
if( $clients->have_posts() ) : ?>
	<?php while( $clients->have_posts() ) : $clients->the_post(); ?>
		<section id="clients" class="clients animatedParent" data-appear-top-offset="-400">
			<div class="container-fluid">
				<div class="headers-div">
					<h2><?php the_title(); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
				</div>
				<div class="clients-wrap clearfix">
					<?php $our_clients = get_field('cliets'); ?>
					<?php foreach ($our_clients as $key => $value): ?>
						<?php if($key == 0 || $key == 1) {
							$class = 'tile-wide';
						} elseif ( $key == 2 ) {
							$class = 'tile-super';
						} else {
							$class = 'tile-large';
						} ?>
						<a href="#clients_<?php echo $key; ?>" data-toggle="modal" target="_blank">
							<div class="clients-item <?php echo $class; ?>" data-id="0">
								<?php $img = $value['img']['sizes']['large']; ?>
								<figure class="effect-oscar"><img src="<?php echo $img;  ?>" alt="">
									<figcaption>
										<div class="clients-text-wrap">
											<p><?php echo $value['name']; ?></p><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/wave2.png" alt="">
										</div>
									</figcaption>
								</figure>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
<?php $fifth_args = array(
	'page_id' => $menu[4]->object_id,
);
$fifth = new WP_Query($fifth_args);
if( $fifth->have_posts() ) : ?>
	<?php while( $fifth->have_posts() ) : $fifth->the_post(); ?>
		<section id="distibutors" class="distibutor"><img class="dist-bg" src="<?php echo get_theme_file_uri('/img/dist-bg.png'); ?>" alt="">
			<div class="container-fluid">
				<div class="headers-div">
					<h2><?php the_title(); ?></h2>
					<div class="subtitle">
						<?php the_content(); ?><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/wave.png" alt="">
					</div>
				</div>
				<p><?php pll_e('Наших представителей вы можете найти в городах:'); ?></p>
				<div class="distributor-content-wrap">
					<div class="distributor-scroll-wrap">
						<div class="distributor-cities">
							<?php $cities = get_field('cities'); ?>
							<?php foreach ($cities as $key => $value): ?>
								<div class="city">
									<h3><?php echo $value['city']; ?></h3>
									<hr>
									<?php foreach ($value['stores'] as $key => $v): ?>
										<div class="city-description">
											<div class="store-name"><?php echo $v['name']; ?></div>
											<div class="store-location"><?php echo $v['address']; ?></div>
											<div class="store-phone"><a href="tel:<?php echo $v['phone']; ?>"><?php echo $v['phone']; ?></a></div>
											<div class="store-link"><a href="http://<?php echo $v['website'] ?>"><?php echo $v['website'] ?></a></div>
										</div>
									<?php endforeach ?>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
<section id="calc" class="new-product animatedParent" data-appear-top-offset="-400">
	<div class="container-fluid">
		<div class="headers-div">
			<h2><?php pll_e('Почему стоит заниматься<br>новыми продуктами?'); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
		</div>
		<div class="product-wrap">
			<div class="product-left">
				<div class="product-reason"><img src="<?php echo get_template_directory_uri(); ?>/img/x1.png" alt="">
					<p><?php pll_e('Увеличение<br>среднего чека'); ?></p>
				</div>
				<div class="product-reason"><img src="<?php echo get_template_directory_uri(); ?>/img/x2.png" alt="">
					<p><?php pll_e('Новые<br>клиенты'); ?></p>
				</div>
				<div class="product-reason"><img src="<?php echo get_template_directory_uri(); ?>/img/x3.png" alt="">
					<p><?php pll_e('Возможность высокой<br>торговой наценки'); ?></p>
				</div>
			</div>
			<div class="product-right">
				<div class="product-form-wrap">
					<div class="input-wrap">
						<p class="input-title"><?php pll_e('Выберите Вашу деятельность'); ?></p>
						<div class="select-wrap">
							<select class="js-example-basic-single" name="storeType">
								<option value="0.08" ><?php pll_e('Торговые компании'); ?></option>
								<option value="0.07" selected="selected"><?php pll_e('Обучающие центры'); ?></option>
								<option value="0.015"><?php pll_e('Магазины профессиональной косметики'); ?></option>
								<option value="0.012"><?php pll_e('Магазины для парикмахеров'); ?></option>
								<option value="0.011"><?php pll_e('Магазины для ногтевого сервиса'); ?></option>
								<option value="0.009"><?php pll_e('Brow бары'); ?></option>
								<option value="0.008"><?php pll_e('Частные мастера'); ?></option>
							</select>
						</div>
					</div>
					<div class="input-wrap">
						<p class="input-title"><?php pll_e('Население вашего города:'); ?></p>
						<div class="range-wrap">
							<input type="range" name="range" min="0" max="15000000" value="1000000" step="10000"><span class="left-count">1 000 000</span><span class="right-count">15 000 000</span>
						</div>
					</div>
					<div class="input-wrap">
						<p class="input-title"><?php pll_e('Количество пунктов продаж:'); ?></p>
						<div class="point-count-wrap clearfix">
							<div class="point-item-wrap active">
								<label for="point1"><span>1</span></label>
								<input type="radio" name="storesCount" value="1" id="point1" checked>
							</div>
							<div class="point-item-wrap">
								<label for="point2"><span>2</span></label>
								<input type="radio" name="storesCount" value="2" id="point2">
							</div>
							<div class="point-item-wrap">
								<label for="point3"><span>3</span></label>
								<input type="radio" name="storesCount" value="3" id="point3">
							</div>
							<div class="point-item-wrap">
								<label for="point4"><span>4</span></label>
								<input type="radio" name="storesCount" value="4" id="point4">
							</div>
						</div>
					</div>
					<div class="input-bottom-text">
						<div class="bottom-block"><img src="<?php echo get_template_directory_uri(); ?>/img/rub.png" alt=""></div>
						<div class="bottom-block">
							<p class="color-text"><?php pll_e('В городе с населением 1 млн человек, с 1 пунктом продаж, уровень прибыли'); ?></p>
							<p class="income"><span>70 000</span> <?php pll_e('рублей/месяц'); ?></p>
						</div>
					</div>
					<div class="input-buttom-wrap">
						<button type="submit" data-toggle="modal" data-target="#myModal"><?php pll_e('Хочу узнать подробнее'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $sixth_args = array(
	'page_id' => $menu[5]->object_id,
);
$sixth = new WP_Query($sixth_args);
if( $sixth->have_posts() ) : ?>
	<?php while( $sixth->have_posts() ) : $sixth->the_post(); ?>
		<section id="stages" class="stages">
			<div class="container-fluid">
				<div class="headers-div">
					<h2><?php the_title(); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
				</div>
				<div class="stages-wrap animatedParent" data-appear-top-offset="-400" data-sequence="600">
					<?php $steps = get_field('steps'); ?>
					<div class="row first-row">
						<div class="stage odd stage1" data-id="0">
							<h4><?php echo $steps[0]['title']; ?></h4><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
							<?php echo $steps[0]['desc']; ?>
						</div>
						<div class="stage even stage2" data-id="1">
							<h4><?php echo $steps[1]['title']; ?></h4><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
							<?php echo $steps[1]['desc']; ?>
						</div>
					</div>
					<div class="row second-row">
						<div class="stage odd stage3" data-id="2">
							<h4><?php echo $steps[2]['title']; ?></h4><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
							<?php echo $steps[2]['desc']; ?>
						</div>
						<div class="stage even stage4" data-id="3">
							<h4><?php echo $steps[3]['title']; ?></h4><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
							<?php echo $steps[3]['desc']; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
<div class="results">
	<section id="download2" class="download-block animatedParent">
		<div class="container-fluid"><img class="donwload-img" src="<?php echo get_template_directory_uri(); ?>/img/form2.png" alt=""/>
			<div class="download-content-wrap">
				<div class="headers-div">
					<h2><?php pll_e('Скачайте каталог<br>косметической продукции'); ?></h2>
					<div class="subtitle">
						<p><?php pll_e('и получите видео-обучение в подарок'); ?></p>
					</div>
				</div>
				<div class="rectangle"></div>
				<div class="inputs-wrap clearfix">
					<div class="col-md-8 col-lg-8">
						<div class="download-newspapper"><img src="<?php echo get_template_directory_uri(); ?>/img/newspapper.png" alt=""/></div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-wrap">
							<p><?php pll_e('Заполните поля:'); ?>
							<form class="download-form" id="download-form3">
								<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt=""/></span>
									<input name="donwName" placeholder="<?php pll_e('Введите Ваше имя'); ?>" required/>
								</div>
								<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/env.png" alt=""/></span>
									<input type="email" name="donwEmail" placeholder="<?php pll_e('Введите email'); ?>" required/>
								</div>
								<div class="input-wrap field-wrap"><span class="input-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt=""/></span>
									<input name="donwPhone" type="<?php if($lang=='en'){echo 'input';}else{echo 'tel';}?>" placeholder="<?php pll_e('Введите телефон'); ?>" required/>
								</div>
								<div class="input-wrap checkbox-wrap">
									<input type="checkbox" name="gift" id="gift3"/>
									<label class="custom-checkbox" for="gift3"><span class="input-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/gift.png" alt=""/></span></label>
									<p><?php pll_e('Получить видео-обучение'); ?></p>
								</div>
								<div class="input-wrap"><a href="<?php echo $menu[7]->url; ?>"><?php pll_e('Заполняя эту форму, Вы даете согласие на обработку персональных данных. Политика конфиденциальности') ?></a>
								</div>
								<div class="input-wrap submit-wrap">
									<button type="submit"><?php pll_e('Получить каталог'); ?></button>
									<?php wp_nonce_field('form_verify_action','verify_of_nonce_field'); ?>
									<input type="hidden" name="action" value="contactform">
									<p class="quote_time hidden"><?php pll_e('Подождите'); ?> ... <img src="/wp-content/uploads/img/sand-clock-white.svg" alt="sand clock"></p>
									<input type="hidden" name="position" value="Нижняя форма">
									<input type="hidden" name="country" value="<?= $country ?>">
									<input type="hidden" name="city" value="<?= $city ?>">
									<input type="hidden" name="locale" value="<?= $lang ?>">
								</div>
							</form>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="results" class="result-slider">


	<div class="container-fluid">
		<div class="headers-div">
			<h2><?php pll_e('Результат окрашивания<br>бровей хной!'); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
		</div>
		<div class="result-slider-wrap">
			<div class="result-title-wrap">
				<div class="result-title-before"><?php pll_e('До'); ?></div>
				<div class="result-title-after"><?php pll_e('После'); ?></div>
			</div>
			<div class="result-slider-content">
				<?php $res_slider_args = array(
					'post_type' => 'results',
					'posts_per_page' => -1,
				);
				$res_slider = new WP_Query($res_slider_args);
				if( $res_slider->have_posts() ) : ?>
					<?php while( $res_slider->have_posts() ) : $res_slider->the_post(); ?>
						<div class="result-slide">
							<?php $before = get_field('image_before'); ?>
							<?php $after = get_field('image_after'); ?>
							<div class="inner-slide">

								<div class="res-img-slide img-before"><img src="<?php echo $before['sizes']['large']; ?>" alt=""></div>
								<div class="res-img-slide img-after"><img src="<?php echo $after['sizes']['large']; ?>" alt=""></div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php $faq_args = array(
	'page_id' => $menu[6]->object_id,
);
$faq = new WP_Query($faq_args);
if( $faq->have_posts() ) : ?>
	<?php while( $faq->have_posts() ) : $faq->the_post(); ?>
		<section id="faqs" class="faq-block">
			<div class="container-fluid">
				<div class="headers-div">
					<h2><?php the_title(); ?></h2><img class="wave" src="<?php echo get_template_directory_uri(); ?>/img/dark_wave.png" alt="">
				</div>
				<div class="faq-wrap">
					<?php $faqs_arr = get_field('faqs'); ?>
					<?php foreach ($faqs_arr as $key => $value): ?>
						<div class="question-wrap">
							<h3 class="question"><?php echo $value['question']; ?></h3>
							<p class="answer collapse"><?php echo strip_tags($value['answer']); ?></p>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>

<?php
if(is_user_logged_in()){

}
?>
