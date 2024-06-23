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
                            center: [57.99439, 31.36081],
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
                          <td class="val">旧鲁萨</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">29 019 人 </td>
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
                            <img src="images/063413cfb05d991b9fb65f8116ecb70f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              Впервые упоминание города Старая �&nbsp;усса обнаружено в летописи 1167 года. Но, как
                              считают исследователи, город, стоящий при слиянии рек Полисть и Порусья появился раньше.
                              Об этом говорит найденная в 1975 году на раскопках в Новгороде берестяная грамота. Вот что
                              там было написано: «На Бояне въ �&nbsp;оусе гр(и)вна, на Житоб(о)уде въ �&nbsp;оусе 13
                              коуне и гр(и)вна истине…». �&nbsp;оусе – это и есть �&nbsp;усса.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/34a877fdd353fdec8030bff465479067.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              В 1478 году вместе со всеми новгородскими землями �&nbsp;усса вошла в состав
                              �&nbsp;усского государства. В XVI веке город переименовали в Старую �&nbsp;уссу. В
                              середине XVI века по количеству жителей и числу дворов Старая �&nbsp;усса – 4-й город
                              государства, после Москвы, Пскова и Новгорода.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/760013a5334b33afcfb4ccaf2f690f1b.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В состав Новгородской губернии Старая �&nbsp;усса вошла в 1727 году. Екатерина II в 1781
                              году пожаловала Старой �&nbsp;уссе герб. Символом герба стало солевариение – то, чем
                              занимались рушане с древних времён.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/fef6fb7a050b5017ce3f312f3f094f8f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              Современная Старая �&nbsp;усса – это небольшой провинциальный город с богатой и интересной
                              историей, зелёными парками, памятниками архитектуры, храмами, уникальным бальнеогрязевым
                              курортом и музеями. С 2015 года Старая �&nbsp;усса – «Город воинской славы». В этом же
                              году город отметил своё 1000-летие.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a7fa495fa953929cf835883dab39201a.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              В январе 2019 года город Старая �&nbsp;усса подал заявку на включение его в состав
                              Ганзейского союза Нового времени.
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

          <input type="hidden" id="cityId" value="4">

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Видео по Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/V0Y9zrgpcgw?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""> <br>
                  </iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Что посмотреть в Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <p>
                Старая �&nbsp;усса удивительным образом сочетает в себе скромность, интеллигентность и очарование
                уездного города. И в то же время, зная историю и тот факт, что своим духовным местом Старую �&nbsp;уссу
                выбрал выдающийся русский писатель Фёдор Достоевский, осознаешь всё величие этого города.
              </p>
              <h3>Дом-музей Ф.М. Достоевского</h3>
              <p>
                Как считают исследователи творчества Достоевского, Старая �&nbsp;усса, - это единственный город, который
                Достоевский выбрал по собственному желанию. Все остальные города, в которых жил и творил выдающийся
                писатель, были для него случайными или по обстоятельствам. Хотя, и выбор Старой �&nbsp;уссы изначально
                был случайным, но в итоге этот город стал родным для писателя на 8 лет его жизни. После его смерти в
                Старой �&nbsp;уссе продолжила жить его семья.
              </p>
              <p>
                Именно здесь, в Старой �&nbsp;уссе он написал свои самые громкие романы: «Бесы», «Подросток», «Братья
                Карамазовы», Пушкинская речь, статьи для «Дневника писателя».
              </p>
              <h3>Водонапорная башня</h3>
              <p>
                У каждого города есть свой центр или сердце. В Строй �&nbsp;уссе таким местом стала водонапорная башня
                на Соборной площади. Башня была построена в начале XX века. В военные годы был разрушен верхний, самый
                красивый ярус башни, а в процессе реставрации его компенсировали простой деревянной надстройкой с
                конусообразной кровлей. Сейчас внутри башни открыт музей современный музей.
              </p>
              <p>
                Подъем на смотровую площадку разрешен небольшими группами по 5-6 人овек. На первом этаже расположен
                туристско–информационный центр «Башня» с сувенирами и информацией о городе и достопримечательностях. На
                втором и третьем этажах – экспозиции и выставки старорусских художников и мастеров. На четвертом –
                смотровая площадка.
              </p>
              <p>
                С верхней круговой смотровой площадки, с высоты 38 метров над землей, открывается самая красивая
                панорама Старой �&nbsp;уссы. Наверх ведут 126 ступеней.
              </p>
              <h3>Воскресенский собор</h3>
              <p>
                Один из знаковых соборов Старой �&nbsp;уссы - Воскресенский собор. Храм возвели в 1696 году, на месте
                слияния рек Полисти и Порусьи, откуда, как считается и берёт своё начало сам город Старая �&nbsp;усса.
              </p>
              <p>
                В 2008 году храм серьёзно отреставрировали: купола и шпиль колокольни покрыли позолотой и водрузили на
                них освященные кресты.
              </p>
              <p>
                Вокруг Воскресенского собора есть легенда о волшебном камне Бел-горюче. Считается, что он помогает
                избавляться от печали и грустных мыслей. Время от времени этот камень начинает слезоточить, по-видимому,
                это происходит из-за сочащихся подземных вод. У этого камня молились женщины за своих мужей, сыновей,
                которых забирали в рекруты, благословляли войска на победу.
              </p>
              <p>
                Также, есть версии, что перед образом Покровы Божией Матери молился царь Пётр Первый, а Екатерина II
                также посещала собор во время своего визита в Старую �&nbsp;уссу.
              </p>
              <h3>Памятник пехотинцам Вильманстрандского полка</h3>
              <p>
                Скульптура «Орла» в Старой �&nbsp;уссе - это памятник участникам русско-японской войны из 86-го
                Вильманстрандского пехотного полка, героически погибшим в кровопролитных боях на реке Шахе, на
                Ходябейской позиции и на Яндылинском перевале.
              </p>
              <p>
                Монумент установлен на пересечении улиц Минеральной и Володарского и представляет собой стоящий на
                постаменте гранитный обелиск высотой около 5 метров.
              </p>
              <h3>Церковь Святого Великомученика Георгия Победоносца. XV век.</h3>
              <p>
                Принято считать, что этот храм появился в Старой �&nbsp;уссе в 1410 год. Главной святыней Георгиевской
                Церкви является самая большая православная выносная икона в мире - чудотворная икона "Богородица
                Старорусская".
              </p>
              <p>
                Во время Великой Отечественной войны Георгиевская церковь уцелела от разрушений. А в послевоенные годы
                храм стал единственным действующим в городе и здесь собраны иконы, спасённые из других разрушенных
                церквей города. Георгиевский храм является не только уникальным произведением русского зодчества, но и
                памятником истории.
              </p>
              <p>
                Стоит отметить, что Церковь Георгия Победоносца была приходским храмом для семьи Достоевских.
              </p>
              <p>
                Главной святыней храма является Чудотворная икона «Богородица Старорусская», получившей название
                «Взыгрался младенец». Это одна из знаменитых богородичных икон особо почитаемых �&nbsp;усской
                Православной Церковью и связанных именно с Новгородской землёй.
              </p>
              <h3>Муравьёвский фонтан</h3>
              <p>
                Муравьевский фонтан, из которого бьёт минеральная вода - это символ курорта "Старая �&nbsp;усса" и всего
                города. Изначально это была просто скважина с мраморной чашей, позднее источник был украшен стеклянным
                шатром. Во время войны территория курорта и сам фонтан были разрушены. Сегодня фонтан открытый, вокруг
                него могут прогуливаться все желающие.
              </p>
              <h3>Царицынский источник</h3>
              <p>Царицынский источник бьёт ключом прямо из-под земли, производя 73 литра ледяной, соленой воды в минуту.
                И так она почти 200 лет извергается мощным фонтаном, оставляя после себя шум водопада. Вода здесь не
                замерзает круглый год и обладает той же целебной силой, что и воды Муравьевского фонтана. Низкая
                температура источника и его ручья не останавливает от купания ни туристов, ни горожан. Сейчас это
                облагороженная территория в уединенном живописном месте с площадками, шезлонгами и всем располагающим
                для отдыха на свежем, полезном воздухе.</p>

            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="grid-three-in-row block-ext-content">
              <a class="guide-tmb" href="/guides/muzei/?TOWN=4"
                style="background-image:url(images/3d086428f2f6d508469e64f0bfef55d8.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">11</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Музеи</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/khramy-i-monastyri/?TOWN=4"
                style="background-image:url(images/ff783b0d8ccf2f03c4cf73397e6683ba.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">16</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Храмы и монастыри</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/priroda/?TOWN=4"
                style="background-image:url(images/952aa577f0b8436d020018c5f300f0de.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">3</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Природа</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/vystavki/?TOWN=4"
                style="background-image:url(images/8ebdb49d07c61b2d8032b7331dd4fa72.JPG); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">21</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Выставки</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/voinskaya-slava/?TOWN=4"
                style="background-image:url(images/95b8fdf0837fae883f3df65a3b293d8f.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">23</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Поклонный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/kultura/?TOWN=4"
                style="background-image:url(images/04aa1de3cc41f94e3a35b197775156d9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">2</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Культура</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/neobychnye-mesta/?TOWN=4"
                style="background-image:url(images/a3f1dc60fd5b4848c25d23cb59bb1a95.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">8</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Необычные места</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ozdorovitelnyy-turizm/?TOWN=4"
                style="background-image:url(images/7224cc4bdc821ceaf4f3ccbc649817f6.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Оздоровительный туризм</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/razvlecheniya/?TOWN=4"
                style="background-image:url(images/fc362a255aabf1a1634e75c1318ed92b.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>�&nbsp;азвлечения</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/skulptury-i-byusty/?TOWN=4"
                style="background-image:url(images/ce633d563d8cd431b32a7018a2393de9.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">15</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Скульптуры и бюсты</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/muraly/?TOWN=4"
                style="background-image:url(images/ca86e8ea8fee00488b24b90be115e443.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Муралы</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/ulitsy/?TOWN=4"
                style="background-image:url(images/566121a5b07819c3b53498eeb2bbb6d7.jpg); width: 100%;">
                <div class="guide-tmb-count">
                  <div class="guide-tmb-count-num">1</div>
                  <div class="guide-tmb-count-ttl">места</div>
                </div>
                <div class="guide-tmb-inner">
                  <div class="h3"><span>Улицы</span></div>
                </div>
              </a>
              <a class="guide-tmb" href="/guides/zdaniya/?TOWN=4"
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
            <div class="h2" style="margin-top: 0;">Маршруты по Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <h3><a href="https://novgorod.travel/routes/gorod-dostoevskogo/">ГО�&nbsp;ОД ДОСТОЕВСКОГО</a></h3>
              <p>
                Самый верный способ познакомиться с городом – отправиться на пешеходную экскурсию. В данном случае, вы
                пройдётесь по местам, тесно связанным с жизнью и творчеством Ф.М. Достоевского в Старой �&nbsp;уссе.
              </p>
              <p>
                Свой дом в Строй �&nbsp;уссе, в котором семья поселилась весной 1873 года, Достоевский нежно называл
                «своим гнездом». Именно здесь, в маленьком кабинете на втором этаже, был написан роман «Братья
                Карамазовы»: Старая �&nbsp;усса и её жители вдохновили писателя на создание этого произведения, и
                явилась прообразом вымышленного города и персонажей, населявших его.
              </p>
              <h3><a href="https://novgorod.travel/routes/gorod-s-1000-letney-istoriey/">ГО�&nbsp;ОД С 1000-ЛЕТНЕЙ
                  ИСТО�&nbsp;ИЕЙ</a></h3>
              <p>
                Если нет много времени, но хочется увидеть много – отправляйтесь на обзорную автобусную экскурсию по
                Старой �&nbsp;уссе. Вы увидите главные достопримечательности города и, конечно, полюбуетесь неповторимой
                архитектурой древних церквей города. Продолжительность: 3 часа
              </p>
              <p>
                Объекты маршрута: Спасо-Преображенский мужской монастырь; Церковь Святой Живоначальной Троицы; Соборная
                площадь; Водонапорная башня;
              </p>
              <p>
                Воскресенский собор; Церковь Святого великомученика Мины; Церковь Георгия Победоносца.
              </p>
              <h3><a href="https://novgorod.travel/routes/bylinnoe-ozero-ilmen/">БЫЛИННОЕ ОЗЕ�&nbsp;О ИЛЬМЕНЬ</a></h3>
              <p>
                Побывать в Старой �&nbsp;уссе и не увидеть Словенское море – так называли древние славяне озеро Ильмень
                – это непростительно. Обязательно отправляйтесь на экскурсию к уникальному геологическому памятнику
                «Ильменский глинт». Там есть на что посмотреть. Озеро Ильмень, известное как часть знаменитого торгового
                пути «из варяг в греки», называли ещё «былинным». И не зря - уже более девяти веков людям известна
                легенда о приключениях Садко в подводном царстве.
              </p>
              Подробнее о маршрутах по Старой �&nbsp;уссе можно посмотреть <a
                href="https://novgorod.travel/routes/?TOWN=4">здесь</a>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="4">
            <div class="grid-three-in-row">
              <div class="object-tmb route-tmb" style="width: 100%;">
                <a href="/routes/nam-dorogi-eti-pozabyt-nelzya-/">
                  <div class="object-tmb-pic" style="background-image: url();">
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="route-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li>Воинская слава</li>
                    </ul>
                    <a href="/routes/nam-dorogi-eti-pozabyt-nelzya-/">
                      <div class="h3"><span>«Нам дороги эти позабыть нельзя…» </span></div>
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
                <a href="/routes/gorod-s-1000-letney-istoriey/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">650�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/gorod-s-1000-letney-istoriey/">
                      <div class="h3"><span>城市 с 1000-летней историей</span></div>
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
                <a href="/routes/bylinnoe-ozero-ilmen/">
                  <div class="object-tmb-pic" style="background-image: url();">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num">600�&nbsp;<span>р.</span></div>
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
                    <a href="/routes/bylinnoe-ozero-ilmen/">
                      <div class="h3"><span>Былинное озеро Ильмень</span></div>
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
            </div>
          </div>


          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Куда сходить в Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <p>
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://russa.amaks-kurort.ru/">Курорт «Старая
                  �&nbsp;усса»</a><!--/noindex-->
              </h3>
              <p>
                �&nbsp;усский «баден-баден» расположился прямо в центре красивейшего старинного русского города Старая
                �&nbsp;усса. На этом курорте лечились аристократы и богатые промышленники ещё в XIX веке.�&nbsp;
              </p>
              <p>
                Но даже если в ваши планы не входило лечебная программа, то можно просто прогуляться по аллеям парка
                курорта, посетить питьевую галерею, отдохнуть на скамейке возле Муравьёвсого фонтана с минеральной
                водой.
              </p>
              <h3>
                Аквапарк курорта «Старая �&nbsp;усса»</h3>
              <p>
                Сюда нужно приходить всей семьёй. В аквапарке есть плавательный спортивный бассейн 25 метров, детский
                оздоровительный бассейн с элементами аквапарка, инфракрасная и финская сауны. А затем, после водных
                активностей и банных процедур, можно отдохнуть и выпить свежезаваренного чая.�&nbsp;
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="http://russasol.ru/">Усадьба средневекового
                  рушанина</a><!--/noindex-->
              </h3>
              <p>
                Самобытный музей-реконструкция средневековой усадьбы, созданный на основе результатов археологических
                исследований, предоставит туристам возможность окунуться в атмосферу древнерусского города.
              </p>
              <p>
                Всё увидеть своими глазами и потрогать своими руками – лучшее, что можно представить себе в изучении
                быта наших предков.
              </p>
              <p>
              </p>
            </div>
          </div>



          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где поесть в Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <h3>
                <!--noindex--><a rel="nofollow" href="https://vk.com/bashnya_kafe">КАФЕ «БАШНЯ»</a><!--/noindex-->
              </h3>
              <p>
                В самом центре древнего города Старая �&nbsp;усса расположено уютное панорамное кафе с видом на
                центральную городскую площадь и одну из главных доминант города - Водонапорную башню.
              </p>
              <p>
                Меню европейской, японской кухни и итальянской пиццы, пиво, безалкогольные и алкогольные коктейли,
                горячий шоколад, качественный чай и кофе, мороженое.
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://polist-tour.ru/">�&nbsp;ЕСТО�&nbsp;АН
                  «ПОЛИСТЬ»</a><!--/noindex-->
              </h3>
              <p>
                �&nbsp;есторан "Полисть" представлен в лучших традициях русского гостеприимства, из окон которого
                открывается вид на живописный городской парк.
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://hotel-vizavi.ru/">КАФЕ «ВИЗАВИ»</a><!--/noindex-->
              </h3>
              <p>
                Приятное кафе, оформленное в стиле авангардного минимализма радует гостей вкусными завтраками,
                бизнес-ланчами и вечерним меню. Оказавшись в «Визави», не забудьте попробовать фирменное блюдо заведения
                «Ильменский судак по-старорусски». <br>
              </p>
              <h3> <a href="https://karamazovy.ru/">�&nbsp;есторан «КА�&nbsp;АМАЗОВЫ»</a> <br>
              </h3>
              <p>
                Прикоснитесь к истории вместе с нами, погрузив себя в атмосферу вкусов курортного города. �&nbsp;есторан
                «Карамазовы» – новая жизнь, музыка вкуса и стиля Старой �&nbsp;уссы. Основа меню – интересное сочетание
                авторской русской кухни и современной Италии.
              </p>
            </div>
          </div>


          <div class="city-section" data-ajax-loaded="8">
            <div class="grid-three-in-row">
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-vizavi/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/4f5b55522ae7095e629d01616ddf12ed.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/restaurants/kafe-vizavi/">
                      <div class="h3"><span>Кафе «Визави»</span></div>
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
                <a href="/restaurants/restoran-karamazovy/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/0d8f3679627cf2e2feeeb722b8f5c8f0.jpg);">
                    <div class="object-tmb-info ">
                      <div class="object-tmb-info-item">
                        <div class="object-info-num" style="font-size: 12px;line-height: 14px;word-break: break-word;">
                          10 на основное меню </div>
                        <div class="object-info-ttl">По карте гостя</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="object-tmb-descr">
                  <div class="rest-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/restaurants/restoran-karamazovy/">
                      <div class="h3"><span>�&nbsp;есторан «Карамазовы»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-cuisine"></div>
                      <div class="text">
                        <ul class="object-tmb-tags">
                          <li>Европейская</li>
                          <li>Авторская</li>
                          <li>�&nbsp;усская</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb rest-tmb" style="width: 100%;">
                <a href="/restaurants/kafe-bashnya/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/6c072e49f6fd38d4dc8fc14b76e3b168.jpg);">
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
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/restaurants/kafe-bashnya/">
                      <div class="h3"><span>Кафе "БАШНЯ"</span></div>
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
            <div class="h2" style="margin-top: 0;">Где остановиться в Старой �&nbsp;уссе</div>
            <div class="block-ext-content">
              <h3>
                <!--noindex--><a rel="nofollow" href="https://polist-tour.ru/">ГОСТИНИЦА «ПОЛИСТЬ»</a><!--/noindex-->
              </h3>
              <p>
                Гостиница «Полисть» располагается в историческом центре города-курорта Старой �&nbsp;уссы, рядом со
                знаменитым бальнеологическимВ здании расположен ресторан «Карамазовы» и санаторий с лечебными
                программами.
              </p>
              <p>
              </p>
              <h3>
                <!--noindex--><a rel="nofollow" href="https://hotel-vizavi.ru/">ОТЕЛЬ «ВИЗАВИ»</a><!--/noindex-->
              </h3>
              <p>
                Гостиница расположена в особняке в шаговой доступности от основных достопримечательностей города Старая
                �&nbsp;усса.
              </p>
              <h3>
                БАЗА ОТДЫХА «�&nbsp;ЕТЛЁ» </h3>
              <p>
                База отдыха расположена на юго-западном берегу озера Ильмень рядом с памятником природы «Ильменский
                глинт».
              </p>
              <p>
                Полный список отелей Старой �&nbsp;уссы можно посмотреть <a
                  href="https://novgorod.travel/hotels/?TOWN=4">здесь</a>
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="7">
            <div class="grid-three-in-row">

              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/otel-vizavi/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/fc6f16b67e51855081fce3de2e3eb647.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/hotels/otel-vizavi/">
                      <div class="h3"><span>Отель «Визави»</span></div>
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
                <a href="/hotels/kurort-staraya-russa/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/8be6900b32ae745fa04729eadc88ad0e.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/hotels/kurort-staraya-russa/">
                      <div class="h3"><span>Курорт «Старая �&nbsp;усса»</span></div>
                    </a>
                  </div>
                  <div class="object-tmb-data">
                    <div class="object-data-item">
                      <div class="ico ico-type-hotel"></div>
                      <div class="text">Санаторий</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="object-tmb hotel-tmb" style="width: 100%;">
                <a href="/hotels/baza-otdykha-retlye/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/658b57fb799f88095d01c10e583f0892.jpg);"></div>
                </a>
                <div class="object-tmb-descr">
                  <div class="hotel-tmb-descr">
                    <ul class="object-tmb-tags">
                      <li><a href="#SITE_DIR#/cities/#ELEMENT_CODE#/">Старая �&nbsp;усса</a></li>
                    </ul>
                    <a href="/hotels/baza-otdykha-retlye/">
                      <div class="h3"><span>База отдыха «�&nbsp;етлё»</span></div>
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
            <div class="h2" style="margin-top: 0;">Что привезти из Старой �&nbsp;уссы</div>
            <div class="block-ext-content">
              <h3>旧鲁萨 пряник</h3>
              <p>
                Приятный, а главное, вкусный сувенир из города, история которого насчитывает более 1000 лет.
              </p>
              <h3>旧鲁萨 мёд</h3>
              <p>
                Мёд из Старой �&nbsp;уссы - одно из самых полезных лакомств, которое придётся по душе всем сладкоежкам.
              </p>
              <h3>Иван-чай</h3>
              <p>
                Вкусный и полезный напиток. Все его компоненты бережно собираются в экологически чистом районе
                Новгородской области.
              </p>
              <h3>Старорусская соль</h3>
              <p>
                Соль в Старой �&nbsp;уссе выпаривают по старинному рецепту из уникальных вод старорусских минеральных
                источников.
              </p>
              <h3>Сувениры по творчеству Фёдора Достоевского</h3>
              <p>
              </p>
              <p>
                Из Старой �&nbsp;уссы можно привезти сувениры с изображением героев и цитат из романов Достоевского, а
                также различную продукцию с видами города, в котором жил и отдыхал великий русский писатель.
              </p>
              <ul>
                <li>кружки с изображением писателя и видами Старой �&nbsp;уссы; </li>
                <li>футболки с цитатами из романов Фёдора Михайловича Достоевского; </li>
                <li>блокноты из коллекции «ГородДостоевского.рф».</li>
              </ul>
              <p>
                <!--noindex--><a rel="nofollow" href="https://vk.com/market-59454328?section=album_4">Сувенирная
                  продукция</a><!--/noindex-->
              </p>
            </div>
          </div>

          <div class="city-section" data-ajax-loaded="65">
            <div class="grid-three-in-row">
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/starorusskaya-sol-i-produktsiya-na-eye-osnove/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/59f51dce69ef829be4c9efbd23165cd8.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/starorusskaya-sol-i-produktsiya-na-eye-osnove/">
                    <div class="h3">Старорусская соль и продукция на её основе</div>
                    <p>Соль можно купить в мешочке, в узелке, в обычной упаковке или в шкатулке из бересты, которая
                      также является традиционным сувениром из Новгородской области. В подарок можно приобрести и мыло
                      на основе старорусской соли</p>
                  </a>
                </div>
              </div>
              <div class="object-tmb" style="width: 100%">
                <a href="/bring/suveniry-po-tvorchestvu-fyedora-dostoevskogo/">
                  <div class="object-tmb-pic"
                    style="background-image: url(images/322384ed261187940ddc69303f80235f.png);">
                  </div>
                </a>
                <div class="object-tmb-descr" style="min-height: 453px;">
                  <a href="/bring/suveniry-po-tvorchestvu-fyedora-dostoevskogo/">
                    <div class="h3">Сувениры по творчеству Фёдора Достоевского</div>
                    <p>Из Старой �&nbsp;уссы можно привезти сувениры с изображением героев и цитат из романов
                      Достоевского, а также различную продукцию с видами города, в котором жил и отдыхал великий русский
                      писатель</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>