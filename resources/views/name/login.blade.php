<form method="post" action="/name/save">
	<table border="1">
	<tr>
        {{csrf_field()}}
        <td>账号</td>
		<td><input type="text" name="name"></td>

	</tr>
	<tr>
        <td>密码</td>
		<td><input type="password" name="pwd"></td>

	</tr>
	<tr>
		<td><input type="submit"value="登录"></td>
		<td></td>
	</tr>
	</table>
</form>