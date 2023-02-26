<?php
include 'topbot/head.php'
?>

<body id="page-top">

    <?php
    include 'barSelect/side.php'
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php
            include 'barSelect/nav.php'
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Topsis Normalisasi</h6>
                            </div>
                            <div class="card-body">
                                <div class="my-2"></div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Penilaian</th>
                                            <th>Alternatif</th>
                                            <th>Nama Kriteria</th>
                                            <th>Value Bobot</th>
                                            <th>Nilai</th>
                                            <th>Normalisasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        include "config.php";
                                        $a = "SELECT vmatrixkeputusan.*,(vmatrixkeputusan.nilai / topsis_pembagi.bagi) AS normalisasi FROM vmatrixkeputusan, topsis_pembagi
WHERE topsis_pembagi.id_kriteria = vmatrixkeputusan.id_kriteria GROUP BY vmatrixkeputusan.id_penilaian";
                                        $b = $con->query($a);
                                        while ($c = $b->fetch_row()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $c[0]; ?></td>
                                                <td><?php echo $c[2]; ?></td>
                                                <td><?php echo $c[4]; ?></td>
                                                <td><?php echo $c[6]; ?></td>
                                                <td><?php echo $c[7]; ?></td>
                                                <td><?php echo $c[8]; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php
        include 'barSelect/copyright.php'
        ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php
    include 'topbot/foot.php'
    ?>