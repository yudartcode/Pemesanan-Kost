<?php
require_once('base/model.php');

class Kost extends Model {
    public $table = 'tb_kost';
    public $nama;
    public $alamat;
    public $harga;
    public $jumlah_kamar;
    public $tipe;
    public $fasilitas;
    public $id_pemilik;

    public function save()
    {
        $this->atribute = ["'$this->nama'","'$this->alamat'","'$this->harga'","'$this->jumlah_kamar'","'$this->tipe'","'$this->fasilitas'","'$this->id_pemilik'"];
        return parent::save();
    }

    public function update($id)
    {
        $this->fid = 'id';
        $this->field = "nama='$this->nama',alamat='$this->alamat',harga=$this->harga,jumlah=$this->jumlah,tipe='$this->tipe',fasilitas='$this->fasilitas',id_pemilik='$this->id_pemilik',";
        return parent::update($id);
    }

    public function delete($id)
    {
        $this->fid = 'id';
        return parent::delete($id);
    }
}