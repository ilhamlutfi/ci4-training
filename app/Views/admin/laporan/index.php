<?= $this->extend('admin/layout/template'); ?>

<?= $this->Section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><i class="fa fa-file-alt"></i> <?= $title; ?></h1>

    <!-- DataTales Example -->
    <div class="row">

        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-download"></i> Download Seluruh Laporan</h6>
                </div>

                <div class="card-body">
                    <?= form_open('laporan/download-seluruh'); ?>
                        <p>Silahkan tekan tombol download, Untuk melakukan proses download seluruh data laporan</p>

                        <button type="submit" class="btn btn-primary float-right">Download</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-download"></i> Download Laporan Berdasarkan Tanggal</h6>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>