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
                            center: [57.46947, 31.11561],
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
                          <td class="val">Поддорский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">2 863 чел </td>
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
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/325adfef84f79af54324b5355699079a.jpeg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              �&nbsp;асполагается в�&nbsp;162�&nbsp;км к�&nbsp;югу от�&nbsp;Великого Новгорода
                              на�&nbsp;реке �&nbsp;едья.
                            </p>
                            <p>
                              �&nbsp;айон относится к�&nbsp;экологической чистой зоне. Основным природным ресурсом
                              района является лес. На�&nbsp;территории района расположен государственный природный
                              заповедник «�&nbsp;дейский», государственный природный биологический заказник
                              «Поддорский».
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                        На�&nbsp;территории района находятся 5 храмов, один из�&nbsp;них является памятником архитектуры
                        и�&nbsp;градостроительства 18 века�&nbsp;— Церковь Смоленской Иконы Божией Матери дер. Марково.
                        Два Святых источника: Св. источник Андрея Первозванного и�&nbsp;Св. источник Нила Столобенского.
                        Два <nobr>камня-следовика</nobr>, гостиная лука на�&nbsp;берегу р. Ловать (где проходил путь
                        «из�&nbsp;варяг в�&nbsp;греки»). Множество валунов, один у�&nbsp;д. Перегино, упоминается
                        в�&nbsp;«Горном журнале» за�&nbsp;1824год. Также вдоль берега реки Ловать выявлены памятники
                        археологии: сопки, курганы, жальники датированные VIII�&nbsp;— XIII�&nbsp;в.в.
                      </p>
                      <p>
                        В�&nbsp;районе 10 воинских захоронений и�&nbsp;14 памятных знаков напоминают о�&nbsp;Великой
                        Отечественной войне. Центральное захоронение Самбатово�&nbsp;— самое большое�&nbsp;— находится
                        в�&nbsp;9�&nbsp;км от�&nbsp;районного центра Поддорье. Здесь покоится более 10 тыс. солдат.
                        В�&nbsp;<nobr>1942—1944 гг.</nobr> район Самбатово находился в�&nbsp;ближнем прифронтовом тылу
                        частей 1 Ударной Армии, в�&nbsp;7–8�&nbsp;км от�&nbsp;переднего края обороны советских войск.
                        В�&nbsp;1958 году в�&nbsp;районе проходило перезахоронение, сюда были перенесены останки воинов
                        из�&nbsp;братских и�&nbsp;одиночных могил многих деревень. Ежегодно 9�&nbsp;Мая здесь проходит
                        митинг.
                      </p>
                      <p>
                        Среди Памятников природы выделяется уникальное ягодное болото (клюква), которое имеет
                        гидрологическое значение и�&nbsp;Государственный природный биологический заказник «Поддорский»,
                        созданный с�&nbsp;целью сохранения, воспроизводства и�&nbsp;восстановления численности редких
                        и�&nbsp;исчезающих видов диких животных, среды их�&nbsp;обитания и�&nbsp;поддержание целостности
                        естественных сообществ на�&nbsp;территории района.
                      </p>
                      <p>
                        Среди особо охраняемые территории областного значения�&nbsp;— Болото Трофимовский мох.
                      </p>
                      <p>
                        В�&nbsp;районе находится памятник архитектуры и�&nbsp;градостроительства Церковь Смоленской
                        Иконы Божией Матери 18 века. Это единственный храм в�&nbsp;районе, который с�&nbsp;1750�&nbsp;г.
                        выдержал все периоды истории и�&nbsp;ныне действующий. Ежегодно (10 августа) в�&nbsp;престольный
                        праздник Пресвятой Богородицы в�&nbsp;честь Иконы Одигитрии, съезжаются сюда люди
                        с�&nbsp;окрестных деревень, с�&nbsp;городов Ленинграда, В.Новгорода, Старой �&nbsp;уссы.
                      </p>
                      <p>
                        На�&nbsp;берегу реки �&nbsp;едьи в�&nbsp;5�&nbsp;км от�&nbsp;районного центра Поддорье находится
                        источник Святого Нила Здесь старец остановился на�&nbsp;отдых, когда шел на�&nbsp;Старую
                        �&nbsp;уссу. Доброта местных людей удивила старца и�&nbsp;в�&nbsp;знак благодарности святой
                        оставил жителям источник, названный впоследствии его именем.
                      </p>
                      <p>
                        Во�&nbsp;время борьбы с�&nbsp;религией колодец был разрушен. В�&nbsp;<nobr>1990-х</nobr> годах
                        он�&nbsp;был благоустроен земляками- отцом и�&nbsp;сыном Сиговыми: Анатолием Алексеевичем
                        и�&nbsp;Юрием Анатольевичем.
                      </p>
                      <p>
                        Ежегодно 9 июня настоятель храма Святой Троицы с. Поддорья протоиерей Василий Киселев освящает
                        воды этого источника.
                      </p>
                      <p>
                        А�&nbsp;9 июня 2003�&nbsp;г. благочинным Старорусского округа протоиереем Амвросием
                        и�&nbsp;настоятелем храма Святой Троицы с. Поддорья было совершено освящение часовни
                        в�&nbsp;честь святого Нила.
                      </p>
                      <p>
                        На�&nbsp;краю села Перегино на�&nbsp;берегу Ловати находится почитаемый святой источник апостола
                        Андрея Первозванного, останавливавшегося, по�&nbsp;преданию, тут в�&nbsp;своем пути
                        на�&nbsp;остров Валаам. Вода из�&nbsp;источника по�&nbsp;вере приходящих к�&nbsp;нему исцеляет
                        страждущих. Здесь�&nbsp;же в�&nbsp;старые времена «на�&nbsp;воздусях», как рассказывали
                        старожилы, несколько раз являлась икона Пресвятой Богородицы. Однако, каждый раз, когда видевшие
                        святой образ протягивали руки, чтобы взять его, он�&nbsp;«уходил» от�&nbsp;них. Здесь�&nbsp;же,
                        у�&nbsp;источника, есть купальня.
                      </p>
                      <p>
                        В�&nbsp;селе Белебёлка Поддорского района с�&nbsp;2016 года реализуется проект по�&nbsp;созданию
                        <nobr>военно-исторического</nobr> музея под открытым небом «Партизанский лагерь», являющийся
                        символом всего партизанского движения на�&nbsp;Новгородской земле.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="39">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=39"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=39"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=39"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">9</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=39"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=39"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Поддорью</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/dorogami-voyny/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/72fd56aac5aeb9e8cb485fc1879009d3.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">500�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/dorogami-voyny/">
                      <div class="h3"><span>«Дорогами войны»</span></div>
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
                <a href="/routes/muzeynyy-kompleks-partizanskiy-kray-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/f5a4b17a7dbc0ee3498d316f5087f55d.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">200�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/muzeynyy-kompleks-partizanskiy-kray-/">
                      <div class="h3"><span>Музейный комплекс «Партизанский край» </span></div>
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












        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>