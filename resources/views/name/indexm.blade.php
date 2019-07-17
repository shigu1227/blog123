<form method="post" action="/name/savem">
    <table border="1">
        <tr>
            {{csrf_field()}}
            <td>门卫账号</td>
            <td><input type="text" name="name"></td>

</tr>
<tr>
    <td>门卫密码</td>
    <td><input type="password" name="pwd"></td>

</tr>
<tr>
    <td><input type="submit"value="添加"></td>
    <td></td>
</tr>
</table>
</form>