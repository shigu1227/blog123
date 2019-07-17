@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<h3 id="a1" align="center">学生管理</h3>
    <form action="/admin/student/update" method="post">
    <input type="hidden" name="id" value="{{$data->id}}">
        <center>
            <table border='1'>
            @csrf
                <tr>
                    <td>学生姓名:</td>
                    <td>
                        <input type="text" name="student_name" value="{{$data->student_name}}">
                    </td>
                </tr>
                <tr>
                    <td>学生性别</td>
                     <td>
                        <input type="radio" name="student_sex" checked value="男">男
                        <input type="radio" name="student_sex"  value="女">女
                    </td>
                </tr>
                <tr>
                    <td>学生年龄:</td>
                    <td>
                        <input type="text" name="student_age" value="{{$data->student_age}}">
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <button type="">修改</button>
                    </td>
                </tr>
            </table>
        </center>
    </form>

@endsection
