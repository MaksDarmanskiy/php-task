<span>Завдання 1</span>
<br/>

<?php
echo "<h3>Таблиця множення для числа 5</h3>";
echo "<table border='1' cellpadding='10'>";

for ($i = 1; $i <= 10; $i++) {
    $result = 5 * $i;
    echo "<tr><td>5 * $i = $result</td></tr>";
}

echo "</table>";
?>

<br/>
<br/> 

<span>Завдання 2</span>
<br/>

<?php
echo "<h3>Парні числа від 2 до 20</h3>";

$numbr = 2;
while ($numbr <= 20) {
    echo $numbr . " ";
    $numbr += 2; 
}
?>