<div class="img-list-services">
	<ul class="menu flex-items">
		<?php foreach ($GLOBALS['menu_uslugi'] as $key => $value): ?>
			<li class="item">
				<a class="img-link" href="/<?=$key?>"><img src="img/uslugi/<?=$value['file']?>.png" alt="<?=$value['name']?>"><span class="title"><?=$value['name']?></span></a>
			</li>
		<?php endforeach ?>
	</ul>
</div>