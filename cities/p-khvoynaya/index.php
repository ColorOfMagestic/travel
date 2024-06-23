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
                            center: [58.9, 34.53333],
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
                          <td class="val">赫沃伊纳亚周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">5 985 人 </td>
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
                        <div class="col-xs-12">
                          <p>
                          赫沃伊纳亚村位于前特罗绍沃村的旧址上。这个村庄属于克鲁特茨基修道院。这座修道院建于16世纪。
                          </p>
                          <p>
                          20世纪初，在姆加-雷宾斯克铁路建设期间，特罗绍沃出口成为一个车站。该站被称为赫沃伊纳亚。铁路线的服务逐渐转移到赫沃伊纳亚。与行政大楼一起，住宅楼也逐渐建成。
                          </p>
                          <p>
                          1931年，赫沃伊纳亚村成为列宁格勒州赫沃伊纳亚区的中心。
                          </p>
                          <p>
                          卫国战争期间，村里部署了医院。1941年9月，赫沃伊纳亚成为被围困的列宁格勒的主要空军补给基地。后来，由著名飞行员瓦伦蒂娜·格里佐杜博娃指挥的航空团驻扎在该村。1944年，赫沃伊纳亚村与该地区一起成为新成立的诺夫哥罗德州的一部分。
                          </p>
                          <p>
                          村里有一个当地传说博物馆。博物馆的展览讲述了针叶树的历史、当地铁路的形成和发展
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


    <?php require_once ('../template/footer-inner.php') ?>