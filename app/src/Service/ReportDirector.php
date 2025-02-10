<?php

// src/Service/ReportDirector.php
// **Director** — координирует процесс генерации отчетов, использует конкретные Builder

namespace App\Service;

class ReportDirector
{
    private $builder;

    public function __construct(ReportBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function constructReport($nameUniversity, $nameInstitute, $nameCafedra,$nameWork,$studentName,$groupName,$teacherName,$typeTeacher, $task, $textAnnotation, $listConents, $maintext, $conclusion)
    {
        $this->builder->buildTitlePage($nameUniversity, $nameInstitute, $nameCafedra,$nameWork,$studentName,$groupName,$teacherName,$typeTeacher);
        $this->builder->buildTaskCafedra($task);
        $this->builder->buildAnnotation($textAnnotation);
        $this->builder->buildContents($listConents);
        $this->builder->buildMainPart($maintext);
        $this->builder->buildConclusion($conclusion);

    }
}


?>