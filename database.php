<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "buku_tamu"; 

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    if(isset($_POST['submit'])) {
        $username = $_POST['nama'];
        $komentar = $_POST['komentar'];

        mysqli_query($conn, "insert into pengunjung (nama, komentar) VALUES ('$username', '$komentar')");
    }

    $sql = "SELECT id, nama, komentar FROM pengunjung";
    $result = $conn->query($sql);
?>