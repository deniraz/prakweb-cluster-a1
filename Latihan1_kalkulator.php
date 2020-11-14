<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Praktikum 2</title>
</head>

<body>

    <article>
        <?php
        if (isset($_POST['calculate'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];

            $plus = $bil1 + $bil2;
            $min = $bil1 - $bil2;
            $mul = $bil1 * $bil2;
            $div = $bil1 / $bil2;
            $mod = $bil1 % $bil2;
        }
        ?>
        <div class="kalkulator">
            <h1 class="judul">KALKULATOR</h1>

            <form method="post" action="Latihan1_kalkulator.php">
                <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Your first operand here">
                <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Your second operand here">

                <input type="submit" name="calculate" value="Calculate!" class="tombol">
            </form>

            <?php
            if (isset($_POST['calculate'])) {
                echo "<br>Berikut merupakan hasil dari setiap operasi";
                echo "<br><br>PENJUMLAHAN", "<br>Operator : +<br>", "Hasil : ", $plus;
                echo "<br><br>PENGURANGAN", "<br>Operator : -<br>", "Hasil : ", $min;
                echo "<br><br>PERKALIAN", "<br>Operator : *<br>", "Hasil : ", $mul;
                echo "<br><br>PEMBAGIAN", "<br>Operator : /<br>", "Hasil : ", $div;
                echo "<br><br>MODULUS", "<br>Operator : %<br>", "Hasil : ", $mod;
            }
            ?>

        </div>
    </article>
    </div>
</body>

</html>