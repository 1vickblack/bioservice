<h1 class="mb">Цены на уничтожение насекомых и грызунов</h1>

<div class="table-responsive">
<?
	$GLOBALS['prices'] = [
		'type' => 'static',
		'room' => [
			'old' => '1400',
			'new' => '900'
		],
		'1-room-flat' => [
			'old' => '1700',
			'new' => '1000'
		],
		'2-room-flat' => [
			'old' => '2000',
			'new' => '1600'
		],
		'3-room-flat' => [
			'old' => '2300',
			'new' => '1800'
		],
		'4-room-flat' => [
			'old' => '3000',
			'new' => '2000'
		],
		'living-room' => [
			'old' => '+400',
			'new' => '+400'
		]
	];
?>
<?phb_insert_module('prices_table');?>
</div>

<p><b>При обработке коммунальных квартир: 1-я комната 1300 руб, все последующие со скидкой - 20%</b></p>
<p>При выезде за пределы КАД дорога оплачивается дополнительно.</p>
<p>Цены указаны на обработки препаратами 4 класса опасности (малоопасные).</p>
<p>Обработка проводится ежедневно!!!</p>

<h2>Цены на уничтожение насекомых</h2>
<div class="table-responsive">
<?
	$GLOBALS['prices'] = [
		'type' => 'dynamic',
		'thead' => ['Обрабатываемая площадь', 'Уничтожение насекомых с гарантией 1 год (цена)'],
		'tbody' => [
			['до 100 кв.м.', '3100 рублей.'],
			['от 101 до 300 кв.м.', '20 руб.\ кв.м. 17 рублей.'],
			['от 301 до 600 кв.м.', '17 руб.\ кв.м. 10 рублей.'],
			['от 601 до 1000 кв.м.', '10 руб.\ кв.м. 9,4 рублей.'],
			['от 1001 до 2000 кв.м.', '9,4 руб.\ кв.м. 7,6 рублей.'],
			['от 2001 до 4000 кв.м.', '7,6 руб.\ кв.м. 4,0 рублей.'],
			['от 4001 до 6000 кв.м.', '4.0 руб.\ кв.м. 3,8 рублей.'],
			['от 6001 до 10000 кв.м.', '3,8 руб.\ кв.м.']
		]
	];
?>
<?phb_insert_module('prices_table');?>
</div>

<h2>Цены на уничтожение грызунов</h2>

<div class="table-responsive">
<?
	$GLOBALS['prices'] = [
		'type' => 'dynamic',
		'thead' => ['Обрабатываемая площадь', 'Уничтожение насекомых с гарантией 1 год (цена)'],
		'tbody' => [
			['до 50 кв.м.', '2300 рублей'],
			['51 - 100 кв.м.', '2500 рублей'],
			['101 - 300 кв.м.', '3300 рублей'],
			['301 - 500 кв.м.', '12 рублей \ кв.м.'],
			['501 - 1000 кв.м.', '10 рублей \ кв.м.'],
			['более 1000 кв.м.', '9 рублей \ кв. м.']
		]
	];
?>
<?phb_insert_module('prices_table');?>
</div>

<p><b>Заключение договора сроком на 1 год, без предоплаты обработок</b></p>
<p><b>До 100м2 - 5000 руб. 3500 руб.</b></p>