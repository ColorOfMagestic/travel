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
                            center: [58.53139, 31.281701],
                            zoom: 13
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
                          <td class="name">Телефон:</td>
                          <td class="val"><a class="no-ul" href="tel:+7 (8162) 280-100  ">+7 (8162) 280-100 </a></td>
                        </tr>
                        <tr>
                          <td class="name">Сайт:</td>
                          <td class="val">
                            <a href="http://intnovhotel.ru" target="_blank">intnovhotel.ru</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">E-mail:</td>
                          <td class="val"><a class="no-ul" href="mailto:info@intnovhotel.ru">info@intnovhotel.ru</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">Адрес:</td>
                          <td class="val">Великий Новгород, ул. Великая, 16</td>
                        </tr>
                        <tr>
                          <td class="name">GPS-координаты:</td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.53139,31.281701" class="gps-block">
                              <span> 58.53139,31.281701 </span>
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
                              data-lazy="images/ce92d11cdede5ef895ccb5a00f1159f0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/90ea60a7ffb7b05e9c831455803cee1b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0356df663975320fe638f30162efc879.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ead7402eae9844d9a20ddaf5bf687c14.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/07543d02539d1f20f11bdc9af4ad0f91.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b3718e795712c70c645701d1f3e50444.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/ce92d11cdede5ef895ccb5a00f1159f0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/90ea60a7ffb7b05e9c831455803cee1b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0356df663975320fe638f30162efc879.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ead7402eae9844d9a20ddaf5bf687c14.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/07543d02539d1f20f11bdc9af4ad0f91.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b3718e795712c70c645701d1f3e50444.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">О гостинице </div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        В гостинице Интурист 115 номеров разных категорий, (стандарт, комфорт, бизнес). Есть также свой
                        ресторан, лобби-бар, конференц-зал на 60 мест, бизнес-центр. Предоставляется бесплатный Wi-Fi и
                        удобная парковка. Из преимуществ отеля – экскурсионное обслуживание.
                      </p>
                      <p>
                        Недалеко располагается новая современная набережная вдоль реки Волхов. <br>
                      </p>
                      <p>
                        Туристам, отдыхающим с детьми, понравится большая и безопасная детская площадка, выполненная из
                        экологичных материалов.�&nbsp;
                      </p>
                      <p>
                      </p>
                      <p>
                        Контакты:
                      </p>
                      <p>
                        +7 (8162) 280-100�&nbsp;
                      </p>
                      <p>
                        +7 (8162) 280-400�&nbsp;
                      </p>
                      <p>
                        +7 (8162) 280-300<br>
                      </p>
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

                          <form id="review-form" class="review-form" action="/hotels/inturist/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="u40DzC97KxCm3F/9u59/Ow==">

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
                                  <label for="feedback_phone">Телефон:</label>
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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="SG7TL36OHaE2qrVzjTvQPw==">
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