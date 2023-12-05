<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;
$num1 = 20;
$num2 = 10;

// Basic Math
$output = "$num1 + $num2 =" . $num1 + $num2; // 20 + 10 = 30
$output = "$num1 - $num2 =" . $num1 - $num2; // 20 - 10 = 10
$output = "$num1 * $num2 =" . $num1 * $num2; // 20 * 10 = 200
$output = "$num1 / $num2 = " . $num1 / $num2;  // 20 / 10 = 2
$output = "$num1 % $num2 = " . $num1 % $num2; // 20 % 10 = 0

// Assignment Operator
$num3 = 10;
$num3 += 20; // It's the same as $num3 = $num3 + 20
$num3 -= 5;
$num3 *= 2;
$num3 /= 2;

$output = $num3;

// Built in PHP Functions
$output = rand(); // Generate random number
$output = rand(1, 10); // Generate a random number between 1 - 10
$output = round(4.2); // Round down a number
$output = ceil(4.2); // Round up a number
$output = floor(4.9); // Rounds a number down to the next lowest integer
$output = sqrt(16); // Returns square root of a number
$output = abs(-4.2); // Returns the absolute value of a number
$output = max(1, 2, 3, 50); // Returns the highest value in an array
$output = min(1, 2, 25); // Returns the lowest value in an array
$output = number_format(1234567.991234, 2, '.', '.');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?php echo $output; ?></p>
    </div>
  </div>
</body>

</html>