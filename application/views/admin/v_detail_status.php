<!DOCTYPE html>
<html lang="en">




<!-- Misalnya aku bikin perubahan project, sedikit pun pasti akan terdetect di sini, kalau udah di save
 -->
<!-- Mari kita tulisa message nya -->

<!-- bisa commit doang (save di local)

atau bisa sekalian di push (langsung di save di github secara online nya) -->

<!-- oiya login duluu ke github di VS CODE NYA  -->

<!-- kalau dah login kita coba lagi commit & push -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <?php $this->load->view('layout/import_css') ?>
  <!-- end CSS -->
  <style>
    ul.timeline {
      list-style-type: none;
      position: relative;
    }

    ul.timeline:before {
      content: ' ';
      background: #d4d9df;
      display: inline-block;
      position: absolute;
      left: 29px;
      width: 2px;
      height: 100%;
      z-index: 400;
    }

    ul.timeline>li {
      margin: 20px 0;
      padding-left: 50px;
    }

    ul.timeline>li:before {
      content: ' ';
      background: white;
      display: inline-block;
      position: absolute;
      border-radius: 50%;
      border: 3px solid #22c0e8;
      left: 20px;
      width: 20px;
      height: 20px;
      z-index: 400;
    }
  </style>
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view('layout/navbar') ?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      <?php $this->load->view('layout/settings-panel') ?>
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view('layout/sidebar') ?>
      <!-- partial -->


      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Detail Status Akun</h3>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white" type="button" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (<?= date('l, d-m-Y'); ?>)
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Detail Akun</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Verifikasi Akun</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Aktivasi Akun</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Selesai</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                      <div class="card-body">
                        <h4 class="card-title">Detail Akun</h4>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" value="John Doe" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" value="john@gmail.com" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Dibuat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="Selasa, 7 Nov 2023" placeholder="Tanggal Dibuat">
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Kirim Verifikasi</button>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                      <div class="container mt-5 mb-5">
                        <div class="row">
                          <div class="col-md-6">
                            <h4 class="card-title">Progress Verifikasi Akun</h4>
                            <ul class="timeline">
                              <li>
                                <Button class="btn btn-primary" target="_blank" href="https://www.totoprayogo.com/#">Kirim</Button>
                              </li>
                              <li>
                                <a href="#">Verifikasi Sudah Dikirim</a>
                              </li>
                              <li>
                                <a href="#">Akun Sudah Diverifikasi User</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                      <div class="form-group">
                        <h4 class="card-title">Tentukan Peran User</h4>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Aktif</option>
                          <option>Nonaktif</option>
                        </select>
                      </div>
                      <button type="button" class="btn btn-primary">Kirim Informasi</button>
                    </div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                      <h5>Proses verifikasi akun telah selesai, user sudah menerima informasi akun dan dapat menggunakan akun.</h5>
                      <a href="<?= base_url() . 'admin/C_manage_user' ?>" class="btn btn-primary">Kembali</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- javascript -->
    <?php $this->load->view('layout/javascript') ?>
    <!-- end javascript -->

</body>

</html>