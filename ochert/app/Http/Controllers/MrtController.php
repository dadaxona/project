<?php

namespace App\Http\Controllers;
use App\Models\Drektor;
use App\Models\Mrt;
use App\Models\Doktor;
use App\Models\Itogm;
use App\Models\Koshimcham;
use App\Models\Ochertm;
use App\Models\Sistemam;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class MrtController extends Controller
{
    public function mrt()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('mrt',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function live_mrt(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
            $data = Mrt::where('nam', 'like', '%'.$query.'%')
                            ->orderBy('id', 'DESC')
                            ->get();            
            }
            else
            {
            $data = Mrt::orderBy('id', 'DESC')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr id="row_'.$row->id.'" style="border-bottom: 1px solid #ababab;">
                    <td>'.$row->tex.'</td>
                    <td>'.number_format($row->summa).' sum</td>
                    <td>
                    <a href="javascript:void(0)" id="editpost" data-id="'.$row->id.'" data-tex="'.$row->tex.'" data-summa="'.$row->summa.'" style="color: green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        </svg>
                    </a>
                    <a href="javascript:void(0)" id="delpost" data-id="'.$row->id.'" style="color: red">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                    </a>                    
                    </td>
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

            echo json_encode($data);
        }
    }


    public function mrtstor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tex'=>'required',
            'summa'=>'required',
        ]);
        if($validator->passes()){
            if($request->id){
                Mrt::find($request->id)->update([
                    'tex'=>$request->tex,
                    'summa'=>$request->summa,
                ]);            
            }else{
                Mrt::create([
                    'tex'=>$request->tex,
                    'summa'=>$request->summa,
                ]);
            }
            return response()->json(200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function del2post(Request $request)
    {
        Mrt::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function live_belgim(Request $request)
    {
        if($request->ajax())
        {
            $a = '';
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
            $data = Mrt::where('tex', 'like', '%'.$query.'%')
                            ->orderBy('id', 'DESC')
                            ->get();            
            }
            else
            {
            $data = Mrt::all();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    if($row->status == 1){
                        $a = '  
                            <td>
                                <input type="checkbox" id="chekm" class="form-check-input" data-id="'.$row->id.'" checked>
                            </td>'
                        ;
                    }else{
                        $a = '  
                            <td>
                                <input type="checkbox" id="chekm" class="form-check-input" data-id="'.$row->id.'">
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

    public function doctorm()
    {
        $data = Doktor::all();
        return response()->json($data);
    }

    public function uchurtm()
    {
        $data = Ochertm::all();
        return response()->json($data);
    }
    
    public function hozirgiuchurtm()
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
        return response()->json($id);        
    }

    public function brlgilam(Request $request)
    {
        $data = Itogm::find(1);
        if($data){
            
        }else{
            Itogm::create(['itog'=>0, 'yonalish'=>0]);
        }
        return $this->brlgila2m($request);
    }

    public function brlgila2m($request)
    {
        $data = Mrt::find($request->id);
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

    public function itogsm()
    {
        $itog = Itogm::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        $variable = Mrt::where('status', 1)->get();
        foreach ($variable as $value) {
            $itog2 = Itogm::find(1);
            $itog2->itog = $itog2->itog + $value->summa;
            $itog2->yonalish = $itog2->yonalish + 1;
            $itog2->update();            
        }
        $i = Itogm::find(1);
        if($i){
            return response()->json(['itog'=>number_format($i->itog), 'itog1'=>$i->itog, 'yon'=>$i->yonalish]);
        }else{
            return response()->json(['itog'=>0, 'itog1'=>0, 'yon'=>0]);
        }
    }

    public function userstorem(Request $request)
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
                return $this->userupdatem($request, $data1);
            }else{
                return $this->usercreatem($request, $data1);
            }
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function usercreatem($request, $data1)
    {
        if($request->ok){
            return $this->usercreate2okm($request, $data1);
        }else{
            $zaqaz = Sistemam::find(1);
            if($zaqaz){
                $zaqaz->zaqaz = $zaqaz->zaqaz + 1;
                $zaqaz->update();
                return $this->usercreate2m($request, $data1, $zaqaz);
            }else{
                $zaqaz1 = Sistemam::create(['zaqaz'=>1]);
                return $this->usercreate2m($request, $data1, $zaqaz1);
            }
        }
    }
       
    public function usercreate2okm($request, $data1)
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
        Mrt::where('status', 1)->update(['status'=>0]);
        $itog = Itogm::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>200]);
    }

    public function usercreate2m($request, $data1, $zaqaz)
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
        $variable = Mrt::where('status', 1)->get();
        foreach ($variable as $value) {
            Koshimcham::create([
                'user_id'=>$user->id,
                'uuid'=>$value->id,
                'status'=>0,
            ]);
        }
        $ochert = Ochertm::create([
            'user_id'=>$user->id,
            'count'=>$zaqaz->zaqaz,
            'status'=>0,
        ]);
        Mrt::where('status', 1)->update(['status'=>0]);
        $itog = Itogm::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>200, 'ochert'=>"Mrt-$ochert->count", 'data'=>$user, "variable"=>$variable->toArray()]);
    }

    public function userupdatem($request, $data1)
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
        $variable = Mrt::where('status', 1)->get();
        Koshimcham::where('user_id', $user->id)->delete();
        foreach ($variable as $value) {
            Koshimcham::create([
                'user_id'=>$user->id,
                'uuid'=>$value->id,
                'status'=>0,
            ]);
        }
        $ochert = Ochertm::where('user_id', $user->id)->first();
        Mrt::where('status', 1)->update(['status'=>0]);
        $itog = Itogm::find(1);
        $itog->itog = 0;
        $itog->yonalish = 0;
        $itog->update();
        return response()->json(['code'=>201, 'ochert'=>"Mrt-$ochert->count", 'data'=>$user, "variable"=>$variable->toArray()]);
    }

    public function editusm(Request $request)
    {
        $data = User::find($request->user_id);
        $variable = Koshimcham::where('user_id', $data->id)->get();
        Mrt::where('status', 1)->update([
            'status'=>0
        ]);
        foreach ($variable as $value) {
            Mrt::find($value->uuid)->update([
                'status'=>1
            ]);
        }
        return response()->json($data);
    }

    public function ddd3m(Request $request)
    {
        User::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function clearm()
    {
        Mrt::where('status', 1)->update([
            'status'=>0
        ]);
        return response()->json(200);
    }

    public function keyim()
    {
        $id = Ochertm::where('id', ">", 0)->first();
        Ochertm::find($id->id)->delete($id->id);
        $id2 = Ochertm::where('id', ">", 0)->first();
        Ochertm::find($id2->id)->update(['status'=>1]);
        return response()->json(200);
    }
}
