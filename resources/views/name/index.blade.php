<a href="indexc">添加车辆信息</a><br/>
<a href="indexm">添加门卫</a><br/>
<h4>数据显示</h4>
<form action="">
    <table border=1>
        <tr>
            <td>ID</td>
            <td>车辆数量</td>
            <td>费用</td>
        </tr>
        @if($data)
            @foreach($data as $v)
                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->che}}</td>
                    <td>
                        {{$v->fei}}
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</form>