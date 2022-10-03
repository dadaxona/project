<?php

namespace App\Exports;

use App\Models\Usta2;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usta2::all();  
    }
}
