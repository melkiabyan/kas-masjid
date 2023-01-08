<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
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
        <br>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Rekap Keuangan Kas Masjid Darussalam
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Uraian</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($masjid as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['tgl']; ?></td>
                                    <td><?= $us['uraian'] ?></td>
                                    <td><?= $us['masuk']; ?></td>
                                    <td><?= $us['keluar']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    Rekap Keuangan Kas Sosial Darussalam
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Uraian</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($sosial as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['tgl']; ?></td>
                                    <td><?= $us['uraian'] ?></td>
                                    <td><?= $us['masuk']; ?></td>
                                    <td><?= $us['keluar']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>