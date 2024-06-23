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
                            center: [58.39022, 33.54914],
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
                          <td class="val">14 730 人 </td>
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
                            <img src="images/165c5efa8accb7a5639d9d415e229769.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              На�&nbsp;реке Кересть, что является притоком Волхова, на�&nbsp;территории болотистой
                              Приильменской низменности, находится город 丘多沃�&nbsp;— районный центр Новгородской
                              области. Город практически равноудалён от�&nbsp;<nobr>Санкт-Петербурга</nobr>
                              и�&nbsp;Великого Новгорода, и�&nbsp;через него проходит важнейшая железнодорожная
                              магистраль, соединяющая Северную Столицу с�&nbsp;Москвой. Датой основания 丘多沃 считается
                              1539 год, когда 村庄 丘多沃 на�&nbsp;Керести вместе с�&nbsp;деревней Чудовская Лука были
                              зафиксированы в�&nbsp;поземельной описи Водской пятины.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/970d7fe93c0ab06c67403ec2f8dd7e28.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Крупное на�&nbsp;тот момент поселение появилось, очевидно, раньше. Возникновение названия
                              предпочитают относить к�&nbsp;племени чудь, что до�&nbsp;монгольского нашествия заселяло
                              эти земли. Однако структура названия позволяет видеть в�&nbsp;его основе прозвищное имя
                              Чудо, зафиксированное в�&nbsp;актах XVI�&nbsp;в. Когда из�&nbsp;Москвы к�&nbsp;Неве
                              проложили почтовый тракт, здесь, на�&nbsp;почтовом тракте, получил развитие ямской
                              промысел. 镇 丘多沃 превратилась в�&nbsp;丘多沃 Ям.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/70e81967d90448444953fb0ac6db734b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;начале XIX века жители села <nobr>Ям-丘多沃</nobr> занимались рыболовством,
                              заготовкой сена и�&nbsp;дров для продажи в�&nbsp;Петербург. Название <nobr>Ям-丘多沃
                              </nobr> сохранялось до�&nbsp;1851�&nbsp;г. Немало известных в�&nbsp;�&nbsp;оссии людей
                              делали остановку в�&nbsp;丘多沃, ожидая смены лошадей перед дальней дорогой. Одна
                              из�&nbsp;глав знаменитой книги <nobr>А. Н. �&nbsp;адищева</nobr> «„Путешествие
                              из�&nbsp;Петербурга в�&nbsp;Москву“» названа «„丘多沃“».
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a1aae1e421f8fd6902535e703737ab09.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;1849 году рядом c�&nbsp;丘多沃м прошла первая очередь Николаевской железной дороги
                              <nobr>Санкт-Петербург</nobr>�&nbsp;— Москва. В�&nbsp;честь открытия первой очереди дороги
                              по�&nbsp;ней до�&nbsp;Чудова прошёл императорский поезд, в�&nbsp;котором находился Николай
                              I. В�&nbsp;1871 году строительство узкоколейной железной дороги Новгород -丘多沃 было
                              закончено. 丘多沃 становится узловой железнодорожной станцией, возле которой вырос крупный
                              посёлок. На�&nbsp;берегах Волхова строятся корпуса фарфорофаянсовой фабрики <nobr>И. Е.
                                Кузнецова</nobr>, стекольный завод и�&nbsp;др.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/58a4f8322870b548c37664f4cbcac39d.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              К�&nbsp;1874�&nbsp;г. в�&nbsp;Грузино и�&nbsp;окрестностях было сосредоточено 12
                              из�&nbsp;14 спичечных фабрик губернии. Вскоре монополистом в�&nbsp;отрасли становится
                              акционерное общество <nobr>В. А. Лапшина</nobr>�&nbsp;— крупнейшего производителя спичек
                              в�&nbsp;�&nbsp;оссии. В�&nbsp;1877 году вместо двух деревянных вокзалов, располагавшихся
                              по�&nbsp;обе стороны полотна, построен каменный железнодорожный вокзал по�&nbsp;проекту
                              архитектора Лорберга. Это одно из�&nbsp;немногих в�&nbsp;городе зданий XIX века,
                              сохранившихся до�&nbsp;наших дней. В�&nbsp;1924–37 годах 丘多沃 имеет статус рабочего
                              посёлка, после чего становится городом.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/eb179107d04ec608a54590e44eb03010.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              С�&nbsp;августа 1941 по�&nbsp;январь 1944 года 丘多沃 было занято <nobr>
                                немецко-фашистскими</nobr> войсками. В�&nbsp;сквере возле вокзала возвышается
                              пирамидальный гранитный обелиск: это памятник чудовским железнодорожникам, погибшим
                              во�&nbsp;время оккупации города немецкими войсками. С�&nbsp;Чудовской землей связано
                              «Сказание о�&nbsp;хождении Апостола Андрея на�&nbsp;�&nbsp;усь». В�&nbsp;сказании
                              говорится, что в�&nbsp;I�&nbsp;веке <nobr>н. э.</nobr> Андрей из�&nbsp;Крыма
                              в�&nbsp;�&nbsp;им решил пробираться северным путем «из�&nbsp;варяг в�&nbsp;греки».
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/0e76d49626b0f75de5e83576a7c2f3cf.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;XVI�&nbsp;в. появилось дополнение о�&nbsp;хождении Андрея Первозванного, которое
                              рассказывает, что апостол дошел до�&nbsp;середины Волхова и�&nbsp;там водрузил или
                              «погрузил» в�&nbsp;землю свой жезл, осенив благодатью всю Новгородскую землю. Память
                              об�&nbsp;этом событии сохранилась в�&nbsp;названии села Грузино (12�&nbsp;км
                              от�&nbsp;Чудова), где в�&nbsp;XVI�&nbsp;в. был сооружен каменный собор Андрея
                              Первозванного.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/03f5297d93e5d6ee095d6d404148385d.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Хождение на�&nbsp;русскую землю Андрея воодушевило Петра I�&nbsp;на�&nbsp;разработку флага
                              для российского флота с�&nbsp;изображением креста, на�&nbsp;котором был распят Андрей
                              Первозванный. В�&nbsp;настоящее время в�&nbsp;丘多沃 проживает 16 тыс. жителей. Главными
                              достопримечательностями города и�&nbsp;района являются <nobr>дом-музей</nobr>
                              <nobr>Н. А. Некрасова</nobr>, <nobr>дом-музей</nobr>
                              <nobr>Г. И. Успенского</nobr> и�&nbsp;<nobr>завод-музей</nobr>
                              <nobr>И. Е. Кузнецова</nobr>.
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

          <input type="hidden" id="cityId" value="26">


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в 丘多沃</div>
            <div class="block-ext-content">
              Несмотря на то, что город 丘多沃 – небольшой населённый пункт на пути главной трассы �&nbsp;оссии –
              Москва-Санкт-Петербург, но именно здесь останавливались, вдохновлялись, жили и творили великие русские
              писатели и общественные деятели. И именно через 丘多沃 проходила знаменитая Государева дорога.<br>
              <h3>
                ДОМ-МУЗЕЙ Н.А. НЕК�&nbsp;АСОВА </h3>
              <p>
                Экспозиция располагается в охотничьем домике Некрасова на территории усадьбы «Чудовская Лука», которую
                писатель купил в 1871 году. Сюда он приезжал для отдыха от городских забот и тревог. В усадьбе написаны
                11 стихотворений его «Чудовского цикла», начата работа над поэмой «Современники» и четвертой главой
                «Кому на �&nbsp;уси жить хорошо». Сегодня здесь воссоздана обстановка некрасовского времени. 主页
                комната музея — кабинет поэта с его подлинными вещами.
              </p>
              <h3>
                ДОМ-МУЗЕЙ Г.И. УСПЕНСКОГО </h3>
              <p>
                Дом-музей Г. И. Успенского в деревне Сябреницы открыт в 1935 году в доме писателя, где он жил с семьей в
                1881 — 1882 годах. �&nbsp;асположен на автотрассе Санкт-Петербург — Москва. Отсюда Успенский отправлялся
                в свои многочисленные путешествия по �&nbsp;оссии. Это единственный в нашей стране
                литературно-мемориальный музей писателя.
              </p>
              <h3>
                ГЛАВНЫЙ КОМПЛЕКС ШТАБА Г�&nbsp;ЕНАДЕ�&nbsp;СКОГО Г�&nbsp;АФА А�&nbsp;АКЧЕЕВА ПОЛКА </h3>
              <p>
                Аракчеевские казармы, а точнее руины,�&nbsp; находятся в деревне Селищи. Это место�&nbsp; на правом
                берегу реки Волхов, в 48 км севернее Великого Новгорода на автодороге �&nbsp;-53 Спасская Полисть –
                小维舍拉 – 柳比蒂诺 – 博罗维奇. Именно с Селищенского военного поселения началась история военных
                поселений первой половины XIX века в Новгородской губернии. Сюда в августе 1816 года был отправлен 2-ой
                батальон гренадерского графа Аракчеева полка.
              </p>
              <p>
                Строительство комплекса началось в 1818 г. под началом инженера К.Ф. Детлова. Комплекс включал манеж с
                церковью, гауптвахту и четыре двухэтажных дома со службами.
              </p>
              <p>
                Пребывание гусар в казармах в Селищах считалась своеобразной «ссылкой» из-за жёсткой дисциплины и уклада
                жизни в этих казармах. Именно в этих казармах в Селищах в 1872 году в Селищах Сергей Дягилев – русский
                театральный и художественный деятель, организатор «�&nbsp;усских сезонов» в Париже и труппы
                «�&nbsp;усский балет Дягилева».
              </p>
              <p>
                Во время Второй мировой войны казармы были разрушены. Но оценить масштабы строительства и военной мощи
                тех лет можно и по оставшимся руинам.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=26"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=26"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=26"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/vystavki/?TOWN=26"
                style="background-image:url(images/8ebdb49d07c61b2d8032b7331dd4fa72.JPG); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">12</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Выставки</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=26"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=26"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=26"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=26"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=26"
                style="background-image:url(images/cf8a80fd60face7ce229b62c2f7ef064.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Здания</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по 丘多沃</div>
            <div class="block-ext-content">
              <p>
                <a href="https://novgorod.travel/routes/arakcheevskaya-tropa/">«А�&nbsp;АКЧЕЕВСКАЯ Т�&nbsp;ОПА»</a>
              </p>
              <p>
                Обзорная экскурсия по селу Грузино знакомит туристов с бывшей усадьбой и ее уникальным архитектурно –
                парковым ансамблем, а также с жизнедеятельностью ее владельца, выдающегося государственного и военного
                деятеля Алексея Андреевича Аракчеева.
              </p>
              <p>
                Продолжительность: 2 часа
              </p>
              <p>
                <a href="https://novgorod.travel/routes/avtoekskursiya-proshloe-i-nastoyashchee-goroda-chudovo-/">АВТОЭКСКУ�&nbsp;СИЯ
                  «П�&nbsp;ОШЛОЕ И НАСТОЯЩЕЕ ГО�&nbsp;ОДА 丘多沃»</a>
              </p>
              <p>
                Продолжительность: 1 час. Объекты маршрута: <br>
              </p>
              <ul>
                <li>Церковь Казанской иконы Божией Матери; </li>
                <li>Вокзал;</li>
                <li>Промышленные предприятия; </li>
                <li>Объекты культуры и отдыха.</li>
              </ul>
              <p>
              </p>
              <p>
                Подробнее о других маршрутах по 丘多沃 можно узнать <a
                  href="https://novgorod.travel/routes/?TOWN=26">здесь</a>
              </p>
              <a href="https://novgorod.travel/routes/?TOWN=26"></a>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/ekskursiya-k-memorialu-vechnyy-ogon/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">300�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/ekskursiya-k-memorialu-vechnyy-ogon/">
                      <div class="h3"><span>Экскурсия к мемориалу «Вечный огонь»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">30 минут</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/gruzinskiy-podkop-/">
                  <div class="object-tmb-pic" style="background-image: url();">
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
                    <a href="/routes/gruzinskiy-podkop-/">
                      <div class="h3"><span>«Грузинский подкоп» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/avtoekskursiya-dorogami-pobedy-mesta-voinskogo-podviga-i-slavy-na-chudovskoy-zemle/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">800�&nbsp;<span>р.</span></div>
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
                    <a
                      href="/routes/avtoekskursiya-dorogami-pobedy-mesta-voinskogo-podviga-i-slavy-na-chudovskoy-zemle/">
                      <div class="h3"><span>Автоэкскурсия «Дорогами Победы: места воинского подвига и славы на Чудовской
                          земле»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">3 часа</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в 丘多沃</div>
            <div class="block-ext-content">
              <p>
                <!--noindex--><a rel="nofollow"
                  href="http://dsm-chudovo.ru/category/%D0%B1%D0%B0%D1%81%D1%81%D0%B5%D0%B9%D0%BD-%D0%B4%D0%B5%D0%BB%D1%8C%D1%84%D0%B8%D0%BD">Дворец
                  спорта «Молодёжный»</a><!--/noindex-->
              </p>
              <p>
                Во время путешествий не стоит забывать о здоровом образе жизни. Бассейн, тренажёрный зал, занятия йогой
                или пилатес – в помощь туристу. В 丘多沃 есть спортивный плавательный бассейн и другая инфраструктура
                для занятий спортом.
              </p>
              <p>
                <!--noindex--><a rel="nofollow" href="https://vk.com/novgporcelain">Новгородский Фарфор (Художественная
                  лаборатория)</a><!--/noindex-->
              </p>
              <p>
                Мастер классы по изготовлению посуды из фарфора
              </p>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в 丘多沃</div>
            <div class="block-ext-content">
              <p>
                <!--noindex--><a rel="nofollow" href="http://www.river-club.info/">�&nbsp;ЕСТО�&nbsp;АН
                  «ПАЛУБА»</a><!--/noindex-->
              </p>
              <p>
                �&nbsp;есторан на 1 этаже старинного купеческого особняка XIX века, где расположена гостиница «Волхов
                Мост». Интерьер напоминает корабельную палубу, а из окна открывается великолепный вид на Волхов. В меню
                преобладают традиционные русские блюда, обязательно наличие сезонных блюд. Достойны похвалы фирменные
                блюда, приготовленные в русской печи, пироги, вино и соленья.
              </p>
              <br>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/restoran-paluba/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/0ca83d3d444aa04141a4ddd160e15fbd.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">-10%</div>
                        <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">丘多沃</a></li>
                    </ul>
                    <a href="/restaurants/restoran-paluba/">
                      <div class="h3"><span>�&nbsp;есторан «Палуба»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>�&nbsp;усская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в 丘多沃</div>
            <div class="block-ext-content">
              <p>
                <!--noindex--><a rel="nofollow" href="http://www.river-club.info/">ОТЕЛЬ «ВОЛХОВ
                  МОСТ»</a><!--/noindex-->
              </p>
              <p>
                Загородный отель на берегу реки Волхов в 3-этажном старинном купеческом особняке XIX века, входит в
                состав одноименного речного клуба. Отель располагает 22 комфортабельными номерами, позволяющими
                единовременно разместить до 60 人овек. Здесь можно воспользоваться гребной лодкой, катамараном и другим
                снаряжением, которые предлагает речной клуб. Для владельцев катеров и яхт предусмотрен удобный причал.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/volkhov-most/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/c671bd286892afabdf27985589094a39.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">丘多沃</a></li>
                    </ul>
                    <a href="/hotels/volkhov-most/">
                      <div class="h3"><span>Отель «Волхов Мост»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостиница</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/motel-chudovo/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/3b6df8be8496adb8ff676d81a9537f88.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">丘多沃</a></li>
                    </ul>
                    <a href="/hotels/motel-chudovo/">
                      <div class="h3"><span>Мотель «丘多沃»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Гостиница</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что привезти из 丘多沃</div>
            <div class="block-ext-content">
              <p>
                Самые популярные сувениры из 丘多沃 - это предметы из бересты и глины. Из бересты – это изделия и копии
                грамот. Глиняные игрушки – фигурки свистулек-петушков, которые ценились ещё купцами в начале ХХ века.
              </p>
              <p>
                Всегда можно увезти с собой на память вкусные гастрономические подарки – пряники, мёд, чай, конфеты.
              </p>
              <h3>Синий фарфор </h3>
              <p>
                �&nbsp;аньше 丘多沃 район славился своими производствами фарфоровой посуды. Все помнят красивые синие
                чашечки и блюдца в сервантах у бабушек? Но сегодня гиганты производства утратили свою мощь, но на их
                месте создаются небольшие уютные производства и мастерские. Побывать на мастер-классе, создать свой
                собственный сувенир, и узнать, как возрождают производство фарфора в �&nbsp;оссии можно в городе 丘多沃
                в Новгородской области в Художественной лаборатории «Новгородский фарфор» а также в Музейном цехе
                фарфора в Великом Новгороде.
              </p>
              Подробнее о сувенирах из Новгородской области можно прочитать <a
                href="https://novgorod.travel/bring/">здесь</a>.
            </div>
          </div>


        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>