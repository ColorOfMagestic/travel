<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);


switch ($name) {
  case 'borovichi':
    require_once ('header/borovichi.php');
    break;
  case 'bronnitsa':
    require_once ('header/bronnitsa.php');
    break;
  case 'chudovo':
    require_once ('header/chudovo.php');
    break;
  case 'd-goritsy':
    require_once ('header/d-goritsy.php');
    break;
  case 'd-kamen':
    require_once ('header/d-kamen.php');
    break;
  case 'galitsa':
    require_once ('header/galitsa.php');
    break;
  case 'kholm':
    require_once ('header/kholm.php');
    break;
  case 'korostyn':
    require_once ('header/korostyn.php');
    break;
  case 'krasnyy-berezhok':
    require_once ('header/krasnyy-berezhok.php');
    break;
  case 'lychkovo':
    require_once ('header/lychkovo.php');
    break;
  case 'malayae-vishchera':
    require_once ('header/malayae-vishchera.php');
    break;
  case 'myasnoy-bor':
    require_once ('header/myasnoy-bor.php');
    break;
  case 'okulovka':
    require_once ('header/okulovka.php');
    break;
  case 'p-batetskiy':
    require_once ('header/p-batetskiy.php');
    break;
  case 'p-demyansk':
    require_once ('header/p-demyansk.php');
    break;
  case 'pestovo':
    require_once ('header/pestovo.php');
    break;
  case 'p-khvoynaya':
    require_once ('header/p-khvoynaya.php');
    break;
  case 'p-kresttsy':
    require_once ('header/p-kresttsy.php');
    break;
  case 'p-lyubytino':
    require_once ('header/p-lyubytino.php');
  case 'p-parfino':
    require_once ('header/p-parfino.php');
    break;
  case 'p-shimsk':
    require_once ('header/p-shimsk.php');
    break;
  case 'p-tyesovo-netylskiy':
    require_once ('header/p-tyesovo-netylskiy.php');
    break;
  case 'p-volot':
    require_once ('header/p-volot.php');
    break;
  case 's-gruzino':
    require_once ('header/s-gruzino.php');
    break;
  case 's-marevo':
    require_once ('header/s-marevo.php');
    break;
  case 's-moshenskoe':
    require_once ('header/s-moshenskoe.php');
    break;
  case 'soltsy':
    require_once ('header/soltsy.php');
    break;
  case 'sopiny':
    require_once ('header/sopiny.php');
    break;
  case 's-poddore':
    require_once ('header/s-poddore.php');
    break;
  case 'staraya-russa':
    require_once ('header/staraya-russa.php');
    break;
  case 'valda':
    require_once ('header/valda.php');
    break;
  case 'velikiy-novgorod':
    require_once ('header/velikiy-novgorod.php');
    break;
  case 'zaval':
    require_once ('header/zaval.php');
    break;
}
