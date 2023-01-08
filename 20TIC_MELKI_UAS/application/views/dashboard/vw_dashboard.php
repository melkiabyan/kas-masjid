<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Hello , <?= $user['nama']; ?></h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">

                <!-- <div class="col-md">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="" class="card-img">
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Hello , <?= $user['nama']; ?></h6>
                                        <h6 class="font-extrabold mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="alert alert-primary">
                        <h4 class="alert-heading">Total Kas Keuangan Masjid</h4>
                        <p>
                            <?php
                            //echo implode(" ", $tPemasukan[0]);
                            function rupiah($angka)
                            {
                                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                return $hasil_rupiah;
                            }
                            $pemasukan = 0;
                            $pengeluaran = 0;
                            $kas = 0;
                            ?>
                            <?php foreach ($masjid as $m) :
                                $pemasukan += $m['masuk'];
                                $pengeluaran += $m['keluar'];
                            ?>
                            <?php endforeach; ?>
                            <hr>
                            <?= rupiah($kas = $pemasukan - $pengeluaran) ?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="alert alert-primary">
                        <h4 class="alert-heading">Total Kas Keuangan Sosial</h4>
                        <p>
                            <?php
                            //echo implode(" ", $tPemasukan[0]);
                            $pemasukan = 0;
                            $pengeluaran = 0;
                            $kas = 0;
                            ?>
                            <?php foreach ($sosial as $m) :
                                $pemasukan += $m['masuk'];
                                $pengeluaran += $m['keluar'];
                            ?>
                            <?php endforeach; ?>
                            <hr>
                            <?= rupiah($kas = $pemasukan - $pengeluaran) ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>