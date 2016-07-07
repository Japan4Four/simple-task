<?php
class dbconn
{
    protected $database;

    function __construct()
    {
        $this->connect();
    }

    protected function connect()
    {
        $this->database = mysqli_connect('localhost', 'root', 'secret')
                            or die("<div class='alert alert-warning'><p>Error connecting to Database: <br><strong>".mysli_error()."</strong></p>");
        mysqli_select_db($this->database,'simple_task') or die("<div class='alert alert-warning'><p>Error Selecting Database: <br><strong>".mysli_error()."</strong></p>");
    }

    //Create object that instantiates a database connection.
    function db()
    {
        if(!isset($this->database))
        {
            $this->connect();
        }
        return $this->database;
    }

    //query all active items in 'task' table in our database.
    function query()
    {
        $result = mysqli_query($this->database, 'SELECT * FROM task');
        $data = $result->fetch_all();

        return $data;
    }

    //delete specific item based on id from database.
    function delete($taskid)
    {
        //We need to make sure that the item exists, otherwise we don't want to run
        //the deleteTask function.
        //We also need to close the connection before we can execute our "delete" statement.
        $query = $this->database->prepare("SELECT 1 FROM task WHERE id=(?)");
        $query->bind_param('s', $taskid);
        $query->execute();
        $exists = $query->fetch();
        $query->close();

        if($exists)
        {
            //Bind out task-id to the $deleteTask statement and execute
            //Since we know the item exists, we don't need to do any further checking.
            //return user to index with successful deletion message.
            $deleteTask = $this->database->prepare("DELETE FROM task WHERE id=(?)");
            $deleteTask->bind_param('s', $taskid);
            $deleteTask->execute();

            $result="task-deleted";
            header('Location:  http://simple-task.app/index.php?result='.$result);
            exit();
        }else{
            $result="error";
            header('Location: http://simple-task.app/index.php?result='.$result);
            exit();
        }
    }

    //Insert new item into database.
    function insert($task)
    {
        //Check for item by name in the database, then fetch it if it exists.
        //if the item doesn't exist in the database, go ahead and add it.
        $query = $this->database->prepare("SELECT 1 FROM task WHERE name=(?)");
        $query->bind_param('s', $task);
        $query->execute();
        $exists = $query->fetch();

        if($exists)
        {
            $result="name-exists";
            header('Location: http://simple-task.app/index.php?result='.$result);
            exit();
        }

        //Bind our parameter to $insertTask, if $insertTask is valid (true) and it isn't empty
        //Execute our query and return user to index page with "success" query string.
        //We also want to make sure that the user cannot submit an empty task, so we return user
        //to index with error and instructions.
        //Additional fail safe is something goes crazy, redirect user back to index.
        $insertTask = $this->database->prepare("INSERT INTO task (name) VALUES (?)");
        $insertTask->bind_param('s', $task);

        if($insertTask && !empty($task))
        {
            $insertTask->execute();
            $result = "success";
            header('Location: http://simple-task.app/index.php?result='.$result);

        }
        elseif (empty($task))
        {
            $result = "empty-field";
            header('Location: http://simple-task.app/index.php?result='.$result);
        }
        else {
            header('Location: http://simple-task.app');
        }
    }
}