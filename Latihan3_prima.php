<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3 Praktikum 2</title>
</head>
<body>
  
</body>
</html>
<html>
<?php
if (isset($_POST['check'])) {
  $bil = $_POST['bil'];

  $prima = true;
  for ($i = 2; $i < $bil; $i++) {
    if ($bil % $i == 0)
      $prima = false;
  }
}
?>

<form method='post' action='Latihan3_prima.php'>
  <input type='text' name='bil' class='bil' autocomplete='off' placeholder='input'>
  <input type='submit' name='check' value='check' class='tombol'>
</form>

<?php
if (isset($_POST['check'])) {
  if ($prima) {
    echo "<br>", $bil, " Merupakan Bilangan Prima";
  } else {
    echo "<br>", $bil, " Bukan Bilangan Prima";
  }
}
?>

</html>