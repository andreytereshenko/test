<?php
echo "<link rel='stylesheet' href='../css/style.css'>";

echo "<table border = 1>";

for ($firstNumber = 1; $firstNumber <= 10; $firstNumber++) {
    for ($tr = 1; $tr <= 2; $tr++ ) {
        echo "<tr>";
        for ($td = 1; $td <= 5; $td++ ) {
            echo "<td>";
            for ($secondNumber = 1; $secondNumber <= 10; $secondNumber++) {

                $val = " X ";
                $val2= " = ";

                if ($firstNumber == 1) {
                    echo "<span class = 'red'>$firstNumber</span>" . $val;
                } elseif ($firstNumber == 2) {
                    echo "<span class = 'green'>$firstNumber</span>" . $val;
                } elseif ($firstNumber == 3) {
                    echo "<span class = 'yellow'>$firstNumber</span>" . $val;
                } elseif ($firstNumber == 4) {
                    echo "<span class = 'blue'>$firstNumber</span>" . $val;
                } elseif ($firstNumber ==  10) {
                    $firstNumber = strval($firstNumber);
                    echo "<span class='red'>$firstNumber[0]</span>" . "$firstNumber[1]" . $val;
                } else {
                    echo "<span>$firstNumber</span>" . $val;
                }

                if ($secondNumber == 1) {
                    echo "<span class = 'red'>$secondNumber</span>" . $val2 ;
                } elseif ($secondNumber == 2) {
                    echo "<span class = 'green'>$secondNumber</span>" . $val2;
                } elseif ($secondNumber == 3) {
                    echo "<span class = 'yellow'>$secondNumber</span>" . $val2;
                } elseif ($secondNumber == 4) {
                    echo "<span class = 'blue'>$secondNumber</span>" . $val2;
                } elseif ($secondNumber ==  10) {
                    $secondNumber = strval($secondNumber);
                    echo "<span class='red'>$secondNumber[0]</span>" . "$secondNumber[1]" . $val2;
                } else {
                    echo "<span>$secondNumber</span>" . $val2;
                }

                $productNumber = $firstNumber * $secondNumber;

                $productNumber = str_split($productNumber);
                for ($i = 0; $i < count($productNumber); $i++) {
                    if ($productNumber[$i] == 1) {
                        echo "<span class='red'>$productNumber[$i]</span>";
                    } elseif ($productNumber[$i] == 2) {
                        echo  "<span class='green'>$productNumber[$i]</span>";
                    } elseif ($productNumber[$i] == 3) {
                        echo  "<span class='yellow'>$productNumber[$i]</span>";
                    } elseif ($productNumber[$i] == 4) {
                        echo  "<span class='blue'>$productNumber[$i]</span>";
                    } else {
                        echo $productNumber[$i];
                    }
                }
                echo "<br>";
            }
            echo "</td>";
            $firstNumber++;
        }
        echo "</tr>";
    }
}
echo "</table>";
echo " <a href='/' class='back_index'>Назад</a>";

?>
