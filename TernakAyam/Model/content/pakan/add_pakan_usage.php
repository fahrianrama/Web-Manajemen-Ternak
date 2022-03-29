<?php
    include_once("../../database/config.php");
    if(isset($_POST['submit'])){
        $id_jenis_pakan = $_POST['id_jenis_pakan'];
        $jumlah = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];
        $query = "INSERT INTO pakan_terpakai (id_jenis_pakan, jumlah, tanggal) VALUES ('$id_jenis_pakan', '$jumlah', '$tanggal')";
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