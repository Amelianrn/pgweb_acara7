<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "green";

switch ($favcolor) {
  case "red":
    echo "Warna favoritmu adalah merah!";
    break;
  case "blue":
    echo "Warna favoritmu adalah biru!";
    break;
  case "pink":
    echo "Warna favoritmu adalah merah muda!";
    break;
  default:
    echo "Warna favoritmu bukan red, blue, pink!";
}
?>

</body>
</html>
