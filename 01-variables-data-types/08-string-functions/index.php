<?php
$output = null;
$string = "Hello World";

// strlen -> returns length of a string
$output = strlen($string);

// str_word_count -> returns the number of words in a string
$output = str_word_count($string);

// strpos -> finds the position of the first occurrence of a substring in a string
$output = strpos($string, 'World');

// substr -> returns a part of a string
$output = substr($string, 6, 5);

// str_replace -> replaces all occurrences of the search string with the replacement string
$output = str_replace("World", "Universe", $string);

// strtolower -> converts a string to lowercase
$output = strtolower($string);

// strtoupper -> converts a string to uppercase
$output = strtoupper($string);

// trim -> removes whitespace from the beginning and end of a string
$output = trim('                Hello World       ');
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>