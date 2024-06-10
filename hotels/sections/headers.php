<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);


switch ($name) {
  case 'butik-otel-truvor':
    require_once ('header/butik-otel-truvor.php');
    break;
  case 'butik-otel-yurevskoe-podvore':
    require_once ('header/butik-otel-yurevskoe-podvore.php');
    break;
  case 'gostinitsa-sadko':
    require_once ('header/gostinitsa-sadko.php');
    break;
  case 'gostinitsa-valday-eko-klub':
    require_once ('header/gostinitsa-valday-eko-klub.php');
    break;
  case 'gostinitsa-volkhov':
    require_once ('header/gostinitsa-volkhov.php');
    break;
  case 'inturist':
    require_once ('header/inturist.php');
    break;
  case 'kurort-staraya-russa':
    require_once ('header/kurort-staraya-russa.php');
    break;
  case 'otel-bianki':
    require_once ('header/otel-bianki.php');
    break;
  case 'truvor-glamping-glemping-truvor':
    require_once ('header/truvor-glamping-glemping-truvor.php');
    break;
  case 'vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub':
    require_once ('header/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub.php');
    break;
}
