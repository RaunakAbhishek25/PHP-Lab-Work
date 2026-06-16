<?php
define("COLLEGE_NAME", "Marwadi University");

$studentName = "Raunak Abhishek";
$rollNo = 7315;
$semester = "Semester 5";
$marks = 450;
$totalMarks = 500;
$percentage = ($marks / $totalMarks) * 100;

echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Roll Number: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>