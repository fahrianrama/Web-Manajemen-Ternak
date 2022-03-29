<!-- Config -->
<?php
    include_once("../../../Model/database/config.php");
?>
<!-- HTML -->
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
                    <h5 class="text-dark mt-2 mb-1">Form Penambahan Data Jenis Pakan</h5>
                    <hr>
                    <form action="../../../Model/content/pakan/add_pakan.php" method="post">
                        <div class="form-group my-3">
                            <label for="jenis_pakan" class="form-label mb-2">Jenis Pakan</label>
                            <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" placeholder="Jenis Pakan" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="harga" class="form-label mb-2">Harga Per Kg</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                }
                else if($get == "form"){ 
                    $query = "SELECT * FROM jenis_pakan WHERE id_jenis_pakan = '$_GET[id]'";
                    $result = mysqli_query($mysqli, $query);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <h5 class="text-dark mt-2 mb-1">Form Edit Data Jenis Pakan</h5>
                    <hr>
                    <form action="../../../Model/content/pakan/edit_pakan.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" required>
                        <div class="form-group my-3">
                            <label for="jenis_pakan" class="form-label mb-2">Jenis Pakan</label>
                            <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" value="<?php echo $row['jenis_pakan'] ?>" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="harga" class="form-label mb-2">Harga Per Kg</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $row['harga'] ?>" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                <?php
                }
                else if($get == "adduse"){
                ?>
                    <!-- Form Add Usage -->
                    <h5 class="text-dark mt-2 mb-1">Form Penambahan Data Penggunaan Pakan</h5>
                    <hr>
                    <form action="../../../Model/content/pakan/add_pakan_usage.php" method="post">
                        <div class="form-group my-3">
                            <label for="id_jenis_pakan" class="form-label mb-2">Jenis Pakan</label>
                            <select class="form-control" id="id_jenis_pakan" name="id_jenis_pakan" required>
                                <?php
                                    $query = "SELECT * FROM jenis_pakan";
                                    $result = mysqli_query($mysqli, $query);
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<option value='$row[id_jenis_pakan]'>$row[jenis_pakan]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group my-3">
                            <label for="jumlah" class="form-label mb-2">Jumlah Pakan (Kg)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Pakan" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="tanggal" class="form-label mb-2">Tanggal Penggunaan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Penggunaan" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <?php
                }
            }
            // Content
            else{
                ?>
                    <h3 class="text-dark mt-2 mb-1">Data Jenis Pakan<span><a href="data_pakan.php?get=add"><button class="btn btn-success float-end">+ Pakan Baru</button></span></a></h3>
                    <hr>
                    <!-- Table -->
                    
                    <table class="table table-hover align-middle shadow-sm">
                        <caption >List Pakan Tersedia</caption>
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Pakan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $no = 1;
                                $query = "SELECT * FROM jenis_pakan";
                                $result = mysqli_query($mysqli, $query);
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $row['jenis_pakan'] ?></td>
                                <td>Rp. <?php echo number_format($row['harga']) ?>/Kg</td>
                                <td>
                                    <a href="data_pakan.php?id=<?php echo $row['id_jenis_pakan'] ?>&get=form" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../../../Model/content/pakan/delete_pakan.php?id=<?php echo $row['id_jenis_pakan'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                
        </div>
        <div class="container-fluid p-3 border border-2 shadow-sm mb-3 card">
            <h3 class="text-dark mt-2 mb-1">Data Penggunaan Pakan<span><a href="data_pakan.php?get=adduse"><button class="btn btn-success float-end">+ Penggunaan Pakan</button></span></a></h3>
            <hr>
            <!-- Table -->
            <table class="table table-hover align-middle shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Pakan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $total = 0;
                        $no = 1;
                        $query = "SELECT * FROM pakan_terpakai";
                        $result = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                            <?php
                            $query2 = "SELECT * FROM jenis_pakan WHERE id_jenis_pakan = '$row[id_jenis_pakan]'";
                            $result2 = mysqli_query($mysqli, $query2);
                            $row2 = mysqli_fetch_assoc($result2);
                            ?>
                            <td><?php echo $row2['jenis_pakan'];?></td>
                            <td><?php echo $row['tanggal'];?></td>
                            <td>Rp. <?php echo number_format($row2['harga']) ?>/Kg</td>
                            <td><?php echo $row['jumlah'] ?></td>
                            <td>Rp. <?php echo number_format($row2['harga'] * $row['jumlah'])?></td>
                            <?php
                                $total += $row2['harga'] * $row['jumlah'];
                            ?>
                    </tr>
                    <?php } ?>
                </tbody>
                <caption>List Penggunaan Pakan <span class="float-end fw-bold" style="color:black;">Total Penggunaan Pakan : Rp. <?php echo number_format($total) ?> </span></caption>
            </table>
        </div>
    </div>
    <?php
            }
            ?>

    <!-- Script -->
    <?php include_once("../../navbar/script.php") ?>