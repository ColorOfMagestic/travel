<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);

switch ($name) {
  case 'vladychnaya-granovitaya-palata':
    require_once ('title/vladychnaya-granovitaya-palata.php');
    break;
  case 'kreml':
    require_once ('title/kreml.php');
    break;

}