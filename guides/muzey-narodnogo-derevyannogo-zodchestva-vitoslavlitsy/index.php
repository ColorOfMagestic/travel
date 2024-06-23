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
                              center: [58.490315, 31.272255],
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
                              <a class="no-ul" href="tel:+7-921-730-93-92">+7-921-730-93-92</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">网站:</td>
                            <td class="val">
                              <a href="https://https://novgorodmuseum.ru/muzei/vitoslavlitsy"
                                target="_blank">https://novgorodmuseum.ru/muzei/vitoslavlitsy</a><br>
                              <a href="https://https://vk.com/vitoslavlitsy"
                                target="_blank">https://vk.com/vitoslavlitsy</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">地址:</td>
                            <td class="val">大诺夫哥罗德, Юрьевское шоссе, проезд авт. № 7, 7а от вокзала.
                            </td>
                          </tr>
                          <tr>
                            <td class="name">工作时间:</td>
                            <td class="val">ежедневно: 10.00 – 20.00
                              <br>(май–август), 10.00 – 18.00
                              <br>(сентябрь, апрель), 10.00 – 17.00
                              <br>(октябрь–март).
                            </td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="58.490315,31.272255" class="gps-block">
                                <span> 58.490315,31.272255 </span>
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
                        民间木结构建筑博物馆成立于1964年，位于米亚奇诺湖畔。隔壁是尤里耶夫修道院。在古代，潘捷列伊莫诺夫修道院和 《维托斯拉夫齐》 小村庄位于今天博物馆的领土上。
                      </p>
                      <p>
                        1134年，根据伊兹亚斯拉夫·姆斯季斯拉维奇王子的证书，该村被分配给修道院。19世纪初，这里是地主瓦西里·伊万诺维奇·谢梅夫斯基的庄园。1828年，他把它卖给了安娜·阿列克谢耶夫娜·奥尔洛娃——切斯门斯卡娅伯爵夫人。这一时期的庄园保留了早期古典主义风格的两层石屋和一层石厢房。
                      </p>
                      <p>《维托斯拉夫齐》 民间木结构建筑博物馆成立于1964年，其创始人是杰出的建筑师兼修复师列昂尼德·叶戈罗维奇·克拉斯诺列契耶夫。现在 《维托斯拉夫齐》 是一个建筑和民族志博物馆。</p>
                      <p>向游客介绍传统民俗文化。在这里，你可以看到典型的农民庄园，有住宅楼和附属建筑、寺庙、小教堂、铁匠铺、磨坊等等。木制建筑纪念碑内设有博览会和展览。</p>
                      <p>博物馆举办民俗和手工艺节日、民间游戏、婚礼传统仪式、民间日历节日。有民族志计划。</p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox" href="images/f1c621affca0f318a109ab73a7c4b666.jpg"><img
                                data-lazy="images/f1c621affca0f318a109ab73a7c4b666.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox"
                              href="images/314d18abcf0f27582a9e41eaf2f5f430.jpeg"><img
                                data-lazy="images/314d18abcf0f27582a9e41eaf2f5f430.jpeg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/8315a0c7e0cf6c6e63df978593cde5c6.jpg"><img
                                data-lazy="images/8315a0c7e0cf6c6e63df978593cde5c6.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/43ad8e690610ff9a1335c3a35f01a650.jpg"><img
                                data-lazy="images/43ad8e690610ff9a1335c3a35f01a650.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/81ddc192a6ed01053eeca0aa41f385a2.jpg"><img
                                data-lazy="images/81ddc192a6ed01053eeca0aa41f385a2.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/c0b094454e3d4e6d029fc52e62b3d675.jpg"><img
                                data-lazy="images/c0b094454e3d4e6d029fc52e62b3d675.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/9ada9e1112c806568c6716e1808974f4.jpg"><img
                                data-lazy="images/9ada9e1112c806568c6716e1808974f4.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/d2c01a4f3a82bd3b5baba8239b5e76c7.jpg"><img
                                data-lazy="images/d2c01a4f3a82bd3b5baba8239b5e76c7.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/98cc8f20f9c885ab74b5bf1cc44837bc.jpg"><img
                                data-lazy="images/98cc8f20f9c885ab74b5bf1cc44837bc.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/334f2ed7b18bdfcedf90b629d6137a6d.jpg"><img
                                data-lazy="images/334f2ed7b18bdfcedf90b629d6137a6d.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/261789ae182d5398da2f196afe8dd90d.jpg"><img
                                data-lazy="images/261789ae182d5398da2f196afe8dd90d.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/75ffba24b08db9f2f7faab8481443142.jpg"><img
                                data-lazy="images/75ffba24b08db9f2f7faab8481443142.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/20a769a7ce5b29a82c5880164e3fc729.jpg"><img
                                data-lazy="images/20a769a7ce5b29a82c5880164e3fc729.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/4dc63eb6146372df847ff1fc20e6c680.jpg"><img
                                data-lazy="images/4dc63eb6146372df847ff1fc20e6c680.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/8fa874f185a759567edc70b9b08ce15b.jpg"><img
                                data-lazy="images/8fa874f185a759567edc70b9b08ce15b.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/f1c621affca0f318a109ab73a7c4b666.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/314d18abcf0f27582a9e41eaf2f5f430.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/8315a0c7e0cf6c6e63df978593cde5c6.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/43ad8e690610ff9a1335c3a35f01a650.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/81ddc192a6ed01053eeca0aa41f385a2.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/c0b094454e3d4e6d029fc52e62b3d675.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/9ada9e1112c806568c6716e1808974f4.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/d2c01a4f3a82bd3b5baba8239b5e76c7.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/98cc8f20f9c885ab74b5bf1cc44837bc.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/334f2ed7b18bdfcedf90b629d6137a6d.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/261789ae182d5398da2f196afe8dd90d.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/75ffba24b08db9f2f7faab8481443142.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/20a769a7ce5b29a82c5880164e3fc729.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/4dc63eb6146372df847ff1fc20e6c680.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/8fa874f185a759567edc70b9b08ce15b.jpg">
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

                          <form id="review-form" class="review-form"
                            action="/guides/muzei/muzey-narodnogo-derevyannogo-zodchestva-vitoslavlitsy/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="d02fec86be41aba3b65478240ec4e127">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="4PqtURx2uruFuJQHg1M9PQ==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="AB/0tT4EreVhdHhGwe3aOA==">
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