<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drektor;
use App\Models\User;
use App\Models\Uze;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class UzeController extends Controller
{    
    public function uze()
    {
        if(Session::has('IDIE')){
            $brends = Drektor::where('id','=',Session::get('IDIE'))->first();
            return view('uze',[
                'brends'=>$brends,
            ]);
        }else{
            return redirect('/logaut');
        }
    }
    
    public function live_uze(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
            $data = Uze::where('nam', 'like', '%'.$query.'%')
                            ->orderBy('id', 'DESC')
                            ->get();            
            }
            else
            {
            $data = Uze::orderBy('id', 'DESC')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                    <tr id="row_'.$row->id.'" style="border-bottom: 1px solid #ababab;">
                    <td>'.$row->tex.'</td>
                    <td>'.number_format($row->summa).' sum</td>
                    <td>
                    <a href="javascript:void(0)" id="editpost" data-id="'.$row->id.'" data-tex="'.$row->tex.'" data-summa="'.$row->summa.'" style="color: green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        </svg>
                    </a>
                    <a href="javascript:void(0)" id="delpost" data-id="'.$row->id.'" style="color: red">
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
               
                ';
            }
            $data = array(
                'table_data'  => $output,
            );

            return response()->json($data);
        }
    }


    public function uzestor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tex'=>'required',
            'summa'=>'required',
        ]);
        if($validator->passes()){
            if($request->id){
                Uze::find($request->id)->update([
                    'tex'=>$request->tex,
                    'summa'=>$request->summa,
                    'status'=>0,
                ]);            
            }else{
                Uze::create([
                    'tex'=>$request->tex,
                    'summa'=>$request->summa,
                    'status'=>0,
                ]);
            }
            return response()->json(200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Малумотларни толдиринг', 'error'=>$validator->errors()->toArray()]);
        }
    }

    public function delpost(Request $request)
    {
        Uze::find($request->id)->delete($request->id);
        return response()->json(200);
    }
}
