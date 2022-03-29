<?php include_once("../../database/config.php"); ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($mysqli, "DELETE FROM stok_telur WHERE id_stok_telur = '$id'");
if($query){
    echo "<script>alert('Data Berhasil Dihapus');</script>";
    echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');</script>";
    echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
}
?>