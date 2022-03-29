<?php
    include_once("../../../Model/database/config.php")
?>
<!-- Query -->
<?php 
    $totalpakan = 0;
    $totalmodal = 0;
    $totalorder = 0;

    $query = "SELECT * FROM order_telur";
    $result = mysqli_query($mysqli, $query);
    
    while($row = mysqli_fetch_array($result)){
        $totalorder = $totalorder + $row['harga'];
    }
    $query = "SELECT * FROM pakan_terpakai";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result)){
        $query2 = "SELECT * FROM jenis_pakan WHERE id_jenis_pakan = '$row[id_jenis_pakan]'";
        $result2 = mysqli_query($mysqli, $query2);
        $row2 = mysqli_fetch_assoc($result2);
        $totalpakan += $row2['harga'] * $row['jumlah'];
    }
    $query = "SELECT * FROM tb_ayam";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result)){
        $totalmodal += $row['harga'] * $row['jumlah'];
    }    
    ?>
<!DOCTYPE html>
<head>
    <title>Home - SI Ternak Ayam</title>
    <?php include_once("../../navbar/header.php")?>
</head>
<body>
    <!-- Calling Navbar -->
    <?php include_once("../../navbar/navbar.php") ?>
    <!-- Content -->
    <div class="container-fluid bg-light text-dark p-1 d-flex flex-row bd-highlight justify-content-start" style="min-width:700px;">
        <div class="container-fluid p-3 bg-light text-dark border border-2 rounded shadow-sm mb-2" >
            <div class="col-md-12 mb-5" style="text-shadow: 2px 2px #e8e6e6;">
                    <h1 class="text-center">Manajemen Peternakan</h1>
                    <p class="text-center">Oleh : Martharissa Dwi Ayu Safitri (E31192214)</p>
            </div>
            <div class="card mb-3" style="width:fit-content">
                <img src="https://www.drapervalleyfarms.com/media/1049/roxy-mobile-header.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">Sistem Informasi Ternak Ayam</h5>
                    <p class="card-text">Pengelolaan sistem informasi ternak ayam petelur adalah sebuah sistem yang digunakan untuk memberitahu pengelola mengenai keadaan dari stok peliharaan dan hasilnya, obat-obatan, serta customer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Laporan Keuangan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Laporan Keuangan Sistem Informasi Ternak Ayam</h5>
                    <p class="card-text">Berikut merupakan total dana yang telah direkap pada sistem.</p>
                    <button type="button" class="btn btn-primary mb-2 fw-bold">Total Modal Ayam : Rp.<?php echo number_format($totalmodal)?></button> <br>
                    <button type="button" class="btn btn-primary mb-2 fw-bold">Total Penggunaan Pakan : Rp.<?php echo number_format($totalpakan)?></button> <br>
                    <button type="button" class="btn btn-primary mb-2 fw-bold">Total Penghasilan Penjualan : Rp.<?php echo number_format($totalorder)?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php include_once("../../navbar/script.php") ?>
</body>