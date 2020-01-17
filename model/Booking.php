<?php
require_once('base/model.php');

class Booking extends Model
{
    public $table = 'tb_transaksi';
    public $tgl_transaksi;
    public $tgl_masuk;
    public $durasi;
    public $bayar;
    public $tgl_keluar;
    public $id_kost;
    public $id_pemesan;
    public $status;

    public function save()
    {
        $this->field = 
            "tgl_transaksi='$this->tgl_transaksi',
            tgl_masuk='$this->tgl_masuk',
            durasi='$this->durasi',
            bayar='$this->bayar',
            tgl_keluar='$this->tgl_keluar',
            id_kost='$this->id_kost',
            id_pemesan='$this->id_pemesan',
            status='Sedang Diproses'";
        return parent::saveTransaksi();
    }

    public function update($id)
    {
        $this->fid = 'id';
        $this->field = 
        // "tgl_masuk='$this->tgl_masuk',durasi='$this->durasi',bayar='$this->bayar',tgl_keluar='$this->tgl_keluar',id_kost='$this->id_kost',id_pemesan='$this->id_pemesan',
        "status='$this->status'";
        return parent::update($id);
    }

    public function delete($id)
    {
        $this->fid = 'id';
        return parent::delete($id);
    }
}
