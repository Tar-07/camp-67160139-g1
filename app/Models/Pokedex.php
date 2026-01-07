<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    // เพิ่มบรรทัดนี้ลงไปเพื่อระบุชื่อตารางให้ตรงกับใน phpMyAdmin
    protected $table = 'pokedexs';
}
