<?php
include ("koneksi.php");
if(isset ($_POST['simpan'])){
    $Nama =$_POST['Nama'];
    $Jenis =$_POST['Jenis'];

$sql ="INSERT INTO tb_parkir(jenis_kendaraan, tarif_harga) VALUES ('$Nama', '$Jenis')";
$query =mysqli_query($db, $sql);
}
?>