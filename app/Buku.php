<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    
    protected $fillable =  ['judul','noisbn','penulis','penerbit','tahun','stok','harga_pokok','harga_jual','ppn','diskon'];
    public $timestamps = true;

    public function pasok()
    {
        return $this->hasMany('App\Pasok','id_buku');
    }

    public function penjualan()
    {
        return $this->hasMany('App\Penjualan','id_buku');
    }

}
