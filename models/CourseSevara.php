<?php
namespace app\models;

/**
 * CourseSevara — Parent class
 * Umumiy xususiyatlar: title, teacher
 * Umumiy metodlar: getInfo(), getTitle()
 */
class CourseSevara
{
    // Public property — tashqaridan o'qish mumkin
    public $teacher;

    // Protected property — child class ko'radi, tashqaridan ko'rinmaydi
    protected $title;

    // Private property — faqat shu klass ichida ishlatiladi
    private $internalCode;

    // Konstruktor — obyekt yaratilganda chaqiladi
    public function __construct($title, $teacher)
    {
        $this->title  = $title;
        $this->teacher = $teacher;

        // Private property ichki kod
        $this->internalCode = uniqid("sev_");
    }

    // Public metod — kurs haqida umumiy ma'lumot
    public function getInfo()
    {
        return "Course: {$this->title}, Teacher: {$this->teacher}";
    }

    // Protected metod — faqat parent va child ichida ishlaydi
    protected function createReport()
    {
        return "Report for course: {$this->title}";
    }

    // Public getter — protected title'ni olish uchun
    public function getTitle()
    {
        return $this->title;
    }

    // Private metod — child class kira olmaydi
    private function getInternalCode()
    {
        return $this->internalCode;
    }

    // Public metod — private metodni chaqirish imkonini beradi
    public function revealInternalCode()
    {
        return $this->getInternalCode();
    }
}
