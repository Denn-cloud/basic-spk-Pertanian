<!-- Tabel Penilaian -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tabel Penilaian</h6>
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Tambah Penilaian</span>
        </a>
        <div class="my-2"></div>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Penilaian</th>
                    <th>ID Bobot</th>
                    <th>ID Alternatif</th>
                    <th>Value</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "config.php";
                $a = "select * from tabel_penilaian";
                $b = $con->query($a);
                while ($c = $b->fetch_row()) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c[0]; ?></td>
                        <td><?php echo $c[1]; ?></td>
                        <td><?php echo $c[2]; ?></td>
                        <td><?php echo $c[3]; ?></td>
                        <td><?php echo $c[4]; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>