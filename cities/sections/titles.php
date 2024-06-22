<?

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url = substr($url, 0, strlen($url) - 1);
$pos = strripos($url, '/');
$name = substr($url, $pos + 1);

switch ($name) {
  case 'borovichi':
    require_once ('title/borovichi.php');
    break;
  case 'bronnitsa':
    require_once ('title/bronnitsa.php');
    break;
  case 'chudovo':
    require_once ('title/chudovo.php');
    break;
  case 'd-goritsy':
    require_once ('title/d-goritsy.php');
    break;
  case 'd-kamen':
    require_once ('title/d-kamen.php');
    break;
  case 'galitsa':
    require_once ('title/galitsa.php');
    break;
  case 'kholm':
    require_once ('title/kholm.php');
    break;
  case 'korostyn':
    require_once ('title/korostyn.php');
    break;
  case 'krasnyy-berezhok':
    require_once ('title/krasnyy-berezhok.php');
    break;
  case 'lychkovo':
    require_once ('title/lychkovo.php');
    break;
  case 'malayae-vishchera':
    require_once ('title/malayae-vishchera.php');
    break;
  case 'myasnoy-bor':
    require_once ('title/myasnoy-bor.php');
    break;
  case 'okulovka':
    require_once ('title/okulovka.php');
    break;
  case 'p-batetskiy':
    require_once ('title/p-batetskiy.php');
    break;
  case 'p-demyansk':
    require_once ('title/p-demyansk.php');
    break;
  case 'pestovo':
    require_once ('title/pestovo.php');
    break;
  case 'p-khvoynaya':
    require_once ('title/p-khvoynaya.php');
    break;
  case 'p-kresttsy':
    require_once ('title/p-kresttsy.php');
    break;
  case 'p-lyubytino':
    require_once ('title/p-lyubytino.php');
    break;
  case 'p-parfino':
    require_once ('title/p-parfino.php');
    break;
  case 'p-shimsk':
    require_once ('title/p-shimsk.php');
    break;
  case 'p-tyesovo-netylskiy':
    require_once ('title/p-tyesovo-netylskiy.php');
    break;
  case 'p-volot':
    require_once ('title/p-volot.php');
    break;
  case 's-gruzino':
    require_once ('title/s-gruzino.php');
    break;
  case 's-marevo':
    require_once ('title/s-marevo.php');
    break;
  case 's-moshenskoe':
    require_once ('title/s-moshenskoe.php');
    break;
  case 'soltsy':
    require_once ('title/soltsy.php');
    break;
  case 'sopiny':
    require_once ('title/sopiny.php');
    break;
  case 's-poddore':
    require_once ('title/s-poddore.php');
    break;
  case 'staraya-russa':
    require_once ('title/staraya-russa.php');
    break;
  case 'valda':
    require_once ('title/valda.php');
    break;
  case 'velikiy-novgorod':
    require_once ('title/velikiy-novgorod.php');
    break;
  case 'zaval':
    require_once ('title/zaval.php');
    break;
}