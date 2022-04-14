<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Konsumen</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Konsumen</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/konsumen/simpan_konsumen')?>" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
							<label> Nama Lengkap: </label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat  : </label>
							<textarea name="alamat" id="alamat" cols="30" rows="7" class="form-control"></textarea>
						</div>
                        <div class="form-group col-lg-12">
							<label>Kota : </label>
                            <input type="text" name="kota" id="kota" class="form-control">	
						</div>
						<div class="form-group col-lg-12">
							<label>Provinsi  : </label>
							<input type="text" name="provinsi" id="provinsi" class="form-control">	
						</div>
                        <div class="form-group col-lg-12">
							<label>Negara : </label>
                            <input type="text" name="negara" id="negara" class="form-control">	
						</div>
						<div class="form-group col-lg-12">
							<label>No Identitas  : </label>
							<input type="text" name="no_identitas" id="no_identitas" class="form-control">	
						</div>
                        <div class="form-group col-lg-12">
							<label>No Telepon : </label>
                            <input type="text" name="no_telepon" id="no_telepon" class="form-control">	
						</div>
						<div class="form-group col-lg-12">
							<label>Email  : </label>
							<input type="text" name="email" id="email" class="form-control">	
						</div>
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="tambahruang()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function tambahruang(){
							Swal.fire({
							icon: 'success',
							title: 'Kategori Berhasil Ditambah!',
							 showClass: {
								popup: 'animate__animated animate__fadeInDown'
							},
							hideClass: {
								popup: 'animate__animated animate__fadeInDown'
							}
							})
							}
						</script>
				</div>
			</div>
		</div>

	</div>

</div>
	</div>
