<?php

namespace App\Http\Controllers;

use App\Models\Praduct;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function postdata()
    {
        $data = Praduct::all();
        foreach( $data as $row ){
            Praduct::where('glavnitip_id', $row->glavnitip_id)->where('tavartur_id', $row->tavartur_id)->update([
                'glavniname' => $row->glavnitip->name,
                'tipname' => $row->tavartur->name,
            ]);
        }
    }
}
