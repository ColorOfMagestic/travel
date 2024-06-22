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
                    <div class="btn-object-map"><span>Смотреть на карте</span></div>
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
                          <td class="name">�&nbsp;айон:</td>
                          <td class="val">Мошенской</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">2 065 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Село</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">
                  <div class="block-ext-parent">
                    <div class="h2" style="margin-top: 0;">О населенном пункте</div>
                    <div class="block-ext-content">
                      <p>
                        Мошенское является старинным селом, упоминания о�&nbsp;котором встречаются в�&nbsp;писцовых
                        книгах Бежецкой пятины с�&nbsp;1545 года�&nbsp;— «Никольский погост в�&nbsp;Мошне» упоминается
                        под этим годом.
                      </p>
                      <p>
                        Имя села, вероятно, происходит от�&nbsp;слова «Мошна»�&nbsp;— кошель, богатство, или
                        «мха»�&nbsp;— мшинское, моховое. Хотя загадка имени села и�&nbsp;сегодня остается. Это имя
                        население связывает с�&nbsp;большим количеством зажиточных поместий по�&nbsp;берегам реки Уверь
                        в�&nbsp;XVI веке или с�&nbsp;боровыми мхами на�&nbsp;крутых берегах реки.
                      </p>
                      <p>
                        По�&nbsp;берегам реки имеются сопки�&nbsp;— как археологические памятники, которые показывают,
                        что берега Увери устойчиво заселялись уже около тысячи лет назад. А�&nbsp;первые люди устраивали
                        временные стоянки здесь еще в�&nbsp;каменном веке.
                      </p>
                      <p>
                        На�&nbsp;Никольской стороне церковь каменная, с�&nbsp;каменной колокольней, построена
                        в�&nbsp;1787 году. Здание было попорчено разрушениями и�&nbsp;переделками. В�&nbsp;1992 году
                        здание передано Новгородской Епархии. Сейчас в�&nbsp;храме святого Николая Чудотворца
                        совершаются службы, обряды, возрождается приходская жизнь.
                      </p>
                      <p>
                        Из�&nbsp;многочисленных усадеб 19 века некоторые сохранились и�&nbsp;до�&nbsp;наших дней.
                        На�&nbsp;высоком берегу реки Уверь в�&nbsp;центре Мошенского удачно вписался в�&nbsp;современную
                        застройку усадебный дом Круглика, лесопромышленника из�&nbsp;<nobr>Санкт-Петербурга</nobr>.
                        �&nbsp;адует глаз деревянным кружевом дом купца А. �&nbsp;ябова на�&nbsp;левобережной стороне
                        райцентра. Сейчас в�&nbsp;нем разместился музей. Также к�&nbsp;объектам культурного наследия
                        села относятся три усадьбы Божерянова.
                      </p>
                      <p>
                        В�&nbsp;центре Мошенского на�&nbsp;левом берегу Увери стоит церковь Покрова Божьей Матери,
                        построенная в�&nbsp;1764 году помещиком <nobr>И. М. Левашовым</nobr>.
                      </p>
                      <p>
                        Сопки, курганы, жальники показывают, что берега реки Уверь были заселены уже около тысячи лет
                        назад. На�&nbsp;территории села расположена сопка, она относится к�&nbsp;объектам культурного
                        наследия.
                      </p>
                      <p>
                        Среди памятных мест в�&nbsp;Мошенском�&nbsp;— школа, в�&nbsp;которой училась разведчица Зоя
                        Круглова. Здание, построенное помещиком <nobr>С. Я. Цацурой</nobr> в�&nbsp;1872 году, было
                        впоследствии продано земству. С�&nbsp;1872 года в�&nbsp;нем размещалась земская школа.
                        На�&nbsp;фасаде школы размещена мемориальная доска. С�&nbsp;Мошенским районом связана жизнь
                        многих интересных и�&nbsp;известных людей �&nbsp;оссии.
                      </p>
                      <p>
                        В�&nbsp;конце XVIII века в�&nbsp;имение Спас на�&nbsp;Мошне, которое принадлежало Петербургскому
                        прокурору Ивану Левашову, приезжал погостить прославленный русский стихотворец Гаврила
                        �&nbsp;оманович Державин и�&nbsp;пианист Фильд.
                      </p>
                      <p>
                        Географ, этнограф, публицист, <nobr>генерал-лейтенант</nobr> Алексей Иванович Макшеев, друживший
                        в�&nbsp;молодости с�&nbsp;Тарасом Шевченко и�&nbsp;близко знавший таких знаменитых людей, как
                        <nobr>Буташевич-Петрашевский</nobr>, Герцен и�&nbsp;Плещеев, подолгу жил в�&nbsp;имении Олехово
                        на�&nbsp;берегу озера Великое и�&nbsp;даже опубликовал в�&nbsp;«Памятной книжке Новгородской
                        губернии на�&nbsp;1864 год» свое исследование «О�&nbsp;рыболовстве на�&nbsp;озере Великом».
                        Время пощадило парк усадьбы <nobr>А. И. Макшеева</nobr>, который относится к�&nbsp;памятникам
                        <nobr>садово-паркового</nobr> искусства. Парк охраняется государством. В�&nbsp;нем установлен
                        памятный знак.
                      </p>
                      <p>
                        С�&nbsp;Мошенским краем был тесно связан знаменитый детский писатель Виталий Валентинович
                        Бианки. Дом в�&nbsp;д. Михеево, где жила семья <nobr>В. В. Бианки</nobr> с�&nbsp;1935
                        по�&nbsp;1942 год, сохранился и�&nbsp;ежегодно становится центром «бианковских чтений», где
                        собираются известные люди, школьники, молодежь, гости из�&nbsp;<nobr>Санкт-Петербурга</nobr>
                        и�&nbsp;городов Новгородской области.
                      </p>
                      <p>
                        В�&nbsp;«Стране Див» Мошенского муниципального округа В. Бианки много и�&nbsp;интересно работал,
                        ходил на�&nbsp;охоту, с�&nbsp;группой юннатов из�&nbsp;Ленинграда вел наблюдения
                        за�&nbsp;птицами. Кроме рассказов и�&nbsp;очерков, задуманных и�&nbsp;написанных
                        в�&nbsp;Яковищах и�&nbsp;Михееве, он�&nbsp;оставил основательное научное исследование «Птицы
                        Мошенского района».
                      </p>
                      <p>
                        В�&nbsp;1998 году на�&nbsp;доме в�&nbsp;д. Михеево, где жил писатель, установлена мемориальная
                        доска.
                      </p>
                      <p>
                        Проект «Путешествие в�&nbsp;страну Див», туристический маршрут, где с�&nbsp;1935�&nbsp;— 1942
                        годы жил писатель В. Бианки, установлен памятный камень на�&nbsp;границе ««Страны Див».
                        С�&nbsp;1994 года проводятся «Бианковские чтения».
                      </p>
                      <p>
                        В�&nbsp;годы Великой Отечественной войны известный русский художник Илья Глазунов мальчиком был
                        вывезен из�&nbsp;блокадного Ленинграда в�&nbsp;д. Гребло. Полуживого от�&nbsp;истощения его
                        выходила Марфа Скородумова. Впечатления от�&nbsp;Мошенского края, его озер оставили глубокий
                        след в�&nbsp;его душе. Многие известные художественные произведения И. Глазунова были навеяны
                        воспоминаниями детства.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="37">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=37"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=37"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">8</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=37"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">8</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=37"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=37"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=37"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Мошенскому</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/malaya-rodina-bolshogo-geroya-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/0891e7da02a65ced707d35b538ccf9c5.png);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">450�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/malaya-rodina-bolshogo-geroya-/">
                      <div class="h3"><span>«Малая �&nbsp;одина большого Героя» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">6 часов</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/pod-pokrovom-bogoroditsy/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/942167d979dc446bc534d2b6413e797d.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1100�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/pod-pokrovom-bogoroditsy/">
                      <div class="h3"><span>«Под покровом Богородицы»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/zhemchuzhiny-zemli-russkoy-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/e7d2bf9bc62864a783179fda71b07701.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1100�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/zhemchuzhiny-zemli-russkoy-/">
                      <div class="h3"><span>«Жемчужины Земли �&nbsp;усской» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>








          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Мошенскому</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/chuchemlya-eco-village/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/d6347fa65667b29e53d7642a640f5fbd.jpeg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Мошенское</a></li>
                    </ul>
                    <a href="/hotels/chuchemlya-eco-village/">
                      <div class="h3"><span>Chuchemlya eco village (Чучемля)</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">База отдыха</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-meglino/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/a7572da994992258ad5f1fe3c2ea88c9.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Мошенское</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-meglino/">
                      <div class="h3"><span>База отдыха «Меглино»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">База отдыха</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-v-stolbovo/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/c292f365a5e64c4785b5dc842eb78af0.png);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Мошенское</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-v-stolbovo/">
                      <div class="h3"><span>База отдыха в Столбово</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">База отдыха</div>
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