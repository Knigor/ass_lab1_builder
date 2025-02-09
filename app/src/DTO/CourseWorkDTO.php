<?php

// src/DTO/CourseWorkDTO.php

// Product для курсовых работ


namespace App\DTO;

class CourseWorkDTO
{
    public string $title;
    public string $discipline;
    public string $topic;
    public string $annotation;
    public string $content;
    public string $sources;
    public string $appendices;

    public function __construct(string $title, string $discipline, string $topic, string $annotation, string $content, string $sources, string $appendices)
    {
        $this->title = $title;
        $this->discipline = $discipline;
        $this->topic = $topic;
        $this->annotation = $annotation;
        $this->content = $content;
        $this->sources = $sources;
        $this->appendices = $appendices;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDiscipline(): string
    {
        return $this->discipline;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }

    public function getAnnotation(): string
    {
        return $this->annotation;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSources(): string
    {
        return $this->sources;
    }

    public function getAppendices(): string
    {
        return $this->appendices;
    }
}


?>