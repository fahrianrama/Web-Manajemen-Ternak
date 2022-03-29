<!-- Create connection -->
<?php 
include_once("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fetch = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'") 
             or die('Ada kesalahan pada query : '.mysqli_error($mysqli));
    if($fetch){
        header("Location: ../../View/content/landing/landing.php");
    }
}