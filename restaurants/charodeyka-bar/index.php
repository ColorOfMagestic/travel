<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
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
                            center: [58.522084, 31.268812],
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
                            <a class="no-ul" href="tel:+7 (911) 600-14-09">+7 (911) 600-14-09</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/charodeyka_bar" target="_blank">vk.com/charodeyka_bar</a><br>
                            <a href="http://www.alkon.su" target="_blank">www.alkon.su</a><br>
                            <a href="http://www.sadko.su" target="_blank">www.sadko.su</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">大诺夫哥罗德 , ул. Мерецкова-Волосова 1/1</td>
                        </tr>
                        <tr>
                          <td class="name">Время работы:</td>
                          <td class="val">ВС-ЧТ с 12:00 до 23:00
                            ПТ,СБ с 12:00 до 00:00</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.522084,31.268812"
                              class="gps-block">
                              <span> 58.522084,31.268812 </span>
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
                          data-lazy="images/71c166da8cba9e55caaa46aaefb9aff7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/4987b81eef4a591bc60f955845bc18d9.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e1d323a3f5976e8771eccee29667a29e.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/98916731a8ba8dea7cabb0ec7772183d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/22b1aa28aff9c59b8f18afa48901971f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9d55465764ae594d8757a287abfa840.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c60926e093a17dfd2306ab34e2529ece.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/710f61a5cf610146eb3bc2aea5935ff5.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/71c166da8cba9e55caaa46aaefb9aff7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/4987b81eef4a591bc60f955845bc18d9.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e1d323a3f5976e8771eccee29667a29e.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/98916731a8ba8dea7cabb0ec7772183d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/22b1aa28aff9c59b8f18afa48901971f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9d55465764ae594d8757a287abfa840.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c60926e093a17dfd2306ab34e2529ece.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/710f61a5cf610146eb3bc2aea5935ff5.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p>Второй проект с концепцией ZAVOD-бар в Великом Новгороде.<br>
                        <br>
                        Чародейка-бар�&nbsp;и ZAVOD -бар – это интеллигентные бары с русской кухней, настойками и
                        купеческой лавкой, заполненной памятными сувенирами и русскими напитками.<br>
                        <br>
                        Чародейка-бар — это уникальное место вне времени с душевным сервисом и гастрономией, где можно
                        не только сытно поесть, но и насладиться видом из окна.<br>
                        Сюда приходят гости за русской домотканной кухней, аутентичными блюдами из локальных продуктов и
                        дружественной атмосферой. Запоминающимся сопровождением в гастрономическом визите послужит
                        богатый выбор крафтовых настоек по восстановленным традиционным рецептурам.<br>
                        <br>
                        Купеческая лавка «Чародейка» богата на известные в �&nbsp;оссии водки, джины и настойки
                        ликеро-водочного завода «Алкон», натуральный чай и мёд, чайные наборы с подстаканниками, стопки
                        ручной работы, и памятные открытки с авторскими иллюстрациями видов Великого Новгорода.<br>
                        <br>
                      </p>
                      <div>
                        Бар, бронь�&nbsp;столика: 601-409 | Лавка: 601-509
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                        *По Карте гостя при покупке любого товара от 500 рублей фирменный магнит или варенье из сосновых
                        шишек в подарок (в зависимости от наличия)<br>
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

                          <form id="review-form" class="review-form" action="/restaurants/charodeyka-bar/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="d2abc825aa56fdcdac604fd7d3dd4500">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="A1kOiXobaaa7etSA3PoHXw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="ciIS4wFUbldh9xwB6xxmKQ==">
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


                      <div class="review-block">
                        <p class="review-smalltext">02.09.2021 12:18:38</p>
                        <span class="review-smalltext">Виктор Анатольевич Чужакин</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Паштет с брусничным соусом под 80,0 хреновухи - отлично ! �&nbsp;екомендую ! </p>
                        <a class="fancy-review" href="/upload/iblock/98e/98ef4f2ef27814bb1f089861a9290368.jpg">
                          <img src="images/98ef4f2ef27814bb1f089861a9290368.jpg" alt="review image">
                        </a>

                      </div>



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