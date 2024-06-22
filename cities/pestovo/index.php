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
                            center: [58.59382, 35.80244],
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
                          <td class="val">Пестовский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">15 461 чел </td>
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
                            Город Пестово один из�&nbsp;самых молодых в�&nbsp;Новгородской области, хотя история
                            возникших здесь поселений корнями уходит в�&nbsp;далекое прошлое. Он�&nbsp;является
                            административным центром Пестовского муниципального округа Новгородской области. Город
                            раскинулся на�&nbsp;реке Молога на�&nbsp;восточных отрогах Валдайской возвышенности.
                            Находится на�&nbsp;расстоянии 320�&nbsp;км от�&nbsp;областного центра, г.�&nbsp;Великого
                            Новгорода.
                          </p>
                          <p>
                            Первый поезд прошёл через станцию Пестово в�&nbsp;1919 году. Станция получила своё название
                            от�&nbsp;села �&nbsp;усское Пестово, расположенного в�&nbsp;двух верстах от�&nbsp;неё.
                            Вблизи станции находилась деревня русское Пестово�&nbsp;— старое поселение
                            с�&nbsp;многовековой историей. Отбросив первое слово, вторым назвали новую железнодорожную
                            станцию. О�&nbsp;самом происхождении названия имеется две версии. Более века назад
                            в�&nbsp;здешних нетронутых местах водилось много <nobr>медведей-пестунов</nobr>. Отсюда, как
                            утверждают некоторые старожилы, происходит название поселка. Другое предположение таково.
                            Жители �&nbsp;усского Пестова издавна занимались деревообработкой�&nbsp;— делали ступы
                            и�&nbsp;песты к�&nbsp;ним, чем прославились в�&nbsp;округе. От�&nbsp;слова «пест» якобы
                            и�&nbsp;пошло название деревни.
                          </p>
                          <p>
                            До�&nbsp;постройки ныне действующей железной дороги (ее�&nbsp;строительство началось
                            в�&nbsp;1915 году) главной транспортной артерией, по�&nbsp;которой шли разнообразные грузы
                            для промышленных центров страны, была река Молога, впадающая в�&nbsp;Весьегонское плесо
                            �&nbsp;ыбинского водохранилища. Устюженская верфь поставляла грузовой транспорт.
                          </p>
                          <p>
                            В�&nbsp;суровые годы Великой Отечественной войны Пестово и�&nbsp;его округ стали
                            прифронтовыми. Летом 1941 года из�&nbsp;Ленинграда в�&nbsp;Пестово пришли эшелоны
                            с�&nbsp;оборудованием швейных предприятий. Вместе с�&nbsp;ними прибыли те, кто не�&nbsp;мог
                            с�&nbsp;оружием в�&nbsp;руках громить врага. А�&nbsp;в�&nbsp;марте следующего года швейная
                            фабрика имени 8�&nbsp;марта выпустила первую продукцию для нужд армии.
                          </p>
                          <p>
                            12 января 1965 года Указом Президиума Верховного Совета �&nbsp;СФС�&nbsp; посёлок Пестово
                            стал городом районного подчинения.
                          </p>
                          <p>
                            В�&nbsp;настоящее время (с�&nbsp;22 декабря 2004 года) город Пестово является
                            административным центром Пестовского городского поселения.
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

          <input type="hidden" id="cityId" value="29">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=29"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=29"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Пестово</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/drevnie-volosti-velikogo-novgoroda/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1200�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/drevnie-volosti-velikogo-novgoroda/">
                      <div class="h3"><span>Древние волости Великого Новгорода</span></div>
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
                <a href="/routes/barskaya-usadba-kak-tsentr-khozyaystvennoy-i-sotsialno-kulturnoy-zhizni-kraya/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1200�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/barskaya-usadba-kak-tsentr-khozyaystvennoy-i-sotsialno-kulturnoy-zhizni-kraya/">
                      <div class="h3"><span>Барская усадьба как центр хозяйственной и социально - культурной жизни
                          края</span></div>
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
                <a href="/routes/ekskursiya-po-gorodu-pestovo-s-poseshcheniem-turisticheskikh-obektov/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1200�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Необычные места</li>
                    </ul>
                    <a href="/routes/ekskursiya-po-gorodu-pestovo-s-poseshcheniem-turisticheskikh-obektov/">
                      <div class="h3"><span>Экскурсия по городу Пестово с посещением туристических объектов</span></div>
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
            <div class="h2" style="margin-top: 0;">Где остановиться в Пестово</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/otel-vokrug-sveta/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b79cfaf404c8a2348df42d6bc11f2488.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Пестово</a></li>
                    </ul>
                    <a href="/hotels/otel-vokrug-sveta/">
                      <div class="h3"><span>Отель «Вокруг света»</span></div>
                    </a>
                  </div>
                  <div class="hotel-tmb-rating">
                    <div class="hotel-rating">3</div>
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
                <a href="/hotels/baza-otdykha-rublevo-teterino/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/35f7527243039687a1b53c6693809301.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Пестово</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-rublevo-teterino/">
                      <div class="h3"><span>База отдыха «�&nbsp;ублево-Тетерино»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">База отдыха</div>
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