<?php

// Класс распорядитель, распределяет в нужном порятке отчет


namespace App\Service;


class ReportGenerator
{
    public function generateReport($title, $department, $annotation, $content, $sources)
    {
        // Начало HTML документа
        $html = '<!DOCTYPE html>';
        $html .= '<html lang="ru">';
        $html .= '<head>';
        $html .= '<meta charset="UTF-8">';
        $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $html .= '<title>' . htmlspecialchars($title) . '</title>';
        $html .= '<style>';
        // Стиль для отчета
        $html .= 'body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }';
        $html .= 'h1, h2 { text-align: center; margin-bottom: 10px; }';
        $html .= 'p { text-align: justify; margin: 10px 0; }';
        $html .= 'ul { list-style-type: none; padding: 0; }';
        $html .= 'li { margin: 5px 0; }';
        $html .= '</style>';
        $html .= '</head>';
        $html .= '<body>';

        // Титульная страница
        $html .= '<h1>' . htmlspecialchars($title) . '</h1>';
        $html .= '<p><strong>Кафедра:</strong> ' . htmlspecialchars($department) . '</p>';
        $html .= '<p><strong>Аннотация:</strong> ' . nl2br(htmlspecialchars($annotation)) . '</p>';

        // Таблица содержания
        $html .= '<h2>Оглавление</h2>';
        $html .= '<p></p>';


        // Основная часть
        $html .= '<h2 id="mainPart">Основная часть</h2>';
        $html .= '<p>' . nl2br(htmlspecialchars($content)) . '</p>';

        // Список источников
        $html .= '<h2 id="sources">Список источников</h2>';
        $html .= '<ul>';
        foreach ((array)$sources as $source) {
            $html .= '<li>' . htmlspecialchars($source) . '</li>';
        }
        $html .= '</ul>';

        // Закрытие HTML
        $html .= '</body>';
        $html .= '</html>';

        return $html;
    }
}
