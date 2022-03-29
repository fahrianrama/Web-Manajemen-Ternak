<?php 
    include_once("../../database/config.php");
    if(isset($_POST['submit'])){
        $tanggal = $_POST['tanggal'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $query = "INSERT INTO tb_ayam (tanggal, harga, jumlah) VALUES ('$tanggal', '$harga', '$jumlah')";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
        else{
            echo "<script>alert('Data Gagal Ditambahkan');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
    }
?>