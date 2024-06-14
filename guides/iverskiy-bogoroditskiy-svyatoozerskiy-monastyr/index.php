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
                              center: [57.98922, 33.305621],
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
                              <a class="no-ul" href="tel:+7 (911) 614-66-94">+7 (911) 614-66-94</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">网站:</td>
                            <td class="val">
                              <a href="https://iveron.ru" target="_blank">iveron.ru</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">地址:</td>
                            <td class="val">Новгородский район, Валдай, Сельвицкий остров</td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="57.98922,33.305621" class="gps-block">
                                <span> 57.98922,33.305621 </span>
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
                      <p>伊维尔斯基修道院位于瓦尔代湖的一个岛屿上。它由牧首尼康于1653年根据阿索斯山上的伊弗修道院的形象和相似之处建立。</p>
                      <p>
                        两年后，修道院的第一座石头寺庙奠基——以纪念伊维拉上帝之母的圣像。这座修道院是一座堡垒。它被一个有十座塔楼的木栅栏包围着。他有一支由弓箭手和大炮组成的驻军。从1666年到18世纪初，修道院进行了特别大规模的建设。在此期间，这里建造了带餐厅的主显节教堂、钟楼、米哈伊洛夫斯基塔、总督、校长和财政大楼、大天使迈克尔和雅各布·博罗维奇教堂以及医院。
                      </p>
                      <p>在18世纪中叶，一个石头围栏代替了木围栏（除了北侧）。在同一个世纪，重建在某种程度上影响了几乎所有的修道院建筑。19世纪中叶和下半叶，修道院进行了大规模的建筑工程。</p>
                      <p>1918年，伊弗修道院被废除。在接下来的几十年里，它的建筑被用来容纳当地历史博物馆、工业场所、医院和娱乐中心。</p>
                      <p>1991年，修道院被归还给俄罗斯东正教。它目前正在运作。</p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox" href="images/5a98612108f3300f62b0ba90c4d5ae4a.jpg"><img
                                data-lazy="images/5a98612108f3300f62b0ba90c4d5ae4a.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/5a98612108f3300f62b0ba90c4d5ae4a.jpg">
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
                            action="/guides/khramy-i-monastyri/iverskiy-bogoroditskiy-svyatoozerskiy-monastyr/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="d02fec86be41aba3b65478240ec4e127">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="Pe0GLp2Q/ZU8G9uHW50xAg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="lgpfU/DLIaymKBMIbXGXlA==">
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