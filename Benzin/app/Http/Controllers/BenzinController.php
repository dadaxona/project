<?php

namespace App\Http\Controllers;

use App\Models\Benzin;
use App\Models\Benzinperexod;
use App\Models\Benzinperexodistoriya;
use App\Models\Benzinrasxod;
use App\Models\Benzinrasxodistoriya;
use App\Models\Javob;
use App\Models\Kassa;
use App\Models\Klent;
use App\Models\Rashod;
use App\Models\Summa;
use App\Models\Yigim;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BenzinController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $output = '';  
            $data = Benzin::all();
            foreach($data as $row)
            {
                $output .= '
                <tr class="tr2">
                    <td>'.$row->name.'</td>
                    <td>'.number_format($row->summa).'</td>
                    <td>
                        <button class="btn-success" id="edit" data-id="'.$row->id.'" data-name="'.$row->name.'" data-summa="'.$row->summa.'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        </svg>
                        </button>                            
                        <button class="btn-danger" id="delet" data-id="'.$row->id.'" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                        </button>
                    </td>
                </tr>
                ';
            }
        return response()->json($output);
        }
    }

    public function benzin_idras()
    {
        $output = '';
        $data = Benzin::all();
        $output .= '<option value="">Танланг</option>';
        foreach($data as $row)
        {
            $output .= '
                <option value="'.$row->id.'">'.$row->name.'</option>
            ';
        }
        return response()->json($output);
    }

    public function index2(Request $request)
    {
        if($request->ajax())
        {
            if($request->ajax())
            {
                $pl = '';
                $output = '';  
                $data = Benzinperexod::all();
                foreach($data as $row)
                {
                    if($row->plus < 500){
                        $pl = '<td style="background-color: #a30000; color: white;"> '.$row->plus.'</td>';
                    }else{
                        $pl = '<td> '.$row->plus.'</td>';
                    }
                    $output .= '
                    <tr class="tr2">
                        <td>'.$row->benzin->name.'</td>
                        '.$pl.'
                        <td>'.number_format($row->summa).'</td>
                        <td>'.number_format($row->jami).'</td>
                        <td>
                            <button class="btn-primary" id="plusedit" data-id="'.$row->id.'" data-benzin_id="'.$row->benzin->id.'" data-name="'.$row->benzin->name.'" data-plus="'.$row->plus.'" data-summa="'.$row->summa.'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </button>  
                            <button class="btn-danger" id="plusdelet" data-id="'.$row->id.'" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                            </button>
                        </td>
                    </tr>
                    ';
                }
            return response()->json($output);
            }
        }
    }

    
    public function tbperex(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            if($request->sana2fil){
                $data = Benzinperexodistoriya::whereBetween('data', [$request->sana1fil, $request->sana2fil])->get();
                foreach($data as $row)
                {               
                    $output .= '
                    <tr class="tr2">
                        <td>'.$row->benzin->name.'</td>
                        <td>'.$row->plus.'</td>;
                        <td>'.number_format($row->summa).'</td>
                        <td>'.number_format($row->jami).'</td>
                        <td>'.$row->data.'</td>
                    </tr>
                    ';
                }
            }else{                
                $data2 = Benzinperexodistoriya::orderBy('id', 'DESC')->get();
                foreach($data2 as $row)
                {               
                    $output .= '
                    <tr class="tr2">
                        <td>'.$row->benzin->name.'</td>
                        <td>'.$row->plus.'</td>;
                        <td>'.number_format($row->summa).'</td>
                        <td>'.number_format($row->jami).'</td>
                        <td>'.$row->data.'</td>
                    </tr>
                    ';
                }
            }
            return response()->json($output);
        }
    }

    public function index3(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $output = '';
        if($request->ajax())
        {
            if($request->sanafilras2){
                $data = Benzinrasxod::whereBetween('data', [$request->sanafilras, $request->sanafilras2])->get();
            }else{
                $data = Benzinrasxod::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
            }
            foreach($data as $row)
            {
                $output .= '
                <tr class="tr2">
                    <td>'.$row->benzin->name.'</td>
                    <td>'.$row->holat.'</td>
                    <td>'.$row->holat2.'</td>
                    <td>'.$row->litr.'</td>
                    <td>'.number_format($row->summa).'</td>
                    <td style="color: rgb(0, 181, 0)">'.number_format($row->jami).'</td>
                    <td>'.$row->data.'</td>
                    <td>
                        <button class="btn-primary"
                        id="minusedit" data-id="'.$row->id.'" data-benzin_id="'.$row->benzin->id.'" data-holat="'.$row->holat.'" data-holat2="'.$row->holat2.'" data-summa="'.$row->summa.'" data-litr="'.$row->litr.'" data-jami="'.$row->jami.'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                        </button>  
                        <button class="btn-danger" id="minusdelet" data-id="'.$row->id.'" data-name="'.$row->benzin->name.'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                ';
            }
        return response()->json($output);
        }
    }
    public function index4(Request $request)
    {
        if($request->ajax())
        {
            $output = '';  
            $data = Benzinrasxod::all();
            foreach($data as $row)
            {
                $output .= '
                <tr class="tr2">
                    <td>'.$row->benzin->name.'</td>
                    <td>'.$row->holat.'</td>
                    <td>'.$row->holat2.'</td>
                    <td>'.$row->litr.'</td>
                    <td>'.number_format($row->summa).'</td>
                    <td>'.number_format($row->jami).'</td>
                    <td>'.$row->data.'</td>
                    <td>
                        <button class="btn-primary" 
                        id="minusedit" data-id="'.$row->id.'" data-benzin_id="'.$row->benzin->id.'" data-holat="'.$row->holat.'" data-holat2="'.$row->holat2.'" data-summa="'.$row->summa.'" data-litr="'.$row->litr.'" data-jami="'.$row->jami.'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                        </button>  
                        <button class="btn-success" id="minus" data-id="'.$row->id.'" data-name="'.$row->benzin->name.'">
                            =
                        </button>                            
                    </td>
                </tr>
                ';
            }
        return response()->json($output);
        }
    }

    public function index5(Request $request)
    {
        if($request->ajax())
        {
            $output = '';  
            $data = Benzinperexodistoriya::orderBy('id', 'DESC')->get();
            foreach($data as $row)
            {
                $output .= '
                <tr class="tr2">
                    <td>'.$row->benzin->name.'</td>
                    <td>'.$row->plus.' / '.number_format($row->summa).' / '.number_format($row->jami).'</td>
                    <td>'.$row->data.'</td>
                </tr>
                ';
            }
        return response()->json($output);
        }
    }

    public function index6(Request $request)
    {
        if($request->ajax())
        {
            $output = '';  
            $data = Benzinrasxod::orderBy('id', 'DESC')->get();
            foreach($data as $row)
            {
                $output .= '
                <tr class="tr2">
                    <td>'.$row->benzin->name.'</td>
                    <td>'.$row->minus.'</td>
                    <td>'.$row->summa.'</td>
                </tr>
                ';
            }
        return response()->json($output);
        }
    }
  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'summa' => 'required|numeric',
        ]);
        if($validator->passes()){
            if($request->id){
                Benzin::find($request->id)->update([
                    'name' => $request->name,
                    'summa' => $request->summa,
                ]);
                return response()->json(201);
            }else{
                Benzin::create([
                    'name' => $request->name,
                    'summa' => $request->summa,
                ]);
                return response()->json(200);
            }
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }
    
    public function delete(Request $request)
    {
        Benzinperexod::find($request->id)->delete($request->id);
        return response()->json(201);       
    }
    
    public function deleteper(Request $request)
    {
        Benzin::find($request->id)->delete($request->id);
        return response()->json(201);       
    }

    public function perexod(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $validator = Validator::make($request->all(), [
            'benzin_id'=>'required',
            'plus' => 'required|numeric',
            'summa' => 'required|numeric',
        ]);
        if($validator->passes()){
            if($request->id){
                Benzinperexod::find($request->id)->update([
                    'benzin_id'=>$request->benzin_id,
                    'plus'=>$request->plus,
                    'summa'=>$request->summa,
                    'data'=>$data1,
                    'jami'=>$request->plus * $request->summa,
                ]);
                Benzinperexodistoriya::find($request->id)->update([
                    'benzin_id'=>$request->benzin_id,
                    'plus'=>$request->plus,
                    'summa'=>$request->summa,
                    'data'=>$data1,
                    'jami'=>$request->plus * $request->summa,
                ]);
            }else{
                $data_id = Benzinperexod::where('benzin_id',$request->benzin_id)->first();
                if($data_id){
                    $data_id->plus = $data_id->plus + $request->plus;
                    $data_id->summa = $request->summa;
                    $data_id->jami = $data_id->jami + $request->plus * $request->summa;
                    $data_id->data = $data1;
                    $data_id->update();
                    Benzinperexodistoriya::create([
                        'benzin_id'=>$request->benzin_id,
                        'plus'=>$request->plus,
                        'summa'=>$request->summa,
                        'data'=>$data1,
                        'jami'=>$request->plus * $request->summa,
                    ]);
                }else{
                    Benzinperexod::create([
                        'benzin_id'=>$request->benzin_id,
                        'plus'=>$request->plus,
                        'summa'=>$request->summa,
                        'data'=>$data1,
                        'jami'=>$request->plus * $request->summa,
                    ]);
                    Benzinperexodistoriya::create([
                        'benzin_id'=>$request->benzin_id,
                        'plus'=>$request->plus,
                        'summa'=>$request->summa,
                        'data'=>$data1,
                        'jami'=>$request->plus * $request->summa,
                    ]);
                }
            }
            return response()->json(200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function rasxod(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'benzin_id'=>'required',
            'holat' => 'required|numeric',
            'holat2' => 'required|numeric',
        ]);
        if($validator->passes()){
            return $this->rasxodfun($request);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function rasxodfun($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $a = Benzinperexod::find($request->benzin_id);
        $a->plus = $a->plus - $request->litr;
        $a->update();
        if($request->id){
            Benzinrasxod::find($request->id)->update([
                'benzin_id'=>$request->benzin_id,
                'holat'=>$request->holat,
                'holat2'=>$request->holat2,
                'data'=>$data1,
                'sum'=>$a->summa,
                'summa'=>$request->summa,
                'litr'=>$request->litr,
                'jami'=>$request->jami,
            ]);
            Benzinrasxodistoriya::find($request->id)->update([
                'benzin_id'=>$request->benzin_id,
                'holat'=>$request->holat,
                'holat2'=>$request->holat2,
                'data'=>$data1,
                'summa'=>$request->summa,
                'litr'=>$request->litr,
                'jami'=>$request->jami,
            ]);
        }else{   
            Benzinrasxod::create([
                'benzin_id'=>$request->benzin_id,
                'holat'=>$request->holat,
                'holat2'=>$request->holat2,
                'data'=>$data1,
                'sum'=>$a->summa,
                'summa'=>$request->summa,
                'litr'=>$request->litr,
                'jami'=>$request->jami,
            ]);
            Benzinrasxodistoriya::create([
                'benzin_id'=>$request->benzin_id,
                'holat'=>$request->holat,
                'holat2'=>$request->holat2,
                'data'=>$data1,
                'summa'=>$request->summa,
                'litr'=>$request->litr,
                'jami'=>$request->jami,
            ]);
        }
        return response()->json(200);
    }

    public function idsumma(Request $request)
    {
        $id = Benzin::find($request->id);
        return response()->json($id);
    }

    public function summos(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'uzqardsumma' => 'required|numeric',
            'humosumma' => 'required|numeric',
        ]);
        if($validator->passes()){
            return $this->summos2($request);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function sotuv2(Request $request)
    {
        $j = Javob::find(1);
        if($j){
            $j->jami = 0;
            $j->update();
            return $this->sotuv3($request);
        }else{
            Javob::create([
                'jami'=> 0
            ]);
            return $this->sotuv3($request);
        }
    }

    public function sotuv3($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $gets = Benzinrasxod::where('data', $data1)->get();
        foreach ($gets as $val) {
            $j = Javob::find(1);
            if($j){
                $j->jami = $j->jami + $val->jami;
                $j->update();
            }else{
                Javob::create([
                    'jami'=> $val->jami
                ]);
            }
        }
        if($request->sanafilsum2){
            $sum = Summa::whereBetween('data', [$request->sanafilsum, $request->sanafilsum2])->get();
        }else{
            $sum = Summa::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        }
        $daa = Javob::find(1);
        return response()->json(["jav"=>$daa, "summa"=>$sum]);
    }
    
    public function summos2($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();  
        if($request->id){
            Summa::find($request->id)->update([
                'naqtsumma'=>$request->naqtsumma,
                'uzqardsumma'=>$request->uzqardsumma,
                'humosumma'=>$request->humosumma,
                'data'=>$data1,
                'naqtsumma3'=>$request->naqtsumma3,
            ]);
        }else{
            Summa::create([
                'naqtsumma'=>$request->naqtsumma,
                'uzqardsumma'=>$request->uzqardsumma,
                'humosumma'=>$request->humosumma,
                'data'=>$data1,
                'naqtsumma3'=>$request->naqtsumma3,
            ]);
        }
        return response()->json(200);
    }

    public function sumcontdel(Request $request)
    {
        Summa::find($request->id)->delete($request->id);
        return response()->json(201);       
    }

    public function klentqarzfun(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        if($request->sanafilsum2){
            $sum = Klent::whereBetween('data', [$request->sanafilsum, $request->sanafilsum2])->get();
        }else{
            $sum = Klent::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        }
        return response()->json($sum);
    }

    public function klentqarz(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'qarz' => 'required|numeric',
        ]);
        if($validator->passes()){
            return $this->klentqarz22($request);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function klentqarz22($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();  
        if($request->id){
            Klent::find($request->id)->update([
                'name'=>$request->name,
                'qarz'=>$request->qarz,
                'data'=>$data1,
            ]);
        }else{
            $kl = Klent::where('name', $request->name)->first();
            if($kl){
                $kl->qarz = $kl->qarz + $request->qarz;
                $kl->update();
            }else{
                Klent::create([
                    'name'=>$request->name,
                    'qarz'=>$request->qarz,
                    'data'=>$data1,
                ]);
            }
        }
        return response()->json(200);
    }

    public function delster22(Request $request)
    {
        Klent::find($request->id)->delete($request->id);
        return response()->json(201);       
    }    

    public function rassem(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        if($request->sanafiltr2){
            $data = Rashod::whereBetween('data', [$request->sanafiltr, $request->sanafiltr2])->get();
        }else{
            $data = Rashod::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        }
        return response()->json($data);
    }

    public function rasdelform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qayer' => 'required',
            'sum' => 'required|numeric',
            'sabap' => 'required',
        ]);
        if($validator->passes()){
            return $this->rasdelform22($request);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function rasdelform22($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();  
        if($request->id){
            Rashod::find($request->id)->update([
                'qayer'=>$request->qayer,
                'sum'=>$request->sum,
                'sabap'=>$request->sabap,
                'data'=>$data1,
            ]);
        }else{      
            Rashod::create([
                'qayer'=>$request->qayer,
                'sum'=>$request->sum,
                'sabap'=>$request->sabap,
                'data'=>$data1,
            ]);
        }
        return response()->json(200);
    }

    public function radelfor(Request $request)
    {
        Rashod::find($request->id)->delete($request->id);
        return response()->json(201);       
    }

    public function pribl(Request $request)
    {
        if($request->san2){
            $data = Yigim::find(1);
            if($data){
                 $data->olish = 0;
                 $data->sotish = 0;
                 $data->qarz = 0;
                 $data->rasxod = 0;
                 $data->pribl = 0;
                 $data->update();
            }else{
                Yigim::create([
                    'olish' => 0,
                    'sotish' => 0,
                    'qarz' => 0,
                    'rasxod' => 0,
                    'pribl' => 0,
                ]);
            }
            return $this->pribl2aaa($request);
        }else{
            $data = Yigim::find(1);
            if($data){
                 $data->olish = 0;
                 $data->sotish = 0;
                 $data->qarz = 0;
                 $data->rasxod = 0;
                 $data->pribl = 0;
                 $data->update();
            }else{
                Yigim::create([
                    'olish' => 0,
                    'sotish' => 0,
                    'qarz' => 0,
                    'rasxod' => 0,
                    'pribl' => 0,
                ]);
            }
            return $this->pribl2();
        }
    }

    public function pribl2()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $a = Benzinperexodistoriya::whereYear('data', $year)->whereMonth('data', $month)->get();
        $b = Benzinrasxodistoriya::whereYear('data', $year)->whereMonth('data', $month)->get();
        $c = Klent::whereYear('data', $year)->whereMonth('data', $month)->get();
        $e = Rashod::whereYear('data', $year)->whereMonth('data', $month)->get();
        foreach ($a as $value) {
            $data = Yigim::find(1);
            $data->olish = $data->olish + $value->jami;
            $data->update();
        }
        foreach ($b as $value) {
            $data2 = Yigim::find(1);
            $data2->sotish = $data2->sotish + $value->jami;
            $data2->update();
        }
        foreach ($b as $value) {
            $data3 = Yigim::find(1);
            $data3->pribl = $data3->pribl + $value->litr * $value->sum;
            $data3->update();
        }
        foreach ($c as $value) {
            $data4 = Yigim::find(1);
            $data4->qarz = $data4->qarz + $value->qarz;
            $data4->update();
        }
        foreach ($e as $value) {
            $data5 = Yigim::find(1);
            $data5->rasxod = $data5->rasxod + $value->sum;
            $data5->update();
        }
        return $this->pribl3();
    }

    public function pribl3()
    {
        $data = Yigim::find(1);
        $j = $data->sotish = $data->sotish - $data->pribl;
        $data->pribl = $j - $data->qarz - $data->rasxod;
        $data->update();
        return response()->json($data);
    }

    public function pribl2aaa($request)
    {
        $a = Benzinperexodistoriya::whereBetween('data', [$request->san, $request->san2])->get();
        $b = Benzinrasxodistoriya::whereBetween('data', [$request->san, $request->san2])->get();
        $c = Klent::whereBetween('data', [$request->san, $request->san2])->get();
        $e = Rashod::whereBetween('data', [$request->san, $request->san2])->get();
        foreach ($a as $value) {
            $data = Yigim::find(1);
            $data->olish = $data->olish + $value->jami;
            $data->update();
        }
        foreach ($b as $value) {
            $data2 = Yigim::find(1);
            $data2->sotish = $data2->sotish + $value->jami;
            $data2->update();
        }
        foreach ($b as $value) {
            $data3 = Yigim::find(1);
            $data3->pribl = $data3->pribl + $value->litr * $value->sum;
            $data3->update();
        }
        foreach ($c as $value) {
            $data4 = Yigim::find(1);
            $data4->qarz = $data4->qarz + $value->qarz;
            $data4->update();
        }
        foreach ($e as $value) {
            $data5 = Yigim::find(1);
            $data5->rasxod = $data5->rasxod + $value->sum;
            $data5->update();
        }
        return $this->priblaaa();
    }

    public function priblaaa()
    {
        $data = Yigim::find(1);
        $j = $data->sotish = $data->sotish - $data->pribl;
        $data->pribl = $j - $data->qarz - $data->rasxod;
        $data->update();
        return response()->json($data);
    }

    public function kassaden(Request $request)
    {
        if($request->sana2){
            $data = Kassa::find(1);
            if($data){
                 $data->olish = 0;
                 $data->sotish = 0;
                 $data->uzqard = 0;
                 $data->humo = 0;
                 $data->qarz = 0;
                 $data->rasxod = 0;
                 $data->pribl = 0;
                 $data->update();
            }else{
                Kassa::create([
                    'olish' => 0,
                    'sotish' => 0,
                    'uzqard' => 0,
                    'humo' => 0,
                    'qarz' => 0,
                    'rasxod' => 0,
                    'pribl' => 0,
                ]);
            }
            return $this->kassaden2a($request);
        }else{
            $data = Kassa::find(1);
            if($data){
                 $data->olish = 0;
                 $data->sotish = 0;
                 $data->uzqard = 0;
                 $data->humo = 0;
                 $data->qarz = 0;
                 $data->rasxod = 0;
                 $data->pribl = 0;
                 $data->update();
            }else{
                Kassa::create([
                    'olish' => 0,
                    'sotish' => 0,
                    'uzqard' => 0,
                    'humo' => 0,
                    'qarz' => 0,
                    'rasxod' => 0,
                    'pribl' => 0,
                ]);
            }
            return $this->kassaden2();
        }
    }

    public function kassaden2()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $month = $dt->month;
        $day = $dt->day;
        $a = Benzinperexodistoriya::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        $b = Benzinrasxodistoriya::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        $c = Klent::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        $e = Rashod::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        $f = Summa::whereYear('data', $year)->whereMonth('data', $month)->whereDay('data', $day)->get();
        foreach ($a as $value) {
            $data = Kassa::find(1);
            $data->olish = $data->olish + $value->jami;
            $data->update();
        }
        foreach ($b as $value) {
            $data2 = Kassa::find(1);
            $data2->sotish = $data2->sotish + $value->jami;
            $data2->update();
        }
        foreach ($b as $value) {
            $data3 = Kassa::find(1);
            $data3->pribl = $data3->pribl + $value->litr * $value->sum;
            $data3->update();
        }
        foreach ($c as $value) {
            $data4 = Kassa::find(1);
            $data4->qarz = $data4->qarz + $value->qarz;
            $data4->update();
        }
        foreach ($e as $value) {
            $data5 = Kassa::find(1);
            $data5->rasxod = $data5->rasxod + $value->sum;
            $data5->update();
        }
        foreach ($f as $value) {
            $data6 = Kassa::find(1);
            $data6->uzqard = $data6->uzqard + $value->uzqardsumma;
            $data6->humo = $data6->humo + $value->humosumma;
            $data6->update();
        }
        return $this->kassaden3();
    }

    public function kassaden3()
    {
        $data7 = Kassa::find(1);
        $j = $data7->sotish = $data7->sotish - $data7->pribl;
        $jamiyigim = $j - $data7->qarz - $data7->rasxod;
        $data7->pribl = $jamiyigim - $data7->uzqard - $data7->humo;
        $data7->update();
        return response()->json($data7);
    }

    public function kassaden2a($request)
    {
        $a = Benzinperexodistoriya::whereBetween('data', [$request->sana1, $request->sana2])->get();
        $b = Benzinrasxodistoriya::whereBetween('data', [$request->sana1, $request->sana2])->get();
        $c = Klent::whereBetween('data', [$request->sana1, $request->sana2])->get();
        $e = Rashod::whereBetween('data', [$request->sana1, $request->sana2])->get();
        $f = Summa::whereBetween('data', [$request->sana1, $request->sana2])->get();
        foreach ($a as $value) {
            $data = Kassa::find(1);
            $data->olish = $data->olish + $value->jami;
            $data->update();
        }
        foreach ($b as $value) {
            $data2 = Kassa::find(1);
            $data2->sotish = $data2->sotish + $value->jami;
            $data2->update();
        }
        foreach ($b as $value) {
            $data3 = Kassa::find(1);
            $data3->pribl = $data3->pribl + $value->litr * $value->sum;
            $data3->update();
        }
        foreach ($c as $value) {
            $data4 = Kassa::find(1);
            $data4->qarz = $data4->qarz + $value->qarz;
            $data4->update();
        }
        foreach ($e as $value) {
            $data5 = Kassa::find(1);
            $data5->rasxod = $data5->rasxod + $value->sum;
            $data5->update();
        }
        foreach ($f as $value) {
            $data6 = Kassa::find(1);
            $data6->uzqard = $data6->uzqard + $value->uzqardsumma;
            $data6->humo = $data6->humo + $value->humosumma;
            $data6->update();
        }
        return $this->kassaden3a();
    }

    public function kassaden3a()
    {
        $data7 = Kassa::find(1);
        $j = $data7->sotish = $data7->sotish - $data7->pribl;
        $jamiyigim = $j - $data7->qarz - $data7->rasxod;
        $data7->pribl = $jamiyigim - $data7->uzqard - $data7->humo;
        $data7->update();
        return response()->json($data7);
    }

}
