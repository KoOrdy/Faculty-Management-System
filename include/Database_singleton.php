<?php

class Database
{
  protected static $DBconnect = null;

  private function __construct()
  {
  }

  private static function connect()
  {
    $dbConfig = array(
      'dsn' => 'mysql:host=localhost;dbname=uni',
      'user' => 'root',
      'password' => '',
      'options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')
    );
    if (self::$DBconnect == null) {
      try {
        $connect = new PDO($dbConfig['dsn'], $dbConfig['user'], $dbConfig['password'], $dbConfig['options']);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        self::$DBconnect = $connect;
      } catch (PDOException $ex) {
        echo 'Faild ' . $ex->getMessage();
      }
    }
    return self::$DBconnect;
  }

  public static function query($query, $data = array(), $data_type = 'object')
  {
    $connect = self::connect();
    $stmt = $connect->prepare($query);
    if ($stmt) {
      $check = $stmt->execute($data);
      if ($check) {
        $data = $data_type == 'object' ? $stmt->fetchAll(PDO::FETCH_OBJ) : $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (is_array($data) && count($data) > 0) {
          return $data;
        }
      }
    }
    return false;
  }
}

