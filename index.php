<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sistem Login</h2>
    <?php

    if(isset($_GET['pesan']))
        {
                if (isset['pesan']=='gagal')
            {
                echo "gagal login, user atau password salah";
            }         
            else
                if($_GET['pesan']=='logout')
            {
                echo "Anda Sudah Logout";
            }
                    if ($_GET['pesan']=='belum_login')
            {
                echo "Anda Harus Login";
            }
        }
    ?>
    <form action="login_aksi.php" method="post">
    <table align ="center">
        <tr>
            <td>Username</td>
            <td> <input type ="text" name ="nama" placeholder ="Masukkan Username"> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type ="Password" name ="Password" placeholder ="Masukkan Password"></td>
        </tr>
        <tr>
            <td><input type ="submit" value ="LOGIN"></td>
        </tr>
    </table>
    </form>
</body>
</html>