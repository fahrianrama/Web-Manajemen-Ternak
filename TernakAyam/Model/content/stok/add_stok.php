<?php include_once("../../database/config.php"); ?>
<?php
if(isset($_POST['submit'])){
    $faktur = $_POST['faktur'];
    $tanggal = $_POST['tanggal'];
    $stok_mingguan = $_POST['stok_mingguan'];
    $total_mingguan = $_POST['total_mingguan'];
    $telur_rusak = $_POST['telur_rusak'];
    $query = mysqli_query($mysqli, "INSERT INTO stok_telur (faktur, tanggal, stok_mingguan, total_mingguan, telur_rusak) VALUES ('$faktur', '$tanggal', '$stok_mingguan', '$total_mingguan', '$telur_rusak')");
    if($query){
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
    }
    else{
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>location='../../../View/content/stok/stok_telur.php';</script>";
    }
}
?>