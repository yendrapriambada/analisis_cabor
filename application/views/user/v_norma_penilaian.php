<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
      <?php $this->load->view('layout/import_css')?>
  <!-- end CSS -->

</head>
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view('layout/navbar')?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
        <?php $this->load->view('layout/settings-panel')?>
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
        <?php $this->load->view('layout/sidebar')?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="row">
                <div class="col-12 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Norma Penilaian</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="text-info font-weight-bold">Norma Penilaian Hasil Tes Sport Search Usia 11 Putera</h5>
                    </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                      <thead class="text-center table-info">
                        <tr>
                          <th>Kategori</th>
                          <th>Kecepatan (s)</th>
                          <th>Kelincahan (s)</th>
                          <th>Koordinasi (x)</th>
                          <th>Kekuatan (m)</th>
                          <th>Power (cm)</th>
                          <th>VO2 MAX</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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
  <?php $this->load->view('layout/javascript')?>
<!-- end javascript -->

</body>

</html>

