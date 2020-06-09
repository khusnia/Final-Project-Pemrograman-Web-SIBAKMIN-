<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<title>Insert data</title>
<div class="container">
<br>  <p class="text-center" style="color: red;">Isi data dengan teliti agar tidak terjadi kesalahan</p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="../cetak/cetak.php" class="float-right btn btn-outline-primary mt-1">Cetak</a>
	<h4 class="card-title mt-2">Input Prestasi Mahasiswa</h4>
</header>
<article class="card-body">
<form method="post" action="simpan_prestasi.php">
	<div class="form-row">
		<div class="col form-group">
			<label>Nama Lengkap </label>   
		  	<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
		</div> 
		<div class="col form-group">
			<label>Angkatan</label>
		  	<input type="text" class="form-control" placeholder="contoh : 2018 " name="angkatan">
		</div>
	</div> 
	<div class="form-row">
	<div class="form-group col-md-6">
		<label>Jenis Prestasi</label>
		<input type="text" class="form-control" placeholder="Akademik/Non akademik" name="jenis">
		<small class="form-text text-muted">Sebutkan Salah satu</small>
	</div>
	</div>
		<div class="form-group">
		  <label>Nama Perlombaan</label>
		  <input type="text" class="form-control" placeholder="Nama Kejuaraan" name="lomba">
	</div> 
	<div class="form-group">
		<label>Prestasi</label>
	    <input class="form-control" type="text" placeholder="Contoh : Juara 1 Catur" name="prestasi">
	</div>  
	<div class="form-group">
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </div>     
    <small class="text-muted" >*Pastikan Semua Data Diisi Dengan Benar</small>                                          
</form>
</article> 
</div> 
</div> 

</div> <!-- row.//-->


</div> 
<!--container end.//-->
