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
                            center: [58.388115, 33.906695],
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
                          <td class="val">
                            <a class="no-ul" href="tel:+7 (921) 198-89-88">+7 (921) 198-89-88</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/most_restaurant" target="_blank">vk.com/most_restaurant</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">电子邮件：</td>
                          <td class="val"><a class="no-ul"
                              href="mailto:antonio_restor@mail.ru">antonio_restor@mail.ru</a></td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">诺夫哥罗德州博罗维奇市雷波巷 4号楼2层</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="58.388115,33.906695"
                              class="gps-block">
                              <span> 58.388115,33.906695 </span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                  d="M12 6h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3h2v1.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H12V6zM1 0h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z">
                                </path>
                              </svg>
                            </a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">

                  <div class="photo-slider-wrapper">
                    <div class="photo-slider">
                      <div class="slide"><img
                          data-lazy="images/10ac9190c8bd6128d6495aac9ad7c3ec.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/637183389c5959e479fce41633d282a5.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/729ea2da3d972c02d8f1bda68b77523f.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/92501c9de7383b7d4a2246b647c56ad9.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/12bb842bc3d38ba17239dd20a04e23be.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1cfbd970623f1ae890ce274f451db48b.jpg">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/10ac9190c8bd6128d6495aac9ad7c3ec.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/637183389c5959e479fce41633d282a5.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/729ea2da3d972c02d8f1bda68b77523f.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/92501c9de7383b7d4a2246b647c56ad9.jpeg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/12bb842bc3d38ba17239dd20a04e23be.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/1cfbd970623f1ae890ce274f451db48b.jpg">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <h3>
                        Концепция</h3>
                      <p>
                      距离别列柳布斯基工程师大桥仅几步之遥，在博罗维奇的历史中心，在19世纪下半叶的米特罗凡诺夫庄园，一个全新的美食故事——特色餐厅《莫斯特》。在这里，客人可以通过厨房生活和体验独特的文化经验，使用他们自己的果园和菜园的季节性产品、诺夫哥罗德的专业产品、室内音乐厅和私人鸡尾酒吧，沉浸在新口味的世界中，形式美学和纹理的结合。
                      </p>
                      <h3>Атмосфера и интерьер<br>
                      </h3>
                      <p>
                      《莫斯特》餐厅的历史与博罗维奇市的历史密切相关。1905年，别列柳布斯基拱桥连接了博罗维奇商人中心的姆斯塔河两岸。大桥的出现，让市民的生活发生了翻天覆地的变化。这座桥连接了斯帕斯卡亚和贸易两侧。这座桥已成为全球变革的象征。
                      </p>
                      <p>
                      今天，《莫斯特》餐厅正在博罗维奇、圣彼得堡和莫斯科之间架起一座新的文化桥梁。连接人、美食、文化、传统的桥梁。《莫斯特》，已成为俄罗斯美食地图上的一个新点。
                      </p>
                      <p>
                      餐厅的室内装饰参考了这座城市的历史：铸铁铸造、当地工匠的橡木门户、梅特拉赫瓷砖。
                      </p>
                      <h3>О ресторане<br>
                      </h3>
                      <p>
                      《莫斯特》餐厅的墙壁装饰着艺术家兼建筑师列昂尼德·基姆工作室创作的石膏面板。面板揭示了米特罗凡诺夫家族的历史联系——这座豪宅的前租户和所有者、著名商人和慈善家以及给这座建筑带来第二次生命的安东诺夫家族，以及市民聚会和特殊事件的场所。
                      </p>
                      <p>
                      餐厅的入口组团装饰着令人惊叹的意大利吊灯，中央还藏着一个来自佛罗伦斯的壁炉门户。 
                      </p>
                      <h3>饭菜</h3>
                      <p>
                      阿列克谢的美食意识形态是保留和展示产品的原始风味。
                      </p>
                      <p>
                        Алексей родом из города Благовещенск. Величественная тайга, реки Амур и Зея — настоящая красота
                        и источник внутренней силы.
                      </p>
                      <p>
                      阿列克谢的美食意识形态是保留和展示产品的原始风味。
                      </p>
                      <p>
                      我们的灵感来自米特罗凡诺夫庄园下层果园和诺夫哥罗德森林中生长的植物。我们使用我们菜园中最新鲜的食材来制作菜肴：草莓、西红柿、黄瓜、沙拉、豌豆、醋栗、醋栗和其他浆果。<br>
                      </p>
                      <p>
                      根据客人的卡参观《莫斯特》餐厅和活动，根据《莫斯特》餐厅的招贴广告，折扣为10%。
                      </p>
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

                          <form id="review-form" class="review-form" action="/restaurants/restoran-most-most/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="8XZbClmiyI1ExKZjvEOucw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="TFxMQFdmzxQg9E6NbQsQAw==">
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