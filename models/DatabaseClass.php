<?php


class database
{
    private $host;
    private $dbUser;
    private $dbPass;
    private $dbName;
    public $conn;

    function __construct()
    {
        require_once 'connect.php';
        $this->host = $host;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;

        include_once 'DatabaseConnectionsSingleton.php';
        $this->conn = Singleton::getinstance($this->host, $this->dbUser, $this->dbPass, $this->dbName);
    }


    function check($sql)
    {
        if ($result = $this->conn->query($sql)) {
            $num = $result->num_rows;
            return $num;
        }
    }

    function display($sql)
    {
        if ($result = $this->conn->query($sql)) {
            $num = $result->num_rows;
            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $data[$i] = $result->fetch_array(MYSQLI_ASSOC);
                }
                return $data;
            }
        } else {
            throw new Exception("problem in query:" . $sql);
        }
    }

    function select($sql)
    {
        if (!$result = $this->conn->query($sql)) {
            return throw new Exception("can not make query :" . $sql);

        }
        if ($row = $result->fetch_array(MYSQLI_ASSOC))
            $result->close();
        return $row;
    }

    function update($sql)
    {
        if (!$result = $this->conn->query($sql)) {
            throw new Exception("Error:can not execute the query");
        } else {
            return true;
        }
    }

    function insert($sql)
    {
        if ($result = $this->conn->query($sql)) {

            return true;
        } else {

            return throw new Exception("Error :SQL:" . $sql);

        }
    }

    function delete($sql)
    {
        if (!$result = $this->conn->query($sql)) {
            return throw new Exception("Error: not deleted");

        } else {
            return true;
        }
    }


    function getLastRecordData($tablename)
    {
        $query = "SELECT * FROM $tablename ORDER BY id  DESC LIMIT 1";

        if ($result = $this->conn->query($query)) {
            $data = $result->fetch_array(MYSQLI_ASSOC);
        }
        return $data;
    }
}