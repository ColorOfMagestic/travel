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
                            center: [58.489569037162, 31.270944186508],
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
                          <td class="val"><a class="no-ul" href="tel:+7 8162 94‑03-33, +7 8162 94‑60-60">+7 8162
                              94‑03-33, +7 8162 94‑60-60</a></td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://tk-podvorie.ru " target="_blank">tk-podvorie.ru </a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul" href="mailto:yurevo@novtour.ru">yurevo@novtour.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">大诺夫哥罗德市尤里耶夫斯科耶大街6А号</td>
                        </tr>
                        <tr>
                          <td class="name">工作时间:</td>
                          <td class="val">每天, 24小时</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val">
                            <a href="javascript:void(0)" data-copy="58.489569037162,31.270944186508" class="gps-block">
                              <span> 58.489569037162,31.270944186508 </span>
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
                          <div class="slide"><img data-lazy="images/cc1fbd01d335da9946d4b5f4f47dff69.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/e8e80ee2751fcf565c791314ad643141.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/206beb123ff9c738225a00057ec6f7bf.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/42e7963f573ea9a8e1ea2905c2b0829c.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/558f81d5e575d8eefb6bf3fde9d7dee6.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/63c788fd97ba583b2d3e8897d54294b8.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/38d59abe57f4111f075a4e366b255642.png">
                          </div>
                          <div class="slide"><img data-lazy="images/4dbdb2c7f52a3f879e65f049f4558d17.png">
                          </div>
                          <div class="slide"><img data-lazy="images/5c0b83869d8ee9819cf4ecbff1ed7e5a.png">
                          </div>
                          <div class="slide"><img data-lazy="images/f6c9023be181cc151a7e9951c5028f45.png">
                          </div>
                          <div class="slide"><img data-lazy="images/32ffcd7a2401299d3cf81cedcd5f18a6.png">
                          </div>
                          <div class="slide"><img data-lazy="images/46079f2a2b032aaabe1d75e3fbfd109e.png">
                          </div>
                          <div class="slide"><img data-lazy="images/04f7559bb0925b11875cbd934cc0c230.png">
                          </div>
                          <div class="slide"><img data-lazy="images/8596b3d0ea8b9d0df3426b6070c5aa8b.png">
                          </div>
                          <div class="slide"><img data-lazy="images/39521aa052f5030b2e59e7093a9310d8.png">
                          </div>
                          <div class="slide"><img data-lazy="images/7f410863e0f39de3b49fe4730f44b9e4.png">
                          </div>
                        </div>
                        <div class="photo-slider-thumbs">
                          <div class="slide"><img data-lazy="images/cc1fbd01d335da9946d4b5f4f47dff69.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/e8e80ee2751fcf565c791314ad643141.jpg">
                          </div>
                          <div class="slide"><img data-lazy="images/206beb123ff9c738225a00057ec6f7bf.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/42e7963f573ea9a8e1ea2905c2b0829c.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/558f81d5e575d8eefb6bf3fde9d7dee6.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/63c788fd97ba583b2d3e8897d54294b8.jpeg">
                          </div>
                          <div class="slide"><img data-lazy="images/38d59abe57f4111f075a4e366b255642.png">
                          </div>
                          <div class="slide"><img data-lazy="images/4dbdb2c7f52a3f879e65f049f4558d17.png">
                          </div>
                          <div class="slide"><img data-lazy="images/5c0b83869d8ee9819cf4ecbff1ed7e5a.png">
                          </div>
                          <div class="slide"><img data-lazy="images/f6c9023be181cc151a7e9951c5028f45.png">
                          </div>
                          <div class="slide"><img data-lazy="images/32ffcd7a2401299d3cf81cedcd5f18a6.png">
                          </div>
                          <div class="slide"><img data-lazy="images/46079f2a2b032aaabe1d75e3fbfd109e.png">
                          </div>
                          <div class="slide"><img data-lazy="images/04f7559bb0925b11875cbd934cc0c230.png">
                          </div>
                          <div class="slide"><img data-lazy="images/8596b3d0ea8b9d0df3426b6070c5aa8b.png">
                          </div>
                          <div class="slide"><img data-lazy="images/39521aa052f5030b2e59e7093a9310d8.png">
                          </div>
                          <div class="slide"><img data-lazy="images/7f410863e0f39de3b49fe4730f44b9e4.png">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-expandable">
                    <div class="h2">关于酒店</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                        «尤里耶夫大院»精品酒店是大诺夫哥罗德唯一一家地理位置如此独特的酒店。它在森林公园区。围绕森林、田野、湖泊（伊尔门和米亚基诺）。尤里耶夫斯基修道院由智者雅罗斯拉夫王子于1030年建造，酒店对面是露天木制建筑博物馆“维托斯拉夫利茨”。参观和沉浸在诺夫哥罗德的生活和传统中是强制性的！
                      </p>
                      <p>
                        任何类型的住宿，以满足您精致的品味。不同类别的酒店客房、公寓、露营地和现代小屋。每一个都可以追溯到现代阅读中俄罗斯主题的音符。
                      </p>
                      <p>
                        综合体的区域：
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>家宅“克拉斯纳·伊兹巴”；</li>
                        <li>主楼设有20个不同类别的舒适房间；</li>
                        <li>餐厅和夏季阳台；</li>
                        <li>夏季餐厅；</li>
                        <li>俄罗斯木柴浴和街头沐浴区；</li>
                        <li>7个露营地；</li>
                        <li>5间客栈；</li>
                        <li>有昆虫家园的生态步道；</li>
                        <li>休闲区：吊床、拍照地点、苹果园。</li>
                      </ul>
                      <p>
                      </p>
                      <p>
                        «尤里耶夫大院»
                        是一个家庭项目。对每一个细节都充满了热爱。在这里，您将沉浸在舒适的童话般的处女中，俄罗斯手工艺。你会觉得自己“在村里和祖母在一起”。你总是很受欢迎的地方。在那里你会感到舒适、安全和温暖。这个地方令人惊叹的自然和能量将使您能够抛开一切不必要的东西，沉迷于创造美丽的东西。而我们周到的空间，美味的食物，窗外的鸟鸣，周到的服务，将使每一位客人的假期都舒适和谐。
                      </p>
                      <h3>
                        沐浴水疗综合体 «尤里耶夫大院»</h3>
                      <p>
                        我们的浴室是为了真正的休息、健康、免疫力强和安心。浴室综合体，配有宽敞的蒸汽浴室、带有西伯利亚柴的街头浴室综合体和休闲区。
                      </p>
                      <p>
                        我们大师的作者技巧将让您的身心真正得到休息。
                      </p>
                      <h3>
                        露营地</h3>
                      <p>
                      这里有七个舒适的露营地，可以俯瞰森林。五间小屋可以俯瞰苹果园。森林区的概念是为寻求隐私、宁静和休息的人设计的。这是一种特殊的气氛。我想回到这里。它是由周围的自然、圣地周围的独特位置和酒店内部的填充协同作用而形成的。清新的空气，采用沉稳色调的周到设计，天然的材料，舒适的床垫，高质量的睡眠恢复，美味的天然食物。
                      </p>
                      <p>
                      此外，在综合体中，您将被期待：
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>一家自产食品的美食店；</li>
                        <li>自己的奶酪厂；</li>
                        <li>户外活动空地；</li>
                        <li>儿童区；</li>
                        <li>迷你动物园；</li>
                        <li>组织游览；</li>
                        <li>接受汽车露营（大篷车）。</li>
                      </ul>
                      <p>
                      </p>
                      *只有通过酒店直接预订时，才会享受“诺夫哥罗德地区客人卡”计划的折扣。<br>
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

                          <form id="review-form" class="review-form" action="/hotels/butik-otel-yurevskoe-podvore/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="38ef1dccba42aab18d22c0718834a5b2">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="XXaeMHw7RqRhXKto5IulFw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="/+LIOlVKFzaGy3vdhKeyKQ==">
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