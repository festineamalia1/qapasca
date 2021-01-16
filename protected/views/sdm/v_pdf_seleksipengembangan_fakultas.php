<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
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
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
</style>


<p class="judul" style="font-weight:bold;">
	STANDAR 4. SUMBER DAYA MANUSIA
</p>

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>4.1 Sistem Seleksi dan Pengembangan</p>
<p>
	Sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu
penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).
</p>


<div style="border:1px solid black;padding:5px;">
		Sistem  seleksi/perekrutan,  penempatan,  pengembangan,  retensi,  dan  pemberhentian  dosen  dan  tenaga  kependidikan  untuk  menjamin mutu
	penyelenggaraan program akademik terdapat pada Statuta Universitas <br>
	<b>A. Tenaga Pendidik (Dosen)</b><br>
	<?=$data['rekrut_seleksi']?><br>
	<?=$data['penempatan']?><br>
	Pengembangan Dosen<br>
	<?=$data['pengembangan']?><br>
	<?=$data['retensi']?><br>
	<?=$data['berhenti_dosen']?><br>
	<b>B. Tenaga Kependidikan</b><br>
	Secara  umum  tenaga  kependidikan  terdiri  dari  dua  tingkat  yaitu  bagian  administrasi/tata  usaha  termasuk  pustakawan,  laboran  dan  teknisi  serta
	bagian pembantu pelaksana meliputi tenaga kebersihan, satpam dan supir. 
	<?=$data['rekrut_seleksi']?><br>
	<?=$data['penempatan']?><br>
	<?=$data['pengembangan']?><br>
	<?=$data['retensi']?><br>
	<?=$data['berhenti_dosen']?><br>
</div>
<?
}
?>