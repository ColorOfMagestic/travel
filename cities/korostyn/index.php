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
                            center: [58.18613, 30.987359],
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
                          <td class="val">希姆斯克</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">403 人 </td>
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
                        «Ильмень-озеро» – услышав эти слова, воображение рисует героев русских былин и сказок, а
                        исторические факты подтверждают сказания далеких предков.
                      </p>
                      <p style="color: #383838;">
                        На берегу этого водоема раскинулась 镇�&nbsp;Коростынь, известная своей исконно русской
                        красотой и древними достопримечательностями.
                      </p>
                      <p style="color: #383838;">
                        <strong>Коростынь</strong>
                      </p>
                      <p style="color: #383838;">
                        Первыми достоверными сведениями об этом населенном пункте принято считать 1741 год, когда был
                        подписан�&nbsp;Коростынский�&nbsp;мирный договор, означающий победу в Московско-новгородской
                        войне и потерю независимости Новгородского княжества. С тех пор прошло немало лет, а о былом
                        напоминает Памятный крест, установленный там, где стоял шатер московского царя Ивана III,
                        сумевшего прекратить междоусобицу в �&nbsp;усском государстве.
                      </p>
                      <p style="color: #383838;">
                        Сейчас 镇 входит в 希姆斯克 район Новгородской области. В населенном пункте есть школа,
                        почта, магазин. А названия улиц отражают неспешный образ жизни: Вишневая, Озерная, Зеленая,
                        Садовая... На одной из этих улиц и находится 主页
                        достопримечательность:�&nbsp;<strong>Путевой дворец</strong>, построенный в 1825/27 г. по
                        проекту основоположника русского ампира, архитектора�&nbsp;Стасова.
                      </p>
                      <p style="color: #383838;">
                        <strong>Путевой дворец</strong>
                      </p>
                      <p style="color: #383838;">
                        Жемчужина классицизма, архитектурный памятник и одна из главных
                        достопримечательностей�&nbsp;Коростыни�&nbsp;находится на главной улице. Уютный дворец, в
                        котором русские цари отдыхали, путешествуя из Старой �&nbsp;уссы в Новгород. Первый, каменный
                        этаж, венчают дорические колонны, расположенные на верхнем,�&nbsp;деревянном.�&nbsp;Необычайная
                        легкость и изящество сооружения приковывает взор. Во времена Советского Союза в этом здании
                        находилось общежитие, затем, в конце восьмидесятых, дворец начали реставрировать, но развал
                        страны приостановил процесс и объект был законсервирован. И только несколько лет назад, в рамках
                        проекта «Сохранение и использование культурного наследия в �&nbsp;оссии» дворец получил вторую
                        жизнь: здание отреставрировали, в сентябре 2019 г. открыли Музейно-культурный центр
                        Государственного музея художественной культуры Новгородской земли. Несколько экспозиций музея
                        познакомят с историей населенного пункта, с уникальным геологическим памятником –
                        Ильменским�&nbsp;глинтом, и работами новгородских художников.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="2369">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=2369"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=2369"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=2369"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
            </div>
          </div>











          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Коростыни</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/gostevoy-kompleks-lake-park-leyk-park/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b20bc1d5a94814cb145c260f29e60790.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Коростынь</a></li>
                    </ul>
                    <a href="/hotels/gostevoy-kompleks-lake-park-leyk-park/">
                      <div class="h3"><span>Гостевой комплекс «Lake Park» (Лэйк Парк)</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостевой дом</div>
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