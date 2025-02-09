<?php

// src/Controller/ReportController.php
namespace App\Controller;

use App\DTO\LaboratoryWorkDTO;
use App\Service\LaboratoryWorkReportBuilder;
use App\Service\ReportDirector;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    #[Route('/generate-report', name: 'generate_report', methods: ['POST'])]
    public function generateReport(Request $request): Response
    {
        // Получаем данные из Postman (json)
        $data = json_decode($request->getContent(), true);

        
        // Создаем DTO и строителя
        $dto = new LaboratoryWorkDTO(
            $data['nameUniversity'],
            $data['nameInstitute'],
            $data['nameCafedra'],
            $data['nameWork'],
            $data['studentName'],
            $data['groupName'],
            $data['teacherName'],
            $data['typeTeacher'],
            $data['task'],
            $data['work'],
            $data['conclusion'],
            $data['listOfSources']
        );
    
        $builder = new LaboratoryWorkReportBuilder(); // Строитель для лабораторной работы
    
        // Создаем ReportDirector
        $director = new ReportDirector($builder);
    
        // Генерация отчета
        $director->constructReport(
            $dto->getNameWork(),   // Название работы
            $dto->getNameCafedra(),// Кафедра
            $dto->getTask(),       // Задание кафедры
            $dto->getWork(),       // Основная часть
        );
    
        // Генерация аннотации
        $builder->buildAnnotation($dto->getConclusion());

        $builder->buildSources($dto->getListOfSources());

        // Генерация оглавления
        $builder->buildTableOfContents();
    
        // Закрытие отчета
        $builder->closeReport();
    
        

        // Получаем сгенерированный отчет
        $htmlReport = $builder->getReport();

        
    
        // Возвращаем HTML-ответ
        return new Response($htmlReport, Response::HTTP_OK, ['Content-Type' => 'text/html']);
    }
    
}



?>