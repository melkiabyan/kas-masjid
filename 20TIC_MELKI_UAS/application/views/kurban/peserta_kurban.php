<?php
//echo implode(" ", $tPemasukan[0]);
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
$hargahwn = 0;
$hasil = 0;
?>

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
                    <h3>Kurban</h3>
                    <a href="<?= base_url() ?>Kurban/tambah" class="btn btn-primary">Tambah Peserta</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kurban</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Peserta Kurban</li>
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
                    Simple Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>Tahun</th>
                                <th>Kode Kurban</th>
                                <th>Jenis Kurban</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kurban as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['tahun']; ?></td>
                                    <td><?= $us['kode']; ?></td>
                                    <td><?= $us['jenis']; ?></td>
                                    <?php $hargahwn = +$us['hwnharga'] ?>
                                    <td><?= Rupiah($hasil = $hargahwn / 7) ?></td>
                                    <td>
                                        <a href="<?= base_url('Kurban/hapus/') . $us['id']; ?>" class="mdc-button mdc-button--outlined">Hapus</a>
                                        <a href="<?= base_url('Kurban/edit/') . $us['id']; ?>" class="mdc-button mdc-button--outlined">Edit</a>
                                    </td>
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