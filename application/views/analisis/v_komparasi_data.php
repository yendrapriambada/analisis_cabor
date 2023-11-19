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
                  <h3 class="font-weight-bold">Komparasi Statistik Data</h3>
                  <p class="mt-2">Pilih Cabang Olahraga dan anak yang akan di komparasi</p>
                </div>
              </div>
            </div>
          </div>
          <form method="post" action="<?= base_url('user/C_index_user/resultKomparasi'); ?>" class="form-simple">
            <div class="form-group">
              <label for="cabang_olahraga">Cabang Olahraga</label><span class="text-danger">*</span>
              <select class="form-control" name="cabang_olahraga" id="cabang_olahraga">
                <option value="">Pilih Cabang Olahraga</option>
                <option value="">Sepak Bola</option>
                <option value="">Badminton</option>
                <option value="">Tennis meja</option>
              </select>
            </div>
            <div class="form-group">
              <label for="anak_1">Anak Ke-1</label><span class="text-danger">*</span>
              <select class="form-control" name="anak_1" id="anak_1">
                <option value="">Pilih anak ke-1</option>
              </select>
            </div>
            <div class="form-group">
              <label for="anak_2">Anak Ke-2</label><span class="text-danger">*</span>
              <select class="form-control" name="anak_2" id="anak_2">
                <option value="">Pilih Anak Ke-2</option>
              </select>
            </div>
            <div class="d-flex">
              <button type="submit" class="btn btn-primary mr-2 ml-auto">Komparasi</button>
            </div>
          </form>
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