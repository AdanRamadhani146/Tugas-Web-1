<?php
require 'koneksi.php';

$id = $_GET["id"];

$select_sql = "SELECT * FROM listgame WHERE id = $id";
$result = mysqli_query($conn, $select_sql);

$list = [];

while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}

$list = $list[0];

if (isset($_POST["update"])) {
    $nama_game = htmlspecialchars($_POST["nama_game"]);
    $tgl_liris = htmlspecialchars($_POST["tgl_liris"]);
    $game_mode = htmlspecialchars($_POST["game_mode"]);
    $platform = htmlspecialchars($_POST["platform"]);
    $genre = htmlspecialchars($_POST["genre"]);

    $update_sql = "UPDATE listgame SET nama_game='$nama_game',tgl_liris='$tgl_liris',game_mode='$game_mode',platform='$platform',genre='$genre' WHERE id=$id";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diupdate!');
            document.location.href = 'update.php';
        </script>";
    }
}
?>

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>FORM UPDATE DATA</h2>
            </div>
            <input type="hidden" name="id" value="<?= $list["id"]; ?>>
            <div class=" form-content">

            <div class="form-area">
                <div class="form-label">
                    <label for="">Nama Game :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="nama_game" value="<?= $list["nama_game"]; ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-area">
                <div class="form-label">
                    <label for="">Tanggal Liris :</label>
                </div>
                <div class="form-input">
                    <input type="date" name="tgl_liris" value="<?= $list["tgl_liris"]; ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-area">
                <div class="form-label">
                    <label for="">Game Mode :</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="game_mode" <?= $list['game_mode'] == "Single Player" ? "checked" : "" ?> value="Single Player">
                    <label for="">Single Player</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="game_mode" <?= $list['game_mode'] == "Multi Player" ? "checked" : "" ?> value="Multi Player">
                    <label for="">Multi Player</label>
                </div>
            </div>

            <div class="form-area">
                <div class="form-label">
                    <label for="">Platform :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="platform" value="<?= $list["platform"]; ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-area">
                <div class="form-label">
                    <label for="">Genre :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="genre" value="<?= $list["genre"]; ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-button">
                <button type="submit" name="update">Update</button>
                <a href="index.php">Kembali ke Home</a>
            </div>
    </div>
    </form>
    </div>
</body>

</html>