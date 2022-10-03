<?php

namespace App\Http\Controllers;

use App\Models\Ochert;
use App\Models\Ochertm;
use App\Models\Sistema;
use App\Models\Sistemam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OchertController extends Controller
{
    public function hoz()
    {
        $id = Ochert::where('id', ">", 0)->first();
        return $this->datacorbon($id);
    }

    public function datacorbon($id)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $zaqaz = Sistema::find(1);
        if($zaqaz){
            if($zaqaz->data == $data1){

            }else{
                $zaqaz->zaqaz = 0;
                $zaqaz->data = $data1;
                $zaqaz->update();
            }
        }else{
            Sistema::create([
                'zaqaz'=>0,
                'data'=>$data1,
            ]);
        }
        $da = Ochert::all();
        return response()->json(['id'=>$id, 'data'=>$da]);
    }

    public function hozm()
    {
        $id = Ochertm::where('id', ">", 0)->first();
        return $this->datacorbonm($id);
    }

    public function datacorbonm($id)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $zaqaz = Sistemam::find(1);
        if($zaqaz){
            if($zaqaz->data == $data1){

            }else{
                $zaqaz->zaqaz = 0;
                $zaqaz->data = $data1;
                $zaqaz->update();
            }
        }else{
            Sistemam::create([
                'zaqaz'=>0,
                'data'=>$data1,
            ]);
        }
        $da = Ochertm::all();
        return response()->json(['id'=>$id, 'data'=>$da]);
    }

    public function toast()
    {
        $data = Ochert::where('status', 1)->first();
        $data2 = Ochertm::where('status', 1)->first();
        if($data){
            $data->status = 2;
            $data->update();
            return response()->json(200);
        }elseif($data2){
            $data2->status = 2;
            $data2->update();
            return response()->json(200);
        }else{
            return response()->json(0);
        }
    }
}
