<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);

switch ($name) {
  case 'charodeyka-bar':
    require_once ('title/charodeyka-bar.php');
    break;
  case 'kafe-sudarushka':
    require_once ('title/kafe-sudarushka.php');
    break;
  case 'restoran-lyubytino-khutor':
    require_once ('title/restoran-lyubytino-khutor.php');
    break;
  case 'restoran-marusya-marusya':
    require_once ('title/restoran-marusya-marusya.php');
    break;
  case 'restoran-yurevskoe-podvore':
    require_once ('title/restoran-yurevskoe-podvore.php');
    break;
  case 'restoran-karamazovy':
    require_once ('title/restoran-karamazovy.php');
    break;
  case 'gastrobar-naffiga-koze-bayan-':
    require_once ('title/gastrobar-naffiga-koze-bayan-.php');
    break;
  case 'restoran-most-most':
    require_once ('title/restoran-most-most.php');
    break;
  case 'eko-klub-valday':
    require_once ('title/eko-klub-valday.php');
    break;
  case 'sytyy-gus-kafe-restoran-russkoy-kukhni':
    require_once ('title/sytyy-gus-kafe-restoran-russkoy-kukhni.php');
    break;
}