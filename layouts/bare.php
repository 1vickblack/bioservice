<div class="container">
	<?php if ($GLOBALS['path'] == ''){
		phb_insert_module('home_banner');
	}
	// phb_insert_module('breadcrumbs');?>
	<div class="row">
		<div class="col-lg-3 col-md-12 order-last order-lg-first">
			<?phb_insert_module('sidebar');?>
		</div>
		<div class="col-lg-9 col-md-12">
			<?php echo $GLOBALS['article']; ?>
		</div>
	</div>
</div>