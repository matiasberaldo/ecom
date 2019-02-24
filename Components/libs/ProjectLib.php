<?php

namespace Libs;

/**
 *
 */
class ProjectLib
{

  public $projectName = null;
  public $hostname = null;
  private $configFile = null;

  function __construct($projectName, $hostname, $configFile)
  {
    $this->projectName = $projectName;
    $this->hostname = $hostname;
    $this->configFile = $configFile;
  }

  public static function getConfigFile () {
    return $this->configFile;
  }

}


?>
