<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use App\Models\Itog;
use App\Models\Koshimcha;
use App\Models\Ochert;
use App\Models\Sistema;
use App\Models\Statistika;
use App\Models\User;
use App\Models\Uze;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user_live(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $sta = Statistika::find(1);
        if($sta){
            $sta->jamisumma = 0;
            $sta->jamiuser = 0;
            $sta->jamitex = 0;
            $sta->update();
        }else{
            Statistika::create([
                'jamisumma'=>0,
                'jamiuser'=>0,
                'jamitex'=>0,
            ]);
        }
        return $this->user_live2($request, $year, $month, $day);
    }

    public function user_live2($request, $year, $month, $day)
    {
        if($request->ajax()){
            $output = '';
            if($request->data2)
            {
                $dat = User::whereBetween('sana',[$request->data1, $request->data2])->get();
                foreach($dat as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid #ababab;">
                        <td>'.$row->name.'</td>
                        <td>'.$row->fam.'</td>
                        <td>'.$row->data.'</td>
                        <td>'.$row->tel.'</td>
                        <td>'.$row->adress.'</td>
                        <td>'.$row->doctor.'</td>
                        <td>'.$row->texnalog.'</td>
                        <td>'.number_format($row->jamisumma).'</td>
                        <td>'.$row->sana.'</td>
                    </tr>
                ';
                }
                foreach ($dat as $value) {
                    $sta = Statistika::find(1);                    
                    $sta->jamisumma = $sta->jamisumma + $value->jamisumma;
                    $sta->jamiuser = $sta->jamiuser + 1;
                    $sta->jamitex = $sta->jamitex + $value->texnalog;
                    $sta->update();
                }
            }else{
                $dat2 = User::orderBy("id", "DESC")->whereYear('sana', $year)->whereMonth('sana', $month)->whereDay('sana', $day)->get();
                foreach($dat2 as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid #ababab;">
                        <td>'.$row->name.'</td>
                        <td>'.$row->fam.'</td>
                        <td>'.$row->data.'</td>
                        <td>'.$row->tel.'</td>
                        <td>'.$row->adress.'</td>
                        <td>'.$row->doctor.'</td>
                        <td>'.$row->texnalog.'</td>
                        <td>'.number_format($row->jamisumma).'</td>
                        <td>'.$row->sana.'</td>
                    </tr>
                ';
                }
                foreach ($dat2 as $value2) {
                    $sta2 = Statistika::find(1);
                    $sta2->jamisumma = $sta2->jamisumma + $value2->jamisumma;
                    $sta2->jamiuser = $sta2->jamiuser + 1;
                    $sta2->jamitex = $sta2->jamitex + $value2->texnalog;
                    $sta2->update();
                }
            }
            $st = Statistika::find(1);
            return response()->json(["data"=>$output, 'st'=>$st]);
        }
    }

    public function live_belgi(Request $request)
    {
        if($request->ajax())
        {
            $a = '';
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
            $data = Uze::where('tex', 'like', '%'.$query.'%')
                            ->orderBy('id', 'DESC')
                            ->get();            
            }
            else
            {
            $data = Uze::all();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    if($row->status == 1){
                        $a = '  
                            <td>
                                <input type="checkbox" id="chek" class="form-check-input" data-id="'.$row->id.'" checked>
                            </td>'
                        ;
                    }else{
                        $a = '  
                            <td>
                                <input type="checkbox" id="chek" class="form-check-input" data-id="'.$row->id.'">
                            </td>'
                        ;
                    }

                    $output .= '
                    <tr style="border-bottom: 1px solid #ababab;">
                        <td>'.$row->tex.'</td>
                        '.$a.'
                        <td>'.number_format($row->summa).' sum</td>                
                    </tr>
                ';
                }
            }
            else
            {
            $output = '
               
                ';
            }
            $data = array(
                'table_data'  => $output,
            );
            return response()->json($data);
        }
    }

    public function doctor()
    {
        $data = Doktor::all();
        return response()->json($data);
    }

    public function uchurt()
    {
        $data = Ochert::all();
        return response()->json($data);
    }
    
    public function hozirgiuchurt()
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
        return response()->json($id);        
    }

    public function brlgila(Request $request)
    {
        $data = Itog::find(1);
        if($data){
            
        }else{
            Itog::create(['itog'=>0, 'yonalish'=>0]);
        }
        return $this->brlgila2($request);
    }

    public function brlgila2($request)
    {
        $data = Uze::find($request->id);
        if($data->status == 0){
            $data->status = 1;
            $data->update();
            return response()->json(['code'=>200]);
        }else{
            $data->status = 0;
            $data->update();
            return response()->json(['code'=>0]);
        }
    }

    public function itogs()
    {
        $itog = Itog::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        $variable = Uze::where('status', 1)->get();
        foreach ($variable as $value) {
            $itog2 = Itog::find(1);
            $itog2->itog = $itog2->itog + $value->summa;
            $itog2->yonalish = $itog2->yonalish + 1;
            $itog2->update();            
        }
        $i = Itog::find(1);
        if($i){
            return response()->json(['itog'=>number_format($i->itog), 'itog1'=>$i->itog, 'yon'=>$i->yonalish]);
        }else{
            return response()->json(['itog'=>0, 'itog1'=>0, 'yon'=>0]);
        }
    }

    public function userstore(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $validator = Validator::make($request->all(), [
            'name'=>'required',
        ],[
            'name'=>'Ismni kiritish majburiy',
        ]);
        if($validator->passes()){
            if($request->id){
                return $this->userupdate($request, $data1);
            }else{
                return $this->usercreate($request, $data1);
            }
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function usercreate($request, $data1)
    {
        if($request->ok){
            return $this->usercreate2ok($request, $data1);
        }else{
            $zaqaz = Sistema::find(1);
            if($zaqaz){
                $zaqaz->zaqaz = $zaqaz->zaqaz + 1;
                $zaqaz->update();
                return $this->usercreate2($request, $data1, $zaqaz);
            }else{
                $zaqaz1 = Sistema::create(['zaqaz'=>1]);
                return $this->usercreate2($request, $data1, $zaqaz1);
            }
        }
    }
    
    public function usercreate2ok($request, $data1)
    {
        $doctor = Doktor::where('tel', $request->doctor)->first();
        User::create([
            'name'=>$request->name,
            'fam'=>$request->fam,
            'data'=>$request->data,
            'tel'=>$request->tel,
            'adress'=>$request->adress,
            'doctor'=>$doctor->name,
            'doktel'=>$request->doctor,
            'texnalog'=>$request->texnalog,
            'jamisumma'=>$request->jamisumma - $request->chgirma,
            'chgirma'=>$request->chgirma,
            'sana'=>$data1,
        ]);
        Uze::where('status', 1)->update(['status'=>0]);
        $itog = Itog::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>200]);
    }

    public function usercreate2($request, $data1, $zaqaz)
    {
        $doctor = Doktor::where('tel', $request->doctor)->first();
        $user = User::create([
            'name'=>$request->name,
            'fam'=>$request->fam,
            'data'=>$request->data,
            'tel'=>$request->tel,
            'adress'=>$request->adress,
            'doctor'=>$doctor->name,
            'doktel'=>$request->doctor,
            'texnalog'=>$request->texnalog,
            'jamisumma'=>$request->jamisumma - $request->chgirma,
            'chgirma'=>$request->chgirma,            
            'sana'=>$data1,
        ]);
        $variable = Uze::where('status', 1)->get();
        foreach ($variable as $value) {
            Koshimcha::create([
                'user_id'=>$user->id,
                'uuid'=>$value->id,
                'status'=>0,
            ]);
        }
        $ochert = Ochert::create([
            'user_id'=>$user->id,
            'count'=>$zaqaz->zaqaz,
            'status'=>0,
        ]);
        Uze::where('status', 1)->update(['status'=>0]);
        $itog = Itog::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>200, 'ochert'=>"Uzi-$ochert->count", 'data'=>$user, "variable"=>$variable->toArray()]);
    }

    public function userupdate($request, $data1)
    {
        $doctor = Doktor::where('tel', $request->doctor)->first();
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->fam = $request->fam;
        $user->data = $request->data;
        $user->tel = $request->tel;
        $user->adress = $request->adress;
        $user->doctor = $doctor->name;
        $user->doktel = $request->doctor;
        $user->texnalog = $request->texnalog;
        $user->jamisumma = $request->jamisumma - $request->chgirma;
        $user->chgirma = $request->chgirma;
        $user->sana = $data1;
        $user->update();
        $variable = Uze::where('status', 1)->get();
        Koshimcha::where('user_id', $user->id)->delete();
        foreach ($variable as $value) {
            Koshimcha::create([
                'user_id'=>$user->id,
                'uuid'=>$value->id,
                'status'=>0,
            ]);
        }
        $ochert = Ochert::where('user_id', $user->id)->first();
        Uze::where('status', 1)->update(['status'=>0]);
        $itog = Itog::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>201, 'ochert'=>"Uzi-$ochert->count", 'data'=>$user, "variable"=>$variable->toArray()]);
    }

    public function editus(Request $request)
    {
        $data = User::find($request->user_id);
        $variable = Koshimcha::where('user_id', $data->id)->get();
        Uze::where('status', 1)->update([
            'status'=>0
        ]);
        foreach ($variable as $value) {
            Uze::find($value->uuid)->update([
                'status'=>1
            ]);
        }
        return response()->json($data);
    }

    public function ddd3(Request $request)
    {
        User::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function clear()
    {
        Uze::where('status', 1)->update([
            'status'=>0
        ]);
        return response()->json(200);
    }

    public function keyi()
    {
        $id = Ochert::where('id', ">", 0)->first();
        Ochert::find($id->id)->delete($id->id);
        $id2 = Ochert::where('id', ">", 0)->first();
        Ochert::find($id2->id)->update(['status'=>1]);
        return response()->json(200);
    }
}
