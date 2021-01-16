<?php
/* @var $this CapaianDosenController */
/* @var $model CapaianDosen */

$this->breadcrumbs=array(
	'Capaian Dosen'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Prestasi Dosen</h1>
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