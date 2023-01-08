<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Rekap Kas Sosial</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Sosial</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rekap</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
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
                    <?php foreach ($sosial as $m) :
                        $pemasukan += $m['masuk'];
                        $pengeluaran += $m['keluar'];
                    ?>
                    <?php endforeach; ?>
                    Pemasukan : <?= rupiah($pemasukan) ?><br>
                    Pengeluaran : <?= rupiah($pengeluaran) ?><br>
                    <hr>
                    Total :<?= rupiah($kas = $pemasukan - $pengeluaran) ?>
                </p>
            </div>
        </div>
        <br>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data
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