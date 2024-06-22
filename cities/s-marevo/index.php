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
                            center: [57.31461, 32.08045],
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
                          <td class="val">Марёвский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">2 629 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Село</td>
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
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/e39eedc6539bc8557f894a5d854addef.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Село Марёво является административным центром Марёвского сельского поселения
                              и�&nbsp;Марёвского муниципального округа Новгородской области. �&nbsp;асположен
                              на�&nbsp;реке Марёвка, автодороге Холм�&nbsp;— Демянск. С�&nbsp;областным центром
                              г.�&nbsp;Великий Новгород с. Марёво связано дорогой общего назначения. �&nbsp;асстояние
                              до�&nbsp;ближайшей железнодорожной станции�&nbsp;— Лычково (Демянский район)�&nbsp;—
                              94�&nbsp;км.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/d84e0cca6ebde8a15c60d476780f4866.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Марёво является древним поселением на�&nbsp;территории Новгородской области. Некоторые
                              краеведы полагают, что Марёвский погост был основан еще в�&nbsp;947 году, когда киевская
                              княгиня Ольга побывала в�&nbsp;этих местах, чтобы навести порядок во�&nbsp;взимании дани
                              с�&nbsp;подвластных Киеву территорий. Именно она разделила землю на�&nbsp;погосты.
                            </p>
                            <p>
                              Марёво�&nbsp;— это название впервые встречается в�&nbsp;летописях, повествующих
                              о�&nbsp;ХII веке. В�&nbsp;списке городов дальних и�&nbsp;ближних, составленному
                              в�&nbsp;ХV�&nbsp;веке перечислены 35 новгородских и�&nbsp;псковских городов: среди них
                              Демяна, Велиль, Морёва.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/837cd50498918388faaf79220f34611a.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;новгородских писцовых книгах, в�&nbsp;части, относящейся к�&nbsp;описи Деревской
                              пятины, за�&nbsp;1495 год есть новгородская волость Морёва. Впервые Марёво упоминается
                              в�&nbsp;XIII веке как волость великого князя Морёва. Волость делилась на�&nbsp;10
                              десятков, в�&nbsp;которых было в�&nbsp;среднем по�&nbsp;20 деревень. Всего в�&nbsp;волости
                              было 209 деревень, в�&nbsp;которых насчитывалось 314 дворов и�&nbsp;734 оброчных
                              крестьянина.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/fac38ffd288cbb06a248602b203f3f27.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Волость была довольно богатая. Жители занимались кузнечным делом, славились пушным
                              промыслом и�&nbsp;сбором меда диких пчел. Но�&nbsp;места эти были довольно глухими,
                              лесными, болотистыми. Об�&nbsp;этом говорят и�&nbsp;нынешние названия�&nbsp;— Заборовье,
                              деревня Красный Бор, осин хутор и�&nbsp;др.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="intext-pic-descr">
                            <p>
                              Так как земля на�&nbsp;�&nbsp;уси была главным богатством, ее�&nbsp;часто переписывали,
                              учитывая все возможности для увеличения сбора дани. Московские писцы провели опись волости
                              Морёва в�&nbsp;1495 году. Центром волости был погост Морёва, со�&nbsp;временем ставший
                              Марёвом.
                            </p>
                            <p>
                              В�&nbsp;конце ХV�&nbsp;века Морёво подвергалось неоднократному нападению литовских войск,
                              а�&nbsp;в�&nbsp;1612–1617 году находилось под <nobr>литовско-шведской</nobr> оккупацией.
                              По�&nbsp;дозору от�&nbsp;1620 года волость Морева была почти пуста и�&nbsp;жильцов
                              в�&nbsp;ней не�&nbsp;было. Они стали возвращаться из�&nbsp;Московских мест
                              в�&nbsp;1620–1622 годах.
                            </p>
                            <p>
                              Марёвская волость известна и�&nbsp;в�&nbsp;1678, и�&nbsp;1710 годах. С�&nbsp;1702 года
                              территория входила в�&nbsp;состав Ингерманландской губернии, c�&nbsp;1727 года
                              в�&nbsp;состав Новгородской губернии. С�&nbsp;XIX века волость стала называться
                              Моисеевской и�&nbsp;входила в�&nbsp;Демянский уезд.
                            </p>
                            <p>
                              Центральное положение в�&nbsp;крае занимала типичная здесь Моисеевская волость,
                              с�&nbsp;центром в�&nbsp;с. Морёва. В�&nbsp;дореформенный период в�&nbsp;волости в�&nbsp;72
                              деревнях проживало 1477 крепостных крестьянина мужского пола. Они принадлежали 31
                              владельцу. Состоятельность помещиков колебалась от�&nbsp;2 до�&nbsp;737 душ.
                            </p>
                            <p>
                              После реформы 1861 года в�&nbsp;Марёвской деревне произошли значительные изменения:
                              крестьяне в�&nbsp;быту стали расторопнее, образованнее, чаще отлучались из�&nbsp;деревни
                              на�&nbsp;заработки в�&nbsp;Петербург и�&nbsp;другие города.
                            </p>
                            <p>
                              Село Марёво являлось центром Моисеевской волости Демянского уезда. �&nbsp;аскинулось оно
                              на�&nbsp;дороге <nobr>Демянск-Холм</nobr>. В�&nbsp;1882 году в�&nbsp;границах Велильской,
                              Моисеевской и�&nbsp;Молвотицкой волостей было 347 деревень и�&nbsp;проживало 18 тысяч
                              человек. Частная собственность, нажива, личная выгода, спекулятивная торговля были
                              движущей силой тогдашней деревни.
                            </p>
                            <p>
                              Населенные пункты района, в�&nbsp;том числе и�&nbsp;село Марёво, очень сильно пострадали
                              во�&nbsp;время Демянской операции в�&nbsp;Великую Отечественную войну.
                            </p>
                            <p>
                              Указом Президиума Верховного Совета �&nbsp;СФС�&nbsp; от�&nbsp;19 февраля 1944 года
                              районный центр Молвотицкого района перенесён из�&nbsp;села Молвотицы в�&nbsp;село Марёво.
                              С�&nbsp;5 июля 1944 года район входит в�&nbsp;Новгородскую область. В�&nbsp;1963 году
                              Молвотицкий район был упразднён, а�&nbsp;территория вошла в�&nbsp;состав Демянского
                              сельского района.
                            </p>
                            <p>
                              1968 год�&nbsp;— открылась музыкальная школа в�&nbsp;с. Марёво.
                            </p>
                            <p>
                              1972�&nbsp;— открыты рейсы самолета <nobr>ЯК-40</nobr>, по�&nbsp;маршруту <nobr>
                                Марёво-Ленинград</nobr>.
                            </p>
                            <p>
                              В�&nbsp;1975 году была открыта гостиница со�&nbsp;столовой в�&nbsp;с. Марёво.
                              В�&nbsp;следующем году введена в�&nbsp;строй Марёвская АТС и�&nbsp;первых зрителей принял
                              кинотеатр «Победа».
                            </p>
                            <p>
                              В�&nbsp;наши дни село Марёво приобрело черты поселка городского типа. Вместе с�&nbsp;тем
                              в�&nbsp;застройке села сохраняются и�&nbsp;исторические памятники, в�&nbsp;частности,
                              церковь Успения Пресвятой Богородицы (19 в.).
                            </p>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="36">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=36"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=36"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=36"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=36"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=36"
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
            <div class="h2" style="margin-top: 0;">Маршруты по Марёво</div>
            <div class="block-ext-content">
              <h3><a href="https://novgorod.travel/routes/ekskursiya-po-selu-maryevo-/">Экскурсия по селу Марёво</a><a
                  href="https://novgorod.travel/routes/ekskursiya-po-selu-maryevo-/"></a></h3>
              <div>
                Маршрут позволит туристам познакомиться с историей Марёвского края начиная с ХII века и проследить его
                путь развития до настоящего времени.<br>
              </div>
              <div>
                <br>
              </div>
              <div>
                Продолжительность: 1 день<br>
              </div>
              <div>
                <br>
              </div>
              <div>
                Объекты маршрута:<br>
                <ul>
                  <li>Муниципальное учреждение культуры «Централизованная библиотечная система»;</li>
                  <li>Церковь Успения Пресвятой Богородицы;</li>
                  <li>Муниципальное учреждение культуры «Музей краеведения»;</li>
                  <li>«Дом народного творчества» (ткацкая мастерская).</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/ekskursiya-po-selu-maryevo-/">
                  <div class="object-tmb-pic" style="background-image: url();">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/ekskursiya-po-selu-maryevo-/">
                      <div class="h3"><span>Экскурсия по селу Марёво </span></div>
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
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Марёво</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/den-maryevskogo-okruga/" style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>29 </span> июн</div>
                    <div class="h3"><span>День Марёвского округа</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Новгородская область, с. Марёво, стадион</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Марёво</div>
            <div class="block-ext-content">
              <div>
                <h3><a href="https://novgorod.travel/restaurants/pitstseriya-v-s-maryevo/">Пиццерия в с. Марёво</a></h3>
              </div>
              <div>
                <br>
              </div>
              <div>
                Пиццерия располагается на рыночной площади с. Марёво в шаговой доступности от гостиницы «Ивушка».
              </div>
              Гостям и жителям села предлагается большой выбор блюд русской и дагестанской кухни. <br>
              <div>
                <br>
              </div>
              <div>
                В уютном зале пиццерии можно с комфортом расположиться, покушать и послушать приятную музыку.
              </div>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/pitstseriya-v-s-maryevo/">
                  <div class="object-tmb-pic" style="background-image: url();">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Марёво</a></li>
                    </ul>
                    <a href="/restaurants/pitstseriya-v-s-maryevo/">
                      <div class="h3"><span>Пиццерия в с. Марёво</span></div>
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
            </div>
          </div>





        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>