<?php
require_once('connection.php');

class Model extends Connection{
    public $table = '';
    public $atribute = [];
    public $field;
    public $fid;

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

    public function save()
    {
        $val = 'NULL';
        foreach ($this->atribute as $atr) {
            $val .= ','. $atr;
        }
        $query = "INSERT INTO $this->table VALUES ($val)";
        $go = mysqli_query(parent::Connection(), $query);

        if ($go) {
            return $go;
        } else {
            return "Gagal insert";
        }
    }

    public function saveTransaksi()
    {        
        $query = "INSERT INTO $this->table SET $this->field";
        $go = mysqli_query(parent::Connection(), $query);

        if ($go) {
            return $go;
        } else {
            return "Gagal insert";
        }
    }

    public function update($id)
    {
        $query = "UPDATE $this->table SET $this->field WHERE $this->fid = $id";
        return mysqli_query(parent::Connection(), $query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE $this->fid = $id";
        return mysqli_query(parent::Connection(), $query);
    }

    public function login($user, $pass)
    {
        $query = "SELECT * FROM $this->table WHERE username='$user' AND password='$pass'";
        return mysqli_query(parent::Connection(), $query);
    }
}
