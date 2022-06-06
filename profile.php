
<?
    session_start();
    if(!$_SESSION["user"]){
        header("Location: authorization.php");

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


    <title>Личный кабинет</title>
</head>

<body class="body__site " id="body">
    <div class="wrapper" id="app">
        <header class="header" id="header">
            <div class="header__container">
                <div class="header__logo_conteiner">
                    <a class="header__logo" href="index.php"> Личный кабинет </a>
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
                <div class="main-profile-container">
                    <div class="main-profile">
                        <div class="main-profile-photo">
                            <img class="profile-photo-item" src="<?= $_SESSION["user"]["avatar"]?>" width="200px" alt="">
                        </div>
                        <button class="changeUser-btn">Редактировать</button>
                     </div>
                     <div class="main-profile-rigtPanel">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium eos aliquam dolores dolorum doloremque velit assumenda, id reiciendis maiores aperiam neque quisquam error dicta dolorem quam magnam vel, nulla eum non. Ut fugiat nulla odit tempora nisi quos ab similique? Qui expedita suscipit nam, doloremque voluptates dolorum neque voluptatibus nisi fugiat laboriosam! Quibusdam commodi qui, dicta corrupti nobis vitae facilis ea ut? Dicta officiis optio nemo? Explicabo vero nam hic impedit dicta atque exercitationem repudiandae corporis, minima nemo quae dolorum obcaecati at sit expedita iusto, corrupti laborum esse enim dignissimos, provident placeat totam incidunt fugiat? Aspernatur consequuntur quis animi cum iusto molestiae assumenda sint reiciendis, fugit corrupti sequi enim, ratione molestias aut praesentium natus. Odit atque cum rem alias voluptatem repudiandae quisquam repellendus neque porro eaque modi libero quae laboriosam a exercitationem, ad culpa iusto ipsam officia facere consectetur perspiciatis sapiente dignissimos voluptatibus. Inventore similique illum consequatur praesentium, perferendis nisi, labore unde id dolorem dolores nemo distinctio molestias ipsa obcaecati voluptates. Itaque consequuntur officia exercitationem sunt cupiditate assumenda, voluptatum nesciunt dolores deleniti error asperiores pariatur? Atque eaque distinctio laudantium, voluptatem assumenda porro, quod nisi perferendis nobis quia ea quidem voluptatum officia non veniam doloremque eum ipsa praesentium deserunt deleniti? Nesciunt accusamus neque, odio harum deserunt eligendi cupiditate quam rerum voluptatum id aperiam, facilis, possimus totam omnis ea ullam autem officia quaerat at commodi doloremque. Non aut facilis totam. Placeat, id illo omnis quos nisi cum obcaecati? Magnam voluptatem deleniti natus at minus nemo odio, provident hic! Assumenda illo nobis hic mollitia deleniti totam fuga harum, praesentium corrupti quae quisquam quas rerum dignissimos repudiandae omnis atque, labore asperiores beatae commodi officiis, reprehenderit illum! Iste alias sunt aliquid rerum dolores quis. Tempora sint labore, natus perferendis nobis magnam totam consequuntur accusamus pariatur ipsam dolore, voluptatem nesciunt itaque recusandae! Deleniti id, animi error harum totam aspernatur sapiente! Recusandae voluptatum sequi autem placeat. Deleniti inventore, cumque, dolor dicta pariatur nemo saepe enim, laudantium ab reprehenderit temporibus. Modi molestiae veritatis mollitia numquam voluptatum impedit, natus iste facere quas explicabo totam ab tenetur ut nemo officiis praesentium vel temporibus repellendus fugiat debitis. Eaque aperiam dolorem exercitationem delectus tempore. Repudiandae architecto qui laborum ipsa assumenda! In nesciunt nam deleniti ea consequuntur? Quibusdam ipsam voluptate officia odit aperiam amet obcaecati, dolorum earum enim voluptates rem ut facere magni quia cumque libero qui! Rerum officiis impedit explicabo quis quibusdam nam voluptate architecto quos eius expedita eos vero ducimus asperiores nisi, ipsa aut tempora voluptatum totam quisquam sed quasi quod perspiciatis quas inventore. Iste quae commodi quis dolore error tempora labore pariatur dicta ipsam similique quibusdam itaque fuga porro quos necessitatibus architecto nobis, voluptatibus libero. Doloribus temporibus laboriosam voluptatibus, quo voluptatem quasi nisi corrupti quaerat vel accusantium aliquam, quia animi! Aliquam obcaecati temporibus exercitationem veniam molestiae architecto, atque unde cupiditate eius tempora autem totam vel dolore est quod qui, illum praesentium necessitatibus soluta. Esse nostrum porro animi dicta, facere praesentium! Assumenda temporibus incidunt eveniet placeat culpa iste libero molestias quod sunt magnam, dolore accusamus ut voluptate cumque asperiores vitae tenetur qui quaerat. Dolore consectetur illo ut dolores? Nobis sequi fugiat dolorem et dolorum, voluptas pariatur id velit molestias aspernatur autem magnam ea possimus! Alias vel quis mollitia obcaecati dolore. Veritatis saepe totam ex natus perspiciatis quod fugiat asperiores mollitia tempore. Sapiente possimus hic reprehenderit? Perspiciatis nobis tempore repellendus dolorum sit beatae cumque velit facilis asperiores fugiat reiciendis magnam, voluptatum necessitatibus quos est rerum fuga consequatur accusamus corporis soluta quas nisi doloribus reprehenderit sequi. Laboriosam optio corporis porro, nostrum commodi perspiciatis obcaecati quam nihil minus quaerat, delectus excepturi dolorem quod aliquid eligendi vitae impedit, sapiente soluta eos amet repudiandae! Incidunt obcaecati soluta fugit, amet libero aliquam ipsum a. Mollitia quasi odit reiciendis magni suscipit voluptatum? Inventore dolore asperiores blanditiis earum aut facilis tempore accusantium sed. Eius accusamus amet rem hic dignissimos similique unde aliquid, perferendis sapiente delectus aperiam, necessitatibus ipsum quo dolorum soluta voluptatem temporibus perspiciatis nulla nobis nesciunt non facere pariatur iusto. Vero nemo, repellat ut maiores id ipsum esse? Qui praesentium accusantium provident veniam omnis, quae eligendi ab eius facere porro eum expedita aspernatur! Animi, commodi quam nisi sed et quae sapiente molestias, porro repellat veniam dolorem esse odio amet culpa ducimus aliquam consequatur fuga cupiditate omnis aliquid adipisci quidem rerum minus nesciunt? Deleniti optio quaerat officiis iste, consequatur molestias maxime incidunt nostrum quo doloribus. Quidem, facere esse nisi quasi exercitationem repudiandae illo itaque nesciunt perferendis iure accusantium atque id quaerat corporis dolorum tempora enim culpa velit repellat illum impedit nemo soluta pariatur. Vitae maxime eaque iste error nihil quod harum ducimus magnam eius, fugiat magni, sapiente ipsum. Quidem aliquam magni necessitatibus commodi minus magnam odit, quod minima adipisci aliquid sint velit odio amet quaerat quo? Dolore earum exercitationem nesciunt ducimus molestias repellendus perferendis sapiente veniam, ad sunt nulla laborum nostrum est sequi ea officiis ratione libero architecto debitis, dicta doloremque molestiae eaque repudiandae! Ut dicta error laudantium nesciunt, quidem accusantium at commodi nam molestiae? Quo, veritatis? Quisquam error itaque culpa officia alias nemo similique id laboriosam sed earum. Commodi illo, odit mollitia asperiores eveniet fugiat, expedita voluptatem veritatis cumque rem reprehenderit culpa voluptatum dolorum amet nulla deleniti modi impedit consequuntur? Iusto, vero. Doloribus cum excepturi adipisci qui ab totam nesciunt fugit, illo vel est nobis cumque, odio molestias aspernatur debitis ex dignissimos veritatis. Alias vel dignissimos delectus fuga deleniti quo perspiciatis, qui facilis totam in iure itaque quos voluptatem mollitia quam, maxime ullam modi corrupti atque expedita corporis suscipit aperiam amet minus! Iste nobis fuga veniam minus id, ex libero cupiditate alias quo eos placeat mollitia, voluptatibus incidunt asperiores? Nobis magni accusamus consequuntur modi, saepe sapiente, reiciendis veritatis nemo quibusdam corporis quo ea! Cumque eum officiis, quisquam autem expedita quis tempora quam consectetur, eligendi mollitia labore quibusdam necessitatibus perspiciatis, soluta pariatur quaerat quae ipsum sunt dolores quas vero natus error ipsam modi? Quibusdam fuga eaque aperiam ab numquam sunt, minima praesentium unde nostrum, dignissimos adipisci. Iure ad eius fuga numquam reprehenderit impedit dolorum esse ipsa doloremque ea! Voluptatem accusantium animi debitis quod. Provident, cupiditate dolores! Officiis repellat minus illum voluptate laudantium quasi delectus? Laborum accusantium aliquid architecto at. Numquam provident quidem voluptas accusamus sint a tempore, alias deleniti dolor! Beatae ipsum dicta minus, magni esse molestias earum nam hic maxime sed ducimus, blanditiis libero, nisi in. Corporis reiciendis nobis enim. Similique laborum quisquam eius, ratione necessitatibus enim odio repellat error quis possimus expedita facere quod repudiandae dicta unde sit perferendis assumenda natus incidunt libero obcaecati ad voluptate velit dolorem? Nisi ipsum rem error numquam, eius quam accusantium, voluptates in voluptas quia, dolorum inventore recusandae adipisci suscipit blanditiis. Possimus soluta aut debitis ab enim pariatur dolor libero fuga?
                     </div>


                    <p ><?= $_SESSION["user"]["loggin"]?></p>
                    <a href=""><?= $_SESSION["user"]["email"]?></a>
                    <a href=""><?= $_SESSION["user"]["full_name"]?></a>

                    <a  href="includes/logOut.php" class="logOut">выход</a>
                    <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam est architecto nemo ipsum sunt nesciunt numquam, quis soluta officia consectetur tempore assumenda accusantium ad, nam sint beatae vero eligendi libero voluptatum ab, suscipit aliquid rem. Quos iusto provident modi. Soluta perferendis id rem ratione neque error ullam placeat, voluptates sapiente minus quisquam vel nesciunt aspernatur earum eius ipsam cumque. In error vel quam provident impedit maiores. Dolorem quisquam rem alias laboriosam possimus asperiores non illum, rerum perferendis ipsa. Recusandae ratione quasi aspernatur. Recusandae doloremque laboriosam ex unde, temporibus odio minima tempore. A, ut non omnis dolorum sapiente harum eligendi, beatae architecto reprehenderit adipisci iure, sint nulla consequatur nesciunt deleniti saepe tenetur quos? Nam asperiores id, omnis nemo deserunt inventore aliquid beatae praesentium cum iste eius fugit distinctio, ullam enim expedita ex ab minus quod sit consectetur. Laudantium beatae tempora quibusdam velit modi voluptatum? Voluptates aperiam vitae iusto, nam corporis deleniti distinctio quidem obcaecati modi ex numquam vel voluptas veritatis voluptate omnis incidunt? Modi repellendus beatae tempore velit non dolore reiciendis delectus quas iusto nostrum distinctio et magni sunt earum, odio molestias ipsa ducimus alias laborum! Impedit, dolor obcaecati! Eius ratione tenetur molestias nulla vitae sint officia beatae similique ipsum suscipit sit cum eligendi iusto, laudantium natus, dolorem alias doloribus eum. Eveniet minus in velit veniam! Esse tempora nostrum aperiam eveniet molestias quos architecto accusamus nulla ab. Tenetur impedit optio asperiores numquam error rerum excepturi, ipsum delectus eaque praesentium nemo magnam fugiat cum alias minima enim ipsa. Unde, eos. Cum alias voluptates nihil iste facilis. Ipsa sapiente quisquam laboriosam ullam incidunt recusandae ab, beatae suscipit tempore deleniti similique perspiciatis adipisci sed error porro accusantium architecto id nostrum cumque voluptatum! Aliquam, placeat praesentium cum numquam nesciunt reiciendis architecto alias omnis tenetur sequi enim dolorum quidem minima sapiente totam? Officiis nihil itaque nam qui. Sit nulla blanditiis eveniet similique quaerat quod autem, quo atque aliquid deleniti officia voluptas repudiandae aut. In quibusdam quia nihil perspiciatis natus? Pariatur eos quos dignissimos commodi rem reiciendis, eius inventore dolorem, optio eum ipsam iste atque numquam a odio temporibus rerum error illo dolor exercitationem quas earum. Dolores id molestiae eum quod neque accusamus exercitationem magnam error dolore ipsa vitae nesciunt eaque vero illo tenetur doloribus blanditiis cumque corrupti, minus quisquam ea voluptates. Repellendus soluta quos minus placeat voluptates recusandae iste ducimus assumenda error, earum culpa veniam nam expedita dolorem praesentium inventore! Repellendus dicta velit quia, fugit itaque alias consectetur voluptatum cumque sunt minus iure debitis aliquam exercitationem in placeat hic cupiditate explicabo ullam? Quidem minima placeat ipsa incidunt fugiat eum facilis. Ipsum modi asperiores, optio distinctio magnam dolores quis fuga expedita soluta vero pariatur magni, cupiditate saepe aliquid reiciendis molestiae ab praesentium mollitia dolor laborum eos? Facere nobis rem officiis voluptatem? Iste ratione cum aperiam repellendus consequuntur pariatur reprehenderit debitis ullam repudiandae sequi praesentium quo a, accusantium itaque blanditiis dolorem omnis voluptas aspernatur velit eligendi maxime aliquid odit! Provident illum alias beatae sint accusamus error dicta vel corrupti, porro obcaecati quaerat iste debitis veritatis, exercitationem et aspernatur neque incidunt eveniet aperiam quibusdam? Expedita inventore suscipit repellendus dolor, unde eveniet mollitia sint? Aliquid ex quia temporibus, sapiente mollitia nulla at dicta hic recusandae omnis eius nesciunt nobis laudantium sed qui exercitationem facere laborum facilis. Neque in enim voluptatibus qui illum assumenda, quisquam laboriosam dolorum nemo pariatur repellat aliquid minus? Enim mollitia autem, odio impedit animi repellendus numquam, doloremque ullam debitis eligendi labore esse iste illo earum alias nesciunt quod harum minus molestiae. Dolor distinctio sunt aliquid in quas corporis vero iusto accusamus explicabo ab accusantium illum rerum quos deleniti earum quibusdam, officia officiis nisi, nobis, architecto autem porro? Ad dolorem consequuntur, expedita laudantium, porro quibusdam laborum impedit iusto officia quia sint recusandae sit cupiditate itaque minus. Reprehenderit, beatae aperiam! Asperiores, rerum. Tempore placeat, rem omnis culpa quos minus delectus accusantium nesciunt autem modi. Soluta consectetur odio inventore voluptate consequatur vel illum eos odit dolore perspiciatis, voluptas laudantium pariatur quia nostrum esse facilis ullam accusantium dignissimos, asperiores eveniet rerum sequi! Harum voluptatem quis suscipit nemo dignissimos sint ipsa doloremque laudantium aut assumenda doloribus iure voluptatibus quos beatae esse molestiae unde possimus, ducimus nostrum reprehenderit dolores. Debitis id at molestiae obcaecati est a expedita tempora explicabo itaque eius voluptas, incidunt, neque aliquid optio laudantium recusandae, sint provident nulla voluptatem vero. Cumque cupiditate quia nulla tempore repellat atque possimus, ex expedita et labore totam est error, excepturi ducimus ad eius similique aliquid nihil dolorem! Eius dolorem ducimus, in provident autem voluptas, est saepe tenetur, cupiditate aperiam vitae molestiae corrupti officia repellat enim quisquam placeat temporibus facere mollitia dicta possimus. Suscipit accusamus ad itaque quibusdam quam sapiente vitae sed mollitia, similique tempora? Reprehenderit magnam nam accusamus doloremque tempore! Voluptatum consequatur consequuntur ratione officiis amet a cum inventore! Cupiditate nam commodi eos ipsam exercitationem in voluptas facilis quam placeat beatae. Itaque in dicta tempore exercitationem, quisquam soluta, pariatur eligendi tempora quis ut libero non eum nobis excepturi repellendus! Eaque obcaecati at unde pariatur soluta quibusdam ea odio facere assumenda ullam itaque ipsa dolorem omnis, labore adipisci ipsum fuga! Enim animi dolores ex omnis sapiente accusantium alias sequi veritatis dolor harum cum amet optio minima doloribus et unde, fugiat, quis quo vitae ipsum iste. Commodi tenetur voluptates veniam soluta voluptatem dolores sunt nulla ipsam minima non. Quis beatae ea nostrum rerum neque dolore aliquid eos labore minus soluta quam adipisci reiciendis sint eveniet porro recusandae, tempore iure possimus asperiores. Magnam laborum doloribus, voluptate minima in hic suscipit. Velit, eveniet quia ipsam dolores debitis, optio saepe soluta sit cupiditate facilis sint rerum? Porro quis eius ut iste perferendis similique ex, aperiam illo corrupti rerum inventore praesentium expedita libero. Enim harum aut qui ad sequi inventore facere minima amet porro iusto et, ducimus quod, sunt, voluptatibus error magnam! Deleniti quas impedit nisi nam, quisquam vitae tenetur magnam debitis delectus, cupiditate quaerat, amet itaque atque similique officiis. Dolore, sint ea aliquid rem deleniti placeat asperiores ducimus vero inventore necessitatibus voluptas! Quisquam, ipsam. Porro, at laudantium corporis, distinctio, libero odit cumque dolores minus quibusdam nulla illum soluta commodi? -->
                </div>
            

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