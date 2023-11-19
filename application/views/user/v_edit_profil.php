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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Profil Akun</h4>
                                    <!-- <p class="card-description"> Edit Data Anak/Responden</p> -->
                                    <p>(<span class="text-danger">*</span>) : formulir isian wajib di isi.</p>
                                    <?= $this->session->flashdata('message'); ?>
                                    <?= form_open_multipart('user/C_index_user/editProfil'); ?>
                                    <div class="form-group">
                                        <label for="nama">Email</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="email_user" id="email_user" value="<?= $user['email_user'] ?>" readonly>
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="name_user" id="name_user" value="<?= $user['name_user'] ?>">
                                        <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="berat_badan">Password</label><span class="text-danger">*</span>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div> -->
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="<?php echo base_url() . 'user/C_index_user/beranda' ?>" class="btn btn-light">Cancel</a>
                                    <?= form_close(); ?>
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

</body>

</html>