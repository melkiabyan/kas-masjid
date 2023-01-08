<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="row">
        <div class="alert alert-primary">
            <h4 class="alert-heading">Total Pengeluaran Keuangan Masjid</h4>
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
                <?php foreach ($getMasjid as $m) :
                    $pemasukan += $m['masuk'];
                    $pengeluaran += $m['keluar'];
                ?>
                <?php endforeach; ?>
                <?= rupiah($pengeluaran) ?>
            </p>
        </div>
    </div>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pengeluaran Kas Masjid</h3>
                    <a href="<?= base_url() ?>Masjid/tambah_pengeluaran" class="btn btn-primary">Tambah Pengeluaran</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Masjid</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengeluaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <br>
        <?= $this->session->flashdata('message'); ?>
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
                                <th>Jumlah</th>
                                <th>Bukti</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($masjid as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us->tgl; ?></td>
                                    <td><?= $us->uraian; ?></td>
                                    <td><?= $us->keluar; ?></td>
                                    <td><img src="<?= base_url('assets/img/masjid/keluar/') . $us->gambar; ?>" style="width : 100px;" class="img-thumbnail"></td>
                                    <td>
                                        <a href="<?= base_url('Masjid/hapus/') . $us->id; ?>" class="mdc-button mdc-button--outlined">Hapus</a>
                                        <a href="<?= base_url('Masjid/edit_pengeluaran/') . $us->id; ?>" class="mdc-button mdc-button--outlined">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>