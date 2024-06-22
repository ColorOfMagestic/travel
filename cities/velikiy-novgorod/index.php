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
                            center: [58.520921251594, 31.275228862305],
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
                          <td class="val">Великий Новгород</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">222 868 чел </td>
                        </tr>
                        <tr>
                          <td class="name">Тип::</td>
                          <td class="val">Город</td>
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
                            <img src="images/67a9c1d0201dd1f39ae38e8ba75fb8da.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Средневековый Новгород можно назвать северным стражем и столицей огромной округи, которая
                              простиралась за многие сотни километров вокруг него. Огромные земельные владения Новгорода
                              стали залогом его экономического процветания. Выгодным оказалось и его географическое
                              положение. На северной оконечности озера Ильмень скрещивались торговые пути из Прибалтики
                              в Византию, из Арабского Востока в Южную Скандинавию.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/82807306a60570f8276fcbca78980fc8.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Впервые Новгород упоминается в�&nbsp;летописи под <nobr>859 г.</nobr> Сегодня уже
                              не�&nbsp;подлежит сомнению, что Городище (в�&nbsp;2- км�&nbsp;от�&nbsp;города)
                              предшествовало Новгороду. Культурный слой IX�&nbsp;в., исследованный в�&nbsp;результате
                              раскопок на�&nbsp;�&nbsp;юриковом городище, носит не�&nbsp;только характер княжеской
                              резиденции и�&nbsp;выраженные скандинавские черты, но�&nbsp;и�&nbsp;позволяет считать
                              призвание варягов во�&nbsp;главе с�&nbsp;�&nbsp;юриком на�&nbsp;княжение в�&nbsp;Новгород
                              событием реальным.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/217f3cdc9bd257a49589004610efeba6.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;X�&nbsp;в. город был перенесен на�&nbsp;новое место и�&nbsp;назван Новгородом.
                              Археологические следы жизни здесь датируются 930 годами. Город возник в�&nbsp;низменной
                              местности, которая после таяния ледников была дном моря. Толщина слоя глины, оседавшей
                              тысячелетиями, местами достигает десяти и�&nbsp;более метров. На�&nbsp;поверхности этой
                              глины и�&nbsp;появились дворы первых переселенцев Новгорода. К�&nbsp;953 г. относится
                              регулярное мощение улиц и�&nbsp;стабилизация дворовых наделов.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/6f27cf99e5c78bbf63ae56881723e89f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Одним из�&nbsp;самых драматических событий ранней истории города стало крещение
                              новгородцев, которое случилось зимой 989/90 года. «И�&nbsp;приде к�&nbsp;Новугороду
                              архиепископ Аким Корсунянин и�&nbsp;требища разруши». По�&nbsp;приказу воеводы Добрыни
                              были зажжены дома на�&nbsp;берегу. Всех жителей загнали в�&nbsp;Волхов: мужчин�&nbsp;—
                              выше моста, а�&nbsp;женщин�&nbsp;— ниже по�&nbsp;течению. В�&nbsp;городе стали появляться
                              зримые символы принадлежности к�&nbsp;Вселенской Церкви�&nbsp;— деревянные храмы,
                              а�&nbsp;затем и�&nbsp;каменные. Город стремительно разрастался по�&nbsp;сторонам реки,
                              которая разделила Новгород на�&nbsp;две стороны�&nbsp;— Софийскую и�&nbsp;Торговую.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c782b56ba2c5bf6fd1016e50d5bfa7ea.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Новгород после образования единого государства Киевская �&nbsp;усь стал вторым
                              по�&nbsp;значению городом нового государства. Здесь княжили Олег, Святослав, Владимир
                              Красное Солнышко, Ярослав Мудрый, Александр Невский. Одним из�&nbsp;периодов расцвета
                              городской культуры и�&nbsp;бурного развития архитектурного облика Новгорода стало княжение
                              Мстислава Владимировича. Удачные походы князя на�&nbsp;чудь привели к�&nbsp;расширению
                              новгородских владений и�&nbsp;росту благосостояния новгородцев. За�&nbsp;воинскую доблесть
                              и�&nbsp;благодеяния горожане подарили князю Мстиславу прозвище «Великий».
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a1b9a1e88817749bac8a3a3c01ee7191.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Несколько столетий в�&nbsp;городе господствовали республиканские порядки. Новгород был
                              волен в�&nbsp;князьях. За�&nbsp;два столетия в�&nbsp;Новгороде князья менялись 58 раз.
                              Самые существенные вопросы решались на�&nbsp;вече. Однако важнейшую роль играли боярские
                              группировки. В�&nbsp;1478�&nbsp;г. Великий московский князь Иваном III присоединил
                              Новгород к�&nbsp;Москве. В�&nbsp;1611 году Новгород был атакован шведами. Боярский холоп
                              Ивашка Шваль прополз под воротами Чудинцевой улицы и�&nbsp;открыл врагу ворота. Только
                              по�&nbsp;Условиям Столбовского договора 1617�&nbsp;г. Новгород вновь вошел в�&nbsp;состав
                              �&nbsp;оссии. В�&nbsp;1727 года была образована Новгородская губерния с�&nbsp;губернским
                              центром в�&nbsp;Новгороде. В�&nbsp;годы Великой Отечественной войны Новгород
                              29�&nbsp;месяцев находился в�&nbsp;оккупации. Был разграблен и�&nbsp;разрушен почти
                              полностью. Существовало мнение о�&nbsp;невозможности восстановления города. Сегодня город
                              вполне оправдывает свое название, полученное более 1000 лет назад, Новый город. Новгород.
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

          <input type="hidden" id="cityId" value="3">

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Видео по Великому Новгороду</div>
            <div class="block-ext-content">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/FKAEBRrCmh0?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/URjGRfOdLRg?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/fx6E6wdUwCo?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Великом Новгороде</div>
            <div class="block-ext-content">
              <p>
                В Великом Новгороде насчитывается 37 памятников ЮНЭСКО. Исторические памятники Великого Новгорода и
                окрестностей включены в список всемирного культурного наследия ЮНЕСКО в декабре 1992 года, что
                подтверждает их выдающуюся универсальную ценность, которая заслуживает сохранение на благо всего
                человечества. Здесь точно есть что посмотреть.
              </p>
              <p>
                <b>Новгородский кремль (Детинец)</b> – крепость Великого Новгорода. Детинец расположен на левом берегу
                реки Волхов. Первое летописное упоминание о нём относится к 1044 году. Является памятником архитектуры
                федерального значения, охраняется государством. Новгородский детинец как часть исторического центра
                Великого Новгорода входит в список всемирного наследия ЮНЕСКО.
              </p>
              <p>
                <b>Софийский Собор</b> - главный православный храм Великого Новгорода, созданный в 1045—1050 годах,
                кафедральный собор Новгородской митрополии. На протяжении столетий — духовный центр Новгородской
                республики. Один из древнейших храмов на территории �&nbsp;оссии.
              </p>
              <p>
              </p>
              <p>
                <b>Памятник Тысячелетия �&nbsp;оссии</b> - монумент, воздвигнутый в Великом Новгороде в 1862 году в
                честь тысячелетнего юбилея легендарного призвания варягов на �&nbsp;усь. Авторами проекта памятника
                являются скульпторы Михаил Микешин, Иван Шредер и архитектор Виктор Гартман. Памятник находится в
                новгородском детинце, напротив Софийского собора и бывшего здания Присутственных мест.
              </p>
              <p>
                <b>Ярославово Дворище</b> - исторический архитектурный комплекс на Торговой стороне Великого Новгорода,
                являющийся, наряду с Новгородским кремлем, основной архитектурной доминантой исторического центра
                города[1]
              </p>
              <p>
              </p>
              <p>
                В настоящее время урочище Ярославово дворище и Торг включает в себя обширное пространство между Большой
                Московской улицей и берегом Волхова и между Иваньской и Никольской улицами, что несколько отличается от
                первоначальной топографии обоих урочищ, как Ярославова дворища так и Торга.
              </p>
              <p>
              </p>
              <p>
                <b>Витаславлицы </b>- новгородский музей народного деревянного зодчества, который расположен около
                Свято-Юрьева мужского монастыря в нескольких километрах от Великого Новгорода, на южном берегу озера
                Мячино.
              </p>
              <p>
                <b>Центр музыкальных древностей В. И. Поветкина</b> – Центр создан в 1990 году художником и
                реставратором Владимиром Ивановичем Поветкиным (1943–2010). Он собрал и озвучил уникальную коллекцию
                музыкальных инструментов X–XV веков, воссозданных им по археологическим обломкам. В основу организации
                легла его коллекция и разработанная им уникальная программа по выявлению и реконструкции легендарных
                гуслей, гудков, сопелей, варганов, обломки которых археологи открывают в старой части Великого
                Новгорода.
              </p>
              <p>
                <b>Пешеходный мост через реку Волхов</b> - мост через реку Волхов в Великом Новгороде находится в
                историческом центре города и соединяет Софийскую и Торговую стороны в районе новгородского Детинца и
                Ярославова Дворища. Является важнейшим элементом коммуникации в современном Новгороде, соединяя по
                кратчайшей прямой две его исторические стороны.
              </p>
              <p>
                Этот мост находится на месте первого новгородского моста — Великий мост, стоявший на этом же месте,
                упоминается в летописи в 1133 году. Мост неоднократно перестраивался и эксплуатировался до 1944 года,
                когда был взорван отступавшими фашистскими войсками.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=3"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">89</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=3"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">87</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=3"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/vystavki/?TOWN=3"
                style="background-image:url(images/8ebdb49d07c61b2d8032b7331dd4fa72.JPG); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">53</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Выставки</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/detskiy-otdykh/?TOWN=3"
                style="background-image:url(images/c41e34c1be106f536c977d72955246a5.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">32</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Детский отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/aktivnyy-otdykh/?TOWN=3"
                style="background-image:url(images/9b7749d95eb1c4c1b1bf1b402a106ce7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">8</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Активный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=3"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">27</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/gastronomicheskiy-turizm/?TOWN=3"
                style="background-image:url(images/27f2b205bc6e09ebef9cb8240a72c2c3.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">13</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Гастрономический туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=3"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">53</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=3"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">15</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ozdorovitelnyy-turizm/?TOWN=3"
                style="background-image:url(images/7224cc4bdc821ceaf4f3ccbc649817f6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Оздоровительный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=3"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/plyazhnyy-otdykh/?TOWN=3"
                style="background-image:url(images/e0f86a9834bc1b429bd31bdf5fb3da62.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Пляжный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priklyucheniya/?TOWN=3"
                style="background-image:url(images/b5a17bf4393a47e4fee3f2dd9ecdea01.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Приключения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=3"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">31</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=3"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">38</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/muraly/?TOWN=3"
                style="background-image:url(images/ca86e8ea8fee00488b24b90be115e443.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">14</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Муралы</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ulitsy/?TOWN=3"
                style="background-image:url(images/566121a5b07819c3b53498eeb2bbb6d7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">30</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Улицы</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=3"
                style="background-image:url(images/cf8a80fd60face7ce229b62c2f7ef064.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">25</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Здания</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Великому Новгороду</div>
            <div class="block-ext-content">
              <b>Великий Новгород имеет множество маршрутов, которые удивят даже самого искушенного путешественника. Вам
                лишь нужно определиться со своим интересом и отправиться в путь.<br>
              </b><br>
              <a href="https://novgorod.travel/routes/vodnye-puti-velikogo-novgoroda/">Водные пути Великого
                Новгорода</a>
              <p>
                Что представляет собой маршрут: Кремль - Перынь (по воде на каяках) - �&nbsp;юриково городище (пикник) -
                ручей Тарасовец - гостиница «Садко - Ярославово дворище. Продолжительность: 1 день.
              </p>
              <p>
                Объекты маршрута: Кремль, Перынский скит, �&nbsp;юриково городище, Ярославово дворище.
              </p>
              <p>
                <a href="https://novgorod.travel/routes/velikiy-gorod-velikogo-knyazya-aleksandr-nevskiy/">Великий город
                  великого князя. Александр Невский</a>
              </p>
              <p>
                В 2021 году отмечается 800-летие со дня рождения Святого Благоверного князя Александра Невского. Именно
                этот новгородский князь возглавил рейтинг всероссийского народного голосования «Имя �&nbsp;оссии» –
                побеждая везде, он никем не был побеждён. А где, как не в Великом Новгороде, можно найти столько мест,
                тесно связанных с его именем.
              </p>
              <p>
                В рамках двухчасовой театрализованной экскурсии вместе со средневековыми героями вы примите участие в
                аутентичных новгородских играх, прогуляетесь по Ярославову дворищу и Новгородскому Кремлю.
              </p>
              <p>
                <a href="https:///novgorod.travel/routes/avtorskaya-ekskursiya-novgorod-vechnaya-propiska/">Авторская
                  экскурсия. Новгород: вечная прописка</a>
              </p>
              <p>
                В ходе этой необычной прогулки по древнейшим кладбищам Великого Новгорода, некоторые из которых
                действуют до сих пор, участники смогут на примерах увидеть, как изменялись ритуальные традиции на
                протяжении столетий.
              </p>
              <p>
                Образы смерти – важная часть культурного наследия. Не зная их, невозможно понять особенности и
                специфический колорит древнего провинциального города. За время этой поездки вы посетите 3 кладбища.
                Продолжительность экскурсии: 2 часа.
              </p>
              <p>
                <a href="https://novgorod.travel/routes/avtorskaya-ekskursiya-v-samoe-serdtse-/">Авторская экскурсия. «В
                  самое сердце» по Новгородскому кремлю</a>
              </p>
              <p>
                Всё, что вы хотели бы узнать о Великом Новгороде в первую очередь, ответы на самые популярные вопросы.
                Классическая прогулка по Детинцу, которая познакомит вас с тысячелетней историей Великого Новгорода,
                укладом жизни древних новгородцев, обычаями, традициями, легендами, сказаниями.
              </p>
              <p>
                Продолжительность: 1,5 часа.
              </p>
              <p>
              </p>
              <p>
              </p>
              <p>
                <a href="https://novgorod.travel/routes/avtorskaya-ekskursiya-na-yakhte-zdes-byl-ryurik/">Авторская
                  экскурсия на яхте «Здесь был �&nbsp;юрик»</a>
              </p>
              <p>
                Двухчасовое плавание по Волхову до озера Ильмень, потом в Сиверсов канал и в самое сердце Новгорода. Вам
                откроются прекрасные виды на Юрьев монастырь, �&nbsp;юриково городище, Детинец и Ярославово дворище.
                Помимо загара и отличных фото у вас также останутся на память любопытные факты из истории Великого
                Новгорода.
              </p>
              <p>
                <a href="https://novgorod.travel/routes/skazanie-o-gorode-sadko/">Маршрут: Сказание о городе Садко</a>
              </p>
              <p>
              </p>
              <p>
                Вы увидите - Кремлевский комплекс - древний Детинец; Софийский собор XI в. звонница Софийского собора
                XVIв, древние колокола Великого Новгорода XVI – XVIIвв., Владычный двор, бронзовые Магдебургские врата
                XII в. памятник «Тысячелетие �&nbsp;оссии». Выйдете на Боевой ход Новгородского Кремля. Затем сходите на
                Ярославово Дворище и древний Торг – комплекс ценнейших памятников архитектуры XII-XVIII вв., и «Белая
                аркада Гостиного двора».
              </p>
              <p>
                -Также маршрут включает в себя обзорную экскурсию по городу с посещением достопримечательностей Великого
                Новгорода и его окрестностей: во время автобусной экскурсии вы восхититесь совершенством форм ц. Спаса
                Преображения на Ильине (1374 г.), увидите Знаменский собор, (1682-1688 гг.) и совершите путешествие по
                Неревскому концу Великого Новгорода: увидите ц. Петра и Павла в Кожевниках (1406 г.). Свято-Юрьевский
                действующий монастырь – XIIв., главный храм монастыря Георгиевский собор (1119 г.) в соборе можно
                увидеть фрагменты фресковой живописи XII в. Хутынский Спасо-Преображенский монастырь основан в конце ХII
                в. преподобным Варлаамом Хутынским, ныне действующая женская обитель. Вы увидите историко-архитектурный
                ансамбль памятников ХVI – ХIХ вв., услышите о чудесах святого Варлаама Хутынского, побываете на могиле
                Г.�&nbsp;. Державина).
              </p>
              <b>
                <p>
                </p>
              </b>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/yaroslavo-dvorishche-i-drevniy-torg/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/2b6d0763bbd3d85cb39c0fde267b095d.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Музеи</li>
                    </ul>
                    <a href="/routes/yaroslavo-dvorishche-i-drevniy-torg/">
                      <div class="h3"><span>Ярославово дворище и древний торг</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 час</div>
                    </div>
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">1 км</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/gorod-kamney/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/75644ed61dff5d99b84c480bda2d510c.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Музеи</li>
                    </ul>
                    <a href="/routes/gorod-kamney/">
                      <div class="h3"><span>«Город камней»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">78,9 км</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/knyazya-vasilchikovy-i-ikh-usadba-vybiti/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/ce0669d87552a87312f48d25f5f68171.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <a href="/routes/knyazya-vasilchikovy-i-ikh-usadba-vybiti/">
                      <div class="h3"><span>«Князья Васильчиковы и их усадьба Выбити»</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Великом Новгороде</div>
            <div class="block-ext-content">
              <p>
                <b>В Великом Новгороде множество развлечений и интересных мест, куда можно сходить как индивидуальному
                  туристу, так и семьёй. Творческие мастерские, уникальные частные музеи, театры,
                  развлекательно-спортивные центры.</b>
              </p>
              <p>
                <b><a href="https://teatrvn.ru/">Театр Драмы Ф.М. Достоевского</a></b> – профессиональный театр в
                Великом Новгороде, начинающий свою историю с 1825 года.
              </p>
              <p>
                <b><a href="http://kingfestival.ru/">Театр Малый</a></b> – Новгородский театр для детей и
                молодёжи�&nbsp;
              </p>
              <p>
                <b><a href="https://vk.com/mdkino/">Киномузей Валерия �&nbsp;убцова</a></b> - частная коллекция
                любительского и профессионального кинооборудования XX века. Это различная кинотехника ХХ века ССС�&nbsp;
                и других стран – более 120 кинокамер, десятки кинопроекторов, монтажные столы, боксы и многое другое. В
                основном узкого формата – 8 и 16 мм.
              </p>
              <p>
                <b><a href="https://notka-novgorod.ru/">НОТКА – Театрально-концертное агентство</a></b>
              </p>
              <p>
                <b>Новгородский музей Заповедник</b> – основан в 1865 году. Он является одним из старейших музеев
                �&nbsp;оссии. Основание Новгородского музея было связано с празднованием тысячелетия российской
                государственности. <a href="https://novgorodmuseum.ru/">https://novgorodmuseum.ru/</a>
              </p>
              <p>
                <b>Картинг центр DRIVE PARK </b>- Открытый картинг центр в Великом Новгороде. Протяженность трассы около
                900м /несколько модификаций. Новые современные и безопасные как детские, так и взрослые карты,
                электронная система хронометража, полный комплект гоночной экипировки для взрослых и детей (БЕСПЛАТНО),
                сертифицированные инструктора, комфортная зона отдыха, удобные раздевалки.
              </p>
              <p>
                <b><a href="https://vk.com/delowkusa">Творческая мастерская «Дело вкуса»</a></b> - Художественные студии
                и гончарные мастерские, Уроки и мастер-классы.
              </p>
              <p>
                <b><a href="https://chudovn.ru/">�&nbsp;азвлекательный семейный центр «Чудо-Остров»</a></b> - это
                уникальное сочетание активного отдыха и спорта; 2000 кв.м веселья и развлечений для любого возраста. В
                центре не только дети, но и взрослые найдут, чем заняться во время праздника.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/vystavka-dobrykh-ruk-masterstvo/" style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>09 </span> фев — <span>26 </span> янв</div>
                    <div class="h3"><span>Выставка "Добрых рук мастерство"</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Великий Новгород, Юрьевское шоссе, 15</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a class="event-tmb" href="/events/vystavka-chitaem-pushkina/" style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>26 </span> апр — <span>09 </span> сен</div>
                    <div class="h3"><span>Выставка "Читаем Пушкина"</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Великий Новгород, Победы-Софийская площадь, 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a class="event-tmb" href="/events/immersivnyy-spektakl-priklyucheniya-onfima-v-strane-skazok/"
                style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>29 </span> апр — <span>29 </span> сен</div>
                    <div class="h3"><span>Иммерсивный спектакль «Приключения Онфима в стране сказок»</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">Великий Новгород, Кремлёвский парк</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Великом Новгороде</div>
            <div class="block-ext-content">
              <p>
                Новгородцы во все времена знали толк во вкусной еде. И по сей день, новгородская кухня славится своим
                изобилием и невероятным сочетанием вкусов.
              </p>
              <p>
                Традиционные блюда, которые можно попробовать в Новгородской области: щи серые из крошева, рыба,
                фаршированная квашеной капустой, новгородские сульчины, кулеш, кулебяка, тельное из судака с льняным
                блинчиком и баклажанной икрой и, конечно же, медвежатина.
              </p>
              <p>
                <a href="https://vk.com/charodeyka_bar">ЧА�&nbsp;ОДЕЙКА–БА�&nbsp; И ZAVOD-БА�&nbsp;</a> – это
                интеллигентные бары с русской кухней, настойками и купеческой лавкой, заполненной памятными сувенирами и
                русскими напитками.
              </p>
              <p>
                <a href="https://domberga.ru/">�&nbsp;есторан «Дом Берга»</a> - ресторан русской купеческой кухни
              </p>
              <p>
                <a href="https://tk-podvorie.ru/">«Юрьевское подворье»</a> - ресторан русской кухни с атмосферным
                дизайном, расположенный в шаговой доступности от ключевых туристических объектов Новгородчины. Здесь вы
                окунетесь в уютное сказочное детство, почувствуете себя как «в деревне у бабушки», где вам всегда рады,
                где вам уютно, безопасно и тепло.
              </p>
              <p>
                <a href="marusya.rest/"> �&nbsp;есторан MARUSYA</a> – ресторан в самом сердце Великого Новгорода и
                гастро-проект, наполненный литературным вкусом, авторской кухней, театральными подачами, яркими
                событиями и душой, полной авантюризма и любви к еде и искусству, где каждый ужин имеет свой смысл и свою
                историю.
              </p>
              <p>
                Полный список кафе и ресторанов Великого Новгорода <a
                  href="https://novgorod.travel/restaurants/?TOWN=3">здесь</a>
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/restoran-amaks-rossiya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/a6fe262c613e2dd33b09b45016e57667.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/restaurants/restoran-amaks-rossiya/">
                      <div class="h3"><span>�&nbsp;есторан АМАКС «�&nbsp;оссия»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>Европейская</li>
                          <li>�&nbsp;усская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/maykroft-pab/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/6435f29dcc5e8472cc8852a27f77ed1a.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/restaurants/maykroft-pab/">
                      <div class="h3"><span>Майкрофт паб</span></div>
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
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kokteyl-bar-vandam/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/5cde1a9e2018383043962cea448b45c9.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/restaurants/kokteyl-bar-vandam/">
                      <div class="h3"><span>Коктейль-бар «Вандам»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>Итальянская</li>
                          <li>Европейская</li>
                          <li>Японская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Великом Новгороде</div>
            <div class="block-ext-content">
              <p>
                В Великом Новгороде столько всего интересного, что за один день даже самому опытному путешественнику не
                справиться. Комфортно и неспешно спланировать своё путешествие можно на выходные, выбрав себе уютную
                гостиницу или гостевой дом.
              </p>
              <p>
                <b><a href="https://novgorod.travel/hotels/park-inn-by-radisson-velikiy-novgorod/">PARK INN BY RADISSON
                    ВЕЛИКИЙ НОВГО�&nbsp;ОД</a></b> - самый большой, уютный и стильный отель города, расположенный в
                историческом и красочном месте на берегу реки Волхов.
              </p>
              <p>
                <b><a href="https://hotel-volkhov.ru/">ГОСТИНИЦА «ВОЛХОВ»</a></b> - комфортабельный отель в самом центре
                Великого Новгорода рядом с Новгородским Кремлём и Софийским собором.
              </p>
              <p>
                <b><a href="https://novgorod.amaks-hotels.ru/">АМАК-ОТЕЛЬ «�&nbsp;ОССИЯ»</a></b> - гостиница расположена
                в исторической части города на живописном берегу реки Волхов, в том самом месте, где в средневековом
                Новгороде находился Гостиный двор - место древнего Торга. Из окон гостиницы открывается прекрасный вид
                на реку Волхов, Новгородский Кремль и Собор Святой Софии. �&nbsp;ядом с гостиницей расположено
                Ярославово дворище - это целый ансамбль шедевров архитектуры.
              </p>
              <p>
                <a href="https://www.rachmaninoff-hotel.ru/"><b>�&nbsp;АХМАНИНОВ. ОТЕЛЬ</b></a> - гостеприимный отель в
                здании исторического 200-летнего особняка в центре Великого Новгорода.
              </p>
              <p>
                <b><a href="https://truvorhotel.com/">БУТИК-ОТЕЛЬ «Т�&nbsp;УВО�&nbsp;»</a></b> - современный отель,
                расположенный в историческом центре Великого Новгорода. <br>
              </p>
              <p>
                <a href="volhov-most.ru/"><b>ОТЕЛЬ &amp; СПА «ВОЛХОВ»</b></a> – комфортабельный отель в самом центре
                Великого Новгорода рядом с Новгородским кремлем и Софийским собором. В отеле расположен СПА с бассейном
                с морской водой, ресторан MARUSYA и кофейня с авторскими десертами. <br>
              </p>
              <p>
              </p>
              <p>
                Загородный комплекс <a href="tk-podvorie.ru%20"><b>«Ю�&nbsp;ЬЕВСКОЕ ПОДВО�&nbsp;ЬЕ</b></a><b>»</b> –
                единственный отель в Великом Новгороде, который имеет такое уникальное расположение. Он находится в
                лесопарковой зоне, вокруг леса, поля, озёр (Ильмень и Мячино) и Юрьевского Монастыря, построенного
                князем Ярославом Мудрым в 1030 году. Напротив отеля расположен музей деревянного зодчества под открытым
                небом «Витославлицы», обязательный для посещения и погружения в новгородский быт и традиции!
              </p>
              <p>
                Любой вид размещения на ваш утонченный вкус: гостиничные номера разных категорий, апартаменты, глэмпинги
                и современные избы. В каждом прослеживаются нотки русской тематики в современном прочтении.
              </p>
              <p>
              </p>
              <p>
                Полный список отелей Великого Новгорода <a href="https://novgorod.travel/hotels/?TOWN=3">здесь</a>
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/inturist-apartamenty/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/749892547f72235c9a4ab5cee1977702.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/hotels/inturist-apartamenty/">
                      <div class="h3"><span>Интурист Апартаменты</span></div>
                    </a>
                  </div>
                  <div class="hotel-tmb-rating">
                    <div class="hotel-rating">3</div>
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
                <a href="/hotels/inturist/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/53a08f9304715cb1a273a65f3ef4af6d.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/hotels/inturist/">
                      <div class="h3"><span>Интурист гостиница</span></div>
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
                <a href="/hotels/rakhmaninov-otel/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b73e994791335ed4af2aa837132dcbe6.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Великий Новгород</a></li>
                    </ul>
                    <a href="/hotels/rakhmaninov-otel/">
                      <div class="h3"><span>�&nbsp;ахманинов. Отель</span></div>
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
            <div class="h2" style="margin-top: 0;">Что привезти из Великого Новгорода</div>
            <div class="block-ext-content">
              <p>
                Ни одно путешествие не считается законченным, если вы не привезёте из него сувенир. Новгородские
                сувениры – это разнообразие подарков и вкусностей на любого туриста. Ваша задача – выбрать то, что по
                душе!
              </p>
              <p>
                <b>Гастрономические сувениры </b>– возможность продлить хорошие впечатления от отпуска и путешествия. Из
                Великого Новгорода везите мёд, иван-чай, варенье, шоколад, пряники, натуральные растительные масла.
              </p>
              <p>
                Подробнее о вкусных сувенирах Великого Новгорода <a href="https://novgorod.travel/bring/">здесь</a>
              </p>
              <p>
                <b>Береста и изделия из неё</b> - изделия из бересты и копии грамот можно купить в качестве сувенира.
                Это оригинальный подарок всем ценителям истории.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/tsera-i-pisalo/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/eb9b62cc2c5f1c44ddbd203318ba28a4.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/tsera-i-pisalo/">
                    <div class="h3">Цера и писало</div>
                    <p>Привезти такой оригинальный сувенир из Новгорода, а также другие предметы быта древних
                      новгородцев, купив в Мастерской Алёшиных</p>
                  </a>
                </div>
              </div>
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/izdeliya-iz-beresty/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/ac0554408820cea33d67365d55d7fbfc.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/izdeliya-iz-beresty/">
                    <div class="h3">Береста и изделия из бересты</div>
                    <p>Выбор берестяных изделий огромен: шкатулки, хлебницы, корзиночки для хлеба или сладостей, лапти,
                      лукошки, украшения и многое другое.</p>
                  </a>
                </div>
              </div>
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/yelochnye-shary-i-igrushki/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/d643d40a0a19e35a9698693764bed5cf.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/yelochnye-shary-i-igrushki/">
                    <div class="h3">Ёлочные шары и игрушки</div>
                    <p>Утончённые эксклюзивные сувениры из стекла, а именно ёлочные шары и игрушки ручной работы с
                      оригинальным рисунком</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>