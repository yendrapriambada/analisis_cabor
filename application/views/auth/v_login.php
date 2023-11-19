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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="<?= base_url('C_index/beranda');  ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
              </div>
              <h4>Halo!</h4>
              <h6 class="font-weight-light">Silahkan Log in untuk masuk aplikasi.</h6>

              <?= $this->session->flashdata('message'); ?>

              <form class="pt-3" method="post" action="<?= base_url('auth/C_login');  ?>">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email_user" name="email_user" value="<?= set_value('email') ?>" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password_user" name="password_user" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mt-3">
                  <Button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOG IN</Button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <a href="<?php echo base_url() . 'auth/C_lupa_password' ?>" class="mt-0 text-primary auth-link text-black">Lupa Password?</a>
                </div>
                <div class="text-center mt-3 font-weight-light">
                  Apakah anda belum mempunyai akun? <a href="<?php echo base_url() . 'auth/C_register' ?>" class="text-primary">Buat Akun</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- javascript -->
  <?php $this->load->view('layout/javascript') ?>
  <!-- end javascript -->
</body>

</html>