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
                            center: [58.677392, 34.11691],
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
                          <td class="val">博罗维奇区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">29 人 </td>
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
                      <p>
                        镇 Сопины находится в Боровичской районе на восточном берегу Сопинского озера. В 16 веке у
                        его берегов был Богородицкий погост и небольшой Никольский монастырь с одним храмом во имя
                        Святого Николая Чудотворца. И служебными постройками. В 18 веке Никольский монастырь был
                        упразднен. На его месте была построена часовня.
                      </p>
                      <p>
                        На месте Богородиского погоста располагались две деревянные церкви: �&nbsp;ождества Пресвятой
                        Богородицы и во имя святого Николая. В XVIII веке обе церкви были перестроены, один из
                        храмов�&nbsp;— Богородице-�&nbsp;ождественский сохранился. Он закрылся в 1935 году. С тех пор на
                        протяжении многих лет здание использовалось как спортивный зал Сопинской школы.
                      </p>
                      <p>
                        Недавно после реставрации открылась Церковь Святой Живоначальной Троицы. Это "Суворовский храм",
                        построенный в 1801 году. Знаменитый полководец лично контролировал строительство.
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>
                        <img src="images/2022_0215_12184700.jpg">
                      </p>
                      <p>
                        <img src="images/50260.jpg" width="1080" height="786"><br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="2469">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=2469"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
            </div>
          </div>















        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>