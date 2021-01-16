<?php
/* @var $this AktivitasDosenTetapSetahunController */
/* @var $model AktivitasDosenTetapSetahun */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Setahuns'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AktivitasDosenTetapSetahun', 'url'=>array('index')),
	array('label'=>'Create AktivitasDosenTetapSetahun', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aktivitas-dosen-tetap-setahun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Aktivitas Dosen Tetap Setahuns</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aktivitas-dosen-tetap-setahun-grid',
	'dataProvider'=>$model->search(),
		'itemsCssClass' => 'table table-bordered',
	'filter'=>$model,
	'columns'=>array(
		'id_aktivitas_setahun',
		'id_prodi',
		'id_administrasi',
		'nama_dosen',
		'bidang_keahlian',
		'kode_mk',
		/*
		'nama_mk',
		'jum_kelas',
		'jum_rencana_pertemuan',
		'jum_pertemuan_terlaksana',
		'status_bidang',
		'sumber_data',
		'lampiran',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>