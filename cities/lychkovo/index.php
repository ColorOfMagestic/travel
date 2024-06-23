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
                            center: [57.915867, 32.405466],
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
                          <td class="val">杰缅斯克周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">1578 人 </td>
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
                      <div>
                        <p>
                          镇 Лычково находится в 杰缅斯克ом районе на берегу реки Полометь. Этот маленький 镇
                          вошел в историю как место, связанное с трагедией ленинградских детей. Трагедия была на долгие
                          годы вычеркнута из официальной летописи Ленинграда военных лет.
                        </p>
                        <p>
                          В 1941 году 29 июня началась первая волна эвакуации жителей в 杰缅斯克周围, 瓦尔代 и
                          Молвотицкий районы. Многие родители просили сопровождающих спасти их ребенка. К моменту
                          прибытия состава в Старую �&nbsp;уссу уже насчитывалось 12 вагонов-теплушек. В них находилось
                          около 3000 детей, медицинских работников и сопровождающих педагогов.
                        </p>
                        <p>
                          К вечеру 17 июля поезд прибыл на станцию Лычково на первый путь и ожидал еще одну группу детей
                          из 杰缅斯克а. 18 июля прибывшие дети стали размещаться в вагонах. В это время на второй путь
                          прибыл санитарный поезд. Из него выходили раненые красноармейцы, санитарки, чтобы пополнить
                          запасы продовольствия на привокзальном рынке.
                        </p>
                        <p>
                          Вдруг появился самолет, и дальше – грохот, дым, вагоны качаются, всех швыряет из стороны в
                          сторону, вокруг тела, запах паленого молока. Немецкий самолет разбомбил эшелон с детьми, не
                          обращая внимание на красные кресты на крышах вагонов. Удалось спасти немногих. Точное число
                          погибших детей неизвестно, около двух тысяч. Их похоронили в братской могиле вместе с
                          сопровождавшими педагогами и медсестрами в селе Лычково.
                        </p>
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                        Также 镇 ставится своими маршрутами для любителей водного туризма по реке Полометь.
                        Уникальное расположение — на подошве 瓦尔代ской возвышенности — открывает для туристов многие
                        дары природы.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="1365">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=1365"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=1365"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
            </div>
          </div>















        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>