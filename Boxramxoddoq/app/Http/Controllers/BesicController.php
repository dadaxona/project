<?php

namespace App\Http\Controllers;

use App\Models\Buyurtma;
use App\Models\Buyurtma2;
use App\Models\Drektor;
use App\Models\Praduct;
use App\Models\Praduct2;
use App\Models\Praduct3;
use App\Models\Pribl;
use App\Models\Rasxod;
use App\Models\Rasxod2;
use App\Models\Saqlash;
use App\Models\Tushum2;
use App\Models\Uuid;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class BesicController extends Controller
{
    public function dashbord()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            if($brends->count == "1"){
                return view('dash');
            }elseif($brends->count == "2"){
                return view('kuxna');
            }elseif($brends->count == "3"){            
                return view('user');
            }else{
                return view('zal');
            }
        }else{
            return redirect('/logaut');
        }
    }

    public function log()
    {
        $data = Drektor::all();
        return response()->json($data??[]);
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function nastroyka()
    {
        return view('auth.setting');
    }

    public function storeishchi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'login' => 'required',
            'password' => 'required',
        ]);
        if($validator->passes()){
            return $this->storeishchi2($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }
    
    public function storeishchi2($request)
    {
        if($request->id){
            return $this->updateishchi($request);        
        }else{
            Drektor::create([                
                'name'=>$request->name,
                'login'=>$request->login,
                'password'=>$request->password,
                'count'=>$request->count,
            ]);
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $request], 200);            
        }
    }
    
    public function updateishchi($request)
    {
        Drektor::find($request->id)->update($request->all());
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди'], 201);
    }

    public function live_ishchi(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Drektor::where('name', 'like', '%'.$query.'%')
                        ->orderBy('id', 'DESC')
                        ->get();            
        }
        else
        {
        $data = Drektor::orderBy('id', 'DESC')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                <td>'.$row->name.'</td>
                <td>'.$row->login.'</td>
                <td>'.$row->password.'</td>
                <td>'.$row->count.'</td>
                <td>
                  <button class="btn btn-success" id="editPost" data-id="'.$row->id.'" data-name="'.$row->name.'"  data-login="'.$row->login.'"  data-password="'.$row->password.'" data-count="'.$row->count.'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg>
                  </button>                            
                  <button class="btn btn-danger" id="deletePost" data-id="'.$row->id.'" class="mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                  </button>
                </td>
              </tr>
              ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="4">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
        );

        echo json_encode($data);
        }
    }

    public function deleteishchi($id)
    {
        Drektor::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    // public function index1()
    // {
    //     return view('kuxna');
    // }

    // public function dash()
    // {
    //     return view('dash');
    // }

    public function loginuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);
        if($validator->passes()){
            if($request->login == "Admin"){
                $user = Drektor::where('login','=',$request['login'])->first();
                if($user){ 
                    if($request->password == $user->password){            
                        $request->session()->put('IDIE',$user->id);
                        return response()->json(["data"=>200]);             
                    }else{
                        return response()->json(["data"=>404]);
                    }
            
                }else{
                    $request->validate([
                    'login'=>'required',
                    'password'=>'required',
                    ]);  
                    Drektor::create([
                        'login' => $request['login'],
                        'password' => $request['password'],
                        'count' => 1
                    ]);
                    $user2 = Drektor::where('login','=',$request['login'])->first();
                    $request->session()->put('IDIE',$user2->id);
                    return response()->json(["data"=>200]);          
                    
                }            
            }else{
                $user = Drektor::where('login','=',$request['login'])->first();
                if($user){
                    if($request->password == $user->password){            
                        $request->session()->put('IDIE',$user->id);
                        return response()->json(["data"=>200]);             
                    }else{
                        return response()->json(["data"=>404]);
                    }            
                }else{
                    return response()->json(["data"=>500]);
                }
            }
        }else{            
            return response()->json(['data'=>0, 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function logaut()
    {
        if(Session::has('IDIE')){
            Session::pull('IDIE');
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function getdate()
    {
        $data = Praduct::all();
        return response()->json($data);
    }

    public function getdate2(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $id = $request->get("id");
            $data = Praduct2::where('praduct_id', $id)->get();
            foreach ($data as $value) {
                $output .= '
                <div class="im2 col-4 mt-2 mx-2" id="otkazish2" data-id="'.$value->id.'">
                    <img src="images2/'.$value->file.'" alt="" id="im2">
                    <div class="">
                        <h4>'.$value->name.'</h4>
                        <h3>'.number_format($value->summa).' сум</h3>
                    </div>
                </div>
                ';
            }
            return response()->json($output);
        }
    }

    public function getdate2a(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $id = $request->get("id");
            if($id){
                $data = Praduct2::where('praduct_id', $id)->get();
                foreach ($data as $value) {
                    $output .= '
                    <tr>
                        <td>
                            <img src="images2/'.$value->file.'" alt="" id="im2">
                        </td>
                        <td>'.$value->name.'</td>
                        <td>'.$value->summa.'</td>
                        <td>
                            <button class="btn btn-success" id="edit" data-id="'.$value->id.'" data-praduct_id="'.$value->praduct_id.'"  data-name="'.$value->name.'" data-summa="'.$value->summa.'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </button>
                            <button class="btn btn-danger" id="delet" data-id="'.$value->id.'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    ';
                }
            }else{
                $data2 = Praduct2::all();
                foreach ($data2 as $value2) {
                    $output .= '
                    <tr>
                        <td>
                            <img src="images2/'.$value2->file.'" alt="" id="im2">
                        </td>
                        <td>'.$value2->name.'</td>
                        <td>'.$value2->summa.'</td>
                        <td>
                            <button class="btn btn-success" id="edit" data-id="'.$value2->id.'" data-praduct_id="'.$value2->praduct_id.'" data-name="'.$value2->name.'" data-summa="'.$value2->summa.'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </button>
                            <button class="btn btn-danger" id="delet" data-id="'.$value2->id.'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    ';
                }
            }
            return response()->json($output);
        }
    }

    public function getdate3()
    {
        $output = '';
        $pr = Pribl::find(1);
        $data = Praduct3::all();
        foreach ($data as $room) {
            $output .= '
            <div class=" mt-2 borr borr2" id="control" data-id="'.$room->id.'">
                <div class="row">
                    <div class="col-6 borr">
                        <img src="images2/'.$room->file.'" alt="" id="im3">
                    </div>
                    <div class="col-6 borr">
                        <button class="btn btn-danger pad mt-1" id="delete" data-id="'.$room->id.'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success pad mt-1" id="kament" data-id="'.$room->id.'" data-kament="'.$room->kament.'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                        </button>
                        <hr>
                        <div class="d-flex">
                            <p>'.$room->son.' x </p>
                            <p class="mx-2"> '.number_format($room->sum).' сум</p>
                        </div>
                    </div>
                    <div class="col-12 borr text-center">
                        <h3 class="h3"> '.number_format($room->summa).' сум</h3>
                    </div>
                </div>
            </div>
            ';
        }
        $formot = number_format($pr->summa);
        return response()->json(['data'=>$output, 'pr'=>$formot]);
    }
    
    public function store(Request $request)
    {
        if($request->id){
            $validator = Validator::make($request->all(), [
                'name'=>'required',
            ]);
            if($validator->passes()){
                if($request->file){
                    $file = $filename = time() . '.' . $request->file->extension();
                    $request->file->move(public_path('images'), $filename);
                    Praduct::find($request->id)->update([
                        'name'=>$request->name,
                        'file'=>$file,
                    ]);
                }else{
                    Praduct::find($request->id)->update([
                        'name'=>$request->name,
                    ]);
                }
                return response()->json(['code'=>201, 'msg'=>'Малумотлар янгиланди']);
            }else{
                return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
            }
        }else{
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'file'=>'required',
            ]);
            if($validator->passes()){
                $file = $filename = time() . '.' . $request->file->extension();
                $request->file->move(public_path('images'), $filename);
                Praduct::create([        
                    'name'=>$request->name,
                    'file'=>$file,          
                ]);
                return response()->json(['code'=>200, 'msg'=>'Малумотлар сакланди']);                
            }else{
                return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
            }
        } 
    }

    public function store2(Request $request)
    {

        if($request->id){
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'summa'=>'required',
            ]);
            if($validator->passes()){
                if($request->file){
                    $file = $filename = time() . '.' . $request->file->extension();
                    $request->file->move(public_path('images2'), $filename);
                    Praduct2::find($request->id)->update([
                        'praduct_id'=>$request->praduct_id,
                        'name'=>$request->name,
                        'file'=>$file,
                        'summa'=>$request->summa,
                    ]);
                }else{
                    Praduct2::find($request->id)->update([
                        'praduct_id'=>$request->praduct_id,
                        'name'=>$request->name,
                        'summa'=>$request->summa,
                    ]);
                }
                return response()->json(['code'=>201, 'msg'=>'Малумотлар янгиланди']);            
            }else{            
                return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
            }
            
        }else{
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'file'=>'required',
                'summa'=>'required',
            ]);
            if($validator->passes()){
                $file = $filename = time() . '.' . $request->file->extension();
                $request->file->move(public_path('images2'), $filename);
                Praduct2::create([
                    'praduct_id'=>$request->praduct_id,
                    'name'=>$request->name,
                    'file'=>$file,   
                    'summa'=>$request->summa,
                ]);
                return response()->json(['code'=>200, 'msg'=>'Малумотлар сакланди']);
            }else{
                return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
            }
        }
    }

    public function store3(Request $request)
    {
        $data = Praduct2::find($request->id);
        $data2 = Praduct3::where('praduct2_id', $data->id)->first();
        if($data2){
            $data2->son =  $data2->son + 1;
            $data2->summa = $data2->summa + $data->summa;
            $data2->update();
            $data3 = Pribl::find(1);
            if($data3){
                $data3->summa = $data3->summa + $data->summa;
                $data3->update();
            }else{
                Pribl::create([
                    'summa'=>$data->summa
                ]);
            }
        }else{
            Praduct3::create([
                'praduct2_id' => $data->id,
                'name' => $data->name,
                'file' => $data->file,
                'son' => 1,
                'sum' => $data->summa,
                'summa' => $data->summa,
            ]);
            $data4 = Pribl::find(1);
            if($data4){
                $data4->summa = $data4->summa + $data->summa;
                $data4->update();
            }else{
                Pribl::create([
                    'summa'=>$data->summa
                ]);
            }
        }
        return response()->json(200);
    }

    public function delet(Request $request)
    {
        Praduct2::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function delet2(Request $request)
    {
        Praduct::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function delete(Request $request)
    {
        $data2 = Praduct3::find($request->id);
        if($data2->son - 1 <= 0){
            Praduct3::find($request->id)->delete($request->id);
            $data3 = Pribl::find(1);
            $data3->summa = $data3->summa - $data2->sum;
            $data3->update();
            if(Praduct3::where('id', ">", 0)->first()){
            }else{
                Pribl::find(1)->update([
                    'summa'=>0
                ]);
            }
        }else{
            $data2->son = $data2->son - 1;
            $data2->summa = $data2->summa - $data2->sum;
            $data2->update();
            $data4 = Pribl::find(1);
            $data4->summa = $data4->summa - $data2->sum;
            $data4->update();
            if(Praduct3::where('id', ">", 0)->first()){
            }else{
                Pribl::find(1)->update([
                    'summa'=>0
                ]);
            }
        }
        return response()->json(200);
    }

    public function buyurtma()
    {
        $data = Praduct3::where('id', ">", 0)->first();
        if($data){
            return response()->json(200);
        }else{
            return response()->json(0);
        }
    }
    
    public function buyurtma2(){
        $uuid = Uuid::find(1);
        if($uuid){
            $uuid->uuid = $uuid->uuid + 1;
            $uuid->update();
        }else{
            Uuid::create([
                'uuid'=>1
            ]);
        }
        return $this->buyurtma22();
    }
    public function buyurtma22(){
        $data = Praduct3::all();
        $pribl = Pribl::find(1);
        $uuid = Uuid::find(1);
        $buy = Buyurtma::create([
            'summa'=>$pribl->summa,
            'status'=>0,
            'uuid'=>$uuid->uuid
        ]);
        foreach ($data as $value) {
            Buyurtma2::create([
                'buyurtma_id' => $buy->id,
                'name' => $value->name,
                'file' => $value->file,
                'son' => $value->son,
                'summa' => $value->sum,
                'kament' => $value->kament,
            ]);
        }
        Pribl::find(1)->update(['summa'=>0]);
        Praduct3::where('id', '>', 0)->delete();
        return response()->json(['id'=>$buy->uuid, 'context'=>$data, 'pribl'=>$pribl->summa]);
    }
    public function aler()
    {
        $data = Buyurtma::where('status', 1)->first();
        if($data){
            return response()->json(200);
        }else{
            return response()->json(0); 
        }
    }

    public function zakaz()
    {
        $data = Buyurtma::all();
        $foo = '';
        foreach ($data as $value) {
            if($value->status == 0){
                $foo .= '<button data-id="'.$value->id.'" data-status="'.$value->status.'"  id="status0" class="btn btn-danger mb-1">'.$value->uuid.' / Кабул килинмаган</button>';
            }elseif($value->status == 1){
                $foo .= '<button data-id="'.$value->id.'" data-status="'.$value->status.'"  id="status1" class="btn btn-success mb-1">'.$value->uuid.' / Кабул килинди</button>';
            }else{

            }
        }
        return response()->json($foo);
    }
    public function zakazsd()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;

        $data = Buyurtma::whereYear('created_at', $year)->whereMonth('created_at', $month)->whereDay('created_at', $day)->get();
        $foo = '';
        foreach ($data as $value) {
            if($value->status == 1){
                $foo .= '<h1 class="alert alert-danger text-center">Заказ № '.$value->uuid.'</h1>';
            }else{

            }
        }
        return response()->json($foo);
    }

    public function toast()
    {
        $data = Buyurtma::where('status', 2)->first();
        if($data){
            $data->status = 3;
            $data->update();
            return response()->json($data);
        }else{}
    }

    public function tayyorzakaz()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $data = Buyurtma::whereYear('created_at', $year)->whereMonth('created_at', $month)->whereDay('created_at', $day)->orderBy('id', 'DESC')->get();
        $foo = '';
        foreach ($data as $value) {
            if($value->status == 3){
                $foo .= '<h1 class="alert alert-primary text-center">Заказ № '.$value->uuid.'</h1>';
            }else{

            }
        }
        return response()->json($foo);
    }

    public function status0(Request $request)
    {
        Buyurtma::find($request->id)->update(['status'=>1]);
        return response()->json(200);
    }

    // public function buymal(Request $request)
    // {
    //     if($request->ajax()){
    //         $id = $request->get("id");
    //         $zakid = Buyurtma::find($id);
    //         if($id){
    //            $data = Buyurtma2::where('buyurtma_id', $id)->get();
    //         }else{

    //         }
    //         return response()->json(['data'=>$data, 'zakid'=>$zakid]);
    //     }
    // }

    public function signaler(){
        $signal = Buyurtma::where('status', 0)->first();
        if($signal){
            $signal->status = 1;
            $signal->update();
            return response()->json(['code'=>200]);
        }else{
            return response()->json(0);
        }
    }

    public function buymal()
    {
        $data = '';
        $zakid = Buyurtma::where('status', 1)->get();
        $count = Buyurtma::where('status', 1)->count();
        // $za = Buyurtma::where('status', 0)->orderBy('id', 'DESC')->first();
        foreach ($zakid as $value) {
            $dat = Buyurtma2::where('buyurtma_id', $value->id)->get();
            $data .= '<div class="ro">
            <div class="row borrd">
                <div class="col-2">
                </div>
                <div class="col-2">
                    <h2>Заказ № / '.$value->uuid.'</h2>                
                </div>
                <div class="col-4 row">
                    <button id="jonat" data-id="'.$value->id.'" class="btn btn-success mt-2"><span id="numb2"></span> Жонатиш</button>
                </div>
            </div>';
            foreach ($dat as $value2) {
                $data .= '
                    <div class="col-12">
                        <table class="table">
                            <tr>
                                <td>
                                    <img src="images2/'.$value2->file.'" alt="" id="im2">
                                </td>
                                <td class="td">'.$value2->name.'</td>
                                <td class="td">'.$value2->son.' x '.number_format($value2->summa).'</td>
                            </tr>
                        </table>
                        <div class="col-12 text-center">
                            <h4 style="color: red;">'.$value2->kament.'</h4>
                            <hr>
                        </div>
                    </div>
                ';
            }
            $data .= '</div>';
        }
        return response()->json(['data'=>$data, 'count'=>$count]);
    }

    public function jonatish(Request $request)
    {
        $data = Buyurtma::find($request->id);
        $data2 = Buyurtma2::where('buyurtma_id', $data->id)->get();
        foreach ($data2 as $value) {
            Saqlash::create([
                'name' => $value->name,
                'file' => $value->file,
                'son' => $value->son,
                'sum' => $value->summa,
            ]);
        }
        Buyurtma::find($request->id)->update(['status'=>2]);
        Buyurtma2::where('buyurtma_id', $data->id)->delete();
        return response()->json(['data'=>$data, 'data2'=>$data2]);
    }

    public function buyurtmasiz()
    {
        $data = Praduct3::all();
        $pribl = Pribl::find(1);
        $buy = Buyurtma::create([
            'summa'=>$pribl->summa,
            'status'=>3
        ]);
        foreach ($data as $value) {
            Saqlash::create([
                'name' => $value->name,
                'file' => $value->file,
                'son' => $value->son,
                'sum' => $value->sum,
            ]);
        }
        Pribl::find(1)->update(['summa'=>0]);
        Praduct3::where('id', '>', 0)->delete();
        return response()->json(['id'=>$buy->id, 'context'=>$data, 'pribl'=>$pribl->summa]);
    }
    public function formres(Request $request)
    {
        $id = Rasxod2::find(1);
        if($id){
            $id->summa = 0;
            $id->update();
        }else{
            Rasxod2::create(['summa'=>0]);
        }
        return $this->formres2($request);
    }
    public function formres2($request)
    {
        if($request->date2){
            $data = Rasxod::whereBetween('created_at', [$request->date, $request->date2])->get();
            foreach ($data as $val2) {
                $id = Rasxod2::find(1);
                $id->summa = $id->summa + $val2->rasxod;
                $id->update();
            
            }
        }else{
            $data = Rasxod::all();
            foreach ($data as $val) {
                $id2 = Rasxod2::find(1);
                $id2->summa = $id2->summa + $val->rasxod;
                $id2->update();
            }
        }
        $id3 = Rasxod2::find(1);
        $formot = number_format( $id3->summa );
        return response()->json(['data'=>$data, 'summa'=>$formot]);        
    }

    public function formresxod(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rasxod'=>'required',
            'sabap'=>'required',
        ]);
        if($validator->passes()){
            if($request->id){
                Rasxod::find($request->id)->update($request->all());
            }else{
                Rasxod::create($request->all());
            }
            return response()->json(['code'=>200, 'msg'=>'Малумотлар сакланди']);            
        }else{
            return response()->json(['code'=>1, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }
    
    public function iiid(Request $request)
    {
        Rasxod::find($request->id)->delete($request->id);
        return response()->json(200);
    }

    public function tushum(Request $request)
    {
        $id = Tushum2::find(1);
        if($id){
            $id->summa = 0;
            $id->update();
        }else{
            Tushum2::create(['summa'=>0]);
        }
        return $this->tushum2($request);
    }
    public function tushum2($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        if($request->ajax()){
            if($request->date2){
                $data = Saqlash::whereBetween('created_at', [$request->date, $request->date2])->get();
                foreach ($data as $val2) {
                    $id = Tushum2::find(1);
                    $id->summa = $id->summa + $val2->son * $val2->sum;
                    $id->update();
                
                }
            }else{
                $data = Saqlash::whereYear('created_at', $year)->whereMonth('created_at', $month)->whereDay('created_at', $day)->get();
                foreach ($data as $val) {
                    $id2 = Tushum2::find(1);
                    $id2->summa = $id2->summa + $val->son * $val->sum;
                    $id2->update();
                }
            }
            $id3 = Tushum2::find(1);
            $formot = number_format( $id3->summa );
            return response()->json(['data'=>$data, 'summa'=>$formot]);
        }
    }

    public function izoh(Request $request)
    {
        $id = Praduct3::find($request->id);
        $id->kament = $request->kament;
        $id->update();
        return response()->json(200);
    }
    
    public function counters()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $id = Uuid::find(1);
        if($id->data == $data1){
            return response()->json(200);
        }else{
            $id->uuid = 1;
            $id->data = $data1;
            $id->update();
            return response()->json(200);
        }
    }
}
