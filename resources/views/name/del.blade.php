<form method="post" action="/name/delc">
    <table border="1">
        <tr>
            {{csrf_field()}}
            <h3>车辆出库</h3>
            <td>车牌号</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"value="车辆出库"></td>

        </tr>
    </table>
</form>