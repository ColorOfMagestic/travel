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
                            center: [58.049702, 30.852782],
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
                          <td class="val">沃洛特周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">12 人 </td>
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
                      <p>
                        Известна издревле новгородская земля.�&nbsp;В старинных летописях упоминается не единожды.
                        «Господин 大诺夫哥罗德» –�&nbsp;так величали его.�&nbsp;Славен был людьми,�&nbsp;живущими в
                        нем:�&nbsp;ремесленниками и купцами,�&nbsp;боярами да воинами.�&nbsp;Много сказок
                        сложено,�&nbsp;былин рассказано о славном Новгороде и жителях его.�&nbsp;О богатырях Садко да
                        Ваське Буслаеве,�&nbsp;соратнике Александра Невского,�&nbsp;легенды ходили,�&nbsp;а наши
                        современники фильмы снимали.�&nbsp;В час нелегкого выбора останавливались русские богатыри у
                        камня,�&nbsp;да решали,�&nbsp;в какую же сторону ехать:�&nbsp;богатыми да женатыми быть иль
                        жизнь за �&nbsp;одину отдать.<br>
                      </p>
                      <p>
                        Сейчас это кажется художественным вымыслом,�&nbsp;но в деревне Камень,�&nbsp;Новгородской
                        области,�&nbsp;существует памятник природы регионального значения�&nbsp;–�&nbsp;валун высотою в
                        5 метров,�&nbsp;шириною 8,6,�&nbsp;на перекрестке дорог.�&nbsp;Всяк идущий –
                        останавливается,�&nbsp;находящийся на распутье�&nbsp;–�&nbsp;задумывается,�&nbsp;в ту ли сторону
                        повернул,�&nbsp;на ту ли дорожку стал...
                      </p>
                      <h2>
                        镇 Камень </h2>
                      <p>
                        Гигантский валун,�&nbsp;являющийся культовым с языческих времен,�&nbsp;дал название
                        деревне.�&nbsp;В данное время она находится в составе 沃洛特овского района Новгородской
                        области,�&nbsp;расположена в 20 км.�&nbsp;от районного центра.
                      </p>
                      <p>
                        Во время Великой Отечественной войны 1941-45 г.г.�&nbsp;большинство населенных пунктов
                        Новгородской области были сожжены фашистами,�&nbsp;но Камень огонь пощадил.�&nbsp;По
                        преданиям,�&nbsp;Камень защитил людей,�&nbsp;помог избежать страшной участи,�&nbsp;но не защитил
                        он деревню от вымирания.�&nbsp;По статистике 2016 года в деревне проживало 12
                        人овек.�&nbsp;Ближайшие населенные пункты�&nbsp;–�&nbsp;Парник,�&nbsp;Деревик и
                        Заречье,�&nbsp;названия которых дышат стариной.�&nbsp;Все они с 2010 г.�&nbsp;входят в состав
                        �&nbsp;атицкого сельского поселения.�&nbsp;Многолюдной местность у валуна становится в день
                        Ивана Купала.�&nbsp;Приезжают туда язычники всей страны поклониться солнцу и
                        луне,�&nbsp;совершить обряды.�&nbsp;Да и в другие дни часто встретишь здесь людей,�&nbsp;кто в
                        трудную минуту пришел к камню выбрать свою дорогу,�&nbsp;подпитаться энергией земли
                        русской,�&nbsp;или полюбоваться на чудо природы,�&nbsp;ведь происхождение гранитного валуна
                        доподлинно неизвестно.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="430">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/priroda/?TOWN=430"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
            </div>
          </div>















        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>