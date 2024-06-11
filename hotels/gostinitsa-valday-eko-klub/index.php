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
                            center: [57.936996, 33.248095],
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
                          <td class="val"><a class="no-ul" href="tel:(499) 136-35-36, +7 (903) 004-59-76">(499)
                              136-35-36, +7 (903) 004-59-76</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://valday-hotel.ru " target="_blank">valday-hotel.ru </a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:valdai-hotel@ya.ru">valdai-hotel@ya.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">瓦尔代ский район, дер. Короцко,
                            ул. Зеленая, 1</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="57.936996,33.248095" class="gps-block">
                              <span> 57.936996,33.248095 </span>
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
                              data-lazy="images/7c2d3d33966c129404f5e85bd616af42.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/3020333707fb64dc6fbd447c807ae64d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e82698638b9d30ae5e139b89de644a6d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/c0f087ec5856f048dc8b47605bbb6ccf.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/59c3591244a0a4ee47207bf66f878981.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/737ca26836f27647d446f3b7eea10d0f.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f98d4fc086b782f0bd2aa3436bc20bb3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f827d77840cbc5c72628182263238036.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/049d985450ff0f2b7bea0db6a695f6dc.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eabaed9b223733f2a62f1b1bea1263a6.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eea782eb3c598b8a9c7624e43299d76d.jpg">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/7c2d3d33966c129404f5e85bd616af42.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/3020333707fb64dc6fbd447c807ae64d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/e82698638b9d30ae5e139b89de644a6d.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/c0f087ec5856f048dc8b47605bbb6ccf.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/59c3591244a0a4ee47207bf66f878981.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/737ca26836f27647d446f3b7eea10d0f.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f98d4fc086b782f0bd2aa3436bc20bb3.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/f827d77840cbc5c72628182263238036.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/049d985450ff0f2b7bea0db6a695f6dc.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eabaed9b223733f2a62f1b1bea1263a6.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/eea782eb3c598b8a9c7624e43299d76d.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">关于酒店</div>
                    <div class="section-expandable-content">
                      <p><span ame="" width="100%" height="370" src="https://www.youtube.com/embed/x7ROZNx8c6Q"
                          frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen="">
                        </span></p>
                      <p>
                        Дом с 29 комфортабельными номерами и 11 коттеджей в эко-стиле.
                      </p>
                      <span ame="" width="100%" height="370" src="https://www.youtube.com/embed/x7ROZNx8c6Q"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                        <p>
                          Досуг:
                        </p>
                        <p>
                        </p>
                        <ul>
                          <li>
                            <p>
                              Музей ретро автомобилей:
                            </p>
                          </li>
                          <li>
                            <p>
                              �&nbsp;ыбалка;
                            </p>
                          </li>
                          <li>
                            <p>
                              ЭКО-веранда;
                            </p>
                          </li>
                          <li>
                            <p>
                              SPA-кабинет;
                            </p>
                          </li>
                          <li>
                            <p>
                              Плавучая баня, баня у ручья, травяная баня, фито-чан, сауна с купелью;
                            </p>
                          </li>
                          <li>
                            <p>
                              Бильярд;
                            </p>
                          </li>
                          <li>
                            <p>
                              Прокат водного инвентаря: аквапланер, лодки, катамараны, сапсерфинг и т.п.;
                            </p>
                          </li>
                          <li>
                            <p>
                              Прокат инвентаря для активного отдыха: велосипеды, палки для скандинавской ходьбы;
                            </p>
                          </li>
                          <li>
                            <p>
                              Затейная поляна: стрельба из лука, дарц и т.п.;
                            </p>
                          </li>
                          <li>
                            <p>
                              Инвентарь для активных игр: волейбол, бадминтон, футбол и т.п.;
                            </p>
                          </li>
                          <li>
                            <p>
                              Агротуризм;
                            </p>
                          </li>
                          <li>
                            <p>
                              Конюшня;
                            </p>
                          </li>
                          <li>
                            <p>
                              Экскурсии по Валдаю.
                            </p>
                          </li>
                        </ul>
                        <p>
                          Изюминка – подсобное хозяйство и продукция собственного производства: домашний сыр, яйца,
                          натуральный йогурт, охлажденное мясо гуся, утки, индейки...
                        </p>
                      </span>
                      <div>
                        <span ame="" width="100%" height="370" src="https://www.youtube.com/embed/x7ROZNx8c6Q"
                          frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen="">
                          Предприниматель и создатель бренда аксессуаров и украшений Gourji Дмитрий Гуржий начал
                          собирать машины из ностальгии и любви к дизайну времен ССС�&nbsp;. В его коллекции — все
                          легендарные произведения советского автопрома: от «горбатого» «Запорожца» до представительской
                          «Чайки», выкрашенной в нежно-розовый цвет.</span>
                      </div>
                      <div>
                        <span ame="" width="100%" height="370" src="https://www.youtube.com/embed/x7ROZNx8c6Q"
                          frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen=""><br>
                        </span>
                      </div>
                      <div>
                        *只有通过酒店直接预订时，才会享受诺夫哥罗德地区客人卡计划的折扣。
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

                          <form id="review-form" class="review-form" action="/hotels/gostinitsa-valday-eko-klub/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="10AzBQNvdSNZUznzvjtiyg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="Nu99wAv2WM8ewv2P6tV+Vg==">
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