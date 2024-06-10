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
                            center: [58.520676, 31.288753],
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
                          <td class="val">
                            <a class="no-ul" href="tel:+7 (991) 492-03-55">+7 (991) 492-03-55</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/sudarushka53" target="_blank">vk.com/sudarushka53</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:sudaryhka53@mail.ru">sudaryhka53@mail.ru</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">大诺夫哥罗德 , ул. Большая Московская, 32/12</td>
                        </tr>
                        <tr>
                          <td class="name">Время работы:</td>
                          <td class="val">Ежедневно с 11.00 до 23.00</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.520676,31.288753"
                              class="gps-block">
                              <span> 58.520676,31.288753 </span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                  d="M12 6h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3h2v1.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H12V6zM1 0h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z">
                                </path>
                              </svg>
                            </a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">

                  <div class="photo-slider-wrapper">
                    <div class="photo-slider">
                      <div class="slide"><img
                          data-lazy="images/e6abe25788cd423db39cf37f422ed2db.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9921babdb4372236e7126147d7b2ee5c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/48121f5d418672c56dde04203d866b23.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/7b80abb178ca17933e94de0c0e755321.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/0bbe118b8ccca34936ef72ebaa0eabf1.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/e6abe25788cd423db39cf37f422ed2db.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9921babdb4372236e7126147d7b2ee5c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/48121f5d418672c56dde04203d866b23.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/7b80abb178ca17933e94de0c0e755321.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/0bbe118b8ccca34936ef72ebaa0eabf1.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        Гастрономическое кафе «Сударушка» - это место, где можно провести тематические мероприятия,
                        свадьбу, юбилей, корпоратив, а также посидеть в узком кругу родных и близких, наслаждаясь
                        вкусными домашними блюдами под приятную музыку. В кафе работает интернет, кондиционер.
                      </p>
                      <p>
                        Никого из гостей не оставило равнодушным мороженое со свежими фруктами и горьким шоколадом. В
                        обед всегда доступны горячие вторые блюда, разнообразные салатики.
                      </p>
                      <p>
                        Интерьер в классическом стиле, небольшие столики, музыкальные композиции, живые комнатные
                        растения – все это создает уют, гармонию, спокойствие.
                      </p>
                      <p>
                        �&nbsp;ядом с кафе имеется отдельная парковка.
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

                          <form id="review-form" class="review-form" action="/restaurants/kafe-sudarushka/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="8wRw7xbKw8CFUeCSTmpPNg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="M+3qchpMY4Ne7gzajfqyrA==">
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