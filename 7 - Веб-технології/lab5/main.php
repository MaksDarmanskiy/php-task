<span>Завдання 1</span>
<br/>
<form method="GET" action="">
    Місяць: <input type="number" name="month" min="1" max="12" required><br/><br/>
    День: <input type="number" name="day" min="1" max="31" required><br/><br/>
    <input type="submit" value="Визначити пору року">
</form>

<?php
if (isset($_GET['month']) && isset($_GET['day'])) {
    $month = $_GET['month'];
    $day = $_GET['day'];
    if ($month < 1 || $month > 12 || $day < 1 || $day > 31) {
        echo "Будь ласка, введіть правильну дату.";
    } else {
        if (($month == 1 && $day >= 1) || ($month == 2)) {
            echo "Зима";
        } elseif (($month == 3 && $day >= 1) || ($month == 4) || ($month == 5 && $day <= 31)) {
            echo "Весна";
        } elseif (($month == 6 && $day >= 1) || ($month == 7) || ($month == 8 && $day < 31)) {
            echo "Літо";
        } elseif (($month == 9 && $day >= 1) || ($month == 10) || ($month == 11 && $day < 31)) {
            echo "Осінь";
        } elseif (($month == 12)) {
            echo "Зима";
        }
    }
}
?>

<br/>
<br/>

<span>Завдання 2</span>
<br/>
<form method="POST" action="">
    Введіть текст: <input type="text" name="text" required><br>
    <input type="submit" value="Перевірити">
</form>

<?php
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    if (ctype_digit($text)) {
        echo $text . "<br/>";
        echo "Рядок містить тільки цифри.";
    } else {
        echo $text . "<br/>";
        echo "Рядок містить не тільки цифри.";
    }
}
?>