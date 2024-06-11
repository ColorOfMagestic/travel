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
                            center: [57.92849, 33.1787],
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
                          <td class="val"><a class="no-ul" href="tel:+7 952 488-50-00">+7 952 488-50-00</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/public211309518" target="_blank">vk.com/public211309518</a><br>
                            <a href="http://truvor.camp" target="_blank">truvor.camp</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:welcome@truvor.camp">welcome@truvor.camp</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">诺夫哥罗德州瓦尔代区科洛茨科定居点 70号 (波洛西村)</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="57.92849,33.1787" class="gps-block">
                              <span> 57.92849,33.1787 </span>
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
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><img
                              data-lazy="images/fc767dbb2384c58f0e3deac4aeb3346d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/adf1e0ce71e051903e7802ddb51367d3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9e8e4bfc186b5c6b1920955d67ad1e62.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9851e549e3d9aa0eb5d532f004ec9d42.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/15dc3d0237b5ae39a45641863f32f8f9.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5903e28be844bb4fd21e7bf3ac1e2d11.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9602b3d8a4d535429c94092c78a1ff16.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a5355ab1554f2770e4a943fae3403fcb.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/dd09cd38354aa9a46e44e0b252092522.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b837f8da65e168446914a0ce782862b4.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9b9401bd5afaf3a2b1bed0e0f4f31ad1.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/2458b6663bed057c5667a500b6ab04da.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e178b05b3e5a54edd3be8b7b88bb62be.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/4f730711337e694b3932309b3a1ce529.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eb71cfe08fb808fca27011eec5ee6a9f.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/fc767dbb2384c58f0e3deac4aeb3346d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/adf1e0ce71e051903e7802ddb51367d3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9e8e4bfc186b5c6b1920955d67ad1e62.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9851e549e3d9aa0eb5d532f004ec9d42.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/15dc3d0237b5ae39a45641863f32f8f9.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/5903e28be844bb4fd21e7bf3ac1e2d11.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9602b3d8a4d535429c94092c78a1ff16.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/a5355ab1554f2770e4a943fae3403fcb.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/dd09cd38354aa9a46e44e0b252092522.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/b837f8da65e168446914a0ce782862b4.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/9b9401bd5afaf3a2b1bed0e0f4f31ad1.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/2458b6663bed057c5667a500b6ab04da.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e178b05b3e5a54edd3be8b7b88bb62be.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/4f730711337e694b3932309b3a1ce529.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eb71cfe08fb808fca27011eec5ee6a9f.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">О глэмпинге</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <div>
                        <br>
                        “特鲁沃尔”豪华露营不仅仅是一个风景优美的地方。这是一种个性的风格，一种被遗迹松林包围的美学。
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                      谢列代斯基湖畔舒适时尚的房子。新鲜空气，鸟儿的歌声和绝对的寂静。这里有舒适度假的所有设施。睡眠区，烧烤区，帐篷屋，遗迹松林。森林以其童话般的美丽而迷人！ <br>
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                      有全景玻璃的房子。配备舒适住宿所需的一切。它们营造出与自然统一和绝对舒适的感觉。
                      </div>
                      <br>
                      <div>
                      露营地位于瓦尔代国家公园的领土上。从这里开始您的旅程，沿着最长的步行生态路线<a target="_blank"
                          href="https://novgorod.travel/guides/priroda/valdayskiy-kray/">“大瓦尔代小径”。</a>.
                      </div>
                      <br>
                      <div>
                        <b>如何到达 </b><br>
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                      沿着M10高速公路从莫斯科向圣彼得堡行驶。在388公里处左转。
                        <p>
                        从圣彼得堡搬到莫斯科。在313公里处右转。
                        </p>
                        <p>
                        地标是科洛茨科定居点。行驶5.9公里，直到在塞雷德亚村转弯，然后右转。继续行驶3.6公里。再右转，到波洛西村。再走1.3公里。沿着谢列戴斯科湖的标志左转。
                        </p>
                      </div>
                      <p></p>
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

                          <form id="review-form" class="review-form" action="/hotels/truvor-glamping-glemping-truvor/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="UltksL4akCzpXz5iLk17cw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="ReWpE/Ec1jDBkBNtvS4BEA==">
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