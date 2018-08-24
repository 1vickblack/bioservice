<p class="mb">Мы предлагаем услуги дератизации (уничтожение крыс и мышей) и дезинсекции (выведение муравьев, клопов, тараканов и других насекомых) в СПб и Ленинградской области. Кроме того, осуществляем оптово-розничную продажу препаратов для избавления от вредителей.</p>


<div class="table-responsive mb">
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


<section class="advantages">
	<h2>Преимущества сотрудничества с ООО «Био&#8209;Сервис»</h2>
	<div class="advantages-wrap row mb">
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/01.svg" alt="">
				<p class="col-12 col-sm-7">Проводить обработку будет хорошо 
				подготовленный опытный специалист.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/04.svg" alt="">
				<p class="col-12 col-sm-7">Гарантия на все услуги 12 месяцев.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/02.svg" alt="">
				<p class="col-12 col-sm-7">Используются разные виды обработок (
				влажная, холодный и горячий туман, дымовые шашки и т.д.).</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/05.svg" alt="">
				<p class="col-12 col-sm-7">Дезинсекция будет проведена конфиденциально.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/03.svg" alt="">
				<p class="col-12 col-sm-7">В квартире будет использоваться только 
				безопасные препараты.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row align-items-center item">
				<img class="col-12 col-sm-4" src="/img/svg_home_icons/06.svg" alt="">
				<p class="col-12 col-sm-7">Лучшие цены в СПБ и Лен. области.</p>
			</div>
		</div>
	</div>
	<p class="mb">Дератизация и дезинсекция — довольно сложная работа, которая по силам исключительно профессионалам. Наши специалисты имеют огромный опыт работы и отлично знакомы с поведением грызунов и насекомых. Проводим дезинсекцию/дератизацию не только в помещениях, но и в подвалах, канализационных и водопроводных коллекторах и других местах по заказу граждан и юридических лиц, оперативно реагируя на любой вызов. В своей работе используем только лучшие спреи, смеси и порошки российского и зарубежного производства, молниеносно и эффективно действующие на грызунов и насекомых и не вызывающие привыкания. В то же время они абсолютно безвредны для человека, а также собак, кошек и других домашних животных. Цена на услуги и на аппараты из ассортимента — абсолютно доступная.</p>
</section>


<div class="small-application-form mb">
	<div class="h2">Оставить заявку на услугу</div>
	<form action="">
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" placeholder="Имя*">
			</div>
			<div class="form-group col-md-4">
				<input type="tel" class="form-control" placeholder="Телефон*">
			</div>
			<div class="form-group col-md-4">
				<select class="form-control">
					<option selected style="display: none">Вид услуги</option>
					<?php foreach ($GLOBALS['menu_uslugi'] as $key => $value): ?>
						<option value="<?=$value['name']?>"><?=$value['name']?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="bot">
			<div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" checked type="checkbox" id="konf">
			      <label class="form-check-label" for="konf">Я согласен на обработку и хранение моих персональных данных в соответствии с <a class="pink" href="/politika-konfidencialnosti" target="_blank">политикой конфиденциальности</a></label>
			    </div>
			</div>
			<div>
				<button class="pink-btn" anim="ripple">Отправить&nbsp;заявку</button>
			</div>
		</div>
	</form>
</div>