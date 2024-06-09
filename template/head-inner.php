<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../favicon.ico">

  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Туристический портал Новгородской области, туристический портал 大诺夫哥罗德">
  <meta name="description"
    content="Туристический портал Новгородской области — города, 指南, маршруты, афиша. Вся актуальная и полезная информация для туристов о Новгородской области в одном месте.">
  <link href="../css/core.css" type="text/css" rel="stylesheet">



  <link href="../css/style_1.css" type="text/css" rel="stylesheet">
  <link href="../css/style.css" type="text/css" data-template-style="true" rel="stylesheet">
  <script async="" src="../js/tag.js"></script>
  <script type="text/javascript" async="" src="../js/ba.js"></script>

  <script type="text/javascript" src="../js/script.js"></script>
  <title><?php require_once('../sections/titles.php') ?></title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-select.min.css">
  <link rel="stylesheet" href="../css/slick.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="../css/classic.css">
  <link rel="stylesheet" href="../css/classic.date.css">
  <link rel="stylesheet" href="../css/fileinput.min.css">
  <link rel="stylesheet" href="../css/fileinput-rtl.min.css">
  <link rel="stylesheet" href="../css/rateit.css">
  <link rel="stylesheet" href="../css/animations.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/retina.css">
  <link rel="stylesheet" href="../css/scripts_dev.css">
  <meta name="google-site-verification" content="lYUZPcgdx5ynVZN8qD4hBiDX9svOPFStBKNH1g1Zmvg">
  <meta property="og:url" content="https://novgorod.travel/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:description"
    content="Туристический портал Новгородской области — города, 指南, маршруты, афиша. Вся актуальная и полезная информация для туристов о Новгородской области в одном месте.">
  <meta property="og:image" content="images/cc27cd1dfb6d68492f1841cf429edd29.jpg">
  <meta property="vk:image"
    content="https://novgorod.travel/upload/medialibrary/c2e/c2e4b7bd06ed0d5d9281e43b9c5ca5c3.jpg">
  <meta property="twitter:image"
    content="https://novgorod.travel/upload/medialibrary/cc2/cc27cd1dfb6d68492f1841cf429edd29.jpg">
  <link rel="canonical" href="https://novgorod.travel/">
  <style>
    .pereezd-btn {
      position: fixed;
      right: -60px;
      bottom: calc(100vh / 2 - 130px);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 50px;
      padding: 5px;
      z-index: 9997;
      background: #07f;
      color: #07f;
      border: 1px solid #07f;
      border-radius: 50%;
      /*box-shadow: 0 0 8px 2px #333;*/
      transition: background .3s ease,
        box-shadow .3s ease,
        border-color .3s ease, right .6s ease;
      cursor: pointer;
      user-select: none;
    }

    .pereezd-btn:hover {
      background: #fff;
      border-color: transparent;
      box-shadow: 0 0 14px -2px #07f;
    }

    .pereezd-btn:hover svg path {
      fill: #07f;
    }

    .pereezd-btn:hover:after {
      opacity: 1;
      pointer-events: auto;
    }

    .pereezd-btn.toggle {
      right: 20px;
    }

    .pereezd-btn:after {
      content: attr(data-txt);
      position: absolute;
      left: -195px;
      top: 50%;
      display: inline-block;
      width: 185px;
      height: 30px;
      padding: 5px 8px;
      transform: translateY(-50%);
      background: #07f;
      color: #fff;
      font-size: 14px;
      border-radius: 4px;
      text-align: center;
      box-shadow: 0 0 0 0 #e9e9e9;
      overflow: hidden;
      opacity: 0;
      transition: opacity .3s ease;
      pointer-events: none;
    }

    .pereezd-btn svg {
      transition: all .3s ease;
    }

    .pereezd-btn svg path {
      fill: #fff;
    }
  </style>
  <script>
    function scrollFunc() {
      let element = document.querySelector(".buy-form").previousElementSibling;
      element.scrollIntoView({ behavior: "smooth", block: "start" });
      return false;
      //var $page = $('html, body');
      //$('.slow-scroll').on('click', function (e) {
      //    e.preventDefault();
      //    $page.animate({
      //        scrollTop: $($(this)[0].hash).offset().top
      //    }, 500);
      //    return false;
      //});
      //console.log('TT1')
    }
  </script>
</head>