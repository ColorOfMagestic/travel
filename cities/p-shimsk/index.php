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
                            center: [58.21201, 30.71269],
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
                          <td class="val">Шимский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">3 726 чел </td>
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
                      <p>
                        В�&nbsp;районе находится уникальный природный ресурс Новгородской области озеро Ильмень
                        Ильменский глинт�&nbsp;— объявлен природным заповедником, это выход на�&nbsp;поверхность
                        девонского щита, имеющего геологический возраст более 700�&nbsp;миллионов лет.
                      </p>
                      <p>
                        В�&nbsp;районе расположены реки и�&nbsp;родники, среди них р. Шелонь р. Мшага, р. Киба, родник
                        д. Коростынь, родник д. Щелено, родник д. Солоницко. А�&nbsp;также уникальный
                        энергоинформационный объект Святое озеро Каменное.
                      </p>
                      <p>
                        В�&nbsp;селе Медведь Шимского района есть очень важная и�&nbsp;ценная историческая
                        достопримечательность�&nbsp;— почти полностью сохранившиеся казармы Аракчеева, построенные
                        в�&nbsp;начале 19 века для военных поселений. Это целый заброшенный город с�&nbsp;красивыми
                        добротными зданиями, резко отличающимися от�&nbsp;тех, что мы�&nbsp;привыкли видеть
                        в�&nbsp;современных воинских частях.
                      </p>
                      <p>
                        На�&nbsp;территории района располагаются объекты федерального и�&nbsp;регионального значения,
                        среди них: Путевой дворец (1825–1826, арх. <nobr>В. П. Стасов</nobr>), парк усадебный�&nbsp;—
                        в�&nbsp;д. Коростынь; в�&nbsp;с. Медведь, захоронения князей Васильчиковых в�&nbsp;д. Бор; с.
                        Подгощи�&nbsp;— церковь Святой Троицы, в�&nbsp;д. Коростынь церковь Успения Пресвятой
                        Богородицы, Церковь во�&nbsp;имя Святых отроков Иоанна и�&nbsp;Иакова в�&nbsp;д. Менюша.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="41">

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Видео по Шимску</div>
            <div class="block-ext-content">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/peodMzke-gY?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe> <br>
                </div>
              </div>
              <br>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Шимске</div>
            <div class="block-ext-content">
              <h3>ПУТЕВОЙ ДВО�&nbsp;ЕЦ В ДЕ�&nbsp;ЕВНЕ КО�&nbsp;ОСТЫНЬ</h3>
              <p>
                По дороге из Шимска в Старую �&nbsp;уссу расположена деревня Коростынь – живописное место на берегу
                озера Ильмень. Здание дворца было построенно по проекту архитектора В.П.Стасова в 1825-1827 годах.
                Нижний этаж дворца каменный, верхний — деревянный. �&nbsp;ядом сохранился амбар из булыжного камня и
                кирпича. �&nbsp;ядом с дворцом есть парк. Через дорогу от дворца сохранились остатки фруктового сада,
                заложенного во времена Екатерины II. Яблоки и вишни из этого сада поставлялись к императорскому столу.
              </p>
              <p>
                Долгое время Путевой Дворец находился в заброшенном состоянии, но в 2019 году его отреставрировали, и
                теперь там работает культурно-музейный центр. На выставках можно узнать об истории деревни Коростынь,
                узнать о постройке Успенской церкви и Путевого дворца.
              </p>
              <h3>УСПЕНСКАЯ ЦЕ�&nbsp;КОВЬ</h3>
              <p>
                По приказу Екатерины I, в 1720 году на погосте в селе Коростынь была построена каменная Успенская
                церковь. Проектировал храм известный итальянский архитектор, проживший в �&nbsp;оссии девять лет, Г.
                Киавери; но построил церковь уже его ученик – Д. Елчанинов.
              </p>
              <p>
                Для строительства церкви привозили кирпич из Великого Новгорода. Храм построен в стиле петровского
                барокко. Памятник хорошо сохранил свои первоначальные формы, к более позднему времени относятся только
                купола церкви и колокольни.
              </p>
              <p>
                В храме три престола: центральный – Успения Божией Матери, южный – Преображения Господня, северный –
                Воздвижения Креста Господня. Церковь была закрыта в конце 1930-х гг., открыта в годы войны и затем уже
                не закрывалась. В храме хорошо сохранились сделанные до революции росписи работы В.М. Васнецова и М.В.
                Нестерова. Среди почитаемых икон – икона Параскевы Пятницы и Старорусская икона Божией Матери (список
                1877 г.).
              </p>
              <h3>НЕМЕЦКОЕ ВОЕННОЕ КЛАДБИЩЕ В КО�&nbsp;ОСТЫНЕ</h3>
              <p>
                Это захоронение не похоже на типичные русские кладбища. Оно заметно выделяется на фоне новгородской
                деревни.
              </p>
              <p>
                В годы Великой Отечественной войны западную часть Новгородской области быстро оккупировали немцы. С 1941
                по 1944 год в деревне Коростынь был развёрнут немецкий лагерь и госпиталь, где немцы лечили раненных
                солдат. Умерших хоронили на высоком берегу Ильменя, где и по сей день находится немецкое военное
                захоронение.
              </p>
              <p>
                На этом кладбище похоронены солдаты и офицеры 16-й немецкой армии. В её же состав входила и «элитная
                дивизия» «Мёртвая голова». Захоронение содержится за счёт Народного союза Германии по уходу за военными
                захоронениями. Союз поддерживает и русские захоронения солдат в Германии.
              </p>
              <h3>А�&nbsp;АКЧЕЕВЫ КАЗА�&nbsp;МЫ В СЕЛЕ МЕДВЕДЬ</h3>
              <p>
                Это казарменный комплекс в селе Медведь, который находится в 20 км от Шимска. Строительство казарм было
                начато в 1823 году. Военный комплекс в медведе строили для двух полков.
              </p>
              <p>
                Здания строились по периметру большого плаца. Вдоль одной из сторон плаца был выстроен манеж с
                трёхэтажными флигелями по краям и церковью в центре. Напротив манежа, на противоположной стороне плаца,
                находилось здание гауптвахты с каланчой. Строительство комплекса растянулось на долгие годы – почти 10
                лет.
              </p>
              <p>
                В разные годы в казармах располагались различные полка и батальоны. В годы Великой Отечественной войны
                деревня Медведь находилась в оккупации, все здания серьёзно пострадали. После освобождения села
                возобновилась и жизнь гарнизона. В 1950-е гг. в Медведе размещалась 72-я инженерная бригада
                �&nbsp;езерва Верховного Главнокомандования, которую принято считать родоначальницей ракетных войск
                ССС�&nbsp;. В последующие годы Медведь являлся местом дислокации других ракетных частей Советской армии.
                Военный гарнизон в селе Медведь существовал до недавнего времени.
              </p>
              <p>
                Пока казармам не нашлось применения и они пустуют.
              </p>
              <h3>МЕДВЕДСКИЙ НА�&nbsp;ОДНЫЙ ТЕАТ�&nbsp;</h3>
              <p>
                Уникальный народный театра, которому уже более 120 лет. Медведский народный театр был создан в мае 1898
                года при пожарной дружине села Медведь. Инициаторами создания театра стали страховой агент Михаил
                Галактионов и учитель Александр Калязинов. Оба – большие поклонники театрального искусства. В конце XIX
                века село медведь было большим купеческим селом, куда съезжались в гости и по разным делам интеллигенция
                из Санкт-Петербурга. Есть исторические документы, свидетельствующие о том, что в народном театре сыграл
                несколько ролей и Пётр Ильич Чайковский, который приезжал в гости к своей сестре в село Медведь в 1861
                году. Звание народного коллектива присвоено театру в 1963 году.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=41"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=41"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=41"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=41"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=41"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=41"
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
            <div class="h2" style="margin-top: 0;">Маршруты по Шимску</div>
            <div class="block-ext-content">
              <h3>Ильменский глинт</h3>
              <p>
                Это не искусственное сооружение, это то, что создала сама природа. Ильменский глинт – это геологический
                памятник, расположенный на территории Шимского и Старорусского районов Новгородской области в западной
                части южного берега озера Ильмень, между дельтами рек Ловать и Шелонь.
              </p>
              <p>
                Ильменский глинт представляет собой высокий обнажённый обрыв-уступ, обращённый срезом на север и
                северо-восток. Глинт тянется на 8 км, его наибольшая высота — 15 метров — на участке между деревней
                Коростынь и деревней Пустошь. �&nbsp;аспространяясь далее на восток, уступ понижается и затем
                выравнивается с береговой линией. Через глинт, в районе деревни Устрека, прорезается река Псижа и ручей
                Саватейка. Оба впадают в озеро Ильмень.
              </p>
              <p>
                Ильменский глинт является самым протяжённым обнажением морского девона на �&nbsp;усской равнине и
                представляет собой уникальный геологический музей.
              </p>
            </div>
          </div>









          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Шимске</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-kapitan/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/00cc4b5c533cb555ca27f0ac80ff1025.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Шимск</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-kapitan/">
                      <div class="h3"><span>База отдыха «Капитан»</span></div>
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