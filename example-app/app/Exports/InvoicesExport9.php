<?php

namespace App\Exports;

use App\Models\Ichkitavar;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport9 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ichkitavar::select('name', 'hajm', 'kurs')->get();  
    }
}
