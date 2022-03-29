<?php include_once("../../../Model/database/config.php"); ?>

<!DOCTYPE html>
<head>
    <title>Stok - SI Ternak Ayam</title>
    <!-- Calling Header -->
    <?php include_once("../../navbar/header.php"); ?>
</head>
<body>
    <!-- Calling Navbar -->
    <?php include_once("../../navbar/navbar.php"); ?>

    <!-- Content -->
    <div class="container-fluid border-2 p-2 shadow-sm">
        <div class="container-fluid border-2 p-3 shadow-sm mb-3 card">
    <?php
    // Form
    if(isset($_GET['get'])){
        $get = $_GET['get'];
        if($get == "add"){
            ?>
            <!-- Form Add -->
            <h5 class="text-dark mt-2 mb-1">Form Penambahan Data Stok Telur</h5>
            <hr>
            <form action="../../../Model/content/stok/add_stok.php" method="post">
                <?php 
                // Fetching data from database
                    $query = mysqli_query($mysqli, "SELECT * FROM stok_telur ORDER BY id_stok_telur DESC LIMIT 1");
                    $data = mysqli_fetch_array($query);
                    if($data == null){
                        $new_faktur = "STK-1";
                    }else{
                        $faktur = $data['faktur'];
                        $new_faktur = explode("-", $faktur);
                        $new_faktur = "STK-".($new_faktur[1]+1);
                    }
                ?>
                <div class="form-group my-3">
                    <label for="faktur" class="form-label">Faktur</label>
                    <input type="text" class="form-control" id="faktur" name="faktur" value="<?php echo $new_faktur; ?>" readonly>
                </div>
                <div class="form-group my-3">
                    <label for="tanggal" class="form-label mb-2">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                </div>
                <div class="form-group my-3">
                    <label for="stok_mingguan" class="form-label mb-2">Stok Mingguan</label>
                    <input type="number" class="form-control" id="stok_mingguan" name="stok_mingguan" placeholder="Stok Mingguan" required>
                </div>
                <div class="form-group my-3">
                    <label for="total_mingguan" class="form-label mb-2">Total Mingguan</label>
                    <input type="number" class="form-control" id="total_mingguan" name="total_mingguan" placeholder="Total Mingguan" required>
                </div>
                <div class="form-group my-3">
                    <label for="telur_rusak" class="form-label mb-2">Telur Rusak</label>
                    <input type="number" class="form-control" id="telur_rusak" name="telur_rusak" placeholder="Telur Rusak" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
        }
        else if($get == 'edit'){
            $id = $_GET['id'];
            $query = mysqli_query($mysqli, "SELECT * FROM stok_telur WHERE id_stok_telur = '$id'");
            $data = mysqli_fetch_array($query);
            ?>
            <!-- Form Edit -->
            <h5 class="text-dark mt-2 mb-1">Form Edit Data Stok Telur</h5>
            <hr>
            <form action="../../../Model/content/stok/edit_stok.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id_stok_telur']; ?>">
                <div class="form-group my-3">
                    <label for="faktur" class="form-label mb-2">Faktur</label>
                    <input type="text" class="form-control" id="faktur" name="faktur" placeholder="Faktur" value="<?php echo $data['faktur']; ?>" readonly>
                </div>
                <div class="form-group my-3">
                    <label for="tanggal" class="form-label mb-2">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tanggal']; ?>" required>
                </div>
                <div class="form-group my-3">
                    <label for="stok_mingguan" class="form-label mb-2">Stok Mingguan</label>
                    <input type="number" class="form-control" id="stok_mingguan" name="stok_mingguan" placeholder="Stok Mingguan" value="<?php echo $data['stok_mingguan']; ?>" required>
                </div>
                <div class="form-group my-3">
                    <label for="total_mingguan" class="form-label mb-2">Total Mingguan</label>
                    <input type="number" class="form-control" id="total_mingguan" name="total_mingguan" placeholder="Total Mingguan" value="<?php echo $data['total_mingguan']; ?>" required>
                </div>
                <div class="form-group my-3">
                    <label for="telur_rusak" class="form-label mb-2">Telur Rusak</label>
                    <input type="number" class="form-control" id="telur_rusak" name="telur_rusak" placeholder="Telur Rusak" value="<?php echo $data['telur_rusak']; ?>" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
        }
    }
    else{
    ?>
            <h3 class="text-dark mt-2 mb-3">Stok Telur Peternakan <span><a href="stok_telur.php?get=add"><button class="btn btn-success float-end">+ Stok Baru</button></a></span> </h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Faktur</th>
                                    <th>Tanggal</th>
                                    <th>Stok Mingguan</th>
                                    <th>Total Mingguan</th>
                                    <th>Telur Rusak</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = "SELECT * FROM stok_telur";
                                $result = mysqli_query($mysqli, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['faktur'] ?></td>
                                    <td><?php echo $row['tanggal'] ?></td>
                                    <td><?php echo number_format($row['stok_mingguan']) ?></td>
                                    <td>Rp. <?php echo number_format($row['total_mingguan']) ?></td>
                                    <td><?php echo number_format($row['telur_rusak']) ?></td>
                                    <td>
                                        <a href="stok_telur.php?get=edit&id=<?php echo $row['id_stok_telur'] ?>"><button class="btn btn-warning">Edit</button></a>
                                        <a href="../../../Model/content/stok/delete_stok.php?id=<?php echo $row['id_stok_telur'] ?>"><button class="btn btn-danger">Hapus</button></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
            
        </div>
    </div>
    <?php
    }
    ?>
    <!-- Calling Script -->
    <?php include_once("../../navbar/script.php"); ?>
</body>