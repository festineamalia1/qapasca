<style type="text/css">
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
	2.4 Sistem Pengelolaan
</p>
<p style="padding-left:25px">
	Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal.
	<br><br>
	Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta keterdiaan Renstra dan Renop.

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