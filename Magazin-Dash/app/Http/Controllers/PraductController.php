<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accaunt;
use App\Models\Glavnitip;
use App\Models\Praduct;
use App\Models\Tavartur;
use App\Models\User;
use App\Providers\KlentServis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PraductController extends PraductController2
{
    public function ind()
    {
        $data = Glavnitip::all();
        return response()->json($data);
    }
    public function ind2(Request $request)
    {
        if($request->ajax()){
            $query = $request->get("query");
            $data = Tavartur::where('glavnitip_id', $query)->get();
            return response()->json($data);
            
        }
    }
    public function inde0(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data =Praduct::where('name', 'like', '%'.$query.'%')->orderBy('id', 'DESC')->get();
        }
        else
        {
        $data = Praduct::orderBy('id', 'DESC')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                <td><img src="images/'.$row->img.'" class="img" /></td>
                <td>'.$row->glavnitip->name.'</td>
                <td>'.$row->tavartur->name.'</td>
                <td>'.$row->name.'</td>
                <td>'.$row->hajm.'</td>
                <td>'.$row->pakupka.'</td>
                <td>'.$row->prodaja.'</td>
                <td class="d-flex">
                  <button class="btn btn-success" onclick=edit('.$row->id.')>
                    <i class="nav-icon fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger mx-2" onclick=delet('.$row->id.')>
                    <i class="far fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
                ';
            }
        } 
        return response()->json($output);
        }
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            $query = $request->get('query');
            if ($query) {
                $data2 = Glavnitip::where('name', 'like', '%'.$query.'%')->get();
                return response()->json($data2);
            }else{
                $data = Glavnitip::all();
                return response()->json($data);
            }
        }
    }
    public function store(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'addmore.*.name' => 'required',
        ]);
        if($validator->passes()){
            return $model->store($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function createtovar()
    {
        if(Session::has('IDIE')){
            $brends = Accaunt::where('id','=',Session::get('IDIE'))->first();
            if($brends->login == "Admin"){
                return view('praduct.store',[
                    'brends'=>$brends,
                ]);
            }
        }else{
            return redirect('/logaut');
        }
    }

    public function edit(Request $request)
    {
        $data = Glavnitip::find($request->id);
        return response()->json($data);
    }
    
    public function update(Request $request)
    {
        Glavnitip::find($request->id)->update($request->all());
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);    
    }
    public function delete(Request $request)
    {
        Glavnitip::find($request->id)->delete($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);    
    } 
    
    public function tavartip(Request $request)
    {
        $id = Glavnitip::find($request->id);
        if(Session::has('IDIE')){
            $brends = Accaunt::where('id','=',Session::get('IDIE'))->first();
            if($brends->login == "Admin"){
                return view('praduct.store2',[
                    'brends'=>$brends,
                    'id'=>$id
                ]);
            }
        }else{
            return redirect('/logaut');
        }
    }
}
