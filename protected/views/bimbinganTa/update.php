<?php
/* @var $this BimbinganTaController */
/* @var $model BimbinganTa */

$this->breadcrumbs=array(
	'Bimbingan TA'=>array('index'),
	$model->id_bimbingan_TA=>array('view','id'=>$model->id_bimbingan_TA),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_bimbingan_TA)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Bimbingan TA/SKRIPSI <?php echo $model->id_bimbingan_TA; ?></h1>
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
