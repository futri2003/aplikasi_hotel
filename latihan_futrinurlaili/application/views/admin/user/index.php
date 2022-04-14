<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
                    <a href="<?= base_url('index.php/user/tambah_user');?>">
                          <button class="btn sm-btn btn-primary"><i class="fa fa-plus"></i> Tambah User </button>
                    </a>
                  </h6>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Hak Akses</th>
                    <th>Aksi</th>
                </thead>             
                <tbody>
                    <?php $no = 1; if (!empty($user)) : ?>
                  <?php foreach ($user as $us) :
                      
                  ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $us->nama_lengkap ?></td>
                      <td><?php echo $us->email ?></td>
                      <td><?php echo $us->no_hp ?></td>
                      <td><?php echo $us->hak_akses ?></td>
                      <td>
                      <a href="<?= base_url('index.php/user/edit_user/'.$us->id_user);?>" class="bi bi-pen-fill btn-circle"> <i class="fa fa-edit"></i></a> 
                      <br>
                      <a href="" class="bi bi-info btn-circle"> 
                      <br>
                      <a href="<?= base_url('index.php/user/hapus_user/'.$us->id_user);?>" class="bi bi-trash"></a> 
                  </tr>
                  <?php endforeach ?>
                  <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>



<div class="modal fade" id="modalDelete">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
          <div class="modal-body">
            <div class="alert alert-danger"><p>Apakah anda yakin akan menghapus data ini?</p></div>   
          </div>
        <div class="modal-footer">
        <form id="formDelete" action="" method="post">
            <button type="submit" class="btn btn-danger" onclick="hapusbarang()">Hapus</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        </form>
      </div>
    </div>
</div>
</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
                  />
                  <script>
                      function hapusbarang(){
                      Swal.fire({
                      icon: 'success',
                      title: 'Barang Berhasil Dihapus!',
                       showClass: {
                          popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                          popup: 'animate__animated animate__fadeInDown'
                      }
                      })
                      }
                  </script>


                    