<?php

// **ConcreteBuilder** — для лабораторных работ, реализует детали построения отчета для лабораторных работ

// src/Service/LaboratoryWorkReportBuilder.php
namespace App\Service;

class ReferatWorkReportBuilder extends ReportBuilder 
{
    // Построение титульной страницы
    public function buildTitlePage($nameUniversity, $nameInstitute, $nameCafedra, $nameWork, $studentName, $groupName, $teacherName, $typeTeacher) 
    {
        $this->report .= '<!DOCTYPE html>';
        $this->report .= '<html lang="ru">';
        $this->report .= '<head>';
        $this->report .= '<meta charset="UTF-8">';
        $this->report .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $this->report .= '<title>Титульная страница</title>';
        $this->report .= '<style>';
        $this->report .= '
            body {
                font-family: "Times New Roman", serif;
                font-size: 14px;
                line-height: 1.5;
                margin: 20mm;
                text-align: justify;
            }
            .container {
                text-align: center;
            }
            h1, h2 {
                text-align: center;
                margin: 20px 0;
                font-size: 16px;
                font-weight: bold;
            }
            p {
                margin: 10px 0;
            }
            .section {
                margin-top: 30px;
            }
            .student-info, .teacher-info {
                margin-top: 30px;
                text-align: left;
            }
            .signature {
                margin-top: 50px;
                text-align: center;
            }
            .contents ul {
                list-style-type: none;
                padding: 0;
            }
            .contents li {
                margin: 5px 0;
            }
        ';
        $this->report .= '</style>';
        $this->report .= '</head>';
        $this->report .= '<body>';
        // $this->report .= '<div class="container">';
        // $this->report .= '<h1>' . htmlspecialchars($nameUniversity) . '</h1>';
        // $this->report .= '<h1>' . htmlspecialchars($nameInstitute) . '</h1>';
        // $this->report .= '<h1>' . htmlspecialchars($nameCafedra) . '</h1>';
        // $this->report .= '<div class="section">';
        // $this->report .= '<h1>' . htmlspecialchars($nameWork) . '</h1>';
        // $this->report .= '<p>по дисциплине "Архитектура программных систем"</p>';
        // $this->report .= '</div>';
        // $this->report .= '<div class="student-info">';
        // $this->report .= '<p>Студент:</p>';
        // $this->report .= '<p>' . htmlspecialchars($studentName) . '</p>';
        // $this->report .= '<p>Группа: ' . htmlspecialchars($groupName) . '</p>';
        // $this->report .= '</div>';
        // $this->report .= '<div class="teacher-info">';
        // $this->report .= '<p>Руководитель:</p>';
        // $this->report .= '<p>' . htmlspecialchars($typeTeacher) . ' ' . htmlspecialchars($teacherName) . '</p>';
        // $this->report .= '</div>';
        // $this->report .= '<div class="signature">';
        // $this->report .= '<p>Липецк 2025 г.</p>';
        // $this->report .= '</div>';
        // $this->report .= '</div>';
    }

    // Задание кафедры
    public function buildTaskCafedra($task)
    {
        $this->report .= '<div class="section">';
        $this->report .= '<h2>Задание кафедры</h2>';
        $this->report .= '<p>' . htmlspecialchars($task) . '</p>';
        $this->report .= '</div>';
    }

    // Аннотация
    public function buildAnnotation($textAnnotation)
    {
        // $this->report .= '<div class="section">';
        // $this->report .= '<h2>Аннотация</h2>';
        // $this->report .= '<p>' . htmlspecialchars($textAnnotation) . '</p>';
        // $this->report .= '</div>';
    }

    // Оглавление
    public function buildContents($listContents)
    {
        // $this->report .= '<div class="section contents">';
        // $this->report .= '<h2>Оглавление</h2>';
        // $this->report .= '<ul>';
        // foreach ($listContents as $content) {
        //     $this->report .= '<li>' . htmlspecialchars($content) . '</li>';
        // }
        // $this->report .= '</ul>';
        // $this->report .= '</div>';
    }

    // Основная часть
    public function buildMainPart($mainText)
    {
        $this->report .= '<div class="section">';
        $this->report .= '<h2>Основная часть</h2>';
        $this->report .= '<p>' . htmlspecialchars($mainText) . '</p>';
        $this->report .= '</div>';
    }

    // Заключение
    public function buildConclusion($conclusion)
    {
        // $this->report .= '<div class="section">';
        // $this->report .= '<h2>Заключение</h2>';
        // $this->report .= '<p>' . htmlspecialchars($conclusion) . '</p>';
        // $this->report .= '</div>';
    }

    // Закрытие HTML
    public function closeReport()
    {
        $this->report .= '</body>';
        $this->report .= '</html>';
    }
}



?>