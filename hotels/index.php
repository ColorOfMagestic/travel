<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
  </div>

  <div class="main">
    <div class="page-wrapper" style="background-image: url(images/page-wrapper-bg.jpg);">
      <div class="container">
        <div class="page-wrapper-top">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="page-sidebar page-sidebar-l">
                <!-- Статика -->
                <!--<pre>--><!--</pre>-->
                <!-- <div class="visible-xs">
                  <div class="sidebar-filter-trigger"><span>过滤器</span></div>
                </div> -->
                <!-- Статика END -->
                <!-- <div class="sidebar-filter-wrapper">
                  <div class="close"></div>
                  <div class="sidebar-filter">
                    <form class="filter-form" id="hotelsForm" name="hotelsForm" action="">
                      <div class="h4">城市</div>
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


                      <div class="h4">类型</div>
                      <div class="form-checkboxes">
                        <div class="form-checkbox">
                          <input type="checkbox" class="checkbox-all" id="TYPE_0">
                          <label for="TYPE_0">全部</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_109" value="109">
                          <label for="TYPE_109">公寓</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_40" value="40">
                          <label for="TYPE_40">娱乐设施</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_226" value="226">
                          <label for="TYPE_226">豪华露营</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_228" value="228">
                          <label for="TYPE_228">招待所</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_38" value="38">
                          <label for="TYPE_38">酒店</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_41" value="41">
                          <label for="TYPE_41">疗养院</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="TYPE[]" id="TYPE_39" value="39">
                          <label for="TYPE_39">旅馆</label>
                        </div>
                      </div>

                      <div class="h4">星级</div>
                      <div class="form-checkboxes">
                        <div class="form-checkbox">
                          <input type="checkbox" class="checkbox-all" id="STARS_0">
                          <label for="STARS_0">全部</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="STARS[]" id="STARS_49" value="49">
                          <label for="STARS_49">1</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="STARS[]" id="STARS_48" value="48">
                          <label for="STARS_48">2</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="STARS[]" id="STARS_47" value="47">
                          <label for="STARS_47">3</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="STARS[]" id="STARS_46" value="46">
                          <label for="STARS_46">4</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="STARS[]" id="STARS_45" value="45">
                          <label for="STARS_45">5</label>
                        </div>
                      </div>

                      <div class="h4">一天的费用</div>
                      <div class="form-checkboxes">
                        <div class="form-checkbox">
                          <input type="checkbox" class="checkbox-all" id="COST_0">
                          <label for="COST_0">全部</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="COST[]" id="COST_500-1000" value="500-1000">
                          <label for="COST_500-1000">500至1000卢布</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="COST[]" id="COST_1500-3000" value="1500-3000">
                          <label for="COST_1500-3000">1500至3000卢布</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="COST[]" id="COST_3000-5000" value="3000-5000">
                          <label for="COST_3000-5000">3000至5000卢布</label>
                        </div>
                        <div class="form-checkbox">
                          <input type="checkbox" name="COST[]" id="COST_5000-10000" value="5000-10000">
                          <label for="COST_5000-10000">5000至10000卢布</label>
                        </div>
                      </div>
                      <div class="form-footer">
                        <div class="btn btn-2 visible-xs filter-apply">Применить</div>
                        <a class="form-reset" href="javascript:void();"><span>取消筛选</span></a>
                      </div>
                    </form>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
              <div class="page-content">
                <div class="list-wrapper hotels-list">
                  <div class="objects-list-wrapper">
                    <div class="objects-list">
                      <div class="tr">
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/inturist/" id="bx_3218110189_272">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/inturist/">
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
                          <a href="../hotels/butik-otel-truvor/" id="bx_1454625752_275">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/butik-otel-truvor/">
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
                          <a href="../hotels/gostinitsa-sadko/" id="bx_3218110189_278">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/gostinitsa-sadko/">
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
                          <a href="../hotels/kurort-staraya-russa/" id="bx_3218110189_343">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/de5e3fc37a2bc6eb10e536be4c84ddca.jpg);">
                              <div class="object-tmb-info">


                                <div class="object-tmb-info-item">
                                  <div class="object-info-num">-18%</div>
                                  <div class="object-info-ttl">斯客人卡”的折扣。</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="object-tmb-descr" style="min-height: 238.5px;">
                            <div class="hotel-tmb-descr" style="min-height: 186.5px;">
                              <ul class="object-tmb-tags">
                                <li><a href="/cities/staraya-russa/">旧鲁萨</a></li>
                              </ul>
                              <a href="../hotels/kurort-staraya-russa/">
                                <div class="h3"><span>«旧鲁萨» 基地度假</span></div>
                              </a>
                            </div>
                            <div class="object-tmb-data">
                              <div class="object-data-item">
                                <div class="ico ico-type-hotel"></div>
                                <div class="text">疗养院</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tr">
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/gostinitsa-valday-eko-klub/" id="bx_3218110189_347">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/d606590b3bf68369611196227607d27a.jpg);">
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
                                <li><a href="/cities/valda/">瓦尔代</a></li>
                              </ul>
                              <a href="../hotels/gostinitsa-valday-eko-klub/">
                                <div class="h3"><span>“瓦尔代生态俱乐部”酒店</span></div>
                              </a>
                            </div>
                            <div class="object-tmb-data">
                              <div class="object-data-item">
                                <div class="ico ico-type-hotel"></div>
                                <div class="text">娱乐设施</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/gostinitsa-volkhov/" id="bx_1454625752_1405">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/gostinitsa-volkhov/">
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
                      <div class="tr">
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/butik-otel-yurevskoe-podvore/" id="bx_1454625752_1406">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/fd3cab96ce47cfda4d67dddf46025b24.jpg);">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/butik-otel-yurevskoe-podvore/">
                                <div class="h3"><span>«尤里耶夫大院»精品酒店</span></div>
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
                          <a href="../hotels/otel-bianki/" id="bx_1454625752_2696">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/0478b1694c02af74e0573374d9242a0a.jpg);">
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
                                <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                              </ul>
                              <a href="../hotels/otel-bianki/">
                                <div class="h3"><span>"比安奇"酒店</span></div>
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
                      <div class="tr">
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/" id="bx_1454625752_2936">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/2cec561e7de15f59f61fc1c0f14ccea8.jpg);">
                              <div class="object-tmb-info">


                                <div class="object-tmb-info-item">
                                  <div class="object-info-num">-5%</div>
                                  <div class="object-info-ttl">斯客人卡”的折扣。</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="object-tmb-descr" style="min-height: 153.5px;">
                            <div class="hotel-tmb-descr" style="min-height: 122.5px;">
                              <ul class="object-tmb-tags">
                                <li><a href="/cities/p-lyubytino/">柳比蒂诺</a></li>
                              </ul>
                              <a href="../hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/">
                                <div class="h3"><span>“柳博戈列”
                                    全季节度假村（滑雪俱乐部）
                                  </span></div>
                              </a>
                            </div>
                            <div class="object-tmb-data">
                              <div class="object-data-item">
                                <div class="ico ico-type-hotel"></div>
                                <div class="text">娱乐设施</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="object-tmb hotel-tmb">
                          <a href="../hotels/truvor-glamping-glemping-truvor/" id="bx_1454625752_19710">
                            <div class="object-tmb-pic"
                              style="background-image: url(images/e42f2ac7415357458f0d490762f81eec.jpg);">
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
                                <li><a href="/cities/valda/">瓦尔代</a></li>
                              </ul>
                              <a href="../hotels/truvor-glamping-glemping-truvor/">
                                <div class="h3"><span> “特鲁沃尔”豪华露营(Truvor glamping)</span></div>
                              </a>
                            </div>
                            <div class="object-tmb-data">
                              <div class="object-data-item">
                                <div class="ico ico-type-hotel"></div>
                                <div class="text">娱乐设施</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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