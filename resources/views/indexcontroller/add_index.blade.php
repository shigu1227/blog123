@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>用户列表</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<body>
    <h1 align="center">用户列表</h1>
     <form align="center">
        <input type="text" name="keywords" placeholder="请输入关键字" value="{{$keywords}}"><button>提交</button>
    </form>
    <table border='1' align="center">
        <tr align="center">
            <td>ID</td>
            <td>用户名</td>
            <td>登录时间</td>
            <td>骚操作</td>
        </tr>
    @foreach($data as $v)
        <tr align="center">
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{date('Y-m-d H:i:s',$v->reg_time)}}</td>
            <td>
                <a href="del/?id={{$v->id}}">删除</a>&nbsp;|&nbsp;
                <a href="edit/{{$v->id}}">修改</a>
            </td>
        </tr>
    @endforeach
    </table>
    <center>{{$data->appends(['keywords'=>$keywords])->links()}}</center>
</body>
</html>

@endsection