<?php
$this->breadcrumbs=array(
	'Pembimbingan Tugas Akhir / Skripsi',
);
?>

<?php
	// $model=new VisiMisi;
?>
<h1>Pembimbingan Tugas Akhir / Skripsi</h1>
<div class="row-fluid">
	<div class="span12" style="padding:20px;">
		<form class="form-inline" method="post" id="form_pembimbingan">
		   <label class="control-label" for="">Jurusan</label>
		      <select class="input-large" name="id_prodi">
				 <?
				 foreach ($prodi as $key => $value) {
				 	?>
				 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
				 	<?
				 }
				 ?>
			</select>
		    
		    <label class="control-label" for="">Tahun</label>
		      <select class="input-small" name="id_administrasi" id="tahun">
		      	<?
		      	foreach ($administrasi as $key => $value) {
		      		?>
		      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
		      		<?
		      	}
		      	?>
		      </select>
		    
		    <button type="button" class="btn btn-primary getdata_pembimbingan"><i class="icon-arrow-right icon-white"></i>Tampil</button>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="progress progress-striped active hide" >
			  <div class="bar" style="width:0%;"></div>
			</div>
		<div id="data" class="data">	
			
		</div>
	</div>
</div>


<style type="text/css">
	.span-19{
		width: 100% !important;
	}
	.data{
		min-height: 300px;
		/*background: #000;*/
		/*opacity: 0.7;*/
	}
	.content-field{
		min-height: 550px !important;
	}
</style>

<script type="text/javascript">
$(function(){
  $(".getdata_pembimbingan").click(function()
  	{
  		var dataserialized = $('#form_pembimbingan').serialize();
  		$("#data").hide();
  		$.ajax({
  			type: 'POST',
  			url:"sentdataTA",
  			data: dataserialized,
		   	beforeSend:function(){

		    $('.bar').attr('style','width:20%;');
	  		$(".progress").fadeIn();
	  		for (var i = 0; i <= 99; i++) {
		      	setTimeout(function(){
		        	$('.bar').attr('style','width:'+i+'%;');
		      	}, 800);
		  	};
		   },
		   success:function(result){
		    	$('.bar').attr('style','width:100%;');
		    	$(".progress").fadeOut(setTimeout(function(){
		    		$("#data").html(result);
		    		$("#data").fadeIn(1000);
		    	},1000));
		   }
		});

    return false;
  });

  $(".getdata_pembimbingan").trigger('click');

});
 
</script>
