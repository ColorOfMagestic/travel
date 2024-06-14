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
                              center: [58.493558738472, 31.297582348549],
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
                            <td class="name">地址:</td>
                            <td class="val">Новгородская область, Великий Новгород, Городище</td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="58.493559,31.297582" class="gps-block">
                                <span> 58.493559,31.297582 </span>
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
                      <p>留里克古城遗迹是俄罗斯历史上具有里程碑意义的地方。中世纪早期重要贸易路线的交汇处。</p>
                      <p>
                        9世纪，普里尔梅尼亚成为一个主要的贸易、手工艺、军事和行政中心。该中心成为第一位俄罗斯王子留里克的住所。在留里科夫定居点遗址上出现的定居点是诺夫哥罗德的前身。自11世纪末以来，该定居点一直是诺夫哥罗德王子的住所。
                      </p>
                      <p>
                        1103年，姆斯季斯拉夫·弗拉基米罗维奇王子在这片领土上建造了天使报喜教堂。继圣索菲亚大教堂之后，诺夫哥罗德的第一座大石头教堂。伊凡三世大公和伊凡雷帝沙皇在前往诺夫哥罗德的战役中曾在该定居点停留。
                      </p>
                      <p>多年来，这里一直在进行系统的考古研究。有许多科学发现。</p>
                    </div>
                  </div>
                </div>

                <div class="section-expandable">
                  <div class="h2">照片廊</div>
                  <div class="section-expandable-content">
                    <div class="photo-slider-wrapper">
                      <div class="photo-slider">
                        <div class="slide"><a class="fancybox" href="images/03595e0ca012e248144834c30383a5cd.jpg"><img
                              data-lazy="images/03595e0ca012e248144834c30383a5cd.jpg"></a>
                        </div>
                        <div class="slide"><a class="fancybox" href="images/e413bebeb0311d1c0639837cac2951ac.jpg"><img
                              data-lazy="images/e413bebeb0311d1c0639837cac2951ac.jpg"></a>
                        </div>
                        <div class="slide"><a class="fancybox" href="images/90bd93735b8723023d35e28cc140efe5.jpg"><img
                              data-lazy="images/90bd93735b8723023d35e28cc140efe5.jpg"></a>
                        </div>
                        <div class="slide"><a class="fancybox" href="images/85fb0a68f63d0f4cc13dae8bb2bfefbf.jpg"><img
                              data-lazy="images/85fb0a68f63d0f4cc13dae8bb2bfefbf.jpg"></a>
                        </div>
                        <div class="slide"><a class="fancybox" href="images/50ca213eba88c77a5908194c10f1742e.jpg"><img
                              data-lazy="images/50ca213eba88c77a5908194c10f1742e.jpg"></a>
                        </div>
                      </div>
                      <div class="photo-slider-thumbs">
                        <div class="slide"><img data-lazy="images/03595e0ca012e248144834c30383a5cd.jpg">
                        </div>
                        <div class="slide"><img data-lazy="images/e413bebeb0311d1c0639837cac2951ac.jpg">
                        </div>
                        <div class="slide"><img data-lazy="images/90bd93735b8723023d35e28cc140efe5.jpg">
                        </div>
                        <div class="slide"><img data-lazy="images/85fb0a68f63d0f4cc13dae8bb2bfefbf.jpg">
                        </div>
                        <div class="slide"><img data-lazy="images/50ca213eba88c77a5908194c10f1742e.jpg">
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
                          action="/guides/neobychnye-mesta/ryurikovo-gorodishche/" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="sessid" id="sessid" value="d02fec86be41aba3b65478240ec4e127">
                          <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="C3NLmcRq1uk05XEVtd4KAQ==">

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
                          <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="WHl5LWIYuUv06KgG0Z7rBw==">
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