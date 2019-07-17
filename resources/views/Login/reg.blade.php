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

	<!-- menu -->
	<div class="menus" id="animatedModal2">
		<div class="close-animatedModal2 close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="container">
				<div class="row">
					<div class="col s4">
						<a href="index.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-home"></i>
								</div>
								Home
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="product-list.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bars"></i>
								</div>
								Product List
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="shop-single.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-eye"></i>
								</div>
								Single Shop
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="wishlist.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-heart"></i>
								</div>
								Wishlist
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="cart.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								Cart
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="checkout.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-credit-card"></i>
								</div>
								Checkout
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="blog.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bold"></i>
								</div>
								Blog
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="blog-single.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-file-text-o"></i>
								</div>
								Blog Single
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="error404.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-hourglass-half"></i>
								</div>
								404
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="testimonial.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-support"></i>
								</div>
								Testimonial
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="about-us.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								About Us
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="contact.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								Contact
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="setting.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-cog"></i>
								</div>
								Settings
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="login.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-sign-in"></i>
								</div>
								Login
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="register.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
								Register
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	

	
	<!-- register -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>注册</h3>
			</div>
			<div class="register">
				<div class="row">
					<form class="col s12 "action="/login/regdo" method="post">
						{{csrf_field()}}
						<div class="input-field">
							<input type="text" name="name" class="validate" placeholder="用户名" required>
						</div>
						<div class="input-field">
							<input type="text" name="email" placeholder="邮箱" class="validate" required>
						</div>
						<div class="input-field">
							<input type="password" name="pwd" placeholder="密码" class="validate" required>
						</div>
						<div >
							<button class="btn button-default">注册</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end register -->
	

	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	
{{--<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>--}}

{{--<script type="text/javascript">--}}
  {{--$(function(){--}}
  	{{--// alert(1111);--}}
    {{--$('#stn').click(function(){--}}

      {{--$.ajaxSetup({--}}
       {{--headers: {--}}
       {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
       {{--}--}}
      {{--});--}}
      {{--// alert(0);--}}
      {{--var name=$('#name').val();--}}
      {{--var email=$('#email').val();--}}
      {{--var pwd=$('#pwd').val();--}}
      {{--// console.log(name);--}}
      {{--// return false;--}}
      {{--// dd(var name);--}}
      {{--// alert(pwd);  --}}
       {{--$.post(--}}
            {{--'regdo',--}}
            {{--{name:name,email:email,pwd:pwd},--}}
            {{--function(res){--}}
              {{--// console.log(res);--}}
              {{--if(res.code==1){--}}
               {{--location.href="{{url('/login/login')}}";--}}
              {{--}--}}
            {{--},--}}
            {{--'json'--}}
        {{--); --}}
        {{--return false;--}}
    {{--})--}}
  {{--});--}}
{{--</script>--}}

@endsection

	

