<?php

namespace App\Http\Controllers;

use App\Models\Accaunt;
use App\Models\Glavnitip;
use App\Models\Tavartur;
use App\Providers\KlentServis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PraductController2 extends PraductController3
{

    public function index2(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        $glavnitip_id = $request->get('glavnitip_id');
        if($query != '')
        {
        $data =Tavartur::where('glavnitip_id', $glavnitip_id)
                        ->where('name', 'like', '%'.$query.'%')
                        ->orderBy('id', 'DESC')->get();
        }
        else
        {
        $data = Tavartur::where('glavnitip_id', $glavnitip_id)->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                <td>'.$row->glavnitip->name.'</td>
                <td>'.$row->name.'</td>
                <td class="d-flex">
                  <button class="btn btn-success" onclick=edit('.$row->id.')>
                    <i class="nav-icon fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger mx-2" onclick=delet('.$row->id.')>
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <form action="praduct" method="GET">
                    <input type="hidden" name="id" value="'.$row->id.'">
                    <button type="submit" class="btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
                ';
            }
        } 
        return response()->json($output);
        }
    }

    public function store2(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'addmore.*.id' => 'required',
            'addmore.*.name' => 'required',
        ]);
        if($validator->passes()){
            return $model->store2($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }
 
    public function edit2(Request $request)
    {
        $data = Tavartur::find($request->id);
        return response()->json($data);
    }
    
    public function update2(Request $request)
    {
        Tavartur::find($request->id)->update($request->all());
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);    
    }
    public function delete2(Request $request)
    {
        Tavartur::find($request->id)->delete($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);    
    } 

    public function praduct(Request $request)
    {
        $tavartur = Tavartur::find($request->id);
        if(Session::has('IDIE')){
            $brends = Accaunt::where('id','=',Session::get('IDIE'))->first();
            if($brends->login == "Admin"){
                return view('praduct.store3',[
                    'brends'=>$brends,
                    'tavartur'=>$tavartur,
                ]);
            }
        }else{
            return redirect('/logaut');
        }
    }
}
