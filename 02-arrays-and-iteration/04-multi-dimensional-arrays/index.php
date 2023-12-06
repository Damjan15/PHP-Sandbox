<?php
$output = null;

// Simple multi-dimensional array
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$output = "The name of the fruit is {$fruits[0][0]}, and the color is {$fruits[0][1]}";

// Adding a fruit
$fruits[] = ['Grape', 'Purple'];

echo "<pre>";
print_r($fruits);
echo '</pre>';

// Multi-Dimensional Associative Arrays
$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'],
  ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'],
  ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => 'secret']
];

$output = "John's email is {$users[0]['email']}";

// Add a User
$users[] = ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];

// Remove a User
array_pop($users); // removes the last user

// Count Users
$output = "The number of users on our platform are " . count($users);

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
      <p class="text-xl"><?= $output ?></p>

      <h2 class="text-2xl font-semibold">Users:</h2>
      <p>
      <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>