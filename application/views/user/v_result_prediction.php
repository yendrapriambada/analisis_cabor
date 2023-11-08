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
                                    <h3 class="font-weight-bold">Hasil Prediksi Sport Talent</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->session->userdata('role_id') == NULL ) { ?>
                            <h3 class="text-warning"> Anda harus mendaftar akun dan login terlebih dahulu untuk melihat detail hasil prediksi</h3>
                    <?php } else {?>
                    <div class="row">
                        <div class="col-md-8 grid-margin ">
                            <div class="card">
                                <div class="card-body mt-auto">
                                    <canvas id="radarChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-12 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-3">Kategori</p>
                                            <p class="fs-30 font-weight-500 mb-2">Sangat Potensial</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-3">Rekomendasi Cabang Olahraga</p>
                                            <p class="fs-30 font-weight-500 mb-2">Sepak Bola</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Detail Data Anak</p>
                                    <p class="font-weight-500 mb-4">Dibawah ini merupakan detail kemampuan anak</p>
                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Aspek</th>
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Search Engine Marketing</td>
                                                <td class="font-weight-bold">$362</td>
                                            </tr>
                                            <tr>
                                                <td>Search Engine Optimization</td>
                                                <td class="font-weight-bold">$116</td>
                                            </tr>
                                            <tr>
                                                <td>Display Advertising</td>
                                                <td class="font-weight-bold">$551</td>
                                            </tr>
                                            <tr>
                                                <td>Pay Per Click Advertising</td>
                                                <td class="font-weight-bold">$523</td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail Marketing</td>
                                                <td class="font-weight-bold">$781</td>
                                            </tr>
                                            <tr>
                                                <td>Referral Marketing</td>
                                                <td class="font-weight-bold">$283</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Penjelasan</p>
                                        <a href="#" class="text-info">View all</a>
                                    </div>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                                    <canvas id="sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script>
        //radar
        var ctxR = document.getElementById("radarChart").getContext('2d');
        var myRadarChart = new Chart(ctxR, {
            type: 'radar',
            data: {
                labels: ["Kecepatan", "Kelincahan", "Koordinasi", "Kekuatan", "Power", "Daya Tahan"],
                datasets: [{
                    label: "Statistik Biomotorik",
                    data: [85, 70, 60, 86, 35, 80],
                    backgroundColor: [
                        'rgba(0, 250, 220, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 213, 132, .7)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
    <!-- javascript -->
    <?php $this->load->view('layout/javascript') ?>
    <!-- end javascript -->

</body>

</html>