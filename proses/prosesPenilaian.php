<?php
include "../config.php";
$bobot = $_POST['id_bobot'];
$alternatif = $_POST['id_daerah'];
$nilai  = $_POST['value'];
$tanggal  = $_POST['date'];

$sql = "INSERT INTO tabel_penilaian (id_bobot, id_daerah, value, tanggal) values ('" . $bobot . "', '" . $alternatif . "', '" . $nilai . "', '" . $tanggal . "')";
$a = $con->query($sql);

if ($a == true) {
    header("location:../viewPenilaian.php");
} else {
    echo "error";
}
