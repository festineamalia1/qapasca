<?php
/* @var $this KepemimpinanController */
/* @var $data Kepemimpinan */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_kepemimpinan')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id_kepemimpinan), array('view', 'id'=>$data->id_kepemimpinan)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::encode($data->id_prodi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->id_administrasi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kepemimpinan')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->kepemimpinan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

</table>

</div>