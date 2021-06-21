<?php

// koneksi ke database (""  merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
// cek kneksi ke Database
// Apabila eror 
if (mysqli_connect_errno()) {
    echo "koneksi database gagal : ".mysqli_connect_error();
}

