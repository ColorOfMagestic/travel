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
                              center: [57.981254, 31.357361],
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
                              <a class="no-ul" href="tel:(816-52) 514-77">(816-52) 514-77</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">网站:</td>
                            <td class="val">
                              <a href="https://novgorodmuseum.ru/muzei/dom-muzej-f.m.-dostoevskogo"
                                target="_blank">novgorodmuseum.ru/muzei/dom-muzej-f.m.-dostoevskogo</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">地址:</td>
                            <td class="val">Новгородская обл., г. Старая�&nbsp;усса, наб. Достоевского, 42/2
                            </td>
                          </tr>
                          <tr>
                            <td class="name">工作时间:</td>
                            <td class="val">10.00 – 18.00
                              <br>Выходные: понедельник, последний четверг месяца.
                              <br>
                              <br>
                              <br>
                              <br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="57.981254,31.357361" class="gps-block">
                                <span> 57.981254,31.357361 </span>
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
                        陀思妥耶夫斯基家族自1873年以来一直在佩雷里蒂齐河堤上租用一座两层楼的木屋作为避暑别墅。主人亚历山大·卡洛维奇·格里贝上校去世后，作家于1876年从他的继承人手中买下了这所房子。陀思妥耶夫斯基在旧鲁萨市做了大量卓有成效的工作。在这里，他写了小说《群魔》、《少年》、《卡拉马佐夫兄弟》。作家去世后，他的遗孀安娜·格里戈里耶夫娜在房子里创建了一个纪念室。1918年，这座房子被收归国有。三年后，它成为旧鲁萨历史博物馆的所在地。这座木结构建筑奇迹般地在战争中幸存了下来。屋顶和阳台仍然被摧毁。在这座城市解放后的头几个月，这所房子已经修好了。1981年，它开设了一个家庭博物馆。现在它是诺夫哥罗德博物馆保护区的一个分支。
                      </p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox" href="images/59ca022705fb7e69279710129f56f178.jpg"><img
                                data-lazy="images/59ca022705fb7e69279710129f56f178.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/c090b60379e735a562a8a03afee4b82e.jpg"><img
                                data-lazy="images/c090b60379e735a562a8a03afee4b82e.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/ac766aca8dbd99ab274c3a7e023bef61.jpg"><img
                                data-lazy="images/ac766aca8dbd99ab274c3a7e023bef61.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/59ca022705fb7e69279710129f56f178.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/c090b60379e735a562a8a03afee4b82e.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/ac766aca8dbd99ab274c3a7e023bef61.jpg">
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



                              <div class="object-tmb-descr" style="min-height: 183.5px;">
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

                          <form id="review-form" class="review-form" action="/guides/muzei/dom-muzey-f-m-dostoevskogo/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="9343094164c4a8eba60846e2031f1e32">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="CKFSzKni7U+b00oOTIt0Jg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="1Vw/SxQF7s2vdlMHSXtEMA==">
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