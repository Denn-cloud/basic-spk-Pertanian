<?php
include "../config.php";
$kriteria = $_POST['nm_kriteria'];

$sql = "INSERT INTO tabel_Kriteria (nm_kriteria) values ('" . $kriteria . "')";
$a = $con->query($sql);

if ($a == true) {
    header("location:../viewKriteria.php");
} else {
    echo "error";
}
