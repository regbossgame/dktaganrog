<!doctype html>
<html class="no-js" lang="ru">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Магазин «Дом кровли» - Лучшие цены! Металлочерепица в Таганроге недорого. Купить кровлю в Таганроге. Кровля в Таганроге! Купить, монтаж, продажа! </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="./img/Title.png" />
        <!--<link rel="manifest" href="site.webmanifest">-->
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="preload" href="./img/1920x1080/01.jpg" as="image">
        <link rel="preload" href="./img/1920x1080/02.jpg" as="image">
       <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">
       <!--  <link rel="stylesheet" href="./Bootstrap.css">-->
        <style>
        @media screen and (min-width: 800px) {
          .header_links {height: auto !important;}
        }
            .iframe_expand {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
            }

            .iframe_wrap {
                overflow: hidden;
                height: 0;
            }
            .iframe_close_show {
                position: fixed;
                right: 0;
                top: 0;
                width: 50px;
                height: 50px;
                z-index: 2000;
            }
            @media screen and (min-width: 650px){
                .iframe_wrap {
                    height: auto;
                }
                .iframe_toggle {
                    display: none !important;
                }
            }
        </style>

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header class="header">
                <div style="position: absolute; background: #131313; opacity: 0.5; width: 100%; height: 100%;"></div>
                <nav class="header_nav_main">
                    <div class="wrap header_nav">
                        <a href="{{route('Home')}}" class="logo"><img src="./img/logo.png" alt=""></a>
                        <div class="header_links">
                            <a href="#" class="header_link header_links-active">Главная</a>
                            <a href="{{route('Products')}}" class="header_link">Каталог</a>
                            <a href="#" class="header_link" id="contact_link">Контакты</a>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  class="nav_expand"><path style="fill: black !important;" d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>

                     </div>
                </nav>
            
			<script src="./js/nav.js"></script>
            <div class="wrap header_info-wrap">

                <div class="header_info text">
                    <h1 class="header_info_title">дом кровли</h1>
                    <div class="header_info_text">
                        Официальный дилер компании <img src="{{asset('./img/Showcase.png')}}" alt="" style="max-width: 100px;">.
                    </div>
                    <a href="{{route('Products')}}" class="header_info_button">
                        Узнать больше
                    </a>
                </div>
	
              
         
              
            </div>
        </header>
        <div class="wrap">
            <section style="max-width: 600px; text-align: left; margin-top: 70px;">
                <h2>{{$field['title']}}</h2>
                <div>{{$field['body']}}</div>
				<h2>Виртуальный тур магазина</h2>
                <a class="footer_submit iframe_toggle" style="padding: 15px 20px; display: inline-block">Просмотреть тур.</a>
                <div class="iframe_wrap" style="margin-top: 15px;">
                    <iframe class="iframe_view" src="https://www.google.com/maps/embed?pb=!4v1526988750890!6m8!1m7!1sCAoSLEFGMVFpcE1zUDhoSWN0YTRWRGd2T2F3ZlkxMVlMS3NCNmVuaXhkcFpHYU1J!2m2!1d47.21424660435041!2d38.91213494322715!3f121.36543227514909!4f-2.514093625787993!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </section>
          
        </div>
        <section class="features_bg">
            <div class="wrap">
                <h1 class="features_title">Наш магазин предлагает:</h1>
                <div class="features">

                    <div class="features_item">
                        <h3>Полную комплектацию кровельных систем</h3>
                        В нашем магазине вы можете приобрести все, что необходимо для создания надежной и красивой крыши.
                    </div>
                    <div class="features_item">
                        <h3>Высокое качество поставляемых материалов</h3>
                        Мы сотрудничаем только с проверенными временем поставщиками кровельных материалов.
                    </div>
                    <div class="features_item">
                        <h3>Гарантию лучшей цены</h3>
                        Гибкая система скидок и индивидуальный подход к каждому клиенту гарантирует наилучшую цену.
                    </div>
                    <div class="features_item">
                        <h3>Широкий ассортимент складских позиций.</h3>
                        В наличии поддерживается большое количество материалов, необходимых для начала монтажа кровли.
                    </div>
                    <div class="features_item">
                        <h3>Выезд специалиста</h3>
                        Бесплатный выезд специалиста на объект для замера и расчета кровли и всех комплектующих.
                    </div>
                    <div class="features_item">
                        <h3>Работы  любой сложности</h3>
                        Монтаж кровель любой сложности квалифицированными мастерами.
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="wrap">
            <div class="products">
                <h1>Наша продукция</h1>
                <div class="text"></div>
                <div class="products_columns">
                    @foreach($articles as $article)

                    <div class="products_item">
                        <img src="{{'./img/'.$article->image_url}}" alt="">
                        <h3> {{$article->title}}</h3>
                        <div>{{$article->short}}</div>
                        <a class="products_item_button" href="{{route('Show', ['id'=> $article->id])}}">Читать дальше</a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        </section>
        <section  class="info">
            <div class="wrap">
                <div class="info_cols">
                    <div class="info_col_text info_col">
                        <h1>О нас</h1>
                        Магазин «Дом кровли» специализируется на кровельных и фасадных материалах. Мы представляем все достойные внимания материалы имеющиеся на Российском рынке. Мы не работаем с неизвестными кустарными производителями. Мы выберем с вами оптимальный вариант и сможем объяснить, в чем разница материалов при внешнем сходстве.
                         <h3>Сертификаты</h3>
                        <ul>
                            <li>Сертификат соответствия гидро- и пароизоляционных рулонных материалов</li>
                            <li>Сертификат соответствия продукции Fakro</li>
                        </ul>
                    </div>

                    <div class="info_col_img info_col">
                        <div class="info_col_img_wrap">
                            <img src="./img/970x970/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="showcase">
            <div class="wrap">
                <h1>Наши работы</h1>
                <div class="text">Ознакомьтесь с нашими работами.</div>
                <div class="showcase_overflow">
                    <div class="showcase_grid">
                        @foreach($images as $image)
                        <div class="showcase_grid_item">
                            <img src="{{'./img/'.$image['image_url']}}" alt="">
                        </div>
                    @endforeach
                    </div>
                    <div class="showcase_grid_expand">
                            Показать все...
                        </div>
                </div>
            </div>
        </section>
        <footer class="footer" style="background-image: url('{{asset("/img/1920x1080/02.jpg")}}')" >
            <div class="wrap">
            <div class="footer_cols">
                <div class="footer_col footer_col_info">
                    <div class="iframe_close"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d169.38283453055902!2d38.91172728035398!3d47.21412952168544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3fd42ebbe97a1%3A0x344f1af3fb3bb45a!2z0KHQvNC40YDQvdC-0LLRgdC60LjQuSDQv9C10YAuLCA0MSwg0KLQsNCz0LDQvdGA0L7Qsywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMzQ3OTM1!5e0!3m2!1sru!2sru!4v1523464973165" class="map" allowfullscreen></iframe>
                    <div class="footer_col_info_text">
                       <div> График работы:</div>
                        <div>Понедельник – пятница с <span class="footer_col_info_text-accent">9.00 до 18.00</span></div>
                        <div>Суббота – воскресенье с <span class="footer_col_info_text-accent">9.00 до 14.00</span></div>
                        <div>Наш адрес: <span class="footer_col_info_text-accent">Ростовская обл. г. Таганрог</span></div>
                        <div>Магазин: <span class="footer_col_info_text-accent">Пер. Смирновский 41, тел./факс 8(8634) 615-515</span></div>
                        <div>Магазин-склад: <span class="footer_col_info_text-accent">Мариупольское шоссе 37/2, тел./факс 8(8634) 47-70-70</span></div>
                    </div>

                </div>
                <div class="footer_col footer_col_form">
                    <h1>Свяжитесь с нами</h1>
                     <form action="{{route('Mail')}}" class="footer_form" method="post">

                        <input type="text" placeholder="Имя" name="name" required id="name">
                        <input type="email" placeholder="Почта" name="email" id="email">
                        <input type="text" placeholder="Телефон" name="phone" required id="phone">
                        <textarea name="body" rows="7" id="body"></textarea>
                         <div class="g-recaptcha" data-sitekey="6LcUGmEUAAAAAKsouKGUYHWhhcnirfzt5kPsibJc" style="background: none"></div>
                        <input type="submit" class="footer_submit">
                         {{csrf_field()}}
                    </form>
                </div>
            </div>
            </div>
            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=20794594&from=informer"
               target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/20794594/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="20794594" data-lang="ru" />
            </a>
            <!-- /Yandex.Metrika informer -->
        </footer>
        <script src="./js/main.js"></script>
        <!--<script src="./main.js"></script>-->
    <div class="test">
        <button title="test"></button>
    </div>
    </body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter20794594 = new Ya.Metrika({
                        id:20794594,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <script>
        (function () {
            var toggle = document.querySelector('.iframe_toggle');
            var iframe = document.querySelector('.iframe_view');
            var close = document.querySelector('.iframe_close');
            close.addEventListener('click', function () {
                iframe.classList.remove('iframe_expand');
                close.classList.remove('iframe_close_show');
            });
            toggle.addEventListener('click', function () {
               iframe.classList.add('iframe_expand');
               close.classList.add('iframe_close_show');
            });

        })()
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/20794594" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <!-- /Yandex.Metrika counter -->
</html>
