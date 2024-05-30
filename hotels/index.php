<?php require_once ('../template/head-inner.php') ?>

<body>
  <div class="over-wrapper">
    <?php require_once ('../template/header-inner.php') ?>
      </div>
    </header>

    <div class="main">
      <div class="page-wrapper" style="background-image: url(images/page-wrapper-bg.jpg);">
        <div class="container">
          <div class="page-wrapper-top">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="page-sidebar page-sidebar-l">
                  <!-- Статика -->
                  <!--<pre>--><!--</pre>-->
                  <div class="visible-xs">
                    <div class="sidebar-filter-trigger"><span>Фильтр</span></div>
                  </div>
                  <!-- Статика END -->
                  <div class="sidebar-filter-wrapper">
                    <div class="close"></div>
                    <div class="sidebar-filter">
                      <form class="filter-form" id="hotelsForm" name="hotelsForm" action="/hotels/">
                        <!--<pre>--><!--</pre>-->
                        <div class="h4">Город</div>
                        <div class="form-group">
                          <select name="TOWN" id="filter_city">
                            <option value="">Все</option>
                            <option value="31">Батецкий</option>
                            <option value="6">Боровичи</option>
                            <option value="1409">Бронница</option>
                            <option value="5">Валдай</option>
                            <option value="3">Великий Новгород</option>
                            <option value="33">Демянск</option>
                            <option value="2369">Коростынь</option>
                            <option value="34">Крестцы</option>
                            <option value="35">Любытино</option>
                            <option value="27">Малая Вишера</option>
                            <option value="37">Мошенское</option>
                            <option value="28">Окуловка</option>
                            <option value="29">Пестово</option>
                            <option value="4">Старая �&nbsp;усса</option>
                            <option value="40">Хвойная</option>
                            <option value="26">Чудово</option>
                            <option value="41">Шимск</option>
                          </select>
                        </div>

                        <div class="h4">Тип</div>
                        <div class="form-checkboxes">
                          <div class="form-checkbox">
                            <input type="checkbox" class="checkbox-all" id="TYPE_0">
                            <label for="TYPE_0">Все</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_109" value="109">
                            <label for="TYPE_109">Апартаменты</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_40" value="40">
                            <label for="TYPE_40">База отдыха</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_226" value="226">
                            <label for="TYPE_226">Глэмпинг</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_228" value="228">
                            <label for="TYPE_228">Гостевой дом</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_38" value="38">
                            <label for="TYPE_38">Гостиница</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_41" value="41">
                            <label for="TYPE_41">Санаторий</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="TYPE[]" id="TYPE_39" value="39">
                            <label for="TYPE_39">Хостел</label>
                          </div>
                        </div>

                        <div class="h4">Звезд</div>
                        <div class="form-checkboxes">
                          <div class="form-checkbox">
                            <input type="checkbox" class="checkbox-all" id="STARS_0">
                            <label for="STARS_0">Все</label>
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

                        <div class="h4">Стоимость в сутки</div>
                        <div class="form-checkboxes">
                          <div class="form-checkbox">
                            <input type="checkbox" class="checkbox-all" id="COST_0">
                            <label for="COST_0">Все</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="COST[]" id="COST_500-1000" value="500-1000">
                            <label for="COST_500-1000">от 500 до 1000 р</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="COST[]" id="COST_1500-3000" value="1500-3000">
                            <label for="COST_1500-3000">от 1500 до 3000 р</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="COST[]" id="COST_3000-5000" value="3000-5000">
                            <label for="COST_3000-5000">от 3000 до 5000 р</label>
                          </div>
                          <div class="form-checkbox">
                            <input type="checkbox" name="COST[]" id="COST_5000-10000" value="5000-10000">
                            <label for="COST_5000-10000">от 5000 до 10000 р</label>
                          </div>
                        </div>
                        <div class="form-footer">
                          <div class="btn btn-2 visible-xs filter-apply">Применить</div>
                          <a class="form-reset" href="javascript:void();"><span>Cбросить фильтр </span></a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="page-content">
                  <div class="list-wrapper hotels-list">
                    <div class="objects-list-wrapper">
                      <div class="objects-list">
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/butik-otel-truvor/" id="bx_1454625752_275">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/8d93df3f7dffd576b64491a401950efe.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-15%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/butik-otel-truvor/">
                                  <div class="h3"><span>Бутик-отель «Truvor»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/otel-bianki/" id="bx_1454625752_2696">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/0478b1694c02af74e0573374d9242a0a.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/otel-bianki/">
                                  <div class="h3"><span>Отель "БИАНКИ"</span></div>
                                </a>
                              </div>
                              <div class="hotel-tmb-rating">
                                <div class="hotel-rating">4</div>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/gostinitsa-volkhov/" id="bx_1454625752_1405">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/b33a7e3a229089480314c3b554d1435d.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/gostinitsa-volkhov/">
                                  <div class="h3"><span>Гостиница «Волхов»</span></div>
                                </a>
                              </div>
                              <div class="hotel-tmb-rating">
                                <div class="hotel-rating">4</div>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/otel-viktoriya/" id="bx_1454625752_2898">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/440e0661f682c0af3bf712a55a4ee81c.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-15%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/borovichi/">Боровичи</a></li>
                                </ul>
                                <a href="/hotels/otel-viktoriya/">
                                  <div class="h3"><span>Отель "Виктория"</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/baza-otdykha-lyubytino-khutor/" id="bx_1454625752_469">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/4dcaafcbb9e451d724fcf9d01a1aea2b.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/p-lyubytino/">Любытино</a></li>
                                </ul>
                                <a href="/hotels/baza-otdykha-lyubytino-khutor/">
                                  <div class="h3"><span>База отдыха «Любытино-хутор»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">База отдыха</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/truvor-glamping-glemping-truvor/" id="bx_1454625752_19710">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/e42f2ac7415357458f0d490762f81eec.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-15%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/valda/">Валдай</a></li>
                                </ul>
                                <a href="/hotels/truvor-glamping-glemping-truvor/">
                                  <div class="h3"><span>Truvor glamping Глэмпинг Трувор</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">База отдыха</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/" id="bx_1454625752_2936">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/2cec561e7de15f59f61fc1c0f14ccea8.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-5%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/p-lyubytino/">Любытино</a></li>
                                </ul>
                                <a href="/hotels/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub/">
                                  <div class="h3"><span>Всесезонный курорт «Любогорье» (Горнолыжный клуб)</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">База отдыха</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/rakhmaninov-otel/" id="bx_1454625752_274">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/9c484dcdd41ad5c14ac3e46de15a9849.jpg);">
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/rakhmaninov-otel/">
                                  <div class="h3"><span>�&nbsp;ахманинов. Отель</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/karelinn/" id="bx_1454625752_2641">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/8399fe953062c89b05a9b64d868fe011.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/karelinn/">
                                  <div class="h3"><span>Карелинн</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/butik-otel-yurevskoe-podvore/" id="bx_1454625752_1406">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/fd3cab96ce47cfda4d67dddf46025b24.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/butik-otel-yurevskoe-podvore/">
                                  <div class="h3"><span>Бутик-отель «Юрьевское Подворье»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/gostevoy-dom-valeriya/" id="bx_1454625752_19547">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/54a6d7b4c0fa42ac04dc6289e4b421db.jpeg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/gostevoy-dom-valeriya/">
                                  <div class="h3"><span>Гостевой дом "Валерия"</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостевой дом</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/gostevoy-dom-tri-kota/" id="bx_1454625752_1847">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/bc0efec79f330ef567fb4c7d56327998.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/gostevoy-dom-tri-kota/">
                                  <div class="h3"><span>Гостевой дом "Три кота"</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/otel-welcome-inn/" id="bx_1454625752_280">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/0e4a9ab7831066b991bb543ea9f79085.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/velikiy-novgorod/">Великий Новгород</a></li>
                                </ul>
                                <a href="/hotels/otel-welcome-inn/">
                                  <div class="h3"><span>Отель «Welcome inn»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/gostinitsa-polist/" id="bx_1454625752_1437">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/c83ec3fb5e0cea76839054a5640830fc.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/staraya-russa/">Старая �&nbsp;усса</a></li>
                                </ul>
                                <a href="/hotels/gostinitsa-polist/">
                                  <div class="h3"><span>Гостиница «Полисть»</span></div>
                                </a>
                              </div>
                              <div class="hotel-tmb-rating">
                                <div class="hotel-rating">3</div>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="tr">
                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/mini-otel-santa-russa/" id="bx_1454625752_20346">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/475a93c506a1a381a0032c89c51ec852.jpg);">
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/staraya-russa/">Старая �&nbsp;усса</a></li>
                                </ul>
                                <a href="/hotels/mini-otel-santa-russa/">
                                  <div class="h3"><span>Мини-отель «Санта �&nbsp;усса»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="object-tmb hotel-tmb">
                            <a href="/hotels/dizayn-otel-seliger-klub/" id="bx_1454625752_23460">
                              <div class="object-tmb-pic"
                                style="background-image: url(images/911d33d948fb5f72e5b2afb4db6bd755.jpg);">
                                <div class="object-tmb-info">


                                  <div class="object-tmb-info-item">
                                    <div class="object-info-num">-10%%</div>
                                    <div class="object-info-ttl">скидка по�&nbsp;карте гостя</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="object-tmb-descr">
                              <div class="hotel-tmb-descr">
                                <ul class="object-tmb-tags">
                                  <li><a href="/cities/p-demyansk/">Демянск</a></li>
                                </ul>
                                <a href="/hotels/dizayn-otel-seliger-klub/">
                                  <div class="h3"><span>Дизайн-отель «Селигер клуб»</span></div>
                                </a>
                              </div>
                              <div class="object-tmb-data">
                                <div class="object-data-item">
                                  <div class="ico ico-type-hotel"></div>
                                  <div class="text">Гостиница</div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="show-more-wrapper">
                      <a class="show-more hotels-show-more" href="/hotels/?TOWN=0&amp;PAGEN_7=2&amp;PAGEN_1=2">
                        Показать еще
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