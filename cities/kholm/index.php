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
                            center: [57.14543, 31.1778],
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
                          <td class="val">霍尔姆周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">3 445 人 </td>
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
                        <div class="col-xs-12">
                          <p>
                          第一次提到在现代霍尔姆遗址上定居可以追溯到7世纪。当时，霍尔姆墓地就位于这里。
                          </p>
                          <p>
                          到了6世纪，这个地方已经被称为霍尔姆城。8世纪，女皇叶卡捷琳娜二世授予当地城镇县城的地位。这霍尔姆成为霍尔姆区的中心。
                          </p>
                          <p>
                          19世纪初，亚历山大一世皇帝曾两次在这座城市停留。到19世纪末，这座山以其手工艺品而闻名。包括船只和平底木船的制造。
                          </p>
                          <p>
                          革命后，它是一个小镇。镇上有几家工厂。特别是皮革、砖和酿造。
                          </p>
                          <p>卫国战争期间，这霍尔姆城市处于占领区。在托罗佩茨科-霍尔姆进攻行动中，它几乎被完全摧毁。</p>
                          <p>这霍尔姆现在是一个小城。它是诺夫哥罗德州霍尔姆区的区域中心。</p>
                          <p>其经济的基础是林业企业。采矿产正在进行中。</p>
                        </div>
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