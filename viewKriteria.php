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

                        <?php
                        include 'getData/kriteria.php'
                        ?>

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