<?php
require('connection.php');

class Model extends Connection{
    public $table = '';

    public function all()
    {
        $query = "SELECT * FROM $this->table";
        return mysqli_query(parent::Connection(), $query);
    }

    public function allOrder($orderBy, $type)
    {
        $query = "SELECT * FROM $this->table ORDER BY $orderBy $type";
        return mysqli_query(parent::Connection(), $query);
    }

    public function where($field1, $field2)
    {
        $query = "SELECT * FROM $this->table WHERE $field1='$field2'";
        return mysqli_query(parent::Connection(), $query);
    }

    public function whereOrder($field1, $field2, $orderBy, $type)
    {
        $query = "SELECT * FROM $this->table WHERE $field1='$field2' ORDER BY $orderBy $type";
        return mysqli_query(parent::Connection(), $query);
    }

    public function save($option = [], $val = [])
    {
        $query = "INSERT INTO $this->table SET $option = $val";
        return mysqli_query(parent::Connection(), $query);
    }
}
