<?php

namespace App\Imports;

use App\Models\Ichkitavar;
use App\Models\Updatetavr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport2 implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Ichkitavar::create([
                'tavar_id'=>$row[1],
                'tavar2_id'=>$row[2],
                'name'=>$row[3],
                'raqam'=>$row[4],
                'hajm'=>$row[5],
                'summa'=>$row[6],
                'summa2'=>$row[7],
                'summa3'=>$row[8],
                'kurs'=>$row[9],
                'kurs2'=>$row[10]
            ]);
        }
    }
}
