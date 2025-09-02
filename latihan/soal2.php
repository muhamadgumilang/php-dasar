<?php
$username1 = "admin";
$password1 = "12345";
$username2 = "siswa";
$password2 = "18";

if ($username1 == "admin"){
    if ($password1 == "12345") {
        echo "<br> Login berhasil";
    }else {
        echo "password salah";
    }
 } else {
        echo "Usernme tidak ditemukan";
}

if ($username2 == "siswa"){
    if ($password2 == "17") {
        echo "<br> Login berhasil";
    }else {
        echo " <br>password salah";
    }
 } else {
        echo "<br> Usernme tidak ditemukan";
}