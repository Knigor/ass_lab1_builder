<?php

// базовый абстрактный класс для создания отчетов (общая логика для всех отчетов)

// src/Service/ReportBuilder.php
namespace App\Service;

abstract class ReportBuilder
{
    protected $report = '';

    abstract public function buildTitlePage($nameUniversity, $nameInstitute, $nameCafedra,$nameWork,$studentName,$groupName,$teacherName,$typeTeacher);
    abstract public function buildTaskCafedra($task);
    abstract public function buildAnnotation($textAnnotation);
    abstract public function buildContents($listContents);
    abstract public function buildMainPart($maintext);
    abstract public function buildConclusion($conclusion);

    public function getReport()
    {
        return $this->report;
    }
}


?>