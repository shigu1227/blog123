  @extends('layouts.shop')
  @section('title','')
  @section('content')
  <!-- navbar bottom -->
  <div class="navbar-bottom">
    <div class="row">
      <div class="col s2">
        <a href="index.html"><i class="fa fa-home"></i></a>
      </div>
      <div class="col s2">
        <a href="wishlist.html"><i class="fa fa-heart"></i></a>
      </div>
      <div class="col s4">
        <div class="bar-center">
          <a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
          <span>2</span>
        </div>
      </div>
      <div class="col s2">
        <a href="contact.html"><i class="fa fa-envelope-o"></i></a>
      </div>
      <div class="col s2">
        <a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
      </div>
    </div>
  </div>
  <!-- end navbar bottom -->

  <!-- slider -->
  <div class="slider">
    {{--<audio autoplay>--}}
    {{--<source src="before/js/forgive.mp3"/>--}}
    {{--</audio>--}}

    <ul class="slides">
      <li>
        <img src="index/img/slide1.jpg" alt="">
        <div class="caption slider-content  center-align">
          <h2>没有青春的爱情有何滋味？</h2>
          <h4>没有爱情的青春有何意义</h4>
          <a href="" class="btn button-default">——拜伦</a>
        </div>
      </li>
      <li>
        <img src="index/img/slide3.jpg" alt="">
        <div class="caption slider-content center-align">
          <h2>忠诚的爱情充溢在我的心里</h2>
          <h4>我无法估计自己享有的财富</h4>
          <a href="" class="btn button-default">——莎士比亚</a>
        </div>
      </li>
      <li>
        <img src="index/img/slide2.jpg" alt="">
        <div class="caption slider-content center-align">
          <h2>我承认天底下再没有比爱情的责罚更痛苦的</h2>
          <h4>也没有比服侍它更快乐的事了</h4>
          <a href="" class="btn button-default">——莎士比亚</a>
        </div>
      </li>
      <li>
        <img src="index/img/slide4.jpg" alt="">
        <div class="caption slider-content center-align">
          <h2>爱比杀人重罪更难隐藏</h2>
          <h4>爱情的黑夜有中午的阳光。</h4>
          <a href="" class="btn button-default">——莎士比亚</a>
        </div>
      </li>
    </ul>

  </div>
  <!-- end slider -->

  <!-- features -->
  <div class="features section">
    <div class="container">
      <div class="row">
        <div class="col s6">
          <div class="content">
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <h6>包邮</h6>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <div class="icon">
              <i class="fa fa-dollar"></i>
            </div>
            <h6>退款保证</h6>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>
      <div class="row margin-bottom-0">
        <div class="col s6">
          <div class="content">
            <div class="icon">
              <i class="fa fa-lock"></i>
            </div>
            <h6>安全付款</h6>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <div class="icon">
              <i class="fa fa-support"></i>
            </div>
            <h6>24/7 Support</h6>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end features -->

  <!-- quote -->
  <div class="section quote">
    <div class="container">
      <h4>五折优惠</h4>
      <p>不管怎样，我都要尽力去做</p>
    </div>
  </div>
  <!-- end quote -->
  <!-- product -->


  <div class="section product">
    <div class="container">
      <div class="section-head">
        <h4>11.11半价</h4>
        <div class="divider-top"></div>
        <div class="divider-bottom"></div>
      </div>
      <div class="row">
        @foreach($data as $v)
          <div class="col s6">
            <div class="content">
              <dt><a href="index/proinfo?goods_id={{$v->goods_id}}">
                  <img src="{{$v->goods_big_pic}}"></a></dt>
              <h6><a href="">{{$v->goods_name}}</a></h6>
              <div class="price">
                ${{$v->goods_markprice}} <span>${{$v->goods_markprice*2}}</span>
              </div>
         <a class="btn  button-default" href="index/proinfo?goods_id={{$v->goods_id}}">前往结算</a>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
  <!-- end product -->

  <!-- product -->
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}"> -->
  <div class="section product">
    <div class="container">
      <div class="pagination-product">
        <ul>
          {{$data->links()}}
        </ul>
      </div>
    </div>
  </div>

<script src="/index/js/jquery.min.js"></script>
<script>
  $(function () {
    repairPageStyle(); //修复分页样式
    function repairPageStyle(){
      $('.pagination').removeClass('pagination');
    }
  })
</script>

@endsection
