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
                <div class="sidebar-object-info">
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
                            center: [58.520921251594, 31.275228862305],
                            zoom: 9
                          }, {

                          }),

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
                          <td class="name">地区:</td>
                          <td class="val">大诺夫哥罗德</td>
                        </tr>
                        <tr>
                          <td class="name">人口:</td>
                          <td class="val">222 868 人 </td>
                        </tr>
                        <tr>
                          <td class="name">类型::</td>
                          <td class="val">城市</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8">
                <div class="page-content">
                  <div class="block-ext-parent">
                    <div class="h2" style="margin-top: 0;">关于地方</div>
                    <div class="block-ext-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/67a9c1d0201dd1f39ae38e8ba75fb8da.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              大诺夫哥罗德是俄罗斯最古老的城市之一。编年史上第一次提到这座城市可以追溯到859年。从这一年开始，现在习惯上计算它的历史。然而，在这座城市出现之前，沃尔霍夫河和伊尔门湖沿岸进行了长期开发。人们在远古时代就开始在诺夫哥罗德的土地上定居。诺夫哥罗德地区最古老的斯拉夫定居点出现在8世纪的一个名为湖区的地区。这是伊尔门湖西北岸的一条狭长地带。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/82807306a60570f8276fcbca78980fc8.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              8世纪，斯堪的纳维亚人也出现在沃尔霍夫河畔。他们被河流和湖泊吸引到了这里。它们是那个时代的主要贸易路线。贸易路线最重要的部分沿着沃尔霍夫和伊尔门延伸。它将波罗的海与阿拉伯东部和拜占庭联系起来。控制这个水道交叉口的愿望导致了9世纪在沃尔霍夫源头建立了一个设防定居点。现在这个地方被称为留里克古城遗迹。它是诺夫哥罗德的前身。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/217f3cdc9bd257a49589004610efeba6.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              诺夫哥罗德起源于中世纪最重要的贸易路线的十字路口。这在很大程度上决定了这座城市的命运及其在俄罗斯国家历史上的作用。诺夫哥罗德居民的财富和经济独立是古罗斯独特的政治结构——诺夫哥罗德博亚尔共和国出现的基础。诺夫哥罗德国家在14-15世纪达到了鼎盛时期。活跃的贸易促进了手工业的发展。诺夫哥罗德的工匠几乎用当时所有可用的材料制作产品：木材、铁、有色金属、玻璃、织物、粘土、骨头、皮革。诺夫哥罗德财富的另一个重要来源是巨大土地的收入。在其全盛时期，诺夫哥罗德的土地几乎占据了今天欧洲俄罗斯的整个北部。在中世纪，诺夫哥罗德是俄罗斯最大的文化和精神中心。编年史就是在这里保存的。建立了大型图书馆。书籍作坊工作。当地和来访的工匠建造了美妙的寺庙和修道院。其中一些至今仍装饰着这座城市及其周边地区。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/6f27cf99e5c78bbf63ae56881723e89f.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>
                              诺夫哥罗德独立时代于1478年结束，随着诺夫哥罗德并入莫斯科国，不仅在其历史上开始了一个新的里程碑。整个俄罗斯国家历史的一个新阶段已经开始。与诺夫哥罗德一起，诺夫哥罗德人开发的俄罗斯北部广阔土地成为统一国家的一部分。从那一刻起，我们可以谈论莫斯科大公国向俄罗斯的转变。
                              在16-17世纪，大诺夫哥罗德经历了许多动荡。这座城市经历了饥荒和流行病。1570年伊凡雷帝的保镖队起义。1611-1617年瑞典的毁灭性占领。诺夫哥罗德未能从经历的逆境中完全恢复过来。到18世纪初，它失去了以前的重要性，变成了一个小省城。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/c782b56ba2c5bf6fd1016e50d5bfa7ea.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="intext-pic-descr">
                            <p>
                              诺夫哥罗德在20世纪不得不经历艰难的考验。早在1941年8月，德国军队就进入了诺夫哥罗德。这座城市被敌人占领了将近两年半，靠近前线。此时，诺夫哥罗德的土地上正在发生血腥的战斗。一场广泛的游击运动展开了。期待已久的解放发生在1944年1月20日，战争对这座城市及其历史遗产造成了巨大破坏。占领者带走了许多文化财产。建筑古迹被毁。从诺夫哥罗德解放后的第一天起，修复其历史圣地的工作就开始了。
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                          <div class="intext-pic intext-pic-alt">
                            <img src="images/a1b9a1e88817749bac8a3a3c01ee7191.jpg">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <div class="intext-pic-descr">
                            <p>

                              战后几十年，诺夫哥罗德从废墟中复兴，成为一座博物馆城市。1992年，诺夫哥罗德的37处古迹和建筑群被列入联合国教科文组织世界遗产名录。还有它的文化层。1999年，前缀“伟大”正式回归城市名称。现在大诺夫哥罗德是一个主要的旅游中心。近年来，新的纪念碑和博物馆展览向公众开放。与几个世纪前一样，大诺夫哥罗德已准备好欢迎好客。
                            </p>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="city-section">
            <div class="h2" style="margin-top: 0;">Где поесть в Великом Новгороде</div>
            <div class="objects-list">
              <div class="tr">
                <div class="object-tmb rest-tmb">
                  <a href="../../restaurants/kafe-sudarushka/" id="bx_3218110189_298">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/91e53e1ddfd21facb63da3a666570a9b.jpg);">
                      <div class="object-tmb-info ">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>


                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                        <li>咖啡厅和咖啡店</li>
                      </ul>
                      <a href="../../restaurants/kafe-sudarushka/">
                        <div class="h3"><span>«苏达鲁什卡» 咖啡馆</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>俄罗斯菜</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="object-tmb rest-tmb">
                  <a href="../../restaurants/restoran-marusya-marusya/" id="bx_1454625752_1380">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/6ea2f30f92fac38d984c55f25c663ff9.jpg);">
                      <div class="object-tmb-info ">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>


                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                        <li>餐厅</li>
                      </ul>
                      <a href="../../restaurants/restoran-marusya-marusya/">
                        <div class="h3"><span>”马鲁西亚”(MARUSYA)餐厅</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>欧洲菜</li>
                            <li>俄罗斯菜</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tr">
                <div class="object-tmb rest-tmb">
                  <a href="../../restaurants/charodeyka-bar/" id="bx_1454625752_2556">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/867d7a745c962fc6ac6610568b4e2e3f.jpg);">
                      <div class="object-tmb-info ">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num"
                            style="font-size: 12px;line-height: 14px;word-break: break-word;">Магнит или
                            варенье в подарок</div>
                          <div class="object-info-ttl">По карте<br>гостя</div>
                        </div>


                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                        <li>酒吧和酒馆</li>
                      </ul>
                      <a href="../../restaurants/charodeyka-bar/">
                        <div class="h3"><span>«巫婆» 酒吧</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>俄罗斯菜</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="object-tmb rest-tmb">
                  <a href="../../restaurants/sytyy-gus-kafe-restoran-russkoy-kukhni/" id="bx_3218110189_20407">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/04a0ed13ca535c1534ce09efc56c6240.jpg);">
                      <div class="object-tmb-info ">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num"
                            style="font-size: 12px;line-height: 14px;word-break: break-word;">приветственный
                            бокал домашнего кваса или Новгородской медовухи в подарок</div>
                          <div class="object-info-ttl">По карте<br>гостя</div>
                        </div>


                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="rest-tmb-descr" style="min-height: 112.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../..../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                        <li>餐厅</li>
                        <li>咖啡厅和咖啡店</li>
                      </ul>
                      <a href="../../restaurants/sytyy-gus-kafe-restoran-russkoy-kukhni/">
                        <div class="h3"><span>"饱鹅" 俄式咖啡餐厅</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-cuisine"></div>
                        <div class="text">
                          <ul class="object-tmb-tags">
                            <li>俄罗斯菜</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="city-section block-ext-parent">
            <div class="h2" style="margin-top: 0;">Где остановиться в Великом Новгороде</div>
            <div class="objects-list">
              <div class="tr">
                <div class="object-tmb hotel-tmb">
                  <a href="../../hotels/inturist/" id="bx_3218110189_272">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/de4effcd95f3f87b426e1ecbea2e1740.jpg);">
                      <div class="object-tmb-info">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-15%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                      </ul>
                      <a href="../../hotels/inturist/">
                        <div class="h3"><span>“国际旅行”酒店</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-type-hotel"></div>
                        <div class="text">酒店</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="object-tmb hotel-tmb">
                  <a href="../../hotels/butik-otel-truvor/" id="bx_1454625752_275">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/8d93df3f7dffd576b64491a401950efe.jpg);">
                      <div class="object-tmb-info">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-15%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 238.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 186.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                      </ul>
                      <a href="../../hotels/butik-otel-truvor/">
                        <div class="h3"><span>“特鲁沃”精品酒店(«Truvor»)</span></div>
                      </a>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-type-hotel"></div>
                        <div class="text">酒店</div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="tr">
                <div class="object-tmb hotel-tmb">
                  <a href="../../hotels/gostinitsa-sadko/" id="bx_3218110189_278">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/055fd5402bcfc18b6c1f95d69f2aafd3.jpg);">
                      <div class="object-tmb-info">
                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 238.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 137.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                      </ul>
                      <a href="../../hotels/gostinitsa-sadko/">
                        <div class="h3"><span>“萨特阔”酒店</span></div>
                      </a>
                    </div>
                    <div class="hotel-tmb-rating">
                      <div class="hotel-rating">3</div>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-type-hotel"></div>
                        <div class="text">酒店</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="object-tmb hotel-tmb">
                  <a href="../../../hotels/gostinitsa-volkhov/" id="bx_1454625752_1405">
                    <div class="object-tmb-pic"
                      style="background-image: url(images/b33a7e3a229089480314c3b554d1435d.jpg);">
                      <div class="object-tmb-info">


                        <div class="object-tmb-info-item">
                          <div class="object-info-num">-10%</div>
                          <div class="object-info-ttl">斯客人卡”的折扣。</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="object-tmb-descr" style="min-height: 153.5px;">
                    <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                      <ul class="object-tmb-tags">
                        <li><a href="../../cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                      </ul>
                      <a href="../../../hotels/gostinitsa-volkhov/">
                        <div class="h3"><span> «沃尔霍夫»酒店</span></div>
                      </a>
                    </div>
                    <div class="hotel-tmb-rating">
                      <div class="hotel-rating">4</div>
                    </div>
                    <div class="object-tmb-data">
                      <div class="object-data-item">
                        <div class="ico ico-type-hotel"></div>
                        <div class="text">酒店</div>
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