<?php
// PHP Program to Print Previous Semester Result Using Variables and Constants

// Constant
define("COLLEGE_NAME", "Green City College");

// Variables
$studentName = "Jenil Korat";
$semester = "Semester 3";
$rollNo = 101;

$subject1 = 78;
$subject2 = 85;
$subject3 = 72;
$subject4 = 80;
$subject5 = 75;

// Calculate Total and Percentage
$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$percentage = $total / 5;

// Display Result
echo "<h2>" . COLLEGE_NAME . "</h2>";
echo "<h3>Previous Semester Result</h3>";

echo "Student Name: " . $studentName . "<br>";
echo "Roll No: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br><br>";

echo "Subject 1 Marks: " . $subject1 . "<br>";
echo "Subject 2 Marks: " . $subject2 . "<br>";
echo "Subject 3 Marks: " . $subject3 . "<br>";
echo "Subject 4 Marks: " . $subject4 . "<br>";
echo "Subject 5 Marks: " . $subject5 . "<br><br>";

echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%<br>";

// Result Status
if ($percentage >= 35) {
    echo "Result: PASS";
} else {
    echo "Result: FAIL";
}
?>