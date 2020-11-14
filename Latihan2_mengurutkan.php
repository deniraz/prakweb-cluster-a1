<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2 Praktkikum 2</title>
</head>
<body>
  
</body>
</html>
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
