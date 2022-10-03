<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karzina extends Model
{
    use HasFactory;
    public $fillable = ['tavar_id', 'ichkitavar_id', 'name', 'soni', 'raqam', 'hajm', 'summa', 'summa2', 'chegirma', 'itog', 'status'];
    public $timestamps = true;

    public function ichkitavar()
    {
        return $this->belongsTo(Ichkitavar::class);
    }
}
