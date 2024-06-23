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
                          <td class="val">Боровичский</td>
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
                              Боровичский погост впервые упоминается в переписной оброчной книге Деревской пятины около
                              1495 года. В 1564 году упоминается уже как торгово-промышленное поселение Боровичский
                              �&nbsp;ядок. Основным занятием жителей Боровичей была проводка судов по мстинским порогам
                              (Боровичские пороги), что отражено в высочайше пожалованном Екатериной II гербе города, по
                              ее же указу в 1770 году был и основан город 博罗维奇. Старые купеческие особняки, с
                              боровичской разноцветной керамикой и изящной резьбой по дереву, тротуары, вымощенные
                              булыжником, воссоздают уютную атмосферу XIX нач. XX веков.
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
                              Посетив железнодорожный вокзал, Вы почувствуете размеренный ритм жизни старинного русского
                              городка. Сохранив свой исторический облик, в современное время вокзал стал привлекателен
                              для отечественного кинематографа. Здесь снимались фильмы: «Статский Советник», «Белый
                              конь», «Тихие омуты» и др.
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
                              В 30 километрах от Боровичей находится с. Опеченский Посад – Лоцманская слобода,
                              уникальная особенность этого поселения связана с проживанием здесь особого сословия –
                              лоцманов, искусно проводивших суда через Мстинские пороги. В настоящее время можно пройти
                              самый опасный путь на Мстинских порогах под руководством опытных инструкторов на рафтах
                              или байдарках.
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
                              Путь до единственного в �&nbsp;оссии музея-усадьбы А.В. Суворова от г. 博罗维奇 до с.
                              Кончанское составляет 35 километров. Здесь великий полководец отбывал ссылку с 5 мая 1797
                              года по 6 февраля 1799 года, и именно отсюда отправился в знаменитый альпийский поход.
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
                              Промышленное развитие города началось в 70-х годах XIX века, и связано с производством
                              огнеупорных кирпичей. Местное сырье «все виды глин» привлекали столичных и европейских
                              промышленников, создавая конкуренцию местным купцам. Ещё в 1786 году в устье Крупы,
                              притока Мсты, была пробита первая в �&nbsp;оссии штольня для добычи бурого угля. В 1855
                              году недалеко от Боровичей Нобель основал первый завод огнеупорных изделий.
                            </p>
                          </div>
                        </div>
                      </div>
                      Современные 博罗维奇 – это город с населением 49 тысяч человек, развитой промышленностью и
                      торговлей, культурный и туристический центр. Имеет звание «Город трудовой доблести».<br>
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