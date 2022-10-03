<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praduct2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'praduct_id',
        'name',
        'file',
        'summa',
    ];
    public $timestamps=true;

    public function praduct()
    {
       return $this->belongsTo(Praduct::class);
    }
}
