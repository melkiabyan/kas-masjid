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
                    <h3>Tambah Peserta</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kurban</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Hewan</li>
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
                            <h4 class="card-title">Tambah Peserta Kurban</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="first-name-column">Kode Kurban</label>
                                                <input type="text" id="first-name-column" class="form-control" name="kode">
                                                <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-column">Jenis Kurban</label>
                                                <input type="text" id="first-name-column" class="form-control" name="jenis">
                                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-column">Harga</label>
                                                <input type="number" id="first-name-column" class="form-control" name="harga">
                                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="tambah">Submit</button>
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