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
                    <div class="btn-object-map"><span>在地图上查看</span></div>
                  </div>
                  <div class="sidebar-object-map">
                    <div class="close"></div>
                    <div class="object-map" id="objectMap"></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", function (event) {
                        ymaps.ready(function () {
                          var myMap = new ymaps.Map('objectMap', {
                            center: [58.7937240214, 33.382286310237],
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
                            <a class="no-ul" href="tel:+7-921-093-53-53">+7-921-093-53-53</a>
                            , <a class="no-ul" href="tel:+7-921-093-35-35">+7-921-093-35-35</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://lybhutor.ru" target="_blank">lybhutor.ru</a><br>
                            <a href="http://vk.com/hutorok53" target="_blank">vk.com/hutorok53</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:lyb-xutor@yandex.ru">lyb-xutor@yandex.ru</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">柳比蒂诺区博尔村129号</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.7937240214,33.382286310237"
                              class="gps-block">
                              <span> 58.7937240214,33.382286310237 </span>
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
                          data-lazy="images/2358866de99a6697462db6e31126def9.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/a8624ab27ffb40deedc09782fba7eb16.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d74a68cd7fb8b85221410c92ad9372c0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/355bdfd00e4e1a81287b93c286311dbf.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/55a5317ff459478fe88dc551c5fecd39.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ad5ccf7aede8f0b60849b655b128b10f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/fed078426123062a2a6bc80243fa7e81.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/bdef4b8cabe8b797bdaa35e3a13524e0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/97138a9db0902b001425bead2fb336af.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f6ddcd2255f60157c08921e71dda0e88.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c0ebdf348960996d9166a9328bb34872.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c8c9701c7406e8a63bb51da8c4409fe6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/2e8a615d285b367bcec2f337ad2711ce.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/2358866de99a6697462db6e31126def9.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/a8624ab27ffb40deedc09782fba7eb16.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d74a68cd7fb8b85221410c92ad9372c0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/355bdfd00e4e1a81287b93c286311dbf.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/55a5317ff459478fe88dc551c5fecd39.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ad5ccf7aede8f0b60849b655b128b10f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/fed078426123062a2a6bc80243fa7e81.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/bdef4b8cabe8b797bdaa35e3a13524e0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/97138a9db0902b001425bead2fb336af.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/f6ddcd2255f60157c08921e71dda0e88.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c0ebdf348960996d9166a9328bb34872.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/c8c9701c7406e8a63bb51da8c4409fe6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/2e8a615d285b367bcec2f337ad2711ce.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p>餐厅用天然农产品烹制美味的俄罗斯家常菜。菜单上有大杂烩和卷心菜。种类繁多的菜肴。在烧烤上煮的。手工饺子和饺子。
 <br></p>
                    </div>
                  </div>




                  <div class="share-links">
                    <div class="share-links-ttl">分享:</div>
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

                          <form id="review-form" class="review-form" action="/restaurants/restoran-lyubytino-khutor/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="N6jFEBKo1uSt5PNPu1JNxg==">

                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                  <label for="feedback_name">ФИО</label>
                                  <input type="text" name="name" id="feedback_name" required="">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                  <label for="feedback_email">电子邮件：</label>
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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="wcWJQWq9hSNSd8Yl/PGX8w==">
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
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <?php require_once ('../template/footer-inner.php') ?>