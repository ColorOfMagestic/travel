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
                            center: [58.489569037162, 31.270944186508],
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
                          <td class="val"><a class="no-ul" href="tel:+7 8162 94‑03-33, +7 8162 94‑60-60">+7 8162
                              94‑03-33, +7 8162 94‑60-60</a></td>
                        </tr>
                        <tr>
                          <td class="name">Сайт:</td>
                          <td class="val">
                            <a href="http://tk-podvorie.ru " target="_blank">tk-podvorie.ru </a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">E-mail:</td>
                          <td class="val"><a class="no-ul" href="mailto:yurevo@novtour.ru">yurevo@novtour.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">Адрес:</td>
                          <td class="val">Великий Новгород, Юрьевское шоссе, 6А</td>
                        </tr>
                        <tr>
                          <td class="name">Время работы:</td>
                          <td class="val">ежедневно, круглосуточно</td>
                        </tr>
                        <tr>
                          <td class="name">GPS-координаты:</td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.489569037162,31.270944186508" class="gps-block">
                              <span> 58.489569037162,31.270944186508 </span>
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
                              data-lazy="images/cc1fbd01d335da9946d4b5f4f47dff69.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e8e80ee2751fcf565c791314ad643141.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/206beb123ff9c738225a00057ec6f7bf.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/42e7963f573ea9a8e1ea2905c2b0829c.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/558f81d5e575d8eefb6bf3fde9d7dee6.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/63c788fd97ba583b2d3e8897d54294b8.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/38d59abe57f4111f075a4e366b255642.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/4dbdb2c7f52a3f879e65f049f4558d17.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5c0b83869d8ee9819cf4ecbff1ed7e5a.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f6c9023be181cc151a7e9951c5028f45.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/32ffcd7a2401299d3cf81cedcd5f18a6.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/46079f2a2b032aaabe1d75e3fbfd109e.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/04f7559bb0925b11875cbd934cc0c230.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8596b3d0ea8b9d0df3426b6070c5aa8b.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/39521aa052f5030b2e59e7093a9310d8.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7f410863e0f39de3b49fe4730f44b9e4.png">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/cc1fbd01d335da9946d4b5f4f47dff69.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e8e80ee2751fcf565c791314ad643141.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/206beb123ff9c738225a00057ec6f7bf.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/42e7963f573ea9a8e1ea2905c2b0829c.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/558f81d5e575d8eefb6bf3fde9d7dee6.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/63c788fd97ba583b2d3e8897d54294b8.jpeg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/38d59abe57f4111f075a4e366b255642.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/4dbdb2c7f52a3f879e65f049f4558d17.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5c0b83869d8ee9819cf4ecbff1ed7e5a.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f6c9023be181cc151a7e9951c5028f45.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/32ffcd7a2401299d3cf81cedcd5f18a6.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/46079f2a2b032aaabe1d75e3fbfd109e.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/04f7559bb0925b11875cbd934cc0c230.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8596b3d0ea8b9d0df3426b6070c5aa8b.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/39521aa052f5030b2e59e7093a9310d8.png">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/7f410863e0f39de3b49fe4730f44b9e4.png">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">Об отеле</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        Отель «Ю�&nbsp;ЬЕВСКОЕ ПОДВО�&nbsp;ЬЕ» — единственный отель в Великом Новгороде, который имеет
                        такое уникальное расположение. Он находится в лесопарковой зоне, вокруг леса, поля, озёр
                        (Ильмень и Мячино) и Юрьевского Монастыря, построенного князем Ярославом Мудрым в 1030 году.
                        Напротив отеля расположен музей деревянного зодчества под открытым небом «Витославлицы»,
                        обязательный для посещения и погружения в новгородский быт и традиции!
                      </p>
                      <p>
                        Любой вид размещения на ваш утонченный вкус: гостиничные номера разных категорий, апартаменты,
                        глэмпинги и современные избы. В каждом прослеживаются нотки русской тематики в современном
                        прочтении.
                      </p>
                      <p>
                        Территория комплекса:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>Семейный дом «Красна изба»;</li>
                        <li>Главный корпус с 20 комфортабельными номерами разных категорий;</li>
                        <li>�&nbsp;есторан и летняя веранда;</li>
                        <li>Летний ресторан;</li>
                        <li>�&nbsp;усская баня на дровах и уличная банная зона;</li>
                        <li>7 глэмпингов;</li>
                        <li>5 изб;</li>
                        <li>Эко-тропа с домами для насекомых;</li>
                        <li>Зоны отдыха: гамаки, фото-локации, яблоневый сад. </li>
                      </ul>
                      <p>
                      </p>
                      <p>
                        «Юрьевское Подворье» — это семейный проект, сделанный с большой любовью к каждой детали. Здесь
                        вы окунетесь в уютное сказочное девство, русское ремесло, почувствуете себя как «в деревне у
                        бабушки», где вам всегда рады, где вам уютно, безопасно и тепло. Потрясающая природа и
                        энергетика этого места позволят отбросить все лишнее и предаться созиданию прекрасного. А наше
                        продуманное пространство с вкусным питанием, пением птиц за окном и внимательным сервисом
                        сделают отдых комфортным и гармоничным для каждого гостя.
                      </p>
                      <h3>
                        Банный Spa-комплекс «Юрьевское подворье» </h3>
                      <p>
                        Наша баня – для настоящего отдыха, крепкого здоровья, сильного иммунитета и душевного
                        спокойствия. Банный комплекс с просторной парной, уличным банным комплексом с сибирским чаном на
                        дровах и зоной отдыха.
                      </p>
                      <p>
                        Авторские методики наших пармастеров позволят вам по-настоящему отдохнуть телом и душой.
                      </p>
                      <h3>
                        Глэмпинговый городок </h3>
                      <p>
                        Здесь находятся семь комфортабельных глэмпингов с видом на лес и пять изб с видом на яблоневый
                        сад. Концепция, которая лежит в основе домов в лесной зоне, отвечает запросам тех людей, кто
                        ищет уединение, спокойствие и отдых. Это особая атмосфера, в которую хочется возвращаться. Она
                        сложилась из синергии окружающей природы, уникального месторасположения вокруг святых мест и
                        внутреннего наполнения отеля: чистый воздух, продуманный дизайн с использованием спокойных
                        оттенков, натуральных материалов, удобных матрасов для качественного восстановления сна, вкусной
                        натуральной еды.
                      </p>
                      <p>
                        Также в комплексе Вас ждут:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>Гастро-лавка с продуктами собственного производства;</li>
                        <li>Собственная сыроварня;</li>
                        <li>Поляны для активного отдыха;</li>
                        <li>Детская зона;</li>
                        <li>Мини-зоопарк;</li>
                        <li>Организация экскурсий;</li>
                        <li>Приём автокемпингов (караванов). </li>
                      </ul>
                      <p>
                      </p>
                      *Скидка по программе «Карта гостя Новгородской области» предоставляется только при бронировании
                      непосредственно через отель.<br>
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

                          <form id="review-form" class="review-form" action="/hotels/butik-otel-yurevskoe-podvore/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="XXaeMHw7RqRhXKto5IulFw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="/+LIOlVKFzaGy3vdhKeyKQ==">
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