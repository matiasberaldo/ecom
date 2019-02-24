<?php
namespace Libs;
include './ProjectLib.php';

/**
 * ViewLib class to load views
 */
class ViewLib
{

  function __construct()
  {

  }

  public static function load ($view, $data = null) {
    $toLoad = self::getPath($view);
    $init = curl_init();
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    include $toLoad;
    curl_close($init);
  }

  private function getPath ($view, $type = 'view') {
    $dir = $_SERVER['DOCUMENT_ROOT'].'/';
    $project = new ProjectLib('ecom', 'e-com.matias', 'config.ini');
    $folder = '/';
    switch ($type) {
      case 'view':
        $folder = '/Views/';
        break;
      case 'css':
        $folder = '/resources/css/';
        break;
      case 'img':
        $folder = '/resources/img/';
        break;
      case 'js':
        $folder = '/resources/js/';
        break;
    }

    return $dir.$project->projectName.$folder.$view;
  }

}

ViewLib::load('test.php', array('hola' => 'This is a test'));

?>
