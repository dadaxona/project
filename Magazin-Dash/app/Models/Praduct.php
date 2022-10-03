<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praduct extends Model
{
    use HasFactory;
    public $fillable = [
        'glavnitip_id',
        'tavartur_id',
        'glavniname',
        'tipname',
        'name',
        'img',
        'hajm',
        'pakupka',
        'prodaja',
    ];
    public $timestamps = true;

    public function glavnitip()
    {
        return $this->belongsTo(Glavnitip::class);
    }
    public function tavartur()
    {
        return $this->belongsTo(Tavartur::class);
    }
}
