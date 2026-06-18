<?php
function studentDetails($name, $enrollmentNo, $semester)
{
    echo "Student Name: " . $name . "<br>";
    echo "Enrollment Number: " . $enrollmentNo . "<br>";
    echo "Semester: " . $semester;
}

studentDetails("Raunak Abishek", "7315", "Semester 5");
?>