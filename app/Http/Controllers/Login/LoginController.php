<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function  register(){
        return view('login/register');
    }

    public function login(){
        return view('login/login');
    }

    public function  add_register(Request $request){
        $info = $request->all();
        unset($info['_token']);  //unset删除数组中的莫一条
        $result = DB::table('user')->insert($info);
        if($result){
            return redirect('/login/login');
        }else{
            echo "fail";
        }
    }

    public function add_login(Request $request){
        $req = $request->all();
        unset($req['_token']);  //unset删除数组中的莫一条
        $where = ['name'=>$req['name']];
        $info = DB::table('user')->where($where)->first();
        if(empty($info)){
            echo "<script>window.location.href='/login/login',alert('此用户还未注册 或 用户名输入错误')</script>";
        }else if($req['password']!==$info->password){
            echo "<script>window.location.href='/login/login',alert(' 密码输入错误')</script>";
        }else{
            session(['name'=>$req['name']]);
            echo "<script>window.location.href='/index/index',alert('登录成功 ')</script>";
        }
    }
}
