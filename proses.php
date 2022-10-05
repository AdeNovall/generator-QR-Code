<?php
include "koneksi.php";
include "phpqrcode/qrlib.php";
$folderTemp = 'gbrqrcode/';
$a = $_POST{'idundangan'};
$b = $_POST{'nm'};
$c = $a;
$d = $a.".png";
$qual = 'H';
$ukuran = 6;
$padding = 0;
QRCode :: png($c,$folderTemp,$d,$ukuran,$padding);
$sql = $conn->query("INSERT INTO tbqrcode VALUES ('$a','$b','$d')");
if ($sql) {
    echo"Berhasil";
}else {
    echo "Gagal";
    die($con->error);
}

?>