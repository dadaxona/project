<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benzinrasxod extends Model
{
    use HasFactory;
    public $fillable = [
        'benzin_id',
        'holat',
        'holat2',
        'data',
        'sum',
        'summa',
        'litr',
        'jami',
    ];
    public $timestamps = true;

    public function benzin()
    {
        return $this->belongsTo(Benzin::class);
    }
}
