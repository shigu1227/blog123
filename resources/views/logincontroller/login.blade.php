<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>用户登录</title>
</head>
<body>
<h1 align="center">用户登录</h1>
    <form action="/login/login_do" method="post">
        <table border='1' align="center">
        @csrf
            <tr>
                <td>登录名</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>密码:</td>
                <td>
                    <input type="password" name="pwd">
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center'>
                    <button type="">登录</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>