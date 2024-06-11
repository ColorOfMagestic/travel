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
                            center: [57.991393, 31.361309],
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
                            <a class="no-ul" href="tel:+7 (965) 807-81-73">+7 (965) 807-81-73</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">网站: </td>
                          <td class="val">
                            <a href="http://vk.com/karamazovy.rest" target="_blank">vk.com/karamazovy.rest</a><br>
                          </td>
                        </tr>
                        <tr>
                          <td class="name">地址:</td>
                          <td class="val">旧鲁萨市戈斯蒂诺德沃斯卡亚街20号</td>
                        </tr>
                        <tr>
                          <td class="name">工作时间:</td>
                          <td class="val">每天 с 12:00 до 23:00</td>
                        </tr>
                        <tr>
                          <td class="name">GPS坐标: </td>
                          <td class="val"><a href="javascript:void(0)" data-copy="57.991393,31.361309"
                              class="gps-block">
                              <span> 57.991393,31.361309 </span>
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
                          data-lazy="images/87cd4339e05a8b536e9da5fdb4301cb2.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9e666d314d759d4b85294edbf5a401f7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d77e438639efc2cece31d973197c7911.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5bab91739aafadb5c264f1ebab16d163.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9f9db8c002aa94537751c80e9500ba9f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/bcffe836530bc574ec303c8259f8258d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/de1a8b89a6db20ba190d886d39e9b7c7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5506b15e1a2b2280b5952ff848b0abef.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e07fe0acd105b8dc79bf3cf84e637629.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ff1985f0a885929acdff95efa693d1a6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/4ff6618d8e13ba7ab443b689fdd2c856.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/3eb5ea153bdeb9616355b4612e20b2c0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d188f40464d93b71b5c3f46e8734730b.png">
                      </div>
                    </div>
                    <div class="photo-slider-thumbs">
                      <div class="slide"><img
                          data-lazy="images/87cd4339e05a8b536e9da5fdb4301cb2.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9e666d314d759d4b85294edbf5a401f7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d77e438639efc2cece31d973197c7911.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5bab91739aafadb5c264f1ebab16d163.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/9f9db8c002aa94537751c80e9500ba9f.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/bcffe836530bc574ec303c8259f8258d.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/de1a8b89a6db20ba190d886d39e9b7c7.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/5506b15e1a2b2280b5952ff848b0abef.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/e07fe0acd105b8dc79bf3cf84e637629.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/ff1985f0a885929acdff95efa693d1a6.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/4ff6618d8e13ba7ab443b689fdd2c856.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/3eb5ea153bdeb9616355b4612e20b2c0.jpg">
                      </div>
                      <div class="slide"><img
                          data-lazy="images/d188f40464d93b71b5c3f46e8734730b.png">
                      </div>
                    </div>
                  </div>

                  <div class="section-expandable">
                    <div class="h2">О ресторане</div>
                    <div class="section-expandable-content">
                      <p></p>
                      <p>
                      </p>
                      <p>
                      </p>
                      <p>
                        <b>*По Карте гостя скидка 10% на основное меню</b><br>
                      </p>
                      <p>
                      “卡拉马助夫” 餐厅是作者美食与旧鲁萨市现代意大利的结合。它基于本地和可理解的产品。这里不追逐两个首都的时尚潮流。只是更新了被遗忘已久的菜肴和食物的味道。
                      </p>
                      <p>
                      </p>
                      <p>
                      在这里，你可以在朋友和家人的圈子里度过一个愉快的夜晚。在舒适的环境中与同事或合作伙伴讨论业务问题。和心爱的人一起度过一个浪漫的夜晚。 <br>
                      </p>
                      <p>
                      餐厅有两个大厅和一个夏季阳台。总容量为150人。每晚都有娱乐、音乐节目供客人观看。

                      </p>
                      <p>
                      在菜单上，你会发现许多来自我们森林的森林蘑菇、浆果、芳香的草药。以及在自己的酵母上进行活发酵的手工面包。<br>
                      </p>
                      <p>
                      你会喜欢陀思妥耶夫斯基时代的菜肴。肉、鱼、蘑菇馅饼。煎饼，土豆，肉和蘑菇菜肴。当然是糖果“橱柜”。
                      </p>
                      <p>
                        �&nbsp;есторан состоит из:
                      </p>
                      <p>
                      </p>
                      <ul>
                        <li>
                          <p>
                            Банкетного зала (60 человек)
                          </p>
                        </li>
                        <li>
                          <p>
                            Основного зала ресторана (90 человек)
                          </p>
                        </li>
                      </ul>
                      <p>
                      </p>
                      <br>
                      <p>
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

                          <form id="review-form" class="review-form" action="/restaurants/restoran-karamazovy/"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="6903a85ae0f6529bb85df1969f09ac95">
                            <input type="hidden" name="AT3cHUq2jf6I2l08409pRg==" value="3Fe/W8aodLWMQ0Z3PfI8Yw==">

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
                            <input type="hidden" name="z0f6/fiRisLGnKIGeikf7Q==" value="zUxsx11bBtUBqgKHcYsggw==">
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