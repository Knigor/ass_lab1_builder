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

    public function constructReport($title, $department, $content, $sources)
    {
        $this->builder->buildTitlePage($title, $department);
        $this->builder->buildMainContent($content);
        $this->builder->buildSources($sources);
    }
}


?>