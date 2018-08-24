<?$p = $GLOBALS['prices'];?>

<?
	switch ($p['type']) {
		case 'static':

?>
  <table class="table hide-on-mobile">
    <thead>
        <tr>
          <th class="title">Количество комнат</th>
          <th class="title">Cтарая цена</th>
          <th class="title">Новая цена</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1 комната</td>
          <td class="old"><?=$p['room']['old']?>&nbsp;руб</td>
          <td class="new">от&nbsp;<?=$p['room']['new']?>&nbsp;руб</td>
          <td>+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
        </tr>
        <tr>
          <td>1-комнатная квартира</td>
          <td class="old"><?=$p['1-room-flat']['old']?>&nbsp;руб</td>
          <td class="new">от&nbsp;<?=$p['1-room-flat']['new']?>&nbsp;руб</td>
          <td>+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
        </tr>
        <tr>
          <td>2х-комнатная квартира</td>
          <td class="old"><?=$p['2-room-flat']['old']?>&nbsp;руб</td>
          <td class="new">от&nbsp;<?=$p['2-room-flat']['new']?>&nbsp;руб</td>
          <td>+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
        </tr>
        <tr>
          <td>3х-комнатная квартира</td>
          <td class="old"><?=$p['3-room-flat']['old']?>&nbsp;руб</td>
          <td class="new">от&nbsp;<?=$p['3-room-flat']['new']?>&nbsp;руб</td>
          <td>+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
        </tr>
        <tr>
          <td>4х-комнатная квартира</td>
          <td class="old"><?=$p['4-room-flat']['old']?>&nbsp;руб</td>
          <td class="new">от&nbsp;<?=$p['4-room-flat']['new']?>&nbsp;руб</td>
          <td>+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
        </tr>
        <tr>
          <td>+ жилая комната</td>
          <td><?=$p['living-room']['old']?>&nbsp;руб</td>
          <td><?=$p['living-room']['new']?>&nbsp;руб</td>
          <td></td>
        </tr>
      </tbody>
  </table>

  <table class="table hide-on-desktop">
	<tbody>
		<tr>
			<td class="title">Количество комнат</td>
			<td>1 комната</td>
		</tr>
		<tr>
			<td class="title">Cтарая цена</td>
			<td class="old"><?=$p['room']['old']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td class="title">Новая цена</td>
			<td class="new">от&nbsp;<?=$p['room']['new']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td colspan="2" class="tac">+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
		</tr>
		
		<tr>
			<td class="title">Количество комнат</td>
			<td>1-комнатная квартира</td>
		</tr>
		<tr>
			<td class="title">Cтарая цена</td>
			<td class="old"><?=$p['1-room-flat']['old']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td class="title">Новая цена</td>
			<td class="new">от&nbsp;<?=$p['1-room-flat']['new']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td colspan="2" class="tac">+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
		</tr>
		
		<tr>
			<td class="title">Количество комнат</td>
			<td>2х-комнатная квартира</td>
		</tr>
		<tr>
			<td class="title">Cтарая цена</td>
			<td class="old"><?=$p['2-room-flat']['old']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td class="title">Новая цена</td>
			<td class="new">от&nbsp;<?=$p['2-room-flat']['new']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td colspan="2" class="tac">+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
		</tr>
		
		<tr>
			<td class="title">Количество комнат</td>
			<td>3х-комнатная квартира</td>
		</tr>
		<tr>
			<td class="title">Cтарая цена</td>
			<td class="old"><?=$p['3-room-flat']['old']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td class="title">Новая цена</td>
			<td class="new">от&nbsp;<?=$p['3-room-flat']['new']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td colspan="2" class="tac">+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
		</tr>
		
		<tr>
			<td class="title">Количество комнат</td>
			<td>4х-комнатная квартира</td>
		</tr>
		<tr>
			<td class="title">Cтарая цена</td>
			<td class="old"><?=$p['4-room-flat']['old']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td class="title">Новая цена</td>
			<td class="new">от&nbsp;<?=$p['4-room-flat']['new']?>&nbsp;руб</td>
		</tr>
		<tr>
			<td colspan="2" class="tac">+ барьер в подарок (гарантия&nbsp;2&nbsp;года)</td>
		</tr>
		
		<tr>
			<td class="title">+ жилая комната</td>
			<td><?=$p['living-room']['new']?>&nbsp;руб</td>
		</tr>

	</tbody>
  </table>
<?
		break;
		case 'dynamic':
?>

<table class="table hide-on-mobile">
  	<thead>
      <tr>
        <?php foreach ($p['thead'] as $key => $value): ?>
        	<th class="title"><?=$value?></th>
        <?php endforeach ?>
      </tr>
    </thead>
    <tbody>
		<?php foreach ($p['tbody'] as $key => $value): ?>
			<tr>
				<?php foreach ($p['tbody'][$key] as $key2 => $value2): ?>
					<td><?=$value2?></td>
				<?php endforeach ?>
			</tr>
		<?php endforeach ?>
    </tbody>
</table>
<table class="table hide-on-desktop">

	<?php foreach ($p['tbody'] as $key => $value): ?>
		
		<?php foreach ($p['thead'] as $key2 => $value2): ?>
			<tr>
				<td class="title"><?=$value2?></td>
				<td><?=array_shift($p['tbody'][$key])?></td>
				
			</tr>
		<?php endforeach ?>
	
   	<?php endforeach ?>

</table>

<?
		break;
	}
?>

 
