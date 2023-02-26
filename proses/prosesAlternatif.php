<?php
include "../config.php";
$alternatif = $_POST['nm_daerah'];

$sql = "INSERT INTO tabel_alternatif (nm_daerah, desa) values ('" . $alternatif . "')";
$a = $con->query($sql);

if ($a == true) {
    header("location:../viewAlternatif.php");
} else {
    echo "error";
}
