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
                            center: [58.485238, 31.28003],
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
                            <a class="no-ul" href="tel:+7 (8162) 90-98-98">+7 (8162) 90-98-98</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://https://vk.com/goose_vn" target="_blank">https://vk.com/goose_vn</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">173007大诺夫哥罗德市尤里耶夫斯科耶大街 15号</td>
                        </tr>
                        <tr>
                          <td class="name">工作时间:</td>
                          <td class="val">每天 с 11:00 до 23:00</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.485238,31.28003" class="gps-block">
                              <span> 58.485238,31.28003 </span>
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
                          data-lazy="images/01cf49ec4892bee580c1a15ef097e954.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/71fd46b7fc0c9fc9f5ccd1c9bc3dabe1.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5f09b8c8ce74828f05766078b0a5b97b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e7b278aaf493a335550ba79996de854f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/958355bdf756282155747ab6c76ddd04.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/772d8adcf3cb88a7dfd72c838369c529.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/01cf49ec4892bee580c1a15ef097e954.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/71fd46b7fc0c9fc9f5ccd1c9bc3dabe1.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5f09b8c8ce74828f05766078b0a5b97b.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e7b278aaf493a335550ba79996de854f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/958355bdf756282155747ab6c76ddd04.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/772d8adcf3cb88a7dfd72c838369c529.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                      “饱鹅”咖啡馆餐厅是具有传统风味的农民、乡村、贵族菜肴。在现代烹饪技术的条件下烹制。菜单的多样性不会让即使是真正的美食家无动于衷。热烤箱菜，小吃，蜂蜜酒，作者厨师表演的菜肴。
                      </p>
                      <p>
                      </p>
                      <p>
                      该机构是在“维托斯拉夫利茨”民间木制建筑博物馆全面修复的框架内开放的。
                      </p>
                      <p>
                      </p>
                      <p>
                      欢迎您来吃“饱鹅”！你可能会觉得自己在期待已久的假期里。同时，您无需离开大诺夫哥罗德。推荐奶油银耳汤。我们配上烤狐狸和松露油。
                      </p>
                      <p>
                      *根据俄罗斯客人诺夫哥罗德的卡片，赠送一杯自制格瓦斯或诺夫哥罗德蜂蜜酒。 <br>
                      </p>
                      <p>
                        <br>
                      </p>
                      <p></p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">Меню</div>
                    <div class="section-expandable-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6" id="bx_1454625752_20410">
                          <a class="rest-menu-tmb" href="menu/780411a96cc22ece883d2e9534ec2de4.pdf"
                            target="_blank">
                            <div class="rest-menu-tmb-pic">
                            <svg class="rest-menu-tmb-svg" width="361" height="281">
                                <image class="rest-menu-tmb-img" width="361" height="281"
                                  xlink:href="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"
                                  src="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"></image>
                              </svg>
                            </div>
                            <div class="rest-menu-tmb-descr">
                              <div class="ttl">
                                <div class="ico ico-rest-pdf"></div>
                                <div class="text">Согревающие напитки Сытого Гуся</div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="bx_1454625752_20409">
                          <a class="rest-menu-tmb" href="menu/122db21c63b51e390a467f7afea48061.pdf"
                            target="_blank">
                            <div class="rest-menu-tmb-pic">
                            <svg class="rest-menu-tmb-svg" width="361" height="281">
                                <image class="rest-menu-tmb-img" width="361" height="281"
                                  xlink:href="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"
                                  src="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"></image>
                              </svg>
                            </div>
                            <div class="rest-menu-tmb-descr">
                              <div class="ttl">
                                <div class="ico ico-rest-pdf"></div>
                                <div class="text">Коктейли Сытого Гуся</div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="bx_1454625752_20408">
                          <a class="rest-menu-tmb" href="menu/9910378d7f4a906ecf9375dde894b276.pdf"
                            target="_blank">
                            <div class="rest-menu-tmb-pic">
                              <svg class="rest-menu-tmb-svg" width="361" height="281">
                                <image class="rest-menu-tmb-img" width="361" height="281"
                                  xlink:href="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"
                                  src="images/7af7d0c7bd310c50ec6cc395334e095f.jpg"></image>
                              </svg>
                            </div>
                            <div class="rest-menu-tmb-descr">
                              <div class="ttl">
                                <div class="ico ico-rest-pdf"></div>
                                <div class="text">Меню Сытого Гуся</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
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

                          <form id="review-form" class="review-form"
                            action="/restaurants/sytyy-gus-kafe-restoran-russkoy-kukhni/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="tGXdluEJss/aLtYcq24vPg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="NTIBBFReskxXFLCfoWKHOw==">
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
                        <p class="review-smalltext">20.02.2023 21:56:34</p>
                        <span class="review-smalltext">Надежда Олейникова</span>
                        <span class="rateit" data-rateit-value="5" data-rateit-ispreset="true"
                          data-rateit-readonly="true"></span>
                        <p>Здравствуйте! Спасибо за обед в прошедшую пятницу. Всей семье понравились выбранные блюда.
                          Внук заказал бабушке молочный коктейль- он красиво оформлен цветком из мороженного,.
                          Питательно, вкусно. Честно скажу только десерт долго не приносили. Пожелание быть всегда на
                          этом уровне.</p>
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