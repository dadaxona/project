<?php

namespace App\Http\Controllers;

use App\Models\Tavar;
use App\Models\User;
use App\Providers\KlentServis;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\Adress;
use App\Models\Arxiv;
use App\Models\Arxivdok;
use App\Models\Clentitog;
use App\Models\Clentitogdok;
use App\Models\Data;
use App\Models\Datadok;
use App\Models\Drektor;
use App\Models\Ichkitavar;
use App\Models\Ichkitavardok;
use App\Models\Itogo;
use App\Models\Itogodok;
use App\Models\Javob;
use App\Models\Karzina;
use App\Models\Karzina2;
use App\Models\Karzina2dok;
use App\Models\Karzina3;
use App\Models\Karzina3dok;
use App\Models\Karzinadok;
use App\Models\Pribl;
use App\Models\Sqladpoytaxt;
use App\Models\Statistika;
use App\Models\Tavar2;
use App\Models\Tayyorsqlad;
use App\Models\Umumiy;
use App\Models\Updatetavr;
use App\Models\Userdok;
use App\Models\Zakaz;
use App\Models\Zakaz2;
use App\Models\Zakaz2dok;
use App\Models\Zakazdok;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class KlentController2 extends Controller
{
    public function tavar_tip(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = DB::table('tavars')->where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = DB::table('tavars')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="data" style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
            'total_data'  => $total_row
        );

        return response()->json($data);
        }
    }

    public function tavar_tipdok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Ichkitavardok::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Ichkitavardok::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="datadok" style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
        );

        return response()->json($data);
        }
    }

    public function limither(Request $request)
    {
        $idsss = Statistika::find(1);
        if ($idsss) {
            Statistika::find(1)->update([
                'limit'=>$request->limit
            ]);
        }else{
            Statistika::create([
                'limit'=>$request->limit
            ]);
        }
        return response()->json(200);
    }
    
    public function statistika()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('statistika',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function pribl()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('pribl',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function getel(Request $request)
    {
        if($request->data2){
            return  $this->getel1($request);
        }else{
            return  $this->getel2($request);
        }
    }
    public function getel1($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $ichki = Ichkitavar::all();
            $data = Karzina2::whereBetween("created_at", [$request->data, $request->data2])->get();
            $datad = Karzina3::whereBetween("created_at", [$request->data, $request->data2])->get();
            $data222 = Arxiv::whereBetween("created_at", [$request->data, $request->data2])->get();
            $foo = Pribl::find(1);
            if($foo){
                $foo->jami = 0;
                $foo->karz = 0;
                $foo->pribl = 0;
                $foo->vse = 0;
                $foo->save();
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($data as $value) {
                    $ich = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($datad as $value) {
                    $ich2 = Ichkitavar::find($value->ichkitavar_id);
                    $fooa2 = Pribl::find(1);
                    $fooa2->pribl = $fooa2->pribl + $ich2->summa * $value->soni;
                    $fooa2->jami = $fooa2->jami + $value->itog;
                    $fooa2->update();
                }
                foreach ($data222 as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid; color: #006200">
                        <td>'.$row->clentra.'</td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                    </tr>
                    ';
                }
                foreach($datad as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid; color: #b90404">
                        <td>Бирламчи мижоз</td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                    </tr>
                    ';
                }
            }else{
                Pribl::create([
                    'jami'=>0,
                    'karz'=>0,
                    'pribl'=>0,
                    'vse'=>0,
                ]);
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($data as $value) {
                    $ich3 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich3->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($datad as $value) {
                    $ich4 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich4->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($data222 as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid; color: #006200">
                        <td>'.$row->clentra.'</td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                    </tr>
                    ';
                }
                foreach($datad as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid; color: #b90404">
                        <td>Бирламчи мижоз</td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                    </tr>
                    ';
                }
            }
            $foo4 = Pribl::find(1);
            $foo4->pribl = $foo4->jami - $foo4->pribl;
            $foo4->update();
            return response()->json([
                'data'=>$foo4??[],
                'output'=>$output,
                'output2'=>$output2,
            ]);
        }
    }
    public function getel2($request)
    {
        if($request->ajax())
        {
            $ichki = Ichkitavar::all();
            $kar2 = Karzina2::get();
            $kar3 = Karzina3::get();
            $arx = Arxiv::get();
            $foo = Pribl::find(1);
            if($foo){
                $foo->jami = 0;
                $foo->karz = 0;
                $foo->pribl = 0;
                $foo->vse = 0;
                $foo->save();
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
            }else{
                Pribl::create([
                    'jami'=>0,
                    'karz'=>0,
                    'pribl'=>0,
                    'vse'=>0,
                ]);
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
            }
            $foo4 = Pribl::find(1);
            $foo4->pribl = $foo4->jami - $foo4->pribl;
            $foo4->update();
            return response()->json([
                'data'=>$foo4??[],
            ]);
        }
    }

    public function statistik(Request $request)
    {
        if($request->ajax())
        {
            $data = Karzina2::all();     
            $data222 = Arxiv::all();
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();         
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $fo = Clentitog::find(1);
            $ja = $fo->opshi - $fo->foiz;
            $fo = Clentitog::find(1)->update([
                'itog' => $ja
            ]);
            $foo2 = Clentitog::find(1);
            return response()->json([
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function statistik2(Request $request)
    {
        if($request->ajax())
        {
            $data = Karzina2::whereBetween("created_at", [$request->date, $request->date2])->get();
            $data222 = Arxiv::whereBetween("created_at", [$request->date, $request->date2])->get();
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();         
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $fo = Clentitog::find(1);
            $ja = $fo->opshi - $fo->foiz;
            $fo = Clentitog::find(1)->update([
                'itog' => $ja
            ]);
            $foo2 = Clentitog::find(1);
            return response()->json([
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function zzzz(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = DB::table('zakazs')->where('malumot', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = DB::table('zakazs')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="data2" style="border-bottom: 1px solid;">
                    <td>'.$row->malumot.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }
    public function zzzzdok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Zakazdok::where('malumot', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Zakazdok::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="data2dog" style="border-bottom: 1px solid;">
                    <td>'.$row->malumot.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }
    
    public function zzzzcli(Request $request)
    {
        if($request->ajax())
        {
        $output='';
        $data = Zakaz2::where('zakaz_id', $request->id)->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->zakaz->malumot.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="6">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }
        
    public function zzzzclidok(Request $request)
    {
        if($request->ajax())
        {
        $output='';
        $data = Zakaz2dok::where('zakazdok_id', $request->id)->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->zakazdok->malumot.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="6">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }
        
    public function zzzzaaaadok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Userdok::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Userdok::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="data22dok" style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }

    public function zzzzaaaa(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = DB::table('users')->where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = DB::table('users')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="data22" style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }

    public function zzzzclick(Request $request)
    {
        if($request->ajax())
        {
        $output='';
        $da = User::find($request->id);
        $data = Karzina2::where('user_id', $da->id)->where('zakaz', 1)->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->user->name.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="6">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }

    public function zzzzclickdok(Request $request)
    {
        if($request->ajax())
        {
        $output='';
        $da = Userdok::find($request->id);
        $data = Karzina2dok::where('userdok_id', $da->id)->where('zakaz', 1)->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->userdok->name.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="6">No Data Found</td>
            </tr>
            ';
        }
        return response()->json($output);
        }
    }

    public function submitckicked(Request $request)
    {
        if($request->doimiy == 1){
            return $this->doimiyclent($request);
        }else{
            return $this->birlamchiclent($request);
        }
    }

    public function submitckickeddok(Request $request)
    {
        if($request->doimiy == 1){
            return $this->doimiyclentdok($request);
        }else{
            return $this->birlamchiclentdok($request);
        }
    }
    
    public function doimiyclent($request)
    {
        $foo = Karzina2::where('user_id', $request->id)->where('zakaz', 1)->get();
        foreach ($foo as $value) {
            Karzina::create([
                'tavar_id' => $value->tavar_id,
                'ichkitavar_id' => $value->ichkitavar_id,
                'name' => $value->name,
                'raqam' => $value->raqam,
                'soni' => $value->soni,
                'hajm' => $value->hajm,
                'summa' => $value->summa,
                'summa2' => $value->summa2,
                'chegirma' =>$value->chegirma,
                'itog' => $value->itog,
            ]);
            $ito = Itogo::find(1);
            if($ito){
                $j = $ito->itogo + $value->itog;
                Itogo::find(1)->update([
                    'itogo'=>$j,
                    'usd'=>1
                ]);
                $ito2 = Itogo::find(1);
            }
        }
        Karzina2::where('user_id', $request->id)->where('zakaz', 1)->delete();
        return response()->json(['msg'=>'Отказилди', 'data'=>$ito2]);
    }

    public function doimiyclentdok($request)
    {
        $foo = Karzina2dok::where('userdok_id', $request->id)->where('zakaz', 1)->get();
        foreach ($foo as $value) {
            Karzinadok::create([
                'ichkitavardok_id' => $value->ichkitavardok_id,
                'name' => $value->name,
                'raqam' => $value->raqam,
                'soni' => $value->soni,
                'hajm' => $value->hajm,
                'summa' => $value->summa,
                'summa2' => $value->summa2,
                'chegirma' =>$value->chegirma,
                'itog' => $value->itog,
            ]);
            $ito = Itogodok::find(1);
            if($ito){
                $j = $ito->itogo + $value->itog;
                Itogodok::find(1)->update([
                    'itogo'=>$j,
                    'usd'=>1
                ]);
                $ito2 = Itogodok::find(1);
            }
        }
        Karzina2dok::where('userdok_id', $request->id)->where('zakaz', 1)->delete();
        return response()->json(['msg'=>'Отказилди', 'data'=>$ito2]);
    }

    public function birlamchiclentdok($request)
    {
        $foo = Zakaz2dok::where('zakazdok_id', $request->id)->get();
        foreach ($foo as $value) {
            Karzinadok::create([
                'ichkitavardok_id' => $value->ichkitavardok_id,
                'name' => $value->name,
                'raqam' => $value->raqam,
                'soni' => $value->soni,
                'hajm' => $value->hajm,
                'summa' => $value->summa,
                'summa2' => $value->summa2,
                'chegirma' =>$value->chegirma,
                'itog' => $value->itog,
            ]);
            $ito = Itogodok::find(1);
            if($ito){
                $j = $ito->itogo + $value->itog;
                Itogodok::find(1)->update([
                    'itogo'=>$j,
                    'usd'=>1
                ]);
                $ito2 = Itogodok::find(1);
            }
        }
        Zakaz2dok::where('zakazdok_id', $request->id)->delete();
        Zakazdok::find($request->id)->delete($request->id);
        return response()->json(['msg'=>'Отказилди', 'data'=>$ito2]);
    }

    public function birlamchiclent($request)
    {
        $foo = Zakaz2::where('zakaz_id', $request->id)->get();
        foreach ($foo as $value) {
            Karzina::create([
                'tavar_id' => $value->tavar_id,
                'ichkitavar_id' => $value->ichkitavar_id,
                'name' => $value->name,
                'raqam' => $value->raqam,
                'soni' => $value->soni,
                'hajm' => $value->hajm,
                'summa' => $value->summa,
                'summa2' => $value->summa2,
                'chegirma' =>$value->chegirma,
                'itog' => $value->itog,
            ]);
            $ito = Itogo::find(1);
            if($ito){
                $j = $ito->itogo + $value->itog;
                Itogo::find(1)->update([
                    'itogo'=>$j,
                    'usd'=>1
                ]);
                $ito2 = Itogo::find(1);
            }
        }
        Zakaz2::where('zakaz_id', $request->id)->delete();
        Zakaz::find($request->id)->delete($request->id);
        return response()->json(['msg'=>'Отказилди', 'data'=>$ito2]);
    }

    public function clent_tipdok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Userdok::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Userdok::get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr data-id="'.$row->id.'" id="datadok" style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
        );
        return response()->json($data);
        }
    }

    public function clent_tip(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = DB::table('users')->where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = DB::table('users')->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $rrrr = Javob::where('user_id', $row->id)->first();
                $p = '';
                if($rrrr->javob >= 0){
                    $p = "<span style='color: red'>$rrrr->javob </span>";
                }elseif($rrrr->javob < 0){
                    $p = "<span style='color: green'>$rrrr->javob</span>";
                }
                $output .= '
                <tr data-id="'.$row->id.'" id="data" style="border-bottom: 1px solid;">
                    <td>'.$row->name.' | '.$p.' </td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
        );
        return response()->json($data);
        }
    }

    public function savdobirlamchidok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Karzina3dok::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Karzina3dok::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                    <td>'.$row->raqam.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
        }
        else
        {
        $output = '
            <tr>
                <td align="center" colspan="7">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output,
        );
        return response()->json($data);
        }
    }
    
    public function savdobirlamchi(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $data = Karzina3::all();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                <td><input type="checkbox" class="form-check-input ml-3" id="locold" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvaz">
                            Вазврат
                        </button>
                    </td>
                </tr>
                ';
            }
                $foo = Clentitog::find(1);
                if($foo){
                    $foo->tavarshtuk = 0;
                    $foo->shtuk = 0;
                    $foo->foiz = 0;
                    $foo->itog = 0;
                    $foo->opshi = 0;
                    $foo->save();
                    foreach ($data as $value) {            
                        $fool = Clentitog::find(1);
                        $shtuk = $fool->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a,
                        ]);
                    }
                }else{
                    Clentitog::create([
                        'tavarshtuk'=>0,
                        'shtuk'=>0,
                        'foiz'=>0,
                        'itog'=>0,
                        'opshi'=>0
                    ]);
                    foreach ($data as $value) {
                        $foo = Clentitog::find(1);        
                        $shtuk2 = $foo->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk2,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool3 = Clentitog::find(1);
                        $a1 = $fool3->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a1,
                        ]);
                    }
                }
                $foo2 = Clentitog::find(1);
                return response()->json([
                    'output'=>$output,
                    'foo2'=>$foo2??[],
                ]);
            }
        }
    }

    
    public function vseclent(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina2::orderBy('id', 'DESC')->get();
            $data222 = Arxiv::orderBy('id', 'DESC')->get();     
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
   <tr style="border-bottom: 1px solid;">
                        <td>
                        <button data-id="'.$row->id.'" id="vazvrat">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>"Все Клент",
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function vseclentdok(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina2dok::all();     
            $data222 = Arxivdok::all();     
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->ichkitavardok->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>"Все Клент",
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function clents2dok(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = Userdok::find($request->id);   
            $data = Karzina2dok::where('userdok_id', $da->id)->get();     
            $data222 = Arxivdok::where('userdok_id', $da->id)->get();     
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->ichkitavardok->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function otmetka(Request $request)
    {
        $data = Karzina2::find($request->id);
        if($data->status == 1){
            $data->status = 0;
            $data->update();
            return response()->json(0);

        }else{
            $data->status = 1;
            $data->update();
            return response()->json(1);
        }
    }

    public function chd()
    {
        $data = Karzina2::where('status', 1)->get();
        return response()->json($data);
    }
    
    public function otmetka2(Request $request)
    {
        $data = Karzina3::find($request->id);
        if($data->status == 1){
            $data->status = 0;
            $data->update();
            return response()->json(0);

        }else{
            $data->status = 1;
            $data->update();
            return response()->json(1);
        }
    }

    public function chd2()
    {
        Karzina2::where('status', 1)->update([
            'status' => 0
        ]);
    }


    public function chb()
    {
        $data = Karzina3::where('status', 1)->get();
        return response()->json($data);
    }

    public function chb2()
    {
        Karzina3::where('status', 1)->update([
            'status' => 0
        ]);
    }

    public function clents2(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = User::find($request->id);   
            $data = Karzina2::where('user_id', $da->id)->orderBy('id', 'DESC')->get();     
            $data222 = Arxiv::where('user_id', $da->id)->orderBy('id', 'DESC')->get();     
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
   <tr style="border-bottom: 1px solid;">
                        <td>
                        <button data-id="'.$row->id.'" id="vazvrat">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents2aniq(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = ''; 
            $data222 = Arxiv::find($request->id);
            $da = User::find($data222->user_id);
            $data = Karzina2::where('created_at', $data222->created_at)->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
   <tr style="border-bottom: 1px solid;">
                        <td>
                        <button data-id="'.$row->id.'" id="vazvrat">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }      
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                $fool2 = Clentitog::find(1);
                $a = $fool2->foiz + $data222->karzs;
                Clentitog::find(1)->update([
                    'foiz'=>$a,
                ]);
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                $fool2 = Clentitog::find(1);
                $a = $fool2->foiz + $data222->karzs;
                Clentitog::find(1)->update([
                    'foiz'=>$a,
                ]);
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents3(Request $request)
    {
        if($request->tavar_id){
            return $this->clents4($request);
        }elseif($request->tavar_id && $request->date){
            return $this->clents5($request);
        }elseif($request->tavar_id && $request->date && $request->date2){
            return $this->clents5($request);
        }elseif($request->date){
            return $this->clents6($request);
        }elseif($request->date && $request->date2){
            return $this->clents6($request);
        }else{
            // return $this->clents2($request);
        }
    }
    public function clents3dok(Request $request)
    {
        if($request->tavar_id){
            return $this->clents4dok($request);
        }elseif($request->tavar_id && $request->date){
            return $this->clents5dok($request);
        }elseif($request->tavar_id && $request->date && $request->date2){
            return $this->clents5dok($request);
        }elseif($request->date){
            return $this->clents6dok($request);
        }elseif($request->date && $request->date2){
            return $this->clents6dok($request);
        }else{
            // return $this->clents2($request);
        }
    }
    
    public function brlamclient(Request $request)
    {
        if($request->tavar_id){
            return $this->clents04($request);
        }elseif($request->tavar_id && $request->date){
            return $this->clents05($request);
        }elseif($request->tavar_id && $request->date && $request->date2){
            return $this->clents05($request);
        }elseif($request->date){
            return $this->clents06($request);
        }elseif($request->date && $request->date2){
            return $this->clents06($request);
        }else{
            // return $this->savdobirlamchi($request);
        }
    }
    public function brlamclientdok(Request $request)
    {
        if($request->tavar_id){
            return $this->clents04dok($request);
        }elseif($request->tavar_id && $request->date){
            return $this->clents05dok($request);
        }elseif($request->tavar_id && $request->date && $request->date2){
            return $this->clents05dok($request);
        }elseif($request->date){
            return $this->clents06dok($request);
        }elseif($request->date && $request->date2){
            return $this->clents06dok($request);
        }else{
            // return $this->savdobirlamchi($request);
        }
    }
    
    public function clents4dok($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = Userdok::find($request->id);   
            $data = Karzina2dok::where('userdok_id', $da->id)
                            ->where('ichkitavardok_id', $request->tavar_id)
                            ->get();
            $data222 = Arxivdok::where('userdok_id', $da->id)->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->ichkitavardok->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents4($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = User::find($request->id);   
            $data = Karzina2::where('tavar_id', $request->tavar_id)->orderBy('id', 'DESC')->get();
            $data222 = Arxiv::where('user_id', $da->id ?? [])->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
   <tr style="border-bottom: 1px solid;">
                        <td>
                        <button data-id="'.$row->id.'" id="vazvrat">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function clents5($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = User::find($request->id);   
            $data = Karzina2::where('tavar_id', $request->tavar_id)
                            ->whereBetween('updated_at', [$request->date, $request->date2])
                            ->orderBy('id', 'DESC')->get();
            $data222 = Arxiv::where('user_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
   <tr style="border-bottom: 1px solid;">
                        <td>
                        <button data-id="'.$row->id.'" id="vazvrat">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitog::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function clents5dok($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = Userdok::find($request->id);   
            $data = Karzina2dok::where('userdok_id', $da->id)
                            ->where('ichkitavardok_id', $request->tavar_id)
                            ->whereBetween('updated_at', [$request->date, $request->date2])
                            ->get(); 
            $data222 = Arxivdok::where('userdok_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->ichkitavardok->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data222 as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->foiz + $value->karzs;
                    Clentitogdok::find(1)->update([
                        'foiz'=>$a,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'clent'=>$da,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents6dok($request)
    {
        if($request->id){
            if($request->ajax())
            {
                $output = '';
                $output2 = '';
                $da = Userdok::find($request->id);   
                $data = Karzina2dok::where('userdok_id', $da->id)
                                ->whereBetween('updated_at', [$request->date, $request->date2])
                                ->get();
                $data222 = Arxivdok::where('userdok_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->userdok->name.'</td>
                            <td>'.$row->ichkitavardok->name.'</td>
                            <td>'.$row->raqam.'</td>
                            <td>'.$row->soni.'</td>
                            <td>'.$row->summa2.'</td>
                            <td>'.$row->chegirma.'</td>
                            <td>'.$row->itog.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->userdok->name.'</td>
                            <td>'.$row->itogs.'</td>
                            <td>'.$row->naqt.'</td>
                            <td>'.$row->plastik.'</td>
                            <td>'.$row->bank.'</td>
                            <td>'.$row->karzs.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                }
                $foo = Clentitogdok::find(1);
                if($foo){
                    $foo->tavarshtuk = 0;
                    $foo->shtuk = 0;
                    $foo->foiz = 0;
                    $foo->itog = 0;
                    $foo->opshi = 0;
                    $foo->save();
                    foreach ($data as $value) {            
                        $fool = Clentitogdok::find(1);
                        $shtuk = $fool->shtuk + $value->soni;
                        Clentitogdok::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitogdok::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->opshi + $value->itog;
                        Clentitogdok::find(1)->update([
                            'opshi'=>$a,
                        ]);
                    }
                }else{
                    Clentitogdok::create([
                        'tavarshtuk'=>0,
                        'shtuk'=>0,
                        'foiz'=>0,
                        'itog'=>0,
                        'opshi'=>0
                    ]);
                    foreach ($data as $value) {
                        $foo = Clentitogdok::find(1);        
                        $shtuk2 = $foo->shtuk + $value->soni;
                        Clentitogdok::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk2,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitogdok::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool3 = Clentitogdok::find(1);
                        $a1 = $fool3->opshi + $value->itog;
                        Clentitogdok::find(1)->update([
                            'opshi'=>$a1,
                        ]);
                    }
                }
                $foo2 = Clentitogdok::find(1);
                return response()->json([
                    'output'=>$output,
                    'output2'=>$output2,
                    'clent'=>$da,
                    'foo2'=>$foo2??[],
                ]);
            }
        }else{
            if($request->ajax())
            {
                $output = '';
                $output2 = '';
                $da = Userdok::find($request->id);   
                $data = Karzina2dok::whereBetween('updated_at', [$request->date, $request->date2])->get();
                $data222 = Arxivdok::whereBetween('updated_at', [$request->date, $request->date2])->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->userdok->name.'</td>
                            <td>'.$row->ichkitavardok->name.'</td>
                            <td>'.$row->raqam.'</td>
                            <td>'.$row->soni.'</td>
                            <td>'.$row->summa2.'</td>
                            <td>'.$row->chegirma.'</td>
                            <td>'.$row->itog.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->userdok->name.'</td>
                            <td>'.$row->itogs.'</td>
                            <td>'.$row->naqt.'</td>
                            <td>'.$row->plastik.'</td>
                            <td>'.$row->bank.'</td>
                            <td>'.$row->karzs.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                }
                $foo = Clentitogdok::find(1);
                if($foo){
                    $foo->tavarshtuk = 0;
                    $foo->shtuk = 0;
                    $foo->foiz = 0;
                    $foo->itog = 0;
                    $foo->opshi = 0;
                    $foo->save();
                    foreach ($data as $value) {            
                        $fool = Clentitogdok::find(1);
                        $shtuk = $fool->shtuk + $value->soni;
                        Clentitogdok::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitogdok::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->opshi + $value->itog;
                        Clentitogdok::find(1)->update([
                            'opshi'=>$a,
                        ]);
                    }
                }else{
                    Clentitogdok::create([
                        'tavarshtuk'=>0,
                        'shtuk'=>0,
                        'foiz'=>0,
                        'itog'=>0,
                        'opshi'=>0
                    ]);
                    foreach ($data as $value) {
                        $foo = Clentitogdok::find(1);        
                        $shtuk2 = $foo->shtuk + $value->soni;
                        Clentitogdok::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk2,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitogdok::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitogdok::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool3 = Clentitogdok::find(1);
                        $a1 = $fool3->opshi + $value->itog;
                        Clentitogdok::find(1)->update([
                            'opshi'=>$a1,
                        ]);
                    }
                }
                $foo2 = Clentitogdok::find(1);
                return response()->json([
                    'output'=>$output,
                    'output2'=>$output2,
                    'clent'=>"Все клент",
                    'foo2'=>$foo2??[],
                ]);
            }
        }
    }

    public function clents6($request)
    {
        if($request->id){
            if($request->ajax())
            {
                $output = '';
                $output2 = '';
                $da = User::find($request->id);   
                $data = Karzina2::where('user_id', $da->id)
                                ->whereBetween('updated_at', [$request->date, $request->date2])
                                ->orderBy('id', 'DESC')->get();
                $data222 = Arxiv::where('user_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->name.'</td>
                            <td>'.$row->soni.'</td>
                            <td>'.$row->summa2.'</td>
                            <td>'.$row->itog.'</td>
                            <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>
                        </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                        <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                            <td>'.$row->user->name.'</td>
                            <td>'.$row->itogs.'</td>
                            <td>'.$row->naqt.'</td>
                            <td>'.$row->plastik.'</td>
                            <td>'.$row->bank.'</td>
                            <td>'.$row->karzs.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                }
                $foo = Clentitog::find(1);
                if($foo){
                    $foo->tavarshtuk = 0;
                    $foo->shtuk = 0;
                    $foo->foiz = 0;
                    $foo->itog = 0;
                    $foo->opshi = 0;
                    $foo->save();
                    foreach ($data as $value) {            
                        $fool = Clentitog::find(1);
                        $shtuk = $fool->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitog::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a,
                        ]);
                    }
                }else{
                    Clentitog::create([
                        'tavarshtuk'=>0,
                        'shtuk'=>0,
                        'foiz'=>0,
                        'itog'=>0,
                        'opshi'=>0
                    ]);
                    foreach ($data as $value) {
                        $foo = Clentitog::find(1);        
                        $shtuk2 = $foo->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk2,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitog::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool3 = Clentitog::find(1);
                        $a1 = $fool3->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a1,
                        ]);
                    }
                }
                $foo2 = Clentitog::find(1);
                return response()->json([
                    'output'=>$output,
                    'output2'=>$output2,
                    'clent'=>$da,
                    'foo2'=>$foo2??[],
                ]);
            }
        }else{
            if($request->ajax())
            {
                $output = '';
                $output2 = '';
                $da = User::find($request->id);   
                $data = Karzina2::whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
                $data222 = Arxiv::whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->name.'</td>
                            <td>'.$row->soni.'</td>
                            <td>'.$row->summa2.'</td>
                            <td>'.$row->itog.'</td>
                            <td><input type="checkbox" class="form-check-input ml-3" id="locol" data-id="'.$row->id.'"></td>
                        </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                        <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cret">
                            <td>'.$row->user->name.'</td>
                            <td>'.$row->itogs.'</td>
                            <td>'.$row->naqt.'</td>
                            <td>'.$row->plastik.'</td>
                            <td>'.$row->bank.'</td>
                            <td>'.$row->karzs.'</td>
                            <td>'.$row->updated_at.'</td>
                        </tr>
                        ';
                    }
                }
                $foo = Clentitog::find(1);
                if($foo){
                    $foo->tavarshtuk = 0;
                    $foo->shtuk = 0;
                    $foo->foiz = 0;
                    $foo->itog = 0;
                    $foo->opshi = 0;
                    $foo->save();
                    foreach ($data as $value) {            
                        $fool = Clentitog::find(1);
                        $shtuk = $fool->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitog::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a,
                        ]);
                    }
                }else{
                    Clentitog::create([
                        'tavarshtuk'=>0,
                        'shtuk'=>0,
                        'foiz'=>0,
                        'itog'=>0,
                        'opshi'=>0
                    ]);
                    foreach ($data as $value) {
                        $foo = Clentitog::find(1);        
                        $shtuk2 = $foo->shtuk + $value->soni;
                        Clentitog::find(1)->update([
                            'tavarshtuk'=>$total_row,
                            'shtuk'=>$shtuk2,
                        ]);
                    }
                    foreach ($data222 as $value) {
                        $fool2 = Clentitog::find(1);
                        $a = $fool2->foiz + $value->karzs;
                        Clentitog::find(1)->update([
                            'foiz'=>$a,
                        ]);
                    }
                    foreach ($data as $value) {
                        $fool3 = Clentitog::find(1);
                        $a1 = $fool3->opshi + $value->itog;
                        Clentitog::find(1)->update([
                            'opshi'=>$a1,
                        ]);
                    }
                }
                $foo2 = Clentitog::find(1);
                return response()->json([
                    'output'=>$output,
                    'output2'=>$output2,
                    'clent'=>"Все клент",
                    'foo2'=>$foo2??[],
                ]);
            }
        }
    }

    public function clents04dok($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';  
            $data = Karzina3dok::where('ichkitavardok_id', $request->tavar_id)->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents04($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';  
            $data = Karzina3::where('tavar_id', $request->tavar_id)->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                <td><input type="checkbox" class="form-check-input ml-3" id="locold" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvaz">
                            Вазврат
                        </button>
                    </td>
                </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents05($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina3::where('tavar_id', $request->tavar_id)->whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                <td><input type="checkbox" class="form-check-input ml-3" id="locold" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvaz">
                            Вазврат
                        </button>
                    </td>
                </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }
    public function clents05dok($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina3dok::where('ichkitavardok_id', $request->tavar_id)->whereBetween('updated_at', [$request->date, $request->date2])->get(); 
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents06($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina3::whereBetween('updated_at', [$request->date, $request->date2])->orderBy('id', 'DESC')->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                <td><input type="checkbox" class="form-check-input ml-3" id="locold" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvaz">
                            Вазврат
                        </button>
                    </td>
                </tr>
                    ';
                }
            }
            $foo = Clentitog::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitog::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitog::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitog::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitog::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitog::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitog::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitog::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitog::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }

    public function clents06dok($request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina3dok::whereBetween('updated_at', [$request->date, $request->date2])->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                        <td>'.$row->name.'</td>
                        <td>'.$row->raqam.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->chegirma.'</td>
                        <td>'.$row->itog.'</td>
                        <td>'.$row->updated_at.'</td>
                    </tr>
                    ';
                }
            }
            $foo = Clentitogdok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->itog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Clentitogdok::find(1);
                    $shtuk = $fool->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Clentitogdok::find(1);
                    $a = $fool2->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Clentitogdok::create([
                    'tavarshtuk'=>0,
                    'shtuk'=>0,
                    'foiz'=>0,
                    'itog'=>0,
                    'opshi'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Clentitogdok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->soni;
                    Clentitogdok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Clentitogdok::find(1);
                    $a1 = $fool3->opshi + $value->itog;
                    Clentitogdok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Clentitogdok::find(1);
            return response()->json([
                'output'=>$output,
                'output2'=>$output2,
                'foo2'=>$foo2??[],
            ]);
        }
    }
    
    public function tavarvse(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $data = Ichkitavar::all();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->tavar->name.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Data::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Data::find(1);
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Data::find(1);
                    $a = $fool2->opshi + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Data::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Data::find(1);        
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Data::find(1);
                    $a1 = $fool3->opshi + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Data::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }

    public function tavarvsedok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $data = Ichkitavardok::all();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">                
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Datadok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Datadok::find(1);
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Datadok::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Datadok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Datadok::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }

    public function tavardok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('id');
        $data = Ichkitavardok::where('id', $query)->get();
        $get = Ichkitavardok::all();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Datadok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Datadok::find(1);        
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($get as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Datadok::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Datadok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($get as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Datadok::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }

    public function tavar(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('id');
        $data = Ichkitavar::where('tavar_id', $query)->get();
        $get = Ichkitavar::all();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->tavar->name.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Data::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Data::find(1);        
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($get as $value) {
                    $fool2 = Data::find(1);
                    $a = $fool2->opshi + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Data::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Data::find(1);
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($get as $value) {
                    $fool3 = Data::find(1);
                    $a1 = $fool3->opshi + $value->summa * $value->hajm;
                    Data::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Data::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }
    
    public function searchdok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $data = Ichkitavardok::whereBetween('updated_at', [$request->date, $request->date2])->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">               
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Datadok::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Datadok::find(1);        
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Data::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Datadok::find(1);        
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa;
                    Datadok::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Datadok::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $data = Ichkitavar::whereBetween('updated_at', [$request->date, $request->date2])->get();
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->tavar->name.'</td>
                   
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    
                    <td>'.$row->updated_at.'</td>
                </tr>
                ';
            }
            $foo = Data::find(1);
            if($foo){
                $foo->tavarshtuk = 0;
                $foo->shtuk = 0;
                $foo->foiz = 0;
                $foo->dateitog = 0;
                $foo->opshi = 0;
                $foo->save();
                foreach ($data as $value) {            
                    $fool = Data::find(1);        
                    $shtuk = $fool->shtuk + $value->hajm;
                    $dateitog = $fool->dateitog + $value->summa;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Data::find(1);
                    $a = $fool2->opshi + $value->summa;
                    Data::find(1)->update([
                        'opshi'=>$a,
                    ]);
                }
            }else{
                Data::create([
                    'dateitog'=>0
                ]);
                foreach ($data as $value) {
                    $foo = Data::find(1);        
                    $shtuk2 = $foo->shtuk + $value->hajm;
                    $dateitog2 = $foo->dateitog + $value->summa;
                    Data::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Data::find(1);
                    $a1 = $fool3->opshi + $value->summa;
                    Data::find(1)->update([
                        'opshi'=>$a1,
                    ]);
                }
            }
            $foo2 = Data::find(1);
        }
        return response()->json([
            'output'=>$output, 
            'total_row'=>$total_row,
            'data'=>$data,
            'foo2'=>$foo2??[],
        ]);
        }
    }

    public function data(Request $request)
    {
        $foo = Data::find(1);
        if($foo){
            $foo->dateitog = 0;
            $foo->save();
            $variable = Ichkitavar::whereBetween('updated_at', [$request->date, $request->date2])->get();
            foreach ($variable as $value) {            
                $foo = Data::find(1);        
                $a = $foo->dateitog + $value->summa;
                Data::find(1)->update([
                    'dateitog'=>$a
                ]);
                $foo2 = Data::find(1);
            }
            return $foo2;
        }else{
            Data::create([
                'dateitog'=>0
            ]);
            return $this->data2($request);
        }
    }

    public function data2($request)
    {
        $variable = Ichkitavar::whereBetween('updated_at', [$request->date, $request->date2])->get();
        foreach ($variable as $value) {            
            $foo = Data::find(1);        
            $a = $foo->dateitog + $value->summa;
            Data::find(1)->update([
                'dateitog'=>$a
            ]);
            $foo2 = Data::find(1);
        }
        return $foo2;
    }

    public function datasearchedok(Request $request)
    {
        if($request->date && $request->date2){
            $variable = Ichkitavar::whereBetween('updated_at', [$request->date, $request->date2])->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }elseif($request->date){
            $variable = Ichkitavar::where('updated_at', ">=", $request->date)->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }elseif($request->date2){
            $variable = Ichkitavar::where('updated_at', ">=", $request->date2)->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }else{
            return back();
        }
    }

    public function datasearche(Request $request)
    {
        if($request->date && $request->date2){
            $variable = Ichkitavar::whereBetween('updated_at', [$request->date, $request->date2])->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }elseif($request->date){
            $variable = Ichkitavar::where('updated_at', ">=", $request->date)->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }elseif($request->date2){
            $variable = Ichkitavar::where('updated_at', ">=", $request->date2)->get();
            $data = Tavar::all();
            $adress = Adress::all();
            if(Session::has('IDIE')){
              $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
              return view('tavar2',[
                  'brends'=>$brends,
                  'ichkitavar'=>$variable,
                  'data'=>$data,
                  'adress'=>$adress,
              ]);
            }else{
                return redirect('/logaut');
            }
        }else{
            return back();
        }
    }

    public function clent2()
    {
        $tavar = Tavar::all();
        $ichkitavardok = Ichkitavardok::all();
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('clent2',[
                'brends'=>$brends,
                'tavar'=>$tavar,
                'tavardok'=>$ichkitavardok,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function prodacha()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('prodacha',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function sqladiski()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('sqladski',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function otkazish(Request $request)
    {        
        $data = Ichkitavar::find($request->id);
        $foo = Sqladpoytaxt::create([
            'tavar_id' =>$data->tavar_id, 
            'adress' =>$data->adress, 
            'tavar2_id' =>$data->tavar2_id, 
            'name' =>$data->name, 
            'raqam' =>$data->raqam, 
            'hajm' =>1, 
            'summa' =>$data->summa, 
            'summa2' =>$data->summa2, 
            'summa3' =>$data->summa3,
        ]);
        return response()->json(['output'=>$foo]);
    }

    public function malumotolish(Request $request)
    {
        return response()->json(Sqladpoytaxt::find($request->id));
    }

    public function plussqlad(Request $request)
    {
        $foo = Sqladpoytaxt::find($request->id);
        $data = Ichkitavar::where('tavar_id', $foo->tavar_id)
                        ->where('adress', $foo->adress)
                        ->where('tavar2_id', $foo->tavar2_id)
                        ->first();
        $foo2 = $foo->hajm + 1;
        if($data->hajm < $foo2){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxt::find($request->id)->update([
                'hajm'=>$foo2
            ]);
        }
        $date = Sqladpoytaxt::find($request->id);
        return response()->json(['status'=>200, 'data'=>$date]);
    }

    public function minussqlad(Request $request)
    {
        $foo = Sqladpoytaxt::find($request->id);
        $foo2 = $foo->hajm - 1;
        if($foo2 == 0){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxt::find($request->id)->update([
                'hajm'=>$foo2
            ]);
        }
        $date = Sqladpoytaxt::find($request->id);
        return response()->json(['status'=>200, 'data'=>$date]);
    }

    public function iidd(Request $request)
    {
        $data = Tavar2::where('tavar_id', $request->id)->get();
        return response()->json($data);
    }
    public function udalitsqlad(Request $request)
    {
        Sqladpoytaxt::find($request->id)->delete($request->id);   
        return response()->json(['status'=>200]);
    }
    public function yangilashsqlad(Request $request)
    {
        return response()->json(Sqladpoytaxt::find($request->id));
    }
    
    public function saqlashsqlad(Request $request)
    {
        $foo = Sqladpoytaxt::find($request->id);
        $data = Ichkitavar::where('tavar_id', $foo->tavar_id)
                        ->where('adress', $foo->adress)
                        ->where('tavar2_id', $foo->tavar2_id)
                        ->first();
        if($data->hajm < $request->son){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxt::find($request->id)->update([
                'hajm'=>$request->son
            ]);
        }
        $date = Sqladpoytaxt::find($request->id);
        return response()->json(['status'=>200, 'data'=>$date]);
    }

    public function tayyorsqlad(Request $request)
    {
        $data = Sqladpoytaxt::all();
        foreach($data as $data2){
            $sss = Tayyorsqlad::where('tavar_id', $data2->tavar_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2_id', $data2->tavar2_id)
                        ->first();
            if($sss){
                $swer = $sss->hajm + $data2->hajm;
                Tayyorsqlad::where('tavar_id', $data2->tavar_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2_id', $data2->tavar2_id)
                        ->update([
                            'name' =>$data2->name, 
                            'raqam' =>$data2->raqam, 
                            'hajm' =>$swer, 
                            'summa' =>$data2->summa, 
                            'summa2' =>$data2->summa2, 
                            'summa3' =>$data2->summa3,
                        ]);
                $ssss = Ichkitavar::where('tavar_id', $data2->tavar_id)
                                ->where('adress', $data2->adress)
                                ->where('tavar2_id', $data2->tavar2_id)
                                ->first();
                $ccc = $ssss->hajm - $data2->hajm;
                Ichkitavar::where('tavar_id', $data2->tavar_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2_id', $data2->tavar2_id)
                        ->update([
                            'hajm'=>$ccc
                        ]);
                Sqladpoytaxt::where('id', ">", 0)->delete();
            }else{
                Tayyorsqlad::create([
                    'tavar_id' =>$data2->tavar_id, 
                    'adress' =>$data2->adress, 
                    'tavar2_id' =>$data2->tavar2_id, 
                    'name' =>$data2->name, 
                    'raqam' =>$data2->raqam, 
                    'hajm' =>$data2->hajm, 
                    'summa' =>$data2->summa, 
                    'summa2' =>$data2->summa2, 
                    'summa3' =>$data2->summa3,
                ]);
                $ssss = Ichkitavar::where('tavar_id', $data2->tavar_id)
                                ->where('adress', $data2->adress)
                                ->where('tavar2_id', $data2->tavar2_id)
                                ->first();
                $ccc = $ssss->hajm - $data2->hajm;
                Ichkitavar::where('tavar_id', $data2->tavar_id)
                            ->where('adress', $data2->adress)
                            ->where('tavar2_id', $data2->tavar2_id)
                            ->update([
                                'hajm'=>$ccc
                            ]);
                Sqladpoytaxt::where('id', ">", 0)->delete();
            }
        }
        return response()->json(['status'=>200]);
    }
}
