@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>学生列表</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<body>
 <form align="center">
        <input type="text" name="keywords" placeholder="请输入关键字" value="{{$keywords}}"><button>提交</button>
    </form>
    <table border='1' align="center">
        <tr align="center">
            <td>ID</td>
            <td>学生姓名</td>
            <td>学生性别</td>
            <td>学生年龄</td>
            <td>操作</td>
        </tr>
    @foreach($data as $v)
        <tr align="center">
            <td>{{$v->id}}</td>
            <td>{{$v->student_name}}</td>
            <td>{{$v->student_sex}}</td>
            <td>{{$v->student_age}}</td>
            <td>
                <a href="del/?id={{$v->id}}">删除</a>
                <a href="edit/{{$v->id}}">修改</a>
            </td>
        </tr>
    @endforeach
    </table>
    <center>{{$data->appends(['keywords'=>$keywords])->links()}}</center>
</body>
</html>

@endsection