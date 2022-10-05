<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sachtable extends Model
{
    use HasFactory;
    protected $fillable=[
        'ten_sach',
        'lsbn',
        'tac_gia',
        'the_loai',
        'so_trang',
        'nam_xuat_ban',
                        ];
     public function scopeSearch($query)
        {
            if($key = request()->key){
                $query = $query->where('ten_sach','like','%'.$key.'%');
            }
            return $query;
        }
}
