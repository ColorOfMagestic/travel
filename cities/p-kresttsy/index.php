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
                            center: [58.2452, 32.51648],
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
                          <td class="val">克雷斯特西周围地区</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">7 023 人 </td>
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
                            <img src="images/240f440ab7882a3b8d2e10ef8b6e8be4.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              克雷斯特西周围地区 мниципальный округ расположен в центральной части Новгородской области.
                              Административный центр — р.п. 克雷斯特西 находится на расстоянии 86 км до города Великий
                              Новгород. Территория охватывает 280 тысяч кв. км. География округа неоднородна, что
                              обусловлено его срединным положением между Приильменской низменностью и 瓦尔代ской
                              возвышенностью. Западная часть более равнинная и низкая, восточная — выше, 霍尔姆истее,
                              богаче озерами. Здесь рождаются многие реки, в т. ч. самая большая — Холова. Пересекая
                              почти весь район, впадая в Мсту, она позволяла сплавлять лес, гнать барки в Новгород, а
                              оттуда по Волхову — в Петербург.
                            </p>
                            <p>
                              Первое упоминание о Крестцах относится к 1393 году. В Новгородской второй (Архивской)
                              летописи написано «В лето 1393 Поставиша церковь святую Богородицу на Хрестьцах». Позднее
                              поселение называлось погост Хрестцовский, затем — слобода 克雷斯特西周围地区 Ям.�&nbsp;
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c833f7cf2259ac79b9086c7386fe180e.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Указом императрицы Екатерины II от 24 августа (4 сентября) 1776 года 村庄 克雷斯特西周围地区 ям
                              было преобразовано в город 克雷斯特西, ставший уездным центром новообразованного Крестецкого
                              уезда Новгородского наместничества. В 1778 году был составлен генеральный план застройки
                              города, в соответствии с которым построены Екатерининский собор и путевой дворец
                              императрицы.<br>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/71d3cc8308294a177803c0345209acf1.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              16 августа 1781 года был утверждён герб г. 克雷斯特西, что нашло своё отражение в своде
                              законов �&nbsp;оссийской империи. Герб имел форму щита, верхняя часть которого повторяла
                              герб Новгорода, а нижняя изображала две пересекающиеся большие дороги в зелёном поле. В
                              таком виде изображение герба дошло до наших дней. По своей сути герб раскрывает
                              происхождение названия посёлка.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/d0c8b36e2b46a3b322d445f6b9e84794.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              В 1796 году 克雷斯特西 как уездный город был упразднён и переведён в заштатный. Часть земель
                              Крестецкого уезда отошла к Новгородскому, а часть к 瓦尔代скому уездам. 24 апреля 1802
                              года 克雷斯特西 были восстановлены в своих правах, но земли уезду возвращены не были. При
                              образовании 杰缅斯克ого уезда в 1824 году часть Крестецких селений отошла к нему. Вместе с
                              землями отошли и небольшие промышленные предприятия, которые находились на территории
                              уезда.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p>
                        �&nbsp;В 1851 году была построена железная дорога (Николаевская) между Санкт — Петербургом и
                        Москвой. Это было самое большое строительство, когда-либо проводившееся в �&nbsp;оссии.
                        Николаевская железная дорога, прошедшая через 克雷斯特西周围地区 уезд, способствовала тому, что посад
                        小维舍拉 и станция 奥库洛夫卡, получив стимул для развития промышленности, обогнали в своём
                        росте уездный город и впоследствии сами стали районными центрами.
                      </p>
                      <p>
                        �&nbsp;В послевоенное время посёлок постепенно рос и развивался. Промышленность была
                        представлена лесоперерабатывающими, мебельными предприятиями. На территории Крестецкого МО
                        располагался опытный полигон центрального научно — исследовательского института механизации и
                        энергетики лесной промышленности «克雷斯特西周围地区 леспромхоз». Здесь проходили испытания новейших
                        образцов лесозаготовительной техники. «克雷斯特西周围地区 леспромхоз» был школой для лесозаготовителей
                        западных, северо — западных районов �&nbsp;СФС�&nbsp;, Карелии и других мест, близких по климату
                        и почвам. На фабричной основе развивался промысел «Крестецкая строчка».
                      </p>
                      <p>
                      </p>
                      <p>
                        На сегодняшний день ведущую роль в экономике играет сельское хозяйство, которое представлено
                        двумя крупными Агрохолдингами ООО «Белгранкорм-大诺夫哥罗德» и АО «Свинокомплекс»
                        Устьволмский». Основными предприятиями Крестецкого МО являются: ООО «В �&nbsp;ождество» фабрика
                        по производству и обработке прочих стеклянных изделий, включая технические изделия из стекла,
                        ООО «Крестецкая строчка» фабрика по производству изделий народных художественных промыслов, ООО
                        «克雷斯特西周围地区 хлебозавод» предприятие по производству хлеба и мучных кондитерских изделий, тортов
                        и пирожных недлительного хранения, Филиал «Невское УПХГ» предприятие обеспечивает закачку газа в
                        пористые пласты, его хранение и отбор с целью регулирования сезонной неравномерности
                        газопотребления и обеспечения надёжного режима работы единой системы газоснабжения и
                        Северо-Западного региона в целом, ООО «Ягода» предприятие по переработке и консервированию
                        фруктов и овощей, ООО «Биопродмаш» предприятие по производству пищевой клетчатки - это
                        технологический ингредиент для пищевой промышленности.
                      </p>
                      <br>
                      <p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="34">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=34"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">5</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=34"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=34"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/aktivnyy-otdykh/?TOWN=34"
                style="background-image:url(images/9b7749d95eb1c4c1b1bf1b402a106ce7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Активный отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=34"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=34"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=34"
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
            <div class="h2" style="margin-top: 0;">Маршруты по Крестцам</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/put-k-velimiru/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/f30b7589eb96b7eebfcfffe9aee43e84.jpg);">
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
                    <a href="/routes/put-k-velimiru/">
                      <div class="h3"><span>«Путь к Велимиру»</span></div>
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
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/starovercheskoe-podvore/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/2935f7236f469fdd7db2d965d60da3bb.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Музеи</li>
                    </ul>
                    <a href="/routes/starovercheskoe-podvore/">
                      <div class="h3"><span>«Староверческое подворье»</span></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/pamyat-zhiva/">
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
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/pamyat-zhiva/">
                      <div class="h3"><span>«Память жива»</span></div>
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
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Крестцах</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="6">
            <div class="grid-three-in-row">
              <a class="event-tmb" href="/events/xxxv-khlebnikovskie-chteniya/" style="width: 100%;">
                <div class="event-tmb-inner clearfix">
                  <div class="event-tmb-pic">
                  </div>
                  <div class="event-tmb-descr">
                    <div class="event-tmb-date"><span>30 </span> июн</div>
                    <div class="h3"><span>XXXV Хлебниковские чтения</span></div>
                    <div class="event-tmb-info">
                      <div class="event-info-item">
                        <div class="ico ico-event-location"></div>
                        <div class="text">克雷斯特西周围地区 район, д. �&nbsp;учьи, ул. Лесная, д. 2 МБУК "Крестецкая
                          межпоселенческая библиотека" музей В.Хлебникова</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Крестцах</div>
            <div class="block-ext-content">
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-voyazh/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/f127a5d559f364d654e68345530fe84b.jpeg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/restaurants/kafe-voyazh/">
                      <div class="h3"><span>Кафе «Вояж»</span></div>
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
                <a href="/restaurants/kafe-laguna/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/8bafbc46bb1d6d017dc2655999aba9b7.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/restaurants/kafe-laguna/">
                      <div class="h3"><span>Кафе «Лагуна»</span></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-almaz/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/da5ae2e7e56725b5c77c483772ea08f9.jpg);">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/restaurants/kafe-almaz/">
                      <div class="h3"><span>Кафе "Алмаз"</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Крестцах</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/usadba-rodnoe/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/1fb859160c50ffbec9ddbc840b7f56bc.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/hotels/usadba-rodnoe/">
                      <div class="h3"><span>Усадьба «�&nbsp;одное»</span></div>
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
                <a href="/hotels/gostinitsa-lesnaya/">
                  <div class="object-tmb-pic" style="background-image: url();"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/hotels/gostinitsa-lesnaya/">
                      <div class="h3"><span>Гостиница "Лесная"</span></div>
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
                <a href="/hotels/motel-bumer/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/76e2b785300d5d94ce30400fa178c7ff.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">克雷斯特西</a></li>
                    </ul>
                    <a href="/hotels/motel-bumer/">
                      <div class="h3"><span>Мотель "Бумер"</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что привезти из Крестец</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/krestetskaya-strochka/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/46f4a590b6e9f9faf6237c79897d2e08.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/krestetskaya-strochka/">
                    <div class="h3">Крестецкая строчка</div>
                    <p>Современные путешественники могут привезти в подарок близким или себе домой качественную одежду,
                      с элементами крестецкой строчки, домашний текстиль, наборы для сервировки стола, крестильные
                      наборы или сделать заказ по индивидуальному проекту</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>