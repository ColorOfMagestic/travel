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
                            center: [58.2452, 32.51648],
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
                          <td class="val">克雷斯特西周围地区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">7 023 人 </td>
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
                            <img src="images/240f440ab7882a3b8d2e10ef8b6e8be4.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                            14世纪晚期的编年史中首次提到了克雷斯特西。显然，定居点出现在两条主要道路的交叉口。一条路从诺夫哥罗德通往莫斯科。另一条路从普斯科夫通往沃洛格达。15世纪，莫斯科和诺夫哥罗德之间的路线上的一个驿站在这个地方形成。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c833f7cf2259ac79b9086c7386fe180e.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                            以前在这里，旅行者可以找到短暂的休息和更换马匹。在叶卡捷琳娜二世的统治下，克雷斯特西成为了一座城市。当时，该市大部分人口从事木匠和编织行业。镇上有一家磨坊。有一家砖厂。日常贸易由商人商店进行。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/71d3cc8308294a177803c0345209acf1.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                            在19世纪，这座城市发展缓慢。工业企业很少。其中一项成就是传统艺术工艺“十字线”。这是一种特殊的刺绣。甚至在国外也很受欢迎。多亏了这一点，克雷斯特西在诺夫哥罗德省以外的地方广为人知。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/d0c8b36e2b46a3b322d445f6b9e84794.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                            卫国战争期间，克雷斯特西镇成为前线。机场就在这里。到1942年中期，它已成为西北战线最大的航空枢纽之一。苏联飞行员的壮举在飞行员纪念碑中永垂不朽。纪念碑位于诺夫哥罗德一侧的克雷斯特西镇入口处。
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                      现在克雷斯特西是一个工作镇。位于莫斯科-圣彼得堡高速公路上。在克雷斯特西镇的景点中，值得注意的是凯瑟琳大教堂和圣三一教堂。这座大教堂建于18世纪。这座教堂建于19世纪中叶。村里有一个当地传说博物馆和一个手工艺博物馆“十字线”。
                      </p>
                      <p>
                      俄罗斯象征主义作家费奥多尔·库兹米奇·索洛古布的名字与克雷斯特西有关。这位作家曾在当地一所县立学校教过一段时间数学。
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


    <?php require_once ('../template/footer-inner.php') ?>