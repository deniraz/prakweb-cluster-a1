<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "siraz", "tri", "denira");

echo "Sebelum diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}

sort($data); //mengurutkan dari kecil ke besar

echo "<br>Setelah diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
?>
