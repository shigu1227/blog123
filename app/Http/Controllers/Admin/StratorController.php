<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class StratorController extends Controller
{
    public function strator_add()
    {
        return view('admin.strator_add');
    }
    public function strator_add_do(Request $request)
    {
         $data=$request->all();
         $info=DB::table('login')->insert([
             'name'=>$data['name'],
             'pwd'=>md5($data['pwd']),
         ]);
        if($info){
            return redirect('strator_list');
        }
    } 
    public function strator_list()
    {
        return view('admin.strator_list');
    }

    public function stratot_list_add(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $info=DB::table('strator')->insert([
             'aa'=>$data['aa'],
             'bb'=>$data['bb'],
             'cc'=>$data['cc'],
             'dd'=>$data['dd'],
        ]);
        dd($info);
    }
    public function strator_list_acc(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $info=DB::table('duoxuan')->insert([
             'a'=>$data['a'],
             'b'=>$data['b'],
             'c'=>$data['c'],
             'd'=>$data['d'],
        ]);
        dd($info);
    }

    public function strator_list_abb(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $info=DB::table('panduan')->insert([
             'aaaa'=>$data['aaaa'],
             'bbbb'=>$data['bbbb'],
        ]);
        dd($info);
    }
    public function strator_list_fff()
    {
        return view('admin.strator_list_fff');
    }
    public function strator_list_do(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $info=DB::table('shi')->insert([
             'title'=>$data['title'],
        ]);
        if($info){
            return redirect('strator_list_list');
        }
    }
    public function strator_list_list(Request $request)
    {  
       $data=$request->all();
       $info=DB::table('shi')->get();
       return view('admin.strator_list_list',['data'=>$info]);
    }
    public function strator_list_shijuan(){
//        echo 1111;die;
//        $input = $request->all();
        $info=DB::table('strator')->get();
        dd($info);
    }
   
    
}
