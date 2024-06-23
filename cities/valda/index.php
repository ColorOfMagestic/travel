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
                        Современный город 瓦尔代 расположен на 瓦尔代ской возвышенности, на берегу 瓦尔代ского озера, в
                        140 км к юго-востоку от Великого Новгорода, на 386-м километре федеральной автодороги Москва —
                        Санкт-Петербург М10 (E 105).
                      </p>
                      <p>
                        Впервые 瓦尔代 упоминается в берестяной грамоте 1140-1151 года. До 1654 года 瓦尔代 был
                        дворцовым 村庄м, затем до 1764 года было передано Иверскому монастырю. В это время 村庄 носило
                        название Богородицыно.
                      </p>
                      <p>
                        В 1770 года 瓦尔代 получил статус города. �&nbsp;асположение Валдая на почтовом тракте между
                        Москвой и Петербургом способствовало процветанию города и развитию в нём ремесла. 瓦尔代ские
                        умельцы, отливавшие большие колокола и маленькие колокольчики, славились на всю �&nbsp;оссию. В
                        Валдае бывали Александр Николаевич �&nbsp;адищев, Александр Сергеевич Пушкин, Николай Алексеевич
                        Некрасов, Владимир Александрович Серов, Гавриил �&nbsp;оманович Державин.
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
                              瓦尔代�&nbsp;— удивительный край рек, озер и�&nbsp;лесов. На�&nbsp;территории
                              национального природного парка «瓦尔代» находится 70 озер, 20 рек, редкие
                              представители флоры и�&nbsp;фауны, около 500 памятников археологии, истории, архитектуры.
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
                              С�&nbsp;давних пор визитной карточкой Валдая стали колокола. На�&nbsp;протяжении многих
                              веков они размеряли течение дней, возвещая время молитвы, труда и�&nbsp;отдыха.
                              В�&nbsp;Музее колоколов Валдая собрана богатейшая экспозиция колоколов
                              и�&nbsp;колокольчиков со�&nbsp;всего мира.
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
                              瓦尔代 Иверский Святоозерский Богородицкий мужской монастырь, основанный патриархом
                              Никоном в�&nbsp;1653 году, привлекает паломников со�&nbsp;всего мира. Здесь хранится
                              святыня�&nbsp;— чудотворная Иверская икона Пресвятой Богородицы икона Иверской Божией
                              Матери.
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