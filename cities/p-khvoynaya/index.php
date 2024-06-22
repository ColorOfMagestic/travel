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
                            center: [58.9, 34.53333],
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
                          <td class="val">Хвойнинский</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">5 985 чел </td>
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
                        <div class="col-xs-12">
                          <p>
                            Поселок городского типа Хвойная был создан на месте древнего поселения Трошово. На
                            территории Хвойнинского муниципального округа много археологических памятников начиная с
                            эпох неолита.
                          </p>
                          <p>
                            Некоторое время существовали два поселения — станция Хвойная и поселок Хвойная. Каждое
                            поселение имело свою школу, больницу, магазины, почту и т. д. Позднее оба поселка «слились»,
                            в поселок Хвойная вошла и деревня Трошово, как одна из улиц.
                          </p>
                          <p>
                            Во время Великой Отечественной войны осенью 1941 года в�&nbsp;Хвойной были развёрнуты
                            госпитали; на�&nbsp;братском кладбище, расположенном на�&nbsp;территории посёлка, похоронено
                            714 советских воинов, умерших от�&nbsp;ран.
                          </p>
                          <p>
                            В�&nbsp;сентябре 1941 года Хвойная стала основной авиационной базой снабжения блокадного
                            Ленинграда. В�&nbsp;Хвойную прибыли Особая Северная авиагруппа гражданской авиации (ОСАГ)
                            и�&nbsp;затем авиационный полк под командованием прославленной лётчицы Валентины
                            Гризодубовой. Кроме этого самолёты базировались на�&nbsp;подготовленных аэродромах
                            в�&nbsp;деревнях Покром, Наротово, �&nbsp;онино, Кашино, Пестово и�&nbsp;в�&nbsp;Жилом Бору.
                            А�&nbsp;в�&nbsp;Яхнове был оборудован ложный аэродром. Три фронтовых месяца базировались
                            эскадрильи в�&nbsp;Хвойнинском МО. Они выполняли задания по�&nbsp;срочным перевозкам
                            горючего, боеприпасов, вооружения войскам, державшим оборону Ленинграда, доставляли
                            в�&nbsp;город продовольствие и�&nbsp;вывозили детей из�&nbsp;блокадного Ленинграда.
                          </p>
                          <p>
                            К�&nbsp;середине ноября сорок первого года Хвойная обеспечивала воздушную связь
                            и�&nbsp;с�&nbsp;партизанскими отрядами. Посёлок стал одним из�&nbsp;центров партизанского
                            движения в�&nbsp;оккупированных фашистами районах <nobr>северо-западной</nobr> зоны.
                          </p>
                          <p>
                            Для руководства партизанской борьбой и�&nbsp;оказания партизанам конкретной военной помощи
                            в�&nbsp;Хвойной был создан штаб с�&nbsp;местом размещения в�&nbsp;микрорайоне <nobr>
                              �&nbsp;айбольница-Туберкулезный</nobr> санаторий- деревня Остахново
                            и�&nbsp;в�&nbsp;прилегающих борах. Отсюда отправлялись в�&nbsp;бой партизанские отряды
                            и�&nbsp;группы особого назначения.
                          </p>
                          <p>
                            В�&nbsp;лесу, за�&nbsp;Скуратовским мостом, уже в�&nbsp;конце 1941 года был сформирован
                            учебный партизанский лагерь, где сначала готовили радистов и�&nbsp;диверсионные группы,
                            а�&nbsp;затем и�&nbsp;других специалистов, требующихся для партизанских действий
                            в�&nbsp;тылу врага. Только за�&nbsp;один 1942 год здесь было подготовлено:
                            командиров�&nbsp;— 41 человек, командиров диверсионных групп�&nbsp;— 206 человек, сотни
                            радистов и�&nbsp;медсестёр, около трёх тысяч рядовых. В�&nbsp;этом�&nbsp;же лесу,
                            за�&nbsp;рекой Песь, работали партизанские типография и�&nbsp;редакция, где выпускали газеты
                            «Ленинградский партизан»�&nbsp;— орган Ленинградского штаба партизанского движения,
                            «За�&nbsp;советскую �&nbsp;одину» и�&nbsp;несколько экземпляров «Юный мститель».
                            В�&nbsp;память о�&nbsp;партизанской базе в�&nbsp;п. Хвойная установлена стела на�&nbsp;левом
                            берегу реки Песь за�&nbsp;Скуратовским мостом.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="40">


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Хвойной</div>
            <div class="block-ext-content">
              <h3>Церковь преподобного Никандра Городноезерского</h3>
              <p>
                Эта деревянная церковь построена относительно недавно - в 2000 году. Строительство храма продолжалось
                три года. Храм знаменит тем, что в его алтаре находится чудотворная икона Божией Матери «Тихвинская», и
                в дни праздников она выносится на поклонение верующим.
              </p>
              <p>
                При храме действуют воскресные школы для детей и для взрослых, библиотека, хор.
              </p>
              <p>
                О преподобном Никандре, в честь которого названа церковь,�&nbsp; известно, что в XVI веке он основал
                пустынь на западном берегу озера Городно, расположенном в 80 км от поселка Хвойная. Сейчас там находится
                Свято-Троице Никандров женский монастырь.
              </p>
              <h3>Имение Удовище</h3>
              <p>
                Когда император Павел I вступил на престол в 1797 году, он пожаловал одному из своих полковников имение
                с крестьянами в Новгородской области. Так, полковник Семён Мякинин стал владельцем усадьбы Замостье,
                недалеко от Удовищ. �&nbsp;од Мякининых – один из древних родов на Боровичской земле, проживавший здесь
                со времен Ивана III. После смерти полковника, имение передавалось по наследству. К 1916 году в имении
                числилось 827 десятин земли, был двухэтажный дом, первый этаж которого построен из кирпича. В доме была
                библиотека в 1250 томов; из старинных изданий есть История �&nbsp;оссийского Государства Карамзина (1-е
                издание); портреты масляными красками, хорошего письма, - Императриц Елизаветы Петровны, Елизаветы
                Алексеевны и Императора Павла Петровича.
              </p>
              <p>
                Вокруг усадьбы была берёзовая роща и красивые озёра. После революции 1917 года барский дом отдали школе.
                После войны школа сгорела. Сейчас от усадьбы остались аллеи парка.
              </p>
              <h3>Парк усадьбы Захаржевского</h3>
              <p>
                Илья Петрович Захаржевский – купец из Санкт-Петербурга, который переехал в Новгородскую губернию и стал
                боровичским купцом. На новгородской земле она скупал земельные участки и выкупал заложенные дворянские
                именья, а затем перепродавал их. По данным 1892 года в его собственности находилось 7800 десятин земли и
                бывшие дворянские усадьбы Емельяновское и Петровское (Лукинское). Также у семьи Захаржевских был свой
                завод по сухой перегонки древесины, лесопилка и мукомольное производство.
              </p>
              <h3><a href="http://khvoinaya.ru/prirodnye-ob-ekty.html">Государственный природный заказник регионального
                  значения "Игоревские мхи"</a></h3>
              <p>
                На территории заказника находятся популяции 8 видов птиц и 3 видов растений, занесенных в Красную книгу
                �&nbsp;оссийской Федерации. Общая площадь заказника более 17 тысяч гектаров, куда входит и акватория
                озера Игорь - 536 га. Именно на верховых болотах массового гнездятся водоплавающие птицы.
              </p>
              <p>
                Необычное название озера Игорь трактуют древней легендой: В этих местах то в этих местах бывал сын князя
                �&nbsp;юрика – Игорь. И поэтому его именем назвали водоём. А уже в современности был назван и сам
                заказник. Также на территории заказника на восточном берегу озера находится огромный валун. Его называют
                «Игорев камень» или «Змеиный камень».
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=40"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=40"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">10</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=40"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=40"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Хвойной</div>
            <div class="block-ext-content">
              <h3> <span style="font-weight: 700;"><a href="http://khvoinaya.ru/ekskursii.html">Экскурсия в природный
                    заказник «Карстовые озера»</a></span></h3>
              <p>
                Это пешеходная экскурсия по природной тропе «Страна уходящих озёр». Большая часть озёр в Хвойнинском
                районе соединена в единую цепь, площадь заказника составляет 19290 гектаров. Это уникальные озёра на
                всём Северо-Западе, так как они периодически исчезают - уходят под землю. Одни озёра уходят полностью,
                оставляя после себя воронку, другие значительно понижают свой уровень.
              </p>
              <p>
                Маршрут начинается с озера Съезжее. Берег акватории был обжит людьми со времён ухода ледника.
                Археологами на берегу озера найдено большое количество славянских захоронений, городищ и других
                артефактов жизни наших предков. Полюбоваться можно не только озёрами, но и карстовым ландшафтом на
                берегу.
              </p>
              <h3> <span style="font-weight: 700;"><a href="https://vk.com/hvntour">«Озеро Железо»</a></span></h3>
              <p>
                Маршрут проходит по местам добычи и выплавке болотного железа на �&nbsp;уси. Показ объектов природного
                наследия. Залежи руды толщиной до 1м. Двойной карст. Общая протяжённость маршрута: 1 км.
              </p>
              <p>
                На маршруте можно будет увидеть обнажение известняка, так называемые «Известковые ямы» - карстовый
                ландшафт: воронки, поноры. Долину, уходящей под землю реки Беленькой и сам памятник природы «Озеро
                Железо» - место добычи болотной железной руды - выплавка железа из железной руды. Также вы побываете на
                мастер-классе по ковке из железа.
              </p>
              <h3> <span style="font-weight: 700;"><a href="http://khvoinaya.ru/ekskursii.html">Этно-экологическая тропа
                    «Левочская»</a></span></h3>
              <p>
                Интерактивная экскурсионная программа с традиционной хвойнинской трапезой на берегу реки Левочи с ухой
                из местной рыбы, пирогами с белыми грибами или брусникой. А также чаепитием со знаменитым копорским чаем
                и иван-чаем и мёдом из местных пасек. Также можно побывать на производстве иван-чая.
              </p>
              <p>
                В маршрут входят и познавательные программы, по изучению редких видов растений, мастер-классы по
                изготовлению народной куклы-оберега.
              </p>
              <h3> <span style="font-weight: 700;">Экологическая тропа «Ingvarr»</span> </h3>
              <p>
                Путешествие в природный заказник «Игоревские мхи», где вы узнаете о легенде княгини Ольги и князя Игоря,
                увидете уникальные природные озёра, краснокнижных птиц и редкие виды растений.
              </p>
              <h3> <span style="font-weight: 700;"><a
                    href="http://khvoinaya.ru/tcerkvi-i-svyatye-istochniki.html">Туристический маршрут «Храмы земли
                    Хвойнинской»</a></span></h3>
              <p>
                Экскурсионных маршрутов по различным местам Хвойнинского благочиния: деревня Миголощи, Храм Святого
                Иоанна Воина, Храм преподобного Никандра Городноезерского в посёлке Хвойное. Затем Церковь Успения
                Пресвятой Богородицы на вершине Внутовой (Девичьей) горы, высота которой около 240м. Каменная церковь
                Великомученика Георгия Победоносца и посещение старинного села Левоча и храма Святителя Николая
                Чудотворца, где хранятся мощи разных святых.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/strana-ukhodyashchikh-ozyer/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">100�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <a href="/routes/strana-ukhodyashchikh-ozyer/">
                      <div class="h3"><span>Природопознавательная тропа "Страна уходящих озёр"</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа</div>
                    </div>
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">2 км</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/ekologicheskaya-tropa-ingvarr/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">350�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/ekologicheskaya-tropa-ingvarr/">
                      <div class="h3"><span>Экологическая тропа «Ingvarr»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 день</div>
                    </div>
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">5 км</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/drevniy-vodnyy-put-/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">1500�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/drevniy-vodnyy-put-/">
                      <div class="h3"><span>Древний водный путь. </span></div>
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
            <div class="h2" style="margin-top: 0;">Куда сходить в Хвойной</div>
            <div class="block-ext-content">
              <h3>
                «ХВОЙНИНСКИЙ К�&nbsp;АЕВЕДЧЕСКИЙ МУЗЕЙ» </h3>
              <p>
                Традиционный краеведческий музей, который рассказывает о быте и жизни округа в разные эпохи. В
                Хвойнинском краеведческом музее - 3 зала, в которых размещено 10 экспозиций. Здесь можно узнать о
                природе и истории района. В музейных фондах хвойнинского музея 1126 единиц хранения, из них 560
                предметов основного фонда и 566 предметов научно-вспомогательного.
              </p>
            </div>
          </div>






          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Хвойной</div>
            <div class="block-ext-content">
              <h3> <a href="http://novgorodskayaderevnya.ru/">База отдыха "Новгородская деревня"</a></h3>
              <p>
                Туристическая база «Новгородская деревня» прекрасное место не только для семейного, корпоративного
                отдыха и отдыха в кругу друзей, проживания рыбаков, охотников, туристов, но так же прекрасное место и
                для проведения торжеств, свадеб.
              </p>
              <p>
                �&nbsp;асположено в экологически чистом районе Новгородской области.
              </p>
              <h3> <span style="font-weight: 700;"><a href="https://molodilno.ru/">Эко-усадьба «Молодильно»</a></span>
              </h3>
              <p>
                Комплекс расположен в самом центре государственного заказника "Карстовые озера", вдалеке от шумных дорог
                и цивилизации, в сосновом лесу с чистейшим воздухом.
              </p>
              <p>
                Уютная деревянная усадьба на побережье озера Ореховое располагает всеми возможностями для
                комфортабельного пребывания гостей в новгородской глубинке.
              </p>
              <h3>Гостиница «Альбатрос»</h3>
              <p>
                Новгородская область, п. Хвойная, ул. Красноармейская, д.1А.
              </p>
              <p>
                Гостиница «Альбатрос» находится в центре правобережной части п. Хвойная. Предлагает к услугам гостей 13
                стандартных 1,2-х местных номеров
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-novgorodskaya-derevnya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/9aac2f63c7ddd0172c1760e74f69b78c.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Хвойная</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-novgorodskaya-derevnya/">
                      <div class="h3"><span>База отдыха «Новгородская деревня»</span></div>
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
                <a href="/hotels/usadba-molodilno/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/4e75447d062990e8de62dd56da87bd6a.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Хвойная</a></li>
                    </ul>
                    <a href="/hotels/usadba-molodilno/">
                      <div class="h3"><span>Эко-усадьба «Молодильно»</span></div>
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
            <div class="h2" style="margin-top: 0;">Что привезти из Хвойной</div>
            <div class="block-ext-content">
              <h3> <span style="font-weight: 700;"><a href="https://fabrikabio.ru/">Иван-чай</a></span></h3>
              <p>
                – традиционный русский напиток, а теперь ещё и настоящий русский суперфуд. Хвойнинский район – один из
                самых экологически чистых в Новгородской области и именно здесь растёт этот чудо-напиток.
              </p>
              <p>
                Здесь же расположена и производство «Емельяновская фабрика», которая занимается сбором и упаковкой
                продукта. Всё делается вручную с любовью и заботой о вашем здоровье.
              </p>
            </div>
          </div>


        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>