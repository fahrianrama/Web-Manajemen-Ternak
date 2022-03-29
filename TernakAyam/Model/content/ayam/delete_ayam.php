<?php
    include_once("../../database/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tb_ayam WHERE id_ayam = '$id'";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data berhasil dihapus');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
        else{
            echo "<script>alert('Data gagal dihapus');</script>";
            echo "<script>location='../../../View/content/ayam/data_ayam.php';</script>";
        }
    }
?>