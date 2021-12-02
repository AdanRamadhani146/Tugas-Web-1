<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama_game = htmlspecialchars($_POST["nama_game"]);
    $tgl_liris = htmlspecialchars($_POST["tgl_liris"]);
    $game_mode = htmlspecialchars($_POST["game_mode"]);
    $platform = htmlspecialchars($_POST["platform"]);
    $genre = htmlspecialchars($_POST["genre"]);

    $insert_sql = "INSERT INTO listgame VALUES ('','$nama_game','$tgl_liris','$game_mode','$platform','$genre')";
    $result = mysqli_query($conn, $insert_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'create.php';
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
    <link rel="stylesheet" href="style.css">
    <title>CREATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>FORM TAMBAH DATA GAME</h2>
            </div>
            <div class="form-content">
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Nama Game :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="nama_game" autocomplete="off">
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="">Tanggal Liris :</label>
                    </div>
                    <div class="form-input">
                        <input type="date" name="tgl_liris" autocomplete="off">
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="">Game Mode :</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="game_mode" value="Single Player" checked>
                        <label for="">Single Player</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="game_mode" value="Multi Player">
                        <label for="">Multi Player</label>
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="">Platform :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="platform" autocomplete="off">
                    </div>
                </div>

                <div class="form-area">
                    <div class="form-label">
                        <label for="">Genre :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="genre" autocomplete="off">
                    </div>
                </div>

                <div class="form-button">
                    <button type="submit" name="submit">Submit</button>
                    <a href="index.php">Kembali ke Home</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>