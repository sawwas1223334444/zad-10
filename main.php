<?php

require_once 'vendor/autoload.php';

use saaawww\Student;
use saaawww\Group;
use function saaawww\printStudentInfo;
use function saaawww\printGroupInfo;

echo "   СИСТЕМА УЧЕТА СТУДЕНТОВ \n\n";

$student1 = new Student("Семен", "Алексеев");
$student2 = new Student("Ирина", "Новикова");
$student3 = new Student("Мария", "Якина");

$student1->addGrade(5);
$student1->addGrade(4);
$student1->addGrade(4);

$student2->addGrade(3);
$student2->addGrade(5);
$student2->addGrade(4);

$student3->addGrade(5);
$student3->addGrade(5);
$student3->addGrade(5);

$group = new Group("СРГ-21");

$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

echo "ИНФОРМАЦИЯ О СТУДЕНТАХ:\n";
foreach ($group->getStudents() as $student) {
    printStudentInfo($student);
}

echo "\nИНФОРМАЦИЯ О ГРУППЕ:\n";
printGroupInfo($group);

$bestStudent = $group->getBestStudent();
if ($bestStudent) {
    echo "ЛУЧШИЙ СТУДЕНТ ГРУППЫ:\n";
    printStudentInfo($bestStudent);
} else {
    echo "В группе нет студентов\n";
}