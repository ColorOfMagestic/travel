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
}