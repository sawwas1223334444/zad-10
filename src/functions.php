<?php
namespace funct;

use stud\Student;
use group\Group;

function printStudentInfo(Student $student)
{
    echo "Студент: {$student->firstName} {$student->lastName}\n";
    echo "Средний балл: " . round($student->getAverage(), 2) . "\n";
    echo "Оценки: " . implode(', ', $student->getGrades()) . "\n";
    echo "\n";
}

function printGroupInfo(Group $group)
{
    echo "Группа: {$group->groupName}\n";
    echo "Количество студентов: {$group->getStudentsCount()}\n";
    echo "Средний балл группы: " . round($group->getGroupAverage(), 2) . "\n";
    echo "\n\n";
}