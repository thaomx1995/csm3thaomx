<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mathang extends Model
{
    use HasFactory;
    protected $fillable  = [
        'qr_code',
        'loai_hang',
       
    ];

    public function nhacungcap()
    {
        return $this->hasMany(Nhacungcap::class);
    }

}
