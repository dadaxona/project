<?php

namespace App\Providers;

use App\Models\Adress;
use App\Models\Arxiv;
use App\Models\Arxivdok;
use App\Models\Deletkarzina;
use App\Models\Deletkarzinadok;
use App\Models\Drektor;
use App\Models\Ichkitavar;
use App\Models\Ichkitavardok;
use App\Models\Tavar;
use App\Models\Umumiy;
use App\Models\Updatetavr;
use App\Models\User;
use App\Models\Itogo;
use App\Models\Itogodok;
use App\Models\Javob;
use App\Models\Karzina;
use App\Models\Karzina2;
use App\Models\Karzina2dok;
use App\Models\Karzina3;
use App\Models\Karzina3dok;
use App\Models\Karzinadok;
use App\Models\Statistika;
use App\Models\Tavar2;
use App\Models\Updatetavrdok;
use App\Models\Userdok;
use App\Models\Zakaz;
use App\Models\Zakaz2;
use App\Models\Zakaz2dok;
use App\Models\Zakazdok;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class KlentServis
{
    public function storead($request)
    {
        if($request->id){
            return $this->update($request);        
        }else{
            $data = User::create($request->all());
            Javob::create([
                'user_id'=>$data->id,
                'javob'=>0
            ]);
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);            
        }
    }

    public function storedok($request)
    {
        if($request->id){
            return $this->updatedok($request);        
        }else{
            $data = Userdok::create($request->all());
            if($data){
                return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
            }
        }
    }
    
    public function update($request)
    {
        User::find($request->id)->update($request->all());
        $data = User::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function updatedok($request)
    {
        Userdok::find($request->id)->update($request->all());
        $data = Userdok::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }
    
    public function delete($id)
    {
        User::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function deletedok($id)
    {
        Userdok::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }
    // 2
    public function store2($request)
    {
        foreach ($request->addmore as $value) {
            $data = Tavar::create($value);
        }
        if($data){
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
        }
    }

    public function store2tip($request)
    {
        foreach ($request->addmore as $value) {
            $data = Tavar2::create($value);
        }
        if($data){
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
        }
    }
        
    public function storeishchi($request)
    {
        if($request->id){
            return $this->updateishchi($request);        
        }else{
            $data = Drektor::create([                
                'name'=>$request->name,
                'login'=>$request->login,
                'password'=>$request->password,
            ]);
            if($data){
                return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $request], 200);
            }
        }
    }

    public function storeadmin($request)
    {
        if($request->id){
            return $this->updateadmin($request);
        }else{
            $data = Drektor::create([
                'login'=>$request->login,
                'password'=>$request->password,
            ]);
            if($data){
                return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $request], 200);
            }
        }
    }

    public function updateishchi($request)
    {
        Drektor::find($request->id)->update($request->all());
        $data = Drektor::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function updateadmin($request)
    {
        Drektor::find($request->id)->update($request->all());
        $data = Drektor::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }


    public function update2($request)
    {
        Tavar2::find($request->id)->update($request->all());
        $data = Tavar2::find($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 200);
    }

    public function deleteishchi($id)
    {
        Drektor::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }
    
    public function deleteadmin($id)
    {
        Drektor::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }
    
    public function updateer2($request)
    {
        Tavar::find($request->id)->update($request->all());
        $data = Tavar::find($request->id);
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 200);
    }
    
    public function edit3()
    {
        $ichkitavar = Ichkitavar::all();
        $ichkitavardok = Ichkitavardok::all();
        $data = Tavar::all();
        $datatip = Tavar2::all();
        $adress = Adress::all();
        $tiklash = Deletkarzina::all();
        $tiklashdok = Deletkarzinadok::all();
        $umumiy = Umumiy::find(1);
        if(Session::has('IDIE')){
          $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
          return view('tavar2',[
              'brends'=>$brends,
              'ichkitavar'=>$ichkitavar,
              'ichkitavardok'=>$ichkitavardok,
              'data'=>$data,
              'datatip'=>$datatip,
              'tiklash'=>$tiklash,
              'tiklashdok'=>$tiklashdok,
              'adress'=>$adress,
              'umumiy'=>$umumiy??[]
          ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function store3dok($request)
    {
        foreach ($request->addmore as $value) {
            $foo = Ichkitavardok::where('name', $value["name"])->first();
            if($foo){
                $a = $foo->hajm + $value["hajm"];
                $b = $value["summa"] - $foo->summa;
                $c = $foo->summa + $b / 2;
                Ichkitavardok::where('name', $value["name"])
                        ->update([
                            'raqam' => $value["raqam"],
                            'hajm' => $a, 
                            'summa' => $c,
                            'summa2' => $value["summa2"],
                            'summa3' => $value["summa3"],
                            'kod' => $value["kod"]
                        ]);
                $data = Ichkitavardok::where('name', $value["name"])->first();
                // $res = Updatetavrdok::where('ichkitavardok_id', $data->id)->first();
                // if($res){
                //     Updatetavrdok::where('ichkitavardok_id', $data->id)
                //     ->update([
                //         'name'=>$value["name"],
                //         'raqam'=>$value["raqam"],
                //         'hajm'=>$value["hajm"],
                //         'summa'=>$value["summa"],
                //         'summa2'=>$value["summa2"],
                //         'summa3'=>$value["summa3"],
                //     ]);
                // }else{
                    // Updatetavrdok::create([
                    //     'ichkitavardok_id'=>$data->id,
                    //     'name'=>$value["name"],
                    //     'raqam'=>$value["raqam"],
                    //     'hajm'=>$value["hajm"],
                    //     'summa'=>$value["summa"],
                    //     'summa2'=>$value["summa2"],
                    //     'summa3'=>$value["summa3"],
                    // ]);
                // }
            }else{
                $data = Ichkitavardok::create([
                    'name'=>$value["name"],
                    'raqam'=>$value["raqam"],
                    'hajm'=>$value["hajm"],
                    'summa'=>$value["summa"],
                    'summa2'=>$value["summa2"],
                    'summa3'=>$value["summa3"],
                    'kod' => $value["kod"]
                ]);
                // $res = Updatetavrdok::where('ichkitavardok_id', $data->id)->first();
                // if($res){
                //     Updatetavrdok::where('ichkitavardok_id', $data->id)
                //     ->update([
                //         'name'=>$value["name"],
                //         'raqam'=>$value["raqam"],
                //         'hajm'=>$value["hajm"],
                //         'summa'=>$value["summa"],
                //         'summa2'=>$value["summa2"],
                //         'summa3'=>$value["summa3"],
                //     ]);
                // }else{
                    // Updatetavrdok::create([
                    //     'ichkitavardok_id'=>$data->id,
                    //     'name'=>$value["name"],
                    //     'raqam'=>$value["raqam"],
                    //     'hajm'=>$value["hajm"],
                    //     'summa'=>$value["summa"],
                    //     'summa2'=>$value["summa2"],
                    //     'summa3'=>$value["summa3"],
                    // ]);
                // }
            }
        }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
    }

    public function store3($request)
    {
        foreach ($request->addmore as $value) {
            $foo = Ichkitavar::where('tavar_id', $value["tavar_id"])
                            ->where('tavar2_id', $value["tavar2_id"])
                            ->first();
            if($foo){
                $a = $foo->hajm + $value["hajm"];
                $fff = Tavar2::find($value["tavar2_id"]);
                $foo->name = $fff->name;
                $foo->raqam = $value["raqam"];
                $foo->hajm = $a;
                $foo->summa = $value["summa"];
                $foo->summa2 = $value["summa2"];
                $foo->save(); 
                // Updatetavr::create([
                //         'tavar_id'=>$value["tavar_id"],
                //         'ichkitavar_id'=>$data->id,
                //         'adress'=>$value["adress"],
                //         'tavar2_id'=>$value["tavar2_id"],
                //         'raqam'=>$value["raqam"],
                //         'hajm'=>$value["hajm"],
                //         'summa'=>$value["summa"],
                //         'summa2'=>$value["summa2"],
                //         'summa3'=>$value["summa3"],
                //         'kod'=>$value["kod"],
                //     ]);
            }else{
                $fff = Tavar2::find($value["tavar2_id"]);
                Ichkitavar::create([
                    'tavar_id'=>$value["tavar_id"],
                    'tavar2_id'=>$value["tavar2_id"],
                    'name'=>$fff["name"],
                    'raqam'=>$value["raqam"],
                    'hajm'=>$value["hajm"],
                    'summa'=>$value["summa"],
                    'summa2'=>$value["summa2"],
                ]);
                // Updatetavr::create([
                //     'tavar_id'=>$value["tavar_id"],
                //     'ichkitavar_id'=>$data->id,
                //     'adress'=>$value["adress"],
                //     'tavar2_id'=>$value["tavar2_id"],
                //     'raqam'=>$value["raqam"],
                //     'hajm'=>$value["hajm"],
                //     'summa'=>$value["summa"],
                //     'summa2'=>$value["summa2"],
                //     'summa3'=>$value["summa3"],
                //     'kod'=>$value["kod"],
                // ]);
            }
        }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади'], 200);
    }
    
    public function storedd3($request)
    {
            $foo = Ichkitavar::where('tavar_id', $request["tavar_id"])
                            ->where('tavar2_id', $request["tavar2_id"])
                            ->first();
            if($foo){
                $a = $foo->hajm + $request["hajm"];
                $fff = Tavar2::find($request["tavar2_id"]);
         
               $foo->name =$fff->name; 
               $foo->raqam  = $request["raqam"];
               $foo->hajm  = $a;
               $foo->summa  = $request["summa"];
               $foo->summa2  = $request["summa2"];
               $foo->save();               
                // Updatetavr::create([
                //         'tavar_id'=>$request["tavar_id"],
                //         'ichkitavar_id'=>$data->id,
                //         'adress'=>$request["adress"],
                //         'tavar2_id'=>$request["tavar2_id"],
                //         'raqam'=>$request["raqam"],
                //         'hajm'=>$request["hajm"],
                //         'summa'=>$request["summa"],
                //         'summa2'=>$request["summa2"],
                //         'summa3'=>$request["summa3"],
                //         'kod'=>$request["kod"],
                //     ]);
            }else{
                $fff = Tavar2::find($request["tavar2_id"]);
                Ichkitavar::create([
                    'tavar_id'=>$request["tavar_id"],
                    'tavar2_id'=>$request["tavar2_id"],
                    'name'=>$fff["name"],
                    'raqam'=>$request["raqam"],
                    'hajm'=>$request["hajm"],
                    'summa'=>$request["summa"],
                    'summa2'=>$request["summa2"],
                    'summa3'=>$request["summa3"],
                    'kod'=>$request["kod"],
                ]);
                // Updatetavr::create([
                //     'tavar_id'=>$request["tavar_id"],
                //     'ichkitavar_id'=>$data->id,
                //     'adress'=>$request["adress"],
                //     'tavar2_id'=>$request["tavar2_id"],
                //     'raqam'=>$request["raqam"],
                //     'hajm'=>$request["hajm"],
                //     'summa'=>$request["summa"],
                //     'summa2'=>$request["summa2"],
                //     'summa3'=>$request["summa3"],
                //     'kod'=>$request["kod"],
                // ]);
            }
        return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади'], 200);
    }
    
    public function updatesdok($request)
    {
        // $updatetavr = Updatetavrdok::where('ichkitavardok_id', $request->id)->first();
        // $foo = Ichkitavardok::find($request->id);
        // $h1 = $foo->hajm - $updatetavr->hajm + $request->hajm;
        // $sum2 = $foo->summa2 - $updatetavr->summa2 + $request->summa2;
        // $sum3 = $foo->summa3 - $updatetavr->summa3 + $request->summa3;        
        $data = Ichkitavardok::find($request->id)->update([
            'name'=>$request->name,
            'raqam'=>$request->raqam,
            'hajm'=>$request->hajm,
            'summa'=>$request->summa,
            'summa2'=>$request->summa2,
        ]);
        // Updatetavrdok::where('ichkitavardok_id', $request->id)->update([
        //     'name'=>$request->name,
        //     'raqam'=>$request->raqam,
        //     'hajm'=>$request->hajm, 
        //     'summa'=>$request->summa,
        //     'summa2'=>$request->summa2,
        //     'summa3'=>$request->summa3,
        //     'kod'=>$request->kod
        // ]);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function updates($request)
    {
        // $updatetavr = Updatetavr::where('ichkitavar_id', $request->id)->first();
        // $foo = Ichkitavar::find($request->id);
        $fff = Tavar2::find($request->tavar2_id);
        // $h1 = $foo->hajm - $updatetavr->hajm + $request->hajm;
        // $sum2 = $foo->summa2 - $updatetavr->summa2 + $request->summa2;
        // $sum3 = $foo->summa3 - $updatetavr->summa3 + $request->summa3;        
        $data = Ichkitavar::find($request->id)->update([
            'tavar_id'=>$request->tavar_id,
            'tavar2_id'=>$request->tavar2_id,
            'name'=>$fff->name,
            'raqam'=>$request->raqam,
            'hajm'=>$request->hajm,
            'summa'=>$request->summa,
            'summa2'=>$request->summa2,
        ]);
        // Updatetavr::where('ichkitavar_id', $request->id)->update([
        //     'tavar_id'=>$request->tavar_id,
        //     'ichkitavar_id'=>$request->id, 
        //     'adress'=>$request->adress,
        //     'tavar2_id'=>$request->tavar2_id,
        //     'raqam'=>$request->raqam,
        //     'hajm'=>$request->hajm, 
        //     'summa'=>$request->summa,
        //     'summa2'=>$request->summa2,
        //     'summa3'=>$request->summa3,
        //     'kod'=>$request->kod
        // ]);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function delete3($id)
    {
        $data = Ichkitavar::find($id);
        $fff = Tavar2::find($data->tavar2_id);
        Deletkarzina::create([
            'tavar_id'=>$data->tavar_id,
            'tavar2_id'=>$data->tavar2_id,
            'name'=>$fff->name,
            'raqam'=>$data->raqam,
            'hajm'=>$data->hajm, 
            'summa'=>$data->summa,
            'summa2'=>$data->summa2,
        ]);
        Ichkitavar::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function delete3dok($id)
    {
        $data = Ichkitavardok::find($id);
        Deletkarzinadok::create([
            'name'=>$data->name,
            'raqam'=>$data->raqam,
            'hajm'=>$data->hajm, 
            'summa'=>$data->summa,
            'summa2'=>$data->summa2,
            'kurs'=>$data->kurs, 
        ]);
        Ichkitavardok::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function tiklash($id)
    {
        $data = Deletkarzina::find($id);
        Ichkitavar::create([
            'tavar_id'=>$data->tavar_id,
            'tavar2_id'=>$data->tavar2_id,
            'name'=>$data->name,
            'raqam'=>$data->raqam,
            'hajm'=>$data->hajm, 
            'summa'=>$data->summa,
            'summa2'=>$data->summa2,
            'kurs'=>$data->kurs,
        ]);
        // Updatetavr::create([
        //     'tavar_id'=>$data->tavar_id,
        //     'ichkitavar_id'=>$a->id,
        //     'adress'=>$data->adress,
        //     'tavar2_id'=>$data->tavar2_id,
        //     'raqam'=>$data->raqam,
        //     'hajm'=>$data->hajm, 
        //     'summa'=>$data->summa,
        //     'summa2'=>$data->summa2,
        //     'summa3'=>$data->summa3,
        //     'kod'=>$data->kod
        // ]);
        Deletkarzina::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли тикланди']);
    }

    public function tiklashdok($id)
    {
        $data = Deletkarzinadok::find($id);
        Ichkitavardok::create([
            'name'=>$data->name,
            'raqam'=>$data->raqam,
            'hajm'=>$data->hajm, 
            'summa'=>$data->summa,
            'summa2'=>$data->summa2,
            'kurs'=>$data->kurs,
        ]);
        // Updatetavrdok::create([
        //     'ichkitavardok_id'=>$a->id,
        //     'name'=>$data->name,
        //     'raqam'=>$data->raqam,
        //     'hajm'=>$data->hajm, 
        //     'summa'=>$data->summa,
        //     'summa2'=>$data->summa2,
        //     'summa3'=>$data->summa3,
        //     'kod'=>$data->kod
        // ]);
        Deletkarzinadok::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли тикланди']);
    }

    public function deleetemnu($id)
    {
        Deletkarzina::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function deleetemnudok($id)
    {
        Deletkarzinadok::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function store4($request)
    {
        $foo = Ichkitavar::find($request->id);
        $h1 = $foo->hajm + $request->hajm;
        $sum1 = $foo->summa + $request->summa;
        $sum2 = $foo->summa2 + $request->summa2;
        $foo->raqam = $request->raqam;
        $foo->hajm = $h1;
        $foo->summa = $sum1;
        $foo->summa2 = $sum2;
        $foo->save();
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $foo], 201);
       
    }

    public function pastavka($request)
    {
        foreach ($request->addmore as $value) {
            $data = Adress::create($value);
        }
        if($data){
            return response()->json(['code'=>200, 'msg'=>'Мувофакиятли яратилмади','data' => $data], 200);
        }
    }

    public function pastavkaupdate($request)
    {
        Adress::find($request->id)->update($request->all());
        $data = Adress::find($request->id);
        return response()->json(['code'=>201, 'msg'=>'Мувофакиятли янгиланди','data' => $data], 201);
    }

    public function deletew4($id)
    {
        Adress::find($id)->delete($id);
        return response()->json(['msg'=>'Мувофакиятли очирилди']);
    }

    public function clents()
    {
        $user = User::paginate(10);
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('clent',[
                'brends'=>$brends,
                'collection'=>$user,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function sazdat($request)
    {
        $valyuta = Itogo::find(1);
        if($valyuta->usd == 0){
            $foo = Ichkitavar::find($request->id);
            if($foo->hajm <= 0){
                return response()->json(['msg'=>'Товар йетарли емас', 'code'=>0]);
            }else{
                $dat = Karzina::create([
                    'tavar_id' => $foo->tavar_id,
                    'ichkitavar_id' => $foo->id,
                    'name' => $foo->name,
                    'raqam' => $foo->raqam,
                    'soni' => 1,
                    'hajm' => $foo->hajm,
                    'summa' => (float)$foo->summa2,
                    'summa2' => (float)$foo->kurs,
                    'chegirma' => 0,
                    'itog' => (float)$foo->kurs,
                ]);
                $ito = Itogo::find(1);
                if($ito){
                    $j = (float)$ito->itogo + (float)$foo->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>(float)$j,
                    ]);
                    $ito2 = Itogo::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito2]);
        
                }else{
                    Itogo::create([
                        'itogo'=>(float)$foo->kurs,
                    ]);
                    $ito3 = Itogo::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito3]);
                }
            }
        }else{
            $foo = Ichkitavar::find($request->id);
            if($foo->hajm <= 0){
                return response()->json(['msg'=>'Товар йетарли емас', 'code'=>0]);
            }else{
                $dat = Karzina::create([
                    'tavar_id' => $foo->tavar_id,
                    'ichkitavar_id' => $foo->id,
                    'name' => $foo->name,
                    'raqam' => $foo->raqam,
                    'soni' => 1,
                    'hajm' => $foo->hajm,
                    'summa' => (float)$foo->summa2 / (float)$valyuta->kurs,
                    'summa2' => (float)$foo->kurs / (float)$valyuta->kurs,
                    'chegirma' => 0,
                    'itog' => (float)$foo->kurs / (float)$valyuta->kurs,
                ]);
                $ito = Itogo::find(1);
                if($ito){
                    $j = (float)$ito->itogo + (float)$foo->kurs / (float)$valyuta->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>(float)$j,
                    ]);
                    $ito2 = Itogo::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito2]);
        
                }else{
                    Itogo::create([
                        'itogo'=>(float)$foo->kurs / (float)$valyuta->kurs,
                    ]);
                    $ito3 = Itogo::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito3]);
                }
            }
        }        
    }

    public function sazdatdok($request)
    {
        $valyuta = Itogodok::find(1);
            if($valyuta->usd == 0){
                $foo = Ichkitavardok::find($request->id);
                $dat = Karzinadok::create([
                    'ichkitavardok_id' => $foo->id,
                    'name' => $foo->name,
                    'raqam' => $foo->raqam,
                    'soni' => 1,
                    'hajm' => $foo->hajm,
                    'summa' => (float)$foo->summa2,
                    'summa2' => (float)$foo->kurs,
                    'chegirma' => 0,
                    'itog' => (float)$foo->kurs,
                ]);
                $ito = Itogodok::find(1);
                if($ito){
                    $j = (float)$ito->itogo + (float)$foo->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>(float)$j,
                    ]);
                    $ito2 = Itogodok::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito2]);
        
                }else{
                    Itogodok::create([
                        'itogo'=>(float)$foo->kurs,
                    ]);
                    $ito3 = Itogodok::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito3]);
                }
            }else{
                $foo = Ichkitavardok::find($request->id);
                $dat = Karzinadok::create([
                    'ichkitavardok_id' => $foo->id,
                    'name' => $foo->name,
                    'raqam' => $foo->raqam,
                    'soni' => 1,
                    'hajm' => $foo->hajm,
                    'summa' => (float)$foo->summa2 / (float)$valyuta->kurs,
                    'summa2' => (float)$foo->kurs / (float)$valyuta->kurs,
                    'chegirma' => 0,
                    'itog' => (float)$foo->kurs / (float)$valyuta->kurs,
                ]);
                $ito = Itogodok::find(1);
                if($ito){
                    $j = (float)$ito->itogo + (float)$foo->kurs / (float)$valyuta->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>(float)$j,
                    ]);
                    $ito2 = Itogodok::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito2]);
        
                }else{
                    Itogodok::create([
                        'itogo'=>(float)$foo->kurs / (float)$valyuta->kurs,
                    ]);
                    $ito3 = Itogodok::find(1);
                    return response()->json(['msg'=>'Кошилди', 'data'=>$dat, 'data2'=>$ito3]);
                }
            }
        
    }

    public function usdkurd2($request)
    {
        $kurs = (float)$request->kurs;
        $row = Ichkitavar::all();
        foreach ($row as $value) {
            $summa2 = (float)$value->summa2;
            $dat = $summa2 * $kurs;
            Ichkitavar::find($value->id)->update([
                'kurs'=>(float)$dat,
            ]);
        }
        $a = Itogo::find(1);
        if($a){
            Itogo::find(1)->update([
                'kurs'=>(float)$request->kurs
            ]);
        }else{
            Itogo::create([
                'itogo'=>0,
                'kurs'=>(float)$request->kurs,
                'usd'=>0
            ]);
        }
        $b2 = Itogo::find(1);
        return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);
    }

    public function usdkurd2dok($request)
    {
        $row = Ichkitavardok::all();
        foreach ($row as $value) {
            $dat = (float)$value->summa2 * (float)$request->kurs;
            Ichkitavardok::find($value->id)->update([
                'kurs'=>(float)$dat,
            ]);
        }
        $a = Itogodok::find(1);
        if($a){
            Itogodok::find(1)->update([
                'kurs'=>(float)$request->kurs
            ]);
        }else{
            Itogodok::create([
                'itogo'=>0,
                'kurs'=>(float)$request->kurs,
                'usd'=>0
            ]);
        }
        $b2 = Itogodok::find(1);
        return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);
    }

    public function plus($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = Ichkitavar::find($foo1->ichkitavar_id);
        $valyuta = Itogo::find(1);
        $a = $foo1->soni + 1;
        if($a > $row->hajm){
            return response()->json(['msg'=>'Тавар етарли емас', 'error'=>400]);
        }else{
            if($valyuta->usd == 0){
                    $itog = $foo1->itog + $row->kurs;
                    $itog2 = $foo1->summa + $row->summa2;
                    Karzina::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzina::find($request->id);
                    $b = Itogo::find(1);
                    $j = $b->itogo + $row->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogo::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);
            }else{
                    $itog = $foo1->itog + $row->kurs / $valyuta->kurs;
                    $itog2 = $foo1->summa + $row->summa2 / $valyuta->kurs;
                    Karzina::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzina::find($request->id);
                    $b = Itogo::find(1);
                    $j = $b->itogo + $row->kurs / $valyuta->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogo::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);
        
            }
        }
    }

    public function plusdok($request)
    {
        $foo1 = Karzinadok::find($request->id);
        $row = Ichkitavardok::find($foo1->ichkitavardok_id);
        $valyuta = Itogodok::find(1);
        $a = $foo1->soni + 1;
        if($a > $row->hajm){
            return response()->json(['msg'=>'Тавар етарли емас', 'error'=>400]);
        }else{
            if($valyuta->usd == 0){
                    $itog = $foo1->itog + $row->kurs;
                    $itog2 = $foo1->summa + $row->summa2;
                    Karzinadok::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzinadok::find($request->id);
                    $b = Itogodok::find(1);
                    $j = $b->itogo + $row->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogodok::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);         
            }else{
                    $itog = $foo1->itog + $row->kurs / $valyuta->kurs;
                    $itog2 = $foo1->summa + $row->summa2 / $valyuta->kurs;
                    Karzinadok::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzinadok::find($request->id);
                    $b = Itogodok::find(1);
                    $j = $b->itogo + $row->kurs / $valyuta->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogodok::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);          
            }
        }
    }

    public function minus($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = Ichkitavar::find($foo1->ichkitavar_id);
        $valyuta = Itogo::find(1);
        $a = $foo1->soni - 1;
        if($a < 1){
            return $this->delminus($request, $row, $valyuta);
        }else{
            if($valyuta->usd == 0){
                    $itog = $foo1->itog - $row->kurs;
                    $itog2 = $foo1->summa - $row->summa2;
                    Karzina::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzina::find($request->id);
                    $b = Itogo::find(1);
                    $j = $b->itogo - $row->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogo::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);           
            }else{
                    $itog = $foo1->itog - $row->kurs / $valyuta->kurs;
                    $itog2 = $foo1->summa - $row->summa2 / $valyuta->kurs;
                    Karzina::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzina::find($request->id);
                    $b = Itogo::find(1);
                    $j = $b->itogo - $row->kurs / $valyuta->kurs;
                    Itogo::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogo::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);       
            }
        }
    }

    public function minusdok($request)
    {
        $foo1 = Karzinadok::find($request->id);
        $row = Ichkitavardok::find($foo1->ichkitavardok_id);
        $valyuta = Itogodok::find(1);
        $a = $foo1->soni - 1;
        if($a < 1){
            return $this->delminus($request, $row, $valyuta);
        }else{
            if($valyuta->usd == 0){
                    $itog = $foo1->itog - $row->kurs;
                    $itog2 = $foo1->summa - $row->summa2;
                    Karzinadok::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzinadok::find($request->id);
                    $b = Itogodok::find(1);
                    $j = $b->itogo - $row->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogodok::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);     
            }else{
                    $itog = $foo1->itog - $row->kurs / $valyuta->kurs;
                    $itog2 = $foo1->summa - $row->summa2 / $valyuta->kurs;
                    Karzinadok::find($request->id)->update([
                        'soni'=>$a,
                        'itog'=>$itog,
                        'summa'=>$itog2,
                    ]);
                    $foo3 = Karzinadok::find($request->id);
                    $b = Itogodok::find(1);
                    $j = $b->itogo - $row->kurs / $valyuta->kurs;
                    Itogodok::find(1)->update([
                        'itogo'=>$j,
                    ]);
                    $b2 = Itogodok::find(1);
                    return response()->json(['data'=>$foo3, 'data2'=>$b2]);
       
            }
        }
    }
    public function delminus($request, $row, $valyuta)
    {
        $b = Itogo::find(1);
        $j = $b->itogo - $row->kurs / $valyuta->kurs;
        Itogo::find(1)->update([
            'itogo'=>$j
        ]);
        $b2 = Itogo::find(1);
        $foo3 = Karzina::find($request->id);
        Karzina::find($request->id)->delete($request->id);
        $iff = Karzina::count();
        if ($iff == 0) {
            Itogo::find(1)->update([
                'itogo'=>0,
            ]);
            $b3 = Itogo::find(1);
            return response()->json(['msg'=>'Тавар олиб ташланди', 'data'=>$foo3, 'data2'=>$b3, 'error'=>400]);
        }else{
            return response()->json(['msg'=>'Тавар олиб ташланди', 'data'=>$foo3, 'data2'=>$b2, 'error'=>400]);
        }
    }
    
    public function udalitdok($request)
    {
        $foo1 = Karzinadok::find($request->id);
        $b = Itogodok::find(1);
        $j = $b->itogo - $foo1->itog;
        Itogodok::find(1)->update([
            'itogo'=>$j,
        ]);
        $b2 = Itogodok::find(1);
        Karzinadok::find($request->id)->delete($request->id);
        $iff = Karzinadok::count();
        if ($iff == 0) {
            Itogodok::find(1)->update([
                'itogo'=>0,
            ]);
            $b3 = Itogodok::find(1);
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b3]);
        }else{
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b2]);
        }
    }

    public function udalit($request)
    {
        $foo1 = Karzina::find($request->id);
        $b = Itogo::find(1);
        $j = $b->itogo - $foo1->itog;
        Itogo::find(1)->update([
            'itogo'=>$j,
        ]);
        $b2 = Itogo::find(1);
        Karzina::find($request->id)->delete($request->id);
        $iff = Karzina::count();
        if ($iff == 0) {
            Itogo::find(1)->update([
                'itogo'=>0,
            ]);
            $b3 = Itogo::find(1);
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b3]);
        }else{
            return response()->json(['msg'=>'Очирилди', 'data'=>$foo1, 'data2'=>$b2]);
        }
    }
    public function yangilashdok($request)
    {
        $foo1 = Karzinadok::find($request->id);
        $row = Ichkitavardok::find($foo1->ichkitavar_id);
        if($request->soni > $row->hajm){
            return response()->json(['msg'=>'Тавар етарли емас', 'code'=>0]);
        }else{
            $b = Itogodok::find(1);
            $pool = $b->itogo - $foo1->itog;
            $poo2 = $pool + $request->summ;
            Itogodok::find(1)->update([
                'itogo'=>$poo2
            ]);
            Karzinadok::find($request->id)->update([
                'soni'=>$request->soni,
                'summa2'=>$request->summo,
                'chegirma'=>$request->cheg,
                'itog'=>$request->summ,
            ]);
            $foo3 = Karzinadok::find($request->id);
            $b2 = Itogodok::find(1);
            return response()->json(['msg'=>'Янгиланди', 'data'=>$foo3, 'data2'=>$b2]);
        }
    }

    public function yangilash($request)
    {
        $foo1 = Karzina::find($request->id);
        $row = Ichkitavar::find($foo1->ichkitavar_id);
        if($request->soni > $row->hajm){
            return response()->json(['msg'=>'Тавар етарли емас', 'code'=>0]);
        }else{
            $b = Itogo::find(1);
            $pool = $b->itogo - $foo1->itog;
            $poo2 = $pool + $request->summ;
            Itogo::find(1)->update([
                'itogo'=>$poo2
            ]);
            Karzina::find($request->id)->update([
                'soni'=>$request->soni,
                'summa2'=>$request->summo,
                'chegirma'=>$request->cheg,
                'itog'=>$request->summ,
            ]);
            $foo3 = Karzina::find($request->id);
            $b2 = Itogo::find(1);
            return response()->json(['msg'=>'Янгиланди', 'data'=>$foo3, 'data2'=>$b2]);
        }
    }

    public function tugledok($request)
    {
        unset($request["_tokin"]);
        $row = Karzinadok::all();
        $b23 = Itogodok::find(1);
        if($b23->usd == 0){
            foreach ($row as $value) {
                $dat = $value->summa2 / $b23->kurs;
                $dat2 = $value->itog / $b23->kurs;
                Karzinadok::find($value->id)->update([
                    'summa2'=>$dat,
                    'itog'=>$dat2
                ]);
            }
            Itogodok::find(1)->update([
                'itogo' => $b23->itogo / $b23->kurs,
                'usd' => 1,
            ]);
            $b2 = Itogodok::find(1);
            return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);
        }else{
            return $this->tuglesomdok($b23);
        }
    }

    public function tugle($request)
    {
        unset($request["_tokin"]);
        $row = Karzina::all();
        $b23 = Itogo::find(1);
        if($b23->usd == 0){
            foreach ($row as $value) {
                $dat = (float)$value->summa2 / (float)$b23->kurs;
                $dat2 = (float)$value->itog / (float)$b23->kurs;
                Karzina::find($value->id)->update([
                    'summa2'=>(float)$dat,
                    'itog'=>(float)$dat2
                ]);
            }
            Itogo::find(1)->update([
                'itogo' => (float)$b23->itogo / (float)$b23->kurs,
                'usd' => 1,
            ]);
            $b2 = Itogo::find(1);
            return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);
        }else{
            return $this->tuglesom($b23);
        }
    }

    public function tuglesom($b23)
    {
        $row = Karzina::all();
        foreach ($row as $value) {
            $dat = (float)$value->summa2 * (float)$b23->kurs;
            $dat2 = (float)$value->itog * (float)$b23->kurs;
            Karzina::find($value->id)->update([
                'summa2'=>(float)$dat,
                'itog'=>(float)$dat2
            ]);
        }
        Itogo::find(1)->update([
            'itogo' => (float)$b23->itogo * (float)$b23->kurs,
            'usd' => 0
        ]);
        $b2 = Itogo::find(1);
        return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);        
    }

    public function tuglesomdok($b23)
    {
        $row = Karzinadok::all();
        foreach ($row as $value) {
            $dat = $value->summa2 * $b23->kurs;
            $dat2 = $value->itog * $b23->kurs;
            Karzinadok::find($value->id)->update([
                'summa2'=>$dat,
                'itog'=>$dat2
            ]);
        }
        Itogodok::find(1)->update([
            'itogo' => $b23->itogo * $b23->kurs,
            'usd' => 0
        ]);
        $b2 = Itogodok::find(1);
        return response()->json(['msg'=>'Киритилди', 'data'=>$b2]);        
    }
    
    public function oplatadok($request)
    {
        $usd = Itogodok::find(1);
        if ($usd->usd == 1) {
            if($request->id){
                $variable = Karzinadok::all();
                $arxiv = Arxivdok::create([
                    'userdok_id'=>$request->id,
                    'itogs'=>$request->itogs,
                    'naqt'=>$request->naqt,
                    'plastik'=>$request->plastik,
                    'bank'=>$request->bank,
                    'karzs'=>$request->karzs,
                ]);
                foreach ($variable as $value) {
                    Karzina2dok::create([
                        'userdok_id'=> $request->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'clentra' => $arxiv->clentra,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                    $foo = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $foo->hajm = $foo2;
                    $foo->save();
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzinadok::all();
                foreach ($variable as $value) {
                    Karzina3dok::create([
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                    $foo = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $foo->hajm = $foo2;
                    $foo->save();
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }else{
            if($request->id){
                $variable = Karzinadok::all();
                $arxiv = Arxivdok::create([
                    'user_id'=>$request->id,
                    'itogs'=>$request->itogs / $usd->kurs,
                    'naqt'=>$request->naqt / $usd->kurs,
                    'plastik'=>$request->plastik / $usd->kurs,
                    'bank'=>$request->bank / $usd->kurs,
                    'karzs'=>$request->karzs / $usd->kurs,
                ]);
                foreach ($variable as $value) {
                    Karzina2dok::create([
                        'userdok_id'=> $request->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'clentra' => $arxiv->clentra,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                    $foo = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $foo->hajm = $foo2;
                    $foo->save();
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzinadok::all();
                foreach ($variable as $value) {
                    Karzina3dok::create([
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name,
                        'soni'=> $value->soni,
                        'hajm'=> $value->hajm,
                        'summa'=> $value->summa / $usd->kurs,
                        'summa2'=> $value->summa2 / $usd->kurs,
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                    $foo = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $foo->hajm = $foo2;
                    $foo->save();
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }
    }

    public function bot($request)
    {
        $user = User::find($request->id);
        $javob = Javob::where('user_id', $request->id)->first();
        $foo = $javob->javob + $request->karzs;
        $data = Karzina::all();
        return response()->json(['user'=>$user, 'javob'=>$foo, 'context'=>$data]);
    }

    public function oplata($request){
        $dt= Carbon::now('Asia/Tashkent');
        $month = $dt->month;
        $year = $dt->year;
        $usd = Itogo::find(1);
        if ($usd->usd == 1) {
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            if($sta){
                $ddd = $sta->kassa + $request->itogs;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'kassa'=>$ddd,
                ]);
                return $this->oplata2($request, $month, $year);
            }else{
                Statistika::create([
                    'kassa'=>$request->itogs,
                ]);
                return $this->oplata2($request, $month, $year);
            }
        }else{
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            if($sta){
                $ddd = $sta->kassa + $request->itogs / $usd->kurs;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'kassa'=>$ddd,
                ]);
                return $this->oplata2($request, $month, $year);
            }else{
                Statistika::create([
                    'kassa'=>$request->itogs / $usd->kurs,
                ]);
                return $this->oplata2($request, $month, $year);
            }
        }
    }

    public function oplata2($request, $month, $year)
    {
        if($request->id){
            $usd = Itogo::find(1);
            if ($usd->usd == 1) {
                if($request->karzs){
                    $user = User::find($request->id);
                    if($user->summa){
                        $foo = $request->karzs - $user->summa;
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs,
                            'naqt'=>$request->naqt,
                            'plastik'=>$request->plastik,
                            'bank'=>$request->bank,
                            'karzs'=>$foo,
                            'srok'=>$request->srok,
                        ]);
                        User::find($request->id)->update(['summa'=>0]);
                        $user_id = Javob::where('user_id', $request->id)->first();
                        $user_id->javob = $user_id->javob + $foo;
                        $user_id->update(); 
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }else{
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs,
                            'naqt'=>$request->naqt,
                            'plastik'=>$request->plastik,
                            'bank'=>$request->bank,
                            'karzs'=>$request->karzs,
                            'srok'=>$request->srok,
                        ]);
                        $user_ide = Javob::where('user_id', $request->id)->first();
                        $user_ide->javob = $user_ide->javob + $request->karzs;
                        $user_ide->update();   
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }
                }else{
                    if($request->naqt > 0 || $request->plastik > 0  || $request->bank > 0){
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs,
                            'naqt'=>$request->naqt,
                            'plastik'=>$request->plastik,
                            'bank'=>$request->bank,
                            'karzs'=>0,
                            'srok'=>$request->srok,
                        ]);
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }else{
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs,
                            'naqt'=>$request->naqt,
                            'plastik'=>$request->plastik,
                            'bank'=>$request->bank,
                            'karzs'=>0,
                            'srok'=>$request->srok,
                        ]);
                        $userw = User::find($request->id);
                        $userw->summa = $userw->summa - $request->itogs;
                        $userw->update();  
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }
                }
            }else{
                if($request->karzs){
                    $user2 = User::find($request->id);
                    if($user2->summa){
                        $foo2 = $request->karzs / $usd->kurs - $user2->summa;
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs / $usd->kurs,
                            'naqt'=>$request->naqt / $usd->kurs,
                            'plastik'=>$request->plastik / $usd->kurs,
                            'bank'=>$request->bank / $usd->kurs,
                            'karzs'=> $foo2,
                            'srok'=>$request->srok,
                        ]);
                        User::find($request->id)->update(['summa'=>0]);
                        $user_id2 = Javob::where('user_id', $request->id)->first();
                        $user_id2->javob = $user_id2->javob + $foo2;
                        $user_id2->update();
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }else{
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs / $usd->kurs,
                            'naqt'=>$request->naqt / $usd->kurs,
                            'plastik'=>$request->plastik / $usd->kurs,
                            'bank'=>$request->bank / $usd->kurs,
                            'karzs'=> $request->karzs / $usd->kurs,
                            'srok'=>$request->srok,
                        ]);
                        $user_id3 = Javob::where('user_id', $request->id)->first();
                        $jav = $user_id3->javob + $request->karzs / $usd->kurs;
                        $user_id3->javob = $jav;
                        $user_id3->update();  
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }
                }else{
                    if($request->naqt > 0 || $request->plastik > 0 || $request->bank > 0){
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs / $usd->kurs,
                            'naqt'=>$request->naqt / $usd->kurs,
                            'plastik'=>$request->plastik / $usd->kurs,
                            'bank'=>$request->bank / $usd->kurs,
                            'karzs'=> 0,
                            'srok'=>$request->srok,
                        ]);
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }else{
                        $arxiv = Arxiv::create([
                            'user_id'=>$request->id,
                            'itogs'=>$request->itogs / $usd->kurs,
                            'naqt'=>$request->naqt / $usd->kurs,
                            'plastik'=>$request->plastik / $usd->kurs,
                            'bank'=>$request->bank / $usd->kurs,
                            'karzs'=> 0,
                            'srok'=>$request->srok,
                        ]);
                        $userw2 = User::find($request->id);
                        $jaw = $request->itogs / $usd->kurs;
                        $userw2->summa = $userw2->summa - $jaw;
                        $userw2->update();  
                        return $this->oplata3($request, $month, $year, $arxiv);
                    }
                }
            }
        }else{
            return $this->oplata3($request, $month, $year, null);
        }
    }

    public function oplata3($request, $month, $year, $arxiv)
    {
        $usd = Itogo::find(1);
        if ($usd->usd == 1) {
            if($request->id){
                $variable = Karzina::all();
                foreach ($variable as $value) {
                    Karzina2::create([
                        'user_id'=> $request->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'clentra'=>$arxiv->user->name,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa,
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                    $foo = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $sena = $value->soni * $foo->summa;
                    Ichkitavar::find($value->ichkitavar_id)->update([
                        'hajm'=>$foo2
                    ]);
                    $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                    $pop = $sta->foyda + $sena;
                    Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                        'foyda'=>$pop,
                    ]);
                }
                $kassa = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                $pribl = $kassa->kassa - $kassa->foyda;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'pribl'=>$pribl,
                ]);
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzina::all();
                foreach ($variable as $value) {
                    Karzina3::create([
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                    $foo = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $sena = $value->soni * $foo->summa;
                    Ichkitavar::find($value->ichkitavar_id)->update([
                        'hajm'=>$foo2
                    ]);
                    $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                    $pop = $sta->foyda + $sena;
                    Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                        'foyda'=>$pop,
                    ]);                   
                }
                $kassa = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                $pribl = $kassa->kassa - $kassa->foyda;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'pribl'=>$pribl,
                ]);
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }else{
            if($request->id){
                $variable = Karzina::all();
                foreach ($variable as $value) {
                    Karzina2::create([
                        'user_id'=> $request->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'clentra'=>$arxiv->user->name,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                    $foo = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $sena = $value->soni * $foo->summa;
                    Ichkitavar::find($value->ichkitavar_id)->update([
                        'hajm'=>$foo2
                    ]);
                    $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                    $pop = $sta->foyda + $sena;
                    Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                        'foyda'=>$pop,
                    ]);
                }
                $kassa = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                $pribl = $kassa->kassa - $kassa->foyda;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'pribl'=>$pribl,
                ]);
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzina::all();
                foreach ($variable as $value) {
                    Karzina3::create([
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name,
                        'soni'=> $value->soni,
                        'hajm'=> $value->hajm,
                        'summa'=> $value->summa / $usd->kurs,
                        'summa2'=> $value->summa2 / $usd->kurs,
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                    $foo = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = $foo->hajm - $value->soni;
                    $sena = $value->soni * $foo->summa;
                    Ichkitavar::find($value->ichkitavar_id)->update([
                        'hajm'=>$foo2
                    ]);
                    $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                    $pop = $sta->foyda + $sena;
                    Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                        'foyda'=>$pop,
                    ]);
                }
                $kassa = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
                $pribl = $kassa->kassa - $kassa->foyda;
                Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                    'pribl'=>$pribl,
                ]);          
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }
    }

    public function zakazaytdok($request)
    {
        $usd = Itogodok::find(1);
        if ($usd->usd == 1) {
            if($request->id){
                $variable = Karzinadok::all();    
                foreach ($variable as $value) {
                    Karzina2dok::create([
                        'userdok_id'=> $request->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog,
                        'zakaz'=> $request->checks,
                    ]);
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzinadok::all();
                $fooo = Zakazdok::create([
                    'malumot'=>$request->malumot,
                    'itogs'=>$request->itogs,
                    'naqt'=>$request->naqt,
                    'plastik'=>$request->plastik,
                    'bank'=>$request->bank,
                    'karzs'=>$request->karzs,
                ]);
                foreach ($variable as $value) {
                    Zakaz2dok::create([
                        'zakazdok_id'=> $fooo->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }else{
            if($request->id){
                $variable = Karzinadok::all();          
                foreach ($variable as $value) {
                    Karzina2dok::create([
                        'userdok_id'=> $request->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name,
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog / $usd->kurs,
                        'zakaz'=> $request->checks,
                    ]);
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzinadok::all();
                $fooo = Zakazdok::create([
                    'malumot'=>$request->malumot,
                    'itogs'=>$request->itogs / $usd->kurs,
                    'naqt'=>$request->naqt / $usd->kurs,
                    'plastik'=>$request->plastik / $usd->kurs,
                    'bank'=>$request->bank / $usd->kurs,
                    'karzs'=>$request->karzs / $usd->kurs,
                ]);
                foreach ($variable as $value) {
                    Zakaz2dok::create([
                        'zakazdok_id'=> $fooo->id,
                        'ichkitavardok_id'=> $value->ichkitavardok_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                }
                Itogodok::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogodok::find(1);
                Karzinadok::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }        
    }
    public function zakazayt($request)
    {
        $usd = Itogo::find(1);
        if ($usd->usd == 1) {
            if($request->id){
                $variable = Karzina::all();
                foreach ($variable as $value) {
                    Karzina2::create([
                        'user_id'=> $request->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog,
                        'zakaz'=> $request->checks,
                    ]);
                }
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzina::all();
                $fooo = Zakaz::create([
                    'malumot'=>$request->malumot,
                    'itogs'=>$request->itogs,
                    'naqt'=>$request->naqt,
                    'plastik'=>$request->plastik,
                    'bank'=>$request->bank,
                    'karzs'=>$request->karzs,
                ]);
                foreach ($variable as $value) {
                    Zakaz2::create([
                        'zakaz_id'=> $fooo->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa, 
                        'summa2'=> $value->summa2, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog,
                    ]);
                }
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }else{
            if($request->id){
                $variable = Karzina::all();        
                foreach ($variable as $value) {
                    Karzina2::create([
                        'user_id'=> $request->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name,
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma,
                        'itog'=> $value->itog / $usd->kurs,
                        'zakaz'=> $request->checks,
                    ]);
                }
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }else{
                $variable = Karzina::all();
                $fooo = Zakaz::create([
                    'malumot'=>$request->malumot,
                    'itogs'=>$request->itogs / $usd->kurs,
                    'naqt'=>$request->naqt / $usd->kurs,
                    'plastik'=>$request->plastik / $usd->kurs,
                    'bank'=>$request->bank / $usd->kurs,
                    'karzs'=>$request->karzs / $usd->kurs,
                ]);
                foreach ($variable as $value) {
                    Zakaz2::create([
                        'zakaz_id'=> $fooo->id,
                        'tavar_id'=> $value->tavar_id,
                        'ichkitavar_id'=> $value->ichkitavar_id,
                        'name'=> $value->name, 
                        'soni'=> $value->soni,  
                        'hajm'=> $value->hajm, 
                        'summa'=> $value->summa / $usd->kurs, 
                        'summa2'=> $value->summa2 / $usd->kurs, 
                        'chegirma'=> $value->chegirma, 
                        'itog'=> $value->itog / $usd->kurs,
                    ]);
                }
                Itogo::find(1)->update([
                    'itogo'=>0,
                ]);
                $b2 = Itogo::find(1);
                Karzina::where('id',">",0)->delete();
                return response()->json(['data'=>$b2]);
            }
        }        
    }
}