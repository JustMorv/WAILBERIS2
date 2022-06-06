<? session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" content='width=1400'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/icon.png" href="img/icon.png" size="30">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="js/plagins/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="js/plagins/aos/aos.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <link rel="stylesheet" href="css/gridTemplete.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">


    <title>Waildberis</title>
</head>

<body class="body__site " id="body">
    <div class="wrapper" id="app">
        <header class="header" id="header">
            <div class="header__container">
                <div class="header__logo_conteiner">
                    <a class="header__logo" href="index.html"> WaildberiS </a>
                    <section class="header_logo-right">
                        <div class="haader-right-center-bottom">
                            <div class="header-basket">
                                <a href="" class="header-basket-item"> 
                                    <i class="fa fa-shopping-cart" aria-hidden="true"><span class="prod-num">0</span></i>
                                    <p>Корзина </p>
                                </a>
                            </div>

                            <div class="header-basket">
                                <a href="" class="header-basket-item"> 
                                    <i class="fa fa-shopping-cart" aria-hidden="true"><span class="prod-num">0</span></i>
                                    <p>Корзина </p>
                                </a>
                            </div>
                         </div>


                        <? 
                            if($_SESSION["user"]){
                               
                                
                                echo'
                                <div class="header-right-center-top">
                                    <div class="header-accout">
                                        <a href="authorization.php" class="header-accout-user-avatar">
                                        <img class="header-user-avatar" src=" '.$_SESSION["user"]["avatar"] .' "/>
                                        </a>
                                    </div>
                                </div>';

                            }
                            else{

                               echo" <div class='header-right-center-top'>
                                    <div class='header-accout'>
                                        <a href='authorization.php' class='header-accout-user' style='margin-top: 50px;'>
                                            <i class='fa-solid fa-user'></i>
                                            <p>Ввойти</p> 
                                        </a>    
                                    </div>
                                </div>";
                            }
                        ?>                         
                    </section>
                </div>
                <div class="header-content">
                    <div class="hamburger-menu">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" for="menu__toggle" >
                            <span></span>
                            <span></span>
                            <span></span>
                            <span>&times;</span>

                        </label>
                            <ul class="accordion">
                                <?
                                    if($_SESSION["user"]){
                                        echo'
                                        <li class="accardion-avatar-photo">
                                            <div class="accardion-avatar-overlay">
                                                <a href="authorization.php">
                                                <img src=" '.$_SESSION["user"]["avatar"] .' "/>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                </a>
                                            </div>
                                        </li>';
                                    }
                                ?>
                                <li class="accordion__item">
                                    <a class="menu__item accordion__link" href="#">Home</a>
                                    <ul class="sub-accordion">
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                    </ul>
                                </li>

                                <li class="accordion__item">
                                    <a class="menu__item accordion__link " href="#">Home</a>
                                    <ul class="sub-accordion">
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                    </ul>
                                </li>
                                <li class="accordion__item">
                                    <a class="menu__item accordion__link" href="#">Home</a>
                                    <ul class="sub-accordion">
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                    </ul>
                                </li>

                                <li class="accordion__item">
                                    <a class="menu__item accordion__link " href="#">Home</a>
                                    <ul class="sub-accordion">
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                        <li class="sub-accordion-item">link1</li>
                                    </ul>
                                </li>
                            </ul>
                       
                    </div>   
                    <div class="header-search">
                        <div class="header-search-content">
                            <input type="search">
                        </div>
                    </div>  
                </div>
             
            </div>

        </header>
        <main class="main">
            <div class="main__container">
               <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide swiper-item-1">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis est quos doloremque dolorem odit! Inventore iste quasi natus, perspiciatis rerum rem, doloremque numquam temporibus eum soluta distinctio ullam laudantium atque.</p>
                        </div>
                        <div class="swiper-slide swiper-item-2">
                        </div>
                        <div class="swiper-slide swiper-item-3">
                        </div>
                        <div class="swiper-slide swiper-item-4">
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>



                  <section class="main-container-content">

                    
                    <section class="special-offers container pt-5 pb-4">
                        <div class="row mb-4">
                            <div class="col-xl-6" data-aos="fade-right" data-aos-once="true">
                                <div class="card card-1 ">
                                    <h3 class="card-title">Fashion Month Ready in Capital Shop</h3>
                                    <p class="card-text">Bags & Acsessories & Lingerie & Sportswear & Beauty & Swimwear</p>
                                    <button class="button show-acsessuaries scroll-link">
                                        <span class="button-text">View all</span>
                                    </button>
                                </div>
                
                            </div>
                
                            <div class="col-xl-6">
                                <div class="card card-2 mb-4" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
                                    <h3 class="card-title text-light">Catch the Sun: Spring Break Styles From $5.99</h3>
                                    <p class="card-text text-light">Sweaters & Hoodies & Puffer Jackets & Coats and Jackets & Knit</p>
                                    <button class="button show-clothing scroll-link ">
                                        <span class="button-text">View all</span>
                                    </button>
                                </div>
                
                            </div>

                            <div class="col-xl-9 col-lg-6 mb-4">
                                <div class="card card-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                                    <h3 class="card-title large" >Poplin Top <br>With Sleeve Bow</h3>
                                    <p class="card-text large">Poplin top with roll neckline, long sleeves</p>
                                    <button class="button add-to-cart" data-id="002">
                                        <span class="button-price">$129</span>
                                        <span class="button-text">Shop now</span>
                                    </button>
                                </div>
                
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-4" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
                                    <h3 class="card-title card-title-4 text-light mw-160">Printed Shirt with a Bow</h3>
                                    <p class="card-text text-light">Pink/Sky Blue/Yellow</p>
                                    <button class="button add-to-cart button-four" data-id="009">
                                        <span class="button-price">$119</span>
                                        <span class="button-text">Shop now</span>
                                    </button>
                                </div>
                
                            </div>
                
                        </div>
                 
                    </section>
              

                  
                    <section class="product-hits--container">
                        <div class="product-hits-title">
                            <p>Хиты продаж</p>
                        </div>
                        <div class="product-hits">

                        </div>
                    </section>
                 

                    <section class="main-article">
                        <div class="main-article-content" >
                            <div class="main-article-item">
                                <a href="#" class="main-article-link">
                                    <img src="img/article/$_1.jpg" alt="">
                                    <p class="main-article-text main-article-left">Мужские рубашки</p>
                                </a>
                            </div>
                            <div class="main-article-item" >
                              <a href="#" class="main-article-link" >
                                  <img src="img/article/$_2.jpg" alt="">
                                  <p class="main-article-text main-article-right">Женские платья</p>
                              </a>
                            </div>
                        </div>
                    </section>

                  
                                       
                     
               

             <!-- main__content -->

            </div>

        </main>
         <footer class="footer" id="footer">

            <div class="footer__content">

                <div class="footer__rows">
                     <nav class="footer__menu">
                        <ul class="footer__link">
                            <li class="footer__item">
                                <a href="">shop</a>
                            </li>
                            <li class="footer__item">
                                <a href="">About</a>
                            </li>
                            <li class="footer__item">
                                <a href="">Contacts</a>
                            </li>
                            <li class="footer__item">
                                <a href="">Delivery </a>
                            </li>
                        </ul>
                    </nav> 
                    <div class="siteContacts">
                        <span class="footer__text">Follow Us</span>
                        <span class="footer__socials">
                            <a href="" class="footer__socials-link">
                                <i class="fa fa-vk" aria-hidden="true"></i>
                            </a>
                            <a href="" class="footer__socials-link">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a href="" class="footer__socials-link">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="" class="footer__socials-link">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                    <div class="footer__top">
                        <div class="footer__top-link">
                            <a href="#header">
                                <span>Top</span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="hr">
                <div class="footer__butoom">
                    <div class="footer__rows-battom">
                        <div class="footer__butoom-item footer__butoom-left">
                            <h3>Интернет магазин</h3>
                            <ul class="footer_list">
                                <li class="footer_list-item"><a href="about_us.html"> О нас</a></li>
                                <li class="footer_list-item"><a href="article.html"> Статьи</a></li>
                                <li class="footer_list-item"><a href="pay.html"> Доставка и оплата</a></li>
                                <li class="footer_list-item"><a href=""> Помощь </a></li>
                            </ul>
                            <hr>
                        </div>
                        <div class="footer__butoom-item footer__butoom-center">
                            <div class="butoom__center-content">
                                <h3>ПОДПИШИТЕСЬ</h3>
                                <span> Узнавайте о новых акциях и предложениях</span>
                                <div class="footer__butoom-email">
                                    <input type="email" name="emaill" id="" placeholder="Ваша электронная почта">
                                </div>
                                <button>ПОДПИСАТЬСЯ</button>
                            </div>
                        </div>
                        <div class="footer__butoom-item footer__butoom-right">
                            <h3>Католог</h3>
                            <ul class="footer_list">
                                <li><a href="" class="navigation_item" data-field="category">Wi-Fi Modem</a></li>
                                <li><a href="" class="navigation_item" data-field="category">Wi-Fi Router</a></li>
                                <li><a href="" class="navigation_item" data-field="category">Источники питания</a></li>
                                <li><a href="" class="navigation_item" data-field="category">Сервера</a></li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
      



        <!----------------- Swiper ------------------->
        <script src="js/plagins/swiper/swiper-bundle.min.js" defer></script>
        <script src="js/plagins/swiper/index_Sweper.js" defer></script>

        <!----------------- Modal ------------------->
        <script src="js/plagins/modal/modal.js" defer></script>

        <!----------------- HeaderFixed ------------------->
        <script src="js/plagins/smooth/smoth.js" defer></script>    
        
        <!----------------- AOS ------------------->
        <script src="js/plagins/aos/aos.js" defer></script>

        <!----------------- jquery ------------------->
        <script src="js/jquery/jquery-3.6.0.min.js" defer></script>s

        <!----------------- Accardion  ------------------->
        <script src="js/plagins/accardion/accardion.js" defer></script>   
        

            
        <script src="js/index.js" defer></script>


</body>

</html>