<!DOCTYPE html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9769c63bf6.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <?php
    if(isset($_GET['hasil'])){
        $message = "Anda berhasil Logout!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>
    <!-- Login Form -->
    <div class="d-flex align-items-center justify-content-center" style="height: 622px; background-color:#563d7c;">
        <div class="rounded-3 bg-light p-4" style="height: 380px; width:350px;">
            <form action="Model/database/check_auth.php" method="POST">
                <div class="container">
                    <div class="fa-4x text-center">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <p class="fs-4 fw-bold text-center mb-4">Login</p>
                    <div class="input-group mt-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-text mb-2">Masukkan Username Anda</div>
                    <div class="input-group mt-3">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-text mb-2">Masukkan Password Anda</div>
                </div>
                <div class="d-grid p-2 my-4">
                    <button type="submit" class="btn btn-success align-self-end" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>