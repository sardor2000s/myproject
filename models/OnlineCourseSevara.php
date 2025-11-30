<?php
namespace app\models;

use app\models\CourseSevara;

/**
 * OnlineCourseSevara — Child class
 * Parent: CourseSevara
 * O'ziga xos property: videoLink, durationHours
 * O'ziga xos metod: showVideo()
 */
class OnlineCourseSevara extends CourseSevara
{
    // Public property — video manzili
    public $videoLink;

    // Protected property — davomiylik (soat)
    protected $durationHours = 0;

    // Konstruktor — parent konstruktorini chaqirish shart!
    public function __construct($title, $teacher, $videoLink = null)
    {
        parent::__construct($title, $teacher); // Parent konstruktor
        $this->videoLink = $videoLink;
    }

    // Online kursga xos metod — video darsni ko'rsatish
    public function showVideo()
    {
        if ($this->videoLink) {
            return "Video darsni ochish: {$this->videoLink}";
        }
        return "Video link topilmadi.";
    }

    // Setter — davomiylikni qo'yish
    public function setDurationHours($hours)
    {
        if (is_numeric($hours) && $hours >= 0) {
            $this->durationHours = (float)$hours;
            return true;
        }
        return false;
    }

    // Getter — davomiylikni olish
    public function getDurationHours()
    {
        return $this->durationHours;
    }

    // Parent protected metodini child ichida chaqirish
    public function getCourseReport()
    {
        return $this->createReport();
    }
}
