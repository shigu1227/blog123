<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('indexcontroller.index');
    }

    public function add()
    {
        return view('indexcontroller.add');
    }
    public function add_do(Request $request)
    {
        $aa = request() -> all();
        $aa['reg_time'] = time();
        unset($aa['_token']);
        $aa['password'] = md5($aa['password']);
        $res = DB::table('User')->where('name','=',$aa['name'])->first();
        if(empty($res)){
            echo "<script>window.location.href='index',alert('没有此账号')</script>";
        }else{
            if($res->name==$aa['name']&&$res->password==$aa['password']){
                   echo "<script>window.location.href='add_index',alert('登陆成功');</script>";
            }else{
                echo "<script>window.location.href='add',alert('登陆失败');</script>";
                die;
            }
        }

    }
    public function add_index()
    {
         //搜索
        $keywords=request()->keywords??'';
        $where =[];
        if ($keywords) {
            $where[]=['name','like',"%$keywords%"];
        }
        //分页
        $pagesize=config('app.pageSize');
        $data = DB::table('User')->where($where)->paginate($pagesize);
        return view('indexcontroller.add_index',['data'=>$data,'keywords'=>$keywords]);
    }

    public function del(Request $request)
    {
        $data = request() -> all();
        $q = DB::table('User')->where('id','=',$data['id'])->delete();
        if($q){
            return redirect('admin.add_index');
        }else{
            return redirect('删除失败','add_index');
        }
    }

    public function edit($id)
    {
        $data = DB::table('User')->where(['id'=>$id])->first();
        return view('indexcontroller.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = $request->except(['_token']);
        $id=request()->id;
        $a = DB::table('User')->where(['id'=>$id])->update($data);
        if($a){
            return redirect('admin.add_index');
        }
    }
}
