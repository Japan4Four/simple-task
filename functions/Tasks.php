<?php
require("$_SERVER[DOCUMENT_ROOT]/db/connect.php");


//Query database and get ALL active tasks.
function getAllTasks()
{
    $db = new dbconn();
    $tasks =  $db->query();
    return $tasks;
}

//Add a new task to our database
function addTask()
{
    $db = new dbconn();
    $task = mysqli_escape_string($db->db(), $_POST['task']);
    $db->insert($task);
}

//Delete a task from our database.
function deleteTask($taskid)
{
    $db = new dbconn();
    $task = mysqli_escape_string($db->db(), $taskid);
    $db->delete((int)$task);
}


//Handle our form requests and pass them through to the correct function.
if(isset($_REQUEST['add']))
{
    addTask();
}

if(isset($_REQUEST['delete']))
{
    $taskid = $_POST['task-id'];
    deleteTask($taskid);
}





