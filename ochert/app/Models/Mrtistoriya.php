<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mrtistoriya extends Model
{
    use HasFactory;
    public $fillable = [
       'name',
       'fam',
       'data',
       'tel',
       'adress',
       'summa',
       'nam2',
       'jami',
    ];
    public $timestamps = true;
}
