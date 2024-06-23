<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);


switch ($name) {
  case 'novgorrodskiy-raion':
    require_once ('header/novgorrodskiy-raion.php');
    break;
}
