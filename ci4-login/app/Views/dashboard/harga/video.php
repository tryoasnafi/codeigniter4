<?= $this->extend('dashboard/layouts/page_layout') ?>

<?= $this->section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <!-- List Harga Word -->
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Harga Video</h4>
                        <p class="card-description"> Video,Video Animasi <code></code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Jenis Tugas</th>
                                        <th> Jumlah Menit</th>
                                        <th> Lama Pengerjaan </th>
                                        <th> Harga </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info">
                                        <td> 1 </td>
                                        <td> Edit Video Biasa Tanpa Efek </td>
                                        <td>
                                            <10 Menit</td>
                                        <td> 7 Hari </td>
                                        <td> Rp.350.000 </td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td> 2 </td>
                                        <td> Edit Video Dengan Efek </td>
                                        <td>
                                            <5 Menit </td>
                                        <td> 20 Hari</td>
                                        <td> Rp.500.000 </td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td> 3 </td>
                                        <td> Edit Video Animasi Tanpa Efek </td>
                                        <td>
                                            <10 Menit </td>
                                        <td>
                                            <10 Hari</td>
                                        <td> Rp.750.0000 </td>
                                    </tr>
                                    <tr class="table-success">
                                        <td> 4 </td>
                                        <td> Edit Video Animasi Dengan Efek </td>
                                        <td>
                                            <3 Menit</td>
                                        <td>
                                            <7 Hari </td>
                                        <td> Rp.550.000 </td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td> 5 </td>
                                        <td> Edit Video Sesuai Keinginan </td>
                                        <td>
                                            <3 Menit </td>
                                        <td>
                                            <12 Hari</td>
                                        <td> Menyesuaikan </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6> HARGA MENYESUAIKAN TINGKAT KESULITAN TUGAS DAN TERGANTUNG KESEPAKATAN </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © dibantuin.id2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
        </div>
    </footer>
    <!-- partial -->
</div>
<?= $this->endSection() ?>