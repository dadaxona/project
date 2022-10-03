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
use App\Models\Javobdok;
use App\Models\Karzina;
use App\Models\Karzina2;
use App\Models\Karzina2dok;
use App\Models\Karzina3;
use App\Models\Karzina3dok;
use App\Models\Karzinadok;
use App\Models\Pribl;
use App\Models\Pribldok;
use App\Models\Rasxod;
use App\Models\Rasxoddok;
use App\Models\Sqladpoytaxt;
use App\Models\Sqladpoytaxtdok;
use App\Models\Statistika;
use App\Models\Statistikadok;
use App\Models\Tavar2;
use App\Models\Tavar2dok;
use App\Models\Tayyorsqlad;
use App\Models\Tayyorsqladdok;
use App\Models\Umumiy;
use App\Models\Updatetavr;
use App\Models\Userdok;
use App\Models\Vazvrad;
use App\Models\Vazvraddok;
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
                <tr data-id="'.$row->id.'" id="data" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
                <tr data-id="'.$row->id.'" id="datadok" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
        $dt= Carbon::now('Asia/Tashkent');
        $year = $dt->year;
        $limit = Statistika::find(1);
        $a = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 1)->first();
        $b = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 2)->first();
        $c = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 3)->first();
        $d = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 4)->first();
        $e = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 5)->first();
        $f = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 6)->first();
        $g = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 7)->first();
        $h = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 8)->first();
        $i = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 9)->first();
        $j = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 10)->first();
        $k = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 11)->first();
        $l = Statistika::whereYear('created_at', $year)->whereMonth('created_at', 12)->first();
        $dataPoints1 = array(
            array("label"=> "Лимит", "y"=> $limit->limit??[]),
            array("label"=> "Январь", "y"=> $a->pribl??[]),
            array("label"=> "Февраль", "y"=> $b->pribl??[]),
            array("label"=> "Март", "y"=> $c->pribl??[]),
            array("label"=> "Апрель", "y"=> $d->pribl??[]),
            array("label"=> "Май", "y"=> $e->pribl??[]),
            array("label"=> "Ийун", "y"=> $f->pribl??[]),
            array("label"=> "Июль", "y"=> $g->pribl??[]),
            array("label"=> "Август", "y"=> $h->pribl??[]),
            array("label"=> "Сентябрь", "y"=> $i->pribl??[]),
            array("label"=> "Октябрь", "y"=> $j->pribl??[]),
            array("label"=> "Ноябрь", "y"=> $k->pribl??[]),
            array("label"=> "Декабрь", "y"=> $l->pribl??[]),
        );
        $dataPoints2 = array(
            array("label"=> "Лимит"),
            array("label"=> "Январь", "y"=> $a->kassa??[]),
            array("label"=> "Февраль", "y"=> $b->kassa??[]),
            array("label"=> "Март", "y"=> $c->kassa??[]),
            array("label"=> "Апрель", "y"=> $d->kassa??[]),
            array("label"=> "Май", "y"=> $e->kassa??[]),
            array("label"=> "Ийун", "y"=> $f->kassa??[]),
            array("label"=> "Июль", "y"=> $g->kassa??[]),
            array("label"=> "Август", "y"=> $h->kassa??[]),
            array("label"=> "Сентябрь", "y"=> $i->kassa??[]),
            array("label"=> "Октябрь", "y"=> $j->kassa??[]),
            array("label"=> "Ноябрь", "y"=> $k->kassa??[]),
            array("label"=> "Декабрь", "y"=> $l->kassa??[]),
        );
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('statistika',[
                'brends'=>$brends,
                'dataPoints1'=>$dataPoints1,
                'dataPoints2'=>$dataPoints2,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function statistik(Request $request)
    {
        if($request->ajax())
        {
            $ichki = Ichkitavar::all();
            $kar2 = Karzina2::all();
            $kar3 = Karzina3::all();
            $arx = Arxiv::all();
            $ras = Rasxod::all();
            $foo = Pribl::find(1);
            if($foo){
                $foo->jami = 0;
                $foo->karz = 0;
                $foo->pribl = 0;
                $foo->vse = 0;
                $foo->rasxod = 0;
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
                    $ich2 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich2->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
                foreach ($ras as $value) {
                    $foo4 = Pribl::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }else{
                Pribl::create([
                    'jami'=>0,
                    'karz'=>0,
                    'pribl'=>0,
                    'vse'=>0,
                    'rasxod'=>0
                ]);
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich3 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich3->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich4 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich4->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();
                }
                foreach ($ras as $value) {
                    $foo4 = Pribl::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }
            $foo5 = Pribl::find(1);
            $fo = $foo5->jami - $foo5->pribl;
            $f = $fo - $foo5->rasxod;
            $foo5->pribl = $f - $foo5->karz;
            $foo5->update();
            return response()->json([
                'foo2'=>$foo5??[],
            ]);
        }
    }
    
    public function statistikdok(Request $request)
    {
        if($request->ajax())
        {
            $ichki = Ichkitavardok::all();
            $kar2 = Karzina2dok::all();
            $kar3 = Karzina3dok::all();
            $arx = Arxivdok::all();
            $ras = Rasxoddok::all();
            $foo = Pribldok::find(1);
            if($foo){
                $foo->jami = 0;
                $foo->karz = 0;
                $foo->pribl = 0;
                $foo->vse = 0;
                $foo->rasxod = 0;
                $foo->save();
                foreach ($ichki as $value) {
                    $foo1 = Pribldok::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = Pribldok::find(1);
                    $foo2->pribl = $foo2->pribl + $ich->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich2 = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = Pribldok::find(1);
                    $foo2->pribl = $foo2->pribl + $ich2->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribldok::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
                foreach ($ras as $value) {
                    $foo4 = Pribldok::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }else{
                Pribldok::create([
                    'jami'=>0,
                    'karz'=>0,
                    'pribl'=>0,
                    'vse'=>0,
                    'rasxod'=>0
                ]);
                foreach ($ichki as $value) {
                    $foo1 = Pribldok::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich3 = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = Pribldok::find(1);
                    $foo2->pribl = $foo2->pribl + $ich3->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich4 = Ichkitavardok::find($value->ichkitavardok_id);
                    $foo2 = Pribldok::find(1);
                    $foo2->pribl = $foo2->pribl + $ich4->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribldok::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();
                }
                foreach ($ras as $value) {
                    $foo4 = Pribldok::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }
            $foo5 = Pribldok::find(1);
            $fo = $foo5->jami - $foo5->pribl;
            $f = $fo - $foo5->rasxod;
            $foo5->pribl = $f - $foo5->karz;
            $foo5->update();
            return response()->json([
                'foo2'=>$foo5??[],
            ]);
        }
    }
    
    public function statistik2(Request $request)
    {
        if($request->ajax())
        {
            $ichki = Ichkitavar::all();
            $kar2 = Karzina2::whereBetween("created_at", [$request->date, $request->date2])->get();
            $kar3 = Karzina3::whereBetween("created_at", [$request->date, $request->date2])->get();
            $arx = Arxiv::whereBetween("created_at", [$request->date, $request->date2])->get();
            $ras = Rasxod::whereBetween("created_at", [$request->date, $request->date2])->get();
            $foo = Pribl::find(1);
            if($foo){
                $foo->jami = 0;
                $foo->karz = 0;
                $foo->pribl = 0;
                $foo->vse = 0;
                $foo->rasxod = 0;
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
                    $ich2 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich2->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();                    
                }
                foreach ($ras as $value) {
                    $foo4 = Pribl::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }else{
                Pribl::create([
                    'jami'=>0,
                    'karz'=>0,
                    'pribl'=>0,
                    'vse'=>0,
                    'rasxod'=>0
                ]);
                foreach ($ichki as $value) {
                    $foo1 = Pribl::find(1);
                    $foo1->vse = $foo1->vse + $value->hajm * $value->summa;
                    $foo1->update();
                }
                foreach ($kar2 as $value) {
                    $ich3 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich3->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($kar3 as $value) {
                    $ich4 = Ichkitavar::find($value->ichkitavar_id);
                    $foo2 = Pribl::find(1);
                    $foo2->pribl = $foo2->pribl + $ich4->summa * $value->soni;
                    $foo2->jami = $foo2->jami + $value->itog;
                    $foo2->update();
                }
                foreach ($arx as $value) {
                    $foo3 = Pribl::find(1);
                    $foo3->karz = $foo3->karz + $value->karzs;
                    $foo3->update();
                }
                foreach ($ras as $value) {
                    $foo4 = Pribl::find(1);
                    $foo4->rasxod = $foo4->rasxod + $value->rasxod;
                    $foo4->update();
                }
            }
            $foo5 = Pribl::find(1);
            $fo = $foo5->jami - $foo5->pribl;
            $f = $fo - $foo5->rasxod;
            $foo5->pribl = $f - $foo5->karz;
            $foo5->update();
            return response()->json([
                'foo2'=>$foo5??[],
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
                <tr data-id="'.$row->id.'" id="data2" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
                <tr data-id="'.$row->id.'" id="data2dog" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
                <tr data-id="'.$row->id.'" id="data22dok" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
                <tr data-id="'.$row->id.'" id="data22" style="cursor: pointer;" style="border-bottom: 1px solid;">
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
                $rrrr = Javobdok::where('userdok_id', $row->id)->first();
                $p = '';
                if($rrrr->javob >= 0){
                    $p = "<span style='color: red'>$rrrr->javob </span>";
                }elseif($rrrr->javob < 0){
                    $p = "<span style='color: green'>$rrrr->javob</span>";
                }
                $output .= '
                <tr data-id="'.$row->id.'" id="datadok" style="cursor: pointer; border-bottom: 1px solid;">
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
                <tr data-id="'.$row->id.'" id="data" style="cursor: pointer; border-bottom: 1px solid;">
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

    public function vazvradspi(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Vazvrad::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Vazvrad::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->created_at.'</td>
                    <td>'.$row->username.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->sabab.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->kod.'</td>
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

    public function vazvradspidok(Request $request)
    {
        if($request->ajax())
        {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = Vazvraddok::where('name', 'like', '%'.$query.'%')->get();
        }
        else
        {
        $data = Vazvraddok::all();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr style="border-bottom: 1px solid;">
                    <td>'.$row->created_at.'</td>
                    <td>'.$row->username.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->sabab.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->kod.'</td>
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
                <td><input type="checkbox" class="form-check-input ml-3" id="locolddok" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvazdok">
                            Вазврат
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
    
    public function qaytar(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $month = $dt->month;
        $year = $dt->year;
        $data = Karzina2::find($request->id);
        $j = $data->soni - $request->hajm;
        if($j < 0){
            return response()->json(['code'=>0, 'msg'=>'Кайтариладиган товар хажми нотогри']);
        }
        if($j == 0){
            $foo = Ichkitavar::find($data->ichkitavar_id);
            $jav = $foo->hajm + $request->hajm;
            Ichkitavar::find($data->ichkitavar_id)->update([
                'hajm'=>$jav
            ]);
            Vazvrad::create([
                'username'=>$data->user->name, 
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina2::find($request->id)->delete($request->id);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
        if($j > 0){
            $foo = Ichkitavar::find($data->ichkitavar_id);
            $jav = $foo->hajm + $request->hajm;
            $sum = $data->itog - $data->summa2 * $request->hajm;            
            Ichkitavar::find($data->ichkitavar_id)->update([
                'hajm'=>$jav
            ]);
            Vazvrad::create([
                'username'=>$data->user->name, 
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina2::find($request->id)->update([
                'soni'=>$j,
                'itog'=>$sum

            ]);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }        
    }

    public function qaytardok(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $month = $dt->month;
        $year = $dt->year;
        $data = Karzina2dok::find($request->id);
        $j = $data->soni - $request->hajm;
        if($j < 0){
            return response()->json(['code'=>0, 'msg'=>'Кайтариладиган товар хажми нотогри']);
        }
        if($j == 0){
            $foo = Ichkitavardok::find($data->ichkitavardok_id);
            $jav = $foo->hajm + $request->hajm;
            Ichkitavardok::find($data->ichkitavardok_id)->update([
                'hajm'=>$jav
            ]);
            Vazvraddok::create([
                'username'=>$data->userdok->name, 
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina2dok::find($request->id)->delete($request->id);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
        if($j > 0){
            $foo = Ichkitavardok::find($data->ichkitavardok_id);
            $jav = $foo->hajm + $request->hajm;
            $sum = $data->itog - $data->summa2 * $request->hajm;            
            Ichkitavardok::find($data->ichkitavardok_id)->update([
                'hajm'=>$jav
            ]);
            Vazvraddok::create([
                'username'=>$data->user->name, 
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina2dok::find($request->id)->update([
                'soni'=>$j,
                'itog'=>$sum

            ]);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }        
    }

    public function qaytarbirlamchini(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $month = $dt->month;
        $year = $dt->year;
        $data = Karzina3::find($request->id);
        $j = $data->soni - $request->hajm;
        if($j < 0){
            return response()->json(['code'=>0, 'msg'=>'Кайтариладиган товар хажми нотогри']);
        }
        if($j == 0){
            $foo = Ichkitavar::find($data->ichkitavar_id);
            $jav = $foo->hajm + $request->hajm;
            Ichkitavar::find($data->ichkitavar_id)->update([
                'hajm'=>$jav
            ]);
            Vazvrad::create([
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina3::find($request->id)->delete($request->id);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
        if($j > 0){
            $foo2 = Ichkitavar::find($data->ichkitavar_id);
            $jav2 = $foo2->hajm + $request->hajm;
            $sum2 = $data->itog - $data->summa2 * $request->hajm;            
            Ichkitavar::find($data->ichkitavar_id)->update([
                'hajm'=>$jav2
            ]);
            Vazvrad::create([
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo2->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistika::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina3::find($request->id)->update([
                'soni'=>$j,
                'itog'=>$sum2

            ]);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
    }

    public function qaytarbirlamchinidok(Request $request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $month = $dt->month;
        $year = $dt->year;
        $data = Karzina3dok::find($request->id);
        $j = $data->soni - $request->hajm;
        if($j < 0){
            return response()->json(['code'=>0, 'msg'=>'Кайтариладиган товар хажми нотогри']);
        }
        if($j == 0){
            $foo = Ichkitavardok::find($data->ichkitavardok_id);
            $jav = $foo->hajm + $request->hajm;
            Ichkitavardok::find($data->ichkitavardok_id)->update([
                'hajm'=>$jav
            ]);
            Vazvraddok::create([
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina3dok::find($request->id)->delete($request->id);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
        if($j > 0){
            $foo2 = Ichkitavardok::find($data->ichkitavardok_id);
            $jav2 = $foo2->hajm + $request->hajm;
            $sum2 = $data->itog - $data->summa2 * $request->hajm;            
            Ichkitavardok::find($data->ichkitavardok_id)->update([
                'hajm'=>$jav2
            ]);
            Vazvrad::create([
                'name'=>$data->name, 
                'sabab'=>$request->sabab, 
                'hajm'=>$request->hajm, 
                'summa'=>$data->summa2, 
                'kod'=>$data->raqam,
            ]);
            $q = $foo2->summa * $request->hajm;
            $q2 = $data->summa2 * $request->hajm;
            $q3 = $q2 - $q;
            $sta = Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->first();
            $a = $sta->kassa - $q2;
            $a1 = $sta->foyda - $q;
            $a2 = $sta->pribl - $q3;
            Statistikadok::whereYear('created_at', $year)->whereMonth('created_at', $month)->update([
                'foyda' => $a1, 
                'kassa' => $a,
                'pribl' => $a2,
            ]);
            Karzina3dok::find($request->id)->update([
                'soni'=>$j,
                'itog'=>$sum2

            ]);
            return response()->json(['code'=>200, 'msg'=>'Товар мувафакиятли кайтарилди']);
        }
    }
    
    public function qaytaredit(Request $request)
    {
        $data = Karzina2::find($request->id);
        return response()->json($data);
    }

    public function qaytareditdok(Request $request)
    {
        $data = Karzina2dok::find($request->id);
        return response()->json($data);
    }

    public function qaytareditbirlam(Request $request)
    {
        $data = Karzina3::find($request->id);
        return response()->json($data);
    }
    
    public function qaytareditbirlamdok(Request $request)
    {
        $data = Karzina3dok::find($request->id);
        return response()->json($data);
    }

    public function vseclent(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $data = Karzina2::all();     
            $data222 = Arxiv::all();     
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
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cretdok">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cretdok">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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

    public function clents2(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = '';
            $da = User::find($request->id);   
            $data = Karzina2::where('user_id', $da->id)->get();     
            $data222 = Arxiv::where('user_id', $da->id)->get();     
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
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
            $data = Karzina2::where('created_at', $data222->created_at)->get();
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

    public function clents2aniqdok(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $output2 = ''; 
            $data222 = Arxivdok::find($request->id);
            $da = Userdok::find($data222->user_id);
            $data = Karzina2dok::where('created_at', $data222->created_at)->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr style="border-bottom: 1px solid;">
                    <td>
                    <button data-id="'.$row->id.'" id="vazvratdok">
                            Вазврат
                        </button>
                    </td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->itog.'</td>
                  <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
               
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cretdok">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
            $data = Karzina2::where('user_id', $da->id)
                            ->where('tavar_id', $request->tavar_id)
                            ->get();
            $data222 = Arxiv::where('user_id', $da->id)->get();
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
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
            $data = Karzina2::where('user_id', $da->id)
                            ->where('tavar_id', $request->tavar_id)
                            ->whereBetween('updated_at', [$request->date, $request->date2])
                            ->get(); 
            $data222 = Arxiv::where('user_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->get();
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
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                    ';
                }
                foreach($data222 as $row)
                {
                    $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cretdok">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                    <tr style="border-bottom: 1px solid;" data-id="'.$row->id.'" id="cretdok">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->userdok->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                        <td>
                        <button data-id="'.$row->id.'" id="vazvratdok">
                                Вазврат
                            </button>
                        </td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->soni.'</td>
                        <td>'.$row->summa2.'</td>
                        <td>'.$row->itog.'</td>
                      <td><input type="checkbox" class="form-check-input ml-3" id="locoldok" data-id="'.$row->id.'"></td>
                   
                    </tr>
                        ';
                    }
                    foreach($data222 as $row)
                    {
                        $output2 .= '
                                 <tr style="border-bottom: 1px solid;" data-id="'.$row->idokd.'" id="cret">
                    <td>'.$row->updated_at.'</td>
                        <td>'.$row->user->name.'</td>
                        <td>'.$row->itogs.'</td>
                        <td>'.$row->naqt.'</td>
                        <td>'.$row->plastik.'</td>
                        <td>'.$row->bank.'</td>
                        <td>'.$row->karzs.'</td>
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
                                ->get();
                $data222 = Arxiv::where('user_id', $da->id)->whereBetween('updated_at', [$request->date, $request->date2])->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->user->name.'</td>
                            <td>'.$row->ichkitavar->name.'</td>
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
                $data = Karzina2::whereBetween('updated_at', [$request->date, $request->date2])->get();
                $data222 = Arxiv::whereBetween('updated_at', [$request->date, $request->date2])->get();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr style="border-bottom: 1px solid;">
                            <td>'.$row->user->name.'</td>
                            <td>'.$row->ichkitavar->name.'</td>
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
                <td><input type="checkbox" class="form-check-input ml-3" id="locolddok" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvazdok">
                            Вазврат
                        </button>
                    </td>
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
            $data = Karzina3::where('tavar_id', $request->tavar_id)->get();
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
            $data = Karzina3::where('tavar_id', $request->tavar_id)->whereBetween('updated_at', [$request->date, $request->date2])->get(); 
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
                <td><input type="checkbox" class="form-check-input ml-3" id="locolddok" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvazdok">
                            Вазврат
                        </button>
                    </td>
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
            $data = Karzina3::whereBetween('updated_at', [$request->date, $request->date2])->get();
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
                <td><input type="checkbox" class="form-check-input ml-3" id="locolddok" data-id="'.$row->id.'"></td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->soni.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->chegirma.'</td>
                    <td>'.$row->itog.'</td>
                    <td>'.$row->updated_at.'</td>
                    <td>
                        <button data-id="'.$row->id.'" id="bilamvazdok">
                            Вазврат
                        </button>
                    </td>
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
                    <td>'.$row->adress.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->summa3.'</td>
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
                    <td>'.$row->summa3.'</td>
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
                    $dateitog = $fool->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa * $value->hajm;
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
                    $dateitog2 = $foo->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa * $value->hajm;
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
                    <td>'.$row->summa3.'</td>
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
                    $dateitog = $fool->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($get as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa * $value->hajm;
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
                    $dateitog2 = $foo->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($get as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa * $value->hajm;
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
                    <td>'.$row->adress.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->summa3.'</td>
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
                    <td>'.$row->summa3.'</td>
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
                    $dateitog = $fool->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk,
                        'dateitog'=>$dateitog,
                    ]);
                }
                foreach ($data as $value) {
                    $fool2 = Datadok::find(1);
                    $a = $fool2->opshi + $value->summa * $value->hajm;
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
                    $dateitog2 = $foo->dateitog + $value->summa * $value->hajm;
                    Datadok::find(1)->update([
                        'tavarshtuk'=>$total_row,
                        'shtuk'=>$shtuk2,
                        'dateitog'=>$dateitog2,
                    ]);
                }
                foreach ($data as $value) {
                    $fool3 = Datadok::find(1);
                    $a1 = $fool3->opshi + $value->summa * $value->hajm;
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
                    <td>'.$row->adress.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->hajm.'</td>
                    <td>'.$row->summa.'</td>
                    <td>'.$row->summa2.'</td>
                    <td>'.$row->summa3.'</td>
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
        return response()->json($foo);
    }

    public function otkazishdok(Request $request)
    {        
        $data = Ichkitavardok::find($request->id);
        $foo = Sqladpoytaxtdok::create([
            'tavardok_id' =>$data->tavardok_id, 
            'adress' =>$data->adress, 
            'tavar2dok_id' =>$data->tavar2dok_id, 
            'name' =>$data->name, 
            'raqam' =>$data->raqam, 
            'hajm' =>1, 
            'summa' =>$data->summa, 
            'summa2' =>$data->summa2, 
            'summa3' =>$data->summa3,
        ]);
        return response()->json($foo);
    }

    public function malumotolish(Request $request)
    {
        $data = Sqladpoytaxt::find($request->id);
        return response()->json($data);
    }

    public function malumotolishdok(Request $request)
    {
        $data = Sqladpoytaxtdok::find($request->id);
        return response()->json($data);
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

    
    public function plussqladdok(Request $request)
    {
        $foo = Sqladpoytaxtdok::find($request->id);
        $data = Ichkitavardok::where('tavardok_id', $foo->tavardok_id)
                        ->where('adress', $foo->adress)
                        ->where('tavar2dok_id', $foo->tavar2dok_id)
                        ->first();
        $foo2 = $foo->hajm + 1;
        if($data->hajm < $foo2){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxtdok::find($request->id)->update([
                'hajm'=>$foo2
            ]);
        }
        $date = Sqladpoytaxtdok::find($request->id);
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

    public function minussqladdok(Request $request)
    {
        $foo = Sqladpoytaxtdok::find($request->id);
        $foo2 = $foo->hajm - 1;
        if($foo2 == 0){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxtdok::find($request->id)->update([
                'hajm'=>$foo2
            ]);
        }
        $date = Sqladpoytaxtdok::find($request->id);
        return response()->json(['status'=>200, 'data'=>$date]);
    }

    public function iidd(Request $request)
    {
        $data = Tavar2::where('tavar_id', $request->id)->get();
        return response()->json($data);
    }

    public function toldirish(Request $request)
    {
        $data = Ichkitavar::where('tavar_id',"=",$request->id)
                        ->where('adress',"=",$request->adre)
                        ->where('tavar2_id',"=",$request->id2)
                        ->first();
        return response()->json($data);
    }
    
    public function toldirishdok(Request $request)
    {
        $data = Ichkitavardok::where('tavardok_id',"=",$request->id)
                        ->where('adress',"=", $request->adre)
                        ->where('tavar2dok_id',"=", $request->id2)
                        ->first();
        return response()->json($data);
    }
    
    public function tavardok_id2(Request $request)
    {
        $data = Tavar2dok::where('tavardok_id', $request->id)->get();
        return response()->json($data);
    }
    
    public function tavardok_id(Request $request)
    {
        $data = Tavar2dok::where('tavardok_id', $request->id)->get();
        return response()->json($data);
    }

    public function tavardokoption_id()
    {
        $data = Tavar2dok::all();
        return response()->json($data);
    }

    public function udalitsqlad(Request $request)
    {
        Sqladpoytaxt::find($request->id)->delete($request->id);   
        return response()->json(['status'=>200]);
    }

    public function udalitsqladdok(Request $request)
    {
        Sqladpoytaxtdok::find($request->id)->delete($request->id);   
        return response()->json(['status'=>200]);
    }

    public function yangilashsqlad(Request $request)
    {
        return response()->json(Sqladpoytaxt::find($request->id));
    }

    public function yangilashsqladdok(Request $request)
    {
        return response()->json(Sqladpoytaxtdok::find($request->id));
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

    public function saqlashsqladdok(Request $request)
    {
        $foo = Sqladpoytaxtdok::find($request->id);
        $data = Ichkitavardok::where('tavardok_id', $foo->tavardok_id)
                        ->where('adress', $foo->adress)
                        ->where('tavar2dok_id', $foo->tavar2dok_id)
                        ->first();
        if($data->hajm < $request->son){
            return response()->json(['status'=>0, 'data'=>$foo]);
        }else{
            Sqladpoytaxtdok::find($request->id)->update([
                'hajm'=>$request->son
            ]);
        }
        $date = Sqladpoytaxtdok::find($request->id);
        return response()->json(['status'=>200, 'data'=>$date]);
    }
    
    public function tayyorsqlad(Request $request)
    {
        $data = Sqladpoytaxt::all();
        foreach($data as $data2){
            $sss = Tayyorsqladdok::where('tavardok_id', $data2->tavar_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2dok_id', $data2->tavar2_id)
                        ->first();
            if($sss){
                $swer = $sss->hajm + $data2->hajm;
                Tayyorsqladdok::where('tavardok_id', $data2->tavard_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2dok_id', $data2->tavar2_id)
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
                Tayyorsqladdok::create([
                    'tavardok_id' =>$data2->tavar_id, 
                    'adress' =>$data2->adress, 
                    'tavar2dok_id' =>$data2->tavar2_id, 
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

    public function tayyorsqladdok(Request $request)
    {
        $data = Sqladpoytaxtdok::all();
        foreach($data as $data2){
            $sss = Tayyorsqlad::where('tavar_id', $data2->tavardok_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2_id', $data2->tavar2dok_id)
                        ->first();
            if($sss){
                $swer = $sss->hajm + $data2->hajm;
                Tayyorsqlad::where('tavar_id', $data2->tavardok_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2_id', $data2->tavar2dok_id)
                        ->update([
                            'name' =>$data2->name, 
                            'raqam' =>$data2->raqam,
                            'hajm' =>$swer, 
                            'summa' =>$data2->summa, 
                            'summa2' =>$data2->summa2, 
                            'summa3' =>$data2->summa3,
                        ]);
                $ssss = Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                                ->where('adress', $data2->adress)
                                ->where('tavar2dok_id', $data2->tavar2dok_id)
                                ->first();
                $ccc = $ssss->hajm - $data2->hajm;
                Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                        ->where('adress', $data2->adress)
                        ->where('tavar2dok_id', $data2->tavar2dok_id)
                        ->update([
                            'hajm'=>$ccc
                        ]);
                Sqladpoytaxtdok::where('id', ">", 0)->delete();
            }else{
                Tayyorsqlad::create([
                    'tavar_id' =>$data2->tavardok_id, 
                    'adress' =>$data2->adress, 
                    'tavar2_id' =>$data2->tavar2dok_id, 
                    'name' =>$data2->name, 
                    'raqam' =>$data2->raqam, 
                    'hajm' =>$data2->hajm, 
                    'summa' =>$data2->summa, 
                    'summa2' =>$data2->summa2, 
                    'summa3' =>$data2->summa3,
                ]);
                $ssss = Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                                ->where('adress', $data2->adress)
                                ->where('tavar2dok_id', $data2->tavar2dok_id)
                                ->first();
                $ccc = $ssss->hajm - $data2->hajm;
                Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                            ->where('adress', $data2->adress)
                            ->where('tavar2dok_id', $data2->tavar2dok_id)
                            ->update([
                                'hajm'=>$ccc
                            ]);
                Sqladpoytaxtdok::where('id', ">", 0)->delete();
            }
        }
        return response()->json(['status'=>200]);
    }

    public function kelgantovar2ajax()
    {
        $jonatilgan = Tayyorsqlad::count();
        return response()->json($jonatilgan);   
    }

    public function kelgantovar2ajaxdok()
    {
        $jonatilgan = Tayyorsqladdok::count();
        return response()->json($jonatilgan);   
    }

    public function kelgantovar2()
    {
        $jonatil = Tayyorsqlad::all();
        $jonatildok = Tayyorsqladdok::all();
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('kelgantovar',[
                'brends'=>$brends,
                'jonatil'=>$jonatil,
                'jonatildok'=>$jonatildok,
            ]);
        }else{
            return redirect('/logaut');
        }
    }

    public function sinimayt(Request $request)
    {
        $datap = Tayyorsqlad::all();
        foreach($datap as $data2){
            $sss = Ichkitavar::where('tavar_id', $data2->tavar_id)
                        ->where('tavar2_id', $data2->tavar2_id)
                        ->first();
            if($sss){
                $swer = $sss->hajm + $data2->hajm;
                Ichkitavar::where('tavar_id', $data2->tavar_id)
                        ->where('tavar2_id', $data2->tavar2_id)
                        ->update([
                            'name' =>$data2->name, 
                            'raqam' =>$data2->raqam, 
                            'hajm' =>$swer, 
                            'summa' =>$data2->summa, 
                            'summa2' =>$data2->summa2, 
                            'summa3' =>$data2->summa3,
                        ]);
            }else{
                Ichkitavar::create([
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
            }
        }
        Tayyorsqlad::where('id', ">", 0)->delete();
        return redirect('/glavninachal');
    }

    public function sinimaytdok(Request $request)
    {
        $datap = Tayyorsqladdok::all();
        foreach($datap as $data2){
            $sss = Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                        ->where('tavar2dok_id', $data2->tavar2dok_id)
                        ->first();
            if($sss){
                $swer = $sss->hajm + $data2->hajm;
                Ichkitavardok::where('tavardok_id', $data2->tavardok_id)
                        ->where('tavar2dok_id', $data2->tavar2dok_id)
                        ->update([
                            'name' =>$data2->name, 
                            'raqam' =>$data2->raqam, 
                            'hajm' =>$swer, 
                            'summa' =>$data2->summa, 
                            'summa2' =>$data2->summa2, 
                            'summa3' =>$data2->summa3,
                        ]);
            }else{
                Ichkitavardok::create([
                    'tavardok_id' =>$data2->tavardok_id, 
                    'adress' =>$data2->adress,
                    'tavar2dok_id' =>$data2->tavar2dok_id,
                    'name' =>$data2->name,
                    'raqam' =>$data2->raqam, 
                    'hajm' =>$data2->hajm, 
                    'summa' =>$data2->summa, 
                    'summa2' =>$data2->summa2, 
                    'summa3' =>$data2->summa3,
                ]);
            }
        }
        Tayyorsqladdok::where('id', ">", 0)->delete();
        return redirect('/glavninachal');
    }

    public function rasxod()
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

    public function getrasxod()
    {
        $data = Rasxod::all();
        return response()->json($data);
    }

    public function getrasxoddok()
    {
        $data = Rasxoddok::all();
        return response()->json($data);
    }

    public function postrasxod(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'rasxod' => 'required|numeric',
            'qayer' => 'required',
            'sabap' => 'required'
        ]);
        if($validator->passes()){
            return $model->postrasxod($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотни киритинг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function postrasxoddok(Request $request, KlentServis $model)
    {
        $validator = Validator::make($request->all(), [
            'rasxod' => 'required|numeric',
            'qayer' => 'required',
            'sabap' => 'required'
        ]);
        if($validator->passes()){
            return $model->postrasxoddok($request);
        }else{            
            return response()->json(['code'=>0, 'msg'=>'Малумотни киритинг', 'error'=>$validator->errors()->toArray()]);
        }
    }
    
    public function deletrasxod($id, KlentServis $model)
    {
        return $model->deletrasxod($id);
    }

    public function deletrasxoddok($id, KlentServis $model)
    {
        return $model->deletrasxoddok($id);
    }
}
