<?php

namespace App\Http\Controllers;

use App\Models\Srokdata;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class SrokController extends Controller
{
    public function datasrokdb()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $data = Srokdata::find(1);
        if($data){
            $data->yil = $data1;
            $data->oy = $month;
            $data->kun = $day;
            $data->update();
        }else{
            Srokdata::create([
                'yil'=>$data1,
                'oy'=>$month,
                'kun'=>$day,
                'srok'=>0,
                'status'=>0,
                'holat'=>"Blok"
            ]);
        }
        return $this->datasrokdb2($data1);
    }

    public function datasrokdb2($data1)
    {
        $data = Srokdata::find(1);
        if($data->srok >= $data1){
            return response()->json(["code"=>200, "data"=>$data]);
        }else{
            $data->status = 0;
            $data->holat = "Blok";
            return response()->json(["code"=>0, "data"=>$data]);
        }
    }

    public function aktivstatus(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $validator = Validator::make($request->all(), [
            'month'=>'required',
        ]);
        if($validator->passes()){
            $data = Srokdata::find(1);
            $data->yil = $data1;
            $data->oy = $month;
            $data->kun = $day;
            $data->srok = $request->month;
            $data->status = 1;
            $data->holat = "Aktiv";
            $data->update();
            return response()->json(['code'=>201, 'result'=>$data]);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }

    }
}
