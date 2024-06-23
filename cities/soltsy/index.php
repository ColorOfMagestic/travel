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
                            center: [58.12387, 30.32377],
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
                          <td class="val">索利齐周围</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">8 995 人 </td>
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
                            <img src="images/70d7cc80ceb9babdb0de79eb27013ab2.JPG">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Городу 索利齐 уже 628 лет: первое упоминание относится к�&nbsp;1390�&nbsp;г.
                              В�&nbsp;Новгородской летописи говорится: «В�&nbsp;лето 1390 ходили новгородцы
                              с�&nbsp;князем Семеном Ольгердовичем на�&nbsp;псковичей войной и�&nbsp;стали
                              в�&nbsp;Сольце…»» Ещё ранее, в�&nbsp;1239�&nbsp;г., одно из�&nbsp;<nobr>
                                поселений-крепостей</nobr> под названием Городок, что находится в�&nbsp;3�&nbsp;км
                              от�&nbsp;города, заложил князь Александр Невский для защиты новгородских земель
                              от�&nbsp;врагов.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/6de219a1f1b8a6d867fabe2ff77c7061.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Своим названием 索利齐 обязаны многочисленным солёным ключам, бьющим <nobr>из-под</nobr>
                              земли по�&nbsp;левому берегу Шелони. В�&nbsp;старину из�&nbsp;этих источников жители
                              выпаривали соль. Также издревле высоко ценились целебные свойства этих источников.
                              По�&nbsp;мере развития 索利齐 из�&nbsp;деревни в�&nbsp;村庄, потом в�&nbsp;местечко
                              вырастало и�&nbsp;его административное значение.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/7648cc933c15645d1d9cede0742a3a0a.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              10�&nbsp;марта 1781�&nbsp;г. Государыня Екатерина II�&nbsp;издает указ: «Всемилостивейше
                              повелеваем бывшую артиллерийского ведомства слободу 索利齐, лежащую во�&nbsp;Псковском
                              наместничестве по�&nbsp;пути от�&nbsp;города Порхова к�&nbsp;Новогороду на�&nbsp;реке
                              Шелоне учредить посадом, позволяяиметь ему свою �&nbsp;атушу… и�&nbsp;присвояя жителям
                              сего нового посада все те�&nbsp;права, которые мещанству в�&nbsp;подобных посадах
                              обитающему по�&nbsp;торгам, промыслам и�&nbsp;упражнениям каждаго на�&nbsp;основании
                              узаконений наших свойственны быть могут» (Полное собрание Законов �&nbsp;оссийской
                              империи, том XXI).
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/2ea6fd309d6ce1027205f8cd7c6b5e8e.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              В�&nbsp;Сольцах сложились многочисленные династии купцов�&nbsp;— Ардаматских, Богровых,
                              Ванюковых, Красиковых, Боговских, Юлиных, Дубецских, которые много средств жертвовали
                              на�&nbsp;благотворительные цели (церковь, школы, богадельню). Уклад жизни посада, его
                              историческое развитие отразились и�&nbsp;на�&nbsp;его культуре. Мощеные улицы, каменные
                              дома, большие мануфактурные магазины, маленькие лавки и�&nbsp;ремесленные
                              мастерские�&nbsp;— таков внешний вид города на�&nbsp;рубеже XIX�&nbsp;— XX�&nbsp;веков.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                        В�&nbsp;посаде процветали народные промыслы: прядение, ткачество, рукоделие, кузнечное дело.
                        Были широко известны Ильинские ярмарки, проходившие в�&nbsp;посаде с�&nbsp;20 по�&nbsp;28 июля;
                        оборот каждой был по�&nbsp;90–100 тыс. золотых рублей. После начала Первой Мировой войны,
                        в�&nbsp;1915�&nbsp;г. город получил статус <nobr>города-курорта</nobr>, так как в�&nbsp;одной
                        из�&nbsp;своих усадеб купеческая семья Боговских открыла санаторий для раненых офицеров.
                        Позднее, в�&nbsp;конце <nobr>20-х</nobr> гг., на�&nbsp;базе санатория был организован
                        бальнеологических и�&nbsp;грязевой курорт, располагающий тремя источниками минеральной воды,
                        относящейся к�&nbsp;группе северокавказских нарзанов. Воды было достаточно не�&nbsp;только для
                        местных нужд, но�&nbsp;и�&nbsp;для разлива в�&nbsp;специальные бутылочки. Этим занимался завод
                        минеральных вод, открытый неподалеку. В�&nbsp;то�&nbsp;время город был так�&nbsp;же известен как
                        центр торговли льном.
                      </p>
                      <p>
                        В�&nbsp;1927�&nbsp;г. по�&nbsp;новому административному делению 索利齐 становятся
                        городом�&nbsp;— центром Солецкого района, который вместе с�&nbsp;Новгородскими, Псковскими
                        и�&nbsp;др. землями вошли во�&nbsp;вновь созданный западный край. В�&nbsp;1930–44
                        гг.�&nbsp;索利齐 находились в�&nbsp;составе Ленинградской области. С�&nbsp;1944�&nbsp;г.
                        索利齐�&nbsp;— районный центр Новгородской области.
                      </p>
                      <p>
                        Во�&nbsp;время Великой Отечественной войны с�&nbsp;1941 по�&nbsp;1944 год город находился
                        в�&nbsp;фашистской оккупации. Многие здания, в�&nbsp;том числе курорт, были разрушены или
                        сожжены. В�&nbsp;середине июля 1941�&nbsp;г. под Сольцами советские войска нанесли один
                        из�&nbsp;первых успешных контрударов и�&nbsp;задержали наступление немецких войск
                        на�&nbsp;Ленинград.
                      </p>
                      <p>
                        �&nbsp;ешением коллегии Министерства культуры �&nbsp;оссийской Федерации г.�&nbsp;索利齐 отнесен
                        к�&nbsp;числу исторических поселений �&nbsp;оссии. Сегодня 索利齐�&nbsp;— районный центр
                        с�&nbsp;人口м около 9 тыс. 人овек.
                      </p>
                      <p>
                        Город уникален сохранившейся до�&nbsp;сих пор исторической застройкой с�&nbsp;купеческими
                        особняками и�&nbsp;лавками, культовыми зданиями: старообрядческой молельни, деревянной церкви
                        Покрова XVIII века, действующего Ильинского собора, построенного в�&nbsp;1824–1825 годах
                        в�&nbsp;стиле классицизма.
                      </p>
                      <p>
                        В�&nbsp;10�&nbsp;км от�&nbsp;Сольцов в�&nbsp;деревне Выбити находится родовое имение князей
                        Васильчиковых с�&nbsp;живописным парком и�&nbsp;многочисленными постройками (конец 18�&nbsp;—
                        начало 19 вв.). Имение�&nbsp;— родовая вотчина четырех поколений князей Васильчиковых. Илларион
                        Васильевич�&nbsp;— герой войны 1812 года, член Государственного Совета. Александр
                        Илларионович�&nbsp;— русский общественный деятель и�&nbsp;писатель, бывший секундантом
                        на�&nbsp;дуэли Лермонтова с�&nbsp;Мартыновым. Виктор Александрович�&nbsp;— военный
                        и�&nbsp;государственный деятель, генерал, герой Крымской войны. Борис Александрович�&nbsp;—
                        предводитель Новгородского губернского дворянства, министр землеустройства и�&nbsp;земледелия
                        в�&nbsp;кабинете Столыпина, член Государственного Совета.
                      </p>
                      <p>
                        Из�&nbsp;достопримечательностей окрестностей города также можно отметить бывшую усадьбу купцов
                        Ванюковых (19 в.) в�&nbsp;деревне Горки. В�&nbsp;селе Молочково�&nbsp;— церковь Успения (19 в.).
                        В�&nbsp;деревне Велебицы�&nbsp;— церковь Иоанна Богослова (<nobr>2-я</nobr> половина 19 в.).<br>
                        Природа Солецкого края притягивала к�&nbsp;себе многих талантливых людей. Здесь часто бывали
                        на�&nbsp;отдыхе писатели <nobr>М. М. Пришвин</nobr>, <nobr>В. Я. Шишков</nobr>, <nobr>И. С.
                          Соколов</nobr>-Микитов, художник <nobr>К. С. Петров</nobr>-Водкин, композиторы <nobr>П. И.
                          Чайковский</nobr>, <nobr>Т. Н. Хренников</nobr>, академик <nobr>А. П. Карпинский</nobr>.
                      </p>
                      <p>
                        Туристический бренд города 索利齐 «Мишка�&nbsp;— Варяжек»
                      </p>
                      <p>
                        <nobr>Сувенир-солонка</nobr> отражает историю возникновения города 索利齐 и�&nbsp;связан
                        с�&nbsp;образом торговца солью, варяга. Согласно толковому словарю <nobr>В. И. Даля</nobr> слово
                        «варяг» на�&nbsp;территории �&nbsp;оссии означало не�&nbsp;наёмного воина (норманна),
                        а�&nbsp;коробейника. На�&nbsp;далёких от�&nbsp;�&nbsp;уси землях, где торговля солью была делом
                        небезопасным, варягами назывались и�&nbsp;торговцы, и�&nbsp;охраняющие их�&nbsp;наёмные воины.
                        В�&nbsp;основе сувенира фигура медведя, его изображение есть на�&nbsp;гербе Великого Новгорода
                        и�&nbsp;города 索利齐.
                      </p>
                      <p>
                        Фигурка медведя, изготовлена из�&nbsp;красной глины и�&nbsp;красочно расписана, укреплена
                        на�&nbsp;небольшой площадке. На�&nbsp;ней нанесены полоски по�&nbsp;диагонали
                        к�&nbsp;направлению движения, создающие впечатление непрерывного движения солеваров�&nbsp;—
                        варягов, освоивших земли Южного Приильменья.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="7">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=7"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=7"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=7"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/vystavki/?TOWN=7"
                style="background-image:url(images/8ebdb49d07c61b2d8032b7331dd4fa72.JPG); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Выставки</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=7"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=7"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=7"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ozdorovitelnyy-turizm/?TOWN=7"
                style="background-image:url(images/7224cc4bdc821ceaf4f3ccbc649817f6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Оздоровительный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=7"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ulitsy/?TOWN=7"
                style="background-image:url(images/566121a5b07819c3b53498eeb2bbb6d7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Улицы</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Сольцам</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/tur-po-sledam-istorii/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/3161017b86c0b3e5995f8e03bce7b15e.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <a href="/routes/tur-po-sledam-istorii/">
                      <div class="h3"><span>Тур «По следам истории»</span></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/v-soletskiy-kray-za-zhivoy-i-myertvoy-vodoy/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/b85c17952af0bbe14131613a2e9c231a.jpg);">
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
                      <li>Культура</li>
                    </ul>
                    <a href="/routes/v-soletskiy-kray-za-zhivoy-i-myertvoy-vodoy/">
                      <div class="h3"><span>«В 索利齐周围 край за живой и мёртвой водой»</span></div>
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
                <a href="/routes/dorogami-pobedy/">
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
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/dorogami-pobedy/">
                      <div class="h3"><span>«Дорогами Победы»</span></div>
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
            <div class="h2" style="margin-top: 0;">Что привезти из Сольцов</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/glinyanye-igrushki/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/eff8df4713629e7aadf7bdbf61fb73e4.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/glinyanye-igrushki/">
                    <div class="h3">Глиняные игрушки</div>
                    <p>В старину за местными глиняными свистульками-петушками купцы специально приезжали в 索利齐.</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>