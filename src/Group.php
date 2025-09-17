<?php
namespace saaawww;

class Group
{
    public string $groupName;
    private array $students = [];

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getGroupAverage(): float
    {
        if (empty($this->students)) {
            return 0.0;
        }

        $totalSum = 0;
        $totalCount = 0;

        foreach ($this->students as $student) {
            $totalSum += array_sum($student->getGrades());
            $totalCount += count($student->getGrades());
        }

        return $totalCount > 0 ? (float)($totalSum / $totalCount) : 0.0;
    }

    public function getBestStudent(): ?Student
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

    public function getStudents(): array
    {
        return $this->students;
    }

    public function getStudentsCount(): int
    {
        return count($this->students);
    }
}