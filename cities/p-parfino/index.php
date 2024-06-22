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
                            center: [57.97306, 31.64806],
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
                          <td class="val">Парфинский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">6 784 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Поселок</td>
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
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c0ac60d00579c026deee2779cdbb5825.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Парфинский район образован 13 декабря 1968 года. Несмотря на�&nbsp;свою молодость,
                              он�&nbsp;имеет богатую историю. По�&nbsp;реке Ловать проходил древнейший путь
                              «„из�&nbsp;варяг в�&nbsp;греки“». Благоприятное географическое положение, природные
                              ресурсы издавна привлекали на�&nbsp;эти земли людей. Об�&nbsp;этом свидетельствуют
                              многочисленные археологические памятники. Наибольший интерес представляют древнее городище
                              у�&nbsp;д. Городок на�&nbsp;р. Маята с�&nbsp;культурным слоем 40�&nbsp;— 60�&nbsp;см,
                              группа сопок у�&nbsp;д. �&nbsp;ябутки, состоящая из�&nbsp;12 насыпей различного размера
                              и�&nbsp;диаметра.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/95d050d02d5af3068916c4f7db8258f1.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Деревни и�&nbsp;села Парфинского района имеют многовековую историю. Например, первое
                              летописное упоминание о�&nbsp;селе Налючи относится к�&nbsp;1200 году. Это село, как
                              и�&nbsp;другие, расположенные на�&nbsp;реке Пола, известны по�&nbsp;так называемому
                              Селигерскому пути из�&nbsp;Новгорода на�&nbsp;Волгу, в�&nbsp;«„низовые земли“». Здесь было
                              расположено имение Екатерины Стройновской�&nbsp;— Зуровой, женщины, которая
                              по�&nbsp;мнению многих пушкинистов являлась прототипом героини пушкинской поэмы «„Домик
                              в�&nbsp;Коломне“» и, возможно, Татьяны Лариной из�&nbsp;«„Евгения Онегина“».
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/3f3ba63d4ba4d53f6a51d88d18e55660.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Во�&nbsp;время войны усадьба Зуровых была разрушена и�&nbsp;только пруды, выполненные
                              в�&nbsp;форме вензеля «„Е“» напоминают о�&nbsp;былом величии и�&nbsp;великолепии.
                              Сенопрессовальное производство в�&nbsp;деревне Хмелево имел Карл Федорович Сименс.
                              На�&nbsp;территории района в�&nbsp;д. Хмелево сохранились остатки барской усадьбы�&nbsp;—
                              графские конюшни XIX века, фрагменты «красной» дороги, выложенной из�&nbsp;красного
                              кирпича. В�&nbsp;1861 году Сименс открыл завод в�&nbsp;деревне Городок
                              по�&nbsp;производству электрических изоляторов. Деревня Городок пересекается удивительно
                              прямой, с�&nbsp;ровными берегами�&nbsp;— рекой Черёнкой, соединяющей судоходную реку
                              Ловать со�&nbsp;старыми заводскими карьерами Сименса, где якобы добывали глину,
                              а�&nbsp;теперь ловят огромных карасей, и�&nbsp;территорией бывшего завода.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/fb4b2aa4b130f6ede628220f84e0f5c8.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              По�&nbsp;рассказам старожилов�&nbsp;— это рукотворный канал, по�&nbsp;которому баржи
                              Сименса регулярно ходили через <nobr>Ильмень-озеро</nobr> и�&nbsp;Волхов, между заводом
                              в�&nbsp;Городке и�&nbsp;<nobr>Санкт-Петербургом</nobr>, а�&nbsp;при необходимости шли
                              и�&nbsp;далее в�&nbsp;Германию. Декларировалось, что оттуда доставлялось заводское
                              оборудование, обратно отправлялись ящики с�&nbsp;заводской продукцией. Деревня Городок
                              расположена в�&nbsp;географическом месте, подобных которому наберётся не�&nbsp;более
                              десятка на�&nbsp;всей планете. В�&nbsp;километре от�&nbsp;неё три реки: Ловать, Пола
                              и�&nbsp;Верготь образуют своими руслами водный крест на�&nbsp;ключевом выходе из�&nbsp;
                              <nobr>Ильмень-озера</nobr>.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/5dbb0016ea4698aa60b191418a534b88.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Начиная с�&nbsp;<nobr>4-го</nobr> века, что подтверждают и�&nbsp;летописные документы, это
                              место было перекрестком двух мощных международных торговых путей�&nbsp;— «Из�&nbsp;варяг
                              в�&nbsp;греки» и�&nbsp;«Волжского серебряного», которые функционировали вплоть до�&nbsp;11
                              века. Благоприятная экологическая обстановка, отсутствие вблизи вредных производств
                              создают возможности для развития разных видов туризма (фермерского, этнографического,
                              охота, рыбалка <nobr>и т. д.</nobr>).
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/29ffd19e13ee8a5d7fd98bad618566f2.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Муниципальный район обладает богатым культурным наследием, которое включает в�&nbsp;себя
                              памятники археологии, архитектуры. Всего в�&nbsp;районе 36 археологических памятников,
                              занесенных в�&nbsp;государственный список и�&nbsp;находящихся под охраной как памятники
                              местного значения. �&nbsp;айон богат чистейшими подземными водными источниками.
                              Сохранились остатки барских усадеб. У�&nbsp;района богатая военная история, на�&nbsp;его
                              территории расположены 39 воинских захоронения, памятные знаки Героям Советского Союза,
                              обелиски и�&nbsp;памятники…»
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

          <input type="hidden" id="cityId" value="38">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=38"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=38"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=38"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=38"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">11</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=38"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=38"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=38"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Парфино</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/tam-gde-larinka-struitsya-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/0b669889f43673a4c13f3debd2a2f708.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num"> 200 рублей�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/tam-gde-larinka-struitsya-/">
                      <div class="h3"><span>«Там, где Ларинка струится…» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">3 часа 30 минут</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/zhemchuzhina-provintsii-derevnya-gorodok-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/abb5de8476c9208c4fb5b4d497eafaf5.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">10�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/zhemchuzhina-provintsii-derevnya-gorodok-/">
                      <div class="h3"><span>«Жемчужина провинции - деревня Городок» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа 30 минут </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/-u-istokov-reki-volkhov/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/6cd76cdd9bc225de4e35e30eae185526.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">50 до 170�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Детский отдых</li>
                    </ul>
                    <a href="/routes/-u-istokov-reki-volkhov/">
                      <div class="h3"><span> «У истоков реки Волхов»</span></div>
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
            <div class="h2" style="margin-top: 0;">Куда сходить в Парфино</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/festival-narodnogo-tvorchestva-senoval/" style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>29 </span> июн</div>
                    <div class="h3"><span>Фестиваль народного творчества «Сеновал»</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Парфинский район, Парфино, берег реки Ловать</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>







          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что привезти из Парфино</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/polavskie-kovry/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/f5ec81082f5560595bd96e097f896793.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/polavskie-kovry/">
                    <div class="h3">Полавские ковры</div>
                    <p>Ковры, сотканные в поселке Пола Парфинского района в ручную получали самые высокие оценки на
                      фестивале в Каннах!
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>