<?php include 'includes/header.php';

$i = 0;

echo 'Uso del while: <br>';
while ($i < 10) {
    echo 'i = ' . $i . '<br>';
    $i++;
}

$i = 0;

echo '<br>Uso del do while: <br>';
do {
    echo 'i = ' . $i . '<br>';
    $i++;
} while($i < 10);

echo '<br>Uso del for loop en ejercicio fizzbuzz: <br>';
for($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) echo $i . ' - FizBuzz <br>';
    elseif ($i % 3 === 0) echo $i . ' - Fiz <br>';
    elseif ($i % 5 === 0) echo $i . ' - Buzz <br>';
    else echo $i . '<br>';
}

include 'includes/footer.php';