@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>商品列表</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<body>
 <form>
        <input type="text" name="keywords" placeholder="请输入关键字" value="{{$keywords}}"><button>提交</button>
    </form>
    <table border='1'>
        <tr>
            <td>ID</td>
            <td>商品名称</td>
            <td>商品图片</td>
            <td>商品库存</td>
            <td>商品添加时间</td>
            <td>操作</td>
        </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v->goods_id}}</td>
            <td>{{$v->goods_name}}</td>
            <td><img src="{{$v->goods_big_pic}}" width="80" height="80"></td>
            <td>{{$v->goods_num}}</td>
            <td>{{date('Y-m-d H:i:s',$v->add_time)}}</td>
            <td>
                <a href="del/?id={{$v->goods_id}}">删除</a>
                <a href="edit/{{$v->goods_id}}">修改</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$data->appends(['keywords'=>$keywords])->links()}}
</body>
</html>

@endsection