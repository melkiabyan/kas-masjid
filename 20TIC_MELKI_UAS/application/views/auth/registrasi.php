<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="logo">
                    <a href="<?= base_url('assets_admin/') ?>index.html"><img style="width:400px; height: 200px;" src="<?= base_url('assets_admin/') ?>assets/images/logo/mylogo.png" srcset=""></a>
                </div>
                <h1 class="auth-title">Sign Up</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                <form method="POST" action="<?= base_url('auth/registrasi'); ?>">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" id="nama" class="form-control form-control-xl" placeholder="Name">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="email" value="<?= set_value('email'); ?>" id="email" class="form-control form-control-xl" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password1" value="<?= set_value('password'); ?>" id="password1" class="form-control form-control-xl" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password2" value="<?= set_value('password'); ?>" id="password2" class="form-control form-control-xl" placeholder="Confirm Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="<?= set_value('auth'); ?>" class="font-bold">Login</a>.</p>
                </div>
            </div>
        </div>