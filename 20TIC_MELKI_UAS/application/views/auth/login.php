<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="logo">
                    <a href="<?= base_url('assets_admin/') ?>index.html"><img style="width:400px; height: 200px;" src="<?= base_url('assets_admin/') ?>assets/images/logo/mylogo.png" srcset=""></a>
                </div>
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Log in to Kas Masjid <strong>Darussalam</strong>.</p>

                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" value="<?= set_value('password'); ?>" name="password" id="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <!-- <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="<?= base_url('auth/registrasi') ?>" class="font-bold">Sign
                            up</a>.</p>
                    <p><a class="font-bold" href="<?= base_url('auth/changepassword') ?>">Forgot password?</a>.</p>
                </div>
            </div>
        </div>