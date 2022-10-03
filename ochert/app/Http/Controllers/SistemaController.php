<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use Illuminate\Http\Request;
use App\Models\Drektor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class SistemaController extends Controller
{
    public function dok()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('dok',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function userlar(Request $request)
    {
        $output = '';
        $dok = Doktor::find($request->id);
        $user = User::where('doktel', $dok->tel)->get();
        foreach($user as $row)
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
        return response()->json($output);
    }

    public function live_dok()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        Doktor::where('id', ">", 0)->update(['soni'=>0]);
        $data = Doktor::all();
        foreach($data as $value)
        {
            $user = User::where('doktel', $value->tel)->whereYear('sana', $year)->whereMonth('sana', $month)->whereDay('sana', $day)->get();
            foreach ($user as $value2) {
                $row = Doktor::where('tel', $value2->doktel)->first();
                $row->soni = $row->soni + $value2->texnalog;
                $row->update();
            }
        }
        return $this->live_dok2();
    }
    
    public function live_dok2()
    {
        $output = '';
        $data = Doktor::all();
        foreach($data as $row)
        {
            $output .= '
            <tr id="row_'.$row->id.'" style="border-bottom: 1px solid #ababab;">
            <td>'.$row->name.'</td>
            <td>'.$row->fam.'</td>
            <td>'.$row->tel.'</td>
            <td>'.$row->adress.'</td>
            <td>'.$row->yonalish.'</td>
            <td>'.$row->soni.'</td>
            <td>
                <a href="javascript:void(0)" id="editpost" data-id="'.$row->id.'" data-name="'.$row->name.'" data-fam="'.$row->fam.'" data-tel="'.$row->tel.'" data-adress="'.$row->adress.'" data-yonalish="'.$row->yonalish.'" style="color: green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg>
                </a>
                <a href="javascript:void(0)" id="delpost" data-id="'.$row->id.'" style="color: red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                </a>
                <a href="javascript:void(0)" id="sms" data-id="'.$row->id.'" style="color: #e1b000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                </a>

            </td>
        </tr>
        ';
        }
        return response()->json($output);
    }

    public function dokstor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'fam'=>'required',
            'tel'=>'required',
            'adress'=>'nullable',
            'yonalish'=>'required',
        ]);
        if($validator->passes()){
            if($request->id){
                Doktor::find($request->id)->update([
                    'name'=>$request->name,
                    'fam'=>$request->fam,
                    'tel'=>$request->tel,
                    'adress'=>$request->adress,
                    'yonalish'=>$request->yonalish,
                ]);            
            }else{
                Doktor::create([
                    'name'=>$request->name,
                    'fam'=>$request->fam,
                    'tel'=>$request->tel,
                    'adress'=>$request->adress,
                    'yonalish'=>$request->yonalish,
                ]);
            }
            return response()->json(200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function dokpost(Request $request)
    {
        Doktor::find($request->id)->delete($request->id);
        return response()->json(200);
    }
}
