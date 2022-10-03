<?php

namespace App\Http\Controllers;

use App\Models\Accaunt;
use App\Models\Praduct;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function create()
    {
        return view('welcome');
    }
    public function loginuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'parol' => 'required',
            'check' => 'required',
        ]);
        if($validator->passes()){
            if($request->login == "Admin"){
                $user = Accaunt::where('login','=',$request['login'])->first();
                if($user){ 
                    if($request->parol == $user->parol){            
                        $request->session()->put('IDIE',$user->id);
                        return response()->json(["data"=>200]);             
                    }else{
                        return response()->json(["data"=>404]);
                    }
            
                }else{
                    $request->validate([
                    'login'=>'required',
                    'parol'=>'required',
                    ]);  
                    Accaunt::create($request->all());   
                    $user = Accaunt::where('login','=',$request['login'])->first();
                    if ($user) {         
                        $request->session()->put('IDIE',$user->id);
                        return response()->json(["data"=>200]);          
                    }
                }            
            }else{
                $user = Accaunt::where('login','=',$request['login'])->first();
                if($user){
                    if($request->parol == $user->parol){            
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
            $brends = Accaunt::where('id','=',Session::get('IDIE'))->first();
            if($brends->login == "Admin"){
                return view('dash',[
                    'brends'=>$brends,
                ]);
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
}
