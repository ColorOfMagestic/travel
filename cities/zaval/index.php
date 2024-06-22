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
                            center: [58.361183, 31.101508],
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
                          <td class="val">Новгородский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">84 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Деревня</td>
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
                      <p>
                        Деревня Завал расположена на правом берегу реки Веряжа Новгородского муниципального района,
                        входит в состав Борковского сельского поселения.
                      </p>
                      <p>
                        Впервые о ней упоминается в 1498 году, когда селение принадлежало новгородскому владыке и
                        насчитывало 13 дворов. К началу 20 века количество человек уже увеличилось до 673, а дворов – до
                        144.
                      </p>
                      <p>
                        В Завале сохранилась ветряная мельница 1824 года. Она была построена местными жителями Михаилом
                        Павловым и его сыном Иваном. Сейчас мельница сохранена как памятник. В 1974 году ее
                        реставрировали. В 1977 в ней открылся небольшой музей по истории края. <br>
                      </p>
                      <p>
                        <img src="images/603c107f93a08.png"><br>
                      </p>
                      <p>
                        В 1934 году в поселении появился колхоз «Красный Завал», где занимались сельским хозяйством и
                        рыбной ловлей.
                      </p>
                      <p>
                        Деревня известна тем, что посреди русла Веряжи археологи нашли раннеславянское городище Сергов
                        Городок. Предположительно оно служило своеобразной крепостью для защиты реки от проникновения со
                        стороны озера Ильмень.
                      </p>
                      <p>
                        �&nbsp;ядом с центральным перекрёстком Завала есть братское захоронение воинов, которые погибли
                        в окрестностях деревни во время Великой Отечественной войны. На металлических табличках
                        памятника указаны имена 62 военнослужащих.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="1408">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=1408"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Завалу</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/doroga-na-melnitsu/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/c0825d3e6ef18ff714f20157ff101037.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">100�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/doroga-na-melnitsu/">
                      <div class="h3"><span>«Дорога на Мельницу»</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>












        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>