<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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

<?
if ($id_prodi==1) {
?>
	<p>6.2 Sarana</p>
	<p>
		6.2.1 Uraikan penilaian Fakultas/Sekolah Tinggi tentang sarana untuk menjamin penyelenggaraan program Tridarma PT 
		yang bermutu tinggi. Uraian ini mencakup aspek: kecukupan/ketersediaan/akses dan kewajaran serta rencana pengembangan dalam lima tahun mendatang. 
		Uraikan kendala yang dihadapi dalam penambahan sarana .
	</p>
	<?php
	if((empty($F_sarana)) ){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<p style="border:1px solid black;padding:5px;">
		<? 
		foreach ($F_sarana as $key => $value) {
		?>
			<?=$value['uraian_sarana']?>
		<?
			}
		?>


	</p>
	<?php } ?>
	<br>
	<p>
		6.2.2  Tuliskan sarana tambahan untuk meningkatkan mutu penyelenggarakan program Tridarma PT pada semua  program studi yang dikelola dalam tiga tahun terakhir. 
		Uraikan pula  rencana investasi untuk sarana dalam lima tahun mendatang, dengan mengikuti format tabel berikut :
	</p>
	<?php
	if((empty($F_tambahan))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Jenis Sarana Tambahan</th>
				<th rowspan="2">Investasi Sarana Selama Tiga Tahun Terkahir (Juta Rp)</th>
				<th rowspan="1" colspan="2">Rencana Investasi Sarana dalam Lima Tahun Mendatang</th>
			</tr>
			<tr>
				<th colspan="1">Nilai Investasi (Juta Rp)</th>
				<th colspan="1">Sumber Dana</th>
			</tr>
		</thead>
		<tbody>
			<?
				$i=0;
			foreach ($F_tambahan as $key => $value) {
				$i++;
				?>
				<tr>
					<td><?=$i?></td>
					<td><?=$value['jenis_sarana']?></td>
					<td><?=$value['investasi_sarana']?></td>
					<td><?=$value['rencana_investasi']?></td>
					<td><?=$value['sumber_dana']?></td>
				</tr>
				<?
			}
			?>
		</tbody> 
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFsarana/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
} else {
?>

	<p>6.4 Sarana Pelaksanaan Kegiatan Akademik</p>
	<p>
		6.4.1 Pustaka (buku teks, karya ilmiah dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)<br>
		Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel berikut :
	</p>
	<br>
	<p>
		Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS
	</p>
	<?php
	if((empty($pustaka))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th>Jenis Pustaka</th>
				<th>Jumlah Judul</th>
				<th>Jumlah Copy</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
			</tr>
		</thead>
		<tbody>
			<?
			foreach ($pustaka as $key => $value) {
				?>
				<tr>
					<td><?php
						if($value['jenis_pustaka'] == 'buku teks'){
							echo "Buku Teks";
						}else if($value['jenis_pustaka'] == 'jurnal nas'){
							echo "Jurnal Nasional";
						}else if($value['jenis_pustaka'] == 'jurnal inter'){
							echo "Jurnal Internasional";
						}else if($value['jenis_pustaka'] == 'prosiding'){
							echo "Prosiding";
						}else if($value['jenis_pustaka'] == 'skripsi'){
							echo "Skripsi";
						}else if($value['jenis_pustaka'] == 'thesis'){
							echo "Thesis";
						}else if($value['jenis_pustaka'] == 'disertasi'){
							echo "Disertasi";
						}
						?></td>
					<td style="text-align:center;"><?=$value['jml_judul']?></td>
					<td style="text-align:center;"><?=$value['jml_copy']?></td>
				</tr>
				<?
			}
			?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<p>
		Isikan jurnal/ prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir dengan mengikuti format tabel berikut :
	</p>
	<p>
		Tabel 2. Jurnal yang tersedia /yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir
	</p>
	<?php
	if( (empty($jurnal)) ){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th>Jenis</th>
				<th>Nama Jurnal</th>
				<th>Rincian Tahun dan Nomor</th>
				<th>Jumlah</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
			</tr>
		</thead>
		<tbody>
			<?
			$i = 0;
			$rowspan = sizeof($jurnal['dikti']);
			if(!empty($jurnal['dikti'])){
				foreach ($jurnal['dikti'] as $key => $value) {
					$i++;
					echo "<tr>";
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">Jurnal Terakreditasi DIKTI*</td>
						<?
					}
					?>
						<td><?=$i?>. <?=$value['nama_jurnal']?></td>
						<td style="text-align:center;"><?=$value['th_no_terbit']?></td>
						<td style="text-align:center;"><?=$value['jumlah']?></td>
					</tr>
					<?
				}
			}
			?>
			<?
			$i = 0;
			if(!empty($jurnal['internasional'])){
				$rowspan = sizeof($jurnal['internasional']);
				foreach ($jurnal['internasional'] as $key => $value) {
					$i++;
					echo "<tr>";
					if($i == 1){
						?>
						<td rowspan="<?=$rowspan?>">Jurnal Internasional*</td>
						<?
					}
					?>
						<td><?=$i?>. <?=$value['nama_jurnal']?></td>
						<td style="text-align:center;"><?=$value['th_no_terbit']?></td>
						<td style="text-align:center;"><?=$value['jumlah']?></td>
					</tr>
					<?
				}
			}
			
			?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		Catatan * = termasuk e-journal
	</p>
	<?php } ?>
	<p>
		6.4.2 Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta alamat website) yang
		biasa dimanfaatkan oleh dosen dan mahasiswa program studi ini.
	</p>
	<?php
	if( (empty($sumber)) ){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<p style="border:1px solid black;padding:5px;">
		<?
		$i = 0;
		foreach ($sumber as $key => $value) {
			$i++;
			?>
			<?=$i?>. <?=$value['judul_pustaka']?>, penerbit : <?=$value['penerbit_sumber']?>, website : <?=$value['website_sumber']?><br>
			<?
		}
		?>
	</p>
	<?php } ?>
	<br>
	<p>
		6.4.3 Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/ balai kesehatan,
		<i>green house</i>, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan / fakultas dengan mengikuti format tabel berikut :
	</p>
	<?php
	if( (empty($peralatan)) ){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Nama Laboratorium</th>
				<th rowspan="2">Jenis Peralatan Utama</th>
				<th rowspan="2">Jumlah Unit</th>
				<th rowspan="1" colspan="2">Kepemilikan</th>
				<th rowspan="1" colspan="2">Kondisi</th>
				<th rowspan="2">Rata-rata waktu penggunaan (jam/minggu)</th>
			</tr>
			<tr>
				<th colspan="1">SD</th>
				<th colspan="1">SW</th>
				<th colspan="1">Terawat</th>
				<th colspan="1">Tidak Terawat</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
				<th>(5)</th>
				<th>(6)</th>
				<th>(7)</th>
				<th>(8)</th>
				<th>(9)</th>
			</tr>
		</thead>
		<tbody>		
			<?
			$i = 0;
			foreach ($peralatan as $key => $value) {
				$i++;
				?>
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td><?=$value['nama_lab']?></td>
					<td><?=$value['jenis_peralatan']?></td>
					<td style="text-align:center;"><?=$value['jml_unit']?></td>
					<td style="text-align:center;"><?=(($value['kepemilikan'])=='sendiri' ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-')?></td>
					<td style="text-align:center;"><?=(($value['kepemilikan'])=='sewa' ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-')?></td>
					<td style="text-align:center;"><?=(($value['kondisi'])=='terawat' ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-')?></td>
					<td style="text-align:center;"><?=(($value['kondisi'])=='tidak' ? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">' : '-')?></td>
					<td style="text-align:center;"><?=$value['rata2_wkt_guna']?></td>
				</tr>
				<?
			}
			?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		Keterangan :<br>
		SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama/Hak Pakai.
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFsarana/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

<?
}
?>