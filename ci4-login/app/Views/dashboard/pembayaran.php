<?= $this->extend('dashboard/layouts/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title"> Status Pembayaran </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Terbaru</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>No Pembayaran</th>
                                        <th>Jenis Pesanan</th>
                                        <th>Harga</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nabila Ananda</td>
                                        <td>938484789</td>
                                        <td>Edit Makalah</td>
                                        <td>Rp.135.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Annisa Nadaa</td>
                                        <td>938484249</td>
                                        <td>Edit Video</td>
                                        <td>Rp.435.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Justin Bieber</td>
                                        <td>93848409</td>
                                        <td>Edit Log0</td>
                                        <td>Rp.555.000</td>
                                        <td>Dana</td>
                                        <td>
                                            <label class="badge badge-danger">Belum Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Chava Aurorae</td>
                                        <td>938484781</td>
                                        <td>Edit Website</td>
                                        <td>Rp.753.000</td>
                                        <td>i Saku</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Xabiru Alhakim</td>
                                        <td>99010191</td>
                                        <td>Edit PPT</td>
                                        <td>Rp.35.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-danger">Belum Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td> Ananda Chava</td>
                                        <td>938484789</td>
                                        <td>Edit Makalah</td>
                                        <td>Rp.135.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td> Nadaa Adilla</td>
                                        <td>938484249</td>
                                        <td>Edit Video</td>
                                        <td>Rp.435.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Justin Mendes</td>
                                        <td>93848409</td>
                                        <td>Edit Log0</td>
                                        <td>Rp.555.000</td>
                                        <td>Dana</td>
                                        <td>
                                            <label class="badge badge-danger">Belum Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Chava Jasmine</td>
                                        <td>938484781</td>
                                        <td>Edit Website</td>
                                        <td>Rp.753.000</td>
                                        <td>i Saku</td>
                                        <td>
                                            <label class="badge badge-success">Sudah Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Alhakim Okin</td>
                                        <td>99010191</td>
                                        <td>Edit PPT</td>
                                        <td>Rp.35.000</td>
                                        <td>Transfer Bank</td>
                                        <td>
                                            <label class="badge badge-danger">Belum Dibayar</label>
                                        </td>
                                        <td>
                                            <a href="detailtugas.html" class="btn btn-outline-primary" role="button" aria-pressed="true">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <nav aria-label="example4">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        1
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Selanjutnya</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©dibantuin.id 2020 <a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<?= $this->endSection() ?>