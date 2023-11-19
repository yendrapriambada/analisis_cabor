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
            <div class="col-12 grid-margin">
              <div class="row">
                <div class="col-12 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Hasil Komparasi Statistik Data</h3>
                  <!-- <p class="mt-2">Pilih Cabang Olahraga dan anak yang akan di komparasi</p> -->
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