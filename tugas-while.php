<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan While</title>
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
            background: #6cdce2ff;
        }
    </style>
</head>
<body>

<h2>tabel perkalian perulangan while 1x1 sampai 1x10</h2>

<table>
    <thead>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1; // Inisialisasi counter

        // Mulai perulangan while di sini
        while ($angka <= 10) {
            $hasil = 3 * $angka;
            // Cetak baris tabel di sini
            echo "<tr>";
            echo "<td>3 x " . $angka . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";

            $angka++; // Increment counter
        }
        // Akhir perulangan while
        ?>
    </tbody>
</table>

</body>
</html>
