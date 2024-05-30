<?php require_once ('../template/head-inner.php') ?>
<?php require_once ('../template/header-inner.php') ?>
<div class="main">
  <div class="page-wrapper" style="background-image: url(images/page-wrapper-bg.jpg);">
    <div class="container">
      <div class="page-wrapper-top">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="page-sidebar page-sidebar-l">
              <div class="categories-menu-wrapper">
                <div class="close"></div>

                <ul class="categories-menu" style="margin-bottom: 20px;">

                  <li>
                    <a href="/guides/muzei/">
                      博物馆 </a>
                  </li>

                  <li>
                    <a href="/guides/khramy-i-monastyri/">
                      教堂和修道院 </a>
                  </li>

                  <li>
                    <a href="/guides/priroda/">
                      大自然 </a>
                  </li>

                  <li>
                    <a href="/guides/vystavki/">
                      展览会 </a>
                  </li>

                  <li>
                    <a href="/guides/detskiy-otdykh/">
                      儿童假期 </a>
                  </li>

                  <li>
                    <a href="/guides/aktivnyy-otdykh/">
                      户外活动 </a>
                  </li>

                  <li>
                    <a href="/guides/gastronomicheskiy-turizm/">
                      美食旅游 </a>
                  </li>

                  <li>
                    <a href="/guides/zdaniya/">
                      建筑物 </a>
                  </li>

                  <li>
                    <a href="/guides/kultura/">
                      文化 </a>
                  </li>

                  <li>
                    <a href="/guides/muraly/">
                      涂鸦 </a>
                  </li>

                  <li>
                    <a href="/guides/neobychnye-mesta/">
                      不寻常的地方 </a>
                  </li>

                  <li>
                    <a href="/guides/ozdorovitelnyy-turizm/">
                      健康旅游 </a>
                  </li>

                  <li>
                    <a href="/guides/okhota-i-rybalka/">
                      打猎和钓鱼 </a>
                  </li>

                  <li>
                    <a href="/guides/plyazhnyy-otdykh/">
                      海滩度假 </a>
                  </li>

                  <li>
                    <a href="/guides/voinskaya-slava/">
                      朝圣旅游 </a>
                  </li>

                  <li>
                    <a href="/guides/priklyucheniya/">
                      冒险 </a>
                  </li>

                  <li>
                    <a href="/guides/razvlecheniya/">
                      娱乐 </a>
                  </li>

                  <li>
                    <a href="/guides/skulptury-i-byusty/">
                      雕塑和半身像 </a>
                  </li>

                  <li>
                    <a href="/guides/ulitsy/">
                      街道 </a>
                  </li>
                </ul><!-- Статика -->
                <div class="visible-xs">
                  <div class="sidebar-filter-trigger"><span>Фильтр</span></div>
                </div>
                <!-- Статика END -->
                <div class="sidebar-filter-wrapper">
                  <div class="close"></div>
                  <div class="sidebar-filter no-ajax">
                    <form id="guidesCategoryForm" name="guidesForm" action="/guides/">

                      <div class="h4">定居点</div>
                      <div class="form-group">
                        <select name="TOWN" id="filter_city">
                          <option value="">全部</option>
                          <option value="31">巴捷茨基 </option>
                          <option value="6">博罗维奇</option>
                          <option value="1409">布龙尼察 </option>
                          <option value="5">瓦尔代 </option>
                          <option value="3">大诺夫哥罗德 </option>
                          <option value="32">沃洛特</option>
                          <option value="1434">加利察</option>
                          <option value="428">戈里察</option>
                          <option value="451">格鲁吉诺</option>
                          <option value="33">杰缅斯克</option>
                          <option value="1408">扎瓦尔</option>
                          <option value="430">卡缅</option>
                          <option value="2369">科罗斯廷村</option>
                          <option value="34">克雷斯特西</option>
                          <option value="1365">利奇科沃</option>
                          <option value="35">柳比蒂诺</option>
                          <option value="27">小维舍拉</option>
                          <option value="36">马廖沃</option>
                          <option value="37">莫申斯科耶</option>
                          <option value="1411">米亚斯诺伊博尔</option>
                          <option value="28">奥库洛夫卡</option>
                          <option value="38">帕菲诺</option>
                          <option value="29">佩斯托沃 </option>
                          <option value="39">波多耶</option>
                          <option value="7">索利齐</option>
                          <option value="2469">索皮尼</option>
                          <option value="4">旧鲁萨</option>
                          <option value="445">捷索沃-涅特利斯基</option>
                          <option value="40">赫沃伊纳亚</option>
                          <option value="30">霍尔姆</option>
                          <option value="26">丘多沃</option>
                          <option value="41">希姆</option>
                        </select>
                      </div>
                      <div class="form-footer">
                        <div class="btn btn-2 visible-xs filter-apply">Применить</div>
                        <a class="form-reset" href="javascript:void();"><span>取消筛选</span></a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="page-content">

              <div class="guides-list list-wrapper">
                <div class="tr"> <a class="guide-tmb" href="/guides/muzei/"
                    style="background-image:url(images/f2065ff38bc92bb0af638e2869681fad.jpg);" id="bx_4145281613_8">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">157</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>博物馆</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/khramy-i-monastyri/"
                    style="background-image:url(images/943b6946ab483343016befb3787ec215.jpg);" id="bx_4145281613_116">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">203</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>教堂和修道院</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/priroda/"
                    style="background-image:url(images/b91d975584d82be48e860dbd22f03d23.jpg);" id="bx_4145281613_14">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">77</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>大自然</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/vystavki/"
                    style="background-image:url(images/985cf11aa7957e9b347b7b7d2095baec.JPG);" id="bx_4145281613_26">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">85</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>展览会</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/detskiy-otdykh/"
                    style="background-image:url(images/f2239375289a7fc9fc399b3da378e135.jpg);" id="bx_4145281613_6">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">43</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>儿童假期</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/aktivnyy-otdykh/"
                    style="background-image:url(images/8a24d8b07af5070c206c4d3a7d6bd253.jpg);" id="bx_4145281613_1">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">26</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>户外活动</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/gastronomicheskiy-turizm/"
                    style="background-image:url(images/9b46909a545679c28ab03e31c8ab2ca2.jpg);" id="bx_4145281613_3">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">17</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>美食旅游</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/zdaniya/"
                    style="background-image:url(images/718e1d79927e51a3aa40e12a975413ee.jpg);" id="bx_4145281613_124">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">35</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>建筑物</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/kultura/"
                    style="background-image:url(images/87e26acdf375f4015f9ec4749a25ff67.jpg);" id="bx_4145281613_7">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">74</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>文化</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/muraly/"
                    style="background-image:url(images/ee00ab4c61d724b750e8835fd98b4451.jpg);" id="bx_4145281613_121">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">22</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>涂鸦</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/neobychnye-mesta/"
                    style="background-image:url(images/4a58bae63602b66b0be86fa69742da65.jpg);" id="bx_4145281613_9">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">46</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>不寻常的地方</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/ozdorovitelnyy-turizm/"
                    style="background-image:url(images/49cb6d206f42446c8127226fd731575d.jpg);" id="bx_4145281613_10">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">5</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>健康旅游</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/okhota-i-rybalka/"
                    style="background-image:url(images/e4a033c5e0ae87530095b1e9b10977ad.jpg);" id="bx_4145281613_11">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">17</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>打猎和钓鱼</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/plyazhnyy-otdykh/"
                    style="background-image:url(images/87fadad735e367823686660678bf8bc4.jpg);" id="bx_4145281613_12">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">3</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>海滩度假</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/voinskaya-slava/"
                    style="background-image:url(images/76a5ab2e25af89585ada4ef47492a7f4.jpg);" id="bx_4145281613_2">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">88</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>朝圣旅游</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/priklyucheniya/"
                    style="background-image:url(images/8dcd86b8554e635b55ff7f1a0f33d5f7.jpg);" id="bx_4145281613_13">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">4</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>冒险</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/razvlecheniya/"
                    style="background-image:url(images/c4c607218800ff47f450f094ebe7db43.jpg);" id="bx_4145281613_15">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">45</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>娱乐</span></div>
                    </div>
                  </a>
                  <a class="guide-tmb" href="/guides/skulptury-i-byusty/"
                    style="background-image:url(images/a759ee8b6812a77ef2e0879b3896db1e.jpg);" id="bx_4145281613_120">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">59</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>雕塑和半身像</span></div>
                    </div>
                  </a>
                </div>
                <div class="tr"> <a class="guide-tmb" href="/guides/ulitsy/"
                    style="background-image:url(images/b7b534688ac75e14bce1a122896cf6dd.jpg);" id="bx_4145281613_122">
                    <div class="guide-tmb-count">
                      <div class="guide-tmb-count-num">32</div>
                      <div class="guide-tmb-count-ttl">个地点</div>
                    </div>
                    <div class="guide-tmb-inner">
                      <div class="h3"><span>街道</span></div>
                    </div>
                  </a>
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