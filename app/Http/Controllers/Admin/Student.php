<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Student extends Controller
{
    public function add()
    {
        return view('student/add');
    }
    public function add_do(Request $request)
    {
        $data = Request() -> all();
        unset($data['_token']);
            $a = DB::table('Student')->insert($data);
            if($a){
                return redirect('/admin/student/index');
            }else{
                return redirect()->back();
            }
    }
    public function index()
    {
         //搜索
        $keywords=request()->keywords??'';
        $where =[];
        if ($keywords) {
            $where[]=['student_name','like',"%$keywords%"];
        }
        //分页
        $pagesize=config('app.pageSize');
        $data = DB::table('Student')->where($where)->paginate($pagesize);
        return view('student/index',['data'=>$data,'keywords'=>$keywords]);
    }

    public function del(Request $request)
    {
        $a = request() ->all();
        $res = DB::table('Student')->where('id','=',$a['id'])->delete();
        if($res){
            return redirect('admin/student/index');
        }else{
            return redirect('删除失败','admin/student/index');
        }
    }

    public function edit($id)
    {
        $data = DB::table('Student')->where(['id'=>$id])->first();
        return view('student/edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = request() -> except(['_token']);
        $id=request()->id;
        $res=DB::table('Student')->where(['id'=>$id])->update($data);
        if($res){
            return redirect('admin/student/index');
        }
    }
}
