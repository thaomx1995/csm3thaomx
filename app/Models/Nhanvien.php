<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'chuc_vu',
        'ten',
        'hinh_anh_nv',
        'sdt',
        'email',
        'dia_chi',
        'nam_sinh'
    ];

    public function chucvu()
    {
        return $this->belongsTo(Chucvu::class , 'chuc_vu' );
    }

}
