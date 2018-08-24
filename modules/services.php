<div class="img-list-services preview">
	<ul class="menu flex-items">
		<?php foreach ($GLOBALS['menu_'.$GLOBALS['page']] as $key => $value): ?>
			<li class="item">
				<a class="img-link" href="/<?=$key?>"><img src="img/<?=$GLOBALS['page']?>/<?=$value['file']?>.jpg" alt="<?=$value['name']?>"><span class="title"><?=$value['name']?></span></a>
			</li>
		<?php endforeach ?>
	</ul>
</div>