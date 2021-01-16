<style type="text/css">
	/*table{
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
	}*/
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>
	2.3 Sistem Pengelolaan
</p>
<p style="padding-left:25px">
	Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan  internal maupun eksternal.
	<br><br>
	Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.

</p>
<?php
if(empty($data['sistem_pengelolaan'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_pengelolaan']?>
</div>
<?
}
?>