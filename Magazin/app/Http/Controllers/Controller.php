<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function sicl1()
    {
        $data = DB::table('praducts')->where('glavnitip_id', 1)->get();
        return response()->json($data);
    }
    
    public function sicl2()
    {
        $data = DB::table('praducts')->where('glavnitip_id', 2)->get();
        return response()->json($data);
    }
    public function sicl3()
    {
        $data = DB::table('praducts')->where('glavnitip_id', 3)->get();
        return response()->json($data);
    }
}
