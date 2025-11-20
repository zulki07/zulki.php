<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan For</title>
    <style>
            body {
            background: #e5f6ff; 
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 350px;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #8dd2e7ff;
        }
    </style>
</head>
<body>

<h2>tugas perulangan for tabel angka 1-15</h2>

<table>
    <thead>
        <tr>
            <th>Nomor Urut</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Mulai perulangan for di sini
        for ($i = 1; $i <= 15; $i++) {
            // Cetak baris tabel di sini
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>Ini adalah baris ke-" . $i . "</td>";
            echo "</tr>";
        }
        // Akhir perulangan for
        ?>
    </tbody>
</table>

</body>
</html>
