<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
    <!-- main -->
    <div class="page-wrapper" style="background-image: url(../images/page-wrapper-bg.jpg);">
      <div class="container">
        <div class="page-wrapper-top">
          <div class="row">
            <div class="col-xs-12 col-sm-4 pull-right">
              <div class="page-sidebar page-sidebar-r">
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
                            center: [58.654385, 34.06841],
                            zoom: 13
                          }, {}),

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
                          <td class="name">电话:</td>
                          <td class="val">
                            <a class="no-ul" href="tel:+7 (921) 737-13-75">+7 (921) 737-13-75</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站:</td>
                          <td class="val">
                            <a href="https://novgorodmuseum.ru/muzei/muzej-usadba-a.v.-suvorova-v-s.-konchanskoe"
                              target="_blank">novgorodmuseum.ru/muzei/muzej-usadba-a.v.-suvorova-v-s.-konchanskoe</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">Новгородская область, Боровичский район, с. Кончанско-Суворовское ул.
                            Центральная, 19</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标:</td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.654385,34.06841" class="gps-block">
                              <span> 58.654385,34.06841 </span>
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
            </div>
            <div class="col-xs-12 col-sm-8">
              <div class="page-content">


                <div class="section-expandable">
                  <div class="h2">资料描述</div>
                  <div class="section-expandable-content">
                    <p>
                      诺夫哥罗德省博罗维奇区孔昌斯科耶村的庄园由亚历山大·瓦西里耶维奇·苏沃洛夫继承。指挥官生命的最后几年主要与村庄有关。1797-1799年，他在这里流亡。
                    </p>
                    <p>
                      伟大统帅故居博物馆于1942年10月25日在卫国战争期间在这里开放。现在，该博物馆是一座18世纪的历史和建筑庄园建筑群。博物馆旁边是一个广阔的公园。庄园博物馆讲述了亚历山大·瓦西里耶维奇·苏沃洛夫在孔昌斯基生活期间的生活。关于他的经济活动和与农民的关系。博物馆展示了当时地主的生活方式。展品中有庄园的真品。展出了苏沃洛夫时代的家具、肖像、雕塑、版画、文件等等。博物馆庄园开放参观亚历山大·瓦西里耶维奇·苏沃洛夫庄园博物馆、厨房附属建筑、前石头教堂建筑中的“意大利-瑞士之旅”展览。
                    </p>
                    <p>
                      从5月到9月，你可以参观指挥官的避暑别墅和杜比哈山上的一口井。展览在圣亚历山大·涅夫斯基木制教堂大楼开幕。展览致力于孔昌斯科耶-苏沃洛夫斯科耶农寺庙的历史。他于1899-1900年被运到圣彼得堡。
                    </p>
                  </div>
                </div>

                <div class="section-expandable">
                  <div class="h2">照片廊</div>
                  <div class="section-expandable-content">
                    <div class="photo-slider-wrapper">
                      <div class="photo-slider">
                        <div class="slide"><a class="fancybox" href="images/14c857af46c4a5ffedd5e624de4a5e5a.jpg"><img
                              data-lazy="images/14c857af46c4a5ffedd5e624de4a5e5a.jpg"></a>
                        </div>
                      </div>
                      <div class="photo-slider-thumbs">
                        <div class="slide"><img data-lazy="images/14c857af46c4a5ffedd5e624de4a5e5a.jpg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section-expandable">
                  <div class="h2">还有什么可看的</div>
                  <div class="section-expandable-content">
                    <div class="objects-list-wrapper">
                      <div class="objects-list">
                        <div class="tr">
                          <div class="object-tmb">
                            <a href="../vladychnaya-granovitaya-palata/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/4068fd171a44140c8ba6c2ab8ef0f92e.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num free_price">免费</div>
                                    <div class="object-info-ttl">根据客人的卡</div>
                                  </div>

                                </div>
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 185.5px;">
                              <ul class="object-tmb-tags">
                                <li>博物馆</li>
                                <li>
                                  <a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a>
                                </li>
                              </ul>
                              <a href="../vladychnaya-granovitaya-palata/">
                                <div class="h3"><span>君主宫殿 (多棱宫)</span></div>
                                <div class="object-tmb-text">
                                  <p></p>
                                </div>
                              </a>
                            </div>


                          </div>
                          <div class="object-tmb">
                            <a href="../kreml/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/16cc97a42a2f24d2b4f91ca56f878467.jpg);">
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 219.5px;">
                              <ul class="object-tmb-tags">
                                <li>本地景点</li>
                                <li>
                                  <a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a>
                                </li>
                              </ul>
                              <a href="../kreml/">
                                <div class="h3"><span>诺夫哥罗德克里姆林宫 (宫城)</span></div>
                                <div class="object-tmb-text">
                                  <p></p>
                                </div>
                              </a>
                            </div>


                          </div>
                        </div>
                        <div class="tr">
                          <div class="object-tmb">
                            <a href="../muzey-kolokolov/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/53cd92d6113f26dfd21232f31321ca41.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num free_price">免费</div>
                                    <div class="object-info-ttl">根据客人的卡</div>
                                  </div>

                                </div>
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 119.5px;">
                              <ul class="object-tmb-tags">
                                <li>博物馆</li>
                                <li>
                                  <a href="/cities/valda/">瓦尔代</a>
                                </li>
                              </ul>
                              <a href="../muzey-kolokolov/">
                                <div class="h3"><span>钟声博物馆</span></div>
                                <div class="object-tmb-text">
                                  <p></p>
                                </div>
                              </a>
                            </div>


                          </div>
                          <div class="object-tmb">
                            <a href="../muzey-narodnogo-derevyannogo-zodchestva-vitoslavlitsy/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/5fd656cc751b38bc8c8b412ccaa5b153.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num free_price">免费</div>
                                    <div class="object-info-ttl">根据客人的卡</div>
                                  </div>

                                </div>
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 185.5px;">
                              <ul class="object-tmb-tags">
                                <li>博物馆</li>
                                <li>
                                  <a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a>
                                </li>
                              </ul>
                              <a href="../muzey-narodnogo-derevyannogo-zodchestva-vitoslavlitsy/">
                                <div class="h3"><span>《维托斯拉夫齐》
                                    民间木结构建筑博物馆
                                  </span></div>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tr">
                          <div class="object-tmb">
                            <a href="../ryurikovo-gorodishche/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/e218fdadd81dc37ea881d55e4d09e40c.jpg);">
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 161.5px;">
                              <ul class="object-tmb-tags">
                                <li>博物馆</li>
                                <li>
                                  <a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a>
                                </li>
                              </ul>
                              <a href="../ryurikovo-gorodishche/">
                                <div class="h3"><span>留里克古城遗迹</span></div>
                                <div class="object-tmb-text">
                                  <!-- <p>Церковь Благовещения стала вторым каменным храмом, построенным после Софийского собора
                                - историки датируют ее 1103 годом.</p> -->
                                </div>
                              </a>
                            </div>


                          </div>
                          <div class="object-tmb">
                            <a href="../iverskiy-bogoroditskiy-svyatoozerskiy-monastyr/">
                              <div class="object-tmb-pic"
                                style="background-image:url(../images/fd319c8247c71184a4cc77a544dc0d31.jpg);">
                              </div>
                            </a>


                            <div class="object-tmb-descr" style="min-height: 119.5px;">
                              <ul class="object-tmb-tags">
                                <li>教堂和修道院</li>
                                <li>
                                  <a href="/cities/valda/">瓦尔代</a>
                                </li>
                              </ul>
                              <a href="../iverskiy-bogoroditskiy-svyatoozerskiy-monastyr/">
                                <div class="h3"><span>伊维尔斯基·博戈罗季茨基·斯维亚托泽尔斯基修道院</span></div>
                                <div class="object-tmb-text">
                                  <p></p>
                                </div>
                              </a>
                            </div>


                          </div>


                        </div>
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

                        <form id="review-form" class="review-form" action="/guides/muzei/muzey-zapovednik-a-v-suvorova/"
                          method="post" enctype="multipart/form-data">
                          <input type="hidden" name="sessid" id="sessid" value="9343094164c4a8eba60846e2031f1e32">
                          <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="qV3c7MIP2RxpbtwsaPBzew==">

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
                          <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="FRBLd4wfE/UBuGh4ffYqVw==">
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


    <?php require_once ('../template/footer-inner.php') ?>