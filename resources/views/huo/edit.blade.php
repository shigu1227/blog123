<body>
  <div class="content">
      <h3>商品货物管理</h3>
     <!--  @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif -->
      <form action="/huo/update" method="post" enctype="multipart/form-data">
      <input type="hidden" name="huo_id" value="{{$data->huo_id}}">
          @csrf
          <div>
            货物名称：<input type="text" name="huo_name" value="{{$data->huo_name}}">
          </div>
          <div>
            货物图片：<input type="file" name="huo_logo" value="{{$data->huo_logo}}">
          </div>
          <div>
            库存：<input type="text" name="huo_ku" value="{{$data->huo_ku}}">
          </div>
          <p><button>提交</button></p>
      </form>
  </div>
</body>