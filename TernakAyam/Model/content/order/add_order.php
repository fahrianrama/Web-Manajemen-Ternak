<?php 
    include_once("../../database/config.php");
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $kategori = $_POST['kategori'];
        $berat = $_POST['berat'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO order_telur (nama, kategori, tanggal, berat, harga) VALUES ('$nama', '$kategori', '$tanggal', '$berat', '$harga')";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>location='../../../View/content/customers/customers.php';</script>";
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
            echo "<script>location='../../../View/content/customers/customers.php';</script>";
        }
    }
?>