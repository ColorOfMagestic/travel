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
                            center: [57.99439, 31.36081],
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
                          <td class="val">旧鲁萨</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">29 019 人 </td>
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
                            <img src="images/063413cfb05d991b9fb65f8116ecb70f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              旧鲁萨的历史可以追溯到一千多年，根据考古资料，这座城市在10世纪开始形成。盐湖附近的小型定居点甚至更早出现。编年史中第一次提到罗斯（这座城市在古代的名称）可以追溯到1167年，当时它是一个主要的贸易和手工艺中心。它是从俄罗斯中部到诺夫哥罗德途中的重要据点。中世纪城市繁荣的基础是盐业。这样的商品在那个时代具有巨大的价值。中世纪的罗斯经常遭受火灾、流行病和敌人入侵。但它总是恢复。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/34a877fdd353fdec8030bff465479067.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              这座城市的现代名称是旧鲁萨。第一次提到出现在16世纪的资料中。在16-17世纪，城市的行政中心位于波利斯提河和波鲁西亚河（佩雷里蒂察）交汇处的海角。这里建了一座木制堡垒监狱。17世纪末，复活大教堂也建在这里。大教堂成为这座城市的主要建筑特色。到18世纪初，这座木制堡垒已经失去了几个世纪的防御意义。后来被挖了出来。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/760013a5334b33afcfb4ccaf2f690f1b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              在18世纪和19世纪初，旧鲁萨仍然是一个重要的盐业中心。1763年的一场大火摧毁了几乎所有的木结构建筑。这座城市的城市规划历史开始了一个新阶段。历史上形成的自由街道和小巷网格被新的、规则的布局所取代。长方形的街区、广场、典型的建筑出现了。由于波利斯蒂河以北地区的开发，这座城市显着发展。在这个时代，新的行政大楼、宾馆和客厅出现在旧鲁萨。这座城市建筑和规划历史的新时代开始了。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/fef6fb7a050b5017ce3f312f3f094f8f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              旧鲁萨历史上的一个特殊时期是军事定居点时代（1820-1850年代）。这座城市脱离了民政当局的管辖，成为一个“军事城市”，是一个独立的军事定居点军团的旧鲁萨支队的中心。在这几十年里，进行了积极的改善工作。红岸被加固了。上面有一条林荫大道。许多街道已经铺设或铺设了高速公路。路灯出现了。水管的建设已经开始。复活大教堂进行了重大重建。与此同时，旧鲁萨泥浆疗养胜地的基础也包括在内。它最初是为治疗军人而设计的。但在19世纪，它已经成为俄罗斯最著名的疗养胜地之一。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a7fa495fa953929cf835883dab39201a.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              在19世纪末和20世纪初，旧鲁萨是一个小县城。夏季吸引了大量夏季居民。其中最著名的是作家费奥多尔·米哈伊洛维奇·陀思妥耶夫斯基。几年来，他和家人在这里度过了夏天。在旧鲁萨，作家创作了许多作品。因此，他将自己的名字永远与这座城市的历史联系在一起。
                              卫国战争期间，旧鲁萨被敌军占领。从1941年8月到1944年2月，附近发生了激烈的战斗。1944年2月18日，这座废墟城市被苏联军队解放。
                              现在旧鲁萨是一座度假城市、一座博物馆城市、一座陀思妥耶夫斯基之城。2015年，她被授予“军事荣耀之城”荣誉称号。同年，旧鲁萨举行了庆祝其历史千年的活动。度假村、博物馆和古老的寺庙吸引了许多游客。
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

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">在哪吃饭</div>
            <div class="objects-list">
              <div class="tr">
                <div class="object-tmb rest-tmb">
                  <a href="../../restaurants/restoran-karamazovy/" id="bx_1454625752_1382">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/4dcceb368f85c4837a47e7c02eb4bd39.jpg);">
                      <div class="object-tmb-info ">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10 на основное меню%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>


                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/staraya-russa/">旧鲁萨</a></li>
                        <li>餐厅</li>
                      </ul>
                      <a href="../../restaurants/restoran-karamazovy/">
                        <div class="h3"><span>«卡拉马助夫» 餐厅</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>招牌菜</li>
                            <li>欧洲菜</li>
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
                  <a href="../../hotels/kurort-staraya-russa/" id="bx_3218110189_343">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/de5e3fc37a2bc6eb10e536be4c84ddca.jpg);">
                      <div class="object-tmb-info">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-18%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 238.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 186.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/staraya-russa/">旧鲁萨</a></li>
                      </ul>
                      <a href="../../hotels/kurort-staraya-russa/">
                        <div class="h3"><span>«旧鲁萨» 基地度假</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-type-hotel"></div>
                        <div class="text">疗养院</div>
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