<!-- Tabel Kriteria -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tabel Kriteria</h6>
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Tambah Kriteria</span>
        </a>
        <div class="my-2"></div>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID kriteria</th>
                    <th>Kriteria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "config.php";
                $a = "select * from tabel_kriteria";
                $b = $con->query($a);
                while ($c = $b->fetch_row()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c[0]; ?></td>
                        <td><?php echo $c[1]; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>