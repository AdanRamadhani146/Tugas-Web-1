<?php
require 'koneksi.php';
$select_sql = "SELECT *FROM listgame";
$result = mysqli_query($conn, $select_sql);

if (!$result) {
    echo mysqli_error($conn);
}

$listgame = [];

while ($row = mysqli_fetch_assoc($result)) {
    $listgame[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HOME</title>
</head>

<body>
    <section class="content">
        <h1 class="title">DAFTAR GAME KUALITAS HD</h1>
        <a href="create.php"><button class="create"><i class="fas fa-plus"></i> Tambah Game</button></a>

        <table border="1" cellpadding="5">
            <tr>
                <th>NO</th>
                <th>NAMA GAME</th>
                <th>TANGGAL LIRIS</th>
                <th>GAME MODE</th>
                <th>PLATFORM</th>
                <th>GENRE</th>
                <th>ACTION</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($listgame as $list) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $list["nama_game"] ?></td>
                    <td><?= $list["tgl_liris"] ?></td>
                    <td><?= $list["game_mode"] ?></td>
                    <td><?= $list["platform"] ?></td>
                    <td><?= $list["genre"] ?></td>
                    <td><a href="update.php?id=<?= $list["id"]; ?>"><button class="update"><i class="fas fa-pen"></i></button></a>
                        <a href="delete.php?id=<?= $list["id"]; ?>"><button class="delete"><i class="fas fa-trash"></i></button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <a href="logout.php"><button class="form-button"><i class=""></i>logout</button></a>
    </section>
</body>

</html>