<?php
class Place
{
    private $city;
    private $picture;

    function __construct($city, $picture)
        {
            $this->city = $city;
            $this->picture = $picture;
        }

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }

        function setPicture($new_picture)
        {
            $this->picture = (string) $new_picture;
        }

        function getCity()
        {
            return $this->city;
        }

        function getPicture()
        {
            return $this->picture;
        }

        function save()
        {
        array_push($_SESSION['list_of_places'], $this);
        }

        static function getAll()
        {
        return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }
    }
    ?>
