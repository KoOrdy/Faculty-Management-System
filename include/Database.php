<?php

class Database
{
  private function connect()
  {
    $dbConfig = array(
      'dsn' => 'mysql:host=localhost;dbname=uni',
      'user' => 'root',
      'password' => '',
      'options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')
    );
    try {
      $DBconnect = new PDO($dbConfig['dsn'], $dbConfig['user'], $dbConfig['password'], $dbConfig['options']);
      $DBconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $DBconnect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
      return $DBconnect;
    } catch (PDOException $ex) {
      echo 'Faild ' . $ex->getMessage();
    }
  }

  public function query($query, $data = array(), $data_type = 'object')
  {
    $DBconnect = $this->connect();
    $stmt = $DBconnect->prepare($query);
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