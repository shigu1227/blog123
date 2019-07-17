<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	//注册
    public function reg()
    {
        return view('login/reg');
    }

     //注册执行
    public function regdo(Request $request){
            $data = request()->all();
            unset($data['_token']);
            $data['pwd'] = md5($data['pwd']);
            $info = ['reg_time' => time(), 'name' => $data['name'], 'email' => $data['email'], 'pwd' => $data['pwd']];
//        dd($info);
            $res = DB::table("user")->insert($info);
            if ($res) {
                return redirect('/login/login');
            } else {
                return redirect('/login/reg');
            }
        }


    //登录
    public function login()
    {
        return view('login.login');
    }
    //前台登录页面S
    public function logindo(Request $request){
        $data = request()->all();
        unset($data['_token']);
        $data['pwd'] = md5($data['pwd']);
//        dd($data['pwd']);
        $where=['name'=> $data['name']];
//dd($where);
        //根据接收来的name进行单条查询
        $info=DB::table("user")->where($where)->first();
//        dd($info);
//dd($info->pwd);
        //判断数据库中是否有此用户
        if(empty($info)){
            echo "<script>window.location.href='/login/login',alert('此用户还未注册 或 用户名输入错误')</script>";
        }else if($data['pwd'] !== $info->pwd){
            echo "<script>window.location.href='/login/login',alert(' 密码输入错误')</script>";
        }else{
            session(['name'=>$data['name']]);
            echo "<script>window.location.href='/',alert('登录成功 ')</script>";
        }

    }

}
