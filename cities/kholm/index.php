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
                    <div class="btn-object-map"><span>在地图上查看</span></div>
                  </div>
                  <div class="sidebar-object-map">
                    <div class="close"></div>
                    <div class="object-map" id="objectMap"></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", function (event) {
                        ymaps.ready(function () {
                          var myMap = new ymaps.Map('objectMap', {
                            center: [57.14543, 31.1778],
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
                          <td class="name">地区:</td>
                          <td class="val">霍尔姆周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">3 445 人 </td>
                        </tr>
                        <tr>
                          <td class="name">类型::</td>
                          <td class="val">城市</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">
                  <div class="block-ext-parent">
                    <div class="h2" style="margin-top: 0;">关于地方</div>
                    <div class="block-ext-content">
                      <div class="row">
                        <div class="col-xs-12">
                          <p>
                            В�&nbsp;древности по�&nbsp;реке Ловать через территорию современного города проходил водный
                            торговый путь «из�&nbsp;варяг в�&nbsp;греки». В�&nbsp;те�&nbsp;времена в�&nbsp;этом месте
                            строили небольшие суда, торговали льном, телегами, прялками, посудой(деревянной
                            и�&nbsp;глиняной).
                          </p>
                          <p>
                            В�&nbsp;<nobr>XVI–XVII</nobr> веках неоднократно подвергался нападениям литовцев, поляков,
                            шведов. 3 августа 1777 года при рассмотрении вопроса о�&nbsp;переустройстве <nobr>
                              административно-территориального</nobr> деления Новгородской губернии был издан Указ
                            о�&nbsp;переименовании 霍尔姆ского посада в�&nbsp;город 霍尔姆 и�&nbsp;о�&nbsp;причислении его
                            к�&nbsp;Псковской губернии. Так 霍尔姆 стал центром 霍尔姆ского уезда.
                          </p>
                          <p>
                            В�&nbsp;конце XIX века 霍尔姆 был известен кустарными промыслами, в�&nbsp;том числе
                            изготовлением речных барок и�&nbsp;других лодок.
                          </p>
                          <p>
                            Город очень сильно пострадал в�&nbsp;Великую Отечественную войну: в�&nbsp;1942 году
                            он�&nbsp;был местом проведения <nobr>Торопецко-霍尔姆ской</nobr> операции, и�&nbsp;бо́льшая
                            часть исторических зданий города была полностью разрушена.
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

          <input type="hidden" id="cityId" value="30">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=30"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=30"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=30"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=30"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=30"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=30"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по 霍尔姆у</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/dorogami-voinskoy-slavy/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">20�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/dorogami-voinskoy-slavy/">
                      <div class="h3"><span>«Дорогами воинской славы»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/zdes-rodiny-moey-nachalo/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">30�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/zdes-rodiny-moey-nachalo/">
                      <div class="h3"><span>«Здесь родины моей начало»</span></div>
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
                <a href="/routes/memorialnyy-kompleks-na-ploshchadi-pobedy-/">
                  <div class="object-tmb-pic" style="background-image: url();">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/memorialnyy-kompleks-na-ploshchadi-pobedy-/">
                      <div class="h3"><span>Мемориальный комплекс на площади Победы </span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в 霍尔姆е</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/mezhdunarodnyy-konkurs-pesni-serdtsem-prichastny-/"
                style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>28 </span> июн — <span>30 </span> июн</div>
                    <div class="h3"><span>Международный конкурс песни "Сердцем Причастны" </span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Новгородская область, г. 霍尔姆</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>









        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>