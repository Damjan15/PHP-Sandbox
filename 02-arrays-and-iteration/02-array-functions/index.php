<?php
$output = null;
$ids = [10, 22, 15, 45, 67];
$users = ['user1', 'user2', 'user3'];

// count
$output = count($users);

// sort
sort($ids);

// rsort
rsort($users);

// array_push
array_push($users, 'user4');
array_push($ids, '75');

// array_pop
array_pop($ids);

// array_shift
array_shift($users);

// array_unshift
array_unshift($users, 'user5');

// array_slice
$ids2 = array_slice($ids, 2, 3);

// array_splice
array_splice($ids, 1, 1, 'New ID');

// array_reverse
array_reverse($users);

// array_search
$output = array_search(22, $ids);

// in_array
$output = in_array(67, $ids);

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
            </p>

            <h2 class="text-xl font-semibold my-4">IDs Array: </h2>
            <p>
            <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>

            <h2 class="text-xl font-semibold my-4">Users Array</h2>
            <pre>
                <p>
                    <?php print_r($users); ?>
                </p>
            </pre>

            <h2 class="text-xl font-semibold my-4">New IDs Array: </h2>
            <pre>
                <p>
                    <?php print_r($ids2); ?>
                </p>
            </pre>
        </div>
    </div>
</body>

</html>