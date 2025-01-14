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
                    <h3><?= $judul ?></h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Sosial</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ubah Pengeluaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <br>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ubah Pekeluaran Kas Sosial</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $sosial['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="tgl">Tanggal</label>
                                                <input type="date" id="tgl" name="tgl" class="form-control" value="<?= $sosial['tgl']; ?>">
                                                <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="keluar">Jumlah</label>
                                                <input type="text" id="keluar" name="keluar" class="form-control" value="<?= $sosial['keluar']; ?>">
                                                <?= form_error('keluar', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="uraian">Uraian</label>
                                                <input type="text" id="uraian" name="uraian" class="form-control" value="<?= $sosial['uraian']; ?>">
                                                <?= form_error('uraian', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="gambar">Ubah Bukti</label>
                                                <input type="file" id="gambar" name="gambar" class="form-control custom-file-input" value="<?= $sosial['gambar']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <img src="<?= base_url('assets/img/sosial/keluar/') . $sosial['gambar']; ?>" style="width :150px ;">
                                            </div>
                                        </div>
                                        <input type="hidden" name="jenis" id="jenis" value="Keluar">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" name="tambah" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>