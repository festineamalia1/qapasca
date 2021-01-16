<?php
/* @var $this MekanismePeninjauanKurikulumController */
/* @var $model MekanismePeninjauanKurikulum */

$this->breadcrumbs=array(
	'Mekanisme Peninjauan Kurikulum'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data Data', 'url'=>array('index')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Mekanisme Peninjauan Kurikulum</h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>
