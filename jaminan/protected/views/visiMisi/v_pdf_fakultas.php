<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: none;
		font-weight: bold;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.judul2{
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<div class="judul2" style="font-weight:bold;">
	STANDAR 1. VISI, MISI, TUJUAN DAN SARANA, SERTA STRATEGI PENCAPAIAN
</div>
<p>
	1.1 Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian Fakultas/Sekolah Tinggi.
</p>
<p>
	1.1.1 Visi
</p>
<?php
if(empty($data['visi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['visi']?>
</div>
<?php } ?>
<p>
	1.1.2 Misi
</p>
<?php
if(empty($data['misi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['misi']?>
</div>
<?php } ?>
<p>
	1.1.3 Tujuan
</p>
<?php
if(empty($data['tujuan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['tujuan']?>
</div>
<?php } ?>
<p>
	1.1.4 Sasaran dan Strategi Pencapaiannya
</p>
<?php
if(empty($data['sasaran'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	Sasaran : <?=$data['sasaran']?>
	<br>
	Strategi : <?=$data['strategi']?>
</div>
<?php } ?>
<!-- SOSIALISASI -->
<p>
	1.2 Uraikan upaya penyebaran/sosialisasi, serta tingkat pemahaman sivitas akademika (dosen dan mahasiswa) dan 
	tenaga kependidikan tentang visi, misi dan tujuan Fakultas/Sekolah Tinggi.
</p>
<?php
if(empty($data['sosialisasi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sosialisasi']?>
</div>
<?
}
?>