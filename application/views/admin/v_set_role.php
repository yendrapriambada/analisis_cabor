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
                        <tr>
                          <td>Search Engine Marketing</td>
                          <td class="font-weight-bold">$362</td>
                          <td>21 Sep 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-primary">Administrator</div>
                          </td>
                          <td>
                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Search Engine Optimization</td>
                          <td class="font-weight-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Member</div>
                          </td>
                          <td>
                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Display Advertising</td>
                          <td class="font-weight-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Member</div>
                          </td>
                          <td>
                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Pay Per Click Advertising</td>
                          <td class="font-weight-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Member</div>
                          </td>
                          <td>
                            <a href="#" type="button" onclick="return confirm ('Apakah Anda Yakin Akan Mengedit Peran Akun ini ?')" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Referral Marketing</td>
                          <td class="font-weight-bold">$283</td>
                          <td>20 Mar 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Member</div>
                          </td>
                          <td>
                            <a href="#" type="button" onclick="return confirm ('Apakah Anda Yakin Akan Mengedit Peran Akun ini ?')" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Social media marketing</td>
                          <td class="font-weight-bold">$897</td>
                          <td>26 Oct 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Member</div>
                          </td>
                          <td>
                            <a href="#" type="button" onclick="return confirm ('Apakah Anda Yakin Akan Mengedit Peran Akun ini ?')" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-info">Set Peran</a>
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
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleSelectGender">Peran</label>
              <select class="form-control" id="exampleSelectGender">
                <option>Administrator</option>
                <option>Member</option>
              </select>
            </div>
          </div>
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