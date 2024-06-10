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
                            center: [58.818082, 33.547507],
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
                          <td class="val"><a class="no-ul" href="tel:8-800-31-27-16, +7-981-700-00-16">8-800-31-27-16,
                              +7-981-700-00-16</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://lubogora.ru" target="_blank">lubogora.ru</a><br>
                            <a href="http://vk.com/lubogora" target="_blank">vk.com/lubogora</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul"
                              href="mailto:administrator@lubogora.ru">administrator@lubogora.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">Новгородская обл, Любытинский р-н, Селище (Любытинское с/п) д, дом № 30</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.818082,33.547507" class="gps-block">
                              <span> 58.818082,33.547507 </span>
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
                              data-lazy="images/7695b47c722d250976ca8c4e71c37d16.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ccf5269c82ee9d815f4bad45567d0189.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0ba52b09adf0e95f2c7bafdb4953ce67.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/451f28fa762f1ad9d86628c23db5ce22.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f8bd28b93994ed3afb975d2b5e4dd2df.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/d816fa9ab1bd8b269330097bc03cbe6c.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/d1df4edcd381cae1572100d8cb0d3006.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a4f01c53854aa4210a8651b2750abdb8.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/1070de93ea48e7359ee12326972fe45b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8603acbf2691095ea10352fefa059ff3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/47faed7bad5d36f18df3b1302955c582.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ffca1bae130102459ec56e12fbba731d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ec49f59c9a7d1d80041eaf660f902b14.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/76d516997151eef9afeb656cb55a6314.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/7695b47c722d250976ca8c4e71c37d16.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ccf5269c82ee9d815f4bad45567d0189.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0ba52b09adf0e95f2c7bafdb4953ce67.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/451f28fa762f1ad9d86628c23db5ce22.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f8bd28b93994ed3afb975d2b5e4dd2df.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/d816fa9ab1bd8b269330097bc03cbe6c.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/d1df4edcd381cae1572100d8cb0d3006.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a4f01c53854aa4210a8651b2750abdb8.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/1070de93ea48e7359ee12326972fe45b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8603acbf2691095ea10352fefa059ff3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/47faed7bad5d36f18df3b1302955c582.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ffca1bae130102459ec56e12fbba731d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ec49f59c9a7d1d80041eaf660f902b14.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/76d516997151eef9afeb656cb55a6314.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">О горнолыжном клубе</div>
                    <div class="section-expandable-content">
                      <p>«Любогорье» – это уникальный эко-курорт Новгородской области, который работает в круглогодичном
                        режиме. <br>
                        <br>
                        В любое время года гостей ждут спортивные развлечения, традиционный банный детокс-отдых,
                        проживание в комфортабельных номерах, апартаментах, домах-шалашах или коттеджах, детский клуб и
                        питание в уютном ресторане с открытой террасой. Все это дополняет умиротворяющая атмосфера
                        первозданной природы, которая окружает курорт.<br>
                        <br>
                        Зимой в Любогорье работает 7 склонов разного уровня сложности: трассы для горных лыж и
                        сноубордов с перепадом высот до 120 метров, учебный спуск для новичков и склон для тюбинга, а
                        также живописный маршрут для беговых лыж протяженностью 3 км и уникальный по своей атмосфере
                        каток, окруженный лесом. Летом – велосипедные и пешие прогулки, терренкур, охота и рыбалка,
                        отдых на озере и благоустроенная барбекю-зона с беседками.<br>
                        <br>
                        Весь год для гостей работает комплекс русских бань.<br>
                        <br>
                        На территории курорта созданы все условия для проведения праздничных и корпоративных
                        мероприятий: большой ресторан, мультимедийная техника, профессиональное музыкальное
                        оборудование, индивидуальное меню и помощь в организации вашего праздника! <br>
                        <br>
                      </p>
                      <div>
                        Скидка 5% на проживание по Карте гостя!
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                        *Скидка по программе "Карта гостя Новгородской области" предоставляется только при бронировании
                        непосредственно через отель.
                      </div>
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

                          <form id="review-form" class="review-form"
                            action="/hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="pQQX+x94hjmKrd3EuC3Q3g==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="uPc8nbRQWoa5YCbfWTkDYg==">
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