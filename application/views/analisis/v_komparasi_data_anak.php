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
                  <p class="mt-2">Pilih data anak yang akan di komparasi</p>
                </div>
              </div>
            </div>
          </div>

          <form method="post" action="<?= base_url('analisis/C_komparasi_data/resultKomparasi'); ?>" class="form-simple">
            <div class="form-group">
              <label for="cabor">Cabang Olahraga</label>
              <input class="form-control" type="text" name="cabor" id="cabor" value="<?=$dataCaborById->nama_cabor?>">
              <input class="form-control" type="text" name="jmlhDataAnak" id="jmlhDataAnak" value="<?=$jmlAnakInput?>" hidden>
              <input type="text" name="id_cabor" id="id_cabor" value="<?=$dataCaborById?->id_cabor?>" hidden>
            </div>
            <?php for ($i=0; $i < $jmlAnakInput; $i++) { ?>
                <div class="form-group">
                    <label for="anak_<?=$i+1?>">Anak Ke-<?=$i+1?></label><span class="text-danger">*</span>
                        <select class="form-control" name="anak_<?=$i+1?>" id="anak_<?=$i+1?>" required>
                        <option value="">Pilih anak ke-<?=$i+1?></option>
                        <?php foreach ($dataAnak as $d) { ?>
                            <option value="<?= $d->id_anak?>"><?= $d->nama_anak?></option>
                        <?php } ?>
                    </select>
                </div>
            <?php }?>
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