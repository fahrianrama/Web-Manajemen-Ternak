<?php include_once("../../database/config.php"); ?>
<?php
if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $stok_mingguan = $_POST['stok_mingguan'];
    $total_mingguan = $_POST['total_mingguan'];
    $telur_rusak = $_POST['telur_rusak'];
    $query = mysqli_query($mysqli, "UPDATE stok_telur SET  tanggal = '$tanggal', stok_mingguan = '$stok_mingguan', total_mingguan = '$total_mingguan', telur_rusak = '$telur_rusak' WHERE id_stok_telur = '$id'");
    if($query){
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
    }
    else{
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
    }
}