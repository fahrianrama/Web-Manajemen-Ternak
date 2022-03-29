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
            // Form
            if(isset($_GET['get'])){
                $get = $_GET['get'];
                if($get == "add"){
                    ?>
                    <!-- Form Add -->
                    <h5 class="text-dark">Form Penambahan Data Ayam</h5>
                    <hr>
                    <form action="../../../Model/content/ayam/add_ayam.php" method="post">
                        <div class="form-group my-3">
                            <label for="tanggal" class="form-label mb-2">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="harga" class="form-label mb-2">Harga Satuan</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="jumlah" class="form-label mb-2">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                }
                else if($get == "form"){ 
                    $query = "SELECT * FROM tb_ayam WHERE id_ayam = '$_GET[id]'";
                    $result = mysqli_query($mysqli, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <!-- Form Edit -->
                    <h5 class="text-dark">Form Edit Data Ayam</h5>
                    <hr>
                    <form action="../../../Model/content/ayam/edit_ayam.php?id=<?php echo $_GET['id'] ?>" method="post">
                        <div class="form-group my-3">
                            <label for="tanggal" class="form-label mb-2">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tanggal'] ?>" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="harga" class="form-label mb-2">Harga Satuan</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $data['harga'] ?>" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="jumlah" class="form-label mb-2">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" value="<?php echo $data['jumlah'] ?>" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <?php
                }
            }
            else{
                ?>
                <h3 class="text-dark mt-2 mb-1">Data Ayam<span>
                    <a href="data_ayam.php?get=add"><button class="btn btn-success float-end">Tambah Data</button>
                    </span></a></h3>
                <hr>
                <table class="table table-hover align-middle shadow-sm my-2">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pembelian</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $no = 1;
                            $query = "SELECT * FROM tb_ayam";
                            $result = mysqli_query($mysqli, $query);
                            $total = 0;
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td>Rp. <?php echo number_format($row['harga']) ?></td>
                            <td><?php echo $row['jumlah'] ?></td>
                            <td>Rp. <?php echo number_format($row['harga'] * $row['jumlah']) ?></td>
                            <?php $total += $row['harga'] * $row['jumlah'] ?>
                            <td>
                                <a href="data_ayam.php?id=<?php echo $row['id_ayam'] ?>&get=form" class="btn btn-warning btn-sm">Edit</a>
                                <a href="../../../Model/content/ayam/delete_ayam.php?id=<?php echo $row['id_ayam'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <caption class="mt-2">List Data Ayam<span class="fw-bold float-end" style="color:black;">Total Modal Ayam : Rp. <?php echo number_format($total); ?> </span></caption>
                </table>
            </div>
        </div>
    <?php } ?>
    <!-- Footer -->

    <!-- Script -->
    <?php include_once("../../navbar/script.php") ?>