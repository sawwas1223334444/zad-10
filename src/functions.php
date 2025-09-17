<?php
namespace saaawww;

use saaawww\Student;
use saaawww\Group;

function printStudentInfo(Student $student): void
{
    echo "Студент: {$student->firstName} {$student->lastName}\n";
    echo "Средний балл: " . round($student->getAverage(), 2) . "\n";
    echo "Оценки: " . implode(', ', $student->getGrades()) . "\n";
    echo "\n";
}

function printGroupInfo(Group $group): void
{
    echo "Группа: {$group->groupName}\n";
    echo "Количество студентов: {$group->getStudentsCount()}\n";
    echo "Средний балл группы: " . round($group->getGroupAverage(), 2) . "\n";
    echo "\n\n";
}