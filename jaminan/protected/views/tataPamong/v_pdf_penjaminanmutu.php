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
		font-size: 14px;
		font-weight: bold;
		margin-bottom: 20px;
	}
</style>

<p>
	2.4 Penjaminan Mutu
</p>
<p>Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</p>	
<?php
if(empty($data['penjamin_mutu'])){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	
	<div style="border:0.01pt solid black;padding:5px;margin-bottom:20px;">
	<?=$data['penjamin_mutu']?>
	</div>
<?
}
?>