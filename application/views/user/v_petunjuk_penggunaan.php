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
                    <div class="col-12 grid-margin">
                    <div class="row">
                        <div class="col-12 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Petunjuk Pengguna</h3>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th></th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Menu Registrasi</td>
                                            <td>: </td>
                                                <td>Digunakan untuk membuat akun baru yang akan anda gunakan pada sistem aplikasi website ini</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Menu Login</td>
                                            <td>: </td>
                                                <td>Digunakan untuk masuk pada sistem aplikasi website dengan akun yang anda miliki</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Menu Lupa Password</td>
                                            <td>: </td>
                                                <td>Digunakan untuk mengubah password akun anda</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Menu Beranda</td>
                                            <td>: </td>
                                                <td>Halaman utama sistem aplikasi</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Menu Data Anak</td>
                                            <td>: </td>
                                                <td>Halaman untuk memasukan data anak baru, mengedit data anak, menghapus data anak, mengunduh data anak, dan melakukan analisis prediksi kemampuan cabang olahraga anak</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Menu Komparasi Data</td>
                                            <td>: </td>
                                                <td>Halaman untuk melakukan perbandingan beberapa data anak berdasarkan cabang olah raga</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Menu Karakteristik Penilaian</td>
                                            <td>: </td>
                                                <td>Halaman yang menampilkan beberapa karakteristik penilaian yang digunakan dalam proses analisis data setiap cabang olahraga</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Menu Panduan Penelitian</td>
                                            <td>: </td>
                                                <td>Halaman yang menjelaskan langkah penelitian yang dilakukan melalui sistem aplikasi website ini</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Menu Petunjuk Penggunaan</td>
                                            <td>: </td>
                                                <td>Halaman yang menjelaskan panduan dan deskripsi setiap menu pada sistem aplikasi website ini</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Menu Profil Peneliti</td>
                                            <td>: </td>
                                                <td>Halaman yang menunjukkan data-data peneliti</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Menu Edit Profil</td>
                                            <td>: </td>
                                                <td>Digunakan untuk mengubah data akun user anda</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Menu Ubah Password</td>
                                            <td>: </td>
                                                <td>Digunakan untuk mengubah password akun login anda</td>
                                        </tr>
                                    </tbody>
                                </table>
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

