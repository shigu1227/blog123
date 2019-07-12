<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>学生信息</title>
</head>
<body>
<form action="/student/save" method="post">
@csrf
    <table border='1'>
        <tr>
            <td>学生姓名:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>学生性别:</td>
            <td>
                <input type="radio" name="sex" value="男">男
                <input type="radio" name="sex" value="女">女
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
                <input type="submit" value="提交">
            </td>
        </tr>
    </table>
</form>
</body>
</html>