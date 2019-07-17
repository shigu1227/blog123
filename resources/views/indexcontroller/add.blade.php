@extends('indexcontroller.index')

@section('title', 'Page Title')

@section('sidebar')
    @parent
<h3 id="a1" align="center">用户管理</h3>
    <form action="add_do" method="post">
        <center>
            <table border='1'>
            @csrf
                <tr>
                    <td>用户名:</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>密码:</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <button type="">登录</button>
                    </td>
                </tr>
            </table>
        </center>
    </form>

@endsection
