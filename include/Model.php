<?php

class Model extends Database {
  protected $table = null;

  protected $coulmnsAllowed = [];

  protected $errors = [];

  public function __construct($table) {
    $this->table = $table;
  }

  public function setCoulmnsAllowed($coulmnsAllowed = []) {
    $this->coulmnsAllowed = $coulmnsAllowed;
  }

  public function insert($data) {
    foreach($data as $key => $column) {
      if(!in_array($key, $this->coulmnsAllowed)) {
        unset($data[$key]);
      }
    }
    $table = $this->table;
    $key = array_keys($data);
    $columns = implode(',', $key);
    $values = implode(',:', $key);
    $query = "INSERT INTO $table ($columns) VALUES (:$values)";
    return self::query($query, $data);
  }

  public function select_by_limit_condition($index_name = '', $column, $operator, $valuesArray, $limit = 1, ...$params) {
    $table = $this->table;
    $query = "SELECT * FROM $table USE INDEX ($index_name) WHERE $column $operator ?";
    $i = 0;
    foreach($params as $param) {
      $query .= " $param";
      if($i == 2) {
        $query .= ' ?';
        $i = 0;
      } else
        $i++;
    }
    $query .= " LIMIT $limit";
    return self::query($query, $valuesArray, 'array');
  }

  public function update($index_name, $data, $where) {
    $table = $this->table;
    $str = '';
    foreach($this->coulmnsAllowed as $coulmn) {
      $str .= $coulmn.'=:'.$coulmn.',';
    }
    $str = trim($str, ',');
    $query = "UPDATE $table FORCE INDEX ($index_name) SET $str WHERE $where = :$where";
    return self::query($query, $data);
  }
}