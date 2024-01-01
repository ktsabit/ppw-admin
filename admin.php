<?php
require "fungsi.php";

$data = mysqli_query($konek, "SELECT * FROM users");
?>

<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css" />
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

        <table class="tabel">
            <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Settings</th>
            </tr>

            <?php $i = 1; ?>
            <?php
            while ($row = mysqli_fetch_assoc($data)) :
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["created_at"] ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]?>" class="btn">Ubah</a>
                        <a href="hapus.php?id=<?= $row["id"]?>" class="bttn">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>