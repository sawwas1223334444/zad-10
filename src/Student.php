<?php

namespace saaawww;

class Student
{
    public $firstName;
    public $lastName;
    private $grades = [];

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addGrade($grade)
    {
        $this->grades[] = $grade;
    }

    public function getAverage()
    {
        if (empty($this->grades)) {
            return 0;
        }
        $sum = array_sum($this->grades);
        return $sum / count($this->grades);
    }

    public function getGrades()
    {
        return $this->grades;
    }
}