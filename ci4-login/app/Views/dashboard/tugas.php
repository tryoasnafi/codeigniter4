<?= $this->extend('dashboard/layouts/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Status Tugas</h4>
                        <p class="card-description"> Dibantuin.id <code></code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Pengguna </th>
                                        <th> Nama Pengguna </th>
                                        <th> Progress </th>
                                        <th> Harga </th>
                                        <th> Tenggat Waktu </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face4.png" alt="image" />
                                        </td>
                                        <td> Afifa Fitia </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.550.000 </td>
                                        <td> 15 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face3.jpg" alt="image" />
                                        </td>
                                        <td> Nabilla Ananda </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.275.987 </td>
                                        <td> 20 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face1.jpg" alt="image" />
                                        </td>
                                        <td> Annisa Nadaa </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.1.000.000 </td>
                                        <td> 19 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face8.jpg" alt="image" />
                                        </td>
                                        <td> Justin Bieber</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.834.987 </td>
                                        <td> 10 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face9.jpg" alt="image" />
                                        </td>
                                        <td> Billie Ellish </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.987.000 </td>
                                        <td> 17 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face10.jpg" alt="image" />
                                        </td>
                                        <td> Randi Marten </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.150.000 </td>
                                        <td> 15 Desember 2020 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="assets/images/faces/face6.png" alt="image" />
                                        </td>
                                        <td> Raisa Adriani </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> Rp.769.096 </td>
                                        <td> 16 Desember 2020 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Dibantuin.id 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?= $this->endSection() ?>