<?php
// ---------------------------
// Week 05 PHP Assignment
// ---------------------------

// Variables
$course = "Back-end Development";
$studentName = "Maryam";
$age = 22;

// Array
$students = ["Alice", "Bob", "Charlie", "Maryam"];
$colors = ["Red", "Green", "Blue"];

// Greeting message
echo "Welcome to the $course course, $studentName!\n\n";

// Loop through students using foreach
echo "List of students enrolled:\n";
foreach ($students as $student) {
    echo "- $student\n";
}
echo "\n";

// Conditional example
if ($age >= 18) {
    echo "$studentName is an adult.\n";
} else {
    echo "$studentName is a minor.\n";
}

// For loop example
echo "\nNumbers from 1 to 5 using for loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "\n";

// While loop example
echo "\nNumbers from 5 down to 1 using while loop:\n";
$counter = 5;
while ($counter >= 1) {
    echo "$counter ";
    $counter--;
}
echo "\n";

// Switch example
$day = date("l"); // Current day of the week
echo "\nToday is $day: ";
switch($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Almost weekend!";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend vibes!";
        break;
    default:
        echo "Have a productive day!";
}
echo "\n";

// Foreach loop for colors
echo "\nFavourite colors:\n";
foreach ($colors as $color) {
    echo "- $color\n";
}

echo "\nPHP assignment completed successfully!";
?>