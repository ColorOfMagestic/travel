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
                            center: [57.64301, 32.466],
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
                          <td class="val">杰缅斯克周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">4 453 人 </td>
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
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/272b6f4df0982b08ff25733f7a620498.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              杰缅斯克 с�&nbsp;древнего <nobr>финно-угорского</nobr> переводится как «дорожный край».
                              Здесь проходила одна из�&nbsp;ветвей известного издревле Селигерского торгового пути.
                            </p>
                            <p>
                              Красотой природы славен 杰缅斯克周围 край. На�&nbsp;территории района�&nbsp;— 90 рек
                              и�&nbsp;более <nobr>50-ти</nobr> озер. Самые крупные из�&nbsp;них�&nbsp;— Велье
                              и�&nbsp;жемчужина �&nbsp;оссии�&nbsp;— озеро Селигер. 地区 расположен
                              на�&nbsp;переходе от�&nbsp;суровой 瓦尔代ской возвышенности к�&nbsp;мягкой Приильменской
                              низине. По�&nbsp;дороге от�&nbsp;杰缅斯克а к�&nbsp;озеру Селигер можно ощутить
                              непередаваемое чувство смены высоты от�&nbsp;50�&nbsp;м до�&nbsp;288�&nbsp;м над уровнем
                              моря.
                            </p>
                            <p>
                              На�&nbsp;территории района находится 168 памятников археологии. Одним из�&nbsp;самых
                              известных является окутанная загадочной вуалью народных былин Княжна Гора. Это уникальный
                              霍尔姆, высотой около 30�&nbsp;м, поражающий своей величественностью и�&nbsp;красотой.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/9121ec6cbfe3ca4e5349f5cb0ca0565d.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;6–9 веках на�&nbsp;Княжной Горе располагалось древнее городище, до�&nbsp;16 века
                              это был укрепленный форпост «Деман на�&nbsp;Явони», охраняющий подходы к�&nbsp;Великому
                              Новгороду.
                            </p>
                            <p>
                              杰缅斯克 был свидетелем и�&nbsp;участником многих важных исторических событий.
                              В�&nbsp;здешней округе вынуждены были повернуть от�&nbsp;Новгорода орды хана Батыя.
                              Не�&nbsp;раз бежали отсюда прибалтийские и�&nbsp;шведские завоеватели.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                        В�&nbsp;годы Великой Отечественной войны 杰缅斯克 снова выполнил свою функцию форпоста.
                        В�&nbsp;конце сентября 1941 года именно под 杰缅斯克ом войска <nobr>Северо-Западного</nobr>
                        фронта впервые на�&nbsp;всем театре военных действий окончательно остановили стремительное
                        продвижение фашистских войск в�&nbsp;глубь страны. Весной 1942 года в�&nbsp;ходе
                        контрнаступления советских войск два корпуса немецкой <nobr>16-ой</nobr> армии оказались
                        в�&nbsp;окружении, вошедшим в�&nbsp;историю под названием «杰缅斯克周围 котел».
                      </p>
                      <p>
                        Более 100 <nobr>военно-мемориальных</nobr> объектов района хранят память о�&nbsp;событиях
                        Великой Отечественной. Желающие прикоснуться к�&nbsp;военной истории 杰缅斯克а могут побывать
                        на�&nbsp;местах боев, а�&nbsp;также проехать «дорогами войны» по�&nbsp;двум экскурсионным
                        маршрутам <nobr>杰缅斯克-Лычково</nobr> и�&nbsp;<nobr>杰缅斯克-Цемена-Корпово</nobr>, включающим
                        посещение наиболее известных <nobr>военно-мемориальных</nobr> объектов 杰缅斯克ого района.
                      </p>
                      <p>
                        12% территории 杰缅斯克ого района занимает 瓦尔代 государственный природный национальный
                        парк. В�&nbsp;зону парка входит также и�&nbsp;территория первого в�&nbsp;�&nbsp;оссии
                        рыборазводного завода в�&nbsp;селе Никольское с�&nbsp;уникальным гидропарком, созданным
                        знаменитым ихтиологом Владимиром Павловичем Врасским в�&nbsp;1854 году.
                      </p>
                      <p>
                        Заповедные уголки 杰缅斯克а неизменно притягивают к�&nbsp;себе любителей рыбалки и�&nbsp;охоты,
                        сплава по�&nbsp;рекам, любителей всевозможных водных развлечений, да�&nbsp;и�&nbsp;просто
                        жителей крупных городов, желающих прикоснуться к�&nbsp;экологически чистой природе. «
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="33">


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в 杰缅斯克е</div>
            <div class="block-ext-content">
              <p>
                杰缅斯克 – красивый озёрный край и не удивительно, что именно здесь был основан первый в �&nbsp;оссии
                рыборазводный завод. Знаменитый российский ихтиолог Владимир Врасский в 杰缅斯克ом районе изучал и
                создавал систему по искусственному разведению рыб.
              </p>
              <h3>
                ЦЕНТ�&nbsp; ИЗУЧЕНИЯ НАСЛЕДИЯ В.П.В�&nbsp;АССКОГО»</h3>
              <p>
                Музей посвящен знаменитому ихтиологу Владимиру Павловичу Врасскому. Он был местным дворянином, глубоко
                был погружён в изучение ихтиологии и в последствие; основал в близи 杰缅斯克а - в селе Никольское первый
                в �&nbsp;оссии рыборазводный завод.
              </p>
              <p>
                В музее вы увидите фрагмент кабинета учёного, узнаете о родословной семьи Врасских, биографию Владимира
                Павловича, а также о результатах его деятельности по искусственному разведению рыбы и созданию
                рыбзавода.
              </p>
              <p>
                Интересно будет посмотреть и макет с современной системой прудов Никольского рыбзавода. Стоит отметить,
                что завод является частью 瓦尔代ского национального парка.
              </p>
              <h3>
                ЗДАНИЕ ЗЕМСТВА </h3>
              <p>
                Здание Земской Управы построено в конце XIX века, находится в посёлке 杰缅斯克. В настоящее время в
                здании располагается Администрация 杰缅斯克ого муниципального района.
              </p>
              <h3>
                ЖИЛОЙ ДОМ КУПЦА СМЕТАНИНА </h3>
              <p>
                Всегда интересно разглядывать и изучать дома бывших купцов – они отличались добротностью построек и
                порой изысканным видом. Многие дома, если не были разрушены во время войны, сохранились в хорошем
                состоянии до сих пор и даже эксплуатируются. Этому пример дом купца Сметанина.
              </p>
              <p>
                В настоящее время в бывшем купеческом доме располагается Центр изучения истории и культуры 杰缅斯克ого
                района, - памятник архитектуры XIX века. Архитектура здания отличается особенностями присущими стилю
                неоклассицизма, характерного для конца XIX века. В своё время купец Г.М. Сметанин сдавал дом городу
                杰缅斯克у под почтовую контору.
              </p>
              <h3>УСПЕНСКИЙ ЖЕНСКИЙ МОНАСТЫ�&nbsp;Ь </h3>
              <p>
                На месте женской православной общины в имении Успенское в живописном месте на берегу озера Селигер во
                второй половине IX века был основан Успенский женский монастырь. Основательницей общины была местная
                дворянка Александра Ивановна Кемецкая. В храме хранилась икона Божьей Матери Успения, которую доставили
                в 杰缅斯克 их Иерусалима. Её почитали как чудотворную. В храме также находилась рака с частицами мощей
                святых Угодников Божьих.
              </p>
              <p>
                Теперь в этом трехэтажном здании располагается Полновская средняя школа. К счастью, архитектура здания
                сохранилась: в центре северного фасада – главный вход, за центральной дверью – гранитная лестница на
                второй этаж.
              </p>
              <h3>
                КАМЕННАЯ ЧАСОВНЯ В ПАМЯТЬ ЦА�&nbsp;Я АЛЕКСАНД�&nbsp;А II </h3>
              <p>
                В центре 杰缅斯克ая благодарные жители увековечили память царю освободителю Александру II, установив в
                1884 году на этом месте каменную часовню с куполом.
              </p>
              <p>
                Часовня является образцом архитектуры малого культового здания конца XIX начала XX века, по своим формам
                приближающегося к декоративной садовопарковой архитектуре. В середине 1990-х году часовню передали
                новгородской Епархии. Внутри часовни сохранился фрагмент росписи – два ангела, держащие чашу.
              </p>
              <h3>
                МЕМО�&nbsp;ИАЛ ВОИНАМ СЕВЕ�&nbsp;О-ЗАПАДНОГО Ф�&nbsp;ОНТА </h3>
              <p>
                На месте бывшего лагеря для военнопленных «Попово болото» в 1975 году началось строительство Монумента
                воинам Северо-Западного фронта. Лагерь для пленных русских солдат создали немецкие захватчики в сентябре
                1941 года, которые захватили 杰缅斯克.
              </p>
              <p>
                Монумент был открыт 9 мая 1976 года. Также, 1975 году был заложен парк в честь 30-летия Победы в Великой
                Отечественной войне.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=33"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=33"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=33"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=33"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">8</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=33"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=33"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по 杰缅斯克у</div>
            <div class="block-ext-content">
              <h3>
                КНЯЖНА ГО�&nbsp;А </h3>
              <p>
                Есть в 杰缅斯克е уникальный памятник Федерального значения – ледниковый останец «Княжна Гора» Он
                находится в 8 километрах от посёлка 杰缅斯克 по направлению к селу Полново. Высота горы составляет
                порядка 30 метров.
              </p>
              <p>
                Как выяснили археологи, в 6-9 веках здесь располагалось древнее городище, в 10 – 14 веках – укрепленный
                форпост – «Деман - на Явони, охраняющий подходы к Новгороду».
              </p>
              <p>
                Согласно легенде, в далёкие времена в это место приехала молодая княжеская чета. Но место оказалось
                проклятым. Птица-оборотень всю ночь летала над шатром, в котором спали молодые, и роняла свои перья.
                Одно перо упало князю прямо на грудь. А утром нашли его мёртвым. Княгиня-вдова не стала уезжать, и,
                храня верность в любви, всю оставшуюся жизнь, ежедневно приходила на могилу и приносила в рукавах землю.
                Так и возникла Княжна Гора.
              </p>
              <p>
                Консультацию по маршруту можно получить по телефону: +7 (816 51) 42-764
              </p>
              <p>
                МУК "Центр изучения истории и культуры 杰缅斯克ого района".
              </p>
              <h3>
                О�&nbsp;ЕХОВА ГО�&nbsp;А </h3>
              <p>
                Ещё одна гора - Гора Ореховна расположена в 30 км к востоку от 杰缅斯克а в сторону села Полново. Это
                самая высокая точка 瓦尔代ской возвышенности на территории 杰缅斯克ого района (288 м. над уровнем моря).
              </p>
              <p>
                На вершине горы находится валун гранита рапакиви (горная порода). Его форма напоминает лежащий на земле
                равносторонний треугольник с округлыми окатанными вершинами высотой 1-1,3 м.
              </p>
              <p>
                Исследователи утверждают, что гора с древнейших времен имела оборонительно-сторожевое значение. С высоты
                горы открывается широкий обзор на все стороны света.
              </p>
              <p>
                Как считают учёные, скорее всего валун не был оставлен на вершине горы ледником, а был перенесен сюда
                людьми и являлся объектом поклонения и местом совершения языческих обрядов.
              </p>
              <h3>
                МА�&nbsp;Ш�&nbsp;УТ «ДО�&nbsp;ОГАМИ ВОЙНЫ: 杰缅斯克 – ЛЫЧКОВО» </h3>
              <p>
                杰缅斯克周围 район – место ожесточённых боёв войск Северо-Западного фронта с немецко-фашистскими
                захватчиками. 8-9 сентября 1941 года 杰缅斯克 и большая часть района были оккупированы фашистами, но к
                середине сентября войска Северо-западного фронта под 杰缅斯克ом остановили стремительное продвижение
                врага вглубь страны в направлении Москвы.
              </p>
              <p>
                Маршрут «Дорогами войны – 杰缅斯克 – Лычково» включает:
              </p>
              <ul>
                <li>
                  посещение военных залов Центра изучения истории и культуры 杰缅斯克ого района; </li>
                <li>
                  мемориал воинам Северо-Западного фронта (территория бывшего лагеря советских военно-пленных); </li>
                <li>
                  памятник десантникам; </li>
                <li>
                  памятник Солдату (прототип – Николай Сосновский, закрывший амбразуру вражеского пулемета); </li>
                <li>
                  посещение военного зала и памятника ленинградским детям, погибшим на станции Лычково в 1941 году.</li>
              </ul>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/marshrut-dorogami-voyny-demyansk-lychkovo-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/8e6b4109912880d5f445fc9401aadfdd.JPG);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/marshrut-dorogami-voyny-demyansk-lychkovo-/">
                      <div class="h3"><span>Маршрут «Дорогами войны : 杰缅斯克 – Лычково» </span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/obzornaya-ekskursiya-po-posyelku-demyansk/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/1d81851607cc789803025ec6d5594195.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/obzornaya-ekskursiya-po-posyelku-demyansk/">
                      <div class="h3"><span>Обзорная экскурсия по посёлку 杰缅斯克</span></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/demyansk-knyazhna-gora/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/3d2ab523e1520669a2d140bdc4315efe.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Природа</li>
                    </ul>
                    <a href="/routes/demyansk-knyazhna-gora/">
                      <div class="h3"><span>杰缅斯克 – Княжна Гора</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в 杰缅斯克е</div>
            <div class="block-ext-content">
              <h3><span style="font-weight: 700;"><a href="http://dem-ciik.nov.muzkult.ru/">Центр изучения истории и
                    культуры 杰缅斯克ого района</a></span></h3>
              <ul>
                <li>Мастер-классы, выставки, лекции для всей семьи</li>
              </ul>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в 杰缅斯克е</div>
            <div class="block-ext-content">
              <h3>
                КАФЕ - БА�&nbsp; «ЛАГУНА» </h3>
              <p>
                Доступное и демократичное место, ориентированное на молодых и активных жителей, при этом обладающее
                своей собственной атмосферой и неповторимым уютом.
              </p>
              <p>
                Телефон: <a href="about:blank">+7(81651) 42-012</a>
              </p>
              <h3>
                КАФЕ «СОВА» </h3>
              <p>
                Кафе предлагает гостям лучшие блюда европейской кухни, большой выбор напитков и десертов.
              </p>
              <p>
                Телефон: <a href="about:blank">+7 (81651) 42 - 748</a>
              </p>
              <h3>
                СТОЛОВАЯ П�&nbsp;И ГОСТИНИЦЕ «杰缅斯克АЯ» </h3>
              <p>
                Столовая находится на первом этаже в том же здании, что и гостиница "杰缅斯克ая". �&nbsp;ассчитана на 120
                мест.
              </p>
              <p>
                Телефон: <a href="about:blank">+7 (81651) 4-23-56</a>
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/stolovaya-pri-gostinitse-demyanskaya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/6352b55925d9844f44f6805a0d93e785.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">杰缅斯克</a></li>
                    </ul>
                    <a href="/restaurants/stolovaya-pri-gostinitse-demyanskaya/">
                      <div class="h3"><span>Столовая при гостинице "杰缅斯克ая"</span></div>
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
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-sova/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/d8a162bc3b5009db098f0defc6adbc83.JPG);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">杰缅斯克</a></li>
                    </ul>
                    <a href="/restaurants/kafe-sova/">
                      <div class="h3"><span>Кафе «Сова» в 杰缅斯克е</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>Европейская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в 杰缅斯克е</div>
            <div class="block-ext-content">
              <h3>
                ГОСТИНИЦА 杰缅斯克АЯ </h3>
              <p>
                К услугам гостей имеются номера различных категорий:
              </p>
              <ul>
                <li>«Люкс» - 2 -2-х местных номера </li>
                <li>
                  Номера 1 категории -1-2-х местный, 1- 4-х местный </li>
                <li>
                  Номера 2 категории - 2- 3-х местных, 2- 4- х местных, 1- 1 местный, количество мест для размещения –
                  21.</li>
              </ul>
              <p>
                Гостей и туристов района ждут уютные номера, оборудованные всем необходимым для достойного проживания.
              </p>
              <p>
                Телефон: <a href="about:blank">+7 (81651) 42-355</a>
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/predstavitelstvo-muk-tsentra-izucheniya-istorii-i-kultury-v-d-krasota/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/ad609ed4cb79229151b994116bddd8e0.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">杰缅斯克</a></li>
                    </ul>
                    <a href="/hotels/predstavitelstvo-muk-tsentra-izucheniya-istorii-i-kultury-v-d-krasota/">
                      <div class="h3"><span>Представительство МУК "Центра изучения истории и культуры" в д.
                          Красота</span></div>
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
                <a href="/hotels/gostinitsa-demyanskaya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/821bbc0241e8a62273692d08db2a08f6.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">杰缅斯克</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-demyanskaya/">
                      <div class="h3"><span>Гостиница 杰缅斯克ая</span></div>
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
                <a href="/hotels/baza-otdykha-konstantinova-usadba/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/093a09a47217417319baa5d3c1e13194.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">杰缅斯克</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-konstantinova-usadba/">
                      <div class="h3"><span>База отдыха «Константинова Усадьба»</span></div>
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

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что привезти из 杰缅斯克а</div>
            <div class="block-ext-content">
              <h3>
                ШОКОЛАД И МА�&nbsp;МЕЛАД </h3>
              <p>
                Вкусный подарок всегда будет актуальным сувениром из путешествий: такой презент можно привезти и
                взрослым, и детям. В Новгородской области в крестьянско-фермерском хозяйстве «Калита» под торговой
                маркой «Княжегорье» производят более 20 видов сладостей: мармелад, шоколад с медом, орехами, яблоками,
                садовыми и дикорастущими ягодами. Большая часть сырья – производства собственного хозяйства.
              </p>
              <p>
                Для лёгкого и полезного перекуса на фабрике производят мармелад. Продукт изготовлен из сока натуральных
                ягод, фруктов, мёда и сахарной пудры. Также на фабрике производят и другие полезные перекусы: различные
                виды орехов в тёмном и молочном шоколаде.
              </p>
              <p>
                Где купить:
              </p>
              <div>
                <!--noindex--><a rel="nofollow" href="https://vk.com/public196001099">Кондитерская фабрика
                  "Княжегорье</a><!--/noindex-->
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>