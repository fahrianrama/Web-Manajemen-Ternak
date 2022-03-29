<?php 
    include_once("../../database/config.php");
    if(isset($_POST['submit'])){
        $jenis_pakan = $_POST['jenis_pakan'];
        $harga = $_POST['harga'];
        $query = "UPDATE jenis_pakan SET jenis_pakan = '$jenis_pakan', harga = '$harga' WHERE id_jenis_pakan = '$_POST[id]'";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data berhasil diubah');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }else{
            echo "<script>alert('Data gagal diubah');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }
    }
?>