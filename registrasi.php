<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = strtolower(addslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if ($password == $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $cek_username = "SELECT username FROM registrasi WHERE username = '$username'";
        $temp = mysqli_query($conn, $cek_username);
        $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
                alert('Username ini telah digunakan!');
                document.location.href = 'registrasi.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO registrasi VALUES ('','$username','$password')";
            mysqli_query($conn, $insert_sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                        alert('Data berhasil diregistrasi!');
                        document.location.href = 'login.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data gagal diregistrasi!');
                        document.location.href = 'registrasi.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('Konfirmasi Password tidak sesuai!');
                    document.location.href = 'registrasi.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <h1>Form Registrasi</h1>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" autocomplete="off" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" autocomplete="off" required><br><br>
        <label for="cpassword">Konfirmasi Password</label><br>
        <input type="password" name="cpassword" id="cpassword" autocomplete="off" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>
</body>

</html>