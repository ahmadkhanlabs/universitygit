<?php


$startValue = 12;
$countSteps = 0;

echo "3x + 1 (Collatz Conjecture)";
echo "Initial Number: " . $startValue . "<br><br>";

if ($startValue <= 0) {
    echo "Error: Please use a positive integer.";
}
else {

    $current = $startValue;

    echo "Generated Sequence:<br>";

    while ($current > 1) {

        echo $current . " → ";

       
        if ($current % 2 == 0) {
            $current = $current / 2;
        }
      
        else {
            $current = (3 * $current) + 1;
        }

        $countSteps++;
    }

    echo "1<br><br>";
    echo "Number of steps required: " . $countSteps;

}

?>