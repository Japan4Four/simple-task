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

    function __destruct()
    {
        mysqli_close($this->database);
    }

    function db()
    {
        if(!isset($this->database))
        {
            $this->connect();

        }
        return $this->database;
    }

    function query()
    {
        $result = mysqli_query($this->database, 'SELECT * FROM task');
        $data = $result->fetch_all();

        return $data;
    }
}