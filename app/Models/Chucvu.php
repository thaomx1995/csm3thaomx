<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chucvu extends Model
{
    use HasFactory;
    protected $fillable  = [
        'ten_vi_tri',
        'muc_luong',
    ];

    public function nhanvien()
    {
        return $this->hasMany(Nhanvien::class);
    }
}
