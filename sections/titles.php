<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);

switch ($name) {
  case 'guides':
    require_once ('title/guides.php');
    break;
  case 'hotels':
    require_once ('title/hotels.php');
    break;
  case 'restaurants':
    require_once ('title/restaurants.php');
    break;
  case 'areas':
    require_once ('title/areas.php');
    break;

}