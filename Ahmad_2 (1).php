<?php
class Collatz {

    private $startNumber;

    // Constructor to set starting number
    public function __construct($num) {
        $this->startNumber = $num;
    }

    // Calculate steps and max value for one number
    public function calculate($num) {
        $steps = 0;
        $maxValue = $num;
        $current = $num;

        while ($current != 1) {
            if ($current % 2 == 0) {
                $current = $current / 2;
            } else {
                $current = 3 * $current + 1;
            }

            if ($current > $maxValue) {
                $maxValue = $current;
            }

            $steps++;
        }

        return [$steps, $maxValue];
    }

    // Perform calculations for a given interval
    public function interval($start, $end) {
        $results = [];
        for ($i = $start; $i <= $end; $i++) {
            $results[$i] = $this->calculate($i);
        }
        return $results;
    }

    // Statistics method to give all data about interval
    public function statistics($results) {
        $maxSteps = 0;
        $minSteps = 0;
        $maxReached = 0;

        $numMaxSteps = 0;
        $numMinSteps = 0;
        $numMaxReached = 0;

        foreach ($results as $number => $data) {
            $steps = $data[0];
            $maxValue = $data[1];

            if ($steps > $maxSteps) {
                $maxSteps = $steps;
                $numMaxSteps = $number;
            }

            if ($minSteps == 0 || $steps < $minSteps) {
                $minSteps = $steps;
                $numMinSteps = $number;
            }

            if ($maxValue > $maxReached) {
                $maxReached = $maxValue;
                $numMaxReached = $number;
            }
        }

        return [
            "maxIterationsNumber" => $numMaxSteps,
            "minIterationsNumber" => $numMinSteps,
            "maxReachedValueNumber" => $numMaxReached
        ];
    }
}
?>