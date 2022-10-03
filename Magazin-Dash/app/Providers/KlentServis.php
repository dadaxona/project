<?php

namespace App\Providers;

use App\Models\Glavnitip;
use App\Models\Praduct;
use App\Models\Tavartur;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class KlentServis
{
    public function store($request)
    {
        foreach ($request->addmore as $value) {
            $data = Glavnitip::create($value);
        }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);      
    }

    public function store2($request)
    {
        foreach ($request->addmore as $value) {
            $data = Tavartur::create([
                'glavnitip_id'=>$value["id"],
                'name'=>$value["name"],
            ]);
        }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
    }

    public function store3($request)
    {
        $file = $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $filename);
        Praduct::create([
            'glavnitip_id'=>$request->glavnitip_id,
            'tavartur_id'=>$request->tavartur_id,
            'name' => $request->name,
            'img' => $file,
            'hajm' => $request->hajm,
            'pakupka' => $request->pakupka,
            'prodaja' => $request->prodaja,
        ]);    
        return response()->json(['code'=>200, 'msg'=>'Малумотлар saqlandi']);  
    }

    public function store31($request)
    {
        if($request->img){
            $file = $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $filename);
            $foo = Praduct::find($request->name);
            $data = $foo->hajm + $request->hajm;
            $foo->img = $file;
            $foo->hajm = $data;
            $foo->pakupka = $request->pakupka;
            $foo->prodaja = $request->prodaja;
            $foo->save();   
        }else{
            $foo2 = Praduct::find($request->name);
            $data = $foo2->hajm + $request->hajm;
            $foo2->hajm = $data;
            $foo2->pakupka = $request->pakupka;
            $foo2->prodaja = $request->prodaja;
            $foo2->save();            
        }
        return response()->json(['code'=>200, 'msg'=>'Малумотлар saqlandi']);  
    }
    
    public function update3($request)
    {
        $file = $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $filename);
        Praduct::find($request->id)->update([
            'glavnitip_id'=>$request->glavnitip_id,
            'tavartur_id'=>$request->tavartur_id,
            'name' => $request->name,
            'img' => $file,
            'hajm' => $request->hajm,
            'pakupka' => $request->pakupka,
            'prodaja' => $request->prodaja,
        ]);    
        return response()->json(['code'=>200, 'msg'=>'Малумотлар saqlandi']);  
    }
}