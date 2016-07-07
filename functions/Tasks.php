<?php
include_once('./db/connect.php');

    function getAllTasks()
    {
        $db = new dbconn();
        $tasks =  $db->query();
        return $tasks;
    }

    function addTask()
    {

    }

    function deleteTask()
    {

    }




