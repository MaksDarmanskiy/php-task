<span>Завдання 1</span>
<br/>

<?php
    $number = 121;
    $sqrt = sqrt($number);
    if (is_int($sqrt) || $sqrt == floor($sqrt)) {
        echo "$number є досконалим квадратом.";
    } else {
        echo "$number не є досконалим квадратом.";
    }
?>

<br/>
<br/>

<span>Завдання 2</span>
<br/>

<?php
    $factorialNumber = 5;
    $factorial = 1;
    for ($i = 1; $i <= $factorialNumber; $i++) {
        $factorial *= $i;
    }
    echo "Факторіал числа $factorialNumber дорівнює $factorial.";
?>