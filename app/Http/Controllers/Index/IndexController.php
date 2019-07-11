<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $session=request()->session()->get('name');
    dd($session);
        if ($session==null){
            return "<script>window.location.href='/login/login',alert('您还未登陆')</script>";
        }
        return view('index/index');
    }


}
