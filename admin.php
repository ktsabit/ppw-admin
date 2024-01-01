<?php
require "fungsi.php";

// $data = mysqli_query($konek, "SELECT * FROM users");
$data = query("SELECT * FROM users");

if (isset($_POST["cari"])) {
    $data = cari($_POST["keyword"]);
}
?>

<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="gbr">
        <img src="rawr.png" alt="" class="pic">
        <h3 class="min">ADMIN</h3>
        <!-- <h3 class="min">Logout</h3> -->
    </div>

    <div>
        <h1 class="teks">Data User</h1>
        <a href="tambah.php" class="button">Tambah User</a>

        <form action="" method="POST" class="form">
            <input type="text" name="keyword" placeholder="Search" autocomplete="off" class="input">
            <button type="submit" name="cari" class="cari">Cari</button>
        </form>

        <table class="tabel">
            <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Created At</th>
                <th></th>
            </tr>

            <?php $i = 1; ?>
            <?php
            foreach ($data as $row) :
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["created_at"] ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"] ?>" class="btn">Edit</a>
                        <a href="hapus.php?id=<?= $row["id"] ?>" class="bttn">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>