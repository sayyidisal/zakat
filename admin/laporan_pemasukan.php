<?php 
include 'head_admin.php';
include 'config/config.php'; 



?>

<style>
	input.pwd {
    width: 35%;
}
</style>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
      dateFormat:'yy-mm-dd',

    });
  } );
  </script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
<section class="content">
<h1>Laporan Pemasukan Zakat</h1>
<hr>
<div class="form-group">
<form action="cetakdatatransaksi.php" method="post" target="blank">
  <label for="pwd">Masukan Tanggal Awal</label>
  <input type="text" class="form-control pwd datepicker" name="dateawal">
  <label for="pwd">Masukan Tanggal Akhir</label>
  <input type="text" class="form-control pwd datepicker" name="dateakhir">
</div>
<input class="btn btn-primary" type="submit" name="lihat" value="Lihat">
</form>

</div>


<!--
        <script src="media/js/jquery.dataTables.min.js"></script>
        <script src="media/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
    			$('#muzakki').DataTable({
    				responsive:true
    			});
			} );
        </script> 

-->
<?php include 'foot_admin.php'; ?>