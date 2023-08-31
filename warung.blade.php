<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapur BuUpik</title>
    <link rel="stylesheet" href="warung/minuman.css">
    <!--swiper link js-->
   <link rel="stylesheet" href="warung/swiper-bundle.min.css">   
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  
    <!-- --header-- --> 
    <header>
        <div class='scroll-bar-wrapper'> 
            <div class='scroll-bar'> </div>
        </div>
        <a href="#" class="logo"><img src="img/logo1.png" alt=""></a>


        <div class="header-nav">
        <ul class="header-nav-list" id="header-nav-list">
            <li class="header-nav-tab ">
                <a href="#banner">Overview</a>
            </li>
            <li class="header-nav-tab">
                <a href="#menu">Menu</a>
            </li>
            <li class="header-nav-tab">
                <a href="#reviews">Reviews</a>
            </li>
            <li class="header-nav-tab">
                <a href="#kontak" >Contact</a>
            </li >
            <span class="highlight"></span>
        </ul>
    </div>

        <div class="header-icons">
            <div class="menuBtn">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="bg-sidebar"></div>
    </header>

    <!-- desaign -->
    <section class="home" id="banner">
        <div class="home-img">
            <img  src="img/coklat.png" class="one">
        </div>
        <div class="home-text">
            <h5 style="text-align:center; font-weight:700; color:#cc9a48">Best Seller Product</h5>
            <h1 id="judul">Milk Boba Chocolate</h1>
            <h5 id="teks">a mixture of chocolate powder with specially made milk and boba</h5>
            <h3 >Rp 5.000</h3>
            <a href="#" class="btn">Grab Now</a>
        </div>
    
    <div class="main" >
        <div class="row" >
            <li><img src="img/main2.png" onclick="slider('img/coklat.png'); ubahTeks2()"></li>
        </div>
        <div class="row row2" >
            <li><img src="img/main3.png" onclick="slider('img/mocca.png'); ubahTeks3()"></li>
        </div>
        <div class="row row3" >
            <li><img src="img/main1.png" onclick="slider('img/grin.png'); ubahTeks1()"></li>
        </div>
    </div>
    </section>


    <!-- menu start -->
    <section class="menu" id="menu">
    <div class="heading">
        <span>Menu Offerings</span>
        <h2>Great taste and good price</h2>
    </div>
    <div class="cards">
        <div class="card">
            <img src="img/Mie jontor 2.png" alt="sumber : pinterest.com" class="dis">
            <div class="star">
                <i class='bx bxs-star'></i>
                <h3>5.0</h3>
            </div>
            <h4>Rp 12.000</h4>
            <h5>MIe Jontor</h5>
            <p>Mie pangsit manis dengan sentuhan cabai rawit yang bikin bibir meletup</p>
        </div>
        
        <div class="card">
            <img src="img/mie angel.jpg" alt="sumber : pinterest.com" class="dis">
            <div class="star">
                <i class='bx bxs-star'></i>
                <h3>4.8</h3>
            </div>
            <h4>Rp 8.000</h4>
            <h5>Mie Angel</h5>
            <p>Mie Ayam Original ditambah dengan kuah gurih untuk menemani santapan</p>
        </div>

        <div class="card">
            <img src="img/Ayam geprek.jpg" alt="sumber : pinterest.com" class="dis">
            <div class="star">
                <i class='bx bxs-star'></i>
                <h3>5.0</h3>
            </div>
            <h4>Rp 15.000</h4>
            <h5>Ayam Geprek</h5>
            <p>Perpaduan ayam goreng tepung berbumbu dan sambal bawang yang pedas cukup membuat lidah terbakar</p>
        </div>

        <div class="card">
            <img src="img/babat.jpg" alt="sumber : https://tinyurl.com/553jmpzp" class="dis">
            <div class="star">
                <i class='bx bxs-star'></i>
                <h3>5.0</h3>
            </div>
            <h4>Rp 20.000</h4>
            <h5>Nasi Paru Babat</h5>
            <p>Perpaduan nasi putih hangat dengan paru dan babat ditemani sambal hijau pedas dengan ketimun untuk penyegar mulut</p>
        </div>
    </div>

    <div class="drink">
    <div class="card">
        <img src="img/coklat.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>5.0</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Chocolate</h5>
        <p>Perpaduan coklat bubuk premium dengan boba dengan susu spesial membuat rasanya beda dari yang lain</p>
    </div>

    <div class="card">
        <img src="img/mocca.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>5.0</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Mochaccino</h5>
        <p>Perpaduan bubuk mocca premium dengan boba dan susu spesial membuat rasanya beda dari yang lain</p>
    </div>

    <div class="card">
        <img src="img/mangga.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>5.0</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Mango</h5>
        <p>Perpaduan bubuk mangga dengan boba dan susu racikan yang sangat segar</p>
    </div>

    <div class="card">
        <img src="img/es teh.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.9</h3>
        </div>
        <h4>Rp 4.000</h4>
        <h5>Iced tea</h5>
        <p>Es teh yang segar dan manis pas bikin pengen minum terus</p>
    </div>

    <div class="card">
        <img src="img/green tea.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.8</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Green tea</h5>
        <p>Bubuk Greentea pilihan dicampur dengan susu racikan yang sangat enak</p>
    </div>

    <div class="card">
        <img src="img/permen karet.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.8</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Bubble Gum</h5>
        <p>Permen karet yang dicampur susu racikan dan boba enak banget</p>
    </div>

    <div class="card">
        <img src="img/strawberry.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.7</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Strawbery</h5>
        <p>Bubuk Strawbery pilihannya dipadu dengan susu racikan yang sangat enak</p>
    </div>

    <div class="card">
        <img src="img/taro.jpg" alt="sumber : pinterest.com" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.7</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Taro</h5>
        <p>Bubuk taro dicampur dengan susu racikan dan boba yang sangat nikmat</p>
    </div>

    <div class="card">
    <img src="img/thaitea.jpg" alt="sumber : pinterest.com" style="font-size: 13px" class="dis">
        <div class="star">
            <i class='bx bxs-star'></i>
            <h3>4.7</h3>
        </div>
        <h4>Rp 7.000</h4>
        <h5>Thaitea</h5>
        <p>Perpaduan premium thaitea powder dengan boba dan susu spesial membuat rasanya beda dari yang lain</p>
    </div>
</div>
    </section>

    <!-- BAGIAN REVIEWS -->
    <section class="service" id="reviews">
    <div class="heading">
        <span style="color: #cc9a48; font-weight:800;">Review</span>
        <h2>Some reviews from customers</h2>
    </div>
    <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="img/slide4.jpg" alt="" class="image">
                <p>Hmmm pertama kali coba ayam gepreknya enak banget, bumbu ayamnya itu lo meresap sampai dalam dalam, enak banget. Mie jontornya juga enak bangett, kalian harus coba sih.
                </p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                    <span class="name">Secret</span>   
                    <span class="job">Orang Kampung sebelah</span>   
                </div>
            </div>

            <div class="slide swiper-slide">
                <img src="img/slide1.jpg" alt="" class="image">
                <p>Enak mienya, rasanya juga pas dan nyaman dimulut. rasa mienya enak kayak brand sebelah haha, sambel ijo paru dan babatnya terdebest
                </p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                    <span class="name">Someone</span>   
                    <span class="job">Orang Kampung sebelah</span>   
                </div>
            </div>
            
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- BAGIAN CONTACT US -->
<section class="kontak" id="kontak">
    <span style="color: #cc9a48; font-weight:800;">Reviews</span>
    <h2>Contact Us</h2>
    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1975.8220655424582!2d112.64204605647008!3d-7.932185541466729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d397a20d3b%3A0x6f068af5b8b060c1!2sDapur%20Bu%20Upik!5e0!3m2!1sid!2sid!4v1685590893272!5m2!1sid!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
        <form action="https://formspree.io/f/xjvqgbqo" method="POST" >
            <input type="text" name="Name" placeholder="Your Name"  class= "contact-txt" required autocomplete="off">
            <input type="email" name="Email" placeholder="Email" class= "contact-txt" required autocomplete="off">
            <textarea type="text" name="Message" placeholder="How can we help you?" class="contact-area" autocomplete="off"></textarea>
            <button type="submit" class="contact-btn" id="myButton" onclick="sendMessage()">Kirim</button>
        </form>
        </div>
        </div>
    </div>
</section>

<!-- BAGIAN FOOTERR -->
<footer class="footer-blog">
    <div class="footer-left">
        <h3>Dapur <span>BuUpik</span></h3>
        <p class="footer-link">
            <a href="#banner">Overview</a>
            |
            <a href="#menu">Menu</a>
|
            <a href="#reviews">Reviews</a>
            |
            <a href="#kontak">Contact</a>
        </p>
        
    </div>

    <div class="footer-center">
        <div>
            <i class='bx bxs-map'></i>
            <p>Jalan Sumpil 3 no 32, RT 05 RW 06, Blimbing,<br> Malang, Jawa Timur, Indonesia</p>
        </div>
        <div>
            <i class='bx bx-phone'></i>
            <p>+62 895-3602-13761</p>
        </div>
        <div>
            <i class='bx bx-phone'></i>
            <p>+62 895-2335-1950</p>
        </div>
        <div>
            <i class='bx bx-envelope'></i>
            <p<a href="#">wbuupik@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
    <p class="footer-about">
        <span>About The company</span>
        <p><b>"Untuk menjalani kehidupan yang keras, kamu harus mengisi perutmu terlebih dahulu."</b>
        Disini kami dapat menerima pesanan untuk berbagai macam kegiatan, Langsung saja hubungi kami!!
        </p>
    </p>
    <div class="footer-icons">
        <a href="https://wa.me/62895360713761"><i class='bx bxl-whatsapp'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a id="copy-link" href="https://f7e5-66-96-237-12.ngrok-free.app/"><i class='bx bx-link-alt'></i></a>
        <a href="https://www.instagram.com/dapurbuupik_/"><i class="bx bxl-instagram" ></i></a>
    </div>
    </div>
    <div class="garis"></div>
    <p class="footer-name"><i class='bx bx-at'></i>Copyright 2023 <strong>AnnisaKurli</strong> All right reserved</p>
</footer>
<a class="gotop" href="#"><i class='bx bxs-chevron-up'></i></a>
<!-- <a class="godown" href="#"><i class='bx bx-chevron-down'></i></a> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="warung/mode.js"></script>

</html>