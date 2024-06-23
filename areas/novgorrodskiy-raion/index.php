<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
    <!-- main -->
    <div class="main">
      <div class="page-wrapper">
        <div class="container">
          <div class="page-wrapper-top">
            <div class="row">
              <div class="col-xs-12 col-sm-4 pull-right">
                <div class="sidebar-object-info">
                  <div class="sidebar-object-map">
                    <div class="close"></div>
                    <div class="object-map" id="objectMap" style=""></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", function (event) {
                        ymaps.ready(function () {
                          var myMap = new ymaps.Map('objectMap', {
                            center: [58.573675, 31.451069],
                            zoom: 8
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
                          <td class="val">诺夫哥罗德区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">63 039 人 </td>
                        </tr>
                        <tr>
                          <td class="name">类型::</td>
                          <td class="val">行政中心</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8 gl-wrp page-content">
                <div class="block-ext-parent">
                  <div class="h2" style="margin-top: 0;">关于该地区</div>
                  <div class="block-ext-content block-collapsed">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="intext-pic intext-pic-alt">
                          <img src="images/bc05b9fa0ff7311e5cb88e63281db083.jpg"
                            alt="诺夫哥罗德区 район - 诺夫哥罗德区 кремль">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="intext-pic-descr">
                          <p>诺夫哥罗德区成立于1927年，是当时列宁格勒地州的一部分。1944年，该地区成为新成立的诺夫哥罗德地区的一部分。它与该地区的其他7个区和列宁格勒州的两个区接壤。</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-sm-push-6">
                        <div class="intext-pic intext-pic-alt">
                          <img src="images/b2ec4d4fe08c21b3d3c0a535652beb23.jpg"
                            alt="Достопримечательности Новгородского района">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                        <div class="intext-pic-descr">
                          <p>该地区具有得天独厚的交通和地理位置。主要的铁路、公路和水路都经过这里。它们将诺夫哥罗德州与俄罗斯其他地区连接起来，拥有大量的湖泊和河流。该州最大的湖泊是伊尔门湖。主要水道是沃尔霍夫河。它连接伊尔门和拉多加湖。该地区的大部分领土被森林和沼泽占据。这使得这里的地方对蘑菇和浆果爱好者很有吸引力。然而，也有受保护的橡树林。其中许多是大自然的遗迹。动物世界也是多种多样的。麋鹿、野猪、狐狸和野兔都住在这里。在被洪水淹没的地区，您经常可以找到海狸小屋。该地区的主要工业是制造业、农业和贸易。该地区总共约有200个定居点。</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="intext-pic intext-pic-alt">
                          <img src="images/318967b5aed291e7863524111e35de5c.jpg" alt="Памятники Новгородского района">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="intext-pic-descr">
                          <p>居民总数超过6万人。该州的行政中心——大诺夫哥罗德位于诺夫哥罗德区的领土上。自古以来，大诺夫哥罗德附近就有修道院、寺庙和其他历史古迹。其中许多现在位于诺夫哥罗德地区的领土上。其中包括世界著名的内雷迪察救世主教堂、科瓦列沃田救世主教堂和沃洛托沃田升天教堂。有男修道院和女修道院。</p>
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
        <!-- <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Населённые пункты района</h2>
              <div class="row">
                <div class="col-xs-12 ">
                  <div class="page-content">
                    <div class="list-wrapper">
                      <div class="cities-list">
                        <div class="tr"> <a class="city-tmb" href="../../cities/myasnoy-bor/"
                            style="background-image:url(images/2b100b572034f70de5034b91256c70d8.jpg);"
                            id="bx_3322728009_1411">
                            <div class="city-tmb-inner">
                              <div class="h3"><span>Мясной Бор</span></div>
                              <div class="city-tmb-info">
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-location.png"></div>
                                  <div class="ttl">诺夫哥罗德区</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-type.png"></div>
                                  <div class="ttl">Деревня</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <a class="city-tmb" href="../../cities/bronnitsa/"
                            style="background-image:url(images/2dc6c465bea47ebea38fe236196e936b.jpg);"
                            id="bx_3322728009_1409">
                            <div class="city-tmb-inner">
                              <div class="h3"><span>Бронница</span></div>
                              <div class="city-tmb-info">
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-location.png"></div>
                                  <div class="ttl">诺夫哥罗德区</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-population.png"></div>
                                  <div class="ttl">1268</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-type.png"></div>
                                  <div class="ttl">Село</div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="tr"> <a class="city-tmb" href="../../cities/zaval/"
                            style="background-image:url(images/0f152a8aab1305597cced0ad1a5cc7c9.jpg);"
                            id="bx_3322728009_1408">
                            <div class="city-tmb-inner">
                              <div class="h3"><span>Завал</span></div>
                              <div class="city-tmb-info">
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-location.png"></div>
                                  <div class="ttl">诺夫哥罗德区</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-population.png"></div>
                                  <div class="ttl">84</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-type.png"></div>
                                  <div class="ttl">Деревня</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <a class="city-tmb" href="../../cities/p-tyesovo-netylskiy/"
                            style="background-image:url(images/dfe871945a423fe2b1a5cdda6fd805e1.jpg);"
                            id="bx_3322728009_445">
                            <div class="city-tmb-inner">
                              <div class="h3"><span>Тёсово-Нетыльский</span></div>
                              <div class="city-tmb-info">
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-location.png"></div>
                                  <div class="ttl">诺夫哥罗德区</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-population.png"></div>
                                  <div class="ttl">2437</div>
                                </div>
                                <div class="city-info-item">
                                  <div class="ico"><img src="../images/ico-city-type.png"></div>
                                  <div class="ttl">Поселок</div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>