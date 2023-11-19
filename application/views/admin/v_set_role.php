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
                  <h3 class="font-weight-bold">Kelola Peran User</h3>
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
                          <th>Peran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if (!empty($users)) {
                          foreach ($users as $row) {
                            echo "<tr>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["date_created"] . "</td>";
                            if ($row["role_id"] == 1) {
                              echo "<td><div class='badge badge-success'>" . "Administrator" . "</div></td>";
                            } else if ($row["role_id"] == 2) {
                              echo "<td><div class='badge badge-warning'>" . "Member" . "</div></td>";
                            } else if ($row["role_id"] == 3) {
                              echo "<td><div class='badge badge-secondary'>" . "Unverified User" . "</div></td>";
                            }
                            echo "<td><button type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-sm btn-info'>Set Peran</button></td>";
                            echo "</tr>";
                          }
                        } else {
                          echo "<tr><td colspan='5'>No data found</td></tr>";
                        }
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Peran User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= base_url('auth/C_set_role/updateRole');  ?>">
            <input type="hidden" name="email" value="<?= $row['email']; ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleSelectGender">Peran</label>
                <select class="form-control" id="exampleSelectGender" name="peran">

                  <option value="1" <?php echo ($row['role_id'] == '1') ? 'selected' : ''; ?>>Administrator</option>
                  <option value="2" <?php echo ($row['role_id'] == '2') ? 'selected' : ''; ?>>Member</option>
                  <option value="3" <?php echo ($row['role_id'] == '3') ? 'selected' : ''; ?>>Unverified User</option>
                </select>
              </div>
              <button type="submit">Simpan</button>
            </div>
          </form>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- container-scroller -->

    <!-- javascript -->
    <?php $this->load->view('layout/javascript') ?>
    <!-- end javascript -->

</body>

</html>