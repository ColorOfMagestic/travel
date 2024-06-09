var isIE9OrBelow = function() {
  return /MSIE\s/.test(navigator.userAgent) && parseFloat(navigator.appVersion.split("MSIE")[1]) < 10;
}

var numFormat = wNumb({
  thousand: ' '
});

$(window).on("scroll touchmove", function () {
  var scrollPos = $(window).scrollTop();
  if (scrollPos > 50) {
    if (!$("header").hasClass("header-fixed")) {
      $("header").addClass("header-fixed");
    }
  } else {
    if ($("header").hasClass("header-fixed")) {
      $("header").removeClass("header-fixed");
    }
  }
});

$(window).scroll(function () {
  anchorsMenu();
  stickySidebar();
});

$(window).resize(function () {
  makeUp();
  //swapElements();
  slickResponsive();
});

$(window).on("load", function () {
  makeUp();
});

$(document).ready(function () {
  var $page = $('html, body');
  $('.slow-scroll').on('click', function (e) {
    e.preventDefault();
    $page.animate({
      scrollTop: $($(this)[0].hash).offset().top
    }, 500);
    return false;
  });

  $('.init-map').each(function () {
    var id = $(this).attr('id');
    var url = $(this).attr('data-url');
    var item = $(this).attr('data-item');
    ymaps.ready(function(){
      initMapObjects(id, url, item)
    });
  });
  
  var infoWinMap = new Array();
  var markersMap = new Array();
  var omap;

  function initMapObjects(id, url, item) {
    var map = new ymaps.Map(document.getElementById(id), {
      zoom: $('#'+id).attr('data-zoom')?parseInt($('#'+id).attr('data-zoom')):14,
      center: [58.5294900,31.2768700],
    });
    //console.log();
    map.behaviors.disable('dblClickZoom');
    map.behaviors.disable('multiTouch');
    map.behaviors.disable('rightMouseButtonMagnifier');
    map.behaviors.disable('leftMouseButtonMagnifier');
    map.behaviors.disable('ruler');

    omap = map;
    if (item != undefined && item > 0) {
      item = item;
    } else {
      item = 0;
    }
    if (url != '') {
      var params = {'ajax': 1, 'get_objects': id};
      if (item > 0) {
        params['item'] = item;
      }
      $.ajax({
        type: 'get',
        url: url,
        dataType: 'json',
        data: params,
        success: function (data) {

          if (data) {
            var k = 0;
            for (var i in data.points) {
              if (data.points[i].id != undefined) {
                var point = data.points[i];
                addPointToMap(map, point, item);
                k++;
              }
            }

            if (k == 1) {
              map.setZoom(16);
              map.setCenter([point['position_x'], point['position_y']]);
            }

            if ($('#map-filters').length) {
              $('#map-filters').each(initFiltersMap);
            }

            //item.options.set('visible', false);
          }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
          console.log(textStatus);
        }
      });
    }
  }

  function addPointToMap(map, point, item) {


    if (item == 0) {
      var content = '<div class="map-popup-info">';
      if (point.image != '') {
        content += '<a href="' + point.url + '"><img src="' + point.image + '" width="100" style="float:left;margin-right:15px" alt="' + point.name + '" /></a>';
      }
      content += '<p class="name"><strong>' + point.name + '</strong></p>';
      if (point.address != '' && point.address != undefined) {
        content += '<p><strong>Адрес:</strong> ' + point.address + '</p>';
      }
      if (point.work_time != '' && point.work_time != undefined) {
        content += '<p><strong>Время работы:</strong> ' + point.work_time + '</p>';
      }
      if (point.phone != '' && point.phone != undefined) {
        content += '<p><strong>Тел.:</strong> <a href="tel:">' + point.phone + '</a></p>';
      }
      if (point.email != '' && point.email != undefined) {
        content += '<p><strong>Email:</strong> <a href="mailto:' + point.email + '">' + point.email + '</a></p>';
      }
      content += '<p class="descr">' + point.description + '</p>';
      if (point.url != '') {
        content += '<a href="' + point.url + '" style="float:right">подробнее</a>';
      }
      content += '</div>';
    } else {
      content = point['name'];
    }


    var icons = new Array();

    icons['default'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point.png',
      iconImageSize: [24, 28],
      //iconImageOffset: [0, 28]
    },{
      collection_id: point['collection_id']
    });
    icons['museum'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-museum.png',
      iconImageSize: [30, 35],
      //iconImageOffset: [0, 35]
    },{
      collection_id: point['collection_id']
    });
    icons['excursion'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-excursion.png',
      iconImageSize: [30, 36],
      //iconImageOffset: [0, 35]
    },{
      collection_id: point['collection_id']
    });
    icons['bus'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-bus.png',
      iconImageSize: [30, 35],
      //iconImageOffset: [0, 35]
    },{
      collection_id: point['collection_id']
    });
    icons['transport'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-bus2.png',
      iconImageSize: [30, 35],
      //iconImageOffset: [0, 35]
    },{
      collection_id: point['collection_id']
    });
    icons['water'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-water.png',
      iconImageSize: [30, 36],
      //iconImageOffset: [0, 36]
    },{
      collection_id: point['collection_id']
    });
    icons['bicycle'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-bicycle.png',
      iconImageSize: [30, 36],
      //iconImageOffset: [0, 36]
    },{
      collection_id: point['collection_id']
    });
    icons['special'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-special.png',
      iconImageSize: [30, 36],
      //iconImageOffset: [0, 36]
    },{
      collection_id: point['collection_id']
    });
    icons['hotel'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-hotel.png',
      iconImageSize: [30, 36],
      //iconImageOffset: [0, 36]
    },{
      collection_id: point['collection_id']
    });
    icons['restaurant'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-restaurant.png',
      iconImageSize: [30, 35],
      //iconImageOffset: [0, 35]
    },{
      collection_id: point['collection_id']
    });
    icons['sale'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-sale.png',
      iconImageSize: [22, 27],
      //iconImageOffset: [0, 27]
    },{
      collection_id: point['collection_id']
    });
    icons['delivery'] = new ymaps.Placemark([point['position_x'], point['position_y']], {
      hintContent: point['name'],
      balloonContent: content
    }, {
      iconLayout: 'default#image',
      iconImageHref: '/upload/map-point/map-point-delivery.png',
      iconImageSize: [22, 27],
      //iconImageOffset: [0, 27]
    },{
      collection_id: point['collection_id']
    });



    var type = point['type'];
    if (type == '' || icons[type] == undefined) {
      type = 'default';
    }


    if (point['collection_id'] > 0) {
      if (markersMap[point['collection_id']] == undefined) {
        markersMap[point['collection_id']] = [];
      }

      markersMap[point['collection_id']].push(icons[type]);
    }else {
      if (markersMap[point['uncat']] == undefined) {
        markersMap[point['uncat']] = [];
      }
      markersMap['uncat'].push(icons[type]);
    }

    map.geoObjects.add(icons[type]);
  }

  function initFiltersMap() {
    var $cont = $(this);
    $cont.find('input[type=checkbox]').bind('change', function () {
      omap.geoObjects.removeAll();
      $cont.find('input[type=checkbox]').each(function () {
        var id = $(this).attr('data-id');
        if (markersMap[id] != undefined) {

          if ($(this).is(':checked')) {
            for (var i in markersMap[id]) {
              omap.geoObjects.add(markersMap[id][i]);
            }
            omap.setBounds(omap.geoObjects.getBounds(), {checkZoomRange:true});
          }

        }
      });
    });
    $cont.find('input[type=checkbox]:eq(0)').trigger('change');
  }

  var scrollPos = $(window).scrollTop();
  if (scrollPos > 50) {
    if (!$("header").hasClass("header-fixed")) {
      $("header").addClass("header-fixed");
    }
  } else {
    if ($("header").hasClass("header-fixed")) {
      $("header").removeClass("header-fixed");
    }
  }
  slickResponsive();
  stickySidebar();
  //swapElements();
  // Header dropdowns
  if ($("#mobile-indicator").css("display") != "block") {
    $("[data-dropdown-hover]").on("mouseenter", function (e) {
      var dropdown = $($(this).data("dropdown-hover"));
      dropdown.fadeIn(150);
    });
    $("[data-dropdown-hover]").on("mouseleave", function (e) {
      var dropdown = $($(this).data("dropdown-hover"));
      dropdown.fadeOut(150);
    });
  } else {
    $("[data-dropdown-hover='.header-dropdown-user']").on("click", function (e) {
      var dropdown = $($(this).data("dropdown-hover"));
      dropdown.fadeIn(150);
    });
    $("body").on("click", function (e) {
      if ($(e.target).data("dropdown-hover") != ".header-dropdown-user" && $(e.target).closest("li").data("dropdown-hover") != ".header-dropdown-user") {
        $(".header-dropdown.dropdown-hover").fadeOut(150, function () {
          $(".header-dropdown.dropdown-hover").removeClass("active");
        });
      }
    });
  }
  $("[data-dropdown]").click(function (e) {
    if ($($(this).data("dropdown")).length && !$(e.target).hasClass("btn-ok")) {
      var dropdown = $($(this).data("dropdown"));
      $(".header-dropdown").not(dropdown).fadeOut(150, function () {
        $(".header-dropdown").not(dropdown).removeClass("active");
      });
      if (!dropdown.hasClass("active")) {
        dropdown.fadeIn(150, function () {
          dropdown.addClass("active");
        });
      } else {
        dropdown.fadeOut(150, function () {
          dropdown.removeClass("active");
        });
      }
    }
  });
  $("body").on("click", function (e) {
    if (!$(e.target).hasClass("dropdown-trigger") && !$(e.target).parents().hasClass("dropdown-trigger") && !$(e.target).hasClass("header-dropdown") && !$(e.target).parents().hasClass("header-dropdown") && !$(e.target).hasClass("dropdown-hover") && !$(e.target).parents().hasClass("dropdown-hover")) {
      $(".header-dropdown").not(".dropdown-hover").fadeOut(150, function () {
        $(".header-dropdown").not(".dropdown-hover").removeClass("active");
      });
    }
  });
  $(".header-dropdown .btn-ok").click(function () {
    var dropdown = $(this).closest(".header-dropdown");
    dropdown.fadeOut(150, function () {
      dropdown.removeClass("active");
    });
  });
  // Form reset

  $("body").on("click", ".form-reset", function () {
    $(this).closest("form")[0].reset();
    if ($(this).closest("form").find(".picker__input").length) {
      $(this).closest("form").find(".picker__input").data( 'pickadate' ).clear();
    }
    $(this).closest("form").find(":checked").attr("checked",false);
    $(this).closest("form").find("select").each(function () {
      $(this).val($(this).find("option:first-child").attr("value")).change();
    });
    $(this).closest("form").change();
    return false;
  });
  // Full menu
  $(".submenu-trigger").click(function () {
    $(".full-menu").fadeIn(350);
  });

  $(".full-menu .close").click(function () {
    $(".full-menu").fadeOut(150);
  });

  // Main slider
  $(".main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    swipe: false,
    fade: true
  });

  // Main slider END
  $(".contacts-item h2, .contacts-item .h2").click(function () {
    var contactsItem = $(this).closest(".contacts-item");
    var contactsItemDescr = $(this).closest(".contacts-item").find(".contacts-item-descr");
    contactsItemDescr.slideToggle(500,function () {
      contactsItem.toggleClass("active");
    });
  });

  $(".expandable-form-trigger").click(function () {
    $($(this).data("target")).fadeIn(150);
  });

  $(".expandable-form .close").click(function () {
    $(this).closest(".expandable-form").fadeOut(250);
  });

  $(".expandable-form").click(function (e) {
    var exForm = $(this);
    if (!$(e.target).hasClass("expandable-form-inner") && !$(e.target).parents().hasClass("expandable-form-inner")) {
      exForm.fadeOut(250);
    }
  });

  $(".trust-list .row").slick({
    adaptiveHeight: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });

  // Mobile
  // Form tabs
  $(".form-tabs").each(function () {
    var formTabs = $(this);
    var triggerText = $(this).find("li.active").text();
    var formTabsTrigger = $('<div class="form-tabs-trigger">' + triggerText + '</div>');
    formTabs.before(formTabsTrigger);
    formTabsTrigger.on("click", function () {
      formTabs.fadeToggle(150, function () {
        formTabsTrigger.toggleClass("active");
      });
    });
  });

  $(".form-tabs a").click(function () {
    if ($("#mobile-indicator").css("display") == "block") {
      $(".form-tabs").fadeOut(150);
    }
  });

  // Gear table
  $(".gear-table td").each(function() {
    var thisTd = $(this);
    var thisTh = thisTd.closest("table").find("th").filter(function() {
      return $(this).prevAll().length == thisTd.prevAll().not(".td-th").length
    });
    thisTd.before('<td class="td-th">' + thisTh.text() + '</td>');
  });

  // All-link
  $(".page-section-header .all-link").each(function () {
    var allLinkClone = $(this).clone();
    allLinkClone.addClass("all-link-mob")
    $(this).closest(".page-section-header").append(allLinkClone);
  });

  // Section header button
  $(".section-header .section-header-button").each(function () {
    var buttonClone = $(this).clone();
    buttonClone.addClass("section-header-button-mob")
    $(this).closest(".section-header").append(buttonClone);
  });

  // Main menu
  $(".menu-trigger").click(function () {
    $(".header-menu").fadeIn(150);
  });

  $(".header-menu .close").click(function () {
    $(".header-menu").fadeOut(150);
  });

  $(".header-menu").click(function (e) {
    if (!$(e.target).hasClass("header-menu-inner") && !$(e.target).parents().hasClass("header-menu-inner")) {
      $(".header-menu").fadeOut(150);
    }
  });

  // Categories menu
  var categoriesMenu = $(".categories-menu");
  if (categoriesMenu.find("a.active").length) {
    var triggerText = categoriesMenu.find("a.active").text();
  } else {
    if ($(".page-header h1").length) {
      var triggerText = $(".page-header h1").text();
    } else if ($(".page-header .h1").length) {
      var triggerText = $(".page-header .h1").text();
    }
  }

  var categoriesMenuTrigger = $('<div class="side-menu-trigger">' + triggerText + '</div>');
  categoriesMenu.closest(".categories-menu-wrapper").before(categoriesMenuTrigger);
  categoriesMenuTrigger.on("click", function () {
    categoriesMenu.closest(".categories-menu-wrapper").fadeToggle(150, function () {
      //$("body").toggleClass("mobile-menu-open");
      categoriesMenuTrigger.closest(".categories-menu-wrapper").toggleClass("active");
    });
  });

  $(".categories-menu-wrapper .close").click(function () {
    $(".categories-menu-wrapper").fadeOut(150,function () {
      $(".categories-menu-wrapper").removeClass("active");
    });
  });

  // Section menu
  var sectionMenu = $(".section-menu");
  if (sectionMenu.find("a.active").length) {
    var triggerText = sectionMenu.find("a.active").text();
  } else {
    if ($(".page-header h1").length) {
      var triggerText = $(".page-header h1").text();
    } else if ($(".page-header .h1").length) {
      var triggerText = $(".page-header .h1").text();
    }
  }

  var sectionMenuTrigger = $('<div class="side-menu-trigger">' + triggerText + '</div>');
  sectionMenu.closest(".section-menu-wrapper").before(sectionMenuTrigger);
  sectionMenuTrigger.on("click", function () {
    sectionMenu.closest(".section-menu-wrapper").fadeToggle(150, function () {
      //$("body").toggleClass("mobile-menu-open");
      sectionMenuTrigger.closest(".section-menu-wrapper").toggleClass("active");
    });
  });

  $(".section-menu-wrapper .close").click(function () {
    $(".section-menu-wrapper").fadeOut(150,function () {
      $(".section-menu-wrapper").removeClass("active");
    });
  });

  // Catalog filter
  $(".sidebar-filter-trigger").click(function () {
    $(".sidebar-filter-wrapper").fadeIn(200);
  });

  $(".sidebar-filter-wrapper .close, .sidebar-filter-wrapper .filter-apply").click(function () {
    $(".sidebar-filter-wrapper").fadeOut(200);
  });

  $("body").on("click", function (e) {
    if (!$(e.target).hasClass("catalog-filter-trigger") && !$(e.target).parents().hasClass("catalog-filter-trigger") && !$(e.target).hasClass("catalog-filter-inner") && !$(e.target).parents().hasClass("catalog-filter-inner") && $(".catalog-filter .close").css("display") == "block" && $(".catalog-filter").css("display") == "block") {
      $(".catalog-filter").fadeOut(200);
    }
  });
  
  // Sidebar object map
  $(".btn-object-map").click(function () {
    $(".sidebar-object-map").fadeIn(150);
  });

  $(".sidebar-object-map .close").click(function () {
    $(".sidebar-object-map").fadeOut(150);
  });

  // Sidebar route map
  $(".btn-route-map").click(function () {
    $(".sidebar-route-map").fadeIn(150);
  });

  $(".sidebar-route-map .close").click(function () {
    $(".sidebar-route-map").fadeOut(150);
  });

  // Office map
  $(".office-map-link").click(function () {
    $(this).closest(".office-tmb").find(".office-tmb-map-wrapper").fadeIn(150);
  });

  $(".office-tmb-map-wrapper .close").click(function () {
    $(this).closest(".office-tmb").find(".office-tmb-map-wrapper").fadeOut(150);
  });

  // Contacts map
  $(".contacts-map-btn").click(function () {
    $(".contacts-map-wrapper").addClass("active");
  });

  $(".contacts-map-wrapper .close").click(function () {
    $(".contacts-map-wrapper").removeClass("active");
  });

  // Section expandable
  $(".section-expandable > h2, .section-expandable > .h2").click(function () {
    $(this).closest(".section-expandable").find(".section-expandable-content").slideToggle(350, function () {
      $(this).closest(".section-expandable").toggleClass("closed");
    });
  });

  // Route object
  $(".route-object-header").click(function () {
    $(this).closest(".route-object").find(".route-object-descr").slideToggle(350, function () {
      $(this).closest(".route-object").toggleClass("open");
    });
  });

  // Office object
  $(".office-tmb-header").click(function () {
    $(this).closest(".office-tmb").find(".office-tmb-descr").slideToggle(350, function () {
      $(this).closest(".office-tmb").toggleClass("open");
    });
  });

  // Mobile END
  // Intext video
  $(".intext-video").click(function () {
    $(this).html($(this).data("url"));
  });

  // Anchors menu
  $(".anchors-menu a").click(function () {
    if ($("a[name='"+ $(this).attr("href").replace("#","") +"']").length) {
      $("html,body").animate({
        scrollTop: $("a[name='"+ $(this).attr("href").replace("#","") +"']").offset().top - 80
      },1000);
    }
  });

  $(".program-list .li-name").click(function () {
    var parentLi = $(this).closest("li"),
        liContent = $(this).closest("li").find(".li-content");
    if (!parentLi.hasClass("active")) {
      liContent.slideDown(350, function () {
        parentLi.addClass("active");
      });
    } else {
      liContent.slideUp(350, function () {
        parentLi.removeClass("active");
      });
    }
  });
  
  // Enroll members
  $(".enroll-form .count-radios input").on("change", function () {
    $(".enroll-price-val").html(numFormat.to($(".enroll-form .count-radios input:checked").val() * $(".enroll-form .count-radios input:checked").data("price")));
    $(".enroll-price-old-val").html(numFormat.to($(".enroll-form .count-radios input:checked").val() * $(".enroll-form .count-radios input:checked").data("price-old")));
    membersFields($(".enroll-form .count-radios input:checked").val());
  });
  
  $(".enroll-form .btn-enroll-add").click(function () {
    //membersFields($(".enroll-members .form-group").length + 1);
    if ($(".enroll-members .form-group").length + 1 <= 6 ) {
      $(".enroll-form .count-radios input").filter(function () {
        return $(this).val() == $(".enroll-members .form-group").length + 1;
      }).attr("checked", true).change();
    } else {
      membersFields($(".enroll-members .form-group").length + 1);
    }
  });

  // Catalog item gallery
  $(".catalog-gallery-slider").on("init", function () {
    $(".catalog-gallery-thumbs .thumbs-item").click(function () {
      $(".catalog-gallery-slider").slick("slickGoTo", $(this).prevAll().length);
    });
  });

  $('.catalog-gallery-slider').on('afterChange', function(event, slick, currentSlide){
    $(".catalog-gallery-thumbs .thumbs-item").removeClass("active");
    $(".catalog-gallery-thumbs .thumbs-item").filter(function () {
      return $(this).prevAll().length == currentSlide;
    }).addClass("active");
  });

  $(".catalog-gallery-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    swipe: false,
    adaptiveheight: true,
    fade: true
  });

  // Item count
  $("body").on("click", ".catalog-tmb .count-units-item", function () {
    $(this).closest(".count-units").find(".count-units-item").removeClass("active");
    $(this).addClass("active");
    countCatalogItem($(this).closest(".catalog-tmb"));
  });

  $("body").on("click", ".btn-count-minus, .btn-count-plus", function () {
    var btn = $(this),
      field = $(this).closest(".count").find("input[type=text]");
    if (btn.hasClass("btn-count-minus") && field.val()*1 > 0) {
      var newVal = field.val()*1 - 1;
      field.val(newVal);
    }
    if (btn.hasClass("btn-count-plus")) {
      var newVal = field.val()*1 + 1;
      field.val(newVal);
    }
    if ($(this).closest(".catalog-tmb").length) {
      countCatalogItem($(this).closest(".catalog-tmb"));
    }
    if ($(this).closest(".cart-item").length) {
      countCartItem($(this).closest(".cart-item"));
      cartTotal();
    }
    if ($(this).closest(".buy-form").length) {
      buyTotal();
    }

    //cartTotal();
  });

  // Expandable

  $(".expandable-trigger").click(function () {

    var exTrigger = $(this),
        exWrapper = $(this).closest(".expandable"),
        exContent = $(this).closest(".expandable").find(".expandable-content");

    if (!$(this).hasClass("active")) {

      exContent.slideDown(350, function () {
        exTrigger.addClass("active");
        exWrapper.addClass("open");
      });

    } else {
      exContent.slideUp(350, function () {
        exTrigger.removeClass("active");
        exWrapper.removeClass("open");
      });
    }

  });

  $(".top-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    adaptiveHeight: true
  });

  // Map

  $("#map area, .map-num").on("mouseenter", function () {

    $(".map-regions").css({
      backgroundPosition: "0 -" + $(this).data("index")*507 + "px"
    });

    $(".map-num[data-index='" + $(this).data("index") + "']").addClass("active");
    $(".map-region-tmb[data-index='" + $(this).data("index") + "']").addClass("active");

  }).on("mouseleave", function () {
    $(".map-regions").css({
      backgroundPosition: "0 0"
    });

    $(".map-num").removeClass("active");
    $(".map-region-tmb").removeClass("active");

  });

  $(".map-region-tmb").on("mouseenter", function () {

    $(".map-regions").css({
      backgroundPosition: "0 -" + $(this).data("index")*507 + "px"
    });

    $(".map-num[data-index='" + $(this).data("index") + "']").addClass("active");

  }).on("mouseleave", function () {

    $(".map-regions").css({
      backgroundPosition: "0 0"
    });

    $(".map-num").removeClass("active");

  });

  $("#map area").click(function () {
    return false;
  });

  $(".side-menu .li-arrow").click(function () {

    var parentLi = $(this).closest("li"),
        submenu = $(this).closest("li").children("ul"),
        liArrow = $(this);

    liArrow.toggleClass("active");

    if (!parentLi.hasClass("active")) {

      submenu.slideDown(250, function () {
        parentLi.addClass("active");
      });

    } else {

      submenu.slideUp(250, function () {
        parentLi.removeClass("active");
      });

    }

  });
  

  
  // News filter
  
  $("#filter_date").pickadate({
    monthsFull: monthsFullNames,
    weekdaysShort: weekdaysShortNames,
    format: 'd.mm.yyyy',
    selectYears: true,
    selectMonths: true,
    onStart: function () {
      $("#filter_date").next(".picker").find("select").prop("disabled", false);
    },
    onSet: function () {
      $("#filter_date").next(".picker").find("select").prop("disabled", false);
    }
  });

  window.filter_date = false;
  if ($("#filter_date").length > 0) {
    var filterDatepicker = $("#filter_date").pickadate('picker');
    filterDatepicker.on("set", function () {
      if( (!window.filter_date) || (window.filter_date!=filterDatepicker.get("value")) )
        window.filter_date = filterDatepicker.get("value");
      else{
        window.filter_date = false;
        filterDatepicker.clear();
        //$("#filter_date_submit").change();
      }
    })
  }

  // OLD --------------------------------------------------------------------------

  reviewsMakeup();

  // Reviews list gallery slider

  $(".review-tmb-gallery-slider").slick({
    variableWidth: true,
    slidesToScroll: 3,
    infinite: false
  });

  // Reviews slider

  $(".reviews-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    adaptiveHeight: true
  });

  // Restaurant menu

  $(".rest-menu-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 4
  });

  $(".rest-menu-slider").on("init", function () {

    $(".rest-menu-nav .menu-nav-tmb").click(function () {

      $(this).closest(".rest-menu-nav").find(".menu-nav-tmb").removeClass("active");
      $(this).addClass("active");

      $(".rest-menu-slider").slick("slickGoTo", $(this).closest(".slick-slide").prevAll().not(".slick-cloned").length)

    });

  });

  $(".rest-menu-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    swipe: false,
    arrows: false,
    adaptiveHeight: true
  });

  // Features gallery

  $(".features-galleries-slider").on("init", function () {

    var slider = $(this);

    var navTmbs = $(this).closest(".features-gallery-wrapper").find(".nav-tmb");

    navTmbs.click(function () {

      navTmbs.removeClass("active");

      $(this).addClass("active");

      slider.slick("slickGoTo", $(this).prevAll().length);

    });

  });

  $(".features-galleries-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    swipe: false,
    arrows: false
  });

  $(".features-gallery").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true
  });


  $(".guests-select").each(function () {

    var gSelect = $(this);

    gSelect.on('loaded.bs.select changed.bs.select', function (e) {

      console.log(gSelect.find("option:selected").html());

      var formattedVal = "<span class='select-num'>" + gSelect.val() + "</span>" + "<span class='select-text'>" + declOfNum(gSelect.val(), ['гость', 'гостя', 'гостей']) + "</span>";


      gSelect.siblings(".dropdown-toggle").find(".filter-option").html(formattedVal);

    });


  });


  // Expandable

  $("body").on("click", ".expandable-trigger", function () {

    var exTrigger = $(this);

    if (!exTrigger.hasClass("active")) {

      exTrigger.closest(".expandable").find(".expandable-content").slideDown(500, function () {
        exTrigger.addClass("active").html(exTrigger.data("collapsetext"))
      });

    } else {

      exTrigger.closest(".expandable").find(".expandable-content").slideUp(500, function () {
        exTrigger.removeClass("active").html(exTrigger.data("expandtext"))
      });

    }

  });

  // Photo-slider

  $(".photo-slider-thumbs .slide").click(function () {

    var slider = $(this).closest(".photo-slider-wrapper").find(".photo-slider");

    slider.slick("slickGoTo", $(this).prevAll().length);

    $(this).closest(".photo-slider-thumbs").find(".slide").removeClass("active");
    $(this).addClass("active");

  });

  $(".photo-slider").on("afterChange", function(event, slick, currentSlide) {

    var slider = $(this);
    var sliderThumbs = $(this).closest(".photo-slider-wrapper").find(".photo-slider-thumbs");

    sliderThumbs.find(".slide").removeClass("active");

    sliderThumbs.find(".slide[data-slick-index='" + currentSlide + "']").addClass("active");

    if (!sliderThumbs.find(".slide[data-slick-index='" + currentSlide + "']").hasClass("slick-active")) {

      sliderThumbs.slick("slickGoTo", currentSlide);

    }

  });

  $(".photo-slider-thumbs").on("init", function () {

    $(this).find(".slick-slide[data-slick-index=0]").addClass("active");

  });

  $(".photo-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    lazyLoad: 'ondemand'
  });

  $(".photo-slider-thumbs").slick({
    slidesToShow: 7,
    slidesToScroll: 6,
    infinite: false,
    lazyLoad: 'ondemand'
  });

  $(".object-tmb a").click(function (e) {

    if ($(e.target).hasClass("slick-arrow")) {
      return false;
    }

  });

  $(".object-tmb-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true
  });

  // Side menu

  $(".side-menu-arrow").click(function () {

    var parentLi = $(this).closest("li");

    parentLi.find(".side-submenu").slideToggle(250, function () {
      parentLi.toggleClass("active");
    });

  });

  // Restaurants slider

  $('.restaurants-slider').on('afterChange', function(event, slick, currentSlide){

    if ($(".restaurants-slider .slick-prev").hasClass("slick-disabled")) {
      $(".restaurants-slider-wrapper .prev-custom").addClass("disabled");
    } else {
      $(".restaurants-slider-wrapper .prev-custom").removeClass("disabled");
    }

    if ($(".restaurants-slider .slick-next").hasClass("slick-disabled")) {
      $(".restaurants-slider-wrapper .next-custom").addClass("disabled");
    } else {
      $(".restaurants-slider-wrapper .next-custom").removeClass("disabled");
    }

  });

  $(".restaurants-slider").on("init", function () {

    if ($(".restaurants-slider .slick-prev").hasClass("slick-disabled")) {
      $(".restaurants-slider-wrapper .prev-custom").addClass("disabled");
    }

    if ($(".restaurants-slider .slick-next").hasClass("slick-disabled")) {
      $(".restaurants-slider-wrapper .next-custom").addClass("disabled");
    }

    $(".restaurants-slider-wrapper .prev-custom").click(function () {
      $(".restaurants-slider").slick("slickPrev");
    });

    $(".restaurants-slider-wrapper .next-custom").click(function () {
      $(".restaurants-slider").slick("slickNext");
    });

  });


  // Main menu

  $(".submenu li").on("mouseenter", function () {

    if ($(this).find("a.has-submenu").length) {
      $(this).addClass("open");
      $(this).find(".sub-submenu").fadeIn(150);

      if ($(this).find(".sub-submenu").offset().left + $(".sub-submenu").width() > $(window).width()) {
        $(this).find(".sub-submenu").addClass("sub-submenu-l");
      }

    }

  });

  $(".submenu li").on("mouseleave", function () {

    if ($(this).find("a.has-submenu").length) {
      $(this).removeClass("open");
      $(this).find(".sub-submenu").fadeOut(150);
    }

  });

  // Main menu END



  // Actions slider

  $('.actions-slider').on('afterChange', function(event, slick, currentSlide){

    if ($(".actions-slider .slick-prev").hasClass("slick-disabled")) {
      $(".actions-slider-wrapper .prev-custom").addClass("disabled");
    } else {
      $(".actions-slider-wrapper .prev-custom").removeClass("disabled");
    }

    if ($(".actions-slider .slick-next").hasClass("slick-disabled")) {
      $(".actions-slider-wrapper .next-custom").addClass("disabled");
    } else {
      $(".actions-slider-wrapper .next-custom").removeClass("disabled");
    }

  });

  $(".actions-slider").on("init", function () {

    if ($(".actions-slider .slick-prev").hasClass("slick-disabled")) {
      $(".actions-slider-wrapper .prev-custom").addClass("disabled");
    }

    if ($(".actions-slider .slick-next").hasClass("slick-disabled")) {
      $(".actions-slider-wrapper .next-custom").addClass("disabled");
    }

    $(".actions-slider-wrapper .prev-custom").click(function () {
      $(".actions-slider").slick("slickPrev");
    });

    $(".actions-slider-wrapper .next-custom").click(function () {
      $(".actions-slider").slick("slickNext");
    });

  });

  $(".actions-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: false,
    swipe: false
  });

  // Actions slider END

  // Datepicker

  var monthsRus = ["янавря", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];

  // Range highlight

  $("body").on("mouseover", ".picker__day", function () {

    if ($(this).closest(".picker").hasClass("filter-date-to") && $(this).closest(".picker").find(".range-selected-edge").length == 1) {

      var fromDate = new Date($(this).closest("form").find(".filter-date-from").pickadate("picker").get("select", "yyyy"), $(this).closest("form").find(".filter-date-from").pickadate("picker").get("select", "m") - 1, $(this).closest("form").find(".filter-date-from").pickadate("picker").get("select", "d"));

      var dateString = $(this).attr("aria-label").split(".");

      var overDate = new Date(dateString[2], parseInt(dateString[1]) - 1, dateString[0]);

      var highlightElements = $(this).closest("form").find(".picker__day").filter(function () {

        var dateString = $(this).attr("aria-label").split(".");

        var thisDate = new Date(dateString[2], parseInt(dateString[1]) - 1, dateString[0]);

        return thisDate > fromDate && thisDate <= overDate;

      });

      $(this).closest(".picker").find(".range-selected").removeClass("range-selected");

      highlightElements.addClass("range-selected");

    }

  });

  $("body").on("mousedown", ".picker-clear", function (event) {

    $(this).closest("form").find(".filter-date").each(function () {

      $(this).next(".picker").find(".range-selected").removeClass("range-selected");

      $(this).data( 'pickadate' ).clear();
      $(this).html("");
    });

  });

  $(".input-date").each(function () {

    var pickerField = $(this);

    pickerField.pickadate({
      monthsFull: monthsFullNames,
      format: 'd.mm.yyyy',
      min: new Date(),
      selectYears: true,
      selectMonths: true
    });



  });

  $(".filter-date").each(function () {

    var pickerField = $(this);

    pickerField.pickadate({
      monthsFull: monthsFullNames,
      weekdaysShort: weekdaysShortNames,
      format: 'd.mm.yyyy',
      min: new Date(),
      selectYears: true,
      selectMonths: true,
      onRender: function () {
        pickerField.next(".picker").find(".picker__box").append("<div class='button-wrapper'><div class='picker-clear'>Очистить даты</div></div></div>");
      },
      onSet: function () {

        // Максимальная и минимальная даты

        var fromDate = new Date(pickerField.closest("form").find(".filter-date-from").pickadate("picker").get("select", "yyyy"), pickerField.closest("form").find(".filter-date-from").pickadate("picker").get("select", "m") - 1, pickerField.closest("form").find(".filter-date-from").pickadate("picker").get("select", "d"));

        var toDate = new Date(pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "yyyy"), pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "m") - 1, pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "d"));

        //console.log(toDate);

        if (pickerField.hasClass("filter-date-from") && ( toDate <= fromDate && pickerField.closest("form").find(".filter-date-to").html() != "")) {
          var datePlusDay = addDays(fromDate, 1);
          pickerField.closest("form").find(".filter-date-to").pickadate("picker").set("select", datePlusDay)
        }

        toDate = new Date(pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "yyyy"), pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "m") - 1, pickerField.closest("form").find(".filter-date-to").pickadate("picker").get("select", "d"));

        if (pickerField.hasClass("filter-date-from")) {
          pickerField.closest("form").find(".filter-date-to").pickadate("picker").set("min", addDays(fromDate, 1))
        }

        var fromDateFormatted = fromDate.getDate() + "." + ("0" + (fromDate.getMonth() + 1)).slice(-2) + "." + fromDate.getFullYear();
        var toDateFormatted = toDate.getDate() + "." + ("0" + (toDate.getMonth() + 1)).slice(-2) + "." + toDate.getFullYear();


        var rangeElements = pickerField.closest("form").find(".picker__day").filter(function () {

          var dateString = $(this).attr("aria-label").split(".");

          var thisDate = new Date(dateString[2], parseInt(dateString[1]) - 1, dateString[0]);

          return thisDate > fromDate && thisDate < toDate;

        });

        var edgeElements = pickerField.closest("form").find(".picker__day").filter(function () {

          var dateString = $(this).attr("aria-label").split(".");

          var thisDate = new Date(dateString[2], parseInt(dateString[1]) - 1, dateString[0]);

          return thisDate.getTime() == fromDate.getTime() || thisDate.getTime() == toDate.getTime();

        });

        pickerField.closest("form").find(".range-selected").removeClass("range-selected");
        pickerField.closest("form").find(".range-selected-edge").removeClass("range-selected-edge");

        if (pickerField.closest("form").find(".filter-date-from").html() != "") {
          rangeElements.addClass("range-selected");
          edgeElements.addClass("range-selected-edge");
        }

        //pickerField.closest("form").find("[aria-label='" + fromDateFormatted + "']").addClass("range-selected");
        //pickerField.closest("form").find("[aria-label='" + toDateFormatted + "']").addClass("range-selected");

      }
    });



  });

  $("input[type=file]:not(#file_reviews, #konkurs-files, #konkurs-application)").fileinput({
    rtl: true,
    showUpload: false,
    showPreview: false,
    showCancel: false,
    browseLabel: "Выбрать файл",
    msgPlaceholder: "",
    dropZoneEnabled: false,
    maxFileCount: 1,
    mainClass: "input-group-lg"
  });





  // Numeric input

  $(document).on("input", ".numeric", function() {
    this.value = this.value.replace(/\D/g,'');
  });


  // Fancybox

  $("a.fancybox").fancybox({
    padding: 0, //убираем отступ
    helpers: {
      overlay: {
        locked: false // отключаем блокировку overlay
      }
    },
    beforeShow: function(){
      $('.fancybox-image').loupe({
        width: 150, // ширина лупы
        height: 150, // высота лупы
        loupe: 'loupe' // css класс лупы
      });
    }
  });


  // Forms

  $("body").on("mouseup", "li.dropdown-header", function () {
    $(this).toggleClass("active");
    $(this).nextAll("li[data-optgroup='" + $(this).data("optgroup") + "']").fadeToggle(150);
    return false;
  });

  $("select").not(".picker__select--month, .picker__select--year").each(function () {
    if ($(this).attr("multiple")) {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор",
        selectedTextFormat: "count",
        countSelectedText: function(count) {
          return count + " " + declOfNum(count, ['элемент', 'элемента', 'элементов']);
        }
      });
    } else {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор"
      });
    }
  });

  $("select[multiple]").not(".simple-multi").on("shown.bs.select",function () {
    if (!$(this).prev(".dropdown-menu").find(".dropdown-footer").length) {
      dropdownFooter = '\
      <div class="dropdown-footer">\
      <div class="btn btn-1 btn-ico btn-save">Выбрать</div>\
      <div class="btn btn-cancel">Очистить</div>\
      </div>\
      ';
      $(this).prev(".dropdown-menu").find("ul").append(dropdownFooter);
    }
  });

  $("select.select-grantee-add").on("shown.bs.select",function () {
    if (!$(this).prev(".dropdown-menu").find(".dropdown-top-button").length) {
      dropdownHeader = '\
      <div class="dropdown-top-button">\
        <a class="link-add" href="#" data-toggle="modal" data-target="#addGranteeModal"><span>Добавить нового</span></a>\
      </div>\
      ';
      $(this).prev(".dropdown-menu").find("ul").prepend(dropdownHeader);
    }
  });

  $("select.select-operator-add").on("shown.bs.select",function () {
    if (!$(this).prev(".dropdown-menu").find(".dropdown-top-button").length) {
      dropdownHeader = '\
      <div class="dropdown-top-button">\
        <a class="link-add" href="#" data-toggle="modal" data-target="#addOperatorModal"><span>Добавить нового</span></a>\
      </div>\
      ';
      $(this).prev(".dropdown-menu").find("ul").prepend(dropdownHeader);
    }
  });

  $("body").on("click",".bootstrap-select .btn-save", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker("toggle");
    return false;
  });

  $("body").on("click",".bootstrap-select .btn-cancel", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker('deselectAll');
    return false;
  });

  $("#contest_operators").selectpicker({
    countSelectedText: function(count) {
      return count + " " + declOfNum(count, ['оператор', 'оператора', 'операторов']);
    }
  });

  $("#search_brand").selectpicker({
    countSelectedText: function(count) {
      return count + " " + declOfNum(count, ['бренд', 'бренда', 'брендов']);
    }
  });

  $("#search_price").selectpicker({
    countSelectedText: function(count) {
      return count + " " + declOfNum(count, ['цена', 'цены', 'цен']);
    }
  });

  $(".select-grantees").selectpicker({
    countSelectedText: function(count) {
      return count + " " + declOfNum(count, ['грантополучатель', 'грантополучателя', 'грантополучателей']);
    }
  });

  $("#search_stock").selectpicker({
    selectAllText: "Выбрать всё",
    deselectAllText: "Снять выбор",
    selectedTextFormat: "count",
    countSelectedText: function(count) {
      return count + " " + declOfNum(count, ['вариант', 'варианта', 'вариантов']);
    }
  });

  $('.input-numeric').bind('keyup paste', function(){
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  if ($("input:text").length) {
    $("input:text").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").hide();
      }
    });
  }

  if ($("textarea").length) {
    $("textarea").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").hide();
      }
    });
  }

  $("body").on("focus","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      placeholder.hide();

    }

  });

  $("body").on("blur","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      if (!el.val() || (el.hasClass("input-phone") && ! /^(?=.*[0-9])[- +()0-9]+$/.test(el.val()))) {
        placeholder.show();
      }

    }

  });

  $("body").on("click",".placeholder",function(e) {
    if ($(this).parent().find("input").length) {
      $(this).parent().find("input").trigger("focus");
    }
    if ($(this).parent().find("textarea").length) {
      $(this).parent().find("textarea").trigger("focus");
    }
  })

  $("input.input-phone").mask("+7(999) 999-99-99");

  $("body").on("focus","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").addClass("focus");
  });

  $("body").on("blur","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").removeClass("focus")
  });

  validateForms();

  $('.main-banner-body').slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1
  });

});

function yearsName(age) {
  var txt;
  count = age % 100;
  if (count >= 5 && count <= 20) {
    txt = 'лет';
  } else {
    count = count % 10;
    if (count == 1) {
      txt = 'год';
    } else if (count >= 2 && count <= 4) {
      txt = 'года';
    } else {
      txt = 'лет';
    }
  }
  return txt;
}

function calcCredit(S,p,n){

  p = +p / 1200;
  n = +n * 12;

  return Math.round(+S * p / (1 - Math.pow(1 + p, -n)));

}

function validateForms() {

  jQuery.validator.addClassRules('phone-email-group', {
    require_from_group: [1, ".phone-email-group"]
  });

  $("select").on("change", function () {
    if (!$(this).closest(".picker").length) {
      $(this).valid();
    }
  });

  $("body").on("click", ".form-item", function (e) {
    if ($(this).find(".bootstrap-select").length && !$(e.target).hasClass("bootstrap-select") && !$(e.target).parents().hasClass("bootstrap-select")) {
      $(e.target).closest(".form-item").find("select").selectpicker('toggle');
    }
  });

  $("form:not(#konkurs-form, #review-form, #header-form, #contact-form, #feedback-form, #grant-form, #mobile-form, #card-form, #konkurs-question-form, #survey-form)").each(function() {

    form = $(this);

    $(this).validate({
      focusInvalid: true,
      sendForm : false,
      errorPlacement: function(error, element) {
        if (element[0].tagName == "SELECT") {
          element.closest(".form-item").addClass("error");
          element.closest(".btn-group").addClass("btn-group-error");
          if (element.closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
          } else {
            error.insertAfter(element.closest(".btn-group"));
          }
        } else {
          if (element.attr("type") == "checkbox") {
            element.siblings("label").addClass("checkbox-label-error")
          } else {
            error.insertAfter(element);
          }
        }

      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass);
        $(element).closest(".form-item").removeClass("error").addClass("valid");

        if ($(element)[0].tagName == "SELECT") {
          $(element).closest(".form-item").removeClass("error");
          $(element).closest(".btn-group").removeClass("btn-group-error");
          if ($(element).closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
            $(element).closest(".form-item").next("label.error").remove();
          } else {
            $(element).closest(".btn-group").next("label.error").remove();
          }
        } else {
          $(element).next(".error").remove();
          if ($(element).attr("type") == "checkbox") {
            $(element).siblings("label").removeClass("checkbox-label-error")
          }
        }
      },
      invalidHandler: function(form, validatorcalc) {
        var errors = validatorcalc.numberOfInvalids();
        if (errors && validatorcalc.errorList[0].element.tagName == "INPUT") {
          validatorcalc.errorList[0].element.focus();
        }
      }
    });

    if ($(this).find("input.password").length && $(this).find("input.password-repeat").length) {
      $(this).find("input.password-repeat").rules('add', {
        equalTo: "#"+form.find("input.password").attr("id")
      });
    }

  });

}

jQuery.extend(jQuery.validator.messages, {
  required: "Не заполнено поле",
  remote: "Please fix this field.",
  email: "Введите правильный e-mail.",
  url: "Please enter a valid URL.",
  date: "Please enter a valid date.",
  dateISO: "Please enter a valid date (ISO).",
  number: "Please enter a valid number.",
  digits: "Please enter only digits.",
  creditcard: "Please enter a valid credit card number.",
  equalTo: "Пароли не совпадают.",

  accept: "Please enter a value with a valid extension.",
  maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
  minlength: jQuery.validator.format("Please enter at least {0} characters."),
  rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
  range: jQuery.validator.format("Please enter a value between {0} and {1}."),
  max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
  min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

function cartTotal() {

  var cartTotal = 0;

  $(".cart-item").each(function () {

    if ($(this).data("price")) {
      var itemPrice = $(this).data("price") * $(this).find(".count-input").val();
      cartTotal += itemPrice;
    }

  });

  $(".cart-total-price .price").html(numFormat.to(cartTotal));
  $(".cart-total-all").html(numFormat.to(cartTotal - $(".cart-discount .price").html().replace(/\s+/g, '')));

}

function calcOrder() {

  var orderPrice = $(".order-price-val").html();
  orderPrice = orderPrice.replace(/\s+/g, '');

  var orderDiscount = 0;

  var orderTotal = +orderPrice;

  $(".order-form [data-price]").each(function () {
    if ($(this).attr("type") != "radio") {
      orderTotal += $(this).data("price") - 0;
    } else {
      if ($(this).is(":checked")) {
        orderTotal += $(this).data("price") - 0;
      }
    }
  });

  $(".order-form [data-discount]").each(function () {
    orderDiscount -= $(this).data("discount") - 0;
  });

  //console.log(orderDiscount)

  var orderCouponDiscount = +Math.floor(orderPrice.replace(/\s+/g, '')*(+$("#order_coupon_discount").val()/100));

  orderDiscount -= orderCouponDiscount;

  console.log(orderTotal)

  $(".order-shipping-val").html($("[name='order_shipping_1']:checked").data("price"));

  $(".order-coupon-val").html(orderCouponDiscount);
  $(".order-coupon-percent").html("-"+$("#order_coupon_discount").val());

  $(".order-total-val").html(numFormat.to(orderTotal + orderDiscount));

}

function declOfNum(number, titles) {
  cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

function resizeVideo() {
  $(".home-section-video").css({
    height: $(window).height()
  });

  $(".home-section-video-wrapper").css({
    height: $(window).height() + 800
  });

}

function parallax(obj, objOffset, speed) {

  var objPos = - $(window).scrollTop() + obj.closest(".parallax-wrapper").offset().top + objOffset

  obj.css({
    transform: "translateY(" + objPos + "px)"
  });

}

function fancyboxFix() {

  if($('#mobile-indicator').css('display') == 'block') {
    $('.gallery-big .fancybox').off("click.fb-start");
    $('.gallery-big .fancybox').click(function () {
      return false;
    });
  } else {

    $('.gallery-big .fancybox').fancybox();

  }

}

function slickResponsive() {

  if ($("#mobile-indicator").css("display") == "block") {

    $(".docs-list .tr").slick({
      slidesToShow: 2,
      slidesToScroll: 2
    });

  } else {

    if ($(".docs-list .tr").hasClass("slick-initialized")) {
      $(".docs-list .tr").slick("unslick");
    }

  }

}

function readURL(input, img) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      img.attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function fixElements() {
  var scrollPos = $(window).scrollTop();

  if ($(".data-table").length) {

    if (scrollPos > $(".data-table").offset().top) {
      $(".data-table-over-wrapper").css({
        marginTop: $(".data-table .table-header").height()
      });

      $(".data-table .table-header").addClass("table-header-fixed");



    } else {
      $(".data-table-over-wrapper").css({
        marginTop: 0
      });

      $(".data-table .table-header").removeClass("table-header-fixed");

    }

    if($(".data-table-wrapper .mCSB_container").length > 0) {
      $(".data-table .table-header-fixed tr").css({
          marginLeft: $(".data-table-wrapper .mCSB_container").position().left
      });
    }

  }


  if ($(".data-table").length && $(".data-table-footer").length) {
    if (scrollPos + $(window).height() < $(".data-table").offset().top + $(".data-table").height() + $(".data-table-footer").outerHeight()) {
      $(".data-table-footer").addClass("data-table-footer-fixed");
      $(".data-table-wrapper .mCSB_scrollTools").addClass("scroll-tools-fixed").css({
        bottom: $(".data-table-footer").outerHeight()
      });
    } else {
      $(".data-table-footer").removeClass("data-table-footer-fixed");
      $(".data-table-wrapper .mCSB_scrollTools").removeClass("scroll-tools-fixed").css({
        bottom: 0
      });
    }
  }
}

function datepickerRender(datepicker) {

  if (!datepicker.hasClass("rendered")) {
    datepicker.addClass("rendered");
    datepicker.next(".picker").find("select").selectpicker();
    datepicker.next(".picker").find("div.picker__select--year").wrap("<div class='select-wrapper select-wrapper-year'></div>").before("<label>Год</label>");
    datepicker.next(".picker").find("div.picker__select--month").wrap("<div class='select-wrapper select-wrapper-month'></div>").before("<label>Месяц</label>");
    datepicker.next(".picker").find(".picker__header").append("<div class='picker-table-header'>Дата</div>");
  }
  
}

function fixTables() {

  $(".data-table").each(function () {
    $(this).css({
      width: "0"
    })
  });

  $(".data-table td").each(function () {
    $(this).css({
      width: "auto"
    });
  });

  $(".data-table th").each(function () {
    $(this).css({
      width: "auto"
    });
  });

  $(".data-table tr").each(function () {
    $(this).css({
      width: "auto"
    });
  });



  $(".data-table").each(function () {
    $(this).css({
      width: "auto"
    });
  });

  $(".data-table td").each(function () {
    $(this).css({
      width: $(this).outerWidth()
    });
  });

  $(".table-header tr").each(function () {
    $(this).css({
      width: $(this).outerWidth()
    });
  });

  $(".data-table").css({
    display: "block",
    width: $(".data-table").width()
  }).css({
    display: "table"
  });

  $(".data-table th").each(function () {
    th = $(this);
    th.css({
      width: $(this).closest("table").find("td").filter(function () {return $(this).prevAll().length == th.prevAll().length}).outerWidth()
    });
  });

}

function addDays(startDate,numberOfDays)
{
  var returnDate = new Date(
    startDate.getFullYear(),
    startDate.getMonth(),
    startDate.getDate()+numberOfDays,
    startDate.getHours(),
    startDate.getMinutes(),
    startDate.getSeconds());
  return returnDate;
}

function declOfNum(number, titles) {
  cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

function reviewsMakeup() {

  $(".review-tmb-text").each(function () {

    if ($(this).closest(".review-tmb").find(".review-tmb-gallery").length) {
      var galHeight = 50;
    } else {
      var galHeight = 0;
    }

    $(this).css({
      height: $(this).closest(".review-tmb").height()
            - $(this).closest(".review-tmb").find(".review-tmb-author").outerHeight(true)
            - $(this).closest(".review-tmb").find(".h3").outerHeight(true)
            - galHeight
            - 28
            - 20
    })

  });

}

function countCatalogItem(catalogItem) {

  catalogItem.find(".price-val").html(numFormat.to(catalogItem.find(".count input").val() * catalogItem.find(".count-units-item.active").data("price")))

}

function countCartItem(cartItem) {

  cartItem.find(".cart-item-total-val").html(numFormat.to(cartItem.find(".count input").val() * cartItem.find(".count-units-item.active").data("price")))

}

function cartTotal() {

  var totalPrice = 0;

  $(".cart-item").each(function () {

    totalPrice += $(this).find(".count input").val() * $(this).find(".count-units-item.active").data("price");

  });

  $(".cart-total-price-val").html(numFormat.to(totalPrice));

}

function membersFields(count) {

  var membersItems = $(".enroll-members .form-group");

  membersItems.filter(function () {

    return $(this).prevAll().length >= count;

  }).remove();

  var newFields = '';

  for (i = membersItems.length + 1; i <= count; i++) {

    newFields += '\
    <div class="form-group">\
      <label for="enroll_member_' + i + '">ФИО участника ' + i + '</label>\
      <input type="text" name="enroll_members[]" name="enroll_member_' + i + '">\
    </div>\
    ';

  }

  console.log(newFields);

  $(".enroll-members").append(newFields);

}

function anchorsMenu() {

  var scrollPos = $(window).scrollTop();

  if ($(".anchors-menu").length) {

    if (scrollPos > $(".page-sidebar").offset().top - 20) {
      $(".anchors-menu").addClass("anchors-menu-fixed")
    } else {
      $(".anchors-menu").removeClass("anchors-menu-fixed")
    }

    if ($(".menu-stop").length) {
      var menuStop = $(".menu-stop");
    } else {
      var menuStop = $("footer");
    }

    if (scrollPos > menuStop.offset().top - $(".anchors-menu").outerHeight() - 40) {
      $(".anchors-menu").css({
        marginTop: -scrollPos + menuStop.offset().top - $(".anchors-menu").outerHeight() - 40
      });
    } else {
      $(".anchors-menu").css({
        marginTop: 0
      });
    }

    $("a").filter(function () {
      return $(this).attr("name") != undefined;
    }).each(function () {

      if ($(this).offset().top - scrollPos >= 0 && $(this).offset().top - scrollPos < $(window).height() / 2) {
        $(".anchors-menu a").removeClass("active");
        $(".anchors-menu a[href='#" + $(this).attr("name") + "']").addClass("active");
      }

    });

  }

}

function makeUp() {

  if ($(".page-sidebar").length) {

    $(".page-content").css({
      minHeight: $(".page-sidebar").outerHeight(true)
    });

  }

  if ($(".route-tmb-descr").length) {

    $(".route-tmb-descr").css({
      minHeight: 0
    })

    var maxHeight = Math.max.apply(null, $(".route-tmb-descr").map(function ()
    {
      return $(this).outerHeight();
    }).get());

    $(".route-tmb-descr").css({
      minHeight: maxHeight
    })

  }


  if ($(".hotel-tmb-descr").length) {

    $(".hotel-tmb-descr").css({
      minHeight: 0
    });

    var maxHeight = Math.max.apply(null, $(".hotel-tmb-descr").map(function ()
    {
      return $(this).outerHeight();
    }).get());

    $(".hotel-tmb-descr").css({
      minHeight: maxHeight
    });

    if ($("#sm-only").css("display") == "block") {

      $(".hotel-tmb-descr").each(function () {

        if ($(".hotel-tmb-rating").length && !$(this).next(".hotel-tmb-rating").length) {
          $(this).css({
            minHeight: maxHeight + $(".hotel-tmb-rating").outerHeight() - 11
          });
        }

      });

    }


  }

  if ($(".rest-tmb-descr").length) {

    $(".rest-tmb-descr").css({
      minHeight: 0
    })

    var maxHeight = Math.max.apply(null, $(".rest-tmb-descr").map(function ()
    {
      return $(this).outerHeight();
    }).get());

    $(".rest-tmb-descr").css({
      minHeight: maxHeight
    })

  }

  if ($(".object-tmb-descr:last-child").length) {

    $(".object-tmb-descr:last-child").css({
      minHeight: 0
    })

    var maxHeight = Math.max.apply(null, $(".object-tmb-descr:last-child").map(function ()
    {
      return $(this).outerHeight();
    }).get());

    $(".object-tmb-descr:last-child").css({
      minHeight: maxHeight
    })

  }


}

function swapElements() {

  if ($(".sidebar-object-info").length) {

    if ($("#mobile-indicator").css("display") == "block") {

      if (!$(".page-content").prev(".sidebar-object-info").length) {

        var objectInfo = $(".sidebar-object-info");

        var objectInfoClone = $(".sidebar-object-info").clone();

        objectInfo.remove();

        $(".page-content").before(objectInfoClone);

      }

    } else {

      if (!$(".page-sidebar").find(".sidebar-object-info").length) {

        var objectInfo = $(".sidebar-object-info");

        var objectInfoClone = $(".sidebar-object-info").clone();

        objectInfo.remove();

        $(".page-sidebar").prepend(objectInfoClone);

      }

    }

  }

}

function stickySidebar() {
  
  if ($(".sticky-sidebar").length) {

    var scrollPos = $(window).scrollTop();
  
    if ($(".sticky-sidebar").outerHeight() + 78 < $(window).height()) {
  
      if (scrollPos > $(".sticky-sidebar").parent().offset().top - 78) {
  
        $(".sticky-sidebar").css({
          width: $(".sticky-sidebar").parent().width(),
          position: "fixed",
          top: 78
        });
  
        if (scrollPos > $("footer").offset().top - $(".sticky-sidebar").height() - 40 - 78) {
  
          $(".sticky-sidebar").css({
            marginTop: $("footer").offset().top - $(".sticky-sidebar").height() - scrollPos - 40 - 78
          });
  
        } else {
  
          $(".sticky-sidebar").css({
            marginTop: 0
          });
  
        }
  
      } else {
  
        $(".sticky-sidebar").css({
          marginTop: 0,
          width: "auto",
          position: "relative",
          top: "auto"
        });
  
      }
  
    } else {
  
      $(".sticky-sidebar").css({
        marginTop: 0,
        width: "auto",
        position: "relative",
        top: "auto"
      });
  
    }

  }

}

function buyTotal() {

  var totalPrice = 0;

  $(".buy-form-item").each(function () {

    var thisPrice = parseInt($(this).find(".buy-price span").html().replace(/\s/g, '')) * parseInt($(this).find(".count input").val());

    totalPrice += thisPrice;

    if ($(this).find(".buy-sub-total-val").length) {

      $(this).find(".buy-sub-total-val").html(numFormat.to(thisPrice));

    }


  });

  $(".buy-form-val").html(numFormat.to(totalPrice));

  if (totalPrice == 0) {

    $(".buy-total").fadeOut(150);

  } else {

    $(".buy-total").fadeIn(150);

  }

}

jQuery(function($) {

    $('.dostoevskij-fancy').fancybox({
      padding: 0, //убираем отступ
      helpers: {
        overlay: {
          locked: false // отключаем блокировку overlay
        }
      }
    });

    $('.velikie-gallery-item a').fancybox({
      padding: 0, //убираем отступ
      helpers: {
        overlay: {
          locked: false // отключаем блокировку overlay
        }
      }
    });

    $audio_gramoty = false;
    $('#audio_gramoty').on('playing', function(){
      if ($audio_gramoty === false){
        ym(50804296,'reachGoal','audio_gramoty');
        $audio_gramoty = true;
      }
    });

    $audio_zemlya = false;
    $('#audio_zemlya').on('playing', function(){
      if ($audio_zemlya === false){
        ym(50804296,'reachGoal','audio_zemlya');
        $audio_zemlya = true;
      }
    });


	$(".page_spoiler").click(function() {
		$(this).next('.page_spolier-hidden').stop().slideToggle();
	});


	if ($('#map-container').length > 0){

	  for ( var i = 0; i < $links.length; i++){
	    $('#map-container').append(
	        "<a href=\"" + $links[i].url + "\" class=\"map-unit\" style='top:" + $links[i].top + "%; left:" + $links[i].left + "%;'></a>"
        );
      }


	  if ( $(document).width() < 576 ){
	    //Кадрируем на первую ячейку
	    $('#map-container').css({
          'top': getTopMobile($links[0].top),
          'left': getLeftMobile($links[0].left)
        });
	    $($('#map-container .map-unit')[0]).addClass('map-unit-focused');

        //Неактивные ячейки блокируем
        $(document).on('click', '#map-container .map-unit:not(.map-unit-focused)', function(e){
          e.preventDefault();
        });

        $(document).on('click', '.mobile-controller', function(){
          if ($(this).hasClass('disabled')) return;

          $number = $(this).data('number');

          $("#map-container .map-unit-focused").removeClass('map-unit-focused');

          $(".mobile-controller")
              .addClass('disabled')
              .data('number', false);

          $('#map-container').animate({
            'top': getTopMobile($links[$number].top),
            'left': getLeftMobile($links[$number].left)
          }, 400, function(){
            $($('#map-container .map-unit')[$number]).addClass('map-unit-focused');

            for ( var $i = 0; $i < $links.length; $i++){

              if ($i === $number) continue;

              if ( Math.abs( $links[$i].top - $links[$number].top) < 15 && Math.abs( $links[$i].left - $links[$number].left) < 15 ){

                if ( ($links[$number].top - $links[$i].top) > 0 ){
                  //Значит, что текущая ячейка ниже цикловой

                  if ( ($links[$number].left - $links[$i].left) > 0 ){
                    //Значит, что текущая ячейка правее цикловой

                    $('.mobile-controller.up-left')
                        .removeClass('disabled')
                        .data('number', $i);

                  } else if ( ($links[$number].left - $links[$i].left) === 0 ){
                    //Значит, что текущая ячейка на той же дистанции
                    $('.mobile-controller.up')
                        .removeClass('disabled')
                        .data('number', $i);
                  } else{
                    //Значит, что текущая ячейка левее цикловой
                    $('.mobile-controller.up-right')
                        .removeClass('disabled')
                        .data('number', $i);
                  }

                }  else{
                  //Значит, что текущая ячейка выше цикловой

                  if ( ($links[$number].left - $links[$i].left) > 0 ){
                    //Значит, что текущая ячейка правее цикловой
                    $('.mobile-controller.down-left')
                        .removeClass('disabled')
                        .data('number', $i);

                  }else if ( ($links[$number].left - $links[$i].left) === 0 ){
                    //Значит, что текущая ячейка на той же дистанции
                    $('.mobile-controller.down')
                        .removeClass('disabled')
                        .data('number', $i);
                  } else{
                    //Значит, что текущая ячейка левее цикловой
                    $('.mobile-controller.down-right')
                        .removeClass('disabled')
                        .data('number', $i);
                  }

                }

              }

            }

          });



        });

      }

      function getTopMobile($top){
        return (-$('#map-container').height()*($top/100)) + 90;
      }

	  function getLeftMobile($left){
        return (-$('#map-container').width()*($left/100)) + 110;
      }

    }

});


{
  let copyAction = () => {
    document.querySelectorAll('[data-copy]').forEach(item => {
      item.addEventListener('click', e => {
        navigator.clipboard.writeText(e.currentTarget.dataset.copy)
            .then(() => {
              let rectObj = item.getBoundingClientRect();


              let tooltip = document.createElement('div');
              tooltip.style.cssText = "position:absolute; z-index: 25; padding: 5px; background: rgb(242 242 242); border: 1px solid; border-radius: 3px; font-weight: bold; color: #124285; font-size: 13px; line-height: 13px; box-shadow: 1px 1px 4px 0 rgba(0,0,0,.4)";
              tooltip.innerText = 'Скопировано!';
              tooltip.style.top = rectObj.top + pageYOffset - 33 + "px";
              tooltip.style.left = rectObj.left + 20 + "px";

              document.body.insertAdjacentElement('beforeend', tooltip);
              setTimeout(() => {
                tooltip.remove();
              }, 2000);
            });
      });
    });
  };

  document.addEventListener('DOMContentLoaded', () => {
    copyAction();
  });
}