<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$numbers = [7, 8, 9, 10, 11];
$sumOfNumbers = count($numbers);
$resultOfNumbers = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
echo "The sum of the {$sumOfNumbers} is: {$resultOfNumbers}";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
// Reversing the array
$colors = array_reverse($colors);

// Adding two new colors at the end of the $colors array
$lastColors = array("purple", "orange");
$colors = array_merge($colors, $lastColors);

// Add color 'pink' as the second color
array_splice($colors, 1, 0, 'pink');

// Remove the last color
array_pop($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$jobListings = [
  ['id' => 1, 'job_title' => 'Full-Stack Developer', 'company' => 'Wayne Inc', 'contact_email' => 'wayne@inc.com', 'contact_phone' => '1234-567-8999', 'skills' => ['PHP', 'MySQL', 'JavaScript']],

  ['id' => 2, 'job_title' => 'Front-end Developer', 'company' => 'Shelby Enterprises', 'contact_email' => 'shelby_enterprises@gmail.com', 'contact_phone' => '333-289-3258', 'skills' => ['HTML', 'CSS', 'JavaScript']],

  ['id' => 2, 'job_title' => 'React Developer', 'company' => 'Truth Night Club', 'contact_email' => 'truth@nightclub.com', 'contact_phone' => '8589-2467-4590', 'skills' => ['React.js', 'Next.js', 'Framer Motion']],
];

// Add a new listing
array_push($jobListings, [
  'id' => 4,
  'job_title' => 'C# Developer',
  'company' => '123 Company',
  'contact_email' => 'kristen@email.com',
  'contact_phone' => '123-456-7890',
  'skills' => ['C#', 'Angular', 'JavaScript', 'HTML', 'CSS']
]);

// Job title of second job listing
echo "<h3>{$jobListings[1]['job_title']}</h3>";

// First skill of third job listing
echo "<h3>{$jobListings[2]['skills'][0]}</h3>";
