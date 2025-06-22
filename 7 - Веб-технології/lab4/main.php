<span>Завдання 1</span>
<br/>
<?php
$a = [0, 1, 2, 0, 1, 2, 2, 4, 3, 3, 1];
$counts = [];
foreach ($a as $b) {
    if (isset($counts[$b])) {
        $counts[$b]++;
    } else {
        $counts[$b] = 1;
    }
}

foreach ($counts as $key => $value) {
    echo "Число $key зустрічається $value раз(и)<br>";
}
?>

<br/>
<br/> 

<span>Завдання 2</span>
<br/>
<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    return true; 
}

for ($i = 1; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo "$i є простим числом.<br>";
    }
}
?>