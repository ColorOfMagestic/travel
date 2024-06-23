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
                <div class="page-sidebar page-sidebar-r">
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
                              center: [58.521723, 31.274434],
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
                              <a class="no-ul" href="tel:+7 (8162) 77-37-70">+7 (8162) 77-37-70</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">网站:</td>
                            <td class="val">
                              <a href="https://novgorodmuseum.ru" target="_blank">novgorodmuseum.ru</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">地址:</td>
                            <td class="val">大诺夫哥罗德, Новгородский кремль</td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="58.521723,31.274434" class="gps-block">
                                <span> 58.521723,31.274434 </span>
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
                      根据编年史，诺夫哥罗德克里姆林宫（宫城）是由弗拉基米尔·雅罗斯拉维奇王子于1044年建立的，最初占地面积比现在小。
                      </p>
                      <p>
                      它的防御工事是用木头和泥土建造的。后来，堡垒被扩建了。在14-15世纪，建造了石头防御工事而不是木制防御工事。现存的城墙和塔楼建于15世纪晚期。
                      </p>
                      <p>
                      根据伊凡三世大公的命令建造。随后，一些塔楼和部分城墙被重建、修复。在最初的十二座塔中，有九座幸存了下来。目前，克里姆林宫城墙的长度约为一公里半。
                      </p>
                      <p>
                      堡垒占地12公顷多一点。1992年，诺夫哥罗德克里姆林宫合奏团与防御结构和内部建筑一起成为联合国教科文组织世界文化遗产。
                      </p>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox"
                              href="images/2a7023544b8595901cbc512644a8c302.jpg"><img
                                data-lazy="images/2a7023544b8595901cbc512644a8c302.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/2a352bc9436637ab273981526fd2e037.jpg"><img
                                data-lazy="images/2a352bc9436637ab273981526fd2e037.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/69be390e68e0ca8e1fa7f78647c0d44f.jpg"><img
                                data-lazy="images/69be390e68e0ca8e1fa7f78647c0d44f.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/dedac4f48ad99185def2a5d2010375be.jpg"><img
                                data-lazy="images/dedac4f48ad99185def2a5d2010375be.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/3afb175d44dfc17d726f3ff1774fdd47.jpg"><img
                                data-lazy="images/3afb175d44dfc17d726f3ff1774fdd47.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/4a382129a60b769f844ed64554f76436.jpg"><img
                                data-lazy="images/4a382129a60b769f844ed64554f76436.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/239cfba18f8ebaab7085d38597a0f079.jpg"><img
                                data-lazy="images/239cfba18f8ebaab7085d38597a0f079.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/0b458fda0b48c24c0dd123c43144d0ac.jpg"><img
                                data-lazy="images/0b458fda0b48c24c0dd123c43144d0ac.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/6ecb243430fc5df3aa6c04da1555e5ca.jpg"><img
                                data-lazy="images/6ecb243430fc5df3aa6c04da1555e5ca.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img
                              data-lazy="images/2a7023544b8595901cbc512644a8c302.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/2a352bc9436637ab273981526fd2e037.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/69be390e68e0ca8e1fa7f78647c0d44f.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/dedac4f48ad99185def2a5d2010375be.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/3afb175d44dfc17d726f3ff1774fdd47.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/4a382129a60b769f844ed64554f76436.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/239cfba18f8ebaab7085d38597a0f079.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/0b458fda0b48c24c0dd123c43144d0ac.jpg">
                          </div>
                          <div class="slide"><img
                              data-lazy="images/6ecb243430fc5df3aa6c04da1555e5ca.jpg">
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
                              <a href="../dom-muzey-f-m-dostoevskogo/">
                                <div class="object-tmb-pic"
                                  style="background-image:url(../images/8eb82eddaa3ea05ae8332d52eaf7b096.jpg);">
                                  <div class="object-tmb-info">


                                    <div class="object-tmb-info-item">
                                      <div class="object-info-num free_price">免费</div>
                                      <div class="object-info-ttl">根据客人的卡</div>
                                    </div>

                                  </div>
                                </div>
                              </a>


                              <div class="object-tmb-descr" style="min-height: 161.5px;">
                                <ul class="object-tmb-tags">
                                  <li>博物馆</li>
                                  <li>
                                    <a href="/cities/staraya-russa/">旧鲁萨</a>
                                  </li>
                                </ul>
                                <a href="../dom-muzey-f-m-dostoevskogo/">
                                  <div class="h3"><span>奥多尔*米哈伊洛维奇*陀思妥耶夫斯基故居博物馆</span></div>
                                  <div class="object-tmb-text">
                                    <p></p>
                                  </div>
                                </a>
                              </div>


                            </div>
                            <div class="object-tmb">
                              <a href="../sofiyskiy-sobor/">
                                <div class="object-tmb-pic"
                                  style="background-image:url(../images/b5adfb9489ebe62f39c24651ab78dd74.jpg);">
                                </div>
                              </a>


                              <div class="object-tmb-descr" style="min-height: 183.5px;">
                                <ul class="object-tmb-tags">
                                  <li>教堂和修道院</li>
                                  <li>
                                    <a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a>
                                  </li>
                                </ul>
                                <a href="../sofiyskiy-sobor/">
                                  <div class="h3"><span>索非亚大教堂</span></div>
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
                              <a href="../muzey-zapovednik-a-v-suvorova/">
                                <div class="object-tmb-pic"
                                  style="background-image:url(../images/43d6fa9cf6170dadf271ad3d46100f33.jpg);">
                                </div>
                              </a>


                              <div class="object-tmb-descr" style="min-height: 207.5px;">
                                <ul class="object-tmb-tags">
                                  <li>博物馆</li>
                                  <li>
                                    <a href="/cities/borovichi/">博罗维奇</a>
                                  </li>
                                </ul>
                                <a href="../muzey-zapovednik-a-v-suvorova/">
                                  <div class="h3"><span>孔昌斯科耶-苏沃洛夫斯科耶农村
                                      亚历山大·瓦西里耶维奇·苏沃洛夫庄园博物馆
                                    </span></div>
                                  <div class="object-tmb-text">
                                    <p></p>
                                  </div>
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

                          <form id="review-form" class="review-form" action="/guides/kultura/kreml/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="9343094164c4a8eba60846e2031f1e32">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="9X6NY6QGfdUV3aWSMSpZXw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="g1CxAvR36eW5NtsuLxK5TQ==">
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