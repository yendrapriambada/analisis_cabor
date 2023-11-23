<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <?php $this->load->view('layout/import_css') ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/timeline.css">
  <!-- end CSS -->
  <style>
    /* Semua tab konten disembunyikan */
    .tab-content-section {
      display: none;
    }

    /* Menampilkan default tab (Detail Akun) */
    .default-tab {
      display: block;
    }

    /* Circle point common style */
    .circle-point {
      position: relative;
      margin: 20px 0;
      padding-left: 50px;
    }

    /* Circle styling for each point */
    .circle-point:before {
      content: ' ';
      background: var(--circle-background, white);
      /* Default background */
      display: inline-block;
      position: absolute;
      border-radius: 50%;
      border: 3px solid #22c0e8;
      left: 20px;
      width: 20px;
      height: 20px;
      z-index: 400;
    }

    /* Checklist symbol */
    .circle-point:after {
      content: '✔';
      /* Unicode character for checkmark */
      color: white;
      /* Checkmark color */
      font-size: 12px;
      /* Adjust size as needed */
      position: absolute;
      left: 25px;
      /* Adjust alignment */
      top: 0px;
      /* Adjust vertical alignment */
      z-index: 500;
      /* Ensure above circle border */
    }


    /* Modified style for active circle points */
    .circle-point.active-circle-point:before {
      background-color: #22c0e8;
    }


    /* Additional styles for the line connecting points */
    ul.timeline {
      list-style-type: none;
      position: relative;
    }

    ul.timeline:before {
      content: ' ';
      background: #22c0e8;
      display: inline-block;
      position: absolute;
      left: 30px;
      width: 2px;
      height: 98%;
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

                  <div class="step-container">
                    <section class="step-section">
                      <section class="step">
                        <div class="step-margin">
                          <div id="circle-1" class="step-circle-content step-content btn-tab" data-target="detail-akun">
                            <p class="step-number step-label">1</p>
                          </div>
                        </div>

                        <div id="name-tab-1" class="step-details step-info color-font-black">
                          <div class="step-label-info">
                            <label class="step-title btn-tab" data-target="detail-akun">
                              <p class=" step-number step-label">Detail Akun</p>
                            </label>
                            <span id="step-divider-2" class="step-divider"></span>
                          </div>
                          <p class="step-number font-weight"></p>
                        </div>
                      </section>

                      <section class="step">
                        <div class="step-margin">
                          <div id="circle-2" class="step-circle-content step-content-muted btn-tab" data-target="verifikasi-akun">
                            <p class="step-number step-label">2</p>
                          </div>
                        </div>

                        <div id="name-tab-2" class="step-details step-info">
                          <div class="step-label-info">
                            <label class="step-title btn-tab" data-target="verifikasi-akun">
                              <p class="step-number step-label">Verifikasi Akun</p>
                            </label>
                            <span id="step-divider-3" class="step-divider"></span>
                          </div>
                          <p class="step-number font-weight"></p>
                        </div>
                      </section>

                      <section class="step">
                        <div class="step-margin">
                          <div id="circle-3" class="step-circle-content step-content-muted btn-tab" data-target="aktivasi-akun">
                            <p class="step-number step-label">3</p>
                          </div>
                        </div>

                        <div id="name-tab-3" class="step-details step-info">
                          <div class="step-label-info">
                            <label class="step-title btn-tab" data-target="aktivasi-akun">
                              <p class="step-number step-label">Aktivasi Akun</p>
                            </label>
                            <span id="step-divider-4" class="step-divider"></span>
                          </div>
                          <p class="step-number font-weight"></p>
                        </div>
                      </section>

                      <section class="step">
                        <div class="step-margin">
                          <div id="circle-4" class="step-circle-content step-content-muted btn-tab" data-target="selesai">
                            <p class="step-number step-label">4</p>
                          </div>
                        </div>

                        <div id="name-tab-4" class="step-details step-info false">
                          <div class="step-label-info">
                            <label class="step-title btn-tab" data-target="selesai">
                              <p class="step-number step-label">Selesai</p>
                            </label>
                          </div>
                          <p class="step-number font-weight"></p>
                        </div>
                      </section>
                    </section>
                  </div>

                  <?= $this->session->flashdata('message'); ?>

                  <div class="card-body">
                    <!-- Bagian 1 - Detail Akun -->

                    <div id="detail-akun" class="tab-content-section">
                      <!-- Konten untuk Detail Akun -->
                      <h4 class="card-title">Detail Informasi Akun</h4>
                      <form method="post" action="<?= base_url('admin/C_detail_status/updateProgress/' . $user->id_user . '/2');  ?>">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Nama Lengkap</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" value="<?= $user->name_user ?>" placeholder="Username" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" value="<?= $user->email_user ?>" placeholder="Email" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tanggal Dibuat</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $user->date_created ?>" placeholder="Tanggal Dibuat" readonly>
                        </div>
                        <button id="btn-konfirmasi-akun" type="submit" class="btn btn-primary" style="float: right;" disabled>Konfirmasi Akun</button>
                      </form>
                    </div>

                    <!-- Bagian 2 - Verifikasi Akun -->
                    <div id="verifikasi-akun" class="tab-content-section">
                      <!-- Konten untuk Verifikasi Akun -->

                      <h4 class="card-title">Progress Verifikasi Akun</h4>
                      <form method="post" action="<?= base_url('admin/C_detail_status/sendEmailVerification/' . $user->id_user); ?>">
                        <input type="hidden" name="email_user" value="<?= $user->email_user ?>">
                        <ul class="timeline">
                          <li id="verif-1" class="circle-point">
                            <p>Kirim Email Verifikasi Kepada User</p>
                            <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
                          </li>
                          <li id="verif-2" class="circle-point">
                            <p>Verifikasi Sudah Terkirim</p>
                          </li>
                          <li id="verif-3" class="circle-point">
                            <p>Akun Sudah Diverifikasi User</p>
                          </li>
                        </ul>
                      </form>

                    </div>

                    <!-- Bagian 3 - Aktivasi Akun -->
                    <div id="aktivasi-akun" class="tab-content-section">
                      <!-- Konten untuk Aktivasi Akun -->
                      <form method="post" action="<?= base_url('admin/C_detail_status/activateAccount/' . $user->id_user); ?>">
                        <input type="hidden" name="email_user" value="<?= $user->email_user ?>">
                        <div class="form-group">
                          <h4 class="card-title">Aktifkan Akun User</h4>
                          <select class="form-control" name="is_active">
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Informasi</button>
                      </form>
                    </div>

                    <!-- Bagian 4 - Selesai -->
                    <div id="selesai" class="tab-content-section">
                      <?php if ($user->progres_aktivasi_user == 5 && $user->is_active == 1) : ?>
                        <h5>Proses verifikasi akun telah selesai, user sudah menerima informasi akun dan dapat menggunakan akun.</h5>
                      <?php elseif ($user->progres_aktivasi_user == 5 && $user->is_active == 0) : ?>
                        <h5>Akun user diatur sebagai akun tidak aktif.</h5>
                      <?php endif; ?>

                      <a href="<?= base_url() . 'admin/C_manage_user' ?>" class="mt-2 btn btn-primary">Kembali</a>
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


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
          $('.btn-tab').click(function() {
            // Mendapatkan target dari tombol yang diklik
            var target = $(this).data('target');

            // Menyembunyikan semua konten
            $('.tab-content-section').hide();

            // Menampilkan konten yang sesuai dengan target
            $('#' + target).show();
          });
        });
      </script>

      <script>
        $(document).ready(function() {
          <?php if ($user->progres_aktivasi_user == 1) { ?>
            $("#detail-akun").addClass("default-tab");
            $('#btn-konfirmasi-akun').prop('disabled', false);
          <?php } else if ($user->progres_aktivasi_user == 2) { ?>
            $("#verifikasi-akun").addClass("default-tab");

            $("#circle-2").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-2").addClass("color-font-black");
            $("#step-divider-2").addClass("bg-line");

            $("#verif-1").addClass("active-circle-point");
          <?php } else if ($user->progres_aktivasi_user == 3) { ?>
            $("#verifikasi-akun").addClass("default-tab");

            $("#circle-2").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-2").addClass("color-font-black");
            $("#step-divider-2").addClass("bg-line");

            $("#verif-1").addClass("active-circle-point");
            $("#verif-2").addClass("active-circle-point");
          <?php } else if ($user->progres_aktivasi_user == 4) { ?>
            $("#aktivasi-akun").addClass("default-tab");

            $("#circle-2").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-2").addClass("color-font-black");
            $("#step-divider-2").addClass("bg-line");

            $("#circle-3").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-3").addClass("color-font-black");
            $("#step-divider-3").addClass("bg-line");

            $("#verif-1").addClass("active-circle-point");
            $("#verif-2").addClass("active-circle-point");
            $("#verif-3").addClass("active-circle-point");
          <?php } else if ($user->progres_aktivasi_user == 5) { ?>
            $("#selesai").addClass("default-tab");

            $("#circle-2").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-2").addClass("color-font-black");
            $("#step-divider-2").addClass("bg-line");

            $("#circle-3").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-3").addClass("color-font-black");
            $("#step-divider-3").addClass("bg-line");

            $("#circle-4").removeClass("step-content-muted").addClass("step-content");
            $("#name-tab-4").addClass("color-font-black");
            $("#step-divider-4").addClass("bg-line");
          <?php } ?>
        });
      </script>
</body>

</html>