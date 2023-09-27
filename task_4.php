<?php

// Task 4: Multidimensional Array

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

function calculateAverageGrades($gradesArray) {
    foreach ($gradesArray as $studentName => $grades) {
        $totalGrades = array_sum($grades);
        $numSubjects = count($grades);
        $averageGrade = $totalGrades / $numSubjects;

        echo "Average grade for $studentName: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);
