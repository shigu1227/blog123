<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function create()
    {
        return view('studentcontroller/create');
    }
    public function index()
    {	
    	$redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');
        $num=$redis->get('num');
        echo "访问的次数: ".$num." 次";
        //搜索
        $keywords=request()->keywords??'';
        $where =[];
        if ($keywords) {
            $where[]=['name','like',"%$keywords%"];
        }
        //分页
        $pagesize=config('app.pageSize');
        $data = DB::table('y_student')->where($where)->paginate($pagesize);
        return view('studentcontroller/index',['data'=>$data,'keywords'=>$keywords]);

    }
    public function save(Request $request)
    {
        $data = request()->all();
        // dump($data);die;
        unset($data['_token']);
        $post=DB::table('y_student')->insert($data);
        // dump($post);
        if($post){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }
    }
    public function delete(Request $request)
    {
        $data = request()->all();
        //dump($data);die;

        $res = DB::table('y_student')->where('id','=',$data['id'])->delete();
        // dd($res);
        if($res){
            return redirect('student/index');
        }else{
            return redirect('删除失败','student/index');
        }
    }
    public function edit($id)
    {
        //dd($id);
        $data = DB::table('y_student')->where(['id'=>$id])->first();
        // dd($data);
        return view('studentcontroller.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = $request->except(['_token']);
        $id = $request->id;
        $res=DB::table('y_student')->where(['id'=>$id])->update($data);
        if($res){
            return redirect('student/index');
        }
    }
}
