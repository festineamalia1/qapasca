<?php
/* @var $this SistemPengelolaanController */
/* @var $data SistemPengelolaan */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_sistem_pengelolaan')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id_sistem_pengelolaan), array('view', 'id'=>$data->id_sistem_pengelolaan)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sistem_pengelolaan')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->sistem_pengelolaan); ?>
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