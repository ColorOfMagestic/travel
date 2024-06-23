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
                            center: [58.84538, 32.22218],
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
                          <td class="val">小维舍拉区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">11 015 人 </td>
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
                        <p>
                        小维舍拉城在19世纪下半叶作为圣彼得堡-莫斯科铁路车站附近的一个定居点出现在俄罗斯地图上。小维舍拉城市的地位是在1921年革命后获得的。
                        </p>
                        <p>
                        在伟大的卫国战争期间，这座城市被德国军队占领。不到一个月后，他在反攻中获释。自1944年以来，小维舍拉城一直是诺夫哥罗德州小维舍拉区的中心。
                        </p>
                        <p>
                        今天它不是一个很大的城市。这个城市的经济支柱是火车站。人口约1万人。奇怪的是，邻近的大维舍拉城村的人口少了六倍——大约1500人。这与反映各自定居点的规模无关。它们是以流经它们的河流命名的。
                        </p>
                        <p>
                        小维舍拉城的主要景点是火车站大楼。它建于1851年，由建筑师鲁道夫·安德烈耶维奇·热利亚泽维奇设计。该市还有一个当地传说博物馆。一些古老的商人房屋幸存了下来。特别是商人索洛维约夫的房子和商店被保留了下来。
                        </p>
                      </div>
                      <br>
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