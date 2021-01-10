<?= $this->extend('dashboard/layouts/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Berikan Penilaian </h4>
                        <p class="card-description"> Dibantuin.id </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Pengguna</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Jenis Tugas</label>
                                <select class="form-control" id="exampleSelectGender">
                                    <option>Word</option>
                                    <option>PPT</option>
                                    <option>Video</option>
                                    <option>Design</option>
                                    <option>Website</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Bintang</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                    <option>*****</option>
                                    <option>****</option>
                                    <option>***</option>
                                    <option>**</option>
                                    <option>*</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Komentar</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">OK</button>
                            <button class="btn btn-dark">Kembali</button>
                        </form>
                    </div>



                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©Dibantuin.id 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>