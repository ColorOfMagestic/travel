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
                            center: [57.97472, 33.2525],
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
                          <td class="val">瓦尔代</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">14 379 人 </td>
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
                      <p>
                        今天的瓦尔代附近在古代就被人类开发了。瓦尔代这个名字最早出现在12世纪的桦树皮文字中。未来城市的前身是瓦尔代村。15世纪的文献中提到过。16世纪，瓦尔代成为宫殿教区的中心。也就是说，它开始属于国王。村里有一座木制教堂“帕拉斯克瓦星期五”和君主庭院。定居点的进一步发展很大程度上归功于从诺夫哥罗德到莫斯科的道路。后来，她开始前往圣彼得堡。沿路村庄的渔业和职业发展迅速。马车、铁匠、铸钟、烤羊、贸易、客栈、客栈、商店的维护。
                      </p>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/0670787a274c1d553dd5b671c3295b46.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              17世纪中叶，由于伊维尔斯基修道院的建立，该村归他所有。它被重新命名为圣母的。1712年，伊维尔斯基修道院及其所有领地被划归亚历山大·涅夫斯基修道院（未来的修道院）。瓦尔代村也被分配了。然而，在1730年，修道院重新获得了独立。他收回了他的领地。由于1764年的改革，修道院被剥夺了土地。瓦尔代村归经济学院管辖。1770年，根据叶卡捷琳娜二世女皇的法令，它被授予城市地位。瓦尔代很快成为瓦尔代县的中心。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/25ba9ee1d07b97d6c34d7f839f9d4d45.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              在接下来的几十年里，瓦尔代蓬勃发展。这要归功于两个首都之间繁忙的道路。这条路穿过城镇。钟表业在这里得到了广泛的发展。瓦尔代铸造了小型拱形钟、寺庙大钟、消防钟、剧院钟、信号钟。这座城市有钟楼工厂。
                              19世纪中叶尼古拉耶夫铁路的建设对这座城市的福祉造成了严重打击。公路的作用下降了。几起毁灭性的火灾使局势更加恶化。他们在19世纪到达瓦尔代。所有这些都导致了城市经济的衰退和人口的减少。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c2808f27d8667419ba1530e35ac4e591.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              卫国战争期间，瓦尔代成为前线城市。西北方面军总部就在附近。游击队运动列宁格勒总部的一个行动小组驻扎在该市。
                              现代瓦尔代以其自然美景和历史古迹吸引了众多游客。瓦尔代土地上的明珠是复兴的伊维尔斯基修道院。该修道院已成为朝圣旅游的重要中心。
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
                  <a href="../../restaurants/eko-klub-valday/" id="bx_3218110189_18725">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/a126a95d45a786ee21ae3eb1c9f304fd.jpg);">
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/valda/">瓦尔代</a></li>
                        <li>餐厅</li>
                      </ul>
                      <a href="../../restaurants/eko-klub-valday/">
                        <div class="h3"><span> «瓦尔代生态俱乐部» 餐厅</span></div>
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

          <!-- hot -->
          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">在哪里停留</div>
            <div class="objects-list">
              <div class="tr">
                <div class="object-tmb hotel-tmb">
                  <a href="../../hotels/gostinitsa-valday-eko-klub/" id="bx_3218110189_347">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/d606590b3bf68369611196227607d27a.jpg);">
                      <div class="object-tmb-info">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/valda/">瓦尔代</a></li>
                      </ul>
                      <a href="../../hotels/gostinitsa-valday-eko-klub/">
                        <div class="h3"><span>“瓦尔代生态俱乐部”酒店</span></div>
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
                <div class="object-tmb hotel-tmb">
                  <a href="../../hotels/truvor-glamping-glemping-truvor/" id="bx_1454625752_19710">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/e42f2ac7415357458f0d490762f81eec.jpg);">
                      <div class="object-tmb-info">
                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-15%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/valda/">瓦尔代</a></li>
                      </ul>
                      <a href="../../hotels/truvor-glamping-glemping-truvor/">
                        <div class="h3"><span> “特鲁沃尔”豪华露营(Truvor glamping)</span></div>
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