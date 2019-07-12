<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>学生信息修改</title>
</head>
<body>
<form action="/student/update" method="post">
    <input type="hidden" name="id" value="{{$data->id}}">
@csrf
    <table border='1'>
        <tr>
            <td>学生姓名:</td>
            <td><input type="text" name="name" value="{{$data->name}}"></td>
        </tr>
        <tr>
            <td>学生性别</td>
             <td>
                @if($data->sex==1)
                    <input type="radio" name="sex" checked value="1">男
                    <input type="radio" name="sex" value="2">女

                    @else

                    <input type="radio" name="sex" value="1">男
                    <input type="radio" name="sex" value="2" checked>女
                    @endif
                </td>
        </tr>
        <tr>
            <td>学生年龄:</td>
            <td>
                <select name="age">
                    <option value="">请选择</option>
                    <?php for($i=18;$i<=40;$i++){?>
                        <option value="<?php echo $i?>"><?php echo $i?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="修改">
            </td>
        </tr>
    </table>
</form>
</body>
</html>