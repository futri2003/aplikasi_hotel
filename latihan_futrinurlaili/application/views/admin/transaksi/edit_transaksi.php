<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Transaksi</h1>
    <?php 
        foreach($edit_transaksi as $etr): 
        $id = $etr->id_transaksi;
        endforeach; 
    ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/transaksi/simpan_edit_transaksi')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Tanggal: </label>
							<input type="date" name="tanggal" class="form-control js-single" id="tanggal" value="<?= $etr->tanggal  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Atas Nama: </label>
							<input type="text" name="atas_nama" class="form-control js-single" id="atas_nama" value="<?= $etr->atas_nama  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Waktu Sewa: </label>
							<input type="text" name="waktu_sewa" class="form-control js-single" id="waktu_sewa" value="<?= $etr->waktu_sewa  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No Kamar: </label>
							<input type="text" name="nomor_kamar" class="form-control js-single" id="nomor_kamar" value="<?= $etr->nomor_kamar  ?>">
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Kamar: </label>
							<input type="text" name="jenis_kamar" class="form-control js-single" id="jenis_kamar" value="<?= $etr->jenis_kamar  ?>">
						</div>
                        <div class="form-group col-lg-12">
							<label>Harga Kamar/malam: </label>
							<input type="text" name="harga_kamar" class="form-control js-single" id="harga_kamar" value="<?= $etr->harga_kamar  ?>">
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Pembayaran : </label>
                            <input type="text" name="jenis_pembayaran" class="form-control js-single" id="jenis_pembayaran" value="<?= $etr->jenis_pembayaran  ?>">
								</select>
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
