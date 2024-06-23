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
                              center: [58.522791, 31.276329],
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
                              <a href="https://novgorodmuseum.ru/muzei/vladychnaya-granovitaya-palata"
                                target="_blank">novgorodmuseum.ru/muzei/vladychnaya-granovitaya-palata</a><br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">地址:</td>
                            <td class="val">诺夫哥罗德区 Кремль, 14
                            </td>
                          </tr>
                          <tr>
                            <td class="name">工作时间:</td>
                            <td class="val">вт.-вс.: 10.00 – 18.00,
                              <br>выходные: понедельник, первая среда месяца.
                              <br>
                            </td>
                          </tr>
                          <tr>
                            <td class="name">GPS坐标:</td>
                            <td class="val">
                              <a href="javascript:void(0)" data-copy="58.522791,31.276329" class="gps-block">
                                <span> 58.522791,31.276329 </span>
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
                      有关1433年在君主宫廷建造石室的信息包含在诺夫哥罗德编年史中。根据大主教尤菲米乌斯二世的命令，诺夫哥罗德的建筑师与来访的德国大师一起建造了一座哥特式风格的三层砖砌建筑。
                      </p>
                      <p>
                      在16-19世纪，这个房间被多次重建。然而，大部分都保存了下来。大楼东侧的顶层是一个大前厅。大厅中央有一根圆柱体。它被边缘突出的拱顶覆盖。多亏了这一点，商会获得了第二个名字：多棱宫。大厅旁边是领主的牢房。君主宫殿不止一次成为举行盛大招待会和节日晚宴的场所。它的下层和地下室主要用于家庭需求。
                      </p>
                      <p>
                      君主宫殿是一座独特的建筑。俄罗斯现存最古老的民用建筑。古罗斯境内唯一的哥特式建筑。
                      </p>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">照片廊</div>
                    <div class="section-expandable-content">
                      <div class="photo-slider-wrapper">
                        <div class="photo-slider">
                          <div class="slide"><a class="fancybox" href="images/b99df03db3228c13176ca997744755a3.jpg"><img
                                data-lazy="images/b99df03db3228c13176ca997744755a3.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/9425f44338cc7833953870e750f98d24.jpg"><img
                                data-lazy="images/9425f44338cc7833953870e750f98d24.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/9168e82895c09111350e74fbed907cf9.jpg"><img
                                data-lazy="images/9168e82895c09111350e74fbed907cf9.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/73e2db759ba8f94527ea6a5deb559906.jpg"><img
                                data-lazy="images/73e2db759ba8f94527ea6a5deb559906.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/96dce85c0ac37cc9139cf0b0c60f9d0a.jpg"><img
                                data-lazy="images/96dce85c0ac37cc9139cf0b0c60f9d0a.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/8752d3884f954df542a617091871c0f9.jpg"><img
                                data-lazy="images/8752d3884f954df542a617091871c0f9.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/f747ff8e9bee1421f58e4346262bfd97.jpg"><img
                                data-lazy="images/f747ff8e9bee1421f58e4346262bfd97.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/f5e7204f4c9a3026c92016cb543cb27c.jpg"><img
                                data-lazy="images/f5e7204f4c9a3026c92016cb543cb27c.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/a9240bc0f66ab4c5d18ebb428a6713bf.jpg"><img
                                data-lazy="images/a9240bc0f66ab4c5d18ebb428a6713bf.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/0cd23d105d4781c3d5eeb8bdb45d076c.jpg"><img
                                data-lazy="images/0cd23d105d4781c3d5eeb8bdb45d076c.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/ebab10ca122629d1f75ee2685566bc45.jpg"><img
                                data-lazy="images/ebab10ca122629d1f75ee2685566bc45.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/c3135524cc781a185e416dcb5b83a6ff.jpg"><img
                                data-lazy="images/c3135524cc781a185e416dcb5b83a6ff.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/cf6e29d7ae9644f686eef12890e32d23.jpg"><img
                                data-lazy="images/cf6e29d7ae9644f686eef12890e32d23.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/c72ac63f9821214329ccf665cfb04f2f.jpg"><img
                                data-lazy="images/c72ac63f9821214329ccf665cfb04f2f.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/bdd3373dcb78a4058333c89a8051a16d.jpg"><img
                                data-lazy="images/bdd3373dcb78a4058333c89a8051a16d.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/9a09ac4bb7e7abee8fd5114af556b443.jpg"><img
                                data-lazy="images/9a09ac4bb7e7abee8fd5114af556b443.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/13939203adab35331e543afb10c26bd5.jpg"><img
                                data-lazy="images/13939203adab35331e543afb10c26bd5.jpg"></a>
                          </div>
                          <div class="slide"><a class="fancybox" href="images/37df351acdabe4abc06408f9b9d1ffd1.jpg"><img
                                data-lazy="images/37df351acdabe4abc06408f9b9d1ffd1.jpg"></a>
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/b99df03db3228c13176ca997744755a3.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/9425f44338cc7833953870e750f98d24.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/9168e82895c09111350e74fbed907cf9.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/73e2db759ba8f94527ea6a5deb559906.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/96dce85c0ac37cc9139cf0b0c60f9d0a.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/8752d3884f954df542a617091871c0f9.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/f747ff8e9bee1421f58e4346262bfd97.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/f5e7204f4c9a3026c92016cb543cb27c.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/a9240bc0f66ab4c5d18ebb428a6713bf.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/0cd23d105d4781c3d5eeb8bdb45d076c.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/ebab10ca122629d1f75ee2685566bc45.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/c3135524cc781a185e416dcb5b83a6ff.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/cf6e29d7ae9644f686eef12890e32d23.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/c72ac63f9821214329ccf665cfb04f2f.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/bdd3373dcb78a4058333c89a8051a16d.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/9a09ac4bb7e7abee8fd5114af556b443.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/13939203adab35331e543afb10c26bd5.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/37df351acdabe4abc06408f9b9d1ffd1.jpg">
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
                              <a href="../guides/dom-muzey-f-m-dostoevskogo/">
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
                                <a href="../guides/muzei/muzey-kolokolov/">
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
                                <a href="../guides/muzei/muzey-zapovednik-a-v-suvorova/">
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
                              <a href="..ryurikovo-gorodishche/">
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
                            action="/guides/muzei/vladychnaya-granovitaya-palata/" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="d02fec86be41aba3b65478240ec4e127">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="KqZ5S8x0qDe8uG2XYA8hDg==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="Z9+ilGa0B0Qn6TI1z3dUHQ==">
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