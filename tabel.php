<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Audi", "BMW", "Toyota", "Mazda", "Honda");
$colors = array("Pink", "Red", "Purple", "Black", "Blue");
$years = array("2020", "2019", "2018", "2017", "2016");

echo "<table border='1'>";
echo "<tr><th>Car</th><th>Color</th><th>Year</th></tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    echo "<td>" . $cars[$i] . "</td>";
    echo "<td>" . $colors[$i] . "</td>";
    echo "<td>" . $years[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
