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
                  
                <!-- Alert -->
                <?php if ($this->session->flashdata('ver') == 'TRUE') { ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('alert'); ?>
                        <?php $this->session->set_flashdata('ver',"FALSE");?>
                    </div>
                <?php } ?>
                <!-- /alert -->

                  <div class="mb-4">
                    <?php if ($this->session->userdata('role_id') != NULL) { ?>
                      <a href="<?= base_url() . 'anak/C_data_anak/form_input' ?>" class="btn btn-social-icon-text btn-dribbble">
                        <i class="mdi mdi-plus-circle-outline"></i>
                        Tambah Data
                      </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="<?= base_url() . 'anak/C_export_excel/export'?>" class="btn btn-social-icon-text btn-facebook">
                        <i class="mdi mdi-download"></i>
                        Unduh Data (.xlsx)
                      </a>
                    <?php } else { ?>
                      <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-social-icon-text btn-dribbble">
                        <i class="mdi mdi-plus-circle-outline"></i>
                        Tambah Data
                      </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-social-icon-text btn-facebook">
                        <i class="mdi mdi-download"></i>
                        Unduh Data
                      </a>
                    <?php } ?>

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
                        <?php $no=1; foreach ($records as $d) : ?>
                          <tr>
                            <td><?= $no;?></td>
                            <td><?= $d->nama_anak?></td>
                            <td><?php if($d->jenis_kelamin_anak == '1') { echo "Laki-Laki"; } else {echo "Perempuan";}?></td>
                            <td><?= $d->tinggi_badan_anak?></td>
                            <td><?= $d->berat_badan_anak?></td>
                            <td><?= $d->tinggi_duduk_anak?></td>
                            <td><?= $d->rentang_lengan_anak?></td>
                            <td><?= $d->kecepatan_anak?></td>
                            <td><?= $d->kelincahan_anak?></td>
                            <td><?= $d->koordinasi_anak?></td>
                            <td><?= $d->kekuatan_anak?></td>
                            <td><?= $d->power_anak?></td>
                            <td><?= $d->daya_tahan_anak?></td>
                            <td><?= $d->nilai_potensi_anak?></td>
                            <td>
                              <a href="<?= base_url() . 'analisis/C_result_prediction' ?>" class="badge badge-info mb-2">Lihat Detail</a>
                              <br>
                              <?php if ($this->session->userdata('role_id') != NULL) { ?>
                                <a href="<?= base_url() . 'anak/C_data_anak/form_edit/'.$d->id_anak ?>" onclick="return confirm ('Apakah Anda Yakin Akan Mengedit Data ini ?')" class="badge badge-warning mb-2">Edit</a>
                                <br>
                                <a onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data ini?')" href="<?= base_url().'anak/C_data_anak/hapus/'. $d->id_anak?>" class="badge badge-danger">Hapus</a>
                              <?php } else { ?>
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="<?= base_url() . 'anak/C_data_anak/form_edit' ?>" class="badge badge-warning mb-2">Edit</a>
                                <br>
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#" class="badge badge-danger">Hapus</a>
                              <?php } ?>
                            </td>
                          </tr>
                        <?php $no++; endforeach;?>
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
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Anak</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 for="exampleSelectGender" class="text-danger">Silahkan <a href="<?= base_url() . 'auth/C_login' ?>">login</a> terlebih dahulu untuk melanjutkan fitur ini.</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          <a href="<?= base_url() . 'auth/C_login' ?>" type="button" class="btn btn-primary">Login</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>