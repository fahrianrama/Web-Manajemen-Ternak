<?php
    include_once("../../database/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query1 = "DELETE FROM pakan_terpakai WHERE id_jenis_pakan = '$id'";
        $result1 = mysqli_query($mysqli, $query1);
        $query2 = "DELETE FROM jenis_pakan WHERE id_jenis_pakan = '$id'";
        $result2 = mysqli_query($mysqli, $query2);
        if($result2){
            echo "<script>alert('Data berhasil dihapus');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }else{
            echo "<script>alert('Data gagal dihapus');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }
    }
?>