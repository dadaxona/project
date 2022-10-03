<?php

namespace App\Imports;

use App\Models\Tavar;
use App\Models\Tavardok;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport3 implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Tavar::create([
                'name'=>$row[1],
            ]);
            Tavardok::create([
                'name'=>$row[1],
            ]);
        }
    }
}
