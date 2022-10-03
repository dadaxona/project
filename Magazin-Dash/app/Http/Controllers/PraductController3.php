<?php

namespace App\Http\Controllers;

use App\Models\Accaunt;
use App\Models\Glavnitip;
use App\Models\Images;
use App\Models\Praduct;
use App\Models\Tavartur;
use App\Providers\KlentServis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PraductController3 extends Controller
{

    public function index3(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        $glavnitip_id = $request->get('glavnitip_id');
        $tavartur_id = $request->get('tavartur_id');
        if($query != '')
        {
        $data =Praduct::where('glavnitip_id', $glavnitip_id)
                        ->where('tavartur_id', $tavartur_id)
                        ->where('name', 'like', '%'.$query.'%')
                        ->orderBy('id', 'DESC')->get();
        }
        else
        {
        $data = Praduct::where('glavnitip_id', $glavnitip_id)->where('tavartur_id', $tavartur_id)->orderBy('id', 'DESC')->get();
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

    public function index3sel(Request $request)
    {
        $data = Praduct::where('glavnitip_id', $request->glavnitip_id)->where('tavartur_id', $request->tavartur_id)->get();
        return response()->json($data);
    }
    public function index3selct(Request $request)
    {
        $data = Praduct::find($request->id);
        return response()->json($data);
    }
    public function store3(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'img'=>'required',
            'hajm'=>'required',
            'pakupka'=>'nullable|numeric',
            'prodaja'=>'nullable|numeric',
        ]);
        if($validator->passes()){
            return $model->store3($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function store31(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'img'=>'nullable',
            'hajm'=>'required',
            'pakupka'=>'nullable|numeric',
            'prodaja'=>'nullable|numeric',
        ]);
        if($validator->passes()){
            return $model->store31($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }
 
    public function edit3(Request $request)
    {
        $data = Praduct::find($request->id);
        return response()->json($data);
    }
    
    public function update3(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'img'=>'required',
            'hajm'=>'required',
            'pakupka'=>'nullable|numeric',
            'prodaja'=>'nullable|numeric',
        ]);
        if($validator->passes()){
            return $model->update3($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }  
    }
    public function delete3(Request $request)
    {
        Praduct::find($request->id)->delete($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);    
    }

    public function postreklama()
    {
        if(Session::has('IDIE')){
            $brends = Accaunt::where('id','=',Session::get('IDIE'))->first();
            if($brends->login == "Admin"){
                return view('reklama.reklama',[
                    'brends'=>$brends,
                ]);
            }
        }else{
            return redirect('/logaut');
        }
    }

    public function getreklama()
    {  
        $data = Images::all();
        return response()->json($data);
    }

    public function store3img(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img'=>'required',
        ]);
        if($validator->passes()){
                if($request->id){
                    $file = $filename = time() . '.' . $request->img->extension();
                    $request->img->move(public_path('corusel'), $filename);
                    Images::find($request->id)->update([        
                        'img' => $file,            
                    ]);  
                    return response()->json(['code'=>201, 'msg'=>'Малумотлар янгиланди']);
                }else{
                    $count = Images::count();
                    if($count == 4){
                        return response()->json(["code"=>0, "msg"=>"4 тадан коп жойлаш мумкин емас"]);
                    }else{
                    $file = $filename = time() . '.' . $request->img->extension();
                    $request->img->move(public_path('corusel'), $filename);
                    Images::create([        
                        'img' => $file,            
                    ]);
                    return response()->json(['code'=>200, 'msg'=>'Малумотлар сакланди']);
                }
            }
        }else{            
            return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }  
    }

    public function deleteimages(Request $request)
    {
        Images::find($request->id)->delete($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли бажарилди'], 200);   
    }
}
