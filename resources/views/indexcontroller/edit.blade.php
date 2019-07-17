@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<h3 align="center">用户修改</h3>
    <form action="{{url('/admin/update')}}" method="post">
    <input type="hidden" name="id" value="{{$data->id}}">
        <center>
            <table border='1'>
            @csrf
                <tr>
                    <td>用户名:</td>
                    <td>
                        <input type="text" name="name" value="{{$data->name}}">
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
