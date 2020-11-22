<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>118140100_Price</title>
</head>

<body>
    <?php
    function harga($name, $color = "Merah")
    {
        $length = strlen($name);

        if ($length <= 10) {
            $harga = $length * 300;
        } else if ($length <= 20) {
            $harga = $length * 500;
        } else {
            $harga = $length * 700;
        }
        echo "<br> Bet " . $color . " dengan nama " . $name . ", seharga " . $harga;
    }

    $name1 = "Siraz";
    $name2 = "Siraz Tri Denira";
    $name3 = "Uvuvwevwevwe Onyetenyevwe Ugwemubwem Ossas";
    echo harga($name1, "Hijau");
    echo harga($name2, "Biru");
    echo harga($name3);
    ?>
</body>

</html>