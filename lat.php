<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ================== NOMOR 1 ================== -->
<h2>1. Bilangan Genap dari 1 sampai 10</h2>

<div class="genap-box">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "<span>$i</span>";
        }
    }
    ?>
</div>

<hr>

<!-- ================== NOMOR 2 ================== -->
<h2>2. Tabel Perkalian 1 – 10</h2>

<table>
    <tr>
        <th class="header">bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
        ?>
    </tr>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th class='header'>$i</th>";

        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            $kelas = ($hasil % 2 == 1) ? "ganjil" : "genap";
            echo "<td class='$kelas'>$hasil</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
