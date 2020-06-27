<?php

// Koneksikan ke database dengan mysqli atau PDO
$conn = mysqli_connect("localhost", "root", "", "db_simple_auth") OR DIE ("Failed Connection");

function register($data){
    global $conn;

    // strlower -> memaksa user menggunakan huruf kecil
    // stripcslasshes -> menghilangkan /
    $username = strtolower(stripcslashes($data['username']));
    // mysqli_real_escape_string -> menjadikan password sebagai string
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    // ambil data berdasarkan nama field
    if( mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username has already taken')
            </script>";
        // berhentikan script sampai sini
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2){
        echo "<script>
                alert('doesn\'t match Password')
                </script>";
        return false;     
    }

    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
?>