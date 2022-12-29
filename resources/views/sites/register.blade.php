<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>

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

    <a href="/frontend" class="logo"> Beautiqs_System </a>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>



<section class="heading">
    <h1>Akun</h1>
</section>



<section class="register-form">

    <form action="/postregister" method="POST">
      {{csrf_field()}}

        <h3>Daftar Sekarang</h3>
        <div class="inputBox">
            <span class="fas fa-building"></span>
            <label for="id_kota" class="form-label"></label>
            <select name="id_kota" class="form-control">
                <option value="">- Pilih -</option>
                @foreach ($kotas as $kota)
                    <option value="{{ $kota->id_kota }}">{{ $kota->nama_kota }}</option>
                @endforeach                      
            </select>
        </div>

        <div class="inputBox">
            <span class="far fa-id-card"></span>
            <input type="text" name="nama_user" placeholder="silakan nama anda" id="nama_user">
        </div>

        <div class="inputBox">
            <span class="fas fa-map"></span>
          <input type="text" name="alamat" placeholder="silakan isi alamat anda" id="alamat">
        </div>

        <div class="inputBox">
            <span class="fas fa-phone-alt"></span>
            <input type="integer" name="telp" placeholder="silakan isi telepon anda" id="telp">
        </div>

        <div class="inputBox">
          <span class="fas fa-envelope"></span>
          <input type="email" name="email" placeholder="silakan email anda" id="email">
        </div>

        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password" placeholder="silakan verifikasi password" id="password">
        </div>

        <div class="form-group">
          <button type="submit" value="daftar" class="btn btn-primary btn-lg btn-block">Register</button>
        </div>
        <a href="/login" class="btn">Sudah Punya Akun</a>
      </form>
{{-- 
        <input type="submit" value="daftar" class="btn"> --}}
        
    

</section>

<!-- register form section ends -->

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