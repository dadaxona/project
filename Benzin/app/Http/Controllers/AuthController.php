<?php

namespace App\Http\Controllers;

use App\Models\Drektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login()
    {
      return view("auth.login");
    }
  
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
     
    public function dashbord()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            if($brends->count == "1"){
                return view('welcome',[
                    'brends'=>$brends,
                ]);
            }elseif($brends->count == "2"){
                return view('rasxod',[
                    'brends'=>$brends,
                ]);
            }else{
                return redirect('/logaut');
            }
        }else{
            return redirect('/logaut');
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

    public function setting()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('auth.password',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function createphp()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('create',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function perexodphp()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('perexod',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function perexodistoriya()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('perexodistoriya',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function savdo()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('rasxod',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function summa()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('summa',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function lishni()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('rasxod2',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }
    
    public function kassa()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('kassa',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }
    
    public function showadmin($id)
    {
        $post = Drektor::find($id);    
        return response()->json($post);
    }

    public function live_admin(Request $request)
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
                    <tr id="row_'.$row->id.'" style="border-bottom: 1px solid;">
                    <td class="ui-widget-content">'.$row->name.'</td>
                    <td class="ui-widget-content">'.$row->login.'</td>
                    <td class="ui-widget-content">'.$row->password.'</td>
                    <td class="ui-widget-content">'.$row->count.'</td>
                    <td class="ui-widget-content">
                    <a href="javascript:void(0)" onclick="editPost('.$row->id.')" style="color: green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        </svg>
                    </a>                            
                    <a href="javascript:void(0)" onclick="deletePost('.$row->id.')" class="mx-3" style="color: red">
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

    public function deleteadmin($id)
    {
        Drektor::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function storeadmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);
        if($validator->passes()){
            if($request->id){
                return $this->updateadmin($request);
            }else{
                Drektor::create([                
                    'name'=>$request->name,
                    'login'=>$request->login,
                    'password'=>$request->password,
                    'count'=>$request->count,
                ]);
                return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $request], 200);            
            }
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function updateadmin($request)
    {
        Drektor::find($request->id)->update($request->all());
        $data = Drektor::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

}