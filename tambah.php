<?php
    require "fungsi.php";

    if(isset($_POST["submit"])){
        if (tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan');
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
        <h1 class="ubah">Tambah Data User</h1>
        <div class="bio">
            <div>
                <form action="" method="POST">
                    <input type="hidden" name="id">
                    <ul class="ul">
                        <li>
                            <label for="name">Nama : </label>
                            <br>
                            <input type="text" name="name" id="name">
                        </li>
                        <li>
                            <label for="username">Username : </label>
                            <br>
                            <input type="text" name="username" id="username">
                        </li>
                        <li>
                            <label for="password">Password : </label>
                            <br>
                            <input type="text" name="password" id="password">
                        </li>
                        <li>
                            <button type="submit" name="submit" class="button">Tambah Data</button>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
    </div>
    </body>
</html>