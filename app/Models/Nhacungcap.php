<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhacungcap extends Model
{
    use HasFactory;
    protected $fillable  = [
        'id',
        'ten_hang',
        'mathang_id',
        'gia',
        'hinh_anh',
        'so_luong_nhap',
        'ten_cong_ty',
    ];

    public function mathang()
    {
        return $this->belongsTo(Mathang::class, 'mathang_id');
    }

    public function tonkho()
    {
        return $this->hasMany(Tonkho::class);
    }
}




