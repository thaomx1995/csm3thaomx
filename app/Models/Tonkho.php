<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tonkho extends Model
{
    use HasFactory;
    protected $fillable  = [
        'ma_hang',
        'ten_hang',
        'ten_cong_ty'
    ];

    public function nhacungcap()
    {
        return $this->belongsTo(Nhacungcap::class);
    }

}
