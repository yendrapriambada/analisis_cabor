<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <?php $this->load->view('layout/import_css') ?>
  <!-- end CSS -->

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
                  <h3 class="font-weight-bold">Selamat datang <?= $user['name_user'] ?></h3>
                  <h6 class="font-weight-normal mb-0">Aplikasi ini dapat membantu anda mengolah data dan <span class="text-primary"> memprediksi kemampuan anak </span> pada cabang olah raga tertentu</span></h6>
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
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-4 mb-2 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Data Anak</p>
                      <p class="fs-30 mb-2"><?= $jmlDataAnak?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-2 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Anak Laki-Laki</p>
                      <p class="fs-30 mb-2"><?= $jmlDataAnakLakiLaki?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-2 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Anak Perempuan</p>
                      <p class="fs-30 mb-2"><?= $jmlDataAnakPerempuan?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Rangkuman Prediksi Cabang Olahraga</p>
                    <div class="d-flex flex-wrap mb-5">
                      <p class="font-weight-500">Table di bawah ini menunjukkan rangkuman dari total prediksi cabang olahraga tiap responden</p>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Cabang Olahraga</th>
                              <th>Jumlah Anak</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Jacob</td>
                              <td>53275531</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Jacob</td>
                              <td>53275531</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Jacob</td>
                              <td>53275531</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Jacob</td>
                              <td>53275531</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Jacob</td>
                              <td>53275531</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">Perbandingan Responden</p>
                      <a href="#" class="text-info">View all</a>
                    </div>
                    <p class="font-weight-500">Grafik di bawah ini menunjukkan perbandingan jumlah laki-laki dan perempuan tiap cabang olahraga</p>
                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php $this->load->view('layout/footer') ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- javascript -->
    <?php $this->load->view('layout/javascript') ?>
    <!-- end javascript -->

</body>

</html>