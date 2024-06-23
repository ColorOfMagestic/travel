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
                            center: [58.38778, 33.91546],
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
                          <td class="val">50 896 人 </td>
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
                            <img src="images/eb779972758f4cb3cc7f3b9fd95f2f7f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              博罗维奇市是一个古老的贸易和工业城市。位于姆斯塔河畔。在古代，姆斯塔河是一条重要的贸易路线。它连接波罗的海和里海。在15、16世纪末的文献中，提到了两个墓地。它们位于现在的博罗维奇市彼得罗夫斯基乡村墓地、鲍里索格列布斯基乡村墓地和斯帕斯基乡村墓地的领土上。在他们的基础上，博罗维奇村后来出现了。村民们主要从事在危险的博罗维奇急流上引导船只。他们就在附近。1720年，根据彼得一世的法令，定期组织船只通过急流的管理。飞行员是从当地居民中选出的。他们的职责已经确定。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a773fff38e8abba261e6af7b1fbf9e7b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              在18-19世纪，维什涅沃洛茨卡娅水系的一部分穿过姆斯塔河。他在供应圣彼得堡方面发挥了巨大作用。船队穿过博罗维奇急流。他们装载了各种货物。工程实施后，河流的吞吐量显着增加。这对其海岸定居点的发展产生了有益的影响。1770年，根据叶卡捷琳娜二世皇后的法令，博罗维奇被授予城市地位。两年后，纹章被授予。总体规划获得批准。1785年，皇后在穿越维什涅沃洛茨卡娅水系时参观了这座城市。皇后检查了急流。然后她乘坐一艘专门为此建造的船继续沿着姆斯塔河航行。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/5cb6e5c27f7b763856f0e8fee0b3457b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>

                              19世纪下半叶，铁路交通的发展导致维什涅沃洛茨卡娅水系的重要性显着下降。此时，博罗维奇正在成为一个主要的工业中心。在城市附近发现了硬煤、耐火粘土和硫黄铁矿矿床。1855年，瑞典公民伊曼纽尔·诺贝尔在博罗维奇附近开设了一家耐火材料工厂。俄罗斯第一家此类工厂。它们的生产主要是冶金工业所必需的。19世纪70年代博罗维奇-乌格洛夫卡铁路建成后，博罗维奇的耐火材料工业开始迅速发展。它将这座城市与耐火材料的主要消费者联系起来。在圣彼得堡设有普季洛夫斯基工厂、伊佐拉工厂和奥布霍夫斯基工厂。1880年，康斯坦丁·洛吉诺维奇·瓦赫特在日达尼庄园建造了一家耐火材料工厂。随后，他被转移到博罗维奇。成为俄罗斯最大的。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/ca78246ee2d3a627805436c6b82c2add.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              卫国战争期间，博罗维奇没有被敌人占领。该市有许多医院。组建了军事编队。为了前线的利益，工业企业继续工作。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a062723df86546c89bb1a0949ee51755.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              今天，博罗维奇市仍然是一个重要的工业中心。博罗维奇市在很大程度上保留了19世纪县城的面貌。在这里，您可以沿着街道沿着古老的鹅卵石人行道散步。它们是由商人建造的。名片是别列柳布斯基桥。这座桥建于20世纪初。
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
                  <a href="../../restaurants/restoran-most-most/" id="bx_3218110189_3296">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/3b76b5336f2e03d09012dbf785f7d6a7.jpeg);">
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
                        <li><a href="../../cities/borovichi/">博罗维奇</a></li>
                        <li>餐厅</li>
                      </ul>
                      <a href="../../restaurants/restoran-most-most/">
                        <div class="h3"><span>“桥” 餐厅 (MOST)</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>招牌菜</li>
                          </ul>
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