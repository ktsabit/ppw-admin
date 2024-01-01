<?php
    require "fungsi.php";

    $kode = $_GET["id"];
    if(hapus($kode)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'admin.php';
                </script>
            ";
    }
?>