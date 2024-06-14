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
                      <div class="btn-object-map"><span>Смотреть на карте</span></div>
                    </div>
                    <div class="sidebar-object-map">
                      <div class="close"></div>
                      <div class="object-map" id="objectMap"></div>
                      <script>
                        document.addEventListener("DOMContentLoaded", function (event) {
                          ymaps.ready(function () {
                            var myMap = new ymaps.Map('objectMap', {
                              center: [57.973911, 33.255539],
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
                            <td class="name">Телефон:</td>
                            <td class="val">
                              <a class="no-ul" href="tel:(816-66) 204-97">(816-66) 204-97</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">Сайт:</td>
                            <td class="val">
                              <a href="https://vk.com/muzei_valdaya" target="_blank">vk.com/muzei_valdaya</a><br>
                              <a href="https://novgorodmuseum.ru/muzei/muzej-kolokolov"
                                target="_blank">novgorodmuseum.ru/muzei/muzej-kolokolov</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">Адрес:</td>
                            <td class="val">Новгородская обл., г. Валдай, ул. Труда, 2а</td>
                          </tr>
                          <tr>
                            <td class="name">Время работы:</td>
                            <td class="val">пн., ср.-вс.: 10.00 – 18.00,
                              <br>выходные: вторник, последняя среда месяца
                            </td>
                          </tr>
                          <tr>
                            <td class="name">GPS-координаты:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="57.973911,33.255539" class="gps-block">
                                <span> 57.973911,33.255539 </span>
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
                    <div class="h2">Описание</div>
                    <div class="section-expandable-content">
                      <p>
                        钟声博物馆是诺夫哥罗德博物馆保护区的一个分支。位于圣凯瑟琳旅行宫教堂。
                      </p>
                      <p>
                        展览展示了不同国家的钟铸造材料，以及瓦尔代钟的历史。在这里，您可以了解教堂钟声、牧羊人钟声、马车夫钟声、办公室钟声、门钟声、船钟声、消防钟声、纪念品钟声和钟声的独特性。
                      </p>
                      <p>博物馆有自己的特色。在博物馆里，展品不仅可以看，还可以听。钟被放置在三个钟楼上。因此，参观者有机会听到博物馆工作人员演奏的钟声。查看铃声技术和技巧。试着给自己打电话。</p>
                      <p>博物馆的资金包括最著名的钟声的记录、有关钟声历史的材料和文献。博物馆的售货亭有各种各样的纪念品铃铛。</p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">Фотогалерея</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox" href="images/d4624acaccda6c73f69b8a9ff5e6ecc9.jpg"><img
                                data-lazy="images/d4624acaccda6c73f69b8a9ff5e6ecc9.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/321ef14bbcff064dd20685a8b30b035e.jpg"><img
                                data-lazy="images/321ef14bbcff064dd20685a8b30b035e.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/29eda374c0e87dde7db1a5032cdfab3e.jpg"><img
                                data-lazy="images/29eda374c0e87dde7db1a5032cdfab3e.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/8336101aa6b6e475bb5c065941ed7396.jpg"><img
                                data-lazy="images/8336101aa6b6e475bb5c065941ed7396.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/bfbd38d90a0cf9bc1e9c3109fb9fbfc5.jpg"><img
                                data-lazy="images/bfbd38d90a0cf9bc1e9c3109fb9fbfc5.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/88015a96bb04a68a07a409f5aaa27f6a.jpg"><img
                                data-lazy="images/88015a96bb04a68a07a409f5aaa27f6a.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/5908bb97eca0b48917977eae42d25b71.jpg"><img
                                data-lazy="images/5908bb97eca0b48917977eae42d25b71.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/c646937d7ecab3b5c14492f61af280f0.jpg"><img
                                data-lazy="images/c646937d7ecab3b5c14492f61af280f0.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/91156c3fe7e44beb14e8af8eac490615.jpg"><img
                                data-lazy="images/91156c3fe7e44beb14e8af8eac490615.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/7782cb018d954dcf5825b88498fa0ebb.jpg"><img
                                data-lazy="images/7782cb018d954dcf5825b88498fa0ebb.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/e4a6334f6d0d786f81000b8985c68d15.jpg"><img
                                data-lazy="images/e4a6334f6d0d786f81000b8985c68d15.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/da6b1037910b20ab6b9e4ca25b435e1c.jpg"><img
                                data-lazy="images/da6b1037910b20ab6b9e4ca25b435e1c.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/d4624acaccda6c73f69b8a9ff5e6ecc9.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/321ef14bbcff064dd20685a8b30b035e.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/29eda374c0e87dde7db1a5032cdfab3e.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/8336101aa6b6e475bb5c065941ed7396.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/bfbd38d90a0cf9bc1e9c3109fb9fbfc5.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/88015a96bb04a68a07a409f5aaa27f6a.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/5908bb97eca0b48917977eae42d25b71.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/c646937d7ecab3b5c14492f61af280f0.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/91156c3fe7e44beb14e8af8eac490615.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/7782cb018d954dcf5825b88498fa0ebb.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/e4a6334f6d0d786f81000b8985c68d15.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/da6b1037910b20ab6b9e4ca25b435e1c.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="section-expandable">
                    <div class="h2">Что еще посмотреть</div>
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

                          <form id="review-form" class="review-form" action="/guides/muzei/muzey-kolokolov/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="ec39ec90266da44f150e40658539917c">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="g+BPKOCTiRJLWkx9bepEzg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="OnJ2AmpPuWnNRJ4fswuqLA==">
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