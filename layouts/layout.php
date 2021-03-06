<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php phb_insert_meta_tags(); ?>
		<?php phb_insert_css('bootstrap.min'); ?>
		<?php phb_insert_css('bootstrap-grid.min'); ?>
		<?php phb_insert_css('jquery.fancybox.min'); ?>
		<?php phb_insert_css('main'); ?>
	</head>
	<body<?php phb_add_body_class(); ?>>
		
		<header>
			<div class="top">
				<div class="flex-items container">
					<span class="italic">Дезинфекция, дезинсекция, дератизация, продажа дезсредств</span>
					<span class="soc-icons">
						<a href="" target="_blank"><i class="fab fa-vk"></i></a>
						<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="" target="_blank"><i class="fab fa-google"></i></a>
						<a href="" target="_blank"><i class="fab fa-whatsapp"></i></a>
					</span>
					<span><a href="mailto:bioservice.spb@yandex.ru"><i class="fas fa-envelope"></i> bioservice.spb@yandex.ru</a></span>
				</div>
			</div>
			<div class="bot flex-items container">
				<div class="item logo">
					<?php if ($GLOBALS['path'] == ''): ?>
						<img src="/img/logo.png" alt="">
					<?php else:?>
						<a href="/"><img src="/img/logo.png" alt=""></a>
					<?php endif ?>
				</div>
				<div class="item main-menu">
					<nav class="navbar navbar-expand-lg navbar-light">
						<span class="navbar-text">Меню</span>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="menu">
								<?php foreach ($GLOBALS['menu_main'] as $key => $value): ?>
									<li class="nav-item">
										<a anim="ripple" href="/<?=$key?>"><?=$value['name']?></a>
									</li>
								<?php endforeach ?>
							</ul>
						</div>
					</nav>
				</div>
				<div class="item bg-img callback">
					<div>
						<div class="big-phone pink">
							<a href="tel:8129822417">(812)&nbsp;982-24-17</a>
						</div>
						<div class="small-text">c 9.00 до 20.00 без обеда и выходных</div>
					</div>
					<div>
						<button data-fancybox data-src="#callbackModal" class="white-btn" anim="ripple">Заказать&nbsp;звонок</button>
					</div>
				</div>
			</div>
		</header>
		
		<?php phb_insert_page_content(); ?>

		<footer>
			<div class="top">
				<div class="container">
					<div class="flex-items">
						<div class="item logo">
							<img src="/img/logo.png" alt="" class="logo">
						</div>
						<div class="item">
							<div class="big-phone green">
								<a href="tel:8129822417">(812)&nbsp;982-24-17</a>
							</div>
							<div class="small-text">c 9.00 до 20.00 без обеда и выходных</div>
						</div>
					</div>
					<nav class="navbar navbar-expand-lg">
						<ul class="menu">
							<?php foreach ($GLOBALS['menu_futer'] as $key => $value): ?>
								<li class="nav-item">
									<a href="/<?=$key?>"><?=$value['name']?></a>
								</li>
							<?php endforeach ?>
						</ul>
					</nav>
				</div>
			</div>
			<div class="bot container flex-items">
				<span>&copy; 2018 «Bioservice.spb.ru»</span>
				<span><a href="/karta-sajta" class="green">Карта сайта</a></span>
				<span>Разработка и продвижение сайтов <a href="" class="green">Smart-Design.pro</a></span>
			</div>
		</footer>

	<div style="display: none;" class="callback-modal" id="callbackModal">
		<div class="h2 mb">Заказать звонок</div>
		<form action="">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Имя*">
			</div>
			<div class="form-group mb">
				<input type="tel" class="form-control" placeholder="Телефон*">
			</div>
			<div class="form-group mb">
			    <div class="form-check">
			      <input class="form-check-input" checked type="checkbox" id="konf">
			      <label class="form-check-label" for="konf">Я согласен на обработку и хранение моих персональных данных в соответствии с <a class="pink" href="/politika-konfidencialnosti" target="_blank">политикой конфиденциальности</a></label>
			    </div>
			</div>
			<div>
				<button class="pink-btn" anim="ripple">Заказать&nbsp;звонок</button>
			</div>
		</form>
	</div>

	<div id="totop" title="Наверх"><img src="/img/to_top.png" alt=""></div>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
	<? phb_insert_js('jquery-3.3.1.min'); ?>
	<? phb_insert_js('bootstrap.min'); ?>
	<? phb_insert_js('jquery.fancybox.min'); ?>
	<? phb_insert_js('main'); ?>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>

