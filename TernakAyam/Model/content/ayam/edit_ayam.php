<?php
    include_once("../../database/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $tanggal = $_POST['tanggal'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $query = "UPDATE tb_ayam SET tanggal = '$tanggal', harga = '$harga', jumlah = '$jumlah' WHERE id_ayam = '$id'";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data Berhasil Diubah');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
        else{
            echo "<script>alert('Data Gagal Diubah');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
    }
?>