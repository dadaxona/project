<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavartur extends Model
{
    use HasFactory;
    public $fillable = [
        'glavnitip_id',
        'name'
    ];
    public $timestamps = true;

    public function glavnitip()
    {
        return $this->belongsTo(Glavnitip::class);
    }
}
