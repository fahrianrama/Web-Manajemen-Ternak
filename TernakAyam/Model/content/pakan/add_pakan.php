<?php
    include_once("../../database/config.php");
    if(isset($_POST['submit'])){
        $jenis_pakan = $_POST['jenis_pakan'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO jenis_pakan (jenis_pakan, harga) VALUES ('$jenis_pakan', '$harga')";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
            echo "<script>location='../../../View/content/pakan/data_pakan.php';</script>";
        }
    }
?>