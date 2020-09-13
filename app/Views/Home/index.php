<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="img-fluid d-flex justify-content-center">
                <img src="<?= base_url('logo.png'); ?>" alt="Logo PMKM Prima Indonesia" style="height: 400px;width: auto" class="App-logo mt-5">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="alert alert-danger text-center">
                <h5>Web Ini sedang Tahap Development Oleh Tim IT PMKM Prima Jabar</h5>
            </div>
        </div>
    </div>
    <br />
</section>

<?= $this->endSection() ?>