<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adressdok extends Model
{
    use HasFactory;
    public $fillable = ['adress'];
    public $timestamps = true;
}
