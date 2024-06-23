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
                            center: [58.821261638462, 31.474384428589],
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
                          <td class="val">Новгородский</td>
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
                      <p style="color: #383838;">
                        Своё пугающее название деревенька получила ещё во времена правления Петра I. Всё дело в том, что
                        по его приказу в этом месте была основана скотобойня, призванная обеспечить питанием людей,
                        занятых строительством Санкт-Петербурга (Находится в 150 км. от Мясного бора).
                      </p>
                      <h2 style="font-weight: 500; color: #383838;">�&nbsp;асположение.</h2>
                      <p style="color: #383838;">
                        Находится эта деревенька к северо-северо-востоку от Великого Новгорода, недалеко от пересечения
                        автотрассы М-11 с железнодорожными путями. В связи с тем, что от Новгорода до Мясного бора всего
                        30 км., преодолеть которые можно на автобусе или электричке, в это место часто заезжают
                        любопытные туристы. Чаще всего их интерес к деревне обусловлен желанием на себе прочувствовать
                        пресловутую «гнетущую атмосферу» здешних лесов и болот. Свой «Мистический ореол» они получили
                        после Второй Мировой Войны, когда в результате неудачного наступления российской армии там
                        погибли десятки тысяч солдат.
                      </p>
                      <h2 style="font-weight: 500; color: #383838;">Гибель Второй ударной армии.</h2>
                      <p style="color: #383838;">
                        Ни для кого не секрет, что в Новгородской области во время Второй Мировой Войны проводились одни
                        из самых кровопролитных боёв. Так, только русских солдат здесь погибло около 800 тысяч. И
                        огромное их число погибло именно в окрестностях Мясного бора, где провалилось наступление
                        �&nbsp;оссийской армии, которая должна была прорвать блокаду Ленинграда. Но, как известно со
                        страниц истории, наступление провалилось, и армия была взята в котёл, прорыв из которого
                        проводился немного северо-западнее Мясного бора.
                      </p>
                      <h2 style="font-weight: 500; color: #383838;">Чем знаменит Мясной бор.</h2>
                      <p style="color: #383838;">
                        Никаких видимых достопримечательностей в этом месте нет, разве что Мемориальный комплекс, с
                        захоронёнными в нём солдатами, да так называемая «Долина Смерти». Именно по этой «Долине»,
                        представляющей из себя длинный узкий коридор, идущий сквозь болота, в конце мая 1942 года и
                        прорывались из окружения бойцы Второй ударной армии. Всего в лесах и болотах этого «коридора»,
                        порой не превышающего 300 метров, погибло около 146 546 人овек. В связи с природным ландшафтом,
                        который составляют леса и болота, многие десятки тысяч погибших солдат так и остались
                        ненайденными и не похороненными. По словам местных и членов поисковых отрядов, здешние места
                        изобилуют природными аномалиями, местами, куда не заходят животные и не залетают птицы. Так же
                        многие здесь клянутся, что видели давно умерших солдат, слышали их голоса, шум боя.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="1411">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=1411"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
            </div>
          </div>















        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>