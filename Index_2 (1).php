<?php
require "Ahmad_2.php";

// Create object with constructor (starting number is just to construct it)
$collatz = new Collatz(12);

// Here we can give any interval
$start = 25;
$end = 24658;

// Perform interval calculations
$data = $collatz->interval($start, $end);

// Get statistics
$stats = $collatz->statistics($data);

// Display results
echo "<h3>Collatz Conjecture OOP</h3>";
echo "Interval: $start - $end <br><br>";

echo "Number with MAX iterations: " . $stats["maxIterationsNumber"] . "<br>";
echo "Number with MIN iterations: " . $stats["minIterationsNumber"] . "<br>";
echo "Number with MAX reached value: " . $stats["maxReachedValueNumber"] . "<br>";
?>