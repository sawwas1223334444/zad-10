<?php
namespace group;

use stud\Student;

class Group
{
    public $groupName;
    private $students = [];

    public function __construct($groupName)
    {
        $this->groupName = $groupName;
    }

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function getGroupAverage()
    {
        if (empty($this->students)) {
            return 0;
        }

        $totalSum = 0;
        $totalCount = 0;

        foreach ($this->students as $student) {
            $totalSum += array_sum($student->getGrades());
            $totalCount += count($student->getGrades());
        }

        return $totalSum / $totalCount;
    }

    public function getBestStudent()
    {
        if (empty($this->students)) {
            return null;
        }

        $bestStudent = $this->students[0];
        $bestAverage = $bestStudent->getAverage();

        foreach ($this->students as $student) {
            $currentAverage = $student->getAverage();
            if ($currentAverage > $bestAverage) {
                $bestAverage = $currentAverage;
                $bestStudent = $student;
            }
        }

        return $bestStudent;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getStudentsCount()
    {
        return count($this->students);
    }
}