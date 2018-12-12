<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id_pemilik','id_peminjam','jbarang','status','id_barang','tanggal_ambil'
    ];
    public function User(){
        return $this-> belongsTo(User::class);
    }

    public function Admin(){
        return $this-> belongsTo(Admin::class);
    }

    public function Menu(){
        return $this-> belongsTo(Menu::class);
    }
}
