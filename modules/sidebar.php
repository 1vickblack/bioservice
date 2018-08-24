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
			<a class="main-link" anim="ripple" href="/uslugi-dlya-kvartir-i-kottedzhey">Услуги для квартир и коттеджей</a>
		</li>
		<li class="nav-item">
			<a class="main-link" anim="ripple" href="/uslugi-dlya-kommercheskih-organizaciy">Услуги для коммерческих организаций</a>
		</li>
	</ul>
</aside>