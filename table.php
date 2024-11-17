<?php include "database.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        table {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <a href="index.php">Kembali</a>
    <h2>Data Tabel</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data setiap baris
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["komentar"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data ditemukan</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>