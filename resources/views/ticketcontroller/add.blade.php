<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加车票</title>
</head>
<body>
<form action="/ticket/do_add" method="post">
    @csrf
    <table border='1'>
        <tr>
            <td>车次:</td>
            <td><input type="text" name="checi"></td>
        </tr>
        <tr>
            <td>出发地:</td>
            <td><input type="text" name="chufadi"></td>
        </tr>
        <tr>
            <td>到达地:</td>
            <td><input type="text" name="daodadi"></td>
        </tr>
        <tr>
            <td>价钱:</td>
            <td><input type="text" name="jiaqian"></td>
        </tr>
        <tr>
            <td>张数</td>
            <td><input type="text" name="zhangshu"></td>
        </tr>
        <tr>
            <td>出发时间</td>
            <td><input type="text" name="chufatime"></td>
        </tr>
        <tr>
            <td>到达时间</td>
            <td><input type="text" name="daodatime"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="提交">
            </td>
        </tr>
    </table>
</form>

</body>
</html>