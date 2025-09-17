<?php

namespace saaawww;

class Student
{
    public string $firstName;
    public string $lastName;
    private array $grades = [];

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addGrade(int $grade): void
    {
        $this->grades[] = $grade;
    }

    public function getAverage(): float
    {
        if (empty($this->grades)) {
            return 0.0;
        }
        $sum = array_sum($this->grades);
        return (float)($sum / count($this->grades));
    }

    public function getGrades(): array
    {
        return $this->grades;
    }
}