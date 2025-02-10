<?php

// src/Controller/ReportController.php
namespace App\Controller;

use App\DTO\LaboratoryWorkDTO;
use App\Service\CourseWorkReportBuilder;
use App\Service\LaboratoryWorkReportBuilder;
use App\Service\ReferatWorkReportBuilder;
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
            $data['textAnnotation'],
            $data['listConents'],
            $data['maintext'],
            $data['conclusion'],
            $data['listOfSources'],
        );
    
        // создаем билдер для лабораторных работ или курсовых

        if ($data['type'] === 'laboratory') {
            $builder = new LaboratoryWorkReportBuilder();
        } elseif ($data['type'] === 'course') {
            $builder = new CourseWorkReportBuilder();
        } elseif ($data['type'] === 'task') {
            $builder = new ReferatWorkReportBuilder();
        }

         // Строитель для лабораторной работы
    
        // Создаем ReportDirector
        $director = new ReportDirector($builder);
    
        // Генерация отчета
        $director->constructReport(
            $dto->getNameUniversity(),
            $dto->getNameInstitute(),
            $dto->getNameCafedra(),
            $dto->getNameWork(),
            $dto->getStudentName(),
            $dto->getGroupName(),
            $dto->getTeacherName(),
            $dto->getTypeTeacher(),
            $dto->getTask(),
            $dto->getTextAnnotation(),
            $dto->getListConents(),
            $dto->getMainText(),
            $dto->getConclusion(),
           // $dto->getListConents()
        );
        

        // Получаем сгенерированный отчет
        $htmlReport = $builder->getReport();
    
        // Возвращаем HTML-ответ
        return new Response($htmlReport, Response::HTTP_OK, ['Content-Type' => 'text/html']);
    }
    
}



?>