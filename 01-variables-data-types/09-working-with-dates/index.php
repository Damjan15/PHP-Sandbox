<?php
$output = null;

// The year
$output = date("Y");

// Timestamp
$output = date("Y", strtotime('1999-09-01'));

// The month
$output = date('m');

// The day
$output = date('d');

// The day of the week
$output = date('D');
$output = date('l');

// Year-Month-Day
$output = date("Y-m-d");

// The hour
$output = date('h');

// The minute
$output = date('i');

// The second
$output = date('s');

// The AM or PM
$output = date('a');

// The full date and time
$output = date('Y-m-d h:i:s a');

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