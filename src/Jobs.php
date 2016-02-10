<?php
class Jobs
{
    private $title;
    private $salary;
    private $desc;

    function __construct($title, $salary, $desc)
        {
            $this->title = $title;
            $this->salary = $salary;
            $this->desc = $desc;
        }

        function setTitle($new_title)
        {
            $this->title = (string) $new_title;
        }

        function setSalary($new_salary)
        {
            $this->salary = (string) $new_salary;
        }

        function setDesc($new_salary)
        {
            $this->desc = (string) $new_desc;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getSalary()
        {
            return $this->salary;
        }

        function getDesc()
        {
            return $this->desc;
        }


        function save()
        {
        array_push($_SESSION['list_of_jobs'], $this);
        }

        static function getAll()
        {
        return $_SESSION['list_of_jobs'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_jobs'] = array();
        }
    }
    ?>
