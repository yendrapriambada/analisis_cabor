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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Edit Data</h4>
                            <p class="card-description"> Edit Data Anak/Responden</p>
                            <p>(<span class="text-danger">*</span>) : formulir isian wajib di isi.</p>

                            <!-- Alert -->
                            <?php if ($this->session->flashdata('ver') == 'TRUE') { ?>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <?php echo $this->session->flashdata('alert'); ?>
                                    <?php $this->session->set_flashdata('ver',"FALSE");?>
                                </div>
                            <?php } ?>
                            <!-- /alert -->

                            <?= form_open_multipart('anak/C_data_anak/do_edit', ['class'=>'forms-sample']) ?>

                                <input type="text" name="id_anak" class="form-control" required="" value="<?=$dataById->id_anak?>" hidden/>

                                <div class="form-group">
                                    <label for="nama">Nama</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Anda" value="<?=$dataById->nama_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label><span class="text-danger">*</span>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <?php if($dataById->jenis_kelamin_anak == '1') { ?>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        <?php } else { ?>
                                            <option value="2">Perempuan</option>
                                            <option value="1">Laki-Laki</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tinggi_badan">Tinggi Badan (cm)</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" value="<?=$dataById->tinggi_badan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="berat_badan">Berat Badan (kg)</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan" value="<?=$dataById->berat_badan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tinggi_duduk">Tinggi Duduk (cm)</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="tinggi_duduk" id="tinggi_duduk" placeholder="Tinggi Duduk" value="<?=$dataById->tinggi_duduk_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="rentang_lengan">Rentang Lengan (cm)</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="rentang_lengan" id="rentang_lengan" placeholder="Rentang Lengan" value="<?=$dataById->rentang_lengan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="kecepatan">Kecepatan</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="kecepatan" id="kecepatan" placeholder="Kecepatan" value="<?=$dataById->kecepatan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="kelincahan">Kelincahan</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="kelincahan" id="kelincahan" placeholder="Kelincahan" value="<?=$dataById->kelincahan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="koordinasi">Koordinasi</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="koordinasi" id="koordinasi" placeholder="Koordinasi" value="<?=$dataById->koordinasi_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="kekuatan">Kekuatan</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="kekuatan" id="kekuatan" placeholder="Kekuatan" value="<?=$dataById->kekuatan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="power">Power</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="power" id="power" placeholder="Power" value="<?=$dataById->power_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="daya_tahan">Daya Tahan</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="daya_tahan" id="daya_tahan" placeholder="Daya Tahan" value="<?=$dataById->daya_tahan_anak?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_potensi">Nilai Potensi</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="nilai_potensi" id="nilai_potensi" placeholder="Nilai Potensi" value="<?=$dataById->nilai_potensi_anak?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                <a href="<?php echo base_url().'anak/C_data_anak' ?>" class="btn btn-light">Batal</a>
                            <?= form_close() ?>
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

