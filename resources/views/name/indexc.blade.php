<form method="post" action="/name/savec">
    <table border="1">
        <tr>
            {{csrf_field()}}
            <td>车位数</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><input type="submit"value="添加"></td>
            <td></td>
        </tr>
    </table>
</form>