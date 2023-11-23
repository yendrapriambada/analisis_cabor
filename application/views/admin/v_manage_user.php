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
                  <h3 class="font-weight-bold">Kelola Akun User</h3>
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
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Akun Dibuat</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if (!empty($users)) :
                          foreach ($users as $row) : ?>
                            <tr>
                              <td><?= $row->name_user ?></td>
                              <td><?= $row->email_user ?></td>
                              <td><?= $row->date_created ?></td>
                              <?php
                              if ($row->progres_aktivasi_user == 1) {
                                echo "<td><div class='badge badge-secondary text-white'>" . "Konfirmasi Akun" . "</div></td>";
                              } else if ($row->progres_aktivasi_user == 2) {
                                echo "<td><div class='badge badge-warning'>" . "Verifikasi Akun" . "</div></td>";
                              } else if ($row->progres_aktivasi_user == 3) {
                                echo "<td><div class='badge badge-warning'>" . "Verifikasi Akun" . "</div></td>";
                              } else if ($row->progres_aktivasi_user == 4) {
                                echo "<td><div class='badge badge-info'>" . "Aktivasi Akun" . "</div></td>";
                              } else if ($row->progres_aktivasi_user == 5) {
                                if ($row->is_active == 1) {
                                  echo "<td><div class='badge badge-success'>" . "Akun Aktif" . "</div></td>";
                                } else {
                                  echo "<td><div class='badge badge-danger'>" . "Akun Tidak Aktif" . "</div></td>";
                                }
                              }
                              ?>
                              <td><a href="<?= base_url() . 'admin/C_detail_status/progress/' . $row->id_user ?>" class='btn btn-sm btn-info'>Lihat Progres</a></td>
                            </tr>
                          <?php endforeach;
                        else : ?>
                          <tr>
                            <td colspan='5'>No data found</td>
                          </tr>
                        <?php
                        endif;
                        ?>
                      </tbody>
                    </table>
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