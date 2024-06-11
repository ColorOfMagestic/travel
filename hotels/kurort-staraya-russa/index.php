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
                            center: [57.986634, 31.366188],
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
                          <td class="val"><a class="no-ul"
                              href="tel:+7-812-245-36-98, (816-52) 410-41">+7-812-245-36-98, (816-52) 410-41</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://russa.amaks-kurort.ru " target="_blank">russa.amaks-kurort.ru </a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul"
                              href="mailto:strkurort@amaks-hotels.ru, sale.staraya-russa@yandex.ru">strkurort@amaks-hotels.ru,
                              sale.staraya-russa@yandex.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">旧鲁萨市米纳拉尔纳亚街62号18房间
                          </td>
                        </tr>
                        <tr>
                          <td class="name">工作时间:</td>
                          <td class="val">24小时</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="57.986634,31.366188" class="gps-block">
                              <span> 57.986634,31.366188 </span>
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
                              data-lazy="images/b1c8208965263205b475a39009e3fa25.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ffd44e21756b0a80b580187e96f32e7b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e2e187e82b04564fa3d14f49cfcb38a0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/2fd420c28392626eb66df5a4cd9b1150.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0ac63f22983b58d3cf25a4fda4e773ed.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/500335090cc75e7d467ef0807fb8e902.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8b8ea8ddeb0d540ae73959722391fd75.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/b1c8208965263205b475a39009e3fa25.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/ffd44e21756b0a80b580187e96f32e7b.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e2e187e82b04564fa3d14f49cfcb38a0.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/2fd420c28392626eb66df5a4cd9b1150.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0ac63f22983b58d3cf25a4fda4e773ed.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/500335090cc75e7d467ef0807fb8e902.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/8b8ea8ddeb0d540ae73959722391fd75.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">О курорте</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <div>
                      它在俄罗斯贵族、艺术家、贵族和沙皇姓氏的代表中受到广泛的需求。在此期间，他们因贫血、神经过度紧张而被送往“水”治疗。即使在忧郁和悲伤中。康复以沿着公园小径散步、每天饮用矿泉水的形式进行。这种疗法对许多人有帮助。让年轻的女士、轻骑兵和孩子们站起来。 <br>
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                      在苏联时期，基地度假继续工作和改进。新的治疗方法开始出现。健康基地不断更新。现在，“旧鲁萨”基地度假结合了过去几个世纪的现代基础设施和文化传统。<br>
                      </div>
                      <div>
                        <br>
                      </div>
                      <div>
                      他们去疗养院改善消化、呼吸系统和神经系统疾病的健康。由于该机构的特殊技术，您可以治愈神经症、压力、不孕、脊柱疼痛。
                      </div>
                      <br>
                      <div>
                      老罗斯泥巴和矿泉水对肥胖、胃炎、银屑病等疾病有很好的帮助。为了改善皮肤和头发的状况，选择了一个特殊程序的课程。
                      </div>
                      <br>
                      <br>
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

                          <form id="review-form" class="review-form" action="/hotels/kurort-staraya-russa/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="OgdG9yc7OxF7q/iXjO93hQ==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="lu0KHgfXpIS5SYUex2mDBQ==">
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