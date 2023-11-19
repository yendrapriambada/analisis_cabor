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
                            <h4>Lupa Password</h4>
                            <h6 class="font-weight-light">Untuk melakukan reset password, silakan masukkan alamat email anda.</h6>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="pt-3" method="post" action="<?= base_url('auth/C_lupa_password');  ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="email_user" name="email_user" value="<?= set_value('email_user') ?>" placeholder="Email">
                                    <?= form_error('email_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <Button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Reset Password</Button>
                                </div>
                            </form>
                            <div class="text-center mt-3 font-weight-light">
                                Kembali untuk <a href="<?php echo base_url() . 'auth/C_login' ?>" class="text-primary">Login</a>
                            </div>
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