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
                  <p class="mt-2">Pilih Cabang Olahraga dan jumlah anak yang akan di komparasi</p>
                  <p class="text-danger">Jumlah minimal anak yang dikomparasi adalah 2 orang dan maksimal tidak melebihi jumlah data anak</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Alert -->
          <?php if ($this->session->flashdata('ver') == 'TRUE') { ?>
              <div class="alert alert-<?=$this->session->flashdata('class_alert');?> alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('alert'); ?>
                  <?php $this->session->set_flashdata('ver',"FALSE");?>
              </div>
          <?php } ?>
          <!-- /alert -->

          <form method="post" action="<?= base_url('analisis/C_komparasi_data/pilih_anak'); ?>" class="form-simple">
            <div class="form-group">
              <label for="cabang_olahraga">Cabang Olahraga</label><span class="text-danger">*</span>
              <select class="form-control" name="cabang_olahraga" id="cabang_olahraga" required>
                <option value="">Pilih Cabang Olahraga</option>
                <?php foreach ($records as $d) { ?>
                  <option value="<?= $d->id_cabor?>"><?= $d->nama_cabor?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah_anak">Jumlah Anak</label><span class="text-danger">*</span>
              <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control" placeholder="Jumlah anak yang akan di komparasi" required>
            </div>
            <button type="submit" class="btn btn-primary mr-2 ml-auto">Pilih Anak</button>
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