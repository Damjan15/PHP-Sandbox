<?php
$title = "PHP From Scratch";
$heading = "Welcome to the course";
$body = "In this course, you will learn the fundamentals of the PHP Language.";
$isLoggedIn = true;
$name = "John Doe";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php echo $title; ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?php echo $title; ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <h1 class="text-3xl"><?php echo $heading; ?></h1>
      <?php if ($isLoggedIn) : ?>
        <?php if ($name) : ?>
          <p>Welcome <?php echo $name ?></p>
        <?php else : ?>
          <p>Welcome to the app!</p>
        <?php endif; ?>
      <?php else : ?>
        <p>Please log in</p>
      <?php endif; ?>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?php if ($isLoggedIn && $name) : ?>
        <p>Welcome <?php echo $name; ?></p>
      <?php elseif ($isLoggedIn) : ?>
        <p>Welcome to the app!</p>
      <?php else : ?>
        <p>Please log in</p>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>