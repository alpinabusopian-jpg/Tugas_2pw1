<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
<br>
<?php
echo "<table border='1' cellpadding='5' cellspacing='2'>";

echo "<tr>";
echo "<td bgcolor='white'><b>bilangan</b></td>";
for ($j = 1; $j <= 10; $j++) {
    echo "<td bgcolor='lime'>$j</td>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td bgcolor='lime'>$i</td>";   

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        
        if ($j % 2 == 1) {
            $warna = "yellow";
        } else {
            $warna = "cyan";
        }

        echo "<td bgcolor='$warna'>$hasil</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>