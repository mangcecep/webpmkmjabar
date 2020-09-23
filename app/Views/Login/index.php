<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="authentication">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <form class="card auth_form">
                    <div class="header">
                        <img class="logo" src="logo.png" alt="logo PMKM">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>
                        </div>
                        <a href="index.html" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>