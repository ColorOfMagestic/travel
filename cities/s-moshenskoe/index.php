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
                            center: [58.51016, 34.59108],
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
                          <td class="val">莫申斯科耶</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">2 065 人 </td>
                        </tr>
                        <tr>
                          <td class="name">类型::</td>
                          <td class="val">村庄</td>
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
                      莫申斯科耶是一个古老的村庄。自1545年以来，别热茨克州的书籍中就提到了它。这个村庄的名字可能来自“莫申纳”一词——钱包、财富。
                      </p>
                      <p>
                      16世纪，乌维尔河畔有大量富裕的庄园。或者这个名字来自“苔藓”这个俄文名字——姆欣斯科。陡峭的河岸上有长满苔藓的松树。
                      </p>
                      <p>
                      村里保留了一座带有钟楼的石头教堂。建于1787年。圣母代祷教堂矗立在乌维尔河左岸。它由地主伊万·米哈伊洛维奇·列瓦绍夫于1764年建造。一些19世纪的庄园也保存了下来。在莫申斯科耶中心的乌维尔河高岸，来自圣彼得堡的木材工业家克鲁格利克的庄园宅邸融入了现代建筑。商人亚历山大·里亚博夫的房子用木制蕾丝赏心悦目。位于区域中心的左岸。它有一个博物馆。此外，该村的文化遗产还包括博热里亚诺夫的三个庄园。
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