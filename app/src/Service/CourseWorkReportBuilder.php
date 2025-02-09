<?php

// src/Service/CourseWorkReportBuilder.php
// **ConcreteBuilder** — для курсовых работ, реализует детали построения отчета для курсовых работ

namespace App\Service;

class CourseWorkReportBuilder extends ReportBuilder
{
    public function buildTitlePage($title, $department)
    {
        $this->report .= '<h1>' . htmlspecialchars($title) . '</h1>';
        $this->report .= '<p><strong>Кафедра:</strong> ' . htmlspecialchars($department) . '</p>';
    }

    public function buildMainContent($content)
    {
        $this->report .= '<h2>Основная часть</h2>';
        $this->report .= '<p>' . nl2br(htmlspecialchars($content)) . '</p>';
    }

    public function buildSources($sources)
    {
        $this->report .= '<h2>Список источников</h2>';
        $this->report .= '<ul>';
        foreach ($sources as $source) {
            $this->report .= '<li>' . htmlspecialchars($source) . '</li>';
        }
        $this->report .= '</ul>';
    }
}


?>