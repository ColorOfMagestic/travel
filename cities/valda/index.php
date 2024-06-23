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
                            center: [57.97472, 33.2525],
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
                          <td class="val">瓦尔代</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">14 379 人 </td>
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
                      <p>
                        Современный город 瓦尔代 расположен на 瓦尔代ской возвышенности, на берегу 瓦尔代ского озера, в
                        140 км к юго-востоку от Великого Новгорода, на 386-м километре федеральной автодороги Москва —
                        Санкт-Петербург М10 (E 105).
                      </p>
                      <p>
                        Впервые 瓦尔代 упоминается в берестяной грамоте 1140-1151 года. До 1654 года 瓦尔代 был
                        дворцовым 村庄м, затем до 1764 года было передано Иверскому монастырю. В это время 村庄 носило
                        название Богородицыно.
                      </p>
                      <p>
                        В 1770 года 瓦尔代 получил статус города. �&nbsp;асположение Валдая на почтовом тракте между
                        Москвой и Петербургом способствовало процветанию города и развитию в нём ремесла. 瓦尔代ские
                        умельцы, отливавшие большие колокола и маленькие колокольчики, славились на всю �&nbsp;оссию. В
                        Валдае бывали Александр Николаевич �&nbsp;адищев, Александр Сергеевич Пушкин, Николай Алексеевич
                        Некрасов, Владимир Александрович Серов, Гавриил �&nbsp;оманович Державин.
                      </p>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/0670787a274c1d553dd5b671c3295b46.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              瓦尔代�&nbsp;— удивительный край рек, озер и�&nbsp;лесов. На�&nbsp;территории
                              национального природного парка «瓦尔代» находится 70 озер, 20 рек, редкие
                              представители флоры и�&nbsp;фауны, около 500 памятников археологии, истории, архитектуры.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/25ba9ee1d07b97d6c34d7f839f9d4d45.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              С�&nbsp;давних пор визитной карточкой Валдая стали колокола. На�&nbsp;протяжении многих
                              веков они размеряли течение дней, возвещая время молитвы, труда и�&nbsp;отдыха.
                              В�&nbsp;Музее колоколов Валдая собрана богатейшая экспозиция колоколов
                              и�&nbsp;колокольчиков со�&nbsp;всего мира.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c2808f27d8667419ba1530e35ac4e591.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              瓦尔代 Иверский Святоозерский Богородицкий мужской монастырь, основанный патриархом
                              Никоном в�&nbsp;1653 году, привлекает паломников со�&nbsp;всего мира. Здесь хранится
                              святыня�&nbsp;— чудотворная Иверская икона Пресвятой Богородицы икона Иверской Божией
                              Матери.
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

          <input type="hidden" id="cityId" value="5">


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Валдае</div>
            <div class="block-ext-content">
              <p>
                瓦尔代 удивительным образом сочетает в себе красоту природы и богатство культурного наследия. Готовьтесь
                к ярким впечатлениям.
              </p>
              <h3> 瓦尔代 Иверский Святоозёрский Богородицкий мужской монастырь</h3>
              <p>
                主页 достопримечательность и визитная карточка Валдая. Монастырь был основан Святейшим Патриархом
                Никоном на одном из островов 瓦尔代ского озера по образцу Иверского монастыря на Афоне. Первыми
                насельниками обители на Валдае были монахи Оршанского Кутейнинского монастыря (Белоруссия), привезшие с
                собой типографии.
              </p>
              <p>
                Существует легенда, что во время посещения монастыря Никоном в водоеме был затоплен крест, 瓦尔代ское
                озеро объявлено святым, а к названию монастыря прибавилось определение Святоозерский.
              </p>
              <p>
                Монастырь открыт для посещения туристов и паломников круглый год. Обязательно нужно посетить собор
                Иверской иконы Богоматери, который является образцом старинного русского зодчества.
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://valdaypark.ru/bvt/">БОЛЬШАЯ 瓦尔代СКАЯ
                  Т�&nbsp;ОПА</a><!--/noindex-->
              </h3>
              <p>
                Большая 瓦尔代ская тропа – это проект в сфере экотуризма, уже получивший большую популярность у жителей
                �&nbsp;оссии и иностранных гостей. Путешествие по маршрутам Большой 瓦尔代ской тропы – это полезный и
                активный отдых для всей семьи, а также уникальный образовательный процесс, позволяющий ознакомиться с
                удивительной природой 瓦尔代ского национального парка и прилегающей к нему территории.
              </p>
              <p>
                Маршруты имеют чёткую маркировку и навигацию, оборудованы километровыми столбами, указателями,
                информационными стендами, картами и схемами. Между участками маршрутов созданы стоянки для привала.
              </p>
              <p>
                Проект «Большая 瓦尔代ская тропа» согласован с экологами и региональными спасателями, безопасен при
                соблюдении всех инструкций при посещении объекта. В рамках проекта созданы различные радиальные и
                кольцевые маршрутов разной направленности (водные, пешие, вело, внедорожные и т.д.) и продолжительности
                – до 60 км на территории 瓦尔代ского и 杰缅斯克ого районов.
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://novgorodmuseum.ru/muzej-zapovednik/valdaj.html">МУЗЕЙ
                  КОЛОКОЛОВ</a><!--/noindex-->
              </h3>
              <p>
                Музей расположен в архитектурном памятнике XVIII столетия — путевой дворцовой церкви во имя
                Великомученицы Святой Екатерины, построенной по проекту Н. А. Львова для императрицы Екатерины II.
              </p>
              <p>
                Экспозиция музей многообразна. Среди уникальных экспонатов – древнекитайский колокольчик XVI до н.э.,
                итальянский кампан XII в., русский колокольчик XVI в., буддийский ветровой колокольчик XVII в. Жемчужина
                коллекции – 瓦尔代 ямской колокольчик XIX в., аналогов которому нет в �&nbsp;оссии.
              </p>
              <p>
                В музее вам расскажут,�&nbsp; почему у русских колокольчиков малиновый звон, покажут звонарные приёмы и
                дадут вам возможность попробовать себя в колокольном искусстве.
              </p>
              <h3>МУЗЕЙНЫЙ КОЛОКОЛЬНЫЙ ЦЕНТ�&nbsp;</h3>
              <p>
                Это единственный в �&nbsp;оссии музей, в котором собраны колокола буквально со всего мира, отражены их
                формы с III века до нашей эры до Средневековья и современных сувенирных колокольчиков.�&nbsp;
              </p>
              <p>
                Музей интерактивный. Здесь можно запрячь виртуальную тройку или отлить виртуальный колокол. Особый
                интерес представляет интерактивная масштабная модель Петропавловского собора Санкт-Петербурга. В этой
                действующей модели можно рассмотреть все три яруса колокольни и услышать звон разных типов колоколов —
                карильонных, часовых, церковных.
              </p>
              <h3>МУЗЕЙ УЕЗДНОГО ГО�&nbsp;ОДА</h3>
              <p>
                Здесь вы сможете побывать в настоящем провинциальном городе прошлых столетий, посмотреть, как выглядел
                небольшой город между двух столиц. В музее представлены мемориальные вещи из земства и вольного
                пожарного общества, театра и аптеки, школ города. Сохранил музей память и о ремесленных людях —
                каменщиках, плотниках, кузнецах, бараночницах, мыловарах и, конечно, колокололитейщиках.
              </p>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=5"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">7</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=5"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">12</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=5"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">9</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/vystavki/?TOWN=5"
                style="background-image:url(images/8ebdb49d07c61b2d8032b7331dd4fa72.JPG); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">10</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Выставки</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/detskiy-otdykh/?TOWN=5"
                style="background-image:url(images/c41e34c1be106f536c977d72955246a5.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Детский отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/aktivnyy-otdykh/?TOWN=5"
                style="background-image:url(images/9b7749d95eb1c4c1b1bf1b402a106ce7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Активный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=5"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/gastronomicheskiy-turizm/?TOWN=5"
                style="background-image:url(images/27f2b205bc6e09ebef9cb8240a72c2c3.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Гастрономический туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=5"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=5"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/okhota-i-rybalka/?TOWN=5"
                style="background-image:url(images/f8e1c1c8acb67c71173a62460c2aaaa6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Охота и рыбалка</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/plyazhnyy-otdykh/?TOWN=5"
                style="background-image:url(images/e0f86a9834bc1b429bd31bdf5fb3da62.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Пляжный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priklyucheniya/?TOWN=5"
                style="background-image:url(images/b5a17bf4393a47e4fee3f2dd9ecdea01.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Приключения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=5"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=5"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/muraly/?TOWN=5"
                style="background-image:url(images/ca86e8ea8fee00488b24b90be115e443.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Муралы</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=5"
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
            <div class="h2" style="margin-top: 0;">Маршруты по Валдаю</div>
            <div class="block-ext-content">
              <p>
                Несмотря на то, что город 瓦尔代 очень компактный, но интересных маршрутов предостаточно. И что удобно –
                в один день вы сможете посмотреть сразу несколько интересных локаций.
              </p>
              <h3>Набережная «Поляна сказок»</h3>
              <p>
                Совсем недавно набережную города 瓦尔代 привели в порядок и организовали там современную и комфортную
                зону отдыха для горожан и туристов. Здесь установлена сцена, современное игровое оборудование для детей,
                спортивные тренажеры, обустроены пешеходные дорожки. Предусмотрены и многочисленные места для
                комфортного отдыха, реконструирован пирс.
              </p>
              <p>
                С набережной открывается вид на Иверский монастырь и 瓦尔代ское озеро.�&nbsp;
              </p>
              <h3>Эйфелева башня в Валдае</h3>
              <p>
                Эта необычная достопримечательность появилась в Валдае в 2018 году. Уменьшенная копия известной на весь
                мир французской достопримечательности высотой почти 8 метров стоит в Соловьёвском парке. Композиция
                выкрашена в цвета российского флага, сверху её украшает герб �&nbsp;оссии – двуглавый орёл. Подарил
                памятнику меценат, не захотевший раскрывать своё имя.
              </p>
              <p>
                Теперь Эйфелева башня в Валдае – излюбленный маршрут туристов и горожан для селфи.
              </p>
              <h3>Верстовой столб «Шаверма-шаурма»</h3>
              <p>
                Недалеко от города 瓦尔代, на 368 км стоит указатель «шаверма-шаурма», который символизирует собой
                середину пути между городами Санкт-Петербург (шаверма) и Москва (шаурма).
              </p>
              <p>
                Также, в Валдае есть знак, указывающий, в каком направлении находится бордюр, а в каком поребрик. А на
                дорогах общего пользования стоят знаки, предупреждающие водителей о том, что дорогу могут переходить
                утки с утятами.
              </p>
              <h3>�&nbsp;азвлекательно-познавательная тропа «Следопыт»</h3>
              <p>
                Маршрут позволяет проводить разнообразные тематические занятия с детьми дошкольного и младшего школьного
                возраста в любое время года. Тропа расположена на территории Визит-центра НП «瓦尔代», благодаря
                чему возможно совмещение занятий с посещением тематических выставок и экспозиций в Визит-центре.
              </p>
              <h3>Экологические тропы</h3>
              <p>
                Экотропы расположены на территории 瓦尔代ского национального парка. Они будут интересны как детям, так и
                взрослым, поскольку основными её темами является животный и растительный мир парка.
              </p>
              <p>
                Самый интересный и продолжительный маршрут –
                <!--noindex--><a rel="nofollow" href="http://valdaypark.ru/bvt/">«Большая 瓦尔代ская
                  тропа»</a><!--/noindex-->. Здесь можно увидеть всё разнообразие 瓦尔代ской природы, красивые пейзажи,
                местные деревушки.
              </p>
              <p>
                Время действия маршрутов: Май — октябрь
              </p>
              <h3>Пешеходная экскурсия по городу 瓦尔代</h3>
              <p>
                瓦尔代 – старинный провинциальный город, имеющий богатую историю. Прогулка по центральным улицам дает
                возможность окунуться в прошлое уездного городка, хотя бы немного почувствовать себя его жителем, а не
                просто гостем. 瓦尔代 – это древний тракт, соединявший Москву с Петербургом, это быстрые тройки, с
                瓦尔代скими бубенцами под дугой, 瓦尔代ские баранки и многое, многое другое.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/ulitsy-goroda-rasskazyvayut-/">
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
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/ulitsy-goroda-rasskazyvayut-/">
                      <div class="h3"><span>Пешеходная экскурсия «Улицы города рассказывают…»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1,5 – 2 часа</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a
                  href="/routes/tematicheskaya-ekspozitsiya-puteshestvie-ot-seligera-do-borovno-s-elementami-interaktiva/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">150�&nbsp;<span>р.</span></div>
                        <div class="object-info-ttl">стоимость</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Музеи</li>
                    </ul>
                    <a
                      href="/routes/tematicheskaya-ekspozitsiya-puteshestvie-ot-seligera-do-borovno-s-elementami-interaktiva/">
                      <div class="h3"><span>Тематическая экспозиция «Путешествие от Селигера до Боровно» с элементами
                          интерактива</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">1 час</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/valdayskie-rodniki/">
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
                      <li>Необычные места</li>
                    </ul>
                    <a href="/routes/valdayskie-rodniki/">
                      <div class="h3"><span>Туристский маршрут «瓦尔代ские родники»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-time"></div>
                      <div class="text">2 часа</div>
                    </div>
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">28 км</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Валдае</div>
            <div class="block-ext-content">
              <h3><!--noindex--><a rel="nofollow" href="https://www.valday.center/">«Место. 瓦尔代»</a><!--/noindex-->
              </h3>
              <p>
                Молодёжный центр «Место. 瓦尔代» — это уникальное место для детей и молодёжи в городе 瓦尔代. Центр
                включает в себя клубные занятия по гуманитарным, техническим и художественным направлениям, уютную
                библиотеку с большим выбором художественной, исторической и специальной литературы. Здесь любой может
                найти занятия по вкусу и посещать их совершенно бесплатно.
              </p>
              <h3>Площадь Свободы и Троицкий собор</h3>
              <p>
                Площадь Свободы – это центральная площадь города 瓦尔代. Она расположена рядом с 瓦尔代ским озером,
                между улицами Гагарина и Луначарского. Площадь имеет вытянутую форму — вдоль нее протянулись
                туристические лавки, магазины и кафе. В западной части площади, на стене жилого дома размещена
                масштабная карта всего Валдая с отмеченными на ней достопримечательностями.
              </p>
              <p>
                На площади Свободы расположен Троицкий собор, который был построен�&nbsp; в XVII веке на месте
                сгоревшего деревянного храма. Свой современный облик, как и окрестный архитектурный ансамбль, собор
                приобрел в XVIII–XIX веках, так как ранее неоднократно страдал от пожаров. В советское время внутри
                собора размещался Дом Красной Армии. Храм вновь возродили лишь в 2001 году.
              </p>
              <p>
                �&nbsp;ядом с храмом находится мемориальное воинское захоронение.�&nbsp;
              </p>
              <h3>Улица Народная</h3>
              <p>
                На улица Народной (историческое название — Посадская). сохранились исторические постройки — это бывшие
                здания торговых лавок, принадлежащие купцам. �&nbsp;аньше здесь находились чайные дома, пекли известные
                瓦尔代ские баранки – самый ходовой сувенир путешественников прошлых веков.�&nbsp; Обратите внимание на
                красный кирпичный дом на четной стороне улицы. 瓦尔代ские баранки снискали свою славу, так как долго не
                черствели и были весьма вкусны. Поэтому, их часто разбирали на сувениры и развозили по всей
                �&nbsp;оссии. Пекли баранки из специальной муки, привезённой из Ярославской и Тверской области.
              </p>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Валдае</div>
            <div class="block-ext-content">
              <h3>�&nbsp;ЕСТО�&nbsp;АН "CRYSTAL" К�&nbsp;ИСТАЛЛ</h3>
              <p>
                Уютный, стильный, новый ресторан (реновации 2020 г.), расположенный на берегу 瓦尔代ского озера.
              </p>
              <h3>КОМПЛЕКС «ПОДВО�&nbsp;ЬЕ»</h3>
              <p>
                Этот придорожный комплекс стал излюбленным местом автопутешественников.
              </p>
              <p>
                В меню входят большой ассортимент домашних блюд и комплексные обеды. �&nbsp;асполагает небольшим
                банкетным залом, душем, прачечной и магазином. Есть большая удобная парковка для автобусов, грузовых и
                легковых авто.
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kompleks-podvore/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/e85bd44c1b4777e6f5efb2ba1124d25e.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/restaurants/kompleks-podvore/">
                      <div class="h3"><span>Комплекс «Подворье»</span></div>
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
                <a href="/restaurants/restoran-crystals-kristall/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b85d6c2a684dc81e704a2d2f6546c69e.jpeg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">-5%</div>
                        <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/restaurants/restoran-crystals-kristall/">
                      <div class="h3"><span>�&nbsp;есторан "Crystal" Кристалл</span></div>
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
                <a href="/restaurants/eko-klub-valday/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/cd03fdbbb4ec5410e8bf9d6fc1f00253.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/restaurants/eko-klub-valday/">
                      <div class="h3"><span>�&nbsp;есторан «Эко-клуб 瓦尔代»</span></div>
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
            <div class="h2" style="margin-top: 0;">Где остановиться в Валдае</div>
            <div class="block-ext-content">
              <h3><!--noindex--><a rel="nofollow" href="https://valday-hotel.ru/">ГОСТИНИЦА «瓦尔代 ЭКО
                  КЛУБ»</a><!--/noindex--></h3>
              <p>
                Курортный отель в живописной местности национального заповедника «瓦尔代» на берегу озера Борое.
              </p>
              <h3><!--noindex--><a rel="nofollow"
                  href="https://valdaypark.ru/%D0%B3%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B8%D1%86%D0%B0/">ГОСТИНИЦА
                  ВИЗИТ-ЦЕНТ�&nbsp;А НАЦИОНАЛЬНОГО ПА�&nbsp;КА «瓦尔代»</a><!--/noindex--></h3>
              <p>
                Отель эконом-класса в центре Валдая в 100 метрах от береговой линии.
              </p>
              <h3><!--noindex--><a rel="nofollow" href="https://www.amaks-hotels.ru/">«瓦尔代СКИЕ
                  ЗО�&nbsp;И»</a><!--/noindex--></h3>
              <p>
                Гостиничный комплекс "瓦尔代ские зори" расположен на берегу 瓦尔代ского озера в 15-ти минутах ходьбы от
                центральной части города. Удаленность от ж/д вокзала 5 км. По "Карте гостя" скидка 20% на размещение!
              </p>
              <h3>ДОМ ОТДЫХА «瓦尔代»</h3>
              <p>
                Дом отдыха «瓦尔代» расположен в экологически чистом месте на берегу озера Ужин.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/gostinitsa-vizit-tsentra-natsionalnogo-parka-valdayskiy/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/0720fc7fe84cd645f9574b8886733862.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-vizit-tsentra-natsionalnogo-parka-valdayskiy/">
                      <div class="h3"><span>Гостиница визит-центра Национального парка «瓦尔代»</span></div>
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
                <a href="/hotels/gostinitsa-valday-eko-klub/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/73fa2bd0305662c38090a1388258f866.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-valday-eko-klub/">
                      <div class="h3"><span>Гостиница «瓦尔代 Эко Клуб»</span></div>
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
                <a href="/hotels/amaks-valdayskie-zori/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b20bbf59681911dbb038f5911b26db6c.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">瓦尔代</a></li>
                    </ul>
                    <a href="/hotels/amaks-valdayskie-zori/">
                      <div class="h3"><span>АМАКС "瓦尔代ские зори"</span></div>
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
            <div class="h2" style="margin-top: 0;">Что привезти из Валдая</div>
            <div class="block-ext-content">
              <h3><a href="https://novgorod.travel/bring/valdayskie-kolokolchiki/">瓦尔代СКИЕ КОЛОКОЛЬЧИКИ</a></h3>
              <p>
                Легенда связывает начало колокольного производства на Валдае с разбившимся здесь в конце XV века вечевым
                новгородском колоколом. Как гласит придание, из его осколков и родились знаменитые ямщицкие 瓦尔代ские
                колокольчики.
              </p>
              <p>
                瓦尔代 колокольчик – сувенир, который навсегда сохранит память о Новгородской земле. Его с гордостью
                можно преподнести кому-то в качестве презента или купить для собственной радости. Купить можно в любой
                туристической лавке или в музее.
              </p>
              <h3><a href="https://novgorod.travel/gastronomic/valdayskie-baranki/">瓦尔代СКИЕ БА�&nbsp;АНКИ</a></h3>
              <p>
                瓦尔代ские баранки снискали свою славу, так как долго не черствели и были весьма вкусны. Поэтому, их
                часто разбирали на сувениры и развозили по всей �&nbsp;оссии. Пекли баранки из специальной муки,
                привезённой из Ярославской и Тверской области.
              </p>
              <p>
                Вот и сегодня баранки – популярный гастрономический сувенир из Новгородской области. Такому подарку
                очень обрадуются дети - это полезное и вкусное лакомство придётся по вкусу всем.
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/valdayskie-kolokolchiki/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/8b726fc339901225ba19f5ea222231b1.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/valdayskie-kolokolchiki/">
                    <div class="h3">瓦尔代ские колокольчики</div>
                    <p>瓦尔代 колокольчик – сувенир, который навсегда сохранит память о Новгородской земле.</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>