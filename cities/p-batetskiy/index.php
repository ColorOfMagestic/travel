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
                            center: [58.6461, 30.30268],
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
                          <td class="val">Батецкий</td>
                        </tr>
                        <tr>
                          <td class="name">Население:</td>
                          <td class="val">5051 чел </td>
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
                      История края – одна из самых героических. По преданиям «старины глубокой» именно под легендарной
                      батецкой Шум-горой – одним из крупнейших курганов Северо-Западной Европы похоронен «в золотом
                      гробу и с ним 40 бочонков серебра» князь �&nbsp;юрик, варяжский воевода, ставший основателем
                      �&nbsp;усского государства.�&nbsp;<br>
                      Батецкий край связан с именами княгини Ольги (ходила по реке Луга в 947 году, определяла места
                      сбора оброков и дани), князей: Ярослава Мудрого, Александра Невского, родового поместья древнего
                      дворянского рода Муравьевых и многих других известных людей.<br>
                      Земли, входящие в нынешний Батецкий район, издавна принадлежали Новгороду и составляли часть
                      Водской пятины. В этих книгах упоминаются селения: Батецко, Чёрное, Вольная Горка, Заосье,
                      Скачели, Косицкое, �&nbsp;усыня, Ивня, �&nbsp;аджа и другие. В течение последующих столетий в
                      �&nbsp;оссии проводилось несколько реформ в административном делении государства. Земли Батецкого
                      района частью входили в состав Новгородского уезда, но большей частью относились к Лужскому уезду
                      Петербургской губернии.<br>
                      Как свидетельствуют Новгородские писцовые книги 1498-1500 гг., нынешние Батецкие земли
                      располагались на второй половине «Водской пятины» – «Полужской». И именно Полужье (местность вдоль
                      берегов реки Луга, – особенно её северо-запад) является наиболее живописной частью
                      района.�&nbsp;<br>
                      На протяжении многих километров, встречаются впечатляющие памятники древности – курганы, сопки,
                      средневековые городища и селища. Вдоль этих берегов находились средневековые поселения, упоминания
                      о которых сохранились в исторических летописях (свидетельствующих о пребывании здесь княгини Ольги
                      в период сбора дани).�&nbsp; </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" id="cityId" value="31">




          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=31"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=31"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">6</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=31"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/detskiy-otdykh/?TOWN=31"
                style="background-image:url(images/c41e34c1be106f536c977d72955246a5.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Детский отдых</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=31"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=31"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">4</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Маршруты по Батецкому</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/turisticheskiy-velopokhod-nam-eti-dorogi-zabyvat-nelzya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/e052bfc9b87adf5864225deee2a022ad.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">200 рублей за человека�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/turisticheskiy-velopokhod-nam-eti-dorogi-zabyvat-nelzya/">
                      <div class="h3"><span>Туристический велопоход «Нам эти дороги забывать нельзя»</span></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/turisticheskiy-peshekhodnyy-pokhod-luzhskiy-rubezh-opolchentsy-/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/8826f62e0a4d163b965e3d2961f14b7c.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">500�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/turisticheskiy-peshekhodnyy-pokhod-luzhskiy-rubezh-opolchentsy-/">
                      <div class="h3"><span>Лужский рубеж. Ополченцы.</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-object-distance"></div>
                      <div class="text">1 день</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/ot-bessmertnogo-polka-k-poklonnomu-turizmu/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">400 рублей�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/ot-bessmertnogo-polka-k-poklonnomu-turizmu/">
                      <div class="h3"><span>«От бессмертного полка к поклонному туризму»</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>








          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Батецком</div>
            <div class="block-ext-content">
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/glemping-pole-beskonechnosti/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/e281fa23b03cc4df4e7abb4508dd1574.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Батецкий</a></li>
                    </ul>
                    <a href="/hotels/glemping-pole-beskonechnosti/">
                      <div class="h3"><span>Глэмпинг "Поле Бесконечности"</span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>