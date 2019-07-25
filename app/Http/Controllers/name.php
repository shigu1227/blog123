<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class name extends Controller
{
public function login(){
    return view('name/login');

}
public function save(Request $request){
    $data = request()->all();
    unset($data['_token']);
    $where=['name'=>$data['name']];
    $info=DB::table("login")->where($where)->first();
    if(empty($info)){
        echo "<script>window.location.href='/name/login',alert('此用户还未注册 或 物业名输入错误')</script>";
    }else if($data['pwd'] !== $info->pwd){
        echo "<script>window.location.href='/name/login',alert(' 密码输入错误')</script>";
    }else{
        session(['name'=>$data['name']]);
        echo "<script>window.location.href='index',alert('登录成功 ')</script>";
    }

}
public function index(){
    $session=request()->session()->get('name');
//    dd($session);
    if ($session==null){
        return "<script>window.location.href='/name/login',alert('您还未登陆')</script>";
    }
    $data=DB::table("name")->get();
    return view('name.index',['data'=>$data]);

}
public function indexc(){
    return view('name.indexc');
}

public function indexm(){
    return view('name.indexm');
}
//添加车库
    public function savec(Request $request){
        $data = request()->all();
        unset($data['_token']);

        $info=DB::table("ku")->first();
        $s=$info->name + $data['name'];
        $post=['name'=>$s];
//        dd($post);
        $data=DB::table("ku")->update($post);

        if($data){
            echo "<script>window.location.href='index',alert('添加车位成功 ')</script>";
        }else{
            echo "<script>window.location.href='indexc',alert('添加车位失败 ')</script>";

        }
    }
    public function savem(Request $request){
        $data = request()->all();
        unset($data['_token']);
        $where=['name'=>$data['name']];
        $men=DB::table("men")->where($where)->first();
if(empty($men)){
    $men=0;
    if(!$data['name'] == $men ){
        $res = DB::table("men")->insert($data);
        if($res){
            echo "<script>window.location.href='indext',alert('添加门卫成功 ')</script>";
        }else{
            echo "<script>window.location.href='indexc',alert('添加门卫失败 ')</script>";

        }
    }else{
        echo "<script>window.location.href='indexm',alert('门卫已存在 ')</script>";
    }
}else{
    if(!$data['name'] == $men->name ){
        $res = DB::table("men")->insert($data);
        if($res){
            echo "<script>window.location.href='indext',alert('添加门卫成功 ')</script>";
        }else{
            echo "<script>window.location.href='indexc',alert('添加门卫失败 ')</script>";

        }
    }else{
        echo "<script>window.location.href='indexm',alert('门卫已存在 ')</script>";
    }

}

    }
    public function indext(){
        $data=DB::table("che")->first();
//        dd($data);
        $in=DB::table("ku")->first();
//        dd($in);
        $info =$in->name - $data->name;
//dd($info);
        return view('name/indext',['data'=>$info,'in'=>$in]);
    }
    //车辆入库 +1
    public function addr(){
        $data=DB::table("che")->first();
        $s=$data->name + '1';
        $post=['name'=>$s];
        $data=DB::table("che")->update($post);
        if($data){
            return redirect('name/indext');
        }else{
            return redirect('name/indext');
        }

    }
    //车辆出库 -1
    public function addc(){
        $data=DB::table("che")->first();
        $s=$data->name - '1';
        $post=['name'=>$s];
        $data=DB::table("che")->update($post);

        if($data){
            return redirect('name/indext');
        }else{
            return redirect('name/indext');
        }

    }
    public function add(){
        return view('name/add');

    }
    //车辆入库车牌号
    public function addrr(Request $request){
        $data = request()->all();
        unset($data['_token']);
        $info=['add_time'=>time(),'name'=>$data['name']];
        $res = DB::table("pai")->insert($info);
        if($res){
            echo "<script>window.location.href='addr',alert('添加车牌号成功 ')</script>";
        }else{
            echo "<script>window.location.href='add',alert('添加车牌号失败 ')</script>";

        }
    }
    public function del(){
        return view('name/del');

    }
    public function delc(Request $request){
        $data = request()->all();
        unset($data['_token']);
        $where=['name'=>$data['name']];
        $info=DB::table("pai")->where($where)->first();
        if(empty($info)){
            echo "<script>window.location.href='/name/del',alert('车牌号错误')</script>";
        }else{
            $id=$info->id;
            $data=DB::table('pai')->delete($id);
//        dd($data);
            if($data){
                echo "<script>window.location.href='addc',alert('出库成功 ')</script>";
            }else{
                echo "<script>window.location.href='delc',alert('出库失败 ')</script>";

            }
        }

    }



























}
