<h4>车库管理系统</h4>
<form action="">
    <table border=1>
        <tr>
            <td>小区车位</td>
            <td>剩余车位</td>
        </tr>
                <tr>
                <td>{{$in->name}}</td>

                    <td>{{$data}}</td>
                </tr>
        <tr>
            <td><a href="add">车辆入库</a></td>
            <td><a href="del">车辆出库</a></td>
        </tr>
    </table>
</form>