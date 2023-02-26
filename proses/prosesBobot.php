<?php
include "../config.php";
$kriteria = $_POST['id_kriteria'];
$bobot = $_POST['valuebobot'];

$sql = "INSERT INTO tabel_bobot (id_kriteria, valuebobot) values ('" . $kriteria . "', '" . $bobot . "')";
$a = $con->query($sql);

if ($a == true) {
    header("location:../viewBobot.php");
} else {
    echo "error";
}
