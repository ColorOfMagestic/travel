<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
    <!-- main -->
    <div class="main">
      <div class="page-wrapper" style="background-image: url(../images/page-wrapper-bg.jpg);">
        <div class="container">
          <div class="page-wrapper-top">
            <div class="row">
              <div class="col-xs-12 col-sm-4 pull-right">
                <div class="sidebar-object-info">
                  <div class="visible-xs">
                    <div class="btn-object-map"><span>Смотреть на карте</span></div>
                  </div>
                  <div class="sidebar-object-map">
                    <div class="close"></div>
                    <div class="object-map" id="objectMap"></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", function (event) {
                        ymaps.ready(function () {
                          var myMap = new ymaps.Map('objectMap', {
                            center: [58.40083, 33.29083],
                            zoom: 9
                          }, {

                          }),

                            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                              hintContent: '',
                              balloonContent: ''
                            }, {
                              // Опции.
                              // Необходимо указать данный тип макета.
                              iconLayout: 'default#image',
                              // Своё изображение иконки метки.
                              iconImageHref: '../images/map-pin.png',
                              // Размеры метки.
                              iconImageSize: [43, 60],
                              // Смещение левого верхнего угла иконки относительно
                              // её "ножки" (точки привязки).
                              iconImageOffset: [-21, -60]
                            });
                          myMap.geoObjects
                            .add(myPlacemark);

                          $(".btn-object-map").on("click", function () {
                            setTimeout(function () {
                              myMap.container.fitToViewport();
                            }, 350);
                          });

                          $(window).resize(function () {

                            myMap.container.fitToViewport();

                          });
                        });


                      });
                    </script>
                  </div>

                  <div class="sidebar-object-descr">
                    <table class="object-info-table">
                      <tbody>
                        <tr>
                          <td class="name">�&nbsp;айон:</td>
                          <td class="val">Окуловский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">10 470 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Город</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">
                  <div class="block-ext-parent">
                    <div class="h2" style="margin-top: 0;">О населенном пункте</div>
                    <div class="block-ext-content">
                      <div class="row">
                        <div class="col-xs-12">
                          <p>
                            Впервые об�&nbsp;Окуловке упоминается в�&nbsp;Писцовой книге Деревской пятины Новгородской
                            земли в�&nbsp;1495 году. С�&nbsp;1851 года�&nbsp;— Окуловка становится станцией Николаевской
                            железной дороги.<br>
                            В�&nbsp;середине XIX века в�&nbsp;д. Парахино на�&nbsp;своей земле в�&nbsp;четырех верстах
                            от�&nbsp;Окуловской станции промышленник <nobr>В. И. Пасбург</nobr> основал писчебумажную
                            фабрику, производившую первоначально оберточную бумагу из�&nbsp;тряпок и�&nbsp;опорков
                            веревочных лаптей. Чуть позже на�&nbsp;месте слияния рек Хоренки и�&nbsp;Перетны возникла
                            Кулотинская фабрика по�&nbsp;производству мешочного полотна, основанная профессором медицины
                            Н. Бардашевичем.
                          </p>
                          <p>
                            Пристанционный поселок Окуловка начал быстро расти. В�&nbsp;кратчайшие сроки был построен
                            небольшой кирпичный завод. В�&nbsp;поселке построили усадьбы и�&nbsp;дома восемь помещиков,
                            пять подрядчиков, двадцать купцов, пять священников, пятнадцать полицейских. Появился
                            купеческий клуб, железнодорожная четырехлетка и�&nbsp;<nobr>церковно-приходская</nobr>
                            школы, коммерческое училище.
                          </p>
                          <p>
                            Были построены 2 церкви Николая Чудотворца и�&nbsp;деревянная церковь Богородицы,
                            перевезенная из�&nbsp;д. Мшенцы, воздвигнуты богадельня, Дом крестьянина. Была построена
                            также и�&nbsp;небольшая земская больница с�&nbsp;одним врачом.
                          </p>
                          <p>
                            Указом Президиума Верховного Совета �&nbsp;СФС�&nbsp; от�&nbsp;12 января 1965 года Окуловке
                            был присвоен статус города, он�&nbsp;был образован в�&nbsp;результате <nobr>
                              формально-административного</nobr> слияния поселков <nobr>Парахино-Поддубье</nobr>
                            и�&nbsp;<nobr>Окуловка-1</nobr>.
                          </p>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="28">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=28"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=28"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=28"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/detskiy-otdykh/?TOWN=28"
                style="background-image:url(images/c41e34c1be106f536c977d72955246a5.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Детский отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=28"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=28"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=28"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=28"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=28"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Окуловке</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/velomarshrut-vodnoe-ozherele/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/65018a4c7cb1d6df145ee61dd8fca60d.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">300�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Активный отдых</li>
                    </ul>
                    <a href="/routes/velomarshrut-vodnoe-ozherele/">
                      <div class="h3"><span>Веломаршрут «Водное ожерелье»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/okulovka-iz-proshlogo-v-nastoyashchee/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/a886b31b383dba4b9769207484b8e71f.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">300�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/okulovka-iz-proshlogo-v-nastoyashchee/">
                      <div class="h3"><span>«Окуловка: из прошлого в настоящее»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/svidanie-v-okulovke-stranitsy-lichnoy-zhizni-i-tvorcheskoy-sudby-i-i-levitana/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/98ecd8ccc285ad6773c5c4d93c0cb1fb.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">200�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/svidanie-v-okulovke-stranitsy-lichnoy-zhizni-i-tvorcheskoy-sudby-i-i-levitana/">
                      <div class="h3"><span>«Свидание в Окуловке» (Страницы личной жизни и творческой судьбы И.И.
                          Левитана)</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа 30 минут</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Окуловке</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/muzykalno-poeticheskiy-festival-dvoryanskoe-gnezdo-2024/"
                style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>28 </span> июн</div>
                    <div class="h3"><span>Межрегиональный музыкально-поэтический фестиваль "Дворянское гнездо"</span>
                    </div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Окуловский р-он, местечко Приволье, территория Кулотинского сельского
                          поселения в приусадебном парке усадьбы Граве</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Окуловке</div>
            <div class="block-ext-content">
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/restoran-relaks/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/eaf7615646fd3eac53fd9dde21ed1d2d.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/restaurants/restoran-relaks/">
                      <div class="h3"><span>�&nbsp;есторан «�&nbsp;елакс»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>�&nbsp;усская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/bistro-relaks/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/43466e7ac48de2a8e05e0990dece5dc8.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/restaurants/bistro-relaks/">
                      <div class="h3"><span>Бистро «�&nbsp;елакс»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>�&nbsp;усская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-karavan/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/970a16291120bdc90890ffa100d5b585.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/restaurants/kafe-karavan/">
                      <div class="h3"><span>Кафе «Караван»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>Узбекская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Окуловке</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/gostevoy-dom-okulovka-lyuks/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b82ea2d01b17e1d694fed8dae5bd6fa7.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/hotels/gostevoy-dom-okulovka-lyuks/">
                      <div class="h3"><span>Гостевой дом «Окуловка Люкс»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостиница</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/gostinitsa-relaks/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/92b984a086f09a83f3d781532215b6f2.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-relaks/">
                      <div class="h3"><span>Гостиница «�&nbsp;елакс»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостиница</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/gostinitsa-ip-aliev-chingiz-aydyn-ogly/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/cf9710373da6ac8af962b501f37d02ec.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Окуловка</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-ip-aliev-chingiz-aydyn-ogly/">
                      <div class="h3"><span>Гостиница ИП Алиев Чингиз Айдын-Оглы</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостиница</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>