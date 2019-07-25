<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>车票列表</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<body>
<form>
    <input type="text" name="chufadi" placeholder="请输入出发地" value="{{$keywords['chufadi']??''}}">
    <input type="text" name="daodadi" placeholder="请输入到达地" value="{{$keywords['daodadi']??''}}">
    <button>提交</button>
</form>
<table border="1" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>车次</td>
        <td>出发地</td>
        <td>到达地</td>
        <td>票价</td>
        <td>张数</td>
        <td>出发时间</td>
        <td>到达时间</td>
    </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->checi}}</td>
            <td>{{$v->chufadi}}</td>
            <td>{{$v->daodadi}}</td>
            <td>{{$v->jiaqian}}</td>
            <td>{{$v->zhangshu}}</td>
            <td>{{$v->chufatime}}</td>
            <td>{{$v->daodatime}}</td>
            <td>
{{--                <a href="/student/delete/?id={{$v->id}}">删除</a>&nbsp;|&nbsp;--}}
{{--                <a href="{{url('/student/edit',['id'=>$v->id])}}">修改</a>--}}
            </td>
        </tr>
    @endforeach
</table>
{{$data->appends(['keywords'=>$keywords])->links()}}
</body>
</html>