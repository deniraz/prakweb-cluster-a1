<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>118140100_Faktorial</title>
</head>

<body>
    <?php
    function faktorial($bil)
    {
        $hasil = $bil;
        for ($i = 1; $i < $bil; $i++) {
            $hasil = $hasil * $i;
        }
        return $hasil;
    }

    $a = 1;
    $b = 10;

    for($i=$a; $i<=$b; $i++){
        echo "<br>Nilai dari Faktorial " . $i . " : " . faktorial($i);
    }
    
    ?>
</body>

</html>