<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);

switch ($name) {
  case 'butik-otel-truvor':
    require_once ('title/butik-otel-truvor.php');
    break;
  case 'butik-otel-yurevskoe-podvore':
    require_once ('title/butik-otel-yurevskoe-podvore.php');
    break;
  case 'gostinitsa-sadko':
    require_once ('title/gostinitsa-sadko.php');
    break;
  case 'gostinitsa-valday-eko-klub':
    require_once ('title/gostinitsa-valday-eko-klub.php');
    break;
  case 'gostinitsa-volkhov':
    require_once ('title/gostinitsa-volkhov.php');
    break;
  case 'inturist':
    require_once ('title/inturist.php');
    break;
  case 'kurort-staraya-russa':
    require_once ('title/kurort-staraya-russa.php');
    break;
  case 'otel-bianki':
    require_once ('title/otel-bianki.php');
    break;
  case 'truvor-glamping-glemping-truvor':
    require_once ('title/truvor-glamping-glemping-truvor.php');
    break;
  case 'vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub':
    require_once ('title/vsesezonnyy-kurort-lyubogore-gornolyzhnyy-klub.php');
    break;
}