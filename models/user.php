<?php


class users
{
    private $id;
    private $name;
    private $username;
    private $password;
    private $type;
    private $db;

    function __construct()
    {
        include_once 'DatabaseClass.php';
        $this->db = new database();
    }


    function login($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $sql = "SELECT * FROM user WHERE username='$this->username'";
        $row = $this->db->select($sql);

        if ($row['password'] === $this->password) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['type'] = $row['type'];

            return true;
        }
        return false;
    }

    function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['type']);
        session_destroy();
    }


    public function usersinfo($info)
    {
        $this->username = $info['username'];
        $this->password = $info['password'];
        $this->name = $info['name'];
        $this->type = $info['type'];
    }


    function getID()
    {
        return $this->id;
    }

    function getname()
    {
        return $this->name;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }


    function setID($id)
    {
        $this->id = $id;
    }

    function setname($name)
    {
        $this->name = $name;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
}















?>