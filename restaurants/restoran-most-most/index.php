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
                            center: [58.388115, 33.906695],
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
                            <a class="no-ul" href="tel:+7 (921) 198-89-88">+7 (921) 198-89-88</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/most_restaurant" target="_blank">vk.com/most_restaurant</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul"
                              href="mailto:antonio_restor@mail.ru">antonio_restor@mail.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">Новгородская область, Боровичи, переулок �&nbsp;еппо, 4, этаж 2</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.388115,33.906695"
                              class="gps-block">
                              <span> 58.388115,33.906695 </span>
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
                          data-lazy="images/10ac9190c8bd6128d6495aac9ad7c3ec.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/637183389c5959e479fce41633d282a5.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/729ea2da3d972c02d8f1bda68b77523f.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/92501c9de7383b7d4a2246b647c56ad9.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/12bb842bc3d38ba17239dd20a04e23be.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1cfbd970623f1ae890ce274f451db48b.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/10ac9190c8bd6128d6495aac9ad7c3ec.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/637183389c5959e479fce41633d282a5.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/729ea2da3d972c02d8f1bda68b77523f.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/92501c9de7383b7d4a2246b647c56ad9.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/12bb842bc3d38ba17239dd20a04e23be.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1cfbd970623f1ae890ce274f451db48b.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <h3>
                        Концепция</h3>
                      <p>
                        Всего в нескольких шагах от моста Белелюбского, в историческом центре Боровичей в усадьбе
                        Митрофановых второй половины XIX века расположилась совершенно новая гастрономическая история -
                        ресторан авторской кухни Most. Здесь гостям предлагают прожить и прочувствовать уникальный
                        культурный опыт через кухню, с использованием сезонных продуктов из собственного сада и огорода,
                        новгородских специалитетов, камерный концертный зал и уединенный коктейльный бар с погружением в
                        мир новых вкусов, эстетику формы и сочетание текстур.
                      </p>
                      <h3>Атмосфера и интерьер<br>
                      </h3>
                      <p>
                        История ресторана Most тесно связана с историей города Боровичи. В 1905 году арочный мост
                        Белелюбского соединил два берега Мсты в купеческом центре Боровичей. Появление моста кардинально
                        изменило жизнь горожан. Мост соединил Спасскую и Торговую сторону. Мост стал символом глобальных
                        перемен.
                      </p>
                      <p>
                        Сегодня ресторан Most выстраивает новый культурный мост между Боровичами, Петербургом и Москвой.
                        Мост, который соединяет людей, гастрономию, культуру, традиции. МOST, который стал новой точкой
                        на гастрономической карте �&nbsp;оссии.�&nbsp;
                      </p>
                      <p>
                        Интерьер ресторана отсылает к истории города: чугунное литье, дубовые порталы работы местных
                        мастеров, метлахская плитка.�&nbsp;
                      </p>
                      <h3>О ресторане<br>
                      </h3>
                      <p>
                        Стены ресторана Most украшают гипсовые панно, созданные в мастерской Леонида Кима. Панно
                        раскрывают историческую связь семьи Митрофановых - бывших жильцов и владельцев этого особняка,
                        известных купцов и меценатов и семьи Антоновых, подаривших вторую жизнь зданию, а горожанам
                        место для встреч и особенных событий.�&nbsp;
                      </p>
                      <p>
                        “Сюжет в крупных панно отражает философию ресторана Most в стилизованном виде: два берега,
                        соединенных мостом. Плавные линии характеризуют гармонию и баланс, уравновешенность, отсутствие
                        суеты, наслаждение моментом. На панно можно смотреть бесконечно и размышлять о чем-то своем
                        глубоком, и для каждого это будет совершенно свое восприятие”, — Елена Скутова, дизайнер.�&nbsp;
                      </p>
                      <p>
                        Входная группа ресторана оформлена потрясающими итальянскими люстрами, а в самом сердце спрятан
                        каминный портал из Флоренции.�&nbsp;
                      </p>
                      <h3>Кухня</h3>
                      <p>
                        Кухню ресторана Most возглавляет бренд-шеф Алексей Городничев.
                      </p>
                      <p>
                        Алексей родом из города Благовещенск. Величественная тайга, реки Амур и Зея — настоящая красота
                        и источник внутренней силы.
                      </p>
                      <p>
                        Гастрономическая идеология Алексея заключается в том, чтобы сохранить и показать самобытный вкус
                        продукта.
                      </p>
                      <p>
                        Нас вдохновляет то, что растёт на грядках сада нижнего яруса усадьбы Митрофановых и в лесах
                        Новгородской земли. Для приготовления блюд мы используем самые свежие ингредиенты с нашего
                        огорода: клубника, помидоры, огурцы, салаты, горошек, смородина, крыжовник и другие ягоды. <br>
                      </p>
                      <p>
                        По карте гостя посещение ресторана «МОST» и мероприятий, согласно афиши ресторана « MOST», и
                        размер скидки 10%.
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

                          <form id="review-form" class="review-form" action="/restaurants/restoran-most-most/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="8XZbClmiyI1ExKZjvEOucw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="TFxMQFdmzxQg9E6NbQsQAw==">
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