<?php

// **ConcreteBuilder** — для лабораторных работ, реализует детали построения отчета для лабораторных работ

// src/Service/LaboratoryWorkReportBuilder.php
namespace App\Service;

class LaboratoryWorkReportBuilder extends ReportBuilder
{
    // Построение титульной страницы
    public function buildTitlePage($title, $department)
    {
        // Начало HTML с дефолтными стилями
        $this->report .= '<!DOCTYPE html>';
        $this->report .= '<html lang="ru">';
        $this->report .= '<head>';
        $this->report .= '<meta charset="UTF-8">';
        $this->report .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $this->report .= '<title>' . htmlspecialchars($title) . '</title>';
        $this->report .= '<style>';
        
        // Дефолтные стили
        $this->report .= 'body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }';
        $this->report .= 'h1, h2 { text-align: center; margin-bottom: 10px; }';
        $this->report .= 'p { text-align: justify; margin: 10px 0; }';
        $this->report .= 'ul { list-style-type: none; padding: 0; }';
        $this->report .= 'li { margin: 5px 0; }';
        $this->report .= '</style>';
        $this->report .= '</head>';
        $this->report .= '<body>';

        // Титульная страница
        $this->report .= '<h1>' . htmlspecialchars($title) . '</h1>';
        $this->report .= '<p><strong>Кафедра:</strong> ' . htmlspecialchars($department) . '</p>';
    }

    // Построение задания кафедры
    public function buildTask($task)
    {
        $this->report .= '<h2>Задание кафедры</h2>';
        $this->report .= '<p>' . nl2br(htmlspecialchars($task)) . '</p>';
    }

    // Построение аннотации
    public function buildAnnotation($annotation)
    {
        $this->report .= '<h2>Аннотация</h2>';
        $this->report .= '<p>' . nl2br(htmlspecialchars($annotation)) . '</p>';
    }

    // Построение оглавления
    public function buildTableOfContents()
    {
        $this->report .= '<h2>Оглавление</h2>';
        $this->report .= '<ul>';
        $this->report .= '<li><a href="#task">Задание кафедры</a></li>';
        $this->report .= '<li><a href="#annotation">Аннотация</a></li>';
        $this->report .= '<li><a href="#mainPart">Основная часть</a></li>';
        $this->report .= '<li><a href="#sources">Список источников</a></li>';
        $this->report .= '</ul>';
    }

    // Построение основной части
    public function buildMainContent($content)
    {
        $this->report .= '<h2 id="mainPart">Основная часть</h2>';
        $this->report .= '<p>' . nl2br(htmlspecialchars($content)) . '</p>';
    }

    // Построение списка источников
    public function buildSources($sources)
    {
        $this->report .= '<h2>Список источников</h2>';
        if (is_array($sources)) {
            $this->report .= '<ul>';
            foreach ($sources as $source) {
                $this->report .= '<li>' . htmlspecialchars($source) . '</li>';
            }
            $this->report .= '</ul>';
        } else {
            // Логирование или вывод ошибки
            $this->report .= '<p>Ошибка: Источники не являются массивом.</p>';
        }
    }

    // Закрытие HTML документа
    public function closeReport()
    {
        $this->report .= '</body>';
        $this->report .= '</html>';
    }
}


?>