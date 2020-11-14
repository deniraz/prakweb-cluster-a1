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

<form method='post' action='Tugas3_prima.php'>
  <input type='text' name='bil' class='bil' autocomplete='off' placeholder='input'>
  <input type='submit' name='check' value='check' class='tombol'>
</form>

<?php
if (isset($_POST['check'])) {
  if ($prima) {
    echo $bil, " Merupakan Bilangan Prima";
  } else {
    echo $bil, " Bukan Bilangan Prima";
  }
}
?>

</html>