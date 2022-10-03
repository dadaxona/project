<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benzinperexod extends Model
{
    use HasFactory;
    public $fillable = [
        'benzin_id',
        'plus',
        'summa',
        'data',
        'jami'
    ];
    public $timestamps = true;

    public function benzin()
    {
        return $this->belongsTo(Benzin::class);
    }
}
