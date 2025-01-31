<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>旺旺通國際有限公司</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="We craft awesome Bootstrap themes for free and share selected resources for web designer &amp; developer. Download Free HTML themes for Bootstrap" />
        <link href="img/head_footer.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/head_footer.png" rel="icon" sizes="96x96" type="image/png">
        <link href="img/head_footer.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/head_footer.png" name="msapplication-TileImage">

        <meta property="og:url" content="https://www.boostraptheme.com/demo/index.html" />
        <meta property="og:title" content="Bitcoin - Finance service Free Bootstrap Template | Boostraptheme" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:site_name" content="Boostraptheme" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="BoostrapTheme" />
        <meta name="twitter:creator" content="BoostrapTheme" />

        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/app.css">

        <!-- 彈跳視窗 -->
        <link rel="stylesheet" href="css/sweetalert2.css">
        <!-- 彈跳視窗 -->

        <script src="js/jquery.min.js"></script>

        <!-- Tab -->
        <link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css"><!--演示页面样式，使用时可以不引用-->
        <!-- Tab -->

        <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>
    </head>
      <style>
    /* tab */
    .demo{
      padding: 2em 0;
    }
    a:hover,a:focus{
        text-decoration: none;
        outline: none;
    }
    .tab .nav-tabs{
        border: none;
        border-bottom: 2px solid #fed136;
        margin: 0;
    }
    .tab .nav-tabs li a{
        padding: 10px 20px;
        margin: 0 10px -1px 0;
        font-size: 17px;
        font-weight: 600;
        color: #293241;
        text-transform: uppercase;
        border: 2px solid #e6e5e1;
        border-bottom: none;
        border-radius: 5px 5px 0 0;
        z-index: 1;
        position: relative;
        transition: all 0.3s ease 0s;
    }
    .tab .nav-tabs li a:hover,
    .tab .nav-tabs li.active a{
        background: #fff;
        color: #fed136;
        border: 2px solid #fed136;
        border-bottom-color: transparent;
    }
    .tab .nav-tabs li a:before{
        content: "";
        display: block;
        height: 2px;
        background: #fff;
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out 0s;
    }
    .tab .nav-tabs li.active a:before,
    .tab .nav-tabs li a:hover:before{ transform: scaleX(1); }
    .tab .tab-content{
        padding: 10px;
        font-size: 17px;
        color: #6f6f6f;
        line-height: 30px;
        letter-spacing: 1px;
        position: relative;
    }
    @media only screen and (max-width: 479px){
        .tab .nav-tabs{ border: none; }
        .tab .nav-tabs li{
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }
        .tab .nav-tabs li a{
            margin: 0;
            border-bottom: 2px solid transparent;
        }
        .tab .nav-tabs li a:before{
            content: "";
            width: 100%;
            height: 2px;
            background: #079fc9;
            position: absolute;
            bottom: -2px;
            left: 0;
        }
    }
    /* tabend */
        img.smallscreen {
          display: none;
        }
        /* 如果使用者視窗寬度 <= 768px */
        /* Logo */
        #mainNav{
          background: rgba(0, 0, 0, 0.0);
        }

        @media screen and (max-width: 768px) {
          img.header_logo {
            display: none;
          }
          img.smallscreen {
            display: block;
            max-height: 95px;
          }
        }

        @media screen and (max-width: 576px) {
          img.header_logo{
            display: none;
          }
          img.smallscreen {
            display: block;
            max-height: 73px;
          }
        }

        @media screen and (max-width: 575px) {
          img.header_logo {
            display: none;
          }
          img.smallscreen {
            display: none;
            max-height: 50px;
          }
        }
        /* Logo */
        .about .about-box-sec .about-box{
          padding: 30px 30px 30px 30px;
        }
      </style>

    <body id="page-top">

        <!-- <div class="loader"></div> -->
        <!-- NAVIGATION
            =================-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
              <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                  <!-- <img src="img/logo1.png" style="max-height: 60px;" alt="" class="img-fluid"> -->
                  <img src="img/logo3.png" style="max-height: 65px;" alt="" class="header_logo img-fluid"><img class="smallscreen img-fluid"  src="img/head_footer.png" alt="" />
                </a>
                <button id='menu_btn' class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  選單
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">

                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#page-top">首頁</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#about">關於旺旺通</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#news">相關新資訊</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#services">服務項目</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#faq">會員專區</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#team">會員專區</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#team">四大主流專區</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#contact">聯絡我們</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <div id="carousel" class="masthead carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/carousel/carousel-01.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/carousel/carousel-02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/carousel/carousel-03.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/carousel/carousel-04.jpg" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        <!-- HEADER
            =================-->
            <!-- <header class="">
              <div class="container">
                <div class="intro-text"></div>
              </div>
            </header> -->

        <!-- ABOUT
            =================-->
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about-img"><img src="img/about/bg.png" alt="" class="img-fluid"></div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-cont">
                                <h3>關於我們</h3>
                                <div class="bord"></div>
                                <p>旺旺通國際有限公司全球通是聯盟電商培訓平台，其中，旺旺通國際有限公司互聯網，能為消費者省錢、為推廣者賺錢為商家以及平台精准引流！因為消費者購買的產品都是工廠以廠價推廣精准引流促銷商品，所以平台對消費者既有強大的黏性，推廣者無須囤貨，無須投資，可以獲得高額推廣報酬，還能無風險組建有效把手中庫存變現，並有效協助微商精准引流，說明微商擴大產品線，滿足更多消費者，平臺彙聚了各大品牌微商大咖，突破品牌產生更多乾貨交流。是全新無風險聯盟電商創業平台，結合旺旺通國際有限公司四大主要金流工具，帶動更多元化的經濟效益。</p>
                                <!-- <a href="#"><button class="btn btn-general btn-white">Contact Now</button></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="row about-box-sec">
                        <div class="col-md-4 col-sm-6">
                            <div class="about-box wow fadeInUp" data-wow-delay="0.9s">
                                <!-- <div class="about-icon">
                                    <img src="img/coin/huobi.png" alt="" class="img-fluid">
                                </div> -->
                                <div class="about-Content">
                                    <h3 class="title">新興消費支付模式崛起</h3>
                                    <div class="embed-responsive embed-responsive-16by9">
                                      <video loop class="embed-responsive-item" controls>
                                        <source src="file/video/model.mp4" type="video/mp4">
                                      </video>
                                    </div>
                                    <!-- <p class="description">
                                      在消費者逐漸改變電子商品支付消費的習慣開始，網路通路正以燎原的速度徹底翻轉了各企業的銷售生態，企業主與消費者的溝通模式與以往大不相同，不禁讓人思考，如何延續實體店舖的銷售優勢，直接打入電子商務領域，旺旺通結合第三方支付及數字貨幣支付系通平台，在延續企業優質的良好形象達到無縫接軌。
                                    </p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="about-box wow fadeInUp" data-wow-delay="1.2s">
                                <!-- <div class="about-icon">
                                    <img src="img/coin/huobi.png" alt="" class="img-fluid">
                                </div> -->
                                <div class="about-Content">
                                    <h3 class="title">我們的使命</h3>
                                    <div class="embed-responsive embed-responsive-16by9">
                                      <video loop class="embed-responsive-item" controls>
                                        <source src="file/video/mission.mp4" type="video/mp4">
                                      </video>
                                    </div>
                                    <!-- <p class="description">
                                      旺旺通國際有限公司致力於推動企業銷售電商化，因應電子商務席捲全球的世界浪潮，兩岸三地的電商人才優勢，企圖以台灣為中心，將台灣企業優質的商品與服務，透過網路的速度與力量，結合公司四大主要金流(聯名卡、EDC刷卡機、M數位金融科技、數字貨幣)，像狂風一般席捲擴散到全世界每個角落，希望讓世界感受到台灣企業的金融市場金流導向，結合專業度與創新視角。
                                    </p> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="about-box wow fadeInUp" data-wow-delay="1.5s">
                                <!-- <div class="about-icon">
                                    <img src="img/coin/huobi.png" alt="" class="img-fluid">
                                </div> -->
                                <div class="about-Content">
                                  <h3 class="title">我們的優勢</h3>
                                  <div class="embed-responsive embed-responsive-16by9">
                                    <video loop class="embed-responsive-item" controls><!-- autoplay=加入此屬性，影片會自動播放 -->
                                      <source src="file/video/advantage.mp4" type="video/mp4">
                                      </video>
                                    </div>
                                    <!-- <p class="description">
                                      金流服務的資金安全性永遠是第一要務，旺旺通國際有限公司結合PCIDSS產業資料安全標準，繼而針對安全管理、政策、程序與方式、網路配置與軟體設計等多方需求，所訂定之資料安全標準。旺旺通國際有限公司結合四大主要金流(聯名卡、EDC刷卡機、M數位金融科技、數字貨幣)，進而增加更多元的支付方式，提供消費著更多支付方式選擇，提供台灣實體／網路商店、服務業、非營利事業…等全方位金流整合平台。
                                    </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- NEWS
                =================-->
                <!-- <section id="news" class="news">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-12 text-center">
                                <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                                    <h1>Latest News</h1>
                                    <div class="bord-bot"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 col-sm-6 desc-comp-news">
                            <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="0.6s">
                              <div class="thumbnail-blogs">
                                  <img src="img/news/news-1.jpg" class="img-fluid" alt="...">
                              </div>
                              <h3>Bitcoin is Bright Future in the World of Money</h3>
                              <p class="desc">The Bitcoin cryptocurrency has changed the way we conduct online transactions...</p>
                              <a href="news-description.html"> Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-6 desc-comp-news">
                            <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="0.9s">
                              <div class="thumbnail-blogs">
                                  <img src="img/news/news-2.jpg" class="img-fluid" alt="...">
                              </div>
                              <h3>Trezor is another storage tool for Bitcoins</h3>
                              <p class="desc">Itvis considered as one of the best hardware wallet solutions available...</p>
                              <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-6 desc-comp-news">
                            <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="1.2s">
                              <div class="thumbnail-blogs">
                                  <img src="img/news/news-3.jpg" class="img-fluid" alt="...">
                              </div>
                              <h3>Founded on USB interface Bitcoin</h3>
                              <p class="desc">It is designed in a unique way making it more reliable. When you start... </p>
                              <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-6 desc-comp-news">
                            <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="1.5s">
                              <div class="thumbnail-blogs">
                                  <img src="img/news/news-4.jpg" class="img-fluid" alt="...">
                              </div>
                              <h3>OpenDime is commonly known as a ‘Bitcoin</h3>
                              <p class="desc">Stick that allows you to spend Bitcoin in a way that regular dollar...</p>
                              <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                          </div>
                          <div class="col-md-12 mx-auto text-center mt-4">
                              <a href="news.html"><button class="btn btn-general btn-yellow">View More</button></a>
                          </div>
                        </div>
                    </div>
                </section> -->

                <section id="devider" class="devider wow fadeIn" data-wow-delay="0.3s"></section>

                <!-- NEWS
                    =================-->
                    <section id="news" class="news">
                      <div class="container">
                        <div class="row mb-5">
                          <div class="col-md-12 text-center">
                            <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                              <h1>旺旺通相關新資訊</h1>
                              <div class="bord-bot"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="htmleaf-container">
                              <div class="demo">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-offset-3 col-md-12">
                                      <div class="tab" role="tabpanel">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                          <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" ata-toggle="tab" aria-selected="true">最新消息</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">投資相關資訊</a>
                                          </li>
                                        </ul>
                                        <div class="tab-content tabs" id="myTabContent">
                                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <table class='table'>
                                              <tbody>
                                                <tr>
                                                  <td><a href="#">最新消息一</a></td>
                                                </tr>
                                                <tr>
                                                  <td><a href="#">最新消息二</a></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <table class='table'>
                                              <tbody>
                                                <tr>
                                                  <td><a href="#">投資相關訊息一</a></td>
                                                </tr>
                                                <tr>
                                                  <td><a href="#">投資相關訊息二</a></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
        <!-- DEVIDER
            =================-->
            <style>
              .services .serviceBox .service-icon img{
                height: auto;

              }
            </style>
        <!-- SERVICES
            =================-->
            <section id="services" class="services">
                <div class="container">
                    <div class="row mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-md-12 text-center">
                            <div class="heading">
                                <h1>服務項目</h1>
                                <div class="bord-bot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="0.6s">
                                <div class="service-icon">
                                    <img src="file/four/1萬事達卡/黑卡.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="service-content">
                                  <h3>萬事達卡</h3>
                                <img src="file/four/1萬事達卡/文宣-01.jpg" alt="" class="img-fluid">
                                    <!-- <p>
                                        Central Banks in almost all countries of the world regularize the flow of money. Central bank theoretically controls every single dollar coming in and out of its country. You cannot escape the wrath of central bank policies often not friendly for businesses.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="0.9s">
                                <div class="service-icon">
                                  <!-- <img src="img/services/coin-2.png" alt="" class="img-fluid"> -->
                                  <img src="file/four/2POS/S__15638603.png" alt="" class="img-fluid">
                                </div>
                                <div class="service-content">
                                  <h3>POS機</h3>
                                  <!-- <img class="d-block w-100" src="file/four/2POS/文宣-02.jpg" alt="Second slide">                                  -->

                                  <div id="PosMachine" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#PosMachine" data-slide-to="0" class="active"></li>
                                      <li data-target="#PosMachine" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="file/four/2POS/文宣-02.jpg" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="file/four/2POS/萬事達分期付款DM-01.jpg" alt="Second slide">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#PosMachine" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#PosMachine" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                  <!-- <img src="file/four/2POS/文宣-02.jpg" alt="" class="img-fluid"> -->
                                    <!-- <p>
                                        Bitcoin does not discriminate against anyone due to their background. Bitcoin will make sure that you get the money through to anything you want. Sometimes, there are laws which prevent you from buying something from a particular country.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="1.2s">
                                <div class="service-icon">
                                    <img src="img/m.png" alt="" class="img-fluid">
                                </div>
                                <div class="service-content">
                                    <h3>M金融</h3>
                                    <img src="file/four/M金融/文宣-03.jpg" alt="" class="img-fluid">
                                    <!-- <p>
                                        You can use the blockchain in Bitcoin to look at the most recent transactions taking place. All you need is internet access to search for the record of the Bitcoin history. The users of Bitcoin can easily choose between going public or it hiding their privacy.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="1.5s">
                                <div class="service-icon">
                                    <img src="img/fire_logo1.png" alt="" class="img-fluid">
                                </div>
                                <div class="service-content" onclick="fire();">
                                    <h3>火幣</h3>
                                    <img src="file/four/火幣/文宣-04.jpg" title='點擊此圖會顯示QR Code，掃描後可連結至註冊網站' class="img-fluid">
                                    <!-- <p>
                                        No matter which currency you try to store, it has that inflation impact on it. Inflation is a result of many micro and macroeconomic factors affecting a country. There are around 21 million bitcoins in the market. The demand for Bitcoins remains high despite
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="1.8s">
                                <div class="service-icon">
                                    <img src="img/head_footer.png" alt="" class="img-fluid">
                                </div>
                                <a href="https://www.wanwanton.com/ct/mbst/product_list.php" target="_blank">
                                <div class="service-content">
                                    <h3>入會條件&好禮</h3>
                                    <img src="file/member/01.jpg" title="點擊可連至旺旺通購物網" class="img-fluid">

                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox wow fadeInUp" data-wow-delay="2.1s">
                                <div class="service-icon">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX68yTLL-IHaDUiHuK_TLDfPia5TY6Z-4kqK4CpirjExdWOPlgVQ" alt="" class="img-fluid">
                                </div>
                                <a href="file/four/Q&A外部人員.pdf" target="_blank">
                                  <div class="service-content">
                                    <h3>Q & A</h3>
                                    <img src="img/QA.jpg" class="img-fluid" title="點擊此處可連至Q&A文件!" alt="">
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          <style>
          #faq{
            background: white;
          }
          .fa-usd{
            position: absolute;
            right: 2px;
            font-size: 25px;
            padding: 4px 20px;
            background: #fff;
            line-height: 50px;
            top: 2px;
            color: #fed136;
          }
          </style>
        <!-- FAQ MENU
            =================-->
            <section id="faq" class="faq wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                  <div class="row mb-5 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="col-md-12 text-center">
                          <div class="heading">
                              <h1>會員相關資料下載</h1>
                              <div class="bord-bot"></div>
                          </div>
                      </div>
                  </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6 wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="faq-cont">
                                <div id="accordion">
                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="fa fa-arrow-right"></i>
                                          旺旺通會員規章
                                          <i class="fa fa-usd text-right"aria-hidden="true"></i>
                                          <!-- <img src="img/flame.png" alt=""> -->

                                        </button>
                                      </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">
                                        <a href="file/member/regulations.pdf" target="_blank">旺旺通會員規章</a>

                                        <!-- Because there is no third-party intermediary, Bitcoin transactions are purported to be substantially less expensive for users than those using traditional payments systems such as Paypal and credit cards, which charge merchants significant fees for their role as a trusted third-party intermediary to validate electronic transactions. In addition, Bitcoin sales are nonreversible, which removes the possibility for misuse of consumer charge-backs, which merchants find costly. Merchants would presumably pass at least some of these savings on to the customer. no comprehensive data exist on the size of Bitcoin’s transaction cost advantage. -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6  wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="faq-cont">
                                <div id="accordion">
                                  <div class="card">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="fa fa-arrow-right"></i>
                                          入會申請
                                          <i class="fa fa-usd text-right"></i>
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">
                                        <a href="file/member/process.pdf" target="_blank">會員入會申請流程</a> |
                                        <a href="file/member/application-2.pdf" target="_blank">會員入會申請書</a> |
                                        <a href="https://docs.google.com/forms/d/1Pe-VLXmww_2tYjkd7mV0dY14_0TA-lGB9yWOcY5dmUQ/viewform?edit_requested=true" target="_blank">旺旺通名片訂製</a>
                                        <!-- The dollar is legal tender and by law can be used to extinguish public or private debts. A creditor is required to accept legal tender for the settlement of a debt. At a minimum, the payment of taxes forces U.S. individuals to hold dollars. Arguably, for many, such a government endorsement is comforting and creates a strong underlying demand for the dollar. By contrast, a currency like Bitcoin that is linked to a complex computer program that many do not understand and that operates without accountability to any controlling entity could be an unattractive vehicle for holding wealth for many people. -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          <style media="screen">
            #team{
              background: #e9ecef;
            }
          </style>
          <section id="deviders" class="deviders wow fadeIn" data-wow-delay="0.3s"></section>

        <!-- TEAM ITEM
            =================-->
            <section id="team" class="team">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12 text-center">
                            <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                                <h1>四大主流相關資料下載</h1>
                                <div class="bord-bot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-lg-6 FourBig wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#Master" aria-expanded="false" aria-controls="Master">
                          <div class="faq-cont">
                              <div id="accordion">
                                <div class="card">
                                  <div class="card-header" id="headingMaster">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Master" aria-expanded="false" aria-controls="Master">
                                        <i class="fa fa-arrow-right"></i>
                                        萬事達卡
                                        <i class="fa fa-usd text-right"></i>
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="Master" class="collapse" aria-labelledby="headingMaster" data-parent="#accordion">
                                    <div class="card-body">
                                      <a href="file/four/1萬事達卡/台灣萬事達旺旺通辦事處金流簡報.pdf" target="_blank">萬事達旺旺通辦事處金流簡報</a> |
                                      <a href="file/four/1萬事達卡/ICP_HTL_presentation_2017-Introduction.pdf" target="_blank">萬事達卡簡介</a> |
                                      <a href="file/four/1萬事達卡/hallmark-mastercard申請書範本.pdf" target="_blank">萬事達借記卡申請表(範本)</a> |
                                      <a href="file/four/1萬事達卡/hallmark-mastercard申請書.pdf" target="_blank">萬事達借記卡申請表</a> |
                                      <a href="JavaScript:void(0);" onclick="sw();" target="_blank">卡片樣式</a>
                                      <!-- The dollar is legal tender and by law can be used to extinguish public or private debts. A creditor is required to accept legal tender for the settlement of a debt. At a minimum, the payment of taxes forces U.S. individuals to hold dollars. Arguably, for many, such a government endorsement is comforting and creates a strong underlying demand for the dollar. By contrast, a currency like Bitcoin that is linked to a complex computer program that many do not understand and that operates without accountability to any controlling entity could be an unattractive vehicle for holding wealth for many people. -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-lg-6 FourBig wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#pos" aria-expanded="false" aria-controls="pos">
                          <div class="faq-cont">
                              <div id="accordion">
                                <div class="card">
                                  <div class="card-header" id="headingPos">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pos" aria-expanded="false" aria-controls="pos">
                                        <i class="fa fa-arrow-right"></i>
                                        POS
                                        <i class="fa fa-usd text-right"></i>
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="pos" class="collapse" aria-labelledby="headingPos" data-parent="#accordion">
                                    <div class="card-body">
                                      <a href="file/four/2POS/刷卡機特約商店.pdf" target="_blank">刷卡機特約商店</a> |
                                      <a href="file/four/2POS/旺旺通刷卡機教育訓練.pdf" target="_blank">旺旺通刷卡機教育訓練</a> |
                                      <a href="file/four/2POS/線上金流刷卡系統.pdf" target="_blank">線上金流刷卡系統</a>
                                      <!-- The dollar is legal tender and by law can be used to extinguish public or private debts. A creditor is required to accept legal tender for the settlement of a debt. At a minimum, the payment of taxes forces U.S. individuals to hold dollars. Arguably, for many, such a government endorsement is comforting and creates a strong underlying demand for the dollar. By contrast, a currency like Bitcoin that is linked to a complex computer program that many do not understand and that operates without accountability to any controlling entity could be an unattractive vehicle for holding wealth for many people. -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-lg-6 FourBig wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#financial" aria-expanded="false" aria-controls="financial">
                          <div class="faq-cont">
                              <div id="accordion">
                                <div class="card">
                                  <div class="card-header" id="headingFinancial">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#financial" aria-expanded="false" aria-controls="financial">
                                        <i class="fa fa-arrow-right"></i>
                                        M金融
                                        <i class="fa fa-usd text-right"></i>
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="financial" class="collapse" aria-labelledby="headingFinancial" data-parent="#accordion">
                                    <div class="card-body">
                                      <div id="MFinancial" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                          <li data-target="#MFinancial" data-slide-to="0" class="active"></li>
                                          <li data-target="#MFinancial" data-slide-to="1"></li>
                                          <li data-target="#MFinancial" data-slide-to="2"></li>
                                          <li data-target="#MFinancial" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img class="d-block w-100" src="file/four/M金融/01.jpg" alt="First slide">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="file/four/M金融/02.jpg" alt="Second slide">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="file/four/M金融/03.jpg" alt="Third slide">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="file/four/M金融/04.jpg" alt="Third slide">
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#MFinancial" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#MFinancial" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>
                                      <!-- The dollar is legal tender and by law can be used to extinguish public or private debts. A creditor is required to accept legal tender for the settlement of a debt. At a minimum, the payment of taxes forces U.S. individuals to hold dollars. Arguably, for many, such a government endorsement is comforting and creates a strong underlying demand for the dollar. By contrast, a currency like Bitcoin that is linked to a complex computer program that many do not understand and that operates without accountability to any controlling entity could be an unattractive vehicle for holding wealth for many people. -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-lg-6 FourBig wow fadeInUp" data-wow-delay="0.6s" data-toggle="collapse" data-target="#fire" aria-expanded="false" aria-controls="fire">
                          <div class="faq-cont">
                              <div id="accordion">
                                <div class="card">
                                  <div class="card-header" id="headingFire">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#fire" aria-expanded="false" aria-controls="fire">
                                        <i class="fa fa-arrow-right"></i>
                                        火幣
                                        <i class="fa fa-usd text-right"></i>
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="fire" class="collapse" aria-labelledby="headingFire" data-parent="#accordion">
                                    <div class="card-body">
                                      <a href="file/four/火幣/火幣操作手冊A4.pdf" target="_blank">火幣操作手冊</a> |
                                      <a href="file/four/火幣/免費註冊區塊鍊火幣.pdf" target="_blank">免費註冊區塊鍊火幣</a> |
                                      <a href="javascript:void(0);" onclick="Sw_Application();">火幣註冊申請表</a>
                                      <!-- The dollar is legal tender and by law can be used to extinguish public or private debts. A creditor is required to accept legal tender for the settlement of a debt. At a minimum, the payment of taxes forces U.S. individuals to hold dollars. Arguably, for many, such a government endorsement is comforting and creates a strong underlying demand for the dollar. By contrast, a currency like Bitcoin that is linked to a complex computer program that many do not understand and that operates without accountability to any controlling entity could be an unattractive vehicle for holding wealth for many people. -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>

                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="our-team-member wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-img">
                                    <img src="img/team/team-1.jpg">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title">Anisha Shah</h3>
                                    <span class="post">Business Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="our-team-member wow fadeInUp" data-wow-delay="0.9s">
                                <div class="team-img">
                                    <img src="img/team/team-2.jpg">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title">Sreyan Rana</h3>
                                    <span class="post">Head of Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="our-team-member wow fadeInUp" data-wow-delay="1.2s">
                                <div class="team-img">
                                    <img src="img/team/team-3.jpg">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title">Depika Singh</h3>
                                    <span class="post">General Counsel</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>

        <!-- TESTIMONIALS
            =================-->
            <!-- <section id="testimonials" class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-2 col-md-8">
                            <div id="testimonial-slider" class="owl-carousel owl-theme">
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="pic">
                                            <img src="img/client/client-1.jpg">
                                        </div>
                                        <h3 class="title">Riya Bugat</h3>
                                        <span class="post">Self Employee</span>
                                    </div>
                                    <p class="description">
                                        Bitcoin does not discriminate against anyone due to their background. Bitcoin will make sure that you get the money through to anything you want. Sometimes, there are laws which prevent you from buying something from a particular country. These kinds of issues come up all the time. Imagine how Bitcoin facilitates lives of rich people with loads of money.
                                    </p>
                                </div>

                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="pic">
                                            <img src="img/client/client-2.jpg">
                                        </div>
                                        <h3 class="title">Ayush Singh</h3>
                                        <span class="post">Web Developer</span>
                                    </div>
                                    <p class="description">
                                        All you need is internet access to search for the record of the Bitcoin history. The users of Bitcoin can easily choose between going public or completely hiding their privacy. This way they can choose the way they like to use this cryptocurrency. You do not need to identify yourself to the Bitcoin protocol. There are no compliance requirements to meet.
                                    </p>
                                </div>

                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="pic">
                                            <img src="img/client/client-3.jpg">
                                        </div>
                                        <h3 class="title">Bens Gupta</h3>
                                        <span class="post">Software Engineer</span>
                                    </div>
                                    <p class="description">
                                        Bitcoin is a truly global currency which does not consider where you live, who you are, and what you do. It is available to everyone who has a potential use for it. The peer-to-peer method ensures that you directly get the money into your account. You do not have to report to any third party or financial institution.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- NEWS
            =================-->
            <!-- <section id="news" class="news">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12 text-center">
                            <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                                <h1>Latest News</h1>
                                <div class="bord-bot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 col-sm-6 desc-comp-news">
                        <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="0.6s">
                          <div class="thumbnail-blogs">
                              <img src="img/news/news-1.jpg" class="img-fluid" alt="...">
                          </div>
                          <h3>Bitcoin is Bright Future in the World of Money</h3>
                          <p class="desc">The Bitcoin cryptocurrency has changed the way we conduct online transactions...</p>
                          <a href="news-description.html"> Learn More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 desc-comp-news">
                        <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="0.9s">
                          <div class="thumbnail-blogs">
                              <img src="img/news/news-2.jpg" class="img-fluid" alt="...">
                          </div>
                          <h3>Trezor is another storage tool for Bitcoins</h3>
                          <p class="desc">Itvis considered as one of the best hardware wallet solutions available...</p>
                          <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 desc-comp-news">
                        <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="1.2s">
                          <div class="thumbnail-blogs">
                              <img src="img/news/news-3.jpg" class="img-fluid" alt="...">
                          </div>
                          <h3>Founded on USB interface Bitcoin</h3>
                          <p class="desc">It is designed in a unique way making it more reliable. When you start... </p>
                          <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 desc-comp-news">
                        <div class="desc-comp-news-cont wow fadeInUp" data-wow-delay="1.5s">
                          <div class="thumbnail-blogs">
                              <img src="img/news/news-4.jpg" class="img-fluid" alt="...">
                          </div>
                          <h3>OpenDime is commonly known as a ‘Bitcoin</h3>
                          <p class="desc">Stick that allows you to spend Bitcoin in a way that regular dollar...</p>
                          <a href="news-description.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="col-md-12 mx-auto text-center mt-4">
                          <a href="news.html"><button class="btn btn-general btn-yellow">View More</button></a>
                      </div>
                    </div>
                </div>
            </section> -->
              <style>
                section#contact{
                  background: white;
                }
              </style>

        <!-- CONTACT FORM
            =================-->
            <section id="contact" class="contact">
              <div class="container">
                <div class="row mb-5">
                  <div class="col-md-12 text-center">
                    <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                      <h1>聯絡我們</h1>
                      <div class="bord-bot"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage"  novalidate>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="請輸入姓名 *" required data-validation-required-message="請輸入您的名字.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="請輸入聯絡信箱 *" required data-validation-required-message="請輸入您的信箱.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input class="form-control" id="phone" type="tel" placeholder="請輸入連絡電話">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" id="message" placeholder="有任何問題歡迎來信 *" required data-validation-required-message="請輸入您的問題."></textarea>
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                          <div id="success"></div>
                          <button id="sendMessageButton" class="btn btn-general btn-white px-5 py-3 text-uppercase" type="submit">送出留言</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>

            <style media="screen">
              .footer .footer-logo img{
                max-height: 10em;
              }
            </style>
        <!-- FOOTER
            =================-->
            <footer>
              <div id="footer" class="footer">
                <div class="container">
                  <div class="row mx-auto">

                    <div class="col-md-3 col-sm-5 col-lg-12 text-center text-white">

                        <h5>主選單</h5>
                        <p style='font-size:15px;'><a href="#page-top" class="js-scroll-trigger text-white">首頁</a> <i class="fa fa-angle-right"></i>
                          <a href="#about" class="js-scroll-trigger text-white">關於旺旺通</a> <i class="fa fa-angle-right"></i>
                          <a href="#news" class="js-scroll-trigger text-white">相關新資訊</a> <i class="fa fa-angle-right"></i>
                          <a href="#services" class="js-scroll-trigger text-white">服務項目</a> <i class="fa fa-angle-right"></i>
                          <a href="#faq" class="js-scroll-trigger text-white">會員專區</a> <i class="fa fa-angle-right"></i>
                          <a href="#team" class="js-scroll-trigger text-white">四大主流專區</a> <i class="fa fa-angle-right"></i>
                          <a href="#contact" class="js-scroll-trigger text-white">聯絡我們</a></p>

                      <ul class="list-unstyled footer-menu">

                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center">
                      <div class="footer-email">
                      </div>
                      <ul class="footer-social mt-4">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div id="footer-bottom">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-warning text-center" style="font-size: 14px;">
                      | <i class="fa fa-map-marker fa-2x"></i>：<a href="https://www.google.com.tw/maps/place/801%E9%AB%98%E9%9B%84%E5%B8%82%E5%89%8D%E9%87%91%E5%8D%80%E4%BA%94%E7%A6%8F%E4%B8%89%E8%B7%AF61%E8%99%9F%E6%A8%93%E4%B9%8B%E4%B8%80/@22.6215786,120.2948242,17z/data=!3m1!4b1!4m5!3m4!1s0x346e047e04ae2a35:0xeb0469001f5e66ec!8m2!3d22.6215737!4d120.2970129?hl=zh-TW" class="js-scroll-trigger text-warning" target="_blank">高雄市前金區五福三路61號14樓之一</a> |
                      <i class="fa fa-envelope-o fa-2x"></i>：wanwanton958@gmail.com |
                      <i class="fa fa-phone fa-2x"></i>：07-958-0017 |
                      <i class="fa fa-fax fa-2x"></i>：07-958-0917 |
                    </div>

                    <div id="footer-copyrights" class="col-lg-12 text-right">
                        <p class="text-white">Copyright &copy; 2018 Wanwanton International Co.,Ltd. . All Rights Reserved. | 旺旺通國際有限公司版權所有</p>
                    </div>

                  </div>
                </div>
              </div>

              <script type="text/javascript">
                // $('.fa fa-envelope-o fa-2x').after().css('color', 'yellow');
              </script>
              <a href="#page-top" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top  js-scroll-trigger hidden-sm hidden-xs" title="home" role="button">
                <i class="fa fa-angle-double-up"></i>
              </a>

            </footer>
            <script type="text/javascript">
              $('.fa fa-envelope-o fa-2x').after(document.createTextNode("Hello"));
            </script>

        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jqBootstrapValidation.min.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/app.js"></script>

        <!-- 彈跳視窗 -->
        <script src="js/sweetalert2.all.js"></script>
        <!-- 彈跳視窗 -->
        <style media="screen">
          .swal2-popup{
            width: 65em;
            /* height: 95em; */
            /* max-height: 100%; */
            background-color:rgba(0, 0, 0, 0.0);
          }
        </style>
        <script type="text/javascript">
        //萬事達卡
        function sw(){
          var card = "<div class='row'><div class='col-lg-6'><h2 style='color: white'>金卡</h2><img src='file/four/1萬事達卡/金卡.jpg' class='img-fluid'></div><div class='col-lg-6'><h2 style='color: white'>黑卡</h2><img src='file/four/1萬事達卡/黑卡.jpg' class='img-fluid'></div></div>";
          swal({
            html: card,
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
            confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
            '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down',
          })
        }
        //萬事達卡

        //火幣授權QR Code
        function fire(){
          var card = "<div class='row'><div class='col-lg-12'><h2 style='color:white'>火幣註冊網</h2></div><div class='col-lg-12'><img src='img/旺旺通授權.png' class='img-fluid'></div></div>";
          swal({
            html: card,
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
            confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
            '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down',
          });
        }
        //火幣授權QR Code


        // 火幣註冊申請表
        function Sw_Application(){
          var card = "<div class='row'><div class='col-lg-6'><h2 style='color:white'>火幣註冊申請表(線上表單)</h2><a href='https://docs.google.com/forms/d/e/1FAIpQLSeCOZmcy6U7XR3A6x3Ks5qC-MoqQub4qrOOBG5ivbuzxRvoxQ/viewform' title='點擊此處，可連至線上表單' target='_blank'><img src='file/four/火幣/Google_QR.jpg' class='img-fluid'></a></div><div class='col-lg-6'><a href='file/four/火幣/Sw_Application.pdf' target='_blank'><h2 style='color:white;'>火幣註冊申請表</h2><img src='file/four/火幣/Sw_Application.jpg' title='點擊此處，可連至申請表下載區' class='img-fluid'></a></div></div>";
          swal({
            html: card,
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
            confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
            '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down',
          });
        }

        // 聊天室
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5b72f592f31d0f771d83c902/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
        })();

        // 聊天室

        //影片彈跳視窗
        swal({
          // title: '<i>HTML</i> <u>example</u>',
          // type: 'info',
          html:
          '<div align="center" class="embed-responsive embed-responsive-16by9"><video autoplay loop class="embed-responsive-item" controls><source src="file/video/video.mp4" type="video/mp4"></video></div>',
          showCloseButton: false,
          showCancelButton: false,
          showConfirmButton: false,
          focusConfirm: false,
        });
        //影片彈跳視窗

        // 縮小時選單使用
        $(document).ready(function() {
          $('#menu_btn').click(function(event) {
            var how = $('#menu_btn').attr('aria-expanded');//用來偵測表單是開啟還是關閉
            if (how == 'true') {
              $("img.header_logo").css('display', 'block');
              $('#mainNav').css('background', 'rgba(0, 0, 0, 0.0)');
              $('img.smallscreen').css('display', 'none');
            }else if(how == 'false'){
              $("img.header_logo").css('display', 'none');
              $('#mainNav').css('background', 'rgba(0, 0, 0, 0.5)');
              $('.smallscreen').css('display', 'block');
              $('.smallscreen').css('max-height', '65px');
            }
          });
          // 點擊link時使用
          $('.nav-link').click(function(event) {
            $("img.header_logo").css('display', 'none');
            $('#mainNav').css('background', 'rgba(0, 0, 0, 0.0)');
            $('img.smallscreen').css('display', 'none');
          });
        });
        //縮小時選單使用
      </script>
        <!-- <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    </body>
</html>
