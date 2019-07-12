<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>学生列表</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<body>
    <form>
        <input type="text" name="keywords" placeholder="请输入关键字" value="{{$keywords}}"><button>提交</button>
    </form>
    <table border="1" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>学生姓名</td>
            <td>性别</td>
            <td>年龄</td>
            <td>操作</td>
        </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->age}}</td>
            <td>
                <a href="/student/delete/?id={{$v->id}}">删除</a>&nbsp;|&nbsp;
                <a href="{{url('/student/edit',['id'=>$v->id])}}">修改</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$data->appends(['keywords'=>$keywords])->links()}}
</body>
</html>