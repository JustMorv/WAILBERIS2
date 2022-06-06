<?
    session_start();
    if($_SESSION["user"]){
        header("Location: ../profile.php");

    }
?>
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


    <title>Регистрация</title>
</head>

<body class="body__site " id="body">
    <div class="wrapper" id="app">
        <header class="header" id="header">
            <div class="header__container">
                <div class="header__logo_conteiner">
                    <a class="header__logo mx-auto" href="index.html" style="margin-bottom: 20px;"> Регистрация </a>
                    <!-- <section class="header_logo-right">
                        <div class="header-accout">
                            <a href="" class="header-accout-user">
                            <i class="fa-solid fa-user"></i>
                             <p>Ввойти</p>
                             </a>
                         </div>
                         <div class="header-basket">
                             <a href="" class="header-basket-item"> 
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <p>Корзина</p>
                            </a>
                         </div>
                    </section> -->
                </div>
                <!-- <div class="header-content">
                    <div class="hamburger-menu">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" for="menu__toggle" >
                            <span></span>
                            <span></span>
                            <span></span>
                            <span>&times;</span>

                        </label>
                        <ul class="accordion">
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
                </div> -->
             
            </div>

        </header>
        <main class="main">
            <div class="main__container">
               <!-- Slider main container -->
                <div class="main_Authorization">
                    <form  class="registerForm">
                        <label for="фио"> фио</label>
                        <input type="text" name="regFullName" placeholder="Введите Полное имя">

                        <label for="regLoggin">Логин </label>
                        <input type="text" name="regLoggin" placeholder="Введите Логин">

                        <label for="email"> Email</label>
                        <input type="email" name="regEmaill" placeholder="Введите emaill-адресс">

                        <label for="password"> Пороль</label>
                        <input type="password" name="regPassword" placeholder="Введите Пороль">

                        <label for="password-accept"> Подтверждение пороля</label>
                        <input type="password" name="regPasswordAccept"placeholder="Введите повторный Пороль">

                        <label for="avatar-user" class="avatar-user" >
                             Избражение аватара <br>
                             <input type="file" name="regAvatar">
                        </label>
                        
                        <button type="submit" class="register-btn">зарегистририроваться</button>
                        <p> У вас есть аккаунт? <a href="authorization.html"> Авторизация</a></p>
                        <br>
                        <p class="msg msgNone">Lorem ipsum dolor  necessitatibus!</p>
                    </form>
                </div>
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
                                <img src="img/slider/top.svg" alt="">
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
        <!-- <script src="js/plagins/smooth/smoth.js" defer></script>     -->
        
        <!----------------- AOS ------------------->
        <script src="js/plagins/aos/aos.js" defer></script>

        <!----------------- jquery ------------------->
        <script src="js/jquery/jquery-3.6.0.min.js" defer></script>

        <!----------------- Accardion  ------------------->
        <script src="js/plagins/accardion/accardion.js" defer></script>   
         
            
        <script src="js/index.js" defer></script>
</body>

</html>