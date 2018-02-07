<?php
include 'header.php';
include 'data/data.php';

$brojac = 0;
foreach ($data as $student) {
	if ($student == $data[$brojac]) {
		echo "<div class='table'><span><a href='student.php?id=$brojac'><img src='$student[img]'></a></span><span><ul><li>" . $student['ime'] . "</li>" . "<li>" . $student['prezime'] . "</li></ul></span></div>";
		$brojac++;
	}
}
include 'footer.php';
