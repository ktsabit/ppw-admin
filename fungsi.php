<?php
// $konek = mysqli_connect("localhost", "root", "", "test");
$konek = mysqli_connect('103.150.196.125', 'kaisan', 'password', 'social_media');

// function tambah($data){
//     global $konek;
    
//     $name = $data["name"];
//     $uname = $data["username"];
//     $pw = $data["password"];

//     $query = "INSERT INTO users (name, username, password) VALUES ('$name', '$uname', '$pw')";
//     mysqli_query($konek, $query);

//     return mysqli_affected_rows($konek);
// }

function tambah($data){
    global $konek;

    $name = $data["name"];
    $uname = $data["username"];
    $pw = $data["password"];

    $hashed_password = password_hash($pw, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(name, username, password) VALUES(?, ?, ?)";
    $stmt = mysqli_prepare($konek, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $uname, $hashed_password);
    try {
        mysqli_stmt_execute($stmt);

    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            return -1;
        } else {
            throw $e;
        }
    }

    return mysqli_insert_id($konek);
}

function hapus($kode){
    global $konek;
    mysqli_query($konek, "DELETE FROM users WHERE id = $kode");

    return mysqli_affected_rows($konek);
}

function query($query){
    global $konek;
    
    $result = mysqli_query($konek, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data){
    global $konek;

    $id = $data["id"];
    $uname = $data["username"];
    $name = $data["name"];

    $query = "UPDATE users SET
                username = '$uname',
                name = '$name'
            WHERE id = $id
            ";

    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
?>