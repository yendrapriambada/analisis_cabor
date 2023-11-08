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
                  <h3 class="font-weight-bold">Data Responden</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="mb-4">
                    <a href="<?= base_url() . 'user/C_data_anak/form_input' ?>" class="btn btn-social-icon-text btn-dribbble">
                      <i class="mdi mdi-plus-circle-outline"></i>
                      Tambah Data
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn btn-social-icon-text btn-facebook">
                      <i class="mdi mdi-download"></i>
                      Unduh Data
                    </a>
                  </div>
                  <div class="table-responsive">
                    <table id="dataAnak" class="table table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tinggi Badan (cm)</th>
                          <th>Berat Badan (kg)</th>
                          <th>Tinggi Duduk (cm)</th>
                          <th>Rentang Lengan (cm)</th>
                          <th>Kecepatan</th>
                          <th>Kelincahan</th>
                          <th>Koordinasi</th>
                          <th>Kekuatan</th>
                          <th>Power</th>
                          <th>Daya Tahan</th>
                          <th>Nilai Potensi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td><label>Pending</label></td>
                          <td>
                            <a href="<?= base_url() . 'user/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                            <br>
                            <a href="<?= base_url() . 'user/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                            <br>
                            <a href="#" class="badge badge-danger">Hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td><label>Pending</label></td>
                          <td>
                            <a href="<?= base_url() . 'user/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                            <br>
                            <a href="<?= base_url() . 'user/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                            <br>
                            <a href="#" class="badge badge-danger">Hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td><label>Pending</label></td>
                          <td>
                            <a href="<?= base_url() . 'user/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                            <br>
                            <a href="<?= base_url() . 'user/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                            <br>
                            <a href="#" class="badge badge-danger">Hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td><label>Pending</label></td>
                          <td>
                            <a href="<?= base_url() . 'user/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                            <br>
                            <a href="<?= base_url() . 'user/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                            <br>
                            <a href="#" class="badge badge-danger">Hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label>Pending</label></td>
                          <td><label>Pending</label></td>
                          <td>
                            <a href="<?= base_url() . 'user/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                            <br>
                            <a href="<?= base_url() . 'user/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                            <br>
                            <a href="#" class="badge badge-danger">Hapus</a>
                          </td>
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
  <?php $this->load->view('layout/javascript') ?>
  <!-- end javascript -->

</body>

</html>