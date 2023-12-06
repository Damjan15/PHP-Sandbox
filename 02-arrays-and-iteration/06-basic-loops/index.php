<?php
// For loop
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
echo "<br />";

// While Loop
$i = 0;
while ($i <= 10) {
    echo $i;
    $i++;
}
echo "<br />";

// Do While Loop
$a = 0;

do {
    echo $a;
    $a++;
} while ($a <= 10);
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

            <ul>
                <?php for ($i = 0; $i <= 10; $i++) : ?>
                    <li>Number <?php echo $i; ?></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</body>

</html>