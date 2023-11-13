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
              <h4>Pengguna Baru?</h4>
              <h6 class="font-weight-light">Silahkan registrasi akun baru melalui form dibawah ini.</h6>
              <form class="pt-3" method="post" action="<?= base_url('auth/C_register'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="name" name="name" value="<?= set_value('name') ?>" placeholder="Nama Lengkap">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Konfirmasi Password">
                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mb-4">
                  <table>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label text-muted">
                            <input type="checkbox" id="isQuickAccess" name="isQuickAccess" class="form-check-input">
                            Quick Access&nbsp;
                          </label>
                        </div>
                      </td>
                      <td>
                        <a data-toggle="tooltip" data-bs-placement="right" data-bs-title="Registrasi akun cepat, namun harap perhatikan bahwa fitur yang tersedia mungkin terbatas.">
                          &#9432;
                        </a>
                      </td>
                    </tr>
                  </table>
                </div>

                <div class="mt-3">
                  <Button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">DAFTAR AKUN</Button>
                </div>
                <div class="text-center mt-3 font-weight-light">
                  Apakah anda sudah punya akun? <a href="<?php echo base_url() . 'auth/C_login' ?>" class="text-primary">Masuk</a>
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

<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

</html>