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
                            center: [57.64301, 32.466],
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
                          <td class="val">4 453 人 </td>
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
                            <img src="images/272b6f4df0982b08ff25733f7a620498.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                            编年史中第一次提到杰缅斯克镇是在15世纪初。然而，还有其他证据。它们可以追溯到12世纪。例如，桦树皮字母也提到了杰缅斯克镇。
                            </p>
                            <p>
                            19世纪初，杰缅斯克成为杰缅斯克县的城市和中心。1927年革命后，它成为列宁格勒州杰缅斯克区的中心。与此同时，它失去了城市的地位，成为了一个村庄。
                            </p>
                            <p>
                            卫国战争期间，杰缅斯克处于占领区。1942-1943年，该地区发生了激烈的战斗。在杰缅斯克附近的一次这样的战斗中，飞行员阿列克谢·彼得罗维奇·马列西耶夫的飞机被击落。1944年，杰缅斯克成为新成立的诺夫哥罗德州杰缅斯克区的中心。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/9121ec6cbfe3ca4e5349f5cb0ca0565d.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                            1960年，它获得了工人村的地位。现在杰缅斯克是一个舒适的小村庄，基础设施发达。坐落在风景如画的地方。
                            </p>
                            <p>
                            杰缅斯克的景点是公主山定居点。位于雅汶河右岸。这里的第一个定居点出现在公元1000年末。
                            </p>
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
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>