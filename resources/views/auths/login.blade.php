<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>masuk</title>

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css">

    <!-- custom js file link  -->
    <script src="{{asset('/frontend')}}/js/script.js" defer></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> Beautiqs_System </a>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="cari disini..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form> 

</header>

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>akun</h1>
    {{-- <p> <a href="/home">beranda</a> >> masuk </p> --}}
</section>

<!-- header section -->

<!-- login form section starts -->
@yield('konten')
<section class="login-form">
	<div class="content">
		<div class="header">
			{{-- <div class="logo text-center">Beautiqs Logo</div> --}}
		</div>
		@if (session('status'))
			<div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
					{{ session('status') }}
			</div>
		@endif
		<form class="form-auth-small" action="/postlogin" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				
				<label for="signin-email" class="control-label sr-only">Email</label>
				<span class="fas fa-user"></span>
				<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email" value="{{ old('email') }}">
				<span class="text-danger">
					@error('email'){{ $message }}
					@enderror</span>
			</div>
			<div class="form-group">
				<label for="signin-password" class="control-label sr-only">Password</label>
				<span class="fas fa-lock"></span>
				<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password" value="{{ old('password') }}">
				<span class="text-danger">@error('password'){{ $message }}@enderror</span>
			</div>

			<div class="form-group clearfix">	
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
			<div class="bottom">
				<label for="register">Belum punya akun?</label>
				<span class="helper-text"><i class="lnr lnr-user"></i> <a href="/register">Registrasi</a></span>
			</div>
		</form>
	</div>

</section>

<!-- login form section ends -->











<!-- footer section starts  -->

<section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> beranda</a>
                <a href="products.php"> <i class="fas fa-angle-right"></i> produk</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> tentang</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i> kontak</a>
                <a href="login.php"> <i class="fas fa-angle-right"></i> masuk</a>
                <a href="register.php"> <i class="fas fa-angle-right"></i> daftar</a>
                <a href="cart.php"> <i class="fas fa-angle-right"></i> keranjang</a>
            </div>

            <div class="box">
                <h3>lainnya</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> akun </a>
                <a href="#"> <i class="fas fa-angle-right"></i> pesanan </a>
                <a href="#"> <i class="fas fa-angle-right"></i> daftar keinginan </a>
                <a href="#"> <i class="fas fa-angle-right"></i> ketentuan pemakaian </a>
                <a href="#"> <i class="fas fa-angle-right"></i> kebijakan privasi </a>
            </div>

            <div class="box">
                <h3>ikuti kami</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            </div>

        </div>

    <div class="credit"> created by <span>mr .web designer</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>