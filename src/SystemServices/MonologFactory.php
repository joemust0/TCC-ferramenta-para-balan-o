<?php

namespace App\SystemServices;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonologFactory{

  private static $logger;

  public static function getInstance(){
    if(self::$logger == null){
      self::$logger = new Logger('APP');
      self::$logger->pushHandler(new StreamHandler('meuslog.log', Level::Error));
      return self::$logger;
    }else{
      return self::$logger; 
    }
  }
}