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
                            center: [58.81222, 33.39222],
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
                          <td class="val">柳比蒂诺</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">2 535 人 </td>
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
                            <img src="images/a042ebf63048d0b8b01c7e761872715b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              柳比蒂诺镇位于姆斯塔河畔。10世纪，奥尔加公主沿着姆斯塔航行到诺夫哥罗德。公主在河上建了墓地。从其中一个墓地，后来诞生了一个小村庄贝洛耶。它因流经它的一条小河而得名。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/2b7fb96cb3e5dbb6f0f8e6d3a2afd0d9.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              在19-20世纪之交，木材、面粉和各种动物的活跃贸易穿过村庄。货物通过驳船运往诺夫哥罗德。贝洛耶村于1931年更名为柳比蒂诺，当时未来的柳比蒂诺区是列宁格勒州的一部分。1944年，该村被转移到新成立的诺夫哥罗德州。柳比蒂诺镇有很多景点。这里有一个露天博物馆“10世纪的斯拉夫村庄”。它是在一个古老定居点的领土上组织的。博物馆重建了当时的经济建筑。重建了住宅楼。当时多达30人住在里面。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/b474da319f28ed892531ef7d5510a5be.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              柳比蒂诺镇附近还有前洛康修道院。圣母升天教堂保存在柳比蒂诺本身。这座教堂是为了纪念战胜拿破仑二十周年而建造的。戈列梅金贵族的前家族庄园被保留了下来。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/70a479cc3080c174ab23034b826e07dc.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              离柳比蒂诺不远的是生态度假村“柳博戈里”。全年工作。冬天，你可以在这里滑雪和玩油管。沿越野滑雪路线滑雪。夏季，度假村组织骑自行车和徒步旅行、打猎和钓鱼以及极限漂流。
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

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">在哪吃饭</div>
            <div class="objects-list">
              <div class="tr">
              <div class="object-tmb rest-tmb">
                            <a href="../../restaurants/restoran-lyubytino-khutor/" id="bx_1454625752_471">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/a2bdb5ffdbe831bdcd95b1f8462d3a68.jpg);">
                                <div class="object-tmb-info ">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">斯客人卡”的折扣。</div>
                                  </div>


                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr" style="min-height: 153.5px;">
                              <div class="rest-tmb-descr" style="min-height: 112.5px;">
                                <ul class="object-tmb-tags">
                                  <li><a href="../../cities/p-lyubytino/">柳比蒂诺</a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../../restaurants/restoran-lyubytino-khutor/">
                                  <div class="h3"><span>«柳比蒂诺-农场» 餐厅</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-cuisine"></div>
                                  <div class="text">
                                    <ul class="object-tmb-tags">
                                      <li>俄罗斯菜</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">在哪里停留</div>
            <div class="objects-list">
              <div class="tr">
              <div class="object-tmb hotel-tmb">
                          <a href="../../hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/" id="bx_1454625752_2936">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/2cec561e7de15f59f61fc1c0f14ccea8.jpg);">
                              <div class="object-tmb-info">


                                <div class="object-tmb-info-item">
                                  <div class="object-info-num">-5%</div>
                                  <div class="object-info-ttl">斯客人卡”的折扣。</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="object-tmb-descr" style="min-height: 153.5px;">
                            <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                              <ul class="object-tmb-tags">
                                <li><a href="../../cities/p-lyubytino/">柳比蒂诺</a></li>
                              </ul>
                              <a href="../../hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/">
                                <div class="h3"><span>“柳博戈列”
                                    全季节度假村（滑雪俱乐部）
                                  </span></div>
                              </a>
                            </div>
                            <div class="object-tmb-data">
                              <div class="object-data-item">
                                <div class="ico ico-type-hotel"></div>
                                <div class="text">娱乐设施</div>
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