<?php

// базовый абстрактный класс для создания отчетов (общая логика для всех отчетов)

// src/Service/ReportBuilder.php
namespace App\Service;

abstract class ReportBuilder
{
    protected $report = '';

    abstract public function buildTitlePage($title, $department);
    abstract public function buildMainContent($content);
    abstract public function buildSources($sources);

    public function getReport()
    {
        return $this->report;
    }
}


?>