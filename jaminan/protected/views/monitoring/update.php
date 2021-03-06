<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	$model->id_monitoring=>array('view','id'=>$model->id_monitoring),
	'Update',
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'View Monitoring', 'url'=>array('view', 'id'=>$model->id_monitoring)),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>Update Monitoring <?php echo $model->id_monitoring; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>