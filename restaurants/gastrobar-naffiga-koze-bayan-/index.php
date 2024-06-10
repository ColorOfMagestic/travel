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
                            center: [58.526756, 31.279492],
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
                            <a class="no-ul" href="tel:+7 (8162) 70-89-08">+7 (8162) 70-89-08</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/gastrobarnkb" target="_blank">vk.com/gastrobarnkb</a><br>
                            <a href="http://www.koza53.ru" target="_blank">www.koza53.ru</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">大诺夫哥罗德 , ул. Великая, д.3</td>
                        </tr>
                        <tr>
                          <td class="name">Время работы:</td>
                          <td class="val">вс-чт с 10:00 до 23.00
                            пт-сб с 10.00 до 00.00</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.526756,31.279492"
                              class="gps-block">
                              <span> 58.526756,31.279492 </span>
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
                          data-lazy="images/97224b3de9f3ba75c2fd4c34c14f68e2.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/50bda80f77f81065dc3061e8d847554e.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e4bc46fbf57739264237e0cd153c0cf7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5dbb907e118f1a6aca689d086ca56c9b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/0ae03974d789c7c916785f14e203228f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/3c2dce287861dfbb41fb06808af84c34.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f47325a623126e89951f4fbcd6a392f7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/50e618446211786fb63697b38819e356.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f30d79aa4c921e269dff3c9db9aed31b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b1f6656979a76a72de049d307301ad14.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/511d8f6cca7063be39c0ed019a404f97.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1ed2da1e4640638a5f7fb9e915245d33.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/a009e1d44e330d62bf2d80513037c14f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e489f5ba66fe73c43814cbf645199aa4.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/97224b3de9f3ba75c2fd4c34c14f68e2.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/50bda80f77f81065dc3061e8d847554e.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e4bc46fbf57739264237e0cd153c0cf7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5dbb907e118f1a6aca689d086ca56c9b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/0ae03974d789c7c916785f14e203228f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/3c2dce287861dfbb41fb06808af84c34.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f47325a623126e89951f4fbcd6a392f7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/50e618446211786fb63697b38819e356.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f30d79aa4c921e269dff3c9db9aed31b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b1f6656979a76a72de049d307301ad14.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/511d8f6cca7063be39c0ed019a404f97.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1ed2da1e4640638a5f7fb9e915245d33.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/a009e1d44e330d62bf2d80513037c14f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e489f5ba66fe73c43814cbf645199aa4.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        Изюминка гастробара -�&nbsp;использование сезонных эко продуктов от фермеров, благодаря которым
                        можно совершить гастрономическое путешествие по временам года.
                      </p>
                      <p>
                        Гастробар авторской кухни из эко продуктов от местных фермеров - неповторимая атмосфера бара и
                        гастрономические удовольствия!<br>
                        Попадая в гастробар, ощущаешь невесомость и какую-то невероятную легкость бытия. Время здесь
                        пролетит незаметно, а уходить, совсем не захочется.
                      </p>
                      <p>
                        Знакомство с кухней дарит нам новой ощущение - поистине земное удовольствие.
                      </p>
                      <p>
                        В распоряжении гостей <b>три зала</b>, каждый из которых выполнен в уникальном дизайне.
                      </p>
                      <p>
                        <b>Зал «Лаванда»</b> выполнен в светлых цветах, украшен кухонной утварью и напомнит о теплом
                        ожидании обеда на кухне у любимой бабушки. Придется по вкусу женским компаниям и семьям с
                        детьми.<br>
                        <br>
                        <b>Зал «Тимьян»</b> мы сделали строгим и брутальным. Самое крутое место в городе для того чтобы
                        собраться мальчишками за кружкой пенного.<br>
                        <br>
                        <b>Зал «Гостиная»</b> - банкетный зал, выполненный в сдержанном стиле дома деревенского
                        аристократа.
                      </p>
                      <p>
                        Известно, что современные художники часто заимствуют идеи для своих работ из академической
                        живописи, но выбирают для их выполнения новые формы. У нас же классическая форма приобретает
                        новое содержание. Что касается основных блюд - это как финал фильма, с неожиданной развязкой
                        сюжета.
                      </p>
                      <p>
                        Сочетание ингредиентов завораживает, а исполнение интригует. Мы используем локальные продукты и
                        предпочитаем метод низкотемпературного медленного приготовления блюд- Sous Vide, который
                        позволяет сохранить вкусовые свойства и полезные вещества в продукте.
                      </p>
                      <p>
                        <br>
                      </p>
                      <br>
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
                            action="/restaurants/gastrobar-naffiga-koze-bayan-/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="SVNETVh65efHq1LoQukYJA==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="ANZH6pIpBQ4dcG26AurIsw==">
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