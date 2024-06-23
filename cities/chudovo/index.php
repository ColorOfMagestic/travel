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
                            center: [58.39022, 33.54914],
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
                          <td class="val">丘多沃</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">14 730 人 </td>
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
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/165c5efa8accb7a5639d9d415e229769.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              丘多沃市是诺夫哥罗德州丘多沃区的行政中心。第一次提到丘多沃是在1539年。当时它是一个小村庄。它位于克雷斯特河畔。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/970d7fe93c0ab06c67403ec2f8dd7e28.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              后来，随着圣彼得堡和莫斯科之间交通的发展，丘多沃最终上路了。它连接了两个首都。这导致了一个已经很大的村庄的发展。然后它被称为雅木-丘多沃。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/70e81967d90448444953fb0ac6db734b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              村民们捕鱼、采集干草和木柴。他们把所有收获的东西都卖到了大城市。主要是在圣彼得堡。
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a1aae1e421f8fd6902535e703737ab09.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              19世纪中叶，圣彼得堡-莫斯科铁路在丘多沃附近建成。后来，修建了一条通往诺夫哥罗德的窄轨支线。从那时起，丘多沃就成为了一个枢纽站。附近有一个大型车站村。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/58a4f8322870b548c37664f4cbcac39d.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              1937年，该镇获得城市地位。卫国战争期间，这座城市被德国军队占领。1944年1月底在诺夫哥罗德-卢加进攻行动中从他们手中获释。1944年，在诺夫哥罗德州成立期间，丘多沃和丘多沃区成为新成立地区的一部分。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/eb179107d04ec608a54590e44eb03010.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              今天，丘多沃是一个主要的铁路枢纽。一条铁路穿过它。它连接莫斯科和圣彼得堡，以及大诺夫哥罗德。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/0e76d49626b0f75de5e83576a7c2f3cf.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              丘多沃经济的基础是工业生产。机械工程、木材加工、化工生产。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/03f5297d93e5d6ee095d6d404148385d.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              这座城市的景点是诗人尼古拉·阿列克谢耶维奇·涅克拉索夫的故居博物馆和喀山上帝之母圣像教堂。博物馆在他的狩猎小屋开放。这座教堂建于20世纪初，采用新俄罗斯风格。
                            </p>
                          </div>
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