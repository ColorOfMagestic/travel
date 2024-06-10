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

                <div class="sidebar-object-info sticky-sidebar">
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
                            center: [58.523737116749, 31.26563864418],
                            zoom: 13
                          }, {

                          }),
                            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                              hintContent: '',
                              balloonContent: ''
                            }, {
                              // Опции.
                              // Необходимо указать данный 类型 макета.
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
                              myMap.setZoom(15);
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
                          <td class="name">电话:</td>
                          <td class="val"><a class="no-ul" href="tel:+7(8162) 788-888 / 788-012">+7(8162) 788-888 /
                              788-012</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://hotel-volkhov.ru" target="_blank">hotel-volkhov.ru</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:volkhov@novtour.ru">volkhov@novtour.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">大诺夫哥罗德 , ул. Предтеченская ул., 24</td>
                        </tr>
                        <tr>
                          <td class="name">Время работы:</td>
                          <td class="val">ежедневно, круглосуточно</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.523737116749,31.26563864418" class="gps-block">
                              <span> 58.523737116749,31.26563864418 </span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                  d="M12 6h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3h2v1.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H12V6zM1 0h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z">
                                </path>
                              </svg>
                            </a>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">
                  <div class="section-expandable">
                    <div class="h2">Фотогалерея</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><img
                              data-lazy="images/a952b7af89df217e3200a87df0d07046.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5c2b441f1a49c7ecbb5dd3f86841962b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/abfdf01e918def5ce7d58eeeb22f2721.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/6bce0d9f4463e21c77273780f1e4272d.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/cdd3e61cfaecf4a78f025b9515d87fe9.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/25f43705b5b23e8043bc50d34faa339b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/bb0fc41bf530cb2e957433f79105be41.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/88b6e066581e81c115f63b5e18509730.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e2c9f17b81856ce55e60b1c1d7ff7505.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/07084ab4c43580a150ec567a0b3ec96d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/694d8c6913cc486a8bb919b917c8ef75.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b73bb9bde9451110b80eefbce9bfa6eb.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/773c59c36140ecd2bb5f02adef32c5a0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/05b3a83d37a4ecaa584b47fa8ccf7904.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/40fd49b480abc908d29f0de01072685a.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/a952b7af89df217e3200a87df0d07046.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5c2b441f1a49c7ecbb5dd3f86841962b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/abfdf01e918def5ce7d58eeeb22f2721.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/6bce0d9f4463e21c77273780f1e4272d.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/cdd3e61cfaecf4a78f025b9515d87fe9.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/25f43705b5b23e8043bc50d34faa339b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/bb0fc41bf530cb2e957433f79105be41.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/88b6e066581e81c115f63b5e18509730.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e2c9f17b81856ce55e60b1c1d7ff7505.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/07084ab4c43580a150ec567a0b3ec96d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/694d8c6913cc486a8bb919b917c8ef75.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b73bb9bde9451110b80eefbce9bfa6eb.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/773c59c36140ecd2bb5f02adef32c5a0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/05b3a83d37a4ecaa584b47fa8ccf7904.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/40fd49b480abc908d29f0de01072685a.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">О гостинице</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        Отель &amp; СПА «Волхов» — это отель с многолетней историей в самом сердце Великого Новгорода.
                        Уже более шестидесяти лет предоставляет гостям города комфортные условия как для отдыха, так и
                        для работы:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>
                          <p>
                            уютные номера различных категорий;
                          </p>
                        </li>
                        <li>
                          <p>
                            современное техническое оснащение;
                          </p>
                        </li>
                        <li>
                          <p>
                            высокий уровень сервиса;
                          </p>
                        </li>
                        <li>
                          <p>
                            близость к центру городской деловой жизни;
                          </p>
                        </li>
                        <li>
                          <p>
                            удобное транспортное сообщение.
                          </p>
                        </li>
                      </ul>
                      <p>
                      </p>
                      <p>
                        Для деловых поездок и мероприятий в «Волхове» предусмотрены технически оснащенные конференц-залы
                        и переговорная комната.
                      </p>
                      <p>
                        Для туристических поездок — сувенирная лавка и туристическое агентство, которое организует
                        экскурсии по Великому Новгороду и окрестностям.
                      </p>
                      <p>
                      </p>
                      <p>
                        К Вашим услугам:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>
                          <p>
                            122 уютных номера;
                          </p>
                        </li>
                        <li>
                          <p>
                            �&nbsp;есторан MARUSYA — гастро-интеллектуальный проект с авторской кухней, театральными
                            подачами живой музыкой и яркими событиями (на 120 посадочных мест);
                          </p>
                        </li>
                        <li>
                          <p>
                            Кофейня-кондитерская с авторскими десертами Marusya coffee bar на первом этаже в светлом
                            пространстве лобби;
                          </p>
                        </li>
                        <li>
                          <p>
                            Стильное Lounge cafe на пятом этаже с панорамным видом;
                          </p>
                        </li>
                        <li>
                          <p>
                            Банкетные залы на 30 и 15 посадочных мест;
                          </p>
                        </li>
                        <li>
                          <p>
                            Два конференц-зала;
                          </p>
                        </li>
                        <li>
                          <p>
                            СПА-комплекс La Mer Spa с бассейном с морской водой и широким спектром услуг для красоты,
                            здоровья и отдыха;
                          </p>
                        </li>
                        <li>
                          <p>
                            Музей забытых вещей.
                          </p>
                        </li>
                      </ul>
                      <p>
                      </p>
                      <p>
                      </p>
                      <p>
                        Выбирая отеля «Волхов», вы также получаете:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>
                          <p>
                            Вкусный завтрак по системе «Шведский стол»;
                          </p>
                        </li>
                        <li>
                          <p>
                            Бесплатную охраняемую парковку и бесплатную автостоянку на территории отеля;
                          </p>
                        </li>
                        <li>
                          <p>
                            Организацию экскурсионного и транспортного обслуживания, туров, мастер-классов;
                          </p>
                        </li>
                        <li>
                          <p>
                            Услуги прачечной и химчистки;
                          </p>
                        </li>
                        <li>
                          <p>
                            Сейфовые ячейки, камера хранения;
                          </p>
                        </li>
                        <li>
                          <p>
                            Услуги прачечной и химчистки;
                          </p>
                        </li>
                        <li>
                          <p>
                            Бесплатный Wi-Fi;
                          </p>
                        </li>
                        <li>
                          <p>
                            Возможность размещения с домашними животными (подробности необходимо уточнять по телефону +7
                            (8162) 78 88 88).
                          </p>
                        </li>
                      </ul>
                      <p>
                        Ждем Вас в гостинице «Волхов»!
                      </p>
                      <p>
                      </p>
                      <p>
                        *Скидка по программе «Карта гостя Новгородской области» предоставляется только при бронировании
                        непосредственно через отель.
                      </p>
                      <p></p>
                    </div>
                  </div>

                  <div class="share-links">
                    <div class="share-links-ttl">Поделиться:</div>
                    <div class="share-links-cont">
                      <script src="../js/share.js"></script>
                      <div class="ya-share2" style="margin-top:12px;" data-curtain=""
                        data-services="messenger,vkontakte,odnoklassniki,telegram,viber,whatsapp,moimir,skype"></div>
                    </div>
                  </div>


                  <div class="section-expandable">
                    <div class="h2">Написать отзыв</div>
                    <div class="section-expandable-content">
                      <div class="feedback-form">
                        <div class="feedback-form-content">

                          <form id="review-form" class="review-form" action="/hotels/gostinitsa-volkhov/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="dyP6rgoVpC1dskcZnfR+Hw==">

                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                  <label for="feedback_name">ФИО</label>
                                  <input type="text" name="name" id="feedback_name" required="">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                  <label for="feedback_email">E-mail</label>
                                  <input type="text" name="email" id="feedback_email" required="">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                  <label for="feedback_phone">电话:</label>
                                  <input class="input-phone" type="text" name="phone" id="feedback_phone" required="">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Ваша оценка</label>
                              <input type="hidden" id="review_rating" name="rating" value="none">
                              <div id="rateit_review_rating"></div>
                            </div>

                            <div class="form-group">
                              <label for="form_textarea_4">Отзыв</label>
                              <textarea class="textarea-resized" name="text" id="form_textarea_4" rows="4"
                                required=""></textarea>
                            </div>
                            <div class="form-group">
                              <label for="file_reviews" class="btn btn-2">Прикрепить фотографии</label>
                              <input type="file" id="file_reviews" name="images[]" multiple="">
                              <span hidden="" class="file-counts">Выбрано файлов: <span
                                  id="file_reviews_count">0</span></span>
                            </div>


                            <input type="checkbox" name="confirmation" value="on" checked="" style="display: none;">
                            <script>
                              {
                                let form = document.querySelector('#review-form');
                                let checkbox = form.querySelector('[name=confirmation]')
                                checkbox.checked = false;
                              }
                            </script>
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="JP4AwFfptndvQH70f6Edtg==">
                            <input type="hidden" name="jAdyYcDZja2gKTJUCdCpoQ==" value="RGYKsWdTr9Gf7frK1hQF/A==">
                            <div class="form-footer">
                              <input class="btn btn-2" type="submit" value="Отправить">
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>


                  <script>
                    let reviewComponentName = "kuratovru:web.form.review";
                  </script>



                  <div class="section-expandable">
                    <div class="h2">Отзывы</div>
                    <div class="section-expandable-content">

                      <p>Для этого объекта еще нет отзывов.</p>

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