<?php

namespace App\Http\Controllers;

use App\Models\Glavnitip;
use App\Models\Images;
use App\Models\Praduct;
use App\Models\Tavartur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function sotuv()
    {
        return view('filtr');
    }

    public function getdata()
    {
        $data = DB::table('tavarturs')->get();
        return response()->json($data);
    }
    public function getdgla()
    {
        $data = DB::table('glavnitips')->get();
        return response()->json($data);
    }
    public function getdtip(Request $request)
    {
        if($request->ajax()){
            $query = $request->get('query');
            if($query){
                $data = DB::table('tavarturs')->where('glavnitip_id', $query)->get();
            }else{
                $data = DB::table('tavarturs')->get();
            }
        }
      
        return response()->json($data);
    }
    
    public function getprod(Request $request)
    {
        if($request->sele){
            $data = DB::table('praducts')->where('glavnitip_id', $request->sele)
                            ->where('tipname', $request->serch)
                            ->orWhere('name', $request->serch)
                            ->get();
        }else{
            $data = DB::table('praducts')->where('tavartur_id', $request->id)->get();
        }
        return response()->json($data);
    }
    public function getprodgla(Request $request)
    {
        if($request->ajax()){
            $idthis = $request->get('idthis');
            $id = $request->get('id');
            $tipid = $request->get('tipid');
            $sum = $request->get('sum');
            $sum2 = $request->get('sum2');
            if($id){
                if($tipid){
                    if($sum){
                        if($sum2){
                            $data = DB::table('praducts')
                                    ->where('glavnitip_id', $id)
                                    ->where('tavartur_id', $tipid)
                                    ->where('prodaja', ">=", $sum)
                                    ->where('prodaja', "<=", $sum2)
                                    ->orderBy('prodaja', 'ASC')->get();
                        }else{
                            $data = DB::table('praducts')
                                    ->where('glavnitip_id', $id)
                                    ->where('tavartur_id', $tipid)
                                    ->where('prodaja', ">=", $sum)
                                    ->orderBy('prodaja', 'ASC')->get();
                        }
                    }elseif($sum2){
                        $data = DB::table('praducts')
                                ->where('glavnitip_id', $id)
                                ->where('tavartur_id', $tipid)
                                ->where('prodaja', "<=", $sum2)
                                ->orderBy('prodaja', 'ASC')->get();
                    }else{
                        $data = DB::table('praducts')
                                ->where('glavnitip_id', $id)
                                ->where('tavartur_id', $tipid)
                                ->orderBy('prodaja', 'ASC')->get();
                    }
                }else{
                    if($sum){
                        if($sum2){
                            $data = DB::table('praducts')
                                    ->where('glavnitip_id', $id)
                                    ->where('prodaja', ">=", $sum)
                                    ->where('prodaja', "<=", $sum2)
                                    ->orderBy('prodaja', 'ASC')->get();
                        }else{
                            $data = DB::table('praducts')
                                    ->where('glavnitip_id', $id)
                                    ->where('prodaja', ">=", $sum)
                                    ->orderBy('prodaja', 'ASC')->get();
                        }
                    }elseif($sum2){
                        $data = DB::table('praducts')
                                ->where('glavnitip_id', $id)
                                ->where('prodaja', "<=", $sum2)
                                ->orderBy('prodaja', 'ASC')->get();
                        
                    }else{
                        $data = DB::table('praducts')->where('glavnitip_id', $id)->orderBy('prodaja', 'ASC')->get();
                    }
                }
            }elseif($tipid){
                if($sum){
                    if($sum2){
                        $data = DB::table('praducts')
                                ->where('tavartur_id', $tipid)
                                ->where('prodaja', ">=", $sum)
                                ->where('prodaja', "<=", $sum2)
                                ->orderBy('prodaja', 'ASC')->get();
                    }else{
                        $data = DB::table('praducts')
                                ->where('tavartur_id', $tipid)
                                ->where('prodaja', ">=", $sum)
                                ->orderBy('prodaja', 'ASC')->get();
                    }
                }elseif($sum2){
                    if($sum){
                        $data = DB::table('praducts')
                                ->where('tavartur_id', $tipid)
                                ->where('prodaja', ">=", $sum)
                                ->where('prodaja', "<=", $sum2)
                                ->orderBy('prodaja', 'ASC')->get();
                    }else{
                        $data = DB::table('praducts')
                                ->where('tavartur_id', $tipid)
                                ->where('prodaja', "<=", $sum2)
                                ->orderBy('prodaja', 'ASC')->get();
                    }
                }else{
                    $data = DB::table('praducts')
                            ->where('tavartur_id', $tipid)
                            ->orderBy('prodaja', 'ASC')->get();
                }
            }elseif($sum){
                if($sum2){
                    $data = DB::table('praducts')
                            ->where('prodaja', ">=", $sum)
                            ->where('prodaja', "<=", $sum2)
                            ->orderBy('prodaja', 'ASC')->get();
                }else{
                    $data = DB::table('praducts')
                            ->where('prodaja', ">=", $sum)
                            ->orderBy('prodaja', 'ASC')->get();
                }
            }elseif($sum2){
                if($sum){
                    $data = DB::table('praducts')
                            ->where('prodaja', ">=", $sum)
                            ->where('prodaja', "<=", $sum2)
                            ->orderBy('prodaja', 'ASC')->get();
                }else{
                    $data = DB::table('praducts')
                            ->where('prodaja', "<=", $sum2)
                            ->orderBy('prodaja', 'ASC')->get();
                }
            }else{
                $data = DB::table('praducts')->where('tavartur_id', $idthis)->orderBy('prodaja', 'ASC')->get();
            }
        }
        return response()->json($data);
    }
    
    public function link()
    {
        $data = Glavnitip::all();
        $output = '';

       $output = '<li>
        <a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
          </svg>
         </a>
       </li>';
        foreach ($data as $value) {
            $foo = '';
            $data2 = Tavartur::where('glavnitip_id', $value->id)->get();
            foreach ($data2 as $row) {
                $foo .=' <li class="widz"><a href="javascript:void(0)" onclick="hrref('.$row->id.')">'.$row->name.'</a></li>';
            }
            $output .= '
            <li><a href="#">'.$value->name.'</a>
            <div class="sub-menu-1">
                <ul id="link">
                '.$foo.'            
                </ul>
            </div>
            </li>      
            ';
        }
        return response()->json($output);
    }

    public function toggler()
    {
        $data = Glavnitip::all();
        $output = '';
        $output = '<li>
        <svg xmlns="http://www.w3.org/2000/svg" class="x" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
        </svg>
      </li>';
       foreach ($data as $value) {
        $foo = '';
        $data2 = Tavartur::where('glavnitip_id', $value->id)->get();
        foreach ($data2 as $row) {
            $foo .=' <li class="widz"><a href="javascript:void(0)" onclick="hrref('.$row->id.')">'.$row->name.'</a></li>';
        }
        $output .= '
        <li class="bl"><a href="#">'.$value->name.'</a>
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            <div class="sub-menu">
            <ul id="link">
            '.$foo.'
            </ul>       
        </div>
        </span>
        </li>      
        ';
        }
        return response()->json($output);
    }

    public function sele()
    {
        $data = Glavnitip::all();
        return response()->json($data);
    }

    public function izobr()
    {
        $img = Images::find(1);
        $data = Images::all();
        return response()->json(['img'=>$img, 'data'=>$data]);
    }
}
