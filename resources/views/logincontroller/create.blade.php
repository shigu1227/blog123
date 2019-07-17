<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>用户注册</title>
</head>
<body>
<h1 align="center">用户注册</h1>
    <form action="/login/save" method="post">
        <center>
            <table border='1' >
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
                        <input type="password" name="pwd">
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <button type="">注册</button>
                    </td>
                </tr>
            </table>
        </center>

    </form>
</body>
</html>