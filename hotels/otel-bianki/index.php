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
                            center: [58.520548, 31.289891],
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
                          <td class="val"><a class="no-ul" href="tel:+7 (8162) 63-73-93">+7 (8162) 63-73-93</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://biankihotel.ru" target="_blank">biankihotel.ru</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:hotelbianki@mail.ru  ">hotelbianki@mail.ru </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">г. 大诺夫哥罗德 , ул. �&nbsp;огатица, д. 14 </td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.520548,31.289891" class="gps-block">
                              <span> 58.520548,31.289891 </span>
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
                              data-lazy="images/90666e3ba4e9aa3a22da7134dcc2ef55.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/985b5f7fa31e098794bcafdcdd82e3ee.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a8eb519b184252c028f1501e974ff68f.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7455246e3b901be0c4509dabb5a24627.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7faf7abe675b4d2b82ffbef494da89a7.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/90666e3ba4e9aa3a22da7134dcc2ef55.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/985b5f7fa31e098794bcafdcdd82e3ee.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a8eb519b184252c028f1501e974ff68f.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7455246e3b901be0c4509dabb5a24627.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7faf7abe675b4d2b82ffbef494da89a7.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">Об отеле</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <div>
                        Новгородскому Отелю «БИАНКИ» присвоена категория «4 звезды».
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                        Отель был открыт 15 декабря 2020 года. Подарком же под 2022 Новый Год стало повышение категории
                        отеля до 4 звёзд после года успешной работы.
                      </div>
                      <br>
                      Собственник – компания «Арсенал» - приобрёл здание, являющееся памятником архитектуры XIX века, на
                      торгах в 2017 году, когда оно находилось в плачевном состоянии и требовало срочной реконструкции.
                      В течение трёх лет велись ремонтно - восстановительные и реставрационные работы, результатом
                      которых стали восторженные отзывы Гостей города, останавливавшихся в новом отеле, хранящем
                      атмосферу старинного особняка. <br>
                      <br>
                      Надо отметить, что Отель «БИАНКИ» удерживает лидирующую позицию по отзывам путешественников на
                      самых популярных сайтах бронирования.
                      <p>
                        *Скидка по программе "Карта гостя Новгородской области" предоставляется только при бронировании
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

                          <form id="review-form" class="review-form" action="/hotels/otel-bianki/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="NhIl3Zbl7c/ZX8TLywFaog==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="Ce639WShiQ6ejEpoxi0+IA==">
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