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
                            center: [58.941501, 31.068764],
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
                          <td class="val">诺夫哥罗德区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">2437 人 </td>
                        </tr>
                        <tr>
                          <td class="name">类型::</td>
                          <td class="val">镇</td>
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
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c6967bb29504ca0bee1fa140e0d54aa9.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Посёлок возник в�&nbsp;1939 году путём объединения четырёх поселений торфодобытчиков:
                              Фанерного, Тёсовстроя, Восхода и�&nbsp;Центрального. Объединение произошло в�&nbsp;связи
                              с�&nbsp;увеличением планов добычи торфа.
                            </p>
                            <p>
                              В�&nbsp;послевоенный период <nobr>Тёсово-Нетыльское</nobr> торфопредприятие являлось
                              градообразующим объектом, где работала большая часть населения. Торф отсюда поступал
                              на�&nbsp;электростанции Ленинградской области.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                        Участки торфодобычи были соединены линиями Тёсовской узкоколейной железной дороги. Она пришла
                        в�&nbsp;упадок после распада Советского Союза, когда резко снизились объёмы добычи ресурса.
                        В�&nbsp;<nobr>2000-х</nobr> годах узкоколейка была частично разобрана: из�&nbsp;150 километров
                        линий сохранилось не�&nbsp;более 20.
                      </p>
                      <p>
                        В�&nbsp;2014 году работниками торфопредприятия был создан музей Тёсовской УЖД и�&nbsp;для этого
                        даже восстановили небольшой участок дороги.
                      </p>
                      <p>
                        Сегодня по�&nbsp;узкоколейке можно добраться до�&nbsp;мемориала партизанам, которые действовали
                        в�&nbsp;округе во�&nbsp;время Великой Отечественной войны.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="445">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=445"
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















        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>