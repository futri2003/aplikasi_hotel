  <!-- Portfolio Grid-->
  <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-muted">Room</h2>
                    <h3 class="section-subheading text-muted">Hotel Horison</h3>
                </div>
                <!-- <?php $no = 1; if (!empty($jenisk)) : ?>
                <?php foreach ($jenisk as $jk) :  ?> -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('assets/'); ?>kamar/kamar1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">

                            <form action="">
                            <button class="btn btn-primary btn-block">Pesan Kamar ini </button>
                            </form>
                            
                                <div class="portfolio-caption-heading"><?= $jenisk['nama_jenis_kamar']  ?></div>
                                <div class="portfolio-caption-subheading text-muted">Rp.<?= $jenisk['harga']  ?></div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
                <?php endif; ?>

            </div>

        </section>