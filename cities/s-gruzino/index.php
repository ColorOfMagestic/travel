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
                            center: [59.148571, 31.882036],
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
                          <td class="val">丘多沃</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">815 人 </td>
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
                        Согласно легенде, основателем Грузина был сам апостол Андрей. Придя на�&nbsp;берега Волхова,
                        он�&nbsp;водрузил на�&nbsp;берегу реки крест, отчего и�&nbsp;произошло название «Грузино».
                        В�&nbsp;дальнейшем, на�&nbsp;этом месте была построена церковь во�&nbsp;имя святого апостола
                        Андрея Первозванного.
                      </p>
                      <p>
                        По�&nbsp;другой версии 村庄 являлось собственность новгородского боярина Офонасия Груза
                        и�&nbsp;от�&nbsp;его имени и�&nbsp;пошло название деревни. Наконец, есть точка зрения, что мимо
                        деревни проходили важные торговые пути и�&nbsp;около Грузино через Волхов переправляли различные
                        грузы. Ну, а�&nbsp;слово «Грузино» произошло от�&nbsp;глагола «грузить».
                      </p>
                      <p>
                        Слава к�&nbsp;Грузино пришла в�&nbsp;конце XVIII века. В�&nbsp;1796 году император Павел
                        I�&nbsp;пожаловал деревню <nobr>генерал-квартирмейстеру</nobr>, впоследствии графу, <nobr>А. А.
                          Аракчееву</nobr>.
                      </p>
                      <p>
                        Новый хозяин развернул в�&nbsp;своих новых владениях масштабное строительство. На�&nbsp;берегу
                        реки Волхов был насыпан высокий 霍尔姆, на�&nbsp;котором был построен господский дом,
                        с�&nbsp;балкона которого открывался вид на�&nbsp;аракчеевские владения. Для создания <nobr>
                          дворцово-паркового</nobr> ансамбля из�&nbsp;Петербурга были выписаны лучшие мастера того
                        времени, среди них <nobr>В. П. Стасов</nobr>, создатель здания Биржи Тома де�&nbsp;Томон, <nobr>
                          Ф. И. Демерцев</nobr>, <nobr>И. П. Мартос</nobr>, <nobr>С. И. Гальберг</nobr>, <nobr>В. П.
                          Екимов</nobr> и�&nbsp;другие. �&nbsp;ядом с�&nbsp;усадьбой Аракчеев распорядился возвести
                        церковь, служебные и�&nbsp;хозяйственный постройки, развлекательные павильоны. В�&nbsp;Грузино
                        был разбит живописный ландшафтный парк, вызывавший восхищения современников.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="451">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/gastronomicheskiy-turizm/?TOWN=451"
                style="background-image:url(images/27f2b205bc6e09ebef9cb8240a72c2c3.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Гастрономический туризм</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Грузино</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/arakcheevskoe-gruzino/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/cdd78afd171e833f82431a2153e20a90.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Святыни и храмы</li>
                    </ul>
                    <a href="/routes/arakcheevskoe-gruzino/">
                      <div class="h3"><span>Аракчеевское Грузино</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2,5 часа</div>
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