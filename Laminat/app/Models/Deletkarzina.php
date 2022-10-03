<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deletkarzina extends Model
{
    use HasFactory;
    public $fillable = [
        'tavar_id',
        'tavar2_id',
        'name',
        'raqam',
        'hajm', 
        'summa',
        'summa2',
        'kurs', 
    ];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }

    public function tavar2()
    {
        return $this->belongsTo(Tavar2::class);
    }
}
