<?php
require_once('base/model.php');

class Pemilik extends Model {
    public $table = 'tb_pemilik';
    public $nama;
    public $alamat;
    public $no_telpon;
    public $rekening;
    public $username;
    public $password;

    public function save()
    {
        $this->atribute = [
            "'$this->nama'",
            "'$this->alamat'",
            "'$this->no_telpon'",
            "'$this->rekening'",
            "'$this->username'",
            "'$this->password'",
        ];
        return parent::save();
    }

    public function update($id)
    {
        $this->fid = 'id';
        $this->field = "nama='$this->nama',alamat='$this->alamat',no_telpon='$this->no_telpon',rekening='$this->rekening',password='$this->password'";
        return parent::update($id);
    }

    public function delete($id)
    {
        $this->fid = 'id';
        return parent::delete($id);
    }
}