<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/jquery-3.3.1.js"></script>
</head>
<body>
    <form action="{{url('stratot_list_add')}}" method="post">
    @csrf
        <select class="bb">
            <option value="单选">单选</option>
            <option value="多选">多选</option>
            <option value="判断">判断</option>
        </select>
        <div class="radio">
        <input type="radio" name="aa">A<input type="text" name="aa"><br>
        <input type="radio" name="bb">B<input type="text" name="bb"><br>
        <input type="radio" name="cc">C<input type="text" name="cc"><br>
        <input type="radio" name="dd">D<input type="text" name="dd"><br>
        <input type="submit" value="添加">
    </div>
     </form>
     <form action="{{url('strator_list_acc')}}" method="post">
       @csrf
        <div class="checkbox">
            <input type="checkbox">A<input type="text" name="a"><br>
            <input type="checkbox">B<input type="text" name="b"><br>
            <input type="checkbox">C<input type="text" name="c"><br>
            <input type="checkbox">D<input type="text" name="d"><br>
            <input type="submit" value="添加">
        </div>
    </form>
    <form action="{{url('strator_list_abb')}}" method="post">
    @csrf
        <div class="cc">
            <input type="text" name="aaaa"><br>
            <input type="radio" name="bbbb" value="正确">正确
            <input type="radio" name="bbbb" value="错误">错误<br>
            <input type="submit" value="添加">
        </div>
    </form>
    
</body>
</html>
<script>
    $(function(){
        $('.radio').hide();
        $('.checkbox').hide();
        $('.cc').hide();
        $('.bb').click(function(){
            var name=$(this).val();
            if(name=='单选'){
                $('.radio').show();
                $('.checkbox').hide();
                $('.cc').hide();
            };
            if(name=='多选'){
                $('.checkbox').show();
                $('.radio').hide();
                $('.cc').hide();
            };
            if(name=='判断'){
                $('.cc').show();
                $('.checkbox').hide();
                $('.radio').hide();
            }
        });
    });
</script>