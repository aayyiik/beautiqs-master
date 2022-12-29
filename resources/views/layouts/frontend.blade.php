<!DOCTYPE html>
<html lang="fullscreen-bg">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css">

    <!-- custom js file link  -->
    <script src="{{asset('frontend')}}/js/script.js" defer></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> Beautiqs_System </a>
    <nav class="navbar">
        <ul>
                <ul>
                    <li><a href="/login">masuk</a></li>
                    <li><a href="/register">daftar</a></li>
                </ul>
        </ul>
    </nav>
   
    
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

<!-- home section starts      -->

<section class="home">

    <div class="slide active" style="background: url({{asset('frontend')}}/assets/beranda1.png) no-repeat;">
        <div class="content">
            <span>Produk Baru</span>
            <h3>diskon 50%</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url({{asset('frontend')}}/assets/beranda2.png) no-repeat;">
        <div class="content">
            <span>Produk Baru</span>
            <h3>diskon 50%</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url({{asset('frontend')}}/assets/beranda3.png) no-repeat;">
        <div class="content">
            <span>Produk Baru</span>
            <h3>diskon 50%</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends     -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box">
        <img src="{{asset('frontend')}}/assets/banner1.png" alt="">
        <div class="content">
            <span>penawaran spesial</span>
            <h3>diskon 50%</h3>
            <a href="#" class="btn">belanja sekarang</a>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('frontend')}}/assets/banner2.png" alt="">
        <div class="content">
            <span>penawaran spesial</span>
            <h3>diskon 75%</h3>
            <a href="#" class="btn">belanja sekarang</a>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('frontend')}}/assets/banner3.png" alt="">
        <div class="content">
            <span>penawaran spesial</span>
            <h3>diskon 50%</h3>
            <a href="#" class="btn">belanja sekarang</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- section about -->

<section class="about">

    <h1 class="title">kenapa memilih kami?</h1>

    <div class="row">

        <div class="image">
            <img src="{{asset('frontend')}}/assets/tentang.png" alt="">
        </div>

        <div class="content">
            <h3>Beautiqs_System</h3>
            <p>Beautiqs_System akan memberikan kebutuhan fashion pakaian kamu. Mulai dari anak-anak hingga dewasa, kami menyediakan
               berbagai macam model pakaian untuk anda sesuai dengan selera anda. Pakaian untuk berbagai macam acara, mulai dari acara formal
               hingga acara casual nongkrong santai bersama kerabat, teman atau keluarga anda.
            </p>
            <p>Sesuaikan style pakaian anda di Beautiqs_System.</p>
            <!--<a href="#" class="btn">lebih banyak</a>-->
        </div>
        
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="{{asset('frontend')}}/assets/icon-6.png" alt="">
            <h3>semua ukuran</h3>
        </div>

        <div class="icons">
            <img src="{{asset('frontend')}}/assets/icon-2.png" alt="">
            <h3>gratis ongkir</h3>
        </div>

        <div class="icons">
            <img src="{{asset('frontend')}}/assets/icon-3.png" alt="">
            <h3>retur mudah</h3>
        </div>

        <div class="icons">
            <img src="{{asset('frontend')}}/assets/icon-4.png" alt="">
            <h3>pembayaran mudah</h3>
        </div>

        <div class="icons">
            <img src="{{asset('frontend')}}/assets/icon-5.png" alt="">
            <h3>layanan 24/7 </h3>
        </div>

    </div>

</section>


<!-- section about ends -->

<!-- prodcuts section starts  -->

<section class="products">

    <h1 class="title"> Rekomendasi Produk </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk1.png" alt="">
            </div>
            <div class="content">
                <h3>casual blouse bow wanita</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp35.0000 <span>Rp100.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk2.png" alt="">
            </div>
            <div class="content">
                <h3>casual blouse kotak-kotak wanita</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp35.0000 <span>Rp100.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk3.png" alt="">
            </div>
            <div class="content">
                <h3>casual blouse pastel wanita</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp35.000 <span>Rp100.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk4.png" alt="">
            </div>
            <div class="content">
                <h3>hoodie flanel motif kotak pria</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp65.000 <span>Rp175.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk5.png" alt="">
            </div>
            <div class="content">
                <h3>kemeja flanel motif kotak pria</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp45.000 <span>Rp125.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk6.png" alt="">
            </div>
            <div class="content">
                <h3>kemeja katun colorful pria</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp45.000 <span>Rp125.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk7.png" alt="">
            </div>
            <div class="content">
                <h3>jas hitam pria</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp125.000<span>Rp325.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk8.png" alt="">
            </div>
            <div class="content">
                <h3>sweater anak</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp45.000<span>Rp100.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>                
                <img src="{{asset('frontend')}}/assets/produk9.png" alt="">
            </div>
            <div class="content">
                <h3>jas pink muda wanita</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp125.000<span>Rp325.000</span></div>
            </div>
        </div>

    </div>
    
</section>

<!-- prodcuts section ends -->








<!-- footer section starts  -->

<section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.blade.php"> <i class="fas fa-angle-right"></i> beranda</a>
                <a href="products.blade.php"> <i class="fas fa-angle-right"></i> produk</a>
                <a href="about.blade.php"> <i class="fas fa-angle-right"></i> tentang</a>
                <a href="contact.blade.php"> <i class="fas fa-angle-right"></i> kontak</a>
                <a href="{{asset('/auths')}}/login.blade.php"> <i class="fas fa-angle-right"></i> masuk</a>
                <a href="{{asset('/auths')}}/register"> <i class="fas fa-angle-right"></i> daftar</a>
                <a href="cart.blade.php"> <i class="fas fa-angle-right"></i> keranjang</a>
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