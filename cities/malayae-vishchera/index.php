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
                            center: [58.84538, 32.22218],
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
                          <td class="val">Маловишерский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">11 015 чел </td>
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
                        <p>
                          �&nbsp;ождение селения Малая Вишера связано со�&nbsp;строением железнодорожной магистрали
                          <nobr>Санкт-Петербург</nobr>�&nbsp;— Москва. В�&nbsp;1843 году артель крепостных крестьян
                          на�&nbsp;берегу реки срубила из�&nbsp;вековых сосен казенную избу для приказчика, десятника
                          и�&nbsp;прочих распорядителей, которая стала первым сооружением будущего города. �&nbsp;ека
                          Малая Вишерка�&nbsp;— правый приток Волхова, носит явно неславянское имя. Писцовые книги
                          XV�&nbsp;века упоминают на�&nbsp;остаточные следы <nobr>прибалтийско-финских</nobr> поселений
                          по�&nbsp;Волхову и�&nbsp;его притокам.
                        </p>
                        <p>
                          Первоначальное название было «Концы», происходившее от�&nbsp;близлежащего села. Было�&nbsp;ли
                          село концом тупиковой дороги, перекрестка�&nbsp;— неизвестно, но�&nbsp;открытый остановочный
                          пункт не�&nbsp;являлся тупиковым, а�&nbsp;располагался на�&nbsp;линии <nobr>Санкт-Петербурго
                          </nobr>�&nbsp;— Московской железной дороги. В�&nbsp;1874�&nbsp;г. станция получила название
                          Большая Вишера�&nbsp;— по�&nbsp;протекавшей здесь реке.
                        </p>
                        <p>
                          18 декабря 1871 года состоялись торжества по�&nbsp;случаю перевода поселения на�&nbsp;станции
                          Малая Вишера в�&nbsp;разряд посада. На�&nbsp;магистрали лишь три вокзала имели высший
                          разряд�&nbsp;— в�&nbsp;Малой Вишере, Бологом и�&nbsp;Твери.
                        </p>
                        <p>
                          С�&nbsp;Малой Вишерой связано несколько эпизодов, в�&nbsp;определенной мере повлиявших
                          на�&nbsp;ход исторических событий. В�&nbsp;ночь на�&nbsp;1�&nbsp;марта 1917 года здесь
                          остановился Царский поезд, Государю доложили, что Любань и�&nbsp;Тосно заняты восставшими.
                          «Ночью повернули с�&nbsp;М.Вишеры назад»,�&nbsp;— записал Николай II�&nbsp;в.�&nbsp;дневнике.
                        </p>
                        <p>
                          Маленький провинциальный городок Малая Вишера и�&nbsp;его окрестности всегда были излюбленным
                          местом отдыхи столичной знати и�&nbsp;даже царствующих особ. Александр II�&nbsp;среди
                          российских правителей XIX столетия слыл страстным охотником. У�&nbsp;него, как
                          и�&nbsp;у�&nbsp;каждого охотника, были свои любимые виды охоты. Именно при Александре
                          II�&nbsp;медвежья охота вошла в�&nbsp;моду высочайшего двора. В�&nbsp;здешних местах также
                          предпочитал охотиться русский поэт <nobr>Н. А. Некрасов</nobr>.
                        </p>
                        <p>
                          10�&nbsp;марта 1918 года на�&nbsp;станции Малая Вишера поезд с�&nbsp;Владимиром Ильичом
                          Лениным столкнулся с�&nbsp;враждебно настроенными анархистскими матросами, самовольно
                          бежавшими с�&nbsp;фронта. «Анархистский поезд» был разоружён с�&nbsp;помощью латышских
                          стрелков.
                        </p>
                        <p>
                          В�&nbsp;1918–1927 годах Малая Вишера была административным центром Маловишерского уезда
                          Новгородской губернии.
                        </p>
                        <p>
                          В�&nbsp;истории Великой Отечественной войны М. Вишера стала первым городом, освобожденным
                          от�&nbsp;<nobr>немецко-фашистских</nobr> захватчиков (20 ноября 1941�&nbsp;г.).
                        </p>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="27">


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Малой Вишере</div>
            <div class="block-ext-content">
              <p>
                Малая Вишера небольшой городок в Новгородской области, но в нём расположено немало интересных
                достопримечательностей. Начать можно со здания железнодорожного вокзала.
              </p>
              <h3>ЖЕЛЕЗНОДО�&nbsp;ОЖНЫЙ ВОКЗАЛ</h3>
              <p>
                Малая Вишера – город, через который курсируют поезда направления север-юг, его пересекает магистраль
                высокоскоростного сообщения. Станция в Малой Вишере была открыта ещё в 1856 году и ей дали название
                «Пассажирский дом». Вокзал строился как станция первого класса на пути следования поездов по направлению
                Санкт-Петербург-Москва.
              </p>
              <p>
                Здание вокзала островное, стоит на искусственной насыпи и построено по типовому проекту, как в Бологом,
                Твери и Клину. Архитектором зданий был архитектора �&nbsp;удольф Желязевич. Вокзал до сих пор сохранил
                свой первоначальный облик, однако большая часть помещений не используется по своему прямому назначению.
              </p>
              <p>
                Здание представляет собой вытянутое вдоль железнодорожных путей строение, с округлыми стенами на торцах,
                по всему периметру здания на крыше установлен металлический каркас. В настоящий момент здание вокзала
                является памятником культурного наследия.
              </p>
              <h3>ОСОБНЯК Б�&nbsp;АТЬЕВ КУ�&nbsp;ЖЕНКОВЫХ</h3>
              <p>
                Братья Курженковы – это промышленники, которые в 1880 году начали строить в Малой Вишере стекольный
                завод. Предприятие расположили недалеко от Николаевской железной дороги, а главными рынками сбыта
                продукции стали Москва и Санкт-Петербург. Продукция славилась своим стабильным и высоким качеством. На
                заводе в Малой Вишере производили стеклянные составляющие для электрического, газового и лампового
                освещения, фонари для железнодорожного транспорта, речных пароходов, морских судов и военного флота.
              </p>
              <p>
                Курженковы отметились на маловишерской земле не только как успешные предприниматели, но и как активные
                общественные деятели. Братья были и депутатами и представителями различных государственных комиссий.
                Промышленники участвовали и в благотворительной деятельности. Они построили школу и больницу для рабочих
                стекольных фабрик, учредили стипендию для учащихся, успешно осваивающих образовательную программу.
              </p>
              <p>
                Сейчас в роскошном особняке, который расположен центре города, располагается администрация района.
                Судьба у семьи Курженковых трагична. После революции Курженковы уехали в Петроград, где они жили
                некоторое время на Садовой. Во время блокады Иван Павлович, его жена и дочь умерли от голода. Остался
                сын Георгий. Георгий прошёл всю Великую Отечественную войну, а после войны умер от несчастного случая.
                Так, жизнь семьи прервалась.
              </p>
              <p>
                В июле 1919 года, после полного изъятия стекольных заводов из рук прежних владельцев, в особняке
                Курженковых разместился уездный исполком. В 1970 году к северо-западной дворовой части была сделана
                обширная пристройка в два этажа. Сейчас в доме Курженковых располагается администрация района.
              </p>
              <h3>СКУЛЬПТУ�&nbsp;А СНЕЖНОМУ ЧЕЛОВЕКУ</h3>
              <p>
                Малая Вишера хорошо известна любителям всего аномального и загадочного. До сих пор люди верят в то, что
                в местных лесах живёт снежный человек. Поэтому в центре города установлена скульптура в честь этих
                существ.
              </p>
              <p>
                Скульптуру установили в 2018 году в Малой Вишере. Её высота чуть больше двух метров. Выполнена
                петербургскими мастерами из крепких антивандальных полимерных материалов.
              </p>
              <p>
                Есть легенда, что в маловишерских лесах бродят странные существа, которых местные жители называют
                авдошками. Согласно преданию, в одной из окрестных деревень жила женщина со сложным характером,
                нелюдимая и сварливая. Звали её Авдотья. Она так и не смогла ужиться с односельчанами, и ушла в лес.
                Спустя несколько лет местные жители, приходившие в лес за грибами или ягодами, несколько раз видели её в
                компании с огромным, шерстяным существом. Позже стали встречать и других волосатых существ, но меньшего
                размера, лицом, похожим на Авдотью. Детей этой странной пары прозвали «авдошками».
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=27"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=27"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=27"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/aktivnyy-otdykh/?TOWN=27"
                style="background-image:url(images/9b7749d95eb1c4c1b1bf1b402a106ce7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Активный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=27"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=27"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=27"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=27"
                style="background-image:url(images/cf8a80fd60face7ce229b62c2f7ef064.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Здания</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Малой Вишере</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/istoriya-goroda-malaya-vishera/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/51bf647292fdc31e65d7558f12fc0817.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <a href="/routes/istoriya-goroda-malaya-vishera/">
                      <div class="h3"><span>История города Малая Вишера</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Малой Вишере</div>
            <div class="block-ext-content">
              <h3>ЛИТЕ�&nbsp;АТУ�&nbsp;НЫЕ ЧТЕНИЯ В ДЕ�&nbsp;ЕВНЕ ПОДГО�&nbsp;НОЕ</h3>
              <p>
                В деревне Подгорное Маловишерского района ежегодно проходят Литературные чтения, посвящённые Зинаиде
                Гиппиус и Дмитрию Мережковскому.
              </p>
              <p>
                Именно в этом месте поэты «серебряного века», родоначальники такого течения в поэзии, как символизм,
                отдыхали и работали над своими произведениями. Они жили в особняке, оставшемся от имения помещика
                Малышева в живописном месте близ реки Мста. Сюда съезжаются ценители русской литературы, местные жители,
                писатели Новгородской области. Чтения проходят в июле.
              </p>
              <h3>«К�&nbsp;АСОТА МАСТЕ�&nbsp;СТВА» - XII МЕЖ�&nbsp;ЕГИОНАЛЬНЫЙ ФЕСТИВАЛЬ Т�&nbsp;АДИЦИОННОГО
                НА�&nbsp;ОДНО-П�&nbsp;ИКЛАДНОГО И ХУДОЖЕСТВЕННОГО ТВО�&nbsp;ЧЕСТВА</h3>
              <p>
                Фестиваль проводится в Малой Вишере на центральной площади города в конце августа. Во время фестиваля на
                площади работают торговые ряды ремесленников, где можно посмотреть и купить всевозможных изделия
                народного творчества и ремесел. Вы можете приобрести изделия из бересты, керамики, изделия из дерева,
                обереги, валенки, изделия из кожи и многое другое, а умельцы проводят увлекательные мастер-классы по
                различным направлениям.
              </p>
              <h3>
                <!--noindex--><a href="https://www.mstgorki.ru/" rel="nofollow">ВСЕСЕЗОННЫЙ КУ�&nbsp;О�&nbsp;Т
                  «МСТИНСКИЕ ГО�&nbsp;КИ»</a><!--/noindex-->
              </h3>
              <p>
                Отдых для всей семьи на берегу живописной реки Мста в Маловишерском районе.
              </p>
              <p>
                В комплекс входит спортивная база отдыха, комфортабельный гостевой дом с уютными комнатами, русская
                баня. Гостевой дом, баня, горные лыжи, сноуборды, коньки. Ватрушки на специальной горке с подъемником.
              </p>
              <p>
                Летом работает бассейн на улице, теннисный корт, детская игровая площадка, летняя терраса для отдыха,
                волейбольная и футбольная площадка.
              </p>
              <p>
                Есть ресторан и кафе.
              </p>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Малой Вишере</div>
            <div class="block-ext-content">
              <h3>
                <!--noindex--><a rel="nofollow" href="http://berezzok.ru/">База отдыха «Красный
                  Бережок»</a><!--/noindex-->
              </h3>
              <p>
                Комплекс расположен в окружении светлых сосновых лесов и березняков. На высоком берегу реки Мста, откуда
                открываются красивые виды на воду, небо и закаты.
              </p>
              <p>
                Можно арендовать коттеджи или апартаменты.
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/restoran-mstinskie-gorki-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/5370e3357e03d0dbe44a99d570e0c056.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Малая Вишера</a></li>
                    </ul>
                    <a href="/restaurants/restoran-mstinskie-gorki-/">
                      <div class="h3"><span>�&nbsp;есторан «Мстинские горки» </span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Малой Вишере</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-mstinskie-gorki/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/2d7c576545e40299aef0350899a2323a.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Малая Вишера</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-mstinskie-gorki/">
                      <div class="h3"><span>База отдыха «Мстинские горки</span></div>
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
                <a href="/hotels/dom-otdykha-krasnyy-berezhok/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/28c959624f032457e05794aec270b538.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Малая Вишера</a></li>
                    </ul>
                    <a href="/hotels/dom-otdykha-krasnyy-berezhok/">
                      <div class="h3"><span>Дом отдыха "Красный Бережок"</span></div>
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