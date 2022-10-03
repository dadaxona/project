<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyurtma2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyurtma_id',
        'name',
        'file',
        'son',
        'summa',
        'kament'
    ];
    public $timestamps=true;
}
