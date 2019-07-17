<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    //商品首页
   public function index(Request $request)
   {
        $pagesize=config('app.pageSize');
   	    $data = DB::table('goods')->paginate($pagesize);
        // $count=DB::table('goods')->count();
        // $cart=DB::table('category')->where('pid',0)->get();
        foreach ($data as $k => $v){
            
            $data[$k]->goods_mid_pic = ltrim($v->goods_mid_pic, '|');
            $data[$k]->goods_big_pic = ltrim($v->goods_big_pic, '|');
            // dd($data);
        }
        $session=$request->session()->get('users');
        return view('index/index',compact('data','session'));
   }

   //商品详情页
   public function proinfo()
   {
        $goods_id=request()->goods_id;
        // dd($goods_id);
       //查询
        $data=DB::table('goods')->where('goods_id',$goods_id)->get();
        // dd($data);
        foreach ($data as $k => $v){
            
            $data[$k]->goods_mid_pic = ltrim($v->goods_mid_pic, '|');
            $data[$k]->goods_big_pic = ltrim($v->goods_big_pic, '|');
        }
      // echo "1111";
      return view('index/proinfo',['data'=>$data]);
   }

   //加入购物车
   public function cartadd()
   {
        $session=request()->session()->get('name');
//         dd($session);
        if ($session==null){
            return 0;die;
        }
        $data=request()->input();
//         dd($data);
        $data['user_id']=1;
//          dd($data);
        $where=[
            'goods_id'=>$data['goods_id'],
            'user_id'=>$data['user_id']
        ];
        // dd($where);
        $count=DB::table('cart')->where($where)->count();
        // dd($count);
        if ($count>0){
            return ['font'=>'该商品已在购物车内','code'=>5];die;
        }else{
            $res=DB::table('cart')->insert($data);
            // dd($res);
            if ($res){
                return ['font'=>'添加购物车成功','code'=>6];die;
            }else{
                return ['font'=>'添加购物车失败','code'=>5];die;
            }
        }
    }
  //购物车
   public function cart()
   {
      $data=DB::table('cart')
            ->join('goods','cart.goods_id','=','goods.goods_id')
            ->where('is_del',1)
            ->get();
            // dd($data);
        foreach ($data as $k => $v){
            
            $data[$k]->goods_mid_pic = ltrim($v->goods_mid_pic, '|');
            $data[$k]->goods_big_pic = ltrim($v->goods_big_pic, '|');
            $data[$k]->newprice=$v->goods_selfprice*$v->cart_shuliang;
        }
//       dd($data);
       $total=0;
       foreach ($data as $v){
           $total+=$v->goods_markprice;
//            dd($total);die;
       }
      return view('index/cart',['data'=>$data,'total'=> number_format($total,2)]);
   }

   //删除购物车单条数据
    public function cartDel()
    {
        $id=request()->id;
        // dd($id);
        $where = [
            'cart_id'=> $id
        ];
        // 用in 是因为单删
        $info = [
            'is_del'=>2
        ];
        $res = DB::table('cart')->where($where)->update($info);
        // dd($res);
        if ($res){
            return ['font'=>'删除成功','code'=>6];die;
        }else{
            return ['font'=>'删除失败','code'=>5];die;
        }
    }

    //更改购买数量
    public function changeBuyNmber()
    {
        $id=request()->cart_id;
        $num=request()->goods_num;
        $data=[
            'cart_shuliang'=>$num
        ];
        DB::table('cart')->where('cart_id',$id)->update($data);
    }
    //获取小计
    public function getSubTotal()
    {
        $num=request()->goods_num;
        $price=request()->price;
        return $newprice=$num*$price;

    }

    //支付页面
    public function checkout()
    {
        $session=request()->session()->get('name');
        if ($session==null) {
            return redirect('/login/login')->with('status', '请登录');
        }
        $id=request()->cart_id;
        $cart_id=explode(',',$id);
        $data=DB::table('cart')
            ->whereIn('cart_id',$cart_id)
            ->join('goods','cart.goods_id','=','goods.goods_id')
            ->get();
        $price=0;
        foreach ($data as $k => $v){
            $data[$k]->goods_big_pic = ltrim($v->goods_big_pic, '|');
            $data[$k]->zongjia=$data[$k]->goods_selfprice*$data[$k]->cart_shuliang;
            $price+=$data[$k]->zongjia;
        }
        $address=DB::table('address')
            ->where('user_id',$session)
            ->orderBy('is_default')
            ->get();
        return view('index/checkout',compact('data','address','price'));
    }
}
