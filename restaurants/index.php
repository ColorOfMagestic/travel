<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>

    <div class="main">
      <div class="page-wrapper" style="background-image: url(images/page-wrapper-bg.jpg);">
        <div class="container">
          <div class="page-wrapper-top">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="page-sidebar page-sidebar-l">

                  <!-- Статика -->
                  <!-- <div class="visible-xs">
                    <div class="sidebar-filter-trigger"><span>过滤器</span></div>
                  </div> -->
                  <!-- Статика END -->
                  <!-- <div class="sidebar-filter-wrapper">
                    <div class="close"></div>
                    <div class="sidebar-filter">
                      <form class="filter-form" id="restaurantsForm" name="restaurantsForm" action="">
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
                            <input type="checkbox" name="TYPE[]" id="TYPE_64" value="64">
                            <label for="TYPE_64">餐厅</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_110" value="110">
                            <label for="TYPE_110">酒吧和酒馆</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_65" value="65">
                            <label for="TYPE_65">咖啡厅和咖啡店</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_217" value="217">
                            <label for="TYPE_217">食堂</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_66" value="66">
                            <label for="TYPE_66">饮食店</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_67" value="67">
                            <label for="TYPE_67">牛排馆</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_68" value="68">
                            <label for="TYPE_68">中亚餐厅</label>
                          </div>
                        </div>

                        <div class="h4">饭菜</div>
                        <div class="form-checkboxes">
                          <div class="form-checkbox">
                            <input type="checkbox" class="checkbox-all" id="KITCHEN_0">
                            <label for="KITCHEN_0">全部</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_69" value="69">
                            <label for="KITCHEN_69">招牌菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_70" value="70">
                            <label for="KITCHEN_70">美国菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_221" value="221">
                            <label for="KITCHEN_221">达吉斯坦美食</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_71" value="71">
                            <label for="KITCHEN_71">欧洲菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_72" value="72">
                            <label for="KITCHEN_72">意大利菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_73" value="73">
                            <label for="KITCHEN_73">高加索菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_74" value="74">
                            <label for="KITCHEN_74">德国菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_75" value="75">
                            <label for="KITCHEN_75">俄罗斯菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_227" value="227">
                            <label for="KITCHEN_227">乌兹别克菜</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="KITCHEN[]" id="KITCHEN_76" value="76">
                            <label for="KITCHEN_76">日本菜</label>
                          </div>
                        </div>

                        <div class="h4">平均账单</div>
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
                          <div class="form-checkbox">
                            <input type="checkbox" name="COST[]" id="COST_10000-50000" value="10000-50000">
                            <label for="COST_10000-50000">10000至50000卢布</label>
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
                  <div class="list-wrapper">

                    <div class="objects-list-wrapper">
                      <div class="objects-list">
                        <div class="tr">
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/kafe-sudarushka/" id="bx_3218110189_298">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>咖啡厅和咖啡店</li>
                                </ul>
                                <a href="../restaurants/kafe-sudarushka/">
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
                            <a href="../restaurants/restoran-lyubytino-khutor/" id="bx_1454625752_471">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/a2bdb5ffdbe831bdcd95b1f8462d3a68.jpg);">
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
                                  <li><a href="/cities/p-lyubytino/">柳比蒂诺</a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/restoran-lyubytino-khutor/">
                                  <div class="h3"><span>«柳比蒂诺-农场» 餐厅</span></div>
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
                        <div class="tr">
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/restoran-marusya-marusya/" id="bx_1454625752_1380">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/restoran-marusya-marusya/">
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
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/restoran-yurevskoe-podvore/" id="bx_1454625752_1381">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/0567fe04f602507ca4567889fc9ca295.jpg);">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/restoran-yurevskoe-podvore/">
                                  <div class="h3"><span>«尤里耶夫大院» 餐厅</span></div>
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
                        <div class="tr">
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/restoran-karamazovy/" id="bx_1454625752_1382">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/4dcceb368f85c4837a47e7c02eb4bd39.jpg);">
                                <div class="object-tmb-info ">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10 на основное меню%</div>
                                    <div class="object-info-ttl">斯客人卡”的折扣。</div>
                                  </div>


                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr" style="min-height: 153.5px;">
                              <div class="rest-tmb-descr" style="min-height: 112.5px;">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/staraya-russa/">旧鲁萨</a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/restoran-karamazovy/">
                                  <div class="h3"><span>«卡拉马助夫» 餐厅</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-cuisine"></div>
                                  <div class="text">
                                    <ul class="object-tmb-tags">
                                      <li>招牌菜</li>
                                      <li>欧洲菜</li>
                                      <li>俄罗斯菜</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/gastrobar-naffiga-koze-bayan-/" id="bx_1454625752_2554">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/f0485a5e4ccceb6baa97e64319b4ba0d.jpg);">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>酒吧和酒馆</li>
                                </ul>
                                <a href="../restaurants/gastrobar-naffiga-koze-bayan-/">
                                  <div class="h3"><span>“为什么山羊需要手风琴？！”美食酒吧</span></div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tr">
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/charodeyka-bar/" id="bx_1454625752_2556">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>酒吧和酒馆</li>
                                </ul>
                                <a href="../restaurants/charodeyka-bar/">
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
                            <a href="../restaurants/restoran-most-most/" id="bx_3218110189_3296">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/3b76b5336f2e03d09012dbf785f7d6a7.jpeg);">
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
                                  <li><a href="/cities/borovichi/">博罗维奇</a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/restoran-most-most/">
                                  <div class="h3"><span>“桥” 餐厅 (MOST)</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-cuisine"></div>
                                  <div class="text">
                                    <ul class="object-tmb-tags">
                                      <li>招牌菜</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tr">
                          <div class="object-tmb rest-tmb">
                            <a href="../restaurants/eko-klub-valday/" id="bx_3218110189_18725">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/a126a95d45a786ee21ae3eb1c9f304fd.jpg);">
                              </div>
                            </a>
                            <div class="object-tmb-descr" style="min-height: 153.5px;">
                              <div class="rest-tmb-descr" style="min-height: 112.5px;">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/valda/">瓦尔代</a></li>
                                  <li>餐厅</li>
                                </ul>
                                <a href="../restaurants/eko-klub-valday/">
                                  <div class="h3"><span> «瓦尔代生态俱乐部» 餐厅</span></div>
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
                            <a href="../restaurants/sytyy-gus-kafe-restoran-russkoy-kukhni/" id="bx_3218110189_20407">
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
                                  <li><a href="/cities/velikiy-novgorod/">大诺夫哥罗德 </a></li>
                                  <li>餐厅</li>
                                  <li>咖啡厅和咖啡店</li>
                                </ul>
                                <a href="../restaurants/sytyy-gus-kafe-restoran-russkoy-kukhni/">
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
                    <!-- <div class="show-more-wrapper">
                      <a class="show-more restaurants-show-more"
                        href="..../restaurants/?TOWN=0&amp;PAGEN_7=2&amp;PAGEN_1=2">
                        Показать еще
                      </a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
