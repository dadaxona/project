<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'fam',
        'data',
        'tel',
        'adress',
        'doctor',
        'doktel',
        'texnalog',
        'jamisumma',
        'chgirma',
        'sana',
    ];
    public $timestamps = true;
}
