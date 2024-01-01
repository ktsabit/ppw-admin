<?php
require "fungsi.php";

$id = $_GET["id"];
$mhs = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href = 'admin.php';
                </script>
            ";
    }
}
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
    </div>

    <div class="main">
        <h1 class="ubah">Ubah Data User</h1>
        <div class="bio">
            <div>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                    <ul class="ul">
                        <li>
                            <label for="username">Username : </label>
                            <br>
                            <input type="text" name="username" id="username" value="<?= $mhs["username"]; ?>">
                        </li>
                        <li>
                            <label for="name">Nama : </label>
                            <br>
                            <input type="text" name="name" id="name" value="<?= $mhs["name"]; ?>">
                        </li>
                        <li>
                            <button type="submit" name="submit" class="button">Ubah Data</button>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
    </div>
</body>

</html>

