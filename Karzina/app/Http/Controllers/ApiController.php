<?php

namespace App\Http\Controllers;

use App\Models\Praduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function index()
    {
        $data = User::all();
        return response()->json($data);
    }

    public function praduct()
    {
        $data = Praduct::all();
        return response()->json($data);
    }

    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'img' => 'required',
            'summa' => 'required',
            'summa2' => 'required',
        ]);
        if($validator->passes()){
            $file = $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $filename);
            Praduct::create([
                'name' => $request->name,
                'img' => $file,
                'summa' => $request->summa,
                'summa2' => $request->summa2,
            ]);    
            return response()->json(['code'=>200, 'msg'=>'Малумотлар saqlandi']);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотлар толдирилмаган']);
        }
    }
}
