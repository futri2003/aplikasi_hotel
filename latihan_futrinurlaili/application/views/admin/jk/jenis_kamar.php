    <!-- Custom styles for this page -->
    <link href="<?= base_url('ass_admin/'); ?>ass/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                    <a href="<?= base_url('index.php/Jenis_kamar/tambah_jk');?>">
                          <button class="btn sm-btn btn-primary"><i class="fa fa-plus"></i> Tambah Jenis kamar</button>
                    </a>
                    <br>
                    <br>
                  </h6>
                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Jenis Kamar</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah Semua Kamar</th>
                                        <th>Jumlah Kamar disewa</th>
                                        <th>Jumlah Kamar tersedia</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; if (!empty($jenisk)) : ?>
                                    <?php foreach ($jenisk as $jk) :
                                    ?>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $jk->nama_jenis_kamar ?></td>
                                        <td><?php echo $jk->keterangan ?></td>
                                        <td><?php echo $jk->jumlah_kamar ?></td>
                                        <td><?php echo $jk->jumlah_kamar_disewa ?></td>
                                        <td><?php echo $jk->jumlah_kamar_tersedia ?></td>
                                        <td><?php echo $jk->harga ?></td>
                                        <td class="text-center"><img src="<?= base_url('gambarjk/').$jk->gambarjk; ?>" alt="" width="50px" height="50px"></td>
                                        <td>
                                        <a href="<?= base_url('index.php/Jenis_kamar/edit_jk/'.$jk->id_jenis);?>" class="bi bi-pen-fill btn-circle"> <i class="fa fa-edit"></i></a> |
                                        <a href="<?= base_url('index.php/Jenis_kamar/hapus_jk/'.$jk->id_jenis);?>" class="bi bi-trash"></a> 
                                        </td>
                                        </tr>
                                        <?php endforeach ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('ass_admin/'); ?>ass/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('ass_admin/'); ?>ass/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('ass_admin/'); ?>ass/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('ass_admin/'); ?>ass/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('ass_admin/'); ?>ass/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('ass_admin/'); ?>ass/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('ass_admin/'); ?>ass/js/demo/datatables-demo.js"></script>

</body>

</html>