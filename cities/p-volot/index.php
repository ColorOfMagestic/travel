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
                            center: [57.93816, 30.6858],
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
                          <td class="val">Волотовский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">2 547 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Поселок</td>
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
                            Волотовский муниципальный округ — земля с�&nbsp;древней историей, традициями
                            и�&nbsp;обычаями. �&nbsp;айон расположен в�&nbsp;<nobr>юго-западной</nobr> части
                            Новгородской области на�&nbsp;водоразделе трёх групп рек Ильменского бассейна: Псижы
                            и�&nbsp;Переходы, непосредственно впадающих в�&nbsp;озеро Ильмень; Снежи и�&nbsp;Каменки,
                            впадающих в�&nbsp;реку Полисть; Северки и�&nbsp;Колоши, впадающих в�&nbsp;реку Шелонь.
                          </p>
                          <p>
                            В�&nbsp;южной части МО недалеко от�&nbsp;озера Должинское существовало поселение Кривичи,
                            население которого, вероятнее всего, составляли представители племени «кривичей», миграция
                            которых шла из�&nbsp;районов Белоруссии и�&nbsp;Украины.
                          </p>
                          <p>
                            Всего�&nbsp;же на�&nbsp;территории округа сохранилось около 40 археологических памятников,
                            имеющих многовековую, а�&nbsp;возможно и�&nbsp;тысячелетнюю историю.
                          </p>
                          <p>
                            Основным занятием населения в�&nbsp;то�&nbsp;время были рыболовство и�&nbsp;земледелие.
                            Почвы в�&nbsp;значительной степени пригодны для выращивания культурных растений, что
                            поселенцы заметили давно.<br>
                            У�&nbsp;деревни, станции и�&nbsp;села с�&nbsp;одним названием Волот активно развивалось
                            льноводство, в�&nbsp;связи с�&nbsp;этим часто происхождение названия центра Волот связывают,
                            со�&nbsp;словом «волоть»�&nbsp;— нить, волокно. Но�&nbsp;допустимы и�&nbsp;другие версии
                            происхождения этого имени.
                          </p>
                          <p>
                            Окончание в�&nbsp;названии Волот твердое и�&nbsp;даже используется форма «Волоты»,
                            (великаны, могучие, рослые), что свидетельствует о�&nbsp;связи с�&nbsp;древними богатырями.
                            В�&nbsp;Волоте могла исчезнуть последняя из�&nbsp;общин этого племени.
                          </p>
                          <p>
                            Волотовский муниципальный округ впервые, как <nobr>административно-территориальная</nobr>
                            единица был образован в�&nbsp;1927 году. В�&nbsp;нынешних границах�&nbsp; восстановлен
                            в�&nbsp;1965 году.
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

          <input type="hidden" id="cityId" value="32">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=32"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=32"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=32"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=32"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Волоту</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/voenno-patrioticheskiy-marshrut-tsvety-k-obelisku/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b15d14d17c972aac729e736d06a0649b.JPG);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">150�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/voenno-patrioticheskiy-marshrut-tsvety-k-obelisku/">
                      <div class="h3"><span>Цветы к обелиску</span></div>
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
                <a href="/routes/gorodu-kamney/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/ae529ba12f10651c006fdcd7dc49b412.jpg);">
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
                      <li>Природа</li>
                    </ul>
                    <a href="/routes/gorodu-kamney/">
                      <div class="h3"><span>«Путешествие к «Городу камней» и в «Музей Сказки»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">3 часа 30 минут</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/gorodu-kamney-2/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/a896af7900484469e328cd3de5a44dc7.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">250�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Детский отдых</li>
                    </ul>
                    <a href="/routes/gorodu-kamney-2/">
                      <div class="h3"><span>«Путешествие к «Городу камней»</span></div>
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
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Волоте</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/mezhrayonnyy-festival-folklornyy-prazdnik-solntsa-2024/"
                style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>29 </span> июн</div>
                    <div class="h3"><span>Межрайонный фестиваль "Фольклорный праздник Солнца"</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Волотовский район, д. Камень, на территории памятника природы регионального
                          значения "Валун у д. Камень"</div>
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