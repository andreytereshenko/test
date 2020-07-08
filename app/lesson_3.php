<?php

echo "<link rel='stylesheet' href='../css/style.css'>";

error_reporting(-1);
if (!empty($_POST)) {

    $value = ($_POST['input']);

    function mb_strrev($str)
    {
        $r = '';
        for ($i = mb_strlen($str); $i >= 0; $i--) { //mb_strlen — Получает длину строки
            $r .= mb_substr($str, $i, 1); //mb_substr — Возвращает часть строки
        }
        return $r;
    }

    $result = mb_strrev($value);

    echo "<div class = 'result_form_container'>";
    echo "<p class = 'result_input'>$result</p>";
    echo "</div>";
    echo "<a class = 'back_index prev_button' href = '../lesson_3.html'>Назад</a>";
}
?>



