<?php 
    include_once("../../../Model/database/Config.php");
?>

<!DOCTYPE html>
<head>
    <title>Data - SI Ternak Ayam</title>
    <?php include_once("../../navbar/header.php")?>
</head>
<body>
    <!-- Calling Navbar -->
    <?php include_once("../../navbar/navbar.php") ?>
    <!-- Content -->
    <div class="container-fluid p-3 border shadow-sm border-2">
        <div class="container-fluid p-3 border border-2 shadow-sm mb-3 card">
            <?php
            if (isset($_GET['get'])){
                $get = $_GET['get'];
                if($get == 'add'){
                    ?>
                    <!-- Form Add -->
                    <h5 class="text-dark mt-2 mb-1">Form Penambahan Order</h5>
                    <hr>
                    <form action="../../../Model/content/order/add_order.php" method="post">
                        <div class="form-group my-3">
                            <label for="nama_customer" class="form-label mb-2">Nama Customer</label>
                            <input type="text" class="form-control" id="nama_customer" name="nama" placeholder="Nama Customer" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="tanggal" class="form-label mb-2">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="kategori" class="form-label mb-2">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="berat" class="form-label mb-2">Berat</label>
                            <input type="number" class="form-control" id="berat" name="berat" placeholder="Berat" step="0.1" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="harga" class="form-label mb-2">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                <?php
                }
            }
            else{
                ?>
                <h3 class="mt-2 mb-1">Data Rincian Customer Akhir<span>
                    <a href="customers.php?get=add"><button class="btn btn-success float-end">Tambah Order</button>
                </span></a></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover text-center" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Berat</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total = 0;
                                $query = mysqli_query($mysqli, "SELECT * FROM order_telur ORDER BY tanggal ASC");
                                while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['kategori'];?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['berat']; ?> Kg</td>
                                    <td>Rp. <?php echo number_format($data['harga']); ?></td>
                                </tr>
                                <?php
                                    $total = $total + $data['harga'];
                                }
                                ?>
                            </tbody>
                            <caption>List Pembelian <span class="float-end fw-bold" style="color: black;">Total Pembelian : Rp.<?php echo number_format($total) ?></span></caption>
                        </table>
                </div>
                
            <?php
            }
            ?>
        </div>
    </div>
    <!-- Script -->
    <?php include_once("../../navbar/script.php") ?>