<?php

echo "<link rel='stylesheet' href='../css/style.css'>";
echo "<table border = 1>";

for ($first = 1; $first <= 10; $first++) {
    for ($tr = 1; $tr <= 2; $tr++ ) {
        echo "<tr>";
        for ($td = 1; $td <= 5; $td++ ) {
            echo "<td>";
            for ($second = 1; $second <= 10; $second++) {
                echo "$first X $second = "  . $first * $second . "<br>";
            }
            echo "</td>";
            $first++;
        }
        echo "</tr>";
    }
}
echo "</table>";

?>
