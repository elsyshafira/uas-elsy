<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    protected $primaryKey = 'produk_id';
    protected $guarded = '[]';
    protected $fillable = [
        'produk_id',
        'produk_id_gol',
        'produk_id_user',
        'produk_no',
        'produk_nama',
        'produk_harga',
        'produk_stok',
        'produk_keterangan'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);    
    }
}
