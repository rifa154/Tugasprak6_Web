<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>1) Bilangan genap dari 1 sampai 10</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) echo $i . " ";
}
?>

<h2>2) Tabel Perkalian 1–10</h2>

<table>
    <tr>
        <th class="header">Bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
        ?>
    </tr>

    <?php
    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";

        echo "<td class='kolom-bilangan'>$baris</td>";

        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;

            if ($baris == 1) {
                $kelas = "kuning";
            } else {
                $kelas = "biru";
            }

            echo "<td class='$kelas'>$hasil</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>