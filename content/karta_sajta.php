<div class="h1">Карта сайта</div>
<ul>
	<?php foreach ($GLOBALS['menu'] as $key => $value): ?>
		<li><a href="/<?=$key?>"><?=$value['name']?></a></li>
	<?php endforeach ?>
</ul>