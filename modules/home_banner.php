<div class="top-banner">
	<img src="/img/banner.jpg" alt="">
	<div class="banner-text">
		<div class="green big-text">Непрошенные гости?</div>
		<div class="pink small-text">избавляем от клопов, тараканов, грызунов</div>
	</div>
</div>
<div>
	<h1 class="tac">Санитарная служба «Био&#8209;Сервис»</h1>
	<p class="tac">Хозяйственная деятельность человека ведет к появлению огромного количества бытовых и промышленных отходов. Мусор, в свою очередь, — отличная среда для размножения различных насекомых и грызунов, которые являются разносчиками инфекционных заболеваний, опасных для здоровья и жизни человека и домашних животных. Остроактуальной данная проблема становится для жителей Санкт-Петербурга и других мегаполисов нашей страны. В трудной борьбе с насекомыми и грызунами Вам поможет санитарная служба «Био-Сервис»</p>			
</div>
<div class="img-list-services">
	<ul class="menu flex-items">
		<?php foreach ($GLOBALS['menu_uslugi'] as $key => $value): ?>
			<li class="item">
				<a class="img-link" href="/<?=$key?>"><img src="img/uslugi/<?=$value['file']?>.png" alt="<?=$value['name']?>"><span class="title"><?=$value['name']?></span></a>
			</li>
		<?php endforeach ?>
	</ul>
</div>