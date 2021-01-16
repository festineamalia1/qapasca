<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>


<p>5.7 Upaya Peningkatan Suasana Akademik</p>
<p>Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut :</p>
<p>5.7.1 Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik)</p>
<?php
if(empty($data['kebijakan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['kebijakan']?>
</div>
<?php } ?>
<p>5.7.2 Ketersediaan dan jenis prasarana, sarana dan dana yang meungkinkan terciptanya interaksi akademik antara sivitas akademika.</p>
<?php
if(empty($data['sarana_dana'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['sarana_dana']?>
</div>
<?php } ?>

<p>5.7.3 Program dan kegiatan di dalam dan luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas, untuk menciptakan suasana akademik yang kondusif
(misal seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus dan temu dosen-mahasiswa-alumni).
</p>
<?php
if(empty($data['kegiatan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['kegiatan']?>
</div>
<?php } ?>
<p>5.7.4 Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</p>
<?php
if(empty($data['interaksi'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['interaksi']?>
</div>
<?php } ?>

<p>5.7.5 Pengembangan perilaku kecendikiawanan</p>
<?php
if(empty($data['pengembangan_perilaku'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:1px solid black;padding:5px;">
	<?=$data['pengembangan_perilaku']?>
</div>

<?
}
?>