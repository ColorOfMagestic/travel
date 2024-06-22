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
                            center: [58.81222, 33.39222],
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
                          <td class="val">Любытинский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">2 535 чел </td>
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
                            <img src="images/a042ebf63048d0b8b01c7e761872715b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Посёлок Любытино входит в�&nbsp;перечень исторических городов �&nbsp;оссии. Прежнее его
                              название�&nbsp;— село Белое. Посёлок расположен на�&nbsp;правом берегу реки Мсты где
                              в�&nbsp;древности был центр округи, именуемой в�&nbsp;документах и�&nbsp;летописях
                              Помостьем. С�&nbsp;Помостьем связывают учреждение в�&nbsp;947 г. княгиней Ольгой
                              административных пунктов на�&nbsp;реке Мсте�&nbsp;— погостов для сбора дани.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/2b7fb96cb3e5dbb6f0f8e6d3a2afd0d9.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Через посёлок протекают также реки Белая и�&nbsp;Забитица�&nbsp;— правые притоки Мсты.
                              Впервые упоминается как погост Прокопьевский на�&nbsp;реке Белой в�&nbsp;писцовых книгах
                              Бежецкой пятины Новгородской земли в�&nbsp;1581–1583 годах, а�&nbsp;деревня Бор
                              на�&nbsp;левом берегу Мсты упоминается как погост Бельский раньше�&nbsp;— около 1495 года.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/b474da319f28ed892531ef7d5510a5be.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              На�&nbsp;рубеже <nobr>XIX–XX</nobr> веков это уже село Белое, в�&nbsp;котором имелась
                              только одна улица из�&nbsp;30 дворов, а�&nbsp;население села составляло 150 человек. Через
                              село по�&nbsp;Мсте шла торговля лесом, мукой, скотом, горшечной продукцией.
                              В�&nbsp;1911�&nbsp;г. в�&nbsp;честь Александра II�&nbsp;в.�&nbsp;поселке Любытино был
                              открыт памятник. Александр II�&nbsp;вошел в�&nbsp;историю как <nobr>император-освободитель
                              </nobr>, так как именно при нем произошла отмена крепостного права.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/70a479cc3080c174ab23034b826e07dc.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              После революции 1917�&nbsp;г. он�&nbsp;был утрачен. По�&nbsp;инициативе жителей
                              Любытинского района памятник был воссоздан и�&nbsp;открыт в�&nbsp;2014�&nbsp;г.
                              В�&nbsp;самом центре посёлка Любытино, у�&nbsp;моста через реку Мсту, возвышаются
                              грандиозные сопки�&nbsp;— погребальные сооружения славян высотой 8–10�&nbsp;метров. Более
                              200 подобных насыпей разной высоты известно в�&nbsp;ближайшей округе поселка. С�&nbsp;2009
                              года поселок Любытино стал новым туристским центром Новгородской области, благодаря
                              открытию Музея под открытым небом «Славянская деревня X�&nbsp;века».
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="35">

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Видео о Любытинском районе</div>
            <div class="block-ext-content">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/EtgsewveEFw?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe> <br>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Любытино</div>
            <div class="block-ext-content">
              <p>
                Любытино – посёлок в Новгородской области, который туристы прозвали «новгородской Швейцарией» из-за
                сложного, неравномерного ландшафта местности, где перепады высот достигают 100-150 метров.
              </p>
              <p>
                А место действительно уникальное: здесь сохранились редкие природные ландшафты, карстовые озера, пороги
                и водопады на реках Белая и Прикша. А ещё Любытино – это место, где находится большое сосредоточение
                археологических памятников.
              </p>
              <h3>
                ЭКСПОЗИЦИЯ «СЛАВЯНСКАЯ ДЕ�&nbsp;ЕВНЯ X ВЕКА»</h3>
              <p>
                Экспозиция представляет собой комплекс жилых и хозяйственных построек (клети, амбара, погреба, хлебной
                печи, кузницы), расположенных под открытым небом. Это не привычный музей, где трогать экспонаты
                категорически запрещено. Тут можно не только разглядывать, но и попробовать сделать своими руками то,
                что делали древние новгородцы: размолоть зерно в ступе или жерновах, попытаться добыть огонь с помощью
                кресала, растопить печь и зажечь лучину.
              </p>
              <p>
                Каждый желающий сможет примерить красивый славянский наряд или облачиться в кольчугу и шлем воинов,
                поупражняться с мечом и щитом, метнуть копье. �&nbsp;адушные хозяева деревни познакомят вас с культурой,
                обычаями и верованиями наших предков.
              </p>
              <h3>
                УСАДЬБА А.В.СУВО�&nbsp;ОВА В ДЕ�&nbsp;ЕВНЕ КАМЕНКА</h3>
              <p>
                На берегу озера Каменского, в 18 км от посёлка Любытино находится Усадьба великого русского полководца
                Александра Суворова. Деревянный усадебный дом XVIII века церковь Александра Невского XIX века
                сохранились в хорошем состоянию и доступны к посещению туристов. По мнению некоторых библиографов и
                историков, знаменитый полководец родился именно в этой усадьбе. На это указывают и воспоминания внука
                генералиссимуса - Александра Аркадьевича Суворова.
              </p>
              <h3>
                �&nbsp;ОДОВАЯ УСАДЬБА ГО�&nbsp;ЕМЫКИНА</h3>
              <p>
                И.Л.Горемыкин – общественный деятель, последний председатель совета министров царского правительства
                Николая II.
              </p>
              <p>
                Министерская усадьба находится в центре посёлка Любытино на правом берегу реки Мсты при впадении в неё
                реки Белой. Сохранилось 6 построек кон. XIX в. усадебный парк и родовой склеп. Будет интересно
                посмотреть строение, выстроенное в готическом стиле. Сейчас здесь размещается детская школа искусств
                Любытино.
              </p>
              <h3>
                СОБО�&nbsp; �&nbsp;ОЖДЕСТВА П�&nbsp;ЕСВЯТОЙ БОГО�&nbsp;ОДИЦЫ</h3>
              <p>
                Недалеко от усадьбы Горемыкина расположен Собор �&nbsp;ождества Пресвятой Богородицы. Храм построен в
                году на месте сгоревшей в 1884 году церкви Архистратига Михаила. Сейчас здесь располагается Любытинский
                дом культуры.
              </p>
              <h3>
                ЦЕ�&nbsp;КОВЬ УСПЕНИЯ П�&nbsp;ЕСВЯТОЙ БОГО�&nbsp;ОДИЦЫ 1832 ГОДА </h3>
              <p>
                Церковь Успения Пресвятой Богородицы воздвигнута на левом берегу р. Мсты напротив усадьбы И.Л.
                Горемыкина. Это редкий тип храма «под звоном», у которых ярус с колоколами помещен на основном объёме
                строения, под главой. Церковь построена за деньги полковника Александра Васильевича Ханыкова в честь
                20-летия победы над Наполеоном. Достоинства композиционного и архитектурного решения предполагают В
                настоящий момент церковь передана Новгородской епархии и находится на реставрации.
              </p>
              <h3>
                Т�&nbsp;АКТО�&nbsp; ХТЗ </h3>
              <p>
                Памятник первым механизаторам - цельнометаллический трактор ХТЗ выпуска 30-х годов - в 1967 году
                установлен в п. Любытино.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=35"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=35"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=35"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/aktivnyy-otdykh/?TOWN=35"
                style="background-image:url(images/9b7749d95eb1c4c1b1bf1b402a106ce7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Активный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=35"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=35"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=35"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=35"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=35"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Любытино</div>
            <div class="block-ext-content">
              <h3>
                А�&nbsp;ХЕОЛОГИЧЕСКИЙ ЗАПОВЕДНИК </h3>
              <p>
                Это единственный в Новгородской области археологический заповедник.
              </p>
              <p>
                250 погребальных памятников, многие из которых достигают 6-9 метровой высоты и поселений VI-XVI вв. н.
                э., расположенный в долине р. Белой - правого притока р. Мсты на территории 3,5 х 10 км. Эта территория
                сыграла важную роль в процессе формирования Новгородских земель. Особое значение имеют памятники эпохи
                славянского расселения в регионе и образования древнерусского государства.
              </p>
              <p>
                Учитывая особую значимость этих территорий решением Новгородского облисполкома № 177 от 21 апреля 1986
                года здесь был организован единственный в Новгородской области археологический заповедник.
              </p>
              <h3>
                ВОДОПАД НА �&nbsp;ЕКЕ БЕЛАЯ </h3>
              <p>
                В 1988 году долине реки Белая присвоен статус памятника природы регионального значения. Здесь множество
                археологических и исторических памятников, различные геологические обнажения, водопады, разнообразные
                проявления карста.
              </p>
              <p>
                Водопад крупный для сравнительно небольшой реки. Длина его почти 7 метров, высота около 1,5 м. Вода
                падает с известкового уступа, образуя большое количество пены. Шум от водопада слышен за несколько
                десятков метров.
              </p>
              <p>
                Подробности о маршруте - <a href="mailto:lubytino-museum@yandex.ru">lubytino-museum@yandex.ru</a>
              </p>
              <p>
                Телефон: 8 (816-68) 61-7-93, 8-950-681-59-59
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/gornaya-msta-/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">6000�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Активный отдых</li>
                    </ul>
                    <a href="/routes/gornaya-msta-/">
                      <div class="h3"><span>Горная Мста </span></div>
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
                <a href="/routes/peshekhodnaya-ekskursiya-po-posyelku-lyubytino/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">30�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/peshekhodnaya-ekskursiya-po-posyelku-lyubytino/">
                      <div class="h3"><span>Пешеходная экскурсия по посёлку Любытино</span></div>
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
                <a href="/routes/ekskursiya-po-okrestnostyam-poselka-lyubytino/">
                  <div class="object-tmb-pic" style="background-image: url();">
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
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/ekskursiya-po-okrestnostyam-poselka-lyubytino/">
                      <div class="h3"><span>Экскурсия по окрестностям поселка Любытино</span></div>
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
            <div class="h2" style="margin-top: 0;">Куда сходить в Любытино</div>
            <div class="block-ext-content">
              <h3> <a
                  href="https://novgorod.travel/events/mezhregionalnyy-festival-kultury-i-byta-slavyanskiy-bereg/">ФЕСТИВАЛЬ
                  КУЛЬТУ�&nbsp;Ы И БЫТА «СЛАВЯНСКИЙ БЕ�&nbsp;ЕГ»</a></h3>
              <p>
                Ежегодное интерактивное событие, которое дарит невероятную возможность погружения в жизнь Древней
                �&nbsp;уси рубежа 9-12 веков.
              </p>
              <p>
                Народ с разных уголков страны, соберется в посёлке Любытино, на живописном берегу реки Мсты в музее под
                открытым небом «Славянская деревня 10 века».
              </p>
              <p>
                Фестиваль сочетает в себе историческую реконструкцию, музыкальную программу, потешные славянские игры,
                мастер классы по раннесредневековым ремёслам, а также порадует вкусной натуральной пищей.
              </p>
              <h3> <a
                  href="https://novgorod.travel/events/semeynyy-festival-aktivnogo-otdykha-famili-fast-2021/">СЕМЕЙНЫЙ
                  ФЕСТИВАЛЬ АКТИВНОГО ОТДЫХА «FAMILI FAST 2021»</a></h3>
              <p>
                Это мероприятие на открытом воздухе для всей семьи. Можно будет поучаствовать в велопробеге и спортивных
                соревнованиях, посмотреть концертную программу и работу интерактивных площадок
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://lybhutor.ru/">ЛЮБЫТИНО-ХУТО�&nbsp;</a><!--/noindex-->
              </h3>
              <p>
                Это край первозданной природы, с густыми лесами и чистым воздухом, широкими лугами и прозрачной и
                извилистой рекой Мста.
              </p>
              <p>
                База отдыха находится в 180 км от Великого Новгорода, в 280 км от Санкт-Петербурга и в 550 км от Москвы.
                Комфортно добраться можно на автомобиле и на самолете: есть взлётно-посадочная площадка для малой
                авиации.
              </p>
              <p>
                �&nbsp;усская баня на дровах, контактный зоопарк, рыбалка, охота, велопрогулки, сплав на байдарках,
                места для кемпинга, катание на лошадях, фотосессии, детская площадка.
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://lubogora.ru/">ВСЕСЕЗОННЫЙ КУ�&nbsp;О�&nbsp;Т
                  «ЛЮБОГО�&nbsp;ЬЕ»</a><!--/noindex-->
              </h3>
              <p>
                Уникальный эко-курорт Новгородской области, который работает в круглогодичном режиме.
              </p>
              <p>
                Зимой работают 7 склонов разного уровня сложности: трассы для горных лыж и сноубордов с перепадом высот
                до 120 метров, учебный спуск для новичков и склон для тюбинга, а также живописный маршрут для беговых
                лыж протяженностью 3 км и уникальный по своей атмосфере каток, окруженный лесом.
              </p>
              <p>
                Летом – велосипедные и пешие прогулки, терренкур, охота и рыбалка, отдых на озере и благоустроенная
                барбекю-зона с беседками. По желанию вы можете участвовать в экстремальном рафтинге или посетить
                музей-заповедник под открытым небом «Славянская деревня X века». Весь год для вас работают русские бани.
              </p>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Любытино</div>
            <div class="block-ext-content">
              <h3>
                �&nbsp;есторан «Любытино-Хутор»</h3>
              <p>
                В кафе готовят вкуснейшие домашние блюда русской кухни из натуральных фермерских продуктов. В меню
                найдёте наваристую солянку и щаницы, большое разнообразие блюд, приготовленных на мангале, пельмени и
                вареники ручной работы.
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/restoran-lyubytino-khutor/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/4bac80d99c8385a4c93cfa9cde12fed1.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Любытино</a></li>
                    </ul>
                    <a href="/restaurants/restoran-lyubytino-khutor/">
                      <div class="h3"><span>�&nbsp;есторан «Любытино-хутор»</span></div>
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
            <div class="h2" style="margin-top: 0;">Где остановиться в Любытино</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-lyubytino-khutor/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/04a2d6c9f181987011d9d90e511b6a39.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Любытино</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-lyubytino-khutor/">
                      <div class="h3"><span>База отдыха «Любытино-хутор»</span></div>
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
                <a href="/hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/097651679bdf27311309aafb90d70433.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Любытино</a></li>
                    </ul>
                    <a href="/hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/">
                      <div class="h3"><span>Всесезонный курорт «Любогорье» (Горнолыжный клуб)</span></div>
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
                <a href="/hotels/gostevoy-dom-dom-pod-lipoy/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/dc9ff0e61ff2fef539389cf62bcd984f.JPG);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Любытино</a></li>
                    </ul>
                    <a href="/hotels/gostevoy-dom-dom-pod-lipoy/">
                      <div class="h3"><span>Гостевой дом "Дом под липой"</span></div>
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

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что привезти из Любытино</div>
            <div class="block-ext-content">
              <p>
                Любытино – это край с богатой историей и археологией. Привезти с собой приятные воспоминания о
                путешествии можно, купив традиционный сувенир Новгородской области: изделия из бересты, дерева, железа.
              </p>
              <p>
                Если хочется чего-то необычного и оригинального – привезите церу и писало – это то, чем пользовались для
                написания сообщений древние новгородцы.
              </p>
              <p>
                Как мы знаем из уроков истории в школе, древние новгородцы были очень грамотными и Новгородчина по праву
                считается центром летописания и книжности. Древние новгородцы не имели, разумеется, бумаги и ручки, зато
                у них была цера и писало. Привезти такой оригинальный сувенир, а также другие предметы быта древних
                новгородцев, купив в Мастерской Алёшиных.
              </p>
              <p>
                Широкий ассортимент гастрономических сувениров Вы найдете на
                <!--noindex--><a rel="nofollow" href="https://lybhutor.ru/">базе отдыха
                  «Любытино-Хутор</a><!--/noindex-->
              </p>
              <p>
                Где купить:
              </p>
              <p>
                <!--noindex--><a href="https://magnitsuvenir.ru/"
                  rel="nofollow">https://magnitsuvenir.ru/</a><!--/noindex-->
              </p>
            </div>
          </div>


        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>