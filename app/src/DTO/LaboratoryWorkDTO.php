<?php

// src/DTO/LaboratoryWorkDTO.php


// Product для всего


namespace App\DTO;

class LaboratoryWorkDTO
{
    private string $nameUniversity;
    private string $nameInstitute;
    private string $nameCafedra;
    private string $nameWork;
    private string $studentName;
    private string $groupName;
    private string $teacherName;
    private string $typeTeacher;
    private string $task;
    private string $textAnnotation;
    private array $listConents;
    private string $maintext;
    private string $conclusion;
    private array $listOfSources;
    

    public function __construct(string $nameUniversity, string $nameInstitute, string $nameCafedra, string $nameWork, string $studentName, string $groupName, string $teacherName, string $typeTeacher, string $task, string $textAnnotation, array $listConents, string $maintext, string $conclusion, array $listOfSources)
    {
        $this->nameUniversity = $nameUniversity;
        $this->nameInstitute = $nameInstitute;
        $this->nameCafedra = $nameCafedra;
        $this->nameWork = $nameWork;
        $this->studentName = $studentName;
        $this->groupName = $groupName;
        $this->teacherName = $teacherName;
        $this->typeTeacher = $typeTeacher;
        $this->task = $task;
        $this->maintext = $maintext;
        $this->conclusion = $conclusion;
        $this->listOfSources = $listOfSources;
        $this->textAnnotation = $textAnnotation;
        $this->listConents = $listConents;
    }

    public function getNameUniversity(): string
    {
        return $this->nameUniversity;
    }

    public function getNameInstitute(): string
    {
        return $this->nameInstitute;
    }

    public function getNameCafedra(): string
    {
        return $this->nameCafedra;
    }

    public function getNameWork(): string
    {
        return $this->nameWork;
    }

    public function getStudentName(): string
    {
        return $this->studentName;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function getTeacherName(): string
    {
        return $this->teacherName;
    }

    public function getTypeTeacher(): string
    {
        return $this->typeTeacher;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function getMainText(): string
    {
        return $this->maintext;
    }

    public function getConclusion(): string
    {
        return $this->conclusion;
    }

    public function getListOfSources(): array    
    {
        return $this->listOfSources;
    }

    public function getTextAnnotation(): string    
    {
        return $this->textAnnotation;
    }

    public function getListConents(): array    
    {
        return $this->listConents;
    }

}


?>