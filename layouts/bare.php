<div class="container">
	<?php if ($GLOBALS['path'] == ''): ?>
		<?phb_insert_module('home-banner');?>
		<?phb_insert_module('services');?>
	<?php endif ?>
	<div class="row">
		<div class="col-lg-3 col-md-12 order-last order-lg-first">
			<aside>
				<ul class="menu">
					<li class="nav-item"><a class="main-link-pink" anim="ripple" href="/akcii">Акции</a></li>
					<?php foreach ($GLOBALS['menu_uslugi'] as $key => $value): ?>
						<li class="nav-item">
							<a class="main-link" anim="ripple" href="/<?=$key?>"><?=$value['name']?></a>
							<ul>
							<?php foreach ($GLOBALS['menu_'.$value['file']] as $key2 => $value2): ?>
								<li class="nav-item">
									<a class="second-link" anim="ripple" href="/<?=$key2?>"><?=$value2['name']?></a>
								</li>
							<?php endforeach ?>
							</ul>	
						</li>
					<?php endforeach ?>
					<li class="nav-item">
						<a class="main-link" anim="ripple" href="/">Услуги для квартир и коттеджей</a>
					</li>
					<li class="nav-item">
						<a class="main-link" anim="ripple" href="">Услуги для коммерческих организаций</a>
					</li>
				</ul>
			</aside>
		</div>
		<div class="col-lg-9 col-md-12">
			<?php echo $GLOBALS['article']; ?>
		</div>
	</div>
</div>