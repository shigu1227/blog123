<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TicketController extends Controller
{
    public function add(){

       return view('/ticketCOntroller/add');
    }
    public function do_add(){
        $data = request()->all();
//         dump($data);die;
        unset($data['_token']);
        $post=DB::table('ticket')->insert($data);
        // dump($post);
        if($post){
            return redirect('ticket/index');
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');

        //搜索
        $keywords=request()->all();
        if(!empty($keywords['chufadi']) || !empty($keywords['daodadi'])){
            $redis->incr('num');
            $num = $redis->get('num');
            echo"以搜索：".$num."次";
        }
        $where = [];
        if ($keywords['chufadi']??'') {
            $where[]=['chufadi','like',"%$keywords[chufadi]%"];
        }
        if ($keywords['daodadi']??'') {
            $where[]=['daodadi','like',"%$keywords[daodadi]%"];
        }
          $pagesize=config('app.pageSize');
        $data = DB::table('ticket')->where($where)->paginate($pagesize);
        return view('/ticketController/index',['data'=>$data,'keywords'=>$keywords]);
    }
}
