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
                            center: [58.523759, 31.265529],
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
                          <td class="val">
                            <a class="no-ul" href="tel:+7 (8162) 78-88-87">+7 (8162) 78-88-87</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">Сайт:</td>
                          <td class="val">
                            <a href="http://marusya.rest/" target="_blank">marusya.rest/</a><br>
                            <a href="http://vk.com/marusya.rest" target="_blank">vk.com/marusya.rest</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">Адрес:</td>
                          <td class="val">Великий Новгород, Предтеченская ул. 24, </td>
                        </tr>
                        <tr>
                          <td class="name">GPS-координаты:</td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.523759,31.265529"
                              class="gps-block">
                              <span> 58.523759,31.265529 </span>
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
                          data-lazy="images/1781cc3c503c17fe8aaf47386f364ad1.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1a0615a55c4df129ae4ca3b63a7d32a4.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/db26ffe425c0d53c5e062f2bbc62ccdd.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9ba7d480941c3af8a0ff112beaac3ad.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/473b13ec33820be651ca63a026f980b0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/10133f089994298da61cbaffdf6c7ca6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/242057521beb767f84300ce9981fc0ee.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c8b9d58631f20338a65c30c7ec90ceba.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9292842454e9e4d877db4d6691f498c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/493bf11c9d25fe2776cfe17c565beaba.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d6b56a144b1e19bd4aad0822cb05e496.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/db44141719c9e487bf8a83e5898bd6cd.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/7f07678437122b246517c1e644d42947.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/551db6eddf6288f8ae5b4d77ac5605da.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c51f868557462e752a1e8aa64c2ea57f.JPG">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/17d040782723d3bc7217f360243bf346.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/01c1abcf55116f82c5c1af8784157514.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f488c591aaf192d49ee57ff14a265b8f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/be5c59f632998b20315c0a6208359452.JPG">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ab103432080f4684df92415b7a660d9c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/cb34f28895aea48eaaf0edc4c7250d06.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/8c6c48ad97423dd90a1141d255a7fe09.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b6aebdb8f37a02278054412a65a5d44d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b92afcbe199b2f2627626c213c8a7edd.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/1781cc3c503c17fe8aaf47386f364ad1.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1a0615a55c4df129ae4ca3b63a7d32a4.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/db26ffe425c0d53c5e062f2bbc62ccdd.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9ba7d480941c3af8a0ff112beaac3ad.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/473b13ec33820be651ca63a026f980b0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/10133f089994298da61cbaffdf6c7ca6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/242057521beb767f84300ce9981fc0ee.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c8b9d58631f20338a65c30c7ec90ceba.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c9292842454e9e4d877db4d6691f498c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/493bf11c9d25fe2776cfe17c565beaba.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d6b56a144b1e19bd4aad0822cb05e496.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/db44141719c9e487bf8a83e5898bd6cd.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/7f07678437122b246517c1e644d42947.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/551db6eddf6288f8ae5b4d77ac5605da.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c51f868557462e752a1e8aa64c2ea57f.JPG">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/17d040782723d3bc7217f360243bf346.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/01c1abcf55116f82c5c1af8784157514.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f488c591aaf192d49ee57ff14a265b8f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/be5c59f632998b20315c0a6208359452.JPG">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ab103432080f4684df92415b7a660d9c.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/cb34f28895aea48eaaf0edc4c7250d06.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/8c6c48ad97423dd90a1141d255a7fe09.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b6aebdb8f37a02278054412a65a5d44d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/b92afcbe199b2f2627626c213c8a7edd.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        �&nbsp;есторан MARUSYA — ресторан в самом сердце Великого Новгорода и гастро-проект, наполненный
                        литературным вкусом, авторской кухней, театральными подачами, яркими событиями и душой, полной
                        авантюризма и любви к еде и искусству, где каждый ужин имеет свой смысл и свою историю.
                      </p>
                      <p>
                        Авторская фьюжн-кухня, адаптированная под культуру Новгородской земли, вдохновлённая литературой
                        и спектаклем у столика. Вас ждут интересные сочетания ингредиентов, обширная барная карта и
                        разнообразное меню.
                      </p>
                      <p>
                        В программе ресторана интересные гастрономические мероприятия:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>Театрально-гастрономические представления;</li>
                        <li>
                          Гастрономические представления и батлы;</li>
                        <li>
                          Интеллектуальные вечера на разные актуальные темы;</li>
                        <li>
                          Музыкальные вечера с артистами и музыкантами;</li>
                        <li>
                          Вечера кухонь мира;</li>
                        <li>
                          Ужины с сомелье;</li>
                        <li>
                          Детские мастер-классы: творческие, кулинарные (каждое воскресенье). </li>
                      </ul>
                      <div>
                        <b>*Скидка 10%</b><b> по Карте гостя</b> на основное меню ресторана "Marusya"<br>
                      </div>
                      <ul>
                      </ul>
                      <p>
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

                          <form id="review-form" class="review-form" action="/restaurants/restoran-marusya-marusya/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="ZENKUOsUEsT/Q7i9sxBZ9w==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="Bahk5FLDFK1kztnpHNzY9A==">
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
                        <p class="review-smalltext">04.11.2022 17:44:38</p>
                        <span class="review-smalltext">Дармус Анна Геннадьевна</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Очень вкусные щечки теленка. Всем советую. Голосую за Марусю!</p>
                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">04.11.2022 17:44:49</p>
                        <span class="review-smalltext">Васильев Дмитрий Семёнов</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Кулебяка с белорыбицей просто восхитительна! Советую этот ресторан!</p>
                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">04.11.2022 17:45:13</p>
                        <span class="review-smalltext">Абрамович Геннадий Асексеевич </span>
                        <p>Достойное блюдо " телячьи щёчки с растушенной брусекой и сливой" просто тает во рту! </p>
                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">05.11.2022 20:36:51</p>
                        <span class="review-smalltext">�&nbsp;умянцева Маргарита Анатольевна</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Божественно.. Лучшее что пробовал в В. Новгороде</p>
                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">05.11.2022 20:58:53</p>
                        <span class="review-smalltext">Alla Korshunova</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Великолепные, нежнейшие, божественные телячьи щёчки!!! Получили гастрономическое
                          удовольствие, буквально пребываем в экстазе </p>
                        <a class="fancy-review" href="images/dc19adaee8fb183cc30ae40f50a8f4f2.jpg">
                          <img src="images/dc19adaee8fb183cc30ae40f50a8f4f2.jpg" alt="review image">
                        </a>

                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">05.11.2022 21:08:22</p>
                        <span class="review-smalltext">Ольга</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Блюдо телячьи щечки с распущенной брусникой и сливой. Щечки мягкие, вкус насыщенный, брусника
                          и слива имеют приятный и нежный вкус. Соуса достаточно. Браво повару! �&nbsp;екомендую! </p>
                        <a class="fancy-review" href="images/cd447331f1c79d1fbb173d9f97c3ca70.jpg">
                          <img src="images/cd447331f1c79d1fbb173d9f97c3ca70.jpg" alt="review image">
                        </a>

                      </div>



                      <div class="review-block">
                        <p class="review-smalltext">06.11.2022 18:28:25</p>
                        <span class="review-smalltext">Авдонина Марина Игоревна </span>
                        <span class="rateit" data-rateit-value="1" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Приятное, уютное место с вкусной едой </p>
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