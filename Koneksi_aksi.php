<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sistem</title>
</head>
<body>
    <?php
    //mulai session
    session_start();

    //konek ke database
    include 'config.php';

    // amnil data dari form login
    $username=$_POST['nama'];
    $password=$_POST['password'];

    //querry
    $data=mysql_querry($varKoneksi, "select * from daftar where uusername = '$username' and upassword = '$password'")

    //cek data
    $cek=mysqli_num_rows($data);
    if($cek>0){
        $_SESSION['username']=$username;
        $SESSION['status']='login';
        header('location:admin/index.php)')
    }
</body>
</html>