<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
	}
	table tr th{
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
	}
	table tr td{
		border: thin solid black;
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

<div style="width:25%;margin:auto;">
	<img src="<?=Yii::app()->getBaseUrl(true)?>/images/logo-banpt.jpg" style="margin:auto;width:100%;">
</div>

<p class="judul">
	AKREDITASI PROGRAM STUDI SARJANA 
</p>
<p class="judul" style="margin-top:40%;">
	BUKU III A
</p>
<p class="judul">
	BORANG AKREDITASI
</p>
<p class="judul">
	YANG DIISI OLEH PROGRAM STUDI
</p>
<p class="judul">
	<?=$data['jurusan']?>
</p>
<p class="judul" style="margin-top:45%;">
	DEPATEMEN PENDIDIKAN NASIONAL
</p>
<p class="judul" style="font-weight:bold;">
	BADAN AKREDITASI NASIONAL PERGURUAN TINGGI
</p>
<p class="judul">
	JAKARTA
</p>


<p class="judul2" style="font-weight:bold;" >
	STANDAR 1. VISI, MISI, TUJUAN DAN SARANA, SERTA STRATEGI 
</p>
<p class="judul2" style="padding-left:0px;font-weight:bold;margin-top:-20px">PENCAPAIAN

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
	1.1 Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian
</p>
<p>
	1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak - pihak yang dilibatkan.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	<?=$data['mekanisme']?>
</div>
<p>
	1.1.2 Visi
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	<?=$data['visi']?>
</div>
<p>
	1.1.3 Misi
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	<?=$data['misi']?>
</div>
<p>
	1.1.4 Tujuan
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	<?=$data['tujuan']?>
</div>
<p>
	1.1.5 Sasaran dan Strategi Pencapaiannya
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	Sasaran : <?=$data['sasaran']?>
	<br>
	Strategi : <?=$data['strategi']?>
</div>

<p>
	1.2 Sosialisasi
</p>
<p>
	Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa)
	dan tenaga kependidikan.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:30px;">
	<?=$data['sosialisasi']?>
</div>
<?
}
?>