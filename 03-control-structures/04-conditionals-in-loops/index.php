<?php

// Conditionals in While Loop
$number = 1;

while ($number <= 10) {
    if ($number % 2 == 0) {
        echo $number . ' is even <br>';
    } else {
        echo $number . ' is odd <br>';
    }

    $number++;
}


// Break and Continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo $i . '<br>';
}

// Continue
for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i . '<br>';
}

// Conditional in foreach
$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade <br>';
    }
}
