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
                            <h4>Ubah Password</h4>
                            <h6 class="font-weight-light">Silakan isi password baru anda.</h6>

                            <?= $this->session->flashdata('message'); ?>

                            <?php echo form_open('auth/C_lupa_password/changePassword/'); ?>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password1" name="password1" value="<?php echo set_value('password1'); ?>" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password2" name="password2" value="<?php echo set_value('password2'); ?>" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="mt-3">
                                <Button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="btnSubmit" value="Reset">Reset Password</Button>
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