<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 10;       // Integer
$b = 9.34;    // Float
$c = "Halo Amelia"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>Perhatikan bahwa ketika memasukkan Boolean ke dalam string, ia mendapat nilai "1", dan ketika 
    memasukkan NULL ke dalam string, ia diubah menjadi string kosong "".</p>

</body>
</html>
