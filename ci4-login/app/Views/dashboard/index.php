<?= $this->extend('dashboard/layouts/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-5 col-sm-7 col-xl-8 p-0">
                <h4 class="mb-1 mb-sm-0">Butuh Bantuan Untuk Menyelesaikan Tugas?</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">DIBANTUIN.ID AJAA!</p>
              </div>
              <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                <span>
                  <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn"></a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4 class="mb-0">Rp.1.567.844</h4>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Pendapatan saat ini</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4 class="mb-0">Rp.112.097</h4>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Penghasilan Harian</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4 class="mb-0">Rp.250.876</h4>
                  <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-danger">
                  <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Pengeluaran saat Ini</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4 class="mb-0">19,887</h4>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Kunjungan Saat Ini</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Riwayat Transaksi</h4>
            <canvas id="transaction-history" class="transaction-chart"></canvas>
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Melalui Transfer Bank</h6>
                <p class="text-muted mb-0">15 Desember 2020, 09:12 WIB</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0">Rp.1.000.000</h6>
              </div>
            </div>
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Melalui Dana/i Saku</h6>
                <p class="text-muted mb-0">12 Desember 2020, 10.00 WIB</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0">Rp.567.844</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Membuka Jasa di : </h4>
              <p class="text-muted mb-1">Status data Anda</p>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="preview-list">
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-primary">
                        <i class="mdi mdi-file-document"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">Pembuatan Makalah</h6>
                        <p class="text-muted mb-0">Makalah dengan judul apapun</p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">15 menit lalu</p>
                        <p class="text-muted mb-0">30 tugas, 5 masalah </p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-file-video"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">Edit Video</h6>
                        <p class="text-muted mb-0">Video Animasi</p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">1 jam lalu</p>
                        <p class="text-muted mb-0">23 tugas, 7 masalah </p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-file-powerpoint-box"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">Pembuatan PPT</h6>
                        <p class="text-muted mb-0">Dengan judul apapun</p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">35 menit lalu </p>
                        <p class="text-muted mb-0">15 tugas, 2 masalah</p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-danger">
                        <i class="mdi mdi-file-image"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">Pembuatan Design Logo</h6>
                        <p class="text-muted mb-0">Logo Brand </p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">55 menit lalu </p>
                        <p class="text-muted mb-0">35 tugas, 7 masalah </p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-firefox"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">Pembuatan Website</h6>
                        <p class="text-muted mb-0">Website HTML,CSS. </p>
                      </div>
                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">50 menit lalu </p>
                        <p class="text-muted mb-0">27 tugas, 4 masalah </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Pendapatan</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h3 class="mb-0">Rp.15.958.234</h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                </div>
                <h6 class="text-muted font-weight-normal">11.38% Sejak Bulan Terakhir</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Terjual</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h3 class="mb-0">Rp.10.000.234</h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                </div>
                <h6 class="text-muted font-weight-normal"> 9.61% Sejak Bulan Terakhir</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Memperoleh</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h3 class="mb-0">Rp.3.564.123</h3>
                  <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                </div>
                <h6 class="text-muted font-weight-normal">2.27% Sejak Bulan Terakhi</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Status Pemesanan</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </th>
                    <th> Nama Klien </th>
                    <th> No Pesanan </th>
                    <th> Biaya Pesanan </th>
                    <th> Tugas</th>
                    <th> Metode Pembayaran </th>
                    <th> Mulai Tanggal </th>
                    <th> Status Pembayaran </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td>
                      <img src="assets/images/faces/face1.jpg" alt="image" />
                      <span class="pl-2">Annisa Nadaa</span>
                    </td>
                    <td> 02312 </td>
                    <td> Rp.125.000 </td>
                    <td> Pembuatan Makalah </td>
                    <td> Transfer Bank</td>
                    <td> 4 Desember 2020 </td>
                    <td>
                      <div class="badge badge-outline-success">Disetujui</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td>
                      <img src="assets/images/faces/face4.png" alt="image" />
                      <span class="pl-2">Afifa Fitia</span>
                    </td>
                    <td> 02311 </td>
                    <td> Rp.350.000</td>
                    <td> Pembuatan Website </td>
                    <td> Tranfer Bank </td>
                    <td> 3 Desember 2020 </td>
                    <td>
                      <div class="badge badge-outline-warning">Menunggu</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td>
                      <img src="assets/images/faces/face3.jpg" alt="image" />
                      <span class="pl-2">Nabila Ananda</span>
                    </td>
                    <td> 02313 </td>
                    <td> Rp.250.000 </td>
                    <td> Design Logo</td>
                    <td> Dana </td>
                    <td> 5 Desmber 2020 </td>
                    <td>
                      <div class="badge badge-outline-success">Disetujui</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td>
                      <img src="assets/images/faces/face8.jpg" alt="image" />
                      <span class="pl-2">Justin Bieber</span>
                    </td>
                    <td> 02312 </td>
                    <td> Rp.74.000 </td>
                    <td> Pembuatan PPT </td>
                    <td> i Saku </td>
                    <td> 6 Desember 2020 2019 </td>
                    <td>
                      <div class="badge badge-outline-warning">Menunggu</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td>
                      <img src="assets/images/faces/face9.jpg" alt="image" />
                      <span class="pl-2">Billie Ellish</span>
                    </td>
                    <td> 02315 </td>
                    <td> Rp.500.000 </td>
                    <td> Edit Video </td>
                    <td> Transfer Bank </td>
                    <td> 7 Desember 2020 </td>
                    <td>
                      <div class="badge badge-outline-success">Disetujui</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title">Pesan</h4>
              <p class="text-muted mb-1 small">Lihat Semua</p>
            </div>
            <div class="preview-list">
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face1.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Annisa Nadaa</h6>
                      <p class="text-muted text-small">5 menit lalu</p>
                    </div>
                    <p class="text-muted">Mantul Banget Bosque Makalahnya.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Nabila Ananda</h6>
                      <p class="text-muted text-small">10 Menit lalu</p>
                    </div>
                    <p class="text-muted">Keren, Belum pernah nemu jasa tugas se rapi ini.</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Billie Ellish</h6>
                      <p class="text-muted text-small">2 Jam lalu</p>
                    </div>
                    <p class="text-muted">Mantap bro,bakal jadi langganan</p>
                  </div>
                </div>
              </div>
              <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face10.jpg" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">Randi Marten</h6>
                      <p class="text-muted text-small">4 Jam lalu </p>
                    </div>
                    <p class="text-muted">Bagaimana? Apakah masih ada yg belum jelas?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Portofolio Slide</h4>
            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
              <div class="item">
                <img src="assets/images/dashboard/Rectangle.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/images/dashboard/Img_5.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/images/dashboard/img_6.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/images/dashboard/img_7.jpg" alt="">
              </div>
            </div>
            <div class="d-flex py-4">
              <div class="preview-list w-100">
                <div class="preview-item p-0">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face11.png" class="rounded-circle" alt="">
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Dibantuin.id</h6>
                        <p class="text-muted text-small"></p>
                      </div>
                      <p class="text-muted">Berikut adalah portofolio kami.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-muted">Berikut adalah portofolio kami. </p>
            <div class="progress progress-md portfolio-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Terimakasih Telah Percayakan Tugas Anda Kepada Kami</h1>
            <div class="add-items d-flex">
            </div>
          </div>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>