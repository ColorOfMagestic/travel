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
                            center: [58.40083, 33.29083],
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
                          <td class="val">奥库洛夫卡</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">10 470 人 </td>
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
                          奥库洛夫卡的故事始于遥远的过去。第一次提到它是在15世纪末诺夫哥罗德土地杰列夫斯卡娅州的书中发现的。考古遗迹使我们能够谈论早在我们这个时代之前就有人类出现在这里。
                          </p>
                          <p>
                          1851年尼古拉耶夫铁路通车后，在奥库洛夫卡建造了一个车站。风景名胜和自然财富迅速吸引了首都居民。20世纪初，奥库洛夫卡已经是一个大型车站定居点。
                          </p>
                          <p>
                          村里的生活很活跃。开设了食品和工业商店、学校、邮局和马厩。客栈和酒馆等着客人。离村庄不远的佩雷特纳河上有一家造纸厂。
                          </p>
                          <p>
                          伟大卫国战争结束后，即1965年，奥库洛夫卡成为一座城市。俄罗斯许多名人的名字都与奥库洛夫卡有关。列夫·尼古拉耶维奇·托尔斯泰曾在这里参观过他岳母的庄园。艾萨克·伊里奇·列维坦在他的画作中捕捉到了奥库洛夫卡生活的动机。尼古拉·安德烈耶维奇·里姆斯基-科萨科夫在这里创作他的歌剧。谢尔盖·瓦西里耶维奇·拉赫玛尼诺夫访问过这里。另外，值得一提的是出生在当地的著名俄罗斯旅行家和民族志学家尼古拉·尼古拉耶维奇·米克卢霍-麦克莱。
                          </p>
                          <p>
                          在奥库洛夫卡的景点中，值得注意的是车站大楼附近的当地传说博物馆和维克多·崔纪念碑。这座城市保留了弗朗茨·彼得罗维奇·雷什的两层楼建筑。建于20世纪初。当时房子里有一家酒店。矗立在白桦林中的两层楼房是对前新奇庄园的记忆。庄园属于沙茨夫妇.
                          </p>
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